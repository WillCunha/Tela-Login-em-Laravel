<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WF | Gerar usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Gerar usuário</p>

                      <form action="#" enctype="multipart/form-data" method="POST" class="mx-1 mx-md-4" id="gerarCadastro">
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="field_nome" name="field_nome" class="form-control" />
                            <label class="form-label" for="field_nome">Seu nome</label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="email" id="field_email" name="field_email" class="form-control" />
                            <label class="form-label" for="field_email">Seu e-mail</label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="field_senha" name="field_senha" class="form-control" />
                            <label class="form-label" for="field_senha">Senha</label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="field_senha_nova" name="field_senha_nova" class="form-control" />
                            <label class="form-label" for="field_senha_nova">Repita sua senha</label>
                          </div>
                        </div>

                        <div class="form-check d-flex justify-content-center mb-5">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                          <label class="form-check-label" for="form2Example3">
                            Eu concordo com os <a href="#!">Termos de uso</a>
                          </label>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-primary btn-lg" id="botaoContinuar">Continuar</button>
                        </div>

                      </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid" alt="Sample image">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
        $("#gerarCadastro").submit(function(e) {
            e.preventDefault();
            const data = new FormData(this);
            $("#botaoContinuar").text("Aguarde, criando novo usuário...")
            $.ajax({
                url: '{{ route('geraCadastro') }}',
                method: 'post',
                data: data,
                cache: false,
                processData: false,
                contentType: false,
                success: function(res){
                    console.log(res);
                    $("#botaoContinuar").text("Continuar")
                }
            })
        })
      </script>
</body>
</html>
