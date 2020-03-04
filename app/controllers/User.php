<?php


class User extends Controller {

    public function auth() {
        $this->view('auth');
    }

    public function reg() {
        $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
        $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
        $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

        $password = password_hash($password);
        $user = $this->model('user');
        if ($user->verified(['login' => $login, 'email' => $email, 'password' => $password]) != 'OK')
            echo $user->verified(['login' => $login, 'email' => $email, 'password' => $password]);
        else {
            $user->regUser(['login' => $login, 'password' => $password, 'email' => $email]);
            echo 'OK';
            header('Location: /user/dashboard');
        }

    }
}