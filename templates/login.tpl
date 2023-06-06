<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./css/styles.css" rel="stylesheet" type="text/css"/>
    <title>Login</title>
  </head>
  <body>
    <h1 id = "title-login">Login</h1>

    <div id="container-form">
        <p id = "text-login">Ingresa tu nombre de usuario y contraseña en los campos correspondientes a continuación. 
            Si aún no tienes una cuenta con nosotros, puedes registrarte para disfrutar de todos nuestros servicios y beneficios.
        </p>

        <h2>Iniciar Sesión</h2>
  
        <form id = "form-login" action="/login" method="POST">
          <label for="user">Usuario</label>
          <input type="text" id="input-user" name="user" required>
          
          <label for="password">Contraseña</label>
          <input type="password" id="input-password" name="password" required>
          
          <input id = "button-submit" type="submit" value="Iniciar Sesión">
        </form>
         
    </div>
  </body>
</html>