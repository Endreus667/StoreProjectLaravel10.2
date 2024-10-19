<div class="password-input-area">
    <input type="password" class="@error($name) is-invalid @enderror" name="{{ $name }}" placeholder="{{ $placeholder }}" id="{{ $id }}" />
    <img style="width: 23px" src="{{ asset('imgs/olho.png') }}" alt="Mostrar senha" onclick="togglePasswordVisibility('{{ $id }}')"/>
</div>

<script>
    if(typeof togglePasswordVisibility !== 'function'){
        function togglePasswordVisibility(inputId) {
        const input = document.getElementById(inputId);
        if(input.type === 'password') {
            input.type = 'text'; // Corrigido para usar '='
        } else {
            input.type = 'password'; // Corrigido para usar '='
        }
    }
 }
</script>
