<?php $render('header'); ?>

<!--formulario para novo agendamento -->

<form method="POST" action="<?=$base;?>/novo">

    <div class="form-group">
        <label for="exampleInputEmail1">Nome Paciente: </label>
        <input type="text" class="form-control" id="text" name="namepaciente" aria-describedby="text">
        <small id="TextHelp" class="form-text text-muted">Nome do Paciente</small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Nome Medico: </label>
        <select type="text" class="form-control" id="text"name="namemedico" aria-describedby="text">
            <option value="SELECIONE"> SELECIONE </OPTION>
            <option value="JOSE ROBERTO CORREIRA"> JOSE ROBERTO CORREIRA </OPTION>
            <option value="BRASIL RAMOS CAIADO "> BRASIL RAMOS CAIADO </OPTION>
            <option value="RICARDO BRETAS"> RICARDO BRETAS </OPTION>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Procedimento</label>
        <select type="text" class="form-control" id="text"name="procedimento" aria-describedby="text">
            <option value="SELECIONE"> SELECIONE </OPTION>
            <option value="CONSULTA"> CONSULTA </OPTION>
            <option value="EXAME"> EXAME </OPTION>
        </select>
    </div>

    <div class="form-group">
        <label for="data">Data agendamento:</label>
        <input type="date" class="form-control" id="data"name="dateagendamento" aria-describedby="text">
        <small id="TextHelp" class="form-text text-muted">Data agendamento</small>
    </div>

    <div class="form-group">
        <label for="hora">Horário: </label>
        <input type="time" class="form-control" id="horaa"name="timeagendamento" aria-describedby="text">
        <small id="TextHelp" class="form-text text-muted">Horário</small>
        
    </div>    

    <div class="form-group">
        <label for="exampleInputEmail1">Convênio: </label>
        <select type="text" class="form-control" id="text"name="convenio" aria-describedby="text">
            <option value="SELECIONE"> SELECIONE </OPTION>
            <option value="UNIMED CENTRAL "> UNIMED CENTRAL </OPTION>
            <option value="BRADESCO SAUDE"> BRADESCO SAUDE </OPTION>
            <option value="AMIL"> AMIL </OPTION>
            <option value="PARTICULAR"> PARTICULAR </OPTION>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Status </label>
        <select type="text" class="form-control" id="text"name="status" aria-describedby="text">
            <option value="SELECIONE"> SELECIONE </OPTION>
            <option value="PACIENTE NA RECEPÇAO "> AGENDADO </OPTION>
            <option value="PACIENTE NA RECEPÇAO "> PACIENTE NA RECEPÇAO </OPTION>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Observacao: </label>
        <input type="text" class="form-control" id="text" name="observacao" aria-describedby="text">
        <small id="TextHelp" class="form-text text-muted">Consulta, Exames</small>
    </div>

    
    
        <button type="submit" class="btn btn-primary">Agendar</button>

        <a href="<?=$base;?>/"
                      onclick="return confirm('Deseja retornar a pagina sem fazer as alterações ?')"> 
                      <button type="button" class="btn btn-primary">Voltar</button>
        </a>

</body>

<?php $render('footer'); ?>


