<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chat Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      height: 100vh;
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), url('{{ asset('images/background-img.jpg') }}');
      background-size: cover;
    }
    .card {
      width: 350px;
    }
    .chat-icon {
      font-size: 1.2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }
  </style>
</head>
<body>
  <div class="d-flex justify-content-center align-items-center h-100">
    <div class="card shadow text-center">
      <div class="card-header bg-success text-white">
        <h5 class="mb-0">Chat With Us</h5>
      </div>
      <div class="card-body">
        <a href="https://wa.me/94712345678" target="_blank" class="btn btn-success w-100 mb-2 chat-icon">
          <img src="https://img.icons8.com/color/24/000000/whatsapp.png"/> WhatsApp
        </a>
        <a href="https://m.me/yourpage" target="_blank" class="btn btn-primary w-100 mb-2 chat-icon">
          <img src="https://img.icons8.com/color/24/000000/facebook-messenger--v1.png"/> Messenger
        </a>
        <a href="https://t.me/yourusername" target="_blank" class="btn btn-info w-100 mb-2 text-white chat-icon">
          <img src="https://img.icons8.com/color/24/000000/telegram-app.png"/> Telegram
        </a>
        <a href="https://x.com/yourhandle" target="_blank" class="btn btn-dark w-100 chat-icon">
          <img src="https://img.icons8.com/ios-filled/24/ffffff/twitterx.png"/> X / Twitter
        </a>
      </div>
    </div>
  </div>
</body>
</html>
