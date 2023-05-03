<?php 

    class FormController extends Controller
    {
        
        public function __construct()
        {
            $this->model = new FormModel();
		    $this->view = new View();
        }

        public function index()
        {	
            $this->view->generate('formView.php', 'templateView.php');
        }

        public function submit() {

            $data = array(
                'firstName' => $_POST['firstName'],
                'lastName' => $_POST['lastName'],
                'sex' => $_POST['sex'],
                'nationality' => $_POST['nationality'],
                'organizationName' => $_POST['organizationName'],
                'position' => $_POST['position'],
                'dateOfBirth' => $_POST['dateOfBirth'],
                'email' => $_POST['email']
            );

            $this->model->insertData($data);

            $message = 'Ви успішно зареєструвались!';
            $this->view->generate('formView.php', 'templateView.php', $message);
        }
    }

?>