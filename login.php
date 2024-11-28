<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - SafeTogether</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <header>
    <h1>SafeTogether</h1>
  </header>

  <main class="form-container">
    <h2>Login</h2>
    <form action="loginvalidate.php" method="post">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <button type="submit" name="login" class="btn login">Login</button>
    </form>
    <p>Don’t have an account? <a href="register.php">Sign Up</a></p>
    
  </main>

  <footer>
    <p>© 2024 SafeTogether. All rights reserved.</p>
    
  </footer>
</body>

            </html>
