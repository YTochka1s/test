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
    <div class = "back_panel" action="login.php" method="post">
      <div class="back_us_panel">
        <div class="panel_auth">
          <div class="logo" onclick="location.href='../html/index.php';">
            <h1 id="your-id-name">SkillGenius</h1>  
          </div>
          <?php
          if (isset($_POST["submit"])) {
            $fullName = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();
           
            if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
              array_push($errors,"<div class='danger'>
              <h2>Все поля обязательны для заполнения.</h2>
              </div>");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              array_push($errors, "<div class='danger'>
              <h2>Email не является допустимым.</h2>
              </div>");
            }
            if (strlen($password)<8) {
              array_push($errors,"<div class='danger'>
              <h2>Пароль должен быть длиной не менее 8 символов.</h2>
              </div>");
            }
            if ($password!==$passwordRepeat) {
              array_push($errors,"<div class='danger'>
              <h2>Пароли не совпадают.</h2>
              </div>");
            }
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0) {
              array_push($errors,"<div class='danger'>
              <h2>Электронная почта уже существует!</h2>
              </div>");
            }
            if (count($errors)>0) {
              foreach ($errors as  $error) {
                  echo "<div class='alert alert-danger'>$error</div>";
              }
             }else{

              $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
              $stmt = mysqli_stmt_init($conn);
              $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
              if ($prepareStmt) {
                  mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                  mysqli_stmt_execute($stmt);
                  echo "<div class='no_danger'>
                  <h2>Вы успешно зарегистрировались</h2>
                  </div>";
              }else{
                  die("<div class='danger'>
                  <h2>Что-то пошло не так</h2>
                  </div>");
              }
             }
          

          }
          ?>
          <div class = "auth_panel">
            <form action="registration.php" method="post">    
              <div class="login_panel">
                <input class="input_login" type="text" name="fullname" placeholder="Логин">
              </div>
              <div class="login_panel">
                <input class="input_login" type="email" name="email" placeholder="Почта">
              </div>
              <div class="login_panel">
              <input class="input_password" type="password" name="password" placeholder="Пароль">
              </div>
              <div class="password_panel">
                <input class="input_password" type="password" name="repeat_password" placeholder="Повторите пароль">
              </div>
              <div class="panel_button">
                <input class="button_login" type="submit" value="Зарегистрироваться" name="submit">
                <input class="button_reset" type="submit" value="Уже есть аккаунт? Войдите" formaction="../php/login.php">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
    