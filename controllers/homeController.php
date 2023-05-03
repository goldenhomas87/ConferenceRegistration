<?php 

    class HomeController extends Controller
    {

        public function __construct()
        {
            $this->model = new HomeModel();
		    $this->view = new View();
        }

        public function index()
        {	
            $data = $this->model->getData();
            $this->view->generate('homeView.php', 'templateView.php', $data);
        }
    }

?>