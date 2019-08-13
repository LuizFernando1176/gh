
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Sistema de Gerenciamento de Hoteis</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes"> 
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /><!-- Chamar o css do bootstrep -->
        <link href="css/font-awesome.css" rel="stylesheet"><!-- chamar o css do font -->
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/><!-- Meu estilo propio -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    </head>
    <body>
        <div class="navbar navbar-fixed-top bg-dark">
            <div class="navbar-inner">


                <a href="login.php"> Sistema de Gerenciamento de Hoteis</a> 

                <!-- /container -->
            </div> <!-- /navbar-inner -->
        </div> <!-- /navbar -->
        <div class="container">
            <div class="card clearfix text-center" style="padding: 2%;top:4em;">
                <form id="formularioDeLogin">
                    <h1>Acesso ao Sistema</h1>	
                    <center>
                        <div class="login-fields">
                            <p>Por favor, preencha com seus dados de acesso.</p>
                            <input type="hidden" id="acao" name="acao" value="entrar" placeholder="Usuário" />
                            <input type="hidden" id="pagina" name="pagina" value="usuario" placeholder="Usuário" />
                            <div class="field">

                                <input type="text" id="cpf" name="cpf" value="" placeholder="Usuário" class="input-field" />
                            </div> <!-- /field -->
                            <div class="field">

                                <input type="password" id="senha" name="senha" onsubmit="alert();" value="" placeholder="Senha" class="input-field"/>
                            </div> <!-- /password -->
                            <div id="erroLogin" style="visibility: hidden" class="alert-danger">
                                <strong>Erro!</strong> Login ou senha inválido.
                            </div>
                        </div> <!-- /login-fields -->
                    </center>
                </form>
                <div class="login-actions">
                    <div class="login-extra">
                    </div> <!-- /login-extra -->
                    <button class=" btn btn-outline-success btn-large" >Entrar</button>
                    <a href="#">Resetar senha</a>
                </div> <!-- .actions -->
            </div> <!-- /content -->
        </div> <!-- /account-container -->
        <script src="js/jquery-1.7.2.min.js"></script> <!-- chamar o Jquerry -->
        <script src="js/bootstrap.js"></script> <!-- chamar o java do Bootstrep -->
    </body>
</html>
