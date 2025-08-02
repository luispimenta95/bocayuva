<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Painel Administrativo | Bocayuva Tintas</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">
    
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .login-card {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .brand-logo {
            width: 80px;
            height: 80px;
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            font-size: 2rem;
            font-weight: bold;
            padding: 10px;
        }
        
        .btn-login {
            background: linear-gradient(45deg, #007bff, #0056b3);
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 123, 255, 0.4);
        }
        
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        
        .csrf-refresh {
            display: none;
        }
    </style>
    
    <script>
        // Função para renovar token CSRF
        function refreshCSRFToken() {
            return fetch(window.location.origin + '/csrf-refresh', {
                method: 'GET',
                credentials: 'same-origin',
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.token) {
                    // Atualizar meta tag
                    const metaTag = document.querySelector('meta[name="csrf-token"]');
                    if (metaTag) {
                        metaTag.setAttribute('content', data.token);
                    }
                    
                    // Atualizar input hidden
                    const csrfInput = document.querySelector('input[name="_token"]');
                    if (csrfInput) {
                        csrfInput.value = data.token;
                    }
                    
                    console.log('CSRF token refreshed successfully');
                    return data.token;
                }
            })
            .catch(error => {
                console.log('Error refreshing CSRF token:', error);
            });
        }

        // Refresh automático a cada 10 minutos
        setInterval(refreshCSRFToken, 600000);

        // Melhorar UX do formulário
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('loginForm');
            const loginBtn = document.getElementById('loginBtn');
            const loginBtnText = document.getElementById('loginBtnText');
            const loginSpinner = document.getElementById('loginSpinner');
            
            if (form && loginBtn) {
                form.addEventListener('submit', function(e) {
                    // Mostrar loading
                    loginBtn.disabled = true;
                    loginBtnText.textContent = 'Entrando...';
                    loginSpinner.classList.remove('d-none');
                    
                    // Refresh token antes do envio
                    e.preventDefault();
                    refreshCSRFToken().then(() => {
                        // Reenviar o formulário após refresh do token
                        form.submit();
                    }).catch(() => {
                        // Se falhar, tentar enviar mesmo assim
                        form.submit();
                    });
                });
                
                // Reset loading state se houver erro
                setTimeout(() => {
                    if (loginBtn.disabled) {
                        loginBtn.disabled = false;
                        loginBtnText.textContent = 'Entrar no Painel';
                        loginSpinner.classList.add('d-none');
                    }
                }, 8000);
            }
            
            // Auto-focus no primeiro campo
            const emailInput = document.getElementById('email');
            if (emailInput && !emailInput.value) {
                emailInput.focus();
            }
            
            // Refresh token inicial após carregamento da página
            setTimeout(refreshCSRFToken, 1000);
        });
    </script>
</head>
<body>
    <div class="d-flex align-items-center justify-content-center min-vh-100 p-3">
        <div class="login-card rounded-4 p-5 shadow-lg" style="width: 100%; max-width: 450px;">
            
            <!-- Logo e Título -->
            <div class="text-center mb-4">
                <div class="brand-logo rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 overflow-hidden">
                    <img src="{{ asset('img/logo.png') }}" alt="Bocayuva Tintas" class="img-fluid" style="width: 60px; height: 60px; object-fit: contain;">
                </div>
                <h3 class="fw-bold text-dark mb-1">Painel Administrativo</h3>
                <p class="text-muted mb-0">Bocayuva Tintas</p>
            </div>

            <!-- Mensagens serão exibidas via SweetAlert2 automaticamente -->

            <!-- Formulário de Login -->
            <form method="POST" action="{{ route('login') }}" id="loginForm">
                @csrf

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">
                        <i class="bi bi-envelope me-2"></i>Email
                    </label>
                    <input 
                        id="email" 
                        type="email" 
                        class="form-control form-control-lg @error('email') is-invalid @enderror" 
                        name="email" 
                        value="{{ old('email') }}" 
                        required 
                        autofocus 
                        autocomplete="username"
                        placeholder="Digite seu email"
                    >
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Senha -->
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">
                        <i class="bi bi-lock me-2"></i>Senha
                    </label>
                    <input 
                        id="password" 
                        type="password" 
                        class="form-control form-control-lg @error('password') is-invalid @enderror" 
                        name="password" 
                        required 
                        autocomplete="current-password"
                        placeholder="Digite sua senha"
                    >
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Lembrar-me -->
                <div class="mb-4">
                    <div class="form-check">
                        <input 
                            id="remember_me" 
                            type="checkbox" 
                            class="form-check-input" 
                            name="remember"
                        >
                        <label for="remember_me" class="form-check-label text-muted">
                            Lembrar de mim
                        </label>
                    </div>
                </div>

                <!-- Botões -->
                <div class="d-grid gap-2 mb-3">
                    <button type="submit" class="btn btn-primary btn-lg btn-login" id="loginBtn">
                        <i class="bi bi-box-arrow-in-right me-2"></i>
                        <span id="loginBtnText">Entrar no Painel</span>
                        <span id="loginSpinner" class="spinner-border spinner-border-sm ms-2 d-none" role="status">
                            <span class="visually-hidden">Carregando...</span>
                        </span>
                    </button>
                </div>

                <!-- Links -->
                <div class="text-center">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-decoration-none text-muted">
                            <i class="bi bi-question-circle me-1"></i>
                            Esqueceu sua senha?
                        </a>
                    @endif
                </div>

            </form>

            <!-- Rodapé -->
            <hr class="my-4">
            <div class="text-center">
                <small class="text-muted">
                    <a href="{{ route('home') }}" class="text-decoration-none">
                        <i class="bi bi-arrow-left me-1"></i>
                        Voltar ao site
                    </a>
                </small>
            </div>

        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <!-- Script para login com SweetAlert2 -->
    <script>
        // Configurar Toast para login
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true
        });

        // Mostrar alerts do Laravel
        @if(session('status'))
            Toast.fire({
                icon: 'success',
                title: '{{ session('status') }}'
            });
        @endif

        @if($errors->any())
            Toast.fire({
                icon: 'error',
                title: 'Erro no Login',
                text: 'Verifique suas credenciais e tente novamente.'
            });
        @endif
    </script>
</body>
</html>
