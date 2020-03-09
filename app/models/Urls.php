<?php


class Urls extends Model {

    public function getUrlByShort(string $short): array {
        $sql = "SELECT * FROM `urls` WHERE short_url = '$short'";
        $url = $this->pdo->query($sql);
        $url = $url->fetch(PDO::FETCH_ASSOC);

        return $url;
    }

    public function allUserUrls($user) {
        $sql = "SELECT * FROM `urls` WHERE `user` = '$user'";
        $res = $this->pdo->query($sql);
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function addUrl($data) {
        $shortUrl = $data['shortUrl'];
        $url = $data['url'];
        if ($this->isExist('short_url', $shortUrl, 'urls')) return json_encode([
            'code' => 'Сокращение уже существует'
        ]);
        else {
            $sql = 'INSERT INTO `urls`(url, short_url, user) VALUES(?, ?, ?)';
            $query = $this->pdo->prepare($sql);
            $query->execute([$url, $shortUrl, $_COOKIE['login']]);

            $query = $this->pdo->query("SELECT * FROM `urls` WHERE `short_url` = '$shortUrl'");
            $id = $query->fetch(PDO::FETCH_ASSOC);
            return json_encode($id);
        }
    }

    public function deleteUrl($id) {
        $sql = 'DELETE FROM `urls` WHERE `id` = ?';
        $query = $this->pdo->prepare($sql);
        $query->execute([$id]);
    }

}