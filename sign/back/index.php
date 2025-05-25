<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login & Sign Up</title>
  <link rel="stylesheet" href="stylesign.css" />
</head>
<body>

  <div class="container">
    <div class="tab">
      <button class="tablinks active" onclick="openTab(event, 'login')">Login</button>
      <button class="tablinks" onclick="openTab(event, 'signup')">Sign Up</button>
    </div>

    <div id="login" class="tabcontent active">
      <h2>Login</h2>
      <form action="login.php" method="post">
        <input name="email" type="email" placeholder="Email"  />
        <input name="password" type="password" placeholder="Password"  />
        <button type="submit">Login</button>
      </form>
    </div>

    <div id="signup" class="tabcontent">
      <h2>Sign Up</h2>
      <form action="register.php" method="post">
        <input type="text" name="fullname" placeholder="Full Name" required />
        <input type="email" name="email" placeholder="Email"  required/>
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Sign Up</button>
      </form>
    </div>
  </div>

  <script src="scriptsign.js"></script>
</body>
</html>
