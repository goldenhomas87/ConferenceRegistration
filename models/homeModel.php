<?php 

    class HomeModel extends Model
    {
        public $db = null;

        public function __construct() {
            $this->db = Database::connect();
        }

        public function getData()
        { 
            $sql = "SELECT * FROM participants";
            $result = $this->db->query($sql)->fetchAll();
            
            $this->db = null;

            return $result;
        }

        public function insertData($data) 
        {
        }
    }

?>