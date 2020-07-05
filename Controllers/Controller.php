<?php 


class Controller {
    
    public $model;
    public $view;
    protected $template = "template.php";

    public function __construct()
    {
        $this->model = new Model();
        $this->view = new View();
    }

    public function view()
    {
        $data = $this->model->get_data();
        $this->view->render($this->template, $data);
    }
}