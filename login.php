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
        <div class="container" >
            <center>
                <div class="card dlogin" style="font-family: 'Asar', regular !important;" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="avatar">
                                <img src="img/avatar.png" width="65px" height="57px" alt="Avatar">
                            </div>				
                            <h4 class="modal-title" style="font-family: 'Asar', regular !important;">Login | Sistema de Hoteis</h4>	
                        </div>
                        <div class="modal-body">
                            <form action="/examples/actions/confirmation.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="user" placeholder="Usuario" required="required">		
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="senha" placeholder="Senha" required="required">	
                                </div>        
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-success ">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="#">Esquecue a Senha?</a>
                        </div>
                    </div>
                </div>
            </center>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
