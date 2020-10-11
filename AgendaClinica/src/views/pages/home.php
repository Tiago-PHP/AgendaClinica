<?php $render('header'); ?>

<body>


<!--- Tabela pagina incial -->

        <table class="table table-sm">  
          <thead class = "thead-dark">
              <tr>
                <th scope = "col"> N° Agendamento </th>
                <th scope = "col"> Paciente </th>
                <th scope = "col"> Médico </th>
                <th scope = "col"> Procedimento </th>
                <th scope = "col"> Data  </th>
                <th scope = "col"> Horario  </th>
                <th scope = "col"> Convênio </th>
                <th scope = "col"> Status </th>
                <th scope = "col"> Observação </th>
                <th scope = "col">

<!--- Botão novo agendamento ---->
                  <a href="<?=$base;?>/novo"
                      onclick="return confirm('Preencha o Formulario corretamente')"> 
                      <button type="button" class="btn btn-primary">Novo Agendamento</button>
                  </a>

                </th>
<!-- Botao Pesquisa --->
                <th scope = "col">
                
                <form class="form-inline">
                  <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar Paciente" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
                 </th>
            </tr>
          </thead>

<!-- Listar Agendamentos na tabela --->

          <?php foreach ($agendamentos as $agendamentos): ?>
        
            <tbody>
              <tr>
                <td><?=$agendamentos['id'];?></td>
                <td><?=$agendamentos['nome_paciente'];?></td>
                <td><?=$agendamentos['nome_medico'];?></td>
                <td><?=$agendamentos['procedimento'];?></td>
                <td><?=$agendamentos['data_agendamento'];?></td>
                <td><?=$agendamentos['hora_agendamento'];?></td>
                <td><?=$agendamentos['convenio'];?></td>
                <td><?=$agendamentos['status'];?></td>
                <td><?=$agendamentos['observacao'];?></td>
                <td>

<!-- Botoes de ações Alterar /  Cancelar  e atribuito as suas respectivas-->

                  <a href="<?=$base;?>/agendamento/<?=$agendamentos['id'];?>/edit" 

                  onclick="return confirm('Deseja Realmente Alterar o Agendamento ?')">

                     <button type="button" class="btn btn-info">Alterar</button>
                  </a>

                  <a href="<?=$base;?>/agendamento/<?=$agendamentos['id'];?>/delete"
                  
                  onclick="return confirm('Deseja Realmente Cancelar o Agendamento ?')">
                    
                    <button type="button" class="btn btn-danger">Cancelar</button>
                  </a>
                </td>
              </tr>

          <?php endforeach; ?>
           
            <tbody>
            
      
			</table>
</body>

<?php $render('footer'); ?>