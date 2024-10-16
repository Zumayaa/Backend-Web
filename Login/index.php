<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #e0e0e0;
    }

    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-card {
      display: flex;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 900px;
    }

    .login-image {
      width: 50%;
      background: url('https://impulsapopular.com/wp-content/uploads/2020/03/4695-Las-seis-fases-utilizadas-por-McDonald´s-para-revitalizar-la-marca-1.jpg') no-repeat center center;
      background-size: cover;
    }

    .login-form {
      padding: 40px;
      width: 50%;
    }

    .login-form img {
      width: 50px;
      display: block;
      margin: 0 auto 20px auto;
    }

    .btn-custom {
      background-color: #333;
      color: white;
    }
  </style>
</head>

<body>

  <div class="container login-container">
    <div class="login-card">
      <div class="login-image"></div>
      <div class="login-form">
        <img src="https://1000marcas.net/wp-content/uploads/2019/11/McDonalds-logo.png" alt="logo">
        <h3 class="text-end mb-4">Sign into your account</h3>
        <form rm id="loginForm" method="POST" action="Auth.php">
          <input type="hidden" name="action" value="login">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" aria-label="email" required>
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" type="password" required>
          </div>
          <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="checkMeOut">
            <label class="form-check-label" for="checkMeOut">Check me out</label>
          </div>
          <button type="submit" class="btn btn-custom btn-block">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>