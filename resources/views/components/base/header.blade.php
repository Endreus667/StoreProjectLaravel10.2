
    <header>
        <div class="header-area">
          <a href="" class="header-area-left">B7Store</a>
          <div class="header-area-right">
            @if(Auth::check())
            <a href="{{ route('my_account') }}" class="my-account">
              <img style="width: 23px" src="{{ asset('imgs/conta.png') }}" />
              Minha Conta {{ Auth::user()->name }}
            </a>
            @else
            <a href="{{ route('login') }}" class="my-account">
                <img  src="assets/icons/userIcon.png" />
                fazer login
            </a>
            @endif
            <a href="" class="announce-now">Anunciar agora →</a>
            <img class="menu-icon"  alt="Menu" />
            <div class="menu-mobile">
              <a href="{{ route('my_account') }}" class="my-account-mobile">
                <img  style="width: 23px" src="{{ asset('imgs/conta.png') }}" alt="Ícone do usuário" />
                Minha Conta
              </a>
              <a class="my-account-mobile" href="/index.html"
                ><img style="width: 23px" src="{{ asset('imgs/conta.png') }}" /> Sair</a
              >
            </div>
          </div>
        </div>
      </header>

