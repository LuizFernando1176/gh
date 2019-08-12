<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--CSS's-->
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <!--JS's-->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/slim.min.js" type="text/javascript"></script>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/materialize.js" type="text/javascript"></script>
        <script src="js/materialize.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </head>
    <body>
        <nav class="cornav">
            <div class="nav-wrapper" style="background-color: #0d47a1 !important;">
      <a href="#!" class="">Pousada Exemplo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="">Logout</a></li>
      </ul>
    </div>
  </nav>
        
           <div class="container-fluid" >
                 <div class="sidenav-fixed " style="width:17vw">
            <ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>
        
            
        </div>
            <center>
                <div class="card dlogin" style="font-family: 'Asar', regular !important; " >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" style="font-family: 'Asar', regular !important;">Cadastro de Usuario| Sistema de Hoteis</h4>	
                        </div>
                        <div class="modal-body">
                            <form action="/examples/actions/confirmation.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="input-field" name="user" placeholder="Usuario" required="required">		
                                </div>
                                <div class="form-group">
                                    <input type="email" class="input-field" name="email" placeholder="Email" required="required">		
                                </div>
                                <div class="form-group">
                                    <input type="password" class="input-field" name="senha" placeholder="Senha" required="required">	
                                </div> 
                                <div class="input-field form-group">
                                    <select>
                                        <option value="" disabled selected>Escolha o Nivel</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Atendente</option>
                                    </select>
                                    <label>Nivel</label>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn tooltipped btn-outline-success " data-tooltip="Cadastrar Usuario">Cadastrar</button>
                                    <button type="reset" class="btn  tooltipped btn-outline-danger "data-position="top" data-tooltip="Apagar Formulario">Resetar</button>
                                </div>
                            </form>
                        </div>
                        <!--                        <div class="modal-footer">
                                                    <a href="#">Esquecue a Senha?</a>
                                                </div>-->
                    </div>
                </div>
            </center>
        </div>
        <?php
        // put your code here
        ?>
        <nav class="navbar fixed-bottom navbar-light bg-dark">
  <a class="navbar-brand" href="#">Fixo na parte inferior</a>
</nav>
    </body>
</html>
