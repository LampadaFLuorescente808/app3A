<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="card shadow-sm" style="width: 100%; max-width: 400px;">
      <div class="card-body">
        <h1 class="text-center mb-4">LOGIN</h1>
        <form id="login-form">
          <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" placeholder="Digite seu CPF">
          </div>
          <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
          </div>
          <div class="d-flex justify-content-between mb-3">
            <a href="/recuperar" class="text-decoration-none">Recuperar a senha</a>
            <a href="/cadastro" class="text-decoration-none">Cadastrar</a>
          </div>
          <button type="submit" class="btn btn-primary w-100" id="btn-login">Logar</button>
        </form>
      </div>
    </div>

    <script>
      document.getElementById('login-form').addEventListener('submit', async function(event) {
        event.preventDefault();
        
        const cpf = document.getElementById('cpf').value;
        const senha = document.getElementById('senha').value;
        
        const response = await fetch('http://seu-backend.com/api/login', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({ email: cpf, password: senha })
        });
        
        const data = await response.json();
        if (response.ok) {
          localStorage.setItem('auth_token', data.token);
          alert('Login realizado com sucesso!');
          window.location.href = '/dashboard'; // Redireciona para o dashboard
        } else {
          alert('Erro: ' + (data.message || 'Verifique suas credenciais.'));
        }
      });
    </script>
  </body>
</html>