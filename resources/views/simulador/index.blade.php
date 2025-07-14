@extends('layouts.app') {{-- Altere para o seu layout se necessário --}}

@section('content')
<div style="text-align: center; padding: 20px;">
    <h2>Simulador de Cores</h2>

    <div style="margin-bottom: 20px;">
        <label><strong>Escolha uma cor:</strong></label><br>
        @foreach ($cores as $cor)
            <button class="btn-cor"
                    data-hex="{{ $cor['hex'] }}"
                    title="{{ $cor['nome'] }}"
                    style="background: {{ $cor['hex'] }};
                           width: 40px;
                           height: 40px;
                           margin: 5px;
                           border: none;
                           border-radius: 50%;
                           cursor: pointer;">
            </button>
        @endforeach
    </div>

    <div style="max-width: 1000px; margin: auto;">
        <canvas id="canvas" width="1000" height="666" style="width: 100%; border: 1px solid #ccc;"></canvas>
    </div>
</div>

<script>
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');

    const img = new Image();
    img.src = "{{ asset('img/ambiente.jpg') }}"; // Substitua pela sua imagem
    img.onload = () => {
        const aspectRatio = img.width / img.height;
        canvas.height = canvas.width / aspectRatio;
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
    };

    const botoes = document.querySelectorAll('.btn-cor');
    botoes.forEach(btn => {
        btn.addEventListener('click', () => {
            const cor = btn.dataset.hex;

            // Redesenha a imagem original
            ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

            // Define área pintável (ajuste conforme sua imagem real)
            const x = canvas.width * 0.15;
            const y = canvas.height * 0.25;
            const w = canvas.width * 0.7;
            const h = canvas.height * 0.4;

            ctx.fillStyle = cor + '88'; // Transparência (hex 88)
            ctx.fillRect(x, y, w, h);
        });
    });
</script>
@endsection
