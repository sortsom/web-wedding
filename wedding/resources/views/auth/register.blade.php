<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .register-box {
      max-width: 400px;
      margin: 80px auto;
      padding: 40px;
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0,0,0,0.05);
    }
    .login-logo {
      text-align: center;
      margin-bottom: 20px;
    }
    .form-control::placeholder {
      color: #ced4da;
    }
    .form-check-label a {
      text-decoration: none;
    }
    .btn-dark {
      background-color: #333;
    }
  </style>
</head>
<body>

<div class="register-box">
  <div class="login-logo">
    <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" width="40" alt="logo" />
  </div>
  <h5 class="text-center mb-1">Welcome</h5>
  <p class="text-center text-muted mb-4">Create your account below.</p>

  <form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Username</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" 
             id="name" name="name" value="{{ old('name') }}" placeholder="Enter your username" required autofocus>
      @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" 
             id="email" name="email" value="{{ old('email') }}" placeholder="@uxintace.com" required>
      @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="password" class="form-label d-flex justify-content-between">
        <span>Password</span>
        <a href="#" class="text-decoration-none">Forgot password?</a>
      </label>
      <input type="password" class="form-control @error('password') is-invalid @enderror" 
             id="password" name="password" placeholder="********" required>
      @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" 
             id="password_confirmation" name="password_confirmation" placeholder="********" required>
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="terms" required>
      <label class="form-check-label" for="terms">I accept <a href="#">Terms and Conditions</a></label>
    </div>

    <button type="submit" class="btn btn-dark w-100 mb-3">Create an account</button>

    <p class="text-center">Already have an account? <a href="{{ route('login') }}">Login</a></p>
  </form>
</div>

</body>
</html>
