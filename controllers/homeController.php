<?php 

    class HomeController extends Controller
    {
        public function index()
        {	
            $this->view->generate('homeView.php', 'templateView.php');
        }
    }

?>