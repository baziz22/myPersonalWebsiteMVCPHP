<?php

class Hash extends Controller{
    function __construct() {
        parent::__construct();  
    }
    function index() {
        $this->view->render('pages/help');
    }
    public static function create($password) {
        return password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
        
        require 'models/help_model.php';
        $model = new Help_Model();
        print_r($model->blah());
        $this->view->blah = $model->blah();
    }
}