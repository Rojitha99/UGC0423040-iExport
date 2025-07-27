<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>iExport-Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                    url('{{ asset('images/background-img.jpg') }}');">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-header text-center bg-success text-white">
            <h4>Register</h4>
          </div>
          <div class="card-body">
            <form action="/register" method="POST" enctype="multipart/form-data">
              <!-- Full Name -->
              <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>

              <!-- NIC Number -->
              <div class="mb-3">
                <label class="form-label">NIC Number</label>
                <input type="text" name="nic" class="form-control" required>
              </div>

              <!-- User Type -->
              <div class="mb-3">
                <label class="form-label">What type of user are you?</label>
                <select name="user_type" class="form-select" required>
                  <option value="">Select type</option>
                  <option value="buyer">Buyer</option>
                  <option value="seller">Seller</option>
                  <option value="broker">Broker</option>
                  <option value="investor">Investor</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <!-- Profile Image -->
              <div class="mb-3">
                <label class="form-label">Profile Image</label>
                <input type="file" name="profile_image" class="form-control" accept="image/*">
              </div>

              <!-- Contact Number -->
              <div class="mb-3">
                <label class="form-label">Contact Number</label>
                <input type="tel" name="contact_number" class="form-control" required>
              </div>

              <!-- Email -->
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" required>
              </div>

              <!-- Address -->
              <div class="mb-3">
                <label class="form-label">Address</label>
                <textarea name="address" class="form-control" rows="2" required></textarea>
              </div>

              <!-- Password -->
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>

              <!-- Confirm Password -->
              <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
              </div>

              <button type="submit" class="btn btn-success w-100">Register</button>
            </form>
          </div>
          <div class="card-footer text-center">
            <small>Already have an account? <a href="/login">Login</a></small>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
