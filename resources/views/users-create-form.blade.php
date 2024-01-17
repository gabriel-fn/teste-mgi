<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Teste MGI</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="container p-4">

        <div class="row justify-content-center">
            <div class="col-sm-9 col-md-7 col-lg-5 col-xl-4">

                <div id="feedbackMessage" role="alert"></div>

                <div class="card">
                    <div class="card-header">
                        <h1 class="h3 fw-normal text-center">Formulário de Registro de Usuário</h1>
                    </div>

                    <div class="card-body">
                        <form id="formUser">
                            <div class="form-floating mb-4">
                                <input id="name" type="text" name="name" class="form-control">
                                <label for="name">Nome</label>
                            </div>
                            <div class="form-floating my-4">
                                <input id="email" type="email" name="email" class="form-control">
                                <label for="email">E-mail</label>
                            </div>
                            <div class="form-floating my-4">
                                <input id="password" type="password" name="password" class="form-control">
                                <label for="password">Senha</label>
                            </div>
                            <div class="form-floating my-4">
                                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control">
                                <label for="password_confirmation">Confirmar senha</label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary" onclick="registerUser(event)">Cadastrar</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <script type="text/javascript">
            function registerUser(e) {
                e.preventDefault();
                const formUser = document.getElementById('formUser');
                const formUserData = new FormData(formUser);
                const feedbackMessage = document.getElementById('feedbackMessage')

                fetch('{{env('APP_URL')}}/api/users', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(Object.fromEntries(formUserData)),
                })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(data => {
                            throw new Error(data.message);
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    feedbackMessage.className = 'alert alert-success';
                    feedbackMessage.textContent = 'Usuário cadastrado com sucesso.';
                })
                .catch(error => {
                    feedbackMessage.className = 'alert alert-danger';
                    feedbackMessage.textContent = error.message;
                });
            }
        </script>
    </body>
</html>
