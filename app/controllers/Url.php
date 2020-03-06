<?php


class Url extends Controller {
    public function addUrl() {
        $url = trim(filter_var($_POST['url'], FILTER_SANITIZE_STRING));
        $shortUrl = trim(filter_var($_POST['shortUrl'], FILTER_SANITIZE_STRING));

        $urls = $this->model('urls');
        echo $urls->addUrl(['url' => $url, 'shortUrl' => $shortUrl]);
    }
}