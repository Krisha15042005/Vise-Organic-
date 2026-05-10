<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Vise Organic</title>
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background: linear-gradient(135deg, #6ba86b 0%, #5a9a5a 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .login-container { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3); width: 100%; max-width: 420px; }
        .login-header { text-align: center; margin-bottom: 30px; }
        .login-header h1 { color: #6ba86b; font-size: 30px; font-weight: 700; margin-bottom: 10px; }
        .login-header p { color: #6c757d; }
        .btn-login { background: linear-gradient(135deg, #6ba86b 0%, #5a9a5a 100%); border: none; padding: 12px; font-weight: 600; border-radius: 10px; transition: 0.3s; }
        .btn-login:hover { transform: translateY(-2px); box-shadow: 0 5px 20px rgba(107, 168, 107, 0.4); }
        .form-control { border-radius: 10px; padding: 14px; }
        .form-control:focus { border-color: #6ba86b; box-shadow: 0 0 0 0.2rem rgba(107, 168, 107, 0.25); }
        .alert { margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <i class="fas fa-leaf fa-3x" style="color: #667eea;"></i>
            <h1>Vise Organic Admin</h1>
            <p>Login to manage products and contacts</p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" value="{{ old('email', 'admin@example.com') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-login btn-lg text-white">
                    <i class="fas fa-sign-in-alt me-2"></i>Login
                </button>
            </div>
        </form>

        <div class="text-center mt-4 text-muted" style="font-size: 14px;">
            <p>Use demo admin credentials:</p>
            <strong>Email:</strong> admin@example.com<br>
            <strong>Password:</strong> password
        </div>
    </div>
</body>
</html>
