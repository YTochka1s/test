<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/auth.css">
</head>
<body>
  <div class="container">
    <form class = "back_panel" action="login.php" method="post">
      <div class="back_us_panel">
        <div class="panel_auth">
          <div class="logo" onclick="location.href='../html/index.php';">
            <h1 id="your-id-name">SkillGenius</h1>  
          </div>
          <div class = "auth_panel">
          <?php
          if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
              require_once "database.php";
              $sql = "SELECT * FROM users WHERE email = '$email'";
              $result = mysqli_query($conn, $sql);
              $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
              if ($user) {
                  if (password_verify($password, $user["password"])) {
                      session_start();
                      $_SESSION["user"] = $user;
                      header("Location: ../php/profile.php");
                      die();
                  }else{
                      echo "<div class='danger'>
                      <h2>Неверный email или пароль.</h2>
                      </div>";
                  }
              }else{
                  echo "<div class='danger'>
                  <h2>Неправильная электронная почта</h2>
                  </div>";
              }
          }
          ?>            
            <div class="login_panel">
              <input class="input_login" type="email" name="email" placeholder="Почта">
            </div>
            <div class="password_panel">
              <input class="input_password" type="password" name="password" placeholder="Пароль">
            </div>
          </div>
          <div class="panel_button">
            <input class="button_login" type="submit" value="Войти" name="login">
            <input class="button_reset" type="submit" value="Создать профиль" formaction="../php/registration.php">
          </div>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
    