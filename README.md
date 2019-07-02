# coopersystem-php

## Teste Desenvolvedor
Desenvolver o fluxo de pedido de um produto de acordo com os seguintes critérios:
O sistema deverá permitir o cadastramento de um produto conforme informações
descritas abaixo. Inicialmente, caso a quantidade informada for maior que zero, a
situação do produto deverá ser registrada como Disponível, se a quantidade for zerada,
aplicar a situação de Indisponível.  
Para solicitar um pedido, é necessário ter a quantidade mínima do produto disponível
em estoque.  
As funcionalidades de manter produto e pedido devem seguir o fluxo completo de um
CRUD.  
Não é necessário criar cadastro de usuário.  
Disponibilizar o código fonte no GitHub com instruções de configuração.  

## Dados mínimos necessários para um produto:
* Nome;
* Valor unitário;
* Quantidade em estoque;
* Situação do produto.

## Dados mínimos do pedido:
* Produto;
* Quantidade;
* Valor unitário;
* Data do pedido;
* Solicitante (caixa de texto para inserir o nome);
* Endereço do solicitante (CEP, UF, Município, Bairro, Rua, Número);
* Despachante (caixa de texto para inserir o nome);
* Situação do pedido (Pendente de envio, Enviado, Entregue).

## Requisitos para desenvolvimento:
* Laravel 5.4 ou superior;
* PostgresSQL ou MySQL;

## Diferenciais:
* Testes unitários;
* Utilizar InfyOm - http://labs.infyom.com (ou semelhante);
* Seguir o padrão de commits do Git Flow;