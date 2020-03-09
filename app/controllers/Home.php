<?php


class Home extends Controller {
    public function  index() {
        $model = $this->model('urls');
        $data = $model->allUserUrls($_COOKIE['login']);

        $this->view('main', $data);
    }
}