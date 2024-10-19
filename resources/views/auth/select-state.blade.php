<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="{{ asset('css/loginSignUpStyle.css') }}" />

    <title>B7Store - Selecione seu estado</title>
</head>

<body>
    <a href="index.html" class="back-button">← Voltar</a>
    <div class="login-page">
        <div class="login-area">
            <h3 class="login-title">B7Store</h3>

            <form method="POST" action="{{ route('select_state_action') }}">

                @csrf

                <div class="state-area">
                    <div class="state-label">Selecione O Seu Estado</div>


                    <select name="state">
                        @foreach ($states as $state )
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach

                    </select>

                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>


                <button class="login-button">Selecionar</button>
            </form>

            <div class="register-area">
                Já tem cadastro? <a href="{{ route('login') }}">Fazer Login</a>
            </div>
        </div>

    </div>
    <x-base.footer/>
</body>
</html>
