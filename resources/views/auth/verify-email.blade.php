<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
    <style>
        body { background-color: #f3f2f1; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-box { background: white; padding: 44px; width: 100%; max-width: 440px; box-shadow: 0 2px 6px rgba(0,0,0,0.2); box-sizing: border-box; }
        .ms-logo { width: 108px; margin-bottom: 24px; }
        h1 { font-size: 24px; font-weight: 600; margin: 0 0 16px 0; color: #1b1b1b; }
        .info-text { font-size: 14px; margin-bottom: 20px; color: #1b1b1b; line-height: 1.5; }
        .btn-group { display: flex; justify-content: space-between; align-items: center; margin-top: 24px; }
        .btn-next { background-color: #0067b8; color: white; border: none; padding: 10px 24px; font-size: 14px; cursor: pointer; }
        .btn-next:hover { background-color: #005da6; }
        .btn-logout { background: none; border: none; color: #0067b8; font-size: 14px; cursor: pointer; text-decoration: none; padding: 0; }
        .btn-logout:hover { text-decoration: underline; }
        .success-msg { color: #107c10; font-size: 13px; margin-bottom: 12px; }
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

        <h1>Verify Email</h1>
        
        <div class="info-text">
            Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="success-msg">A new verification link has been sent to your email address.</div>
        @endif

        <div class="btn-group">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn-next">Resend Email</button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-logout">Log Out</button>
            </form>
        </div>
    </div>
</body>
</html>