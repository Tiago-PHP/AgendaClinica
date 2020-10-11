<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Agendamento;

class HomeController extends Controller {

    public function index() {
        
        $agendamentos = Agendamento::select()->execute();

        $this->render('home', [
            'agendamentos' => $agendamentos
        ]);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}