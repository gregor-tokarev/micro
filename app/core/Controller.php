<?php


abstract class Controller {
    protected function view(string $view): void {
        if (file_exists("public/views/$view.php")) require_once "public/views/$view.php";
    }

    protected function model($model) {
        $model = ucfirst($model);
        if (file_exists("app/models/$model.php")) {
            require_once "app/models/$model.php";
            return new $model;
        }
    }
}