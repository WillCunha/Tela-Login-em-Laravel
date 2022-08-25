<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WF | Painel Administrativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        .h-custom {
            height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form id="entrarPainel" action="#" enctype="multipart/form-data" method="post">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                    <p class="lead fw-normal mb-0 me-3">Entrar no painel</p>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="emailLogin" class="form-control form-control-lg"
                    placeholder="email@email.com.br" name="emailLogin" />
                  <label class="form-label" for="emailLogin">Endereço de e-mail</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="passLogin" class="form-control form-control-lg"
                    placeholder="*******"  name="passLogin"/>
                  <label class="form-label" for="passLogin">Senha</label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Lembrar-me
                    </label>
                  </div>
                  <a href="#!" class="text-body">Esqueci a senha</a>
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;" id="btnEntrar">Entrar</button>
                </div>

              </form>
            </div>
          </div>
        </div>
        <div
          class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
            Copyright © 2022. WF Todos os direitos reservados.
          </div>
          <!-- Copyright -->

          <!-- Right -->
          <div>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <!-- Right -->
        </div>
      </section>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
        $("#entrarPainel").submit(function(e) {
            e.preventDefault();
            const dadosL = new FormData(this);
            $("#btnEntrar").text("Aguarde...");
            $.ajax({
                url: '{{ route('entrar') }}',
                method: 'post',
                data: dadosL,
                cache: false,
                contentType: false,
                processData: false,
                success: function(res) {
                    console.log(res);
                    $("#btnEntrar").text("Entrar");
                }
            })
        })
      </script>
    </body>
</html>
