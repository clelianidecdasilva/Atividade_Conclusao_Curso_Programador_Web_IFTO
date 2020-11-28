<?php

class Controller {

        // Load data to a specific view
    protected function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }
}

?>