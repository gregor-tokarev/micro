<?php

class Users extends Model {
    public function valid(array $data) {
        $data['email'] = isset($data['email']) ? $data['email'] : 'xxaxaa@gmail.com';
        if (strlen($data['login']) <= 3) return 'Логин слишком короткий';
        elseif ($this->isExist('name', $data['login'])) return 'Логин занят';
        elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) return 'Некорректный email';
        elseif (strlen($data['password']) <= 3) return 'Слишком короткий пароль';
        else return 'OK';
    }

    public function authUser(array $data) {

    }

    public function regUser(array $data) {
        $sql = 'INSERT INTO `users`(name, email, reg_time, password) VALUES (?, ?, ?, ?)';
        $res = $this->pdo->prepare($sql);
        $res = $res->execute([$data['login'], $data['email'], time(), $data['password']]);
    }
}