<?php


class User extends Controller {

    public function index($set = '') {
        $this->view('dashboard');
    }

    public function auth() {
        $this->view('auth');
    }

    public function reg() {
        $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
        $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
        $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

        $user = $this->model('users');
        if ($user->verified(['login' => $login, 'email' => $email, 'password' => $password]) != 'OK') {
            echo $user->verified(['login' => $login, 'email' => $email, 'password' => $password]);
            die();
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $user->regUser(['login' => $login, 'password' => $password, 'email' => $email]);
            setcookie('login', $login, time() + 3600 * 24 * 2, '/');
            echo 'OK';
        }

    }

    public function signOut(){
        unset($_COOKIE['login']);
        setcookie('login', '', time() - 123, '/');
    }

    public function dashboard() {
        $this->view('dashboard');
    }
}