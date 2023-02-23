@extends("layouts.login")


@section("content")
    @if ($errors->any())
        <div class="alert alert-danger">
            <h3>Tem algo errado!</h3>
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($user, ['route' => ['login.autenticar']]) !!}
        <h1 class="mb-3 fw-normal">Investidor10 News</h1>
        <h2 class="h3 mb-3 fw-normal">Área restrita<br>Identifique-se!</h2>

        <div class="form-floating">
            {!! Form::email('email', $user->email ?? null, ['class' => 'form-control', 'placeholder' => 'Informe seu E-mail']) !!}
            {!! Form::label('email', 'E-mail') !!}
        </div>
        <div class="form-floating">
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Informe sua Senha']) !!}
            {!! Form::label('password', 'Senha') !!}
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    {!! Form::close() !!}

@endsection
