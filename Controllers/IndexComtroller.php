<?php



class IndexController extends Controller {

    private $template = '/layouts/template.php';

    public function __construct(){
        $this->model = new Model();
        $this->view = new View();
    }

    public function index()
    {
        $data = $this->model->get_data();
        $this->view->render($this->template, $data);
    }
    
}