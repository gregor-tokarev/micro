<?php

require_once 'app/core/DB.php';

class Url {
    private $pdo = null;

    public function __construct() {
        $this->pdo = DB::getDB();
    }

    public function getUrlByShort($short) {
        $sql = "SELECT * FROM `urls` WHERE `short_url` = '$short'";
        $url = $this->pdo->query($sql);
        $url = $url->fetch(PDO::FETCH_ASSOC);

        return $url;
    }

}