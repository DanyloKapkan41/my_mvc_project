<?php
require_once __DIR__ . '/../models/UserModel.php';

class MainController {
    public function home() {
        $model = new UserModel();
        $userName = $model->getUserName();
        require_once __DIR__ . '/../views/home.php';
    }
}
?>
