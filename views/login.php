<?php session_start();
  if(!isset($_SESSION['Document'])){   //Si no existe una sesión de usuario me regresa al index
    header("locaction:index.php");
  }else if(!isset($_SESSION['Password'])){
    header("locaction:index.php");
  }
 ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
    <body>
        <section>
          <div class="form-box">
            <div class="form-value">
              <form action="principal.php" method="POST">
                <h2>Login</h2>
                
                <div class="selects">
                  <label for="">Roles</label>
                <select name="Roles">
                  <option value="Optometra">Optometra</option>
                <option value="Administrador">Administrador</option>
                </select>
                </div>   

                <div class="inputbox">
                  <ion-icon name="person-outline"></ion-icon>
                  <input name="Document" type="text" required>  
                  <label for="">Document</label>                
                </div>
                <div class="inputbox">
                  <ion-icon name="lock-closed-outline"></ion-icon>
                  <input name="Password" type="password" required>
                  <label for="">Password</label>                    
                </div>
                <div class="forget">
                  <label for=""><input type="checkbox">Remember Me <a href="#">Forgot Password?</a></label>                 
                </div>
                <button name="submit" type="submit" value="Ingresar">Log in</button>
                <div class="register">
                  <p>Don't have an account?<a href="#">Register</a></p>
                </div>
              </form>
            </div>
          </div>
        </section>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html