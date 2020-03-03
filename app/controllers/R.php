<?php


class R extends Controller {
    public function index($short_url = ''){
        $data = $this->model('url');
        $data = $data->getUrlByShort($short_url);
        $url = $data['id'] != 0 ? $data['url'] : 'http://micro/Undefined';
        header("Location: $url");

    }
}