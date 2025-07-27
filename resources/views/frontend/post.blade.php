<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>iExport-Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="card shadow">
          <div class="card-header bg-primary text-white text-center">
            <h4>Add New Post</h4>
          </div>
          <div class="card-body">
            <form action="/post" method="POST" enctype="multipart/form-data">
              
              <div class="mb-3">
                <label class="form-label">Post Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter post title" required>
              </div>

              
              <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="category" class="form-select" required>
                  <option value="">Select Category</option>
                  <option value="Cinnamon">Cinnamon</option>
                  <option value="Cloves">Cloves</option>
                  <option value="Pepper">Pepper</option>
                  <option value="Tea">Tea</option>
                  <option value="Other">Other</option>
                </select>
              </div>

              
              <div class="mb-3">
                <label class="form-label">Upload Image</label>
                <input type="file" name="image" class="form-control" accept="image/*">
              </div>

              
              <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4" placeholder="Write details..." required></textarea>
              </div>

              
              <div class="mb-3">
                <label class="form-label">Price (LKR)</label>
                <input type="number" name="price" class="form-control" placeholder="Ex: 2500" required>
              </div>

              
              <div class="mb-3">
                <label class="form-label">Contact Number</label>
                <input type="tel" name="contact" class="form-control" placeholder="07XXXXXXXX" required>
              </div>

              
              <button type="submit" class="btn btn-primary w-100">Post Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
