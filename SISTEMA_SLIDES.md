# Sistema de Slides - Bocayuva Tintas

## Visão Geral
O sistema de slides permite o gerenciamento de múltiplas imagens que são exibidas na seção "Quem Somos" do site. Com upload múltiplo, validação avançada e confirmação de exclusão via SweetAlert2.

## Funcionalidades

### ✅ Upload Múltiplo
- Seleção de até 10 imagens por vez
- Preview em tempo real das imagens selecionadas
- Validação de formato e tamanho antes do upload
- Feedback visual durante o processo

### ✅ Validação Avançada
- **Formatos aceitos:** JPG, JPEG, PNG, GIF, WebP
- **Tamanho máximo:** 2MB por imagem
- **Limite:** 1 a 10 imagens por upload
- **Validação em tempo real:** Cliente e servidor

### ✅ Interface Moderna
- Design responsivo com Bootstrap 5
- Cards com hover effects
- Preview das imagens com informações
- Badges informativos (ID, data de criação)

### ✅ Confirmação de Exclusão
- Modal de confirmação via SweetAlert2
- Informações claras sobre a ação
- Feedback visual após exclusão

## Como Usar

### Acessar o Painel
1. Faça login no painel administrativo
2. Clique em **"Slides"** no menu superior
3. Ou acesse diretamente: `/admin/slides`

### Adicionar Slides
1. Na seção **"Adicionar Novos Slides"**
2. Clique em **"Escolher arquivos"**
3. Selecione uma ou múltiplas imagens (Ctrl+Click)
4. Visualize o preview das imagens selecionadas
5. Clique em **"Fazer Upload"**

### Remover Slides
1. Localize o slide na listagem
2. Clique no botão **"Remover"** (vermelho)
3. Confirme a ação no modal que aparece
4. O slide será removido permanentemente

## Estrutura Técnica

### Arquivos Principais
```
app/Http/Controllers/Admin/SlideController.php
app/Http/Requests/StoreSlideRequest.php
app/Models/Slide.php
resources/views/admin/slides/index.blade.php
database/seeders/SlideSeeder.php
```

### Rotas Disponíveis
```php
GET    /admin/slides              # Listar slides
POST   /admin/slides              # Criar novos slides
DELETE /admin/slides/{slide}      # Remover slide
```

### Banco de Dados
```sql
# Tabela: slides
- id (primary key)
- image_path (string) - Caminho da imagem no storage
- created_at (timestamp)
- updated_at (timestamp)
```

## Validações Implementadas

### Frontend (JavaScript)
- Verificação de tipo de arquivo
- Validação de tamanho máximo
- Limite de quantidade de arquivos
- Preview em tempo real

### Backend (Laravel)
```php
'images' => 'required|array|min:1|max:10',
'images.*' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:2048'
```

## Mensagens de Erro Personalizadas

### Em Português
- "Pelo menos uma imagem deve ser selecionada"
- "Máximo de 10 imagens por upload"
- "Formato não suportado. Use apenas: JPG, PNG, GIF ou WebP"
- "Cada imagem deve ter no máximo 2MB"

## Armazenamento de Arquivos

### Localização
- **Storage:** `storage/app/public/slides/`
- **URL Pública:** `public/storage/slides/`

### Link Simbólico
```bash
php artisan storage:link
```

## Segurança

### Validações de Segurança
- ✅ Validação de tipo MIME
- ✅ Verificação de extensão de arquivo
- ✅ Limite de tamanho por arquivo
- ✅ Limite de quantidade por upload
- ✅ Tokens CSRF em todos os formulários
- ✅ Middleware de autenticação

## Responsividade

### Breakpoints
- **Desktop:** 4 colunas (lg)
- **Tablet:** 3 colunas (md)
- **Mobile:** 2 colunas (sm)
- **Mobile pequeno:** 1 coluna

## Troubleshooting

### Problemas Comuns

#### "Erro 419 - Page Expired"
- **Causa:** Token CSRF expirado
- **Solução:** Recarregar a página

#### "Arquivo muito grande"
- **Causa:** Imagem > 2MB
- **Solução:** Reduzir tamanho da imagem

#### "Imagens não aparecem"
- **Causa:** Link simbólico não criado
- **Solução:** `php artisan storage:link`

#### "Máximo de 10 imagens"
- **Causa:** Selecionou mais de 10 arquivos
- **Solução:** Selecionar até 10 imagens por vez

### Configurações do Servidor
```ini
# php.ini
upload_max_filesize = 2M
post_max_size = 20M
max_file_uploads = 20
```

## Melhorias Futuras

### Planejadas
- [ ] Reordenação de slides (drag & drop)
- [ ] Compressão automática de imagens
- [ ] Suporte a vídeos
- [ ] Galeria com lightbox
- [ ] Backup automático de imagens
- [ ] Watermark automático

## Changelog

### v2.0 (Atual)
- ✅ Upload múltiplo de imagens
- ✅ Preview em tempo real
- ✅ Validação avançada
- ✅ Confirmação de exclusão
- ✅ Interface moderna
- ✅ Mensagens em português

### v1.0
- Upload individual
- Interface básica
- Validação simples
