<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">  

      <div class="row"><!------- row ------->
        <div class="card-login"><!------- card login ------->

          <div class="card"><!------- card ------->
            <div class="card-header">
              Login
            </div>

            <div class="card-body"><!------- card body ------->

              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="E-mail" name="email">
                </div>

                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Senha" name="senha">
                </div>

                <?php
                  if(isset($_GET['login']) && $_GET['login'] == 'erro'){
                ?>

                  <div class="alert alert-danger">
                    Usuário ou senha inválido(s)!
                  </div>
                    
                <?php } ?>

                <?php
                  if(isset($_GET['login']) && $_GET['login'] == 'erro2'){
                ?>

                  <div class="alert alert-danger">
                    Usuário não autenticado!
                  </div>
                    
                <?php } ?>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>

            </div><!------- card body ------->
          </div><!------- card ------->

        </div><!------- card login ------->
      </div><!------- row ------->

    </div>
  </body>
</html>