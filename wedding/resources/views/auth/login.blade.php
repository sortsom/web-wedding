<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .login-box {
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
  </style>
</head>
<body>

<div class="login-box">
  <div class="login-logo">
    <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" width="40" alt="logo" />
  </div>
  <h5 class="text-center mb-4">Welcome Back</h5>
  <p class="text-center text-muted mb-4">Please enter your details to login.</p>

  {{-- Display validation errors --}}
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email"
             class="form-control @error('email') is-invalid @enderror"
             id="email" name="email"
             placeholder="@uxintace.com"
             value="{{ old('email') }}" required autofocus>
      @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="password" class="form-label d-flex justify-content-between">
        <span>Password</span>
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot password?</a>
        @endif
      </label>
      <input type="password"
             class="form-control @error('password') is-invalid @enderror"
             id="password" name="password"
             placeholder="********" required>
      @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
      <label class="form-check-label" for="remember">Remember me</label>
    </div>

    <button type="submit" class="btn btn-dark w-100">Login</button>
  </form>
</div>

</body>
</html>
