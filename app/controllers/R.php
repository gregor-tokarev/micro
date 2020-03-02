<?php


class R extends Controller {
    public function index(string $short_url = ''): void {
        $data = $this->model('url');
        $data = $data->getUrlByShort($short_url);
        print_r($data);
        $url = $data['id'] !== 0 ? $data['url'] : 'http://micro/Undefined';
        header("Location: $url");

    }
}