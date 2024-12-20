=== Custom Post Title Updater ===
Contributors: APKGrátis.com.br
Tags: SEO, Rank Math, custom fields, app updates, post hierarchy
Requires at least: 5.0
Tested up to: 6.3
Stable tag: 2.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Atualiza automaticamente os títulos SEO dos posts filhos e modifica o campo "Tipo de aplicação" ao publicar ou atualizar o post pai.

== Description ==

Este plugin foi desenvolvido para sites que utilizam hierarquia de posts, como o tema Appyn, permitindo:

* Atualização automática do título SEO (campo "rank_math_title") dos posts filhos ao publicar ou atualizar o post pai.
* Modificação do campo personalizado "Tipo de aplicação" (`app_type`) para `1` em posts pai e filhos.
* Evita ajustes manuais repetitivos, otimizando o gerenciamento de posts hierárquicos.

== Installation ==

1. Baixe o arquivo ZIP do plugin.
2. Acesse o painel do WordPress e navegue até "Plugins" > "Adicionar novo".
3. Clique em "Fazer upload de plugin" e selecione o arquivo ZIP baixado.
4. Clique em "Instalar agora" e, em seguida, em "Ativar".

== Changelog ==

= 2.0 =
* Atualização do campo `app_type` para `1` em posts pai e filhos, independente do valor anterior.
* Melhorias no registro de logs para diagnóstico.

= 1.9 =
* Correção na lógica para atualização do campo `app_type`.

= 1.8 =
* Ajustes iniciais para o título SEO e campo personalizado `app_type`.

== Frequently Asked Questions ==

= Este plugin funciona com qualquer tema? =
Foi desenvolvido especificamente para o tema Appyn, mas pode funcionar em outros temas que utilizem hierarquia de posts.

= O que acontece se eu não usar Rank Math? =
A funcionalidade de atualização do título SEO não funcionará, mas o ajuste do campo `app_type` continuará ativo.

= Posso customizar o valor do campo `app_type`? =
Atualmente, o plugin fixa o valor em `1`. Para alterações, é necessário editar o código do plugin.
