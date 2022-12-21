## Sobre o Projeto

A Pandora possui um produto altamente integrável para realização de eleições chamado Panagora (www.panagora.com.br), e foi feito um gerador de documentos baseado
em suas APIs. O projeto consiste no consumo dessa api em um projeto dockerizado com um template personalizado com o bootstrap.

## Como acessar o projeto?
Requisitos para acessar o projeto: Ter o docker e docker-compose instalado em seu computador, encontrei problemas maiores por estar utilizando o windows, nesse sentido precisei do wsl2 instalado. Além disso, o servidor apache rodando dentro do seu computador, através de algum pacote, como xampp ou wamp ou então utilizar o servidor embutido, utilizando o comando "php artisan serve".

Baixar o zip ou clonar o projeto, instalar o composer para atualizar o artisan e executar o comando: sudo docker-compose build dentro da pasta laravel-docker, caso seja windows retirar o sudo.
Entrar na pasta laradock e executar o comando: sudo docker-compose up -d nginx mysql phpmyadmin - este comando habilitará os containers especificados.

Caso ocorra este erro:  this error may indicate that the docker daemon is not running(Windows) - Executar na linha de comando dentro da pasta laravel-docker:& 'C:\Program Files\Docker\Docker\DockerCli.exe' -SwitchDaemon
