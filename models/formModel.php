<?php 

    class FormModel extends Model
    {
        public $db = null;

        public function __construct() {
            $this->db = Database::connect();
        }

        public function getData() 
        {
        }

        public function insertData($data)
        {
            $sql = "INSERT INTO participants 
                (firstName, lastName, sex, nationality, organizationName, position, dateOfBirth, email) VALUES 
                (:firstName, :lastName, :sex, :nationality, :organizationName, :position, :dateOfBirth, :email)";
            
            $this->db->prepare($sql)->execute($data);
            $this->db = null;
        }
    }

?>