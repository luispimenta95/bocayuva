# Sistema de Banners - Bocayuva Tintas

## Visão Geral
O sistema de banners permite que você gerencie facilmente as imagens do banner principal na seção "hero" da página inicial, sem precisar alterar código.

## Funcionalidades

### 1. Gerenciamento via Interface Web
- Acesse: `http://seusite.com/admin/banners`
- Interface intuitiva para adicionar, editar e remover banners
- Upload de imagens com validação automática

### 2. Múltiplos Banners com Carousel
- **1 Banner**: Exibe diretamente na página
- **Múltiplos Banners**: Cria automaticamente um carousel com transição suave
- Controles de navegação (setas e indicadores)
- Transição automática a cada 5 segundos

### 3. Campos Disponíveis
- **Título**: Descrição opcional do banner
- **Imagem**: Upload de arquivo (JPG, PNG, GIF, WebP - máx. 2MB)
- **Link URL**: Link opcional para redirecionamento ao clicar
- **Ordem**: Controla a sequência de exibição
- **Status**: Ativo/Inativo

## Como Usar

### Adicionar um Novo Banner
1. Acesse o painel administrativo
2. Vá em "Gerenciar Banners"
3. Preencha o formulário:
   - Título (opcional)
   - Link URL (opcional)
   - Selecione a imagem
   - Defina a ordem (0 = primeiro)
   - Marque como "Ativo"
4. Clique em "Adicionar Banner"

### Editar um Banner Existente
1. Na lista de banners, clique em "Editar"
2. Modifique os campos desejados
3. Para trocar a imagem, selecione um novo arquivo
4. Clique em "Salvar Alterações"

### Deletar um Banner
1. Na lista de banners, clique em "Deletar"
2. Confirme a ação
3. O banner e sua imagem serão removidos permanentemente

## Comportamento na Página

### Banner Único
```html
<section id="hero">
    <a href="LINK_URL" target="_blank">
        <img src="CAMINHO_DA_IMAGEM" alt="TITULO" />
    </a>
</section>
```

### Múltiplos Banners
```html
<section id="hero">
    <div id="bannerCarousel" class="carousel slide">
        <!-- Carousel com controles automáticos -->
    </div>
</section>
```

## Fallback
Se não houver banners cadastrados, o sistema usa automaticamente o banner padrão localizado em `public/img/util/banner.png`.

## Estrutura de Arquivos
- **Imagens**: Armazenadas em `storage/app/public/banners/`
- **Banco de Dados**: Tabela `banners`
- **Controller**: `App\Http\Controllers\Admin\BannerController`
- **Model**: `App\Models\Banner`
- **Views**: `resources/views/admin/banners/`

## Especificações Técnicas
- Formatos suportados: JPEG, JPG, PNG, GIF, WebP
- Tamanho máximo: 2MB por imagem
- Validação automática de URL
- Soft delete não implementado (exclusão permanente)
- Responsive design para mobile

## Segurança
- Validação de tipos de arquivo
- Validação de tamanho
- Proteção contra XSS
- Middleware de autenticação (se configurado)

## Considerações
- Recomenda-se usar imagens com aspect ratio adequado para o layout
- Imagens muito grandes podem impactar a performance
- O sistema suporta quantos banners forem necessários
- A ordem determina a sequência no carousel
