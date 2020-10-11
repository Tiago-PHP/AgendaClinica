<?php $render('header'); ?>

<body background="black">
<form method="POST" action="<?=$base;?>/agendamento/<?=$agendamentos['id'];?>/edit">

    <div class="form-group">
        <label for="exampleInputEmail1">Nome Paciente</label>
        <input type="text" class="form-control" id="text" name="namepaciente" aria-describedby="text" value="<?=$agendamentos['nome_paciente'];?>">
        <small id="TextHelp" class="form-text text-muted">Nome do Paciente</small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Nome Medico: </label>
        <select type="text" class="form-control" id="text"name="namemedico" aria-describedby="text" value="<?=$agendamentos['nome_medico'];?>">
            <option value="SELECIONE"> <?=$agendamentos['nome_medico'];?> </OPTION>
            <option value="JOSE ROBERTO CORREIRA"> JOSE ROBERTO CORREIRA </OPTION>
            <option value="BRASIL RAMOS CAIADO "> BRASIL RAMOS CAIADO </OPTION>
            <option value="RICARDO BRETAS"> RICARDO BRETAS </OPTION>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Procedimento</label>
        <select type="text" class="form-control" id="text"name="procedimento" aria-describedby="text"value="<?=$agendamentos['procedimento'];?>">
            <option value="SELECIONE"> <?=$agendamentos['procedimento'];?> </OPTION>
            <option value="CONSULTA"> CONSULTA </OPTION>
            <option value="EXAME"> EXAME </OPTION>
        </select>
    </div>

    <div class="form-group">
        <label for="data">Data agendamento:</label>
        <input type="date" class="form-control" id="data"name="dateagendamento" aria-describedby="text"value="<?=$agendamentos['data_agendamento'];?>">
        <small id="TextHelp" class="form-text text-muted">Data agendamento</small>
    </div>

    <div class="form-group">
        <label for="hora">Horário: </label>
        <input type="time" class="form-control" id="horaa"name="timeagendamento" aria-describedby="text"value="<?=$agendamentos['hora_agendamento'];?>">
        <small id="TextHelp" class="form-text text-muted">Horário</small>
        <br>
    </div>    


    <div class="form-group">
        <label for="exampleInputEmail1">Convênio: </label>
        <select type="text" class="form-control" id="text"name="convenio" aria-describedby="text"value="<?=$agendamentos['convenio'];?>">
            <option value="SELECIONE"> <?=$agendamentos['convenio'];?> </OPTION>
            <option value="UNIMED CENTRAL"> UNIMED CENTRAL </OPTION>
            <option value="BRADESCO SAUDE"> BRADESCO SAUDE </OPTION>
            <option value="AMI"> AMIL </OPTION>
            <option value="PARTICULAR"> PARTICULAR </OPTION>
        </select>

        <div class="form-group">
        <label for="exampleInputEmail1">STATUS </label>
        <select type="text" class="form-control" id="text"name="status" aria-describedby="text"value="<?=$agendamentos['status'];?>">
            <<option value="SELECIONE"> <?=$agendamentos['status'];?> </OPTION>
            <option value="PACIENTE NA RECEPÇAOL "> PACIENTE NA RECEPÇAO </OPTION>
            <option value="EM ATENDIMENTO"> EM ATENDIMENTO </OPTION>
            <option value="ATENDIDO"> ATENDIDO</OPTION>
            <option value="PACIENTE FALTOU"> PACIENTE FALTOU </OPTION>
            <option value="REAGENDAMENTO"> REAGENDAMENTO</OPTION>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Observaçao</label>
        <input type="text" class="form-control" id="text" name="observacao" aria-describedby="text" value="<?=$agendamentos['observacao'];?>">
        <small id="TextHelp" class="form-text text-muted">Consulta, Exames</small>
    </div>

    
    
        <button type="submit" class="btn btn-primary">Salvar</button>

        <a href="<?=$base;?>/"
                      onclick="return confirm('Deseja retornar a pagina sem fazer as alterações ?')"> 
                      <button type="button" class="btn btn-primary">Voltar</button>
        </a>

</body>

<?php $render('footer'); ?>