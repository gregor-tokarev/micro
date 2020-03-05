<?php

class Users extends Model {
    public function verified(array $data) {
        if (strlen($data['login']) <= 3) return 'Логин слишком короткий';
        elseif ($this->isExist('name', $data['login'])) return 'Логин занят';
        elseif (strlen($data['password']) <= 3) return 'Слишком короткий пароль';
        else return 'OK';
    }

    public function regUser(array $data) {
        $sql = 'INSERT INTO `users`(name, email, reg_time, password) VALUES (?, ?, ?, ?)';
        $res = $this->pdo->prepare($sql);
        $res = $res->execute([$data['login'], $data['email'], time(), $data['password']]);
    }
}