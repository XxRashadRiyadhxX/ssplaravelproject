<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            background-color: #f7fafc;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            font-size: 0.875rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #4a5568;
        }

        input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.25rem;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            font-size: 0.875rem;
            color: #4a5568;
        }

        .checkbox-input {
            margin-right: 0.5rem;
        }

        .submit-btn {
            width: 100%;
            padding: 0.75rem;
            background-color: #4299e1;
            color: #ffffff;
            border: 1px solid #4299e1;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #3182ce;
        }

        .forgot-link {
            font-size: 0.875rem;
            color: #4299e1;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .forgot-link:hover {
            color: #3182ce;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h2 class="card-title">Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required class="border rounded-md">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required class="border rounded-md">
            </div>

            <div class="form-group">
                <label class="checkbox-label">
                    <input type="checkbox" name="remember" class="checkbox-input">
                    <span>Remember me</span>
                </label>
            </div>

            <button type="submit" class="submit-btn">Login</button>
        </form>

        <div class="mt-4">
            <a href="#" class="forgot-link">Forgot your password?</a>
        </div>
    </div>
</div>

</body>
</html>
