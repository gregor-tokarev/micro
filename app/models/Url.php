<?php


class Url extends Model {

    public function getUrlByShort(string $short) {
        $sql = "SELECT * FROM `urls` WHERE short_url = '$short'";
        $url = $this->pdo->query($sql);
        $url = $url->fetch(PDO::FETCH_ASSOC);

        return $url;
    }

}