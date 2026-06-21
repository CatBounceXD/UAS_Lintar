<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account</title>
    <style>
        body { 
            background-color: #f3f2f1; /* Warna background Microsoft */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            display: flex; justify-content: center; align-items: center; 
            height: 100vh; margin: 0; 
        }
        .login-box { 
            background: white; padding: 44px; width: 100%; max-width: 440px; 
            box-shadow: 0 2px 6px rgba(0,0,0,0.2); box-sizing: border-box; 
        }
        .ms-logo { width: 108px; margin-bottom: 24px; }
        h1 { font-size: 24px; font-weight: 600; margin: 0 0 16px 0; color: #1b1b1b; }
        .input-group { margin-bottom: 16px; }
        .input-group input { 
            width: 100%; border: none; border-bottom: 1px solid #666; 
            padding: 8px 0; font-size: 15px; outline: none; 
        }
        .input-group input:focus { border-bottom: 2px solid #0067b8; }
        .create-account { font-size: 13px; margin-bottom: 32px; color: #1b1b1b; }
        .create-account a { color: #0067b8; text-decoration: none; }
        .create-account a:hover { text-decoration: underline; }
        .btn-group { display: flex; justify-content: flex-end; }
        .btn-next { 
            background-color: #0067b8; color: white; border: none; 
            padding: 10px 32px; font-size: 15px; cursor: pointer; 
        }
        .btn-next:hover { background-color: #005da6; }
        .error-msg { color: #e81123; font-size: 13px; margin-bottom: 12px; }
    </style>
</head>
<body>
    <div class="login-box">
        <svg class="ms-logo" viewBox="0 0 108 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h11.4v11.4H0V0zm12.6 0h11.4v11.4H12.6V0zM0 12.6h11.4V24H0V12.6zm12.6 0h11.4V24H12.6V12.6z" fill="#f25022"/>
            <path d="M12.6 0h11.4v11.4H12.6V0z" fill="#7fba00"/>
            <path d="M0 12.6h11.4V24H0V12.6z" fill="#00a4ef"/>
            <path d="M12.6 12.6h11.4V24H12.6V12.6z" fill="#ffb900"/>
            <text x="30" y="18" font-family="Segoe UI, sans-serif" font-size="18" font-weight="600" fill="#737373">Microsoft</text>
        </svg>

        <h1>Create account</h1>

        @if ($errors->any())
            <div class="error-msg">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input-group">
                <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required autofocus>
            </div>

            <div class="input-group">
                <input type="text" name="nim" placeholder="NIM (Nomor Induk Mahasiswa)" value="{{ old('nim') }}" required>
            </div>

            <div class="input-group">
                <input type="email" name="email" placeholder="someone@example.com" value="{{ old('email') }}" required>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Password (min. 8 characters)" required>
            </div>

            <div class="input-group" style="margin-bottom: 24px;">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            </div>
            
            <div class="create-account">
                Already have an account? <a href="{{ route('login') }}">Sign in!</a>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn-next">Next</button>
            </div>
        </form>
    </div>
</body>
</html>