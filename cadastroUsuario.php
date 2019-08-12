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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

        <div class="row Pad_top">
            
            <div class="container">
                <ul id="slide-out" class="side-nav ">
                    <li><a class="waves-effect" href="#!"><i class="material-icons">code</i>HTML5</a></li>
                    <li><a class="waves-effect" href="#!"><i class="material-icons">flare</i>CSS3</a></li>
                    <li><a class="waves-effect" href="#!"><i class="material-icons">desktop_mac</i>Bootstrap 3</a></li>
                    <li><a class="waves-effect" href="#!"><i class="material-icons">laptop_mac</i>Bootstrap 4</a></li>
                    <li><a class="waves-effect" href="#!"><i class="material-icons">dvr</i>Materialize CSS</a></li>
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                
                <div class="container-fluid">
                    <center>
                        <div class="card cards" style="font-family: 'Asar', regular !important; " >
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

            </div>

        </div>
    </div>






    <script type="text/javascript">
        $('select').material_select();//inicial Selects
        $('.tooltipped').tooltip();//inicia o tooltip
        $(".button-collapse").sideNav();//inicia o sidbar
        $(".button-collapse").sideNav();//inicia o sidbar
    </script>

    <?php
    // put your code here
    ?>
    <nav class="navbar fixed-bottom navbar-light bg-dark">
        <a class="navbar-brand" href="#">Fixo na parte inferior</a>
    </nav>
</body>
</html>