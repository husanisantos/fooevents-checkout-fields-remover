=== Plugin Name ===
Contributors: husanisantos 
Tags: woocommerce, fooevents
Requires at least: 3.6
Tested up to: 5.9
Requires PHP: 7.2


Apenas um plugin que altera o botão de adicionar ao carrinho do Woocommerce para um chat com vendedores no whatsapp.

== Description ==

Com o Whats Order você cadastra vendedores em seu Wordpress para que a venda seja direcionada para o whatsapp do vendedor cadastrado.

Funciona de maneira muito simples, o administrador cadastra os vendedores, e cada um recebe um identificador e uma url e quando
um cliente acessar através desse link, o sistema armazena a informação e direciona todos os contatos que esse cliente fizer ao
vendedor em questão.


== Installation ==

1. Suba o arquivo `fooevents-checkout-fields-remover.zip` para o diretório `/wp-content/plugins/`
1. Ative o plugin no menu 'Plugins' do Wordpress

== FAQ ==

= O que é necessário para o plugin funcionar bem? =

Recomendável que a versão do PHP seja 7.2 ou superior.
É necessário que tenha o Woocommerce instalado.

= O que o plugin faz? =

Ao instalar a extensão "FooEvents Custom Attendee Fields" o administrador pode selecionar campos de captura no formulário de checkout como nome, email e 
telefone, porém eles ficam duplicados, então o plugin clona o conteudo do campo do woocommerce para o campo do "FooEvents Custom Attendee Fields" habilitado,
melhorando a UI e a velocidade de preenchimento dos dados pelo cliente.


== Changelog ==