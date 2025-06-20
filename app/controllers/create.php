<?php

class Create extends Controller {

    public function index() {
        $this->view('create/index');
    }

    public function submit() {
        session_start();

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if (empty($username) || empty($password)) {
            $_SESSION['registerError'] = "All fields are required.";
            header("Location: /create");
            exit;
        }

        require_once 'app/models/User.php';
        $user = new User();
        $user->create($username, $password);

        header("Location: /login");
        exit;
    }
}
