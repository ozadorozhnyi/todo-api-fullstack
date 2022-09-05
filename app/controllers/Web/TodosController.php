<?php

class TodosController
{
    protected $todo; 

    public function __construct()
    {
        require_once MODELS_PATH.'/Todo.php';
        $this->todo = new Todo();
    }

    public function index()
    {
        $this->render('home', [
            'todos' => $this->todo->get()
        ]);
    }

    protected function render($page, array $data = [])
    {
        extract($data);
        require_once VIEWS_PATH.'/layouts/master.blade.php';
    }
}