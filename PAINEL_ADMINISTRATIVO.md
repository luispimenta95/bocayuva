# 🔐 Painel Administrativo - Bocayuva Tintas

## 🚀 Acesso ao Painel

### Credenciais Padrão
- **URL de Login**: `/login`
- **Email**: `admin@bocayuvatintas.com.br`
- **Senha**: `admin123`

⚠️ **IMPORTANTE**: Altere a senha padrão após o primeiro login!

## 🎯 Como Acessar

### Opção 1: Direto pela URL
1. Acesse: `http://seudominio.com/login`
2. Faça login com as credenciais
3. Será redirecionado para `/admin`

### Opção 2: Pelo Site Principal
1. No menu superior do site, clique em "Login" (aparece quando não logado)
2. Ou em "Admin" (aparece quando já logado)

### Opção 3: URL Direta do Dashboard
1. Acesse: `http://seudominio.com/admin`
2. Se não estiver logado, será redirecionado para o login

## 🔧 Funcionalidades do Painel

### Dashboard Principal (`/admin`)
- Visão geral do sistema
- Links rápidos para os módulos
- Informações do usuário logado

### Gerenciamento de Banners (`/admin/banners`)
- Criar, editar e excluir banners da página inicial
- Upload de imagens
- Configurar links e ordem dos banners

### Gerenciamento de Slides (`/admin/slides`)
- Gerenciar slides da seção "Quem Somos"
- Upload de imagens
- Organização e visualização

## 🔒 Sistema de Autenticação

### Login
- Tela personalizada com design moderno
- Validação de credenciais
- Opção "Lembrar de mim"
- Link para recuperação de senha

### Logout
- Menu dropdown no canto superior direito
- Logout seguro com invalidação de sessão
- Redirecionamento para tela de login com confirmação

### Segurança
- Todas as rotas administrativas protegidas por middleware `auth`
- Tokens CSRF em todos os formulários
- Sessões seguras
- Invalidação automática de sessões

## 🎨 Interface do Usuário

### Menu Superior
- **Nome do usuário** com dropdown
- **Ver Site**: Link para voltar ao site principal
- **Sair**: Logout seguro
- **Links de navegação**: Dashboard, Slides, Banners

### Responsividade
- Interface adaptada para desktop e mobile
- Menu responsivo com toggle
- Cards organizados em grid

## 👤 Gerenciamento de Usuários

### Criar Novo Usuário Administrador
```bash
# Via Tinker (Laravel)
php artisan tinker

# No console do Tinker:
$user = new App\Models\User();
$user->name = 'Nome do Admin';
$user->email = 'email@exemplo.com';
$user->password = Hash::make('senha123');
$user->email_verified_at = now();
$user->save();
```

### Via Seeder (Recomendado)
```bash
# Executar o seeder que cria o usuário padrão
php artisan db:seed --class=AdminUserSeeder
```

## 🛠️ Comandos Úteis

### Recriar Usuário Administrador
```bash
php artisan db:seed --class=AdminUserSeeder
```

### Limpar Cache de Autenticação
```bash
php artisan auth:clear-resets
php artisan cache:clear
php artisan session:flush
```

### Executar Migrações e Seeders
```bash
php artisan migrate:fresh --seed
```

## 🔐 Alterando a Senha do Administrador

### Via Interface (Em Breve)
- Funcionalidade de alteração de senha será adicionada

### Via Banco de Dados
```sql
UPDATE users 
SET password = '$2y$10$...' -- Hash da nova senha
WHERE email = 'admin@bocayuvatintas.com.br';
```

### Via Tinker
```bash
php artisan tinker

# No console:
$user = App\Models\User::where('email', 'admin@bocayuvatintas.com.br')->first();
$user->password = Hash::make('nova_senha_aqui');
$user->save();
```

## 🚨 Solução de Problemas

### "Página Expirada" / Token CSRF
- Limpe o cache: `php artisan cache:clear`
- Reinicie o servidor: `php artisan serve`

### Não Consegue Logar
1. Verifique se o usuário existe no banco
2. Execute o seeder: `php artisan db:seed --class=AdminUserSeeder`
3. Limpe o cache de sessions

### Redirecionamento Infinito
1. Verifique as rotas em `routes/web.php`
2. Certifique-se que o middleware está correto
3. Limpe o cache de rotas: `php artisan route:clear`

## 📱 URLs Importantes

- **Login**: `/login`
- **Dashboard Admin**: `/admin`
- **Gerenciar Banners**: `/admin/banners`
- **Gerenciar Slides**: `/admin/slides`
- **Logout**: Através do menu dropdown
- **Site Principal**: `/`

## 🔄 Fluxo de Navegação

1. **Usuário não logado** → Acessa `/admin` → Redirecionado para `/login`
2. **Faz login** → Redirecionado para `/admin` (dashboard)
3. **Navega pelo painel** → Usa menu superior
4. **Faz logout** → Redirecionado para `/login` com mensagem de confirmação
5. **Acesso direto protegido** → Qualquer rota `/admin/*` requer autenticação

---

## 📞 Suporte

Para dúvidas ou problemas:
1. Verifique este documento
2. Consulte os logs em `storage/logs/`
3. Use `php artisan tinker` para debug
4. Entre em contato com o desenvolvedor

**Última atualização**: 1 de agosto de 2025
