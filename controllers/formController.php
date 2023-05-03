<?php 

    class FormController extends Controller
    {
        public function index()
        {	
            $this->view->generate('formView.php', 'templateView.php');
        }

        public function submit() {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $sex = $_POST['sex'];
            $nationality = $_POST['nationality'];
            $organizationName = $_POST['organizationName'];
            $position = $_POST['position'];
            $dateOfBirth = $_POST['dateOfBirth'];
            $email = $_POST['email'];
        }
    }

?>