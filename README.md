# Sistema de Notícias Laravel

Sistema de notícias desenvolvido em Laravel que exibe a notícia mais recente em destaque e uma listagem paginada das demais notícias.

## ✨ Funcionalidades Implementadas

- **Notícia em Destaque**: Exibe a notícia mais recente com título, subtítulo, texto completo, data e autor
- **Lista Paginada**: Listagem das demais notícias com paginação (3 por página)
- **Design Responsivo**: Interface adaptada para diferentes dispositivos
- **Banco de Dados**: Dados persistidos em banco SQLite
- **Seeders**: Dados de exemplo para testes

## 🛠️ Tecnologias Utilizadas

- **Laravel 11** - Framework PHP
- **SQLite** - Banco de dados
- **Blade** - Template engine
- **Eloquent ORM** - Mapeamento objeto-relacional
- **Migrations** - Controle de versão do banco
- **Seeders** - População de dados de teste

## 📁 Estrutura do Projeto

### Arquivos Principais

```
app/
├── Http/Controllers/NewsController.php    # Controller principal
└── Models/News.php                        # Model Eloquent

database/
├── migrations/create_news_table.php       # Estrutura da tabela
├── seeders/SeederNoticias.php             # Dados de exemplo
└── database.sqlite                        # Banco SQLite

resources/views/site/
└── noticia-aberta.blade.php               # Template da página

routes/
└── web.php                                # Definição das rotas
```

## 🗄️ Estrutura do Banco de Dados

### Tabela `news`

| Campo      | Tipo      | Descrição                    |
|------------|-----------|------------------------------|
| id         | INTEGER   | Chave primária (auto increment) |
| titulo     | VARCHAR   | Título da notícia           |
| subtitulo  | VARCHAR   | Subtítulo da notícia        |
| texto      | TEXT      | Conteúdo completo           |
| imagem     | VARCHAR   | Nome do arquivo de imagem   |
| autor      | VARCHAR   | Nome do autor               |
| created_at | TIMESTAMP | Data de criação             |
| updated_at | TIMESTAMP | Data de atualização         |

## 🚀 Instalação e Configuração

### Pré-requisitos

- PHP 8.1 ou superior
- Composer
- SQLite (incluído no PHP)

### Passo a Passo

1. **Clone o projeto**
   ```bash
   git clone https://github.com/jsrbrt/sistema-de-noticias-laravel
   cd example-app
   ```

2. **Instalar dependências**
   ```bash
   composer install
   ```

3. **Configurar ambiente**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configurar banco SQLite**
   
   Edite o arquivo `.env`:
   ```env
   DB_CONNECTION=sqlite
   ```

5. **Criar arquivo do banco**
   ```bash
   touch database/database.sqlite
   ```

6. **Executar migrations e seeders**
   ```bash
   php artisan migrate:fresh --seed
   ```

7. **Iniciar servidor**
   ```bash
   php artisan serve
   ```

## 🧪 Como Testar

### Acessar a Aplicação

1. Acesse: `http://localhost:8000/noticias`
2. Verifique se a notícia mais recente aparece em destaque no topo
3. Confirme se as outras notícias aparecem na listagem abaixo
4. Teste a paginação clicando nos números das páginas

### Verificar Dados no Banco

**Opção 1: Via Laravel Tinker**
```bash
php artisan tinker
```
```php
// Ver todas as notícias
\App\Models\News::all();

// Ver a mais recente
\App\Models\News::latest()->first();

// Contar total de notícias
\App\Models\News::count();
```

**Opção 2: Via DB Browser for SQLite**
- Instale o DB Browser for SQLite
- Abra o arquivo `database/database.sqlite`
- Navegue pela tabela `news`

### Adicionar Mais Dados

Para adicionar mais notícias de teste:
```bash
php artisan db:seed --class=NewsSeeder
```

## 📋 Boas Práticas Implementadas

### Laravel Framework
- ✅ **Migrations**: Controle de versão do banco de dados
- ✅ **Eloquent ORM**: Mapeamento objeto-relacional
- ✅ **Controllers**: Separação da lógica de negócio
- ✅ **Routes**: Roteamento RESTful
- ✅ **Blade Templates**: Sistema de templates
- ✅ **Seeders**: População automática de dados

### Código Limpo
- ✅ **Nomenclatura Clara**: Nomes descritivos para classes e métodos
- ✅ **Separação de Responsabilidades**: MVC bem estruturado
- ✅ **Reutilização**: Uso de Accessors no Model
- ✅ **Paginação Automática**: Laravel built-in pagination

### Banco de Dados
- ✅ **Foreign Keys**: Relacionamentos bem definidos
- ✅ **Timestamps**: Controle automático de datas
- ✅ **Indexes**: Otimização de consultas (created_at)

## 🎯 Funcionalidades da Aplicação

### Página Principal (`/noticias`)
- Notícia mais recente em destaque com:
  - Título completo
  - Subtítulo
  - Texto completo
  - Data formatada (dd/mm/yyyy HH:mm)
  - Nome do autor
- Lista das outras notícias com:
  - Título e subtítulo
  - Trecho do texto (150 caracteres)
  - Data e autor
  - Paginação (3 por página)

### Características Técnicas
- **Responsivo**: Funciona em desktop e mobile
- **Performance**: Consultas otimizadas com Eloquent
- **SEO Friendly**: URLs amigáveis
- **Escalável**: Estrutura preparada para crescimento

## 📊 Dados de Exemplo

O seeder inclui 8 notícias de exemplo sobre:
- Laravel 11 e suas novidades
- Inteligência Artificial na programação
- PHP 8.3 e suas melhorias
- Trabalho remoto em tecnologia
- Segurança em aplicações web
- Docker e containerização
- APIs RESTful
- Clean Code

## 🔧 Comandos Úteis

```bash
# Recriar banco com dados limpos
php artisan migrate:fresh --seed

# Limpar cache de configuração
php artisan config:clear

# Ver informações do sistema
php artisan about

# Acessar terminal interativo
php artisan tinker
```

## 📝 Observações

- **Banco de Dados**: Utilizei SQLite em vez de MySQL para simplicidade de configuração, mas a estrutura é compatível com MySQL
- **Imagens**: Sistema preparado para imagens, mas usando placeholders no momento
- **Validações**: Implementadas no Controller para future forms
- **Paginação**: Configurada para 3 itens por página (customizável)
---

**Desenvolvido com Laravel seguindo as melhores práticas de desenvolvimento.**
