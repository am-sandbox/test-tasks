@extends('layouts.app')

@section('content')
<body class="fp-page">
    <div class="fp-box">
        <div class="logo">
            <a href="{{ url('/') }}"><b>{{ config('app.name', 'Laravel') }}</b></a>
            <small>Custom Application</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="forgot_password" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    <div class="msg">
                        Введите e-mail адрес указанный при регистрации на него придет сообщение в котором будет ваш логин и ссылка для восстановления пароля.
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required value="{{ old('email') }}" autofocus>
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Восстановить пароль</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="{{ route('login') }}">Войти</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="/js/admin.js"></script>
    <script src="/js/pages/examples/forgot-password.js"></script>
</body>
@endsection
