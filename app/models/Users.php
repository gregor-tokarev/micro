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
        $login = $data['login'];
        $password = $data['password'];
        $query = $this->pdo->query("SELECT * FROM `users` WHERE `name` = '$login'");
        $res = $query->fetch(PDO::FETCH_ASSOC);
        if ($res['id'] == 0) echo 'Такого ползователя не существует';
        elseif( !password_verify($password, $res['password']) )echo 'Неверный пароль';
        else {
            setcookie('login', $res['name'], time() + 3600 * 24 * 2, '/');
            echo 'OK';
        }
    }

    public function regUser(array $data) {
        $sql = 'INSERT INTO `users`(name, email, reg_time, password) VALUES (?, ?, ?, ?)';
        $res = $this->pdo->prepare($sql);
        $res->execute([$data['login'], $data['email'], time(), $data['password']]);
    }
}