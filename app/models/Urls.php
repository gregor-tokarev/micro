<?php


class Urls extends Model {

    public function getUrlByShort(string $short): string {
        $sql = "SELECT * FROM `urls` WHERE short_url = '$short'";
        $url = $this->pdo->query($sql);
        $url = $url->fetch(PDO::FETCH_ASSOC);

        return $url;
    }

    public function addUrl($data) {
        $shortUrl = $data['shortUrl'];
        $url = $data['url'];

        if (!$this->isExist('short_url', $shortUrl, 'urls')) return 'Сокращение уже существует';
        else {
            $sql = 'INSERT INTO `urls`(url, short_url, user) VALUES(?, ?, ?)';
            $query = $this->pdo->prepare($sql);
            $query->execute([$url, $shortUrl, $_COOKIE['login']]);
            return 'OK';
        }
    }

}