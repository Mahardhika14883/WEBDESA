<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lupa kata sandi</title>
  </head>
    <link rel="stylesheet" href="css/stylelogin.css">
  <body>
    <div class="Loginbox" style="border-bottom:5px solid red; border-top:2px solid red;">

      <img src="logo.png" alt="" class="avatar">
      <h2>Lupa kata sandi !!</h2>
      <form class="" action="proses_lupa.php" method="post">
        <p>Email</p>
        <input type="text" required name="username" value="" autocomplete="off" placeholder="Masukan Email Anda">
        <input type="Submit" class="Submit" name="button" value="Cek Data" style="
        border: none;
        outline: none;
        height: 40px;
        width: 100%;
        background: #fb2525;
        color: #fff;
        font-size: 18px;
        border-radius: 20px;
        "><br><br>

      </form>
      <a href="login.php">Log-in</a><br>
      <a href="tambah_akun.php">Sign-up</a>
    </div>
  </body>
</html>
