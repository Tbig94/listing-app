<?php
    class Pages extends Controller {

        public function __construct() {
            $this->userModel = $this->model('User');
            $this->adModel = $this->model('Advertisement');
        }

        public function userList() {
            $users = $this->userModel->getUsers();
            $data = [
                'users' => $users
            ];
            $this->view('users', $data);
        }

        public function adList() {
            $ads = $this->adModel->getAds();
            $data = [
                'title' => 'Home Page',
                'ads' => $ads
            ];
            $this->view('ads', $data);
        }

        public function index() {
            $this->view('index');
        }
    }
?>