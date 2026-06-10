<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Auth app</title>
    {{-- ajout du css dans cette partie --}}
    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: system-ui, sans-serif;
            background: #f5f5f3;
            color: #1a1a18;
            min-height: 100vh;
        }

        nav {
            background: #ffffff;
            border-bottom: 1px solid #e2e0d8;
            padding: 0 2rem;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            font-weight: 600;
            font-size: 16px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #6b6a65;
            font-size: 14px;
        }

        .nav-links a:hover { color: #1a1a18; }

        .container {
            max-width: 480px;
            margin: 3rem auto;
            padding: 0 1rem;
        }

        .card {
            background: #ffffff;
            border: 1px solid #e2e0d8;
            border-radius: 12px;
            padding: 2rem;
        }

        h1 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .form-group { margin-bottom: 1rem; }

        label {
            display: block;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 9px 12px;
            border: 1px solid #e2e0d8;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.15s;
        }

        input:focus { border-color: #534AB7; }

        .btn {
            display: inline-block;
            padding: 9px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.15s;
        }

        .btn-primary {
            background: #534AB7;
            color: #fff;
            width: 100%;
            text-align: center;
        }

        .btn-primary:hover { background: #423a9a; }

        .btn-danger {
            background: #e24b4a;
            color: #fff;
            padding: 6px 14px;
            font-size: 13px;
        }

        .btn-danger:hover { background: #c73c3b; }

        .alert-error {
            background: #fef2f2;
            border: 1px solid #fecaca;
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 13px;
            color: #dc2626;
            margin-bottom: 1rem;
        }

        .alert-success {
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 13px;
            color: #166534;
            margin-bottom: 1rem;
        }

        .form-link {
            text-align: center;
            font-size: 13px;
            color: #6b6a65;
            margin-top: 1rem;
        }

        .form-link a {
            color: #534AB7;
            text-decoration: none;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <nav>
        <span class="brand">Auth App</span>
         <div class= "nav-links">
            @auth
            <span style="font-size:14px; color: #6b6a65">
                {{Auth::user()->name}}
            </span>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">Deconnexion</button>
            </form>
            @else
            <a href="{{route('login')}}">Connexion</a>
            <a href="{{route('register')}}">Inscription</a>
            @endif
         </div>
    </nav>
    <div class="container">
        @if(session('success'))
            <div class="alert-success">{{session('success')}}</div>
            @endif
        @if($errors->any())
            <div class="alert-error">{{$errors->first()}}</div>
            @endif
        @yield('content')
    </div>
</body>
</html>
