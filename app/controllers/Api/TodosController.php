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
        jsonResponse($this->todo->get());
    }
}
