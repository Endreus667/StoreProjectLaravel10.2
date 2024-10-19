<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Open+Sans:ital@0;1&family=Oswald:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/myAccountStyle.css') }}">
    <title>B7Store</title>
</head>

<body>
    <x-base.header />

    <main>
        <div class="my-account-page">
            <div class="sidebar">
                <div class="sidebar-top">
                    <a href="/myAccount.html" class="config">
                        <img src="assets/icons/configIcon.png" /> Configurações
                    </a>
                    <a href="{{ route('my_ads') }}">
                        <img src="assets/icons/layersIonGray.png" /> Meus Anúncios
                    </a>
                </div>
                <div class="sidebar-bottom">
                    <a href="{{ route('logout') }}">
                        <img src="assets/icons/logoutIcon.png" /> Sair
                    </a>
                </div>
            </div>
            <div class="profile-area">
                <h3 class="profile-title">Meu perfil</h3>
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif


                @if ($errors->any())
                    <div class="error-messages">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('my_account_action') }}">
                    @csrf
                    <div class="name-area">
                        <label for="name" class="name-label">Nome</label>
                        <input type="text" id="name" name="name" placeholder="Digite o seu nome" value="{{ $user->name }}" />
                        @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="email-area">
                        <label for="email" class="email-label">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Digite o seu e-mail" value="{{$user->email }}" />
                        @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                    </div>


                    <div class="state-area">
                        <div class="state-label">Selecione O Seu Estado</div>


                        <select class="states" name="state_id">
                            @foreach ($states as $state )
                            <option value="{{ $state->id }}"   {{ $state->id == $user->state_id ? 'selected' : ''}}>{{ $state->name }}</option>
                            @endforeach

                        </select>

                        @error('name')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="save-button" value="Salvar">Salvar</button>
                </form>
            </div>
        </div>
    </main>

    <x-base.footer/>

    <script>
        function togglePasswordVisibility(inputId) {
            const input = document.getElementById(inputId);
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);
        }
    </script>
</body>
</html>
