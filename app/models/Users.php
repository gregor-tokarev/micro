<?php

class Users extends Model {
    public function verified(array $data) {
        if (strlen($data['name']) < 3) return 'Логин слишком короткий';
        elseif ($this->isExist('login', $data['name'])) return 'Логин занят';
        elseif (strlen($data['pass']) < 3) return 'Слишком короткий пароль';
        else return 'OK';
    }

    public function addUser(array $data) {
        $sql = 'INSERT INTO `users`(login, email, reg_time, password) VALUES (?, ?, ?, ?)';
        $res = $this->pdo->prepare($sql);
        $res = $res->execute([$data['login'], $data['email'], time(), $data['password']]);
    }
}