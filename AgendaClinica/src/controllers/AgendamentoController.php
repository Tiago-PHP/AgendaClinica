<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Agendamento;


class AgendamentoController extends Controller {


  /** função para criar novo agendamentos*/

    public function create() {
        $this->render('Novoagendamento');
    }
/** ação para novo agendamento dados recebidos pelo formnulario*/

    public function createAction() {
      $nome_paciente = filter_input(INPUT_POST, 'namepaciente');
      $nome_medico = filter_input(INPUT_POST, 'namemedico');
      $procedimento = filter_input(INPUT_POST, 'procedimento');
      $data_agendamento = filter_input(INPUT_POST, 'dateagendamento');
      $hora_agendamento = filter_input(INPUT_POST, 'timeagendamento');
      $convenio = filter_input(INPUT_POST, 'convenio');
      $status = filter_input(INPUT_POST, 'status');
      $observacao = filter_input(INPUT_POST, 'observacao');
    
/** Verifica se a data desejada, horario, e medico estão disponiveis, caso positivo prossegue com o insert dos dados*/
      
      if($data_agendamento && $hora_agendamento && $nome_medico) {
        $data = Agendamento::select()->where('data_agendamento',$data_agendamento)->execute();
        $data = Agendamento::select()->where('hora_agendamento',$hora_agendamento)->execute();
        $data = Agendamento::select()->where('nome_medico',$nome_medico)->execute();
      if(count($data) === 0) {
        Agendamento::insert([
            'nome_paciente' => $nome_paciente,
            'nome_medico' => $nome_medico,
            'procedimento' => $procedimento,
            'hora_agendamento' => $hora_agendamento,
            'data_agendamento' => $data_agendamento,
            'hora_agendamento' => $hora_agendamento,
            'convenio' => $convenio,
            'status' => $status,
            'observacao' => $observacao
        ])->execute();
        
          $this->redirect('/');
        }

        $this->redirect ('/novo');
      }
       
    }
    
/** função para editar os a gendamentos*/

    public function edit($args) {
      $agendamentos = Agendamento::select()->find($args['id']);
        $this->render('Editagendamento',[
          'agendamentos' => $agendamentos
        ]);
    }

/** Action da função de editar */

    public function editAction($args) {
      $nome_paciente = filter_input(INPUT_POST, 'namepaciente');
      $nome_medico = filter_input(INPUT_POST, 'namemedico');
      $procedimento = filter_input(INPUT_POST, 'procedimento');
      $data_agendamento = filter_input(INPUT_POST, 'dateagendamento');
      $hora_agendamento = filter_input(INPUT_POST, 'timeagendamento');
      $convenio = filter_input(INPUT_POST, 'convenio');
      $status = filter_input(INPUT_POST, 'status');
      $observacao = filter_input(INPUT_POST, 'observacao');
   
     if($nome_paciente && $convenio) {

        Agendamento::update()
          ->set('nome_paciente', $nome_paciente)
          ->set('nome_medico', $nome_medico)
          ->set('procedimento', $procedimento)
          ->set('data_agendamento', $data_agendamento)
          ->set('hora_agendamento', $hora_agendamento)
          ->set('convenio', $convenio)
          ->set('status', $status)
          ->set('observacao', $observacao)
          ->where('id', $args['id'])
        ->execute();
      
        $this->redirect('/');

     }
        $this->redirect('/agendamento/'.$args['id'].'/edit');
    }

/** function deletar/cancelar um agendamento */

    public function delete($args) {
      Agendamento::delete()
      ->where('id', $args['id'])->execute();
      $this->redirect('/');

    }
}