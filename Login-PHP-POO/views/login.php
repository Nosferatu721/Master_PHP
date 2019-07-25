<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CDNs ... -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Estilos Propios -->
  <link rel="stylesheet" href="<?= base_url ?>assets/css/estiloLogin.css">
  <title>Ingreso CuisineSoft</title>
</head>

<body>
  <div class="" id="cuerpo">
    <div class="container-fluid">
      <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image imagen"></div>
        <div class="col-md-8 col-lg-6 elForm">
          <div class="login d-flex align-items-center py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto">
                  <h3 class="login-heading mb-4">Bienvenido a CuisineSoft</h3>
                  <form action="index.php?controller=usuario&action=save" method="POST">

                    <div class="form-label-group">
                      <input type="text" id="code" name="code" class="form-control" placeholder="Codigo">
                      <label for="code">Codigo</label>
                    </div>

                    <div class="form-label-group">
                      <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                      <label for="password">Contraseña</label>
                    </div>
                    <!-- <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Recordarme</label>
                    </div> -->
                    <input type="submit" value="Logear" class="btn btn-primary btn-block">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Sweeralert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <!---->
  <!-- <script src="./js/login.js"></script> -->
</body>

</html>