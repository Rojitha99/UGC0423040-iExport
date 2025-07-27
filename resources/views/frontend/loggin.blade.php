<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>iExport-Login</title>
  <link rel="icon" type="image/png" href="{{ asset('images/ancor.jpg') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                    url('{{ asset('images/background-img.jpg') }}');">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card shadow">
          <div class="card-header text-center bg-success text-white">
            <h4>Login</h4>
          </div>
          <div class="card-body">
            <form action="/login" method="POST">
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-success w-100">Login</button>
            </form>
          </div>
          <div class="card-footer text-center">
            <small>Don't have an account? <a href="register.html">Register</a></small>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
