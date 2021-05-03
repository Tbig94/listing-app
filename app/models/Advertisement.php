<?php
    class Advertisement {

        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getAds() {
            $this->db->query("
                SELECT advertisements.title, advertisements.id AS ad_id, advertisements.userid, users.id AS user_id, users.name 
	                FROM advertisements 
    	                JOIN users 
        	                ON advertisements.userid = users.id");
            $result = $this->db->resultSet();
            return $result;
        }
    }
?>