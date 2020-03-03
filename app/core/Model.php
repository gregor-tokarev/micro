<?php


abstract class Model {
    protected $pdo = null;

    public function __construct() {
        $this->pdo = DB::getDB();
    }

    protected function getAll($table) {
        $res = $this->pdo->query("SELECT * FROM `$table`");
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    protected function find($table, $id) {
        $res = $this->pdo->prepare("SELECT * FROM `$table` WHERE `id` = ? LIMIT 1");
        $res = $res->execute([$id]);
        return $res->fetch(PDO::FETCH_ASSOC);
    }

    protected function isExist($field, $value) {
        $res = $this->pdo->prepare("SELECT * FROM `users` WHERE `$field` = ? LIMIT 1");
        $res = $res->execute([$value]);
        return $res['id'] != 0;
    }
}