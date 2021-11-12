# Guias de Instalação

Este repositório tem como objetivo principal ajudar na instalação de forma adequada do projeto
<br><br>

## Passo a Passo 
  <a href ="#instalação"> 1. Como instalar os programas necessários; </a>  <br>
  <a href ="#clonagem" >2. Como clonar o repositório do GitHub ;</a> <br>
    <a href ="#localhost"> 3. Como abrir o projeto no Localhost. </a> <br>
  <a href ="#importar-banco"> 4. Como acessar o phpMydmin e importar o banco; </a><br>
  <br>

## Instalação

Abaixo, segue as ferramentas que instalaremos e como realizar o _download_ dos arquivos

### Github
 O Github é uma plataforma que facilita o trabalho de desenvolvedores, oferecendo diversas funcionalidades extras, aplicadas ao git, proporcionando um ótimo ambiente para trabalho em equipe, servindo gratuitamente de hospedagem de projetos de diversas tecnologias.
<br>
- O github não necessita de uma instalação, apesar de também já existir a versão desktop, o principal é a criação de uma conta, que você pode criar [neste link](https://github.com/);
- Caso deseje a instalação da versão desktop, que pode simplificar o fluxo de trabalho com sua interface visual, clique [neste link](https://desktop.github.com/);
    
<h1 align="center"></h1>

### Git
 O git é um sistema de controle de versão de grande popularidade. Atualmente ele é abstraído por sistemas como o GitHub, que fornecem uma plataforma para seu uso, podendo ser realizadas as tarefas necessárias por essa plataforma ou pela inteface de linha de comando(cli).
<br>
 Para instalá-lo, siga os seguintes passos:

- Para cada sistema operacional há uma forma de instalação e as informações podem ser encontradas no site oficial, após a verificação clique em download, no próprio site, e faça a instalação  [link do site oficial](https://git-scm.com/book/pt-br/v2/Come%C3%A7ando-Instalando-o-Git);<br>
- Após instalado faça a configuração, para ter acesso ao github, para isso você usará seu login e senha cadastrados na plataforma quando solicitado. Crie uma pasta, nela, clique com o botão direito do mouse e depois em `git bash here`, com o terminal aberto digite trocando por suas informações:
`$ git config --global user.name "seu nome"<br>
 $ git config --global user.email "seu email"` 
- Para mais informações: [link do site oficial](https://git-scm.com/book/pt-br/v2/Come%C3%A7ando-Instalando-o-Git);<br>

<h1 align="center"></h1>

### WampServer

 _WampServer_ é um _software_ que efetua a instalação automática de um conjunto de _softwares_ no computador, de modo a facilitar a configuração do interpretador de scripts local e do banco de dados do sistema. Ele é uma ótima alternativa para acessar o _Localhost_ <br>
Para instalá-lo, siga os seguintes passos:

- O melhor jeito de instalar o _WampServer_ na sua máquina é usando o [link do site oficial](https://www.wampserver.com/en/);<br>
- Insira seus dados no formulário do site para baixar o programa em sua versão `2.3`;<br>
- Execute o programa e siga as instruções do instalador;<br>
- Para ter certeza de que deu tudo certo, procure e abra o programa no seu computador. Isso deve abrir uma tela preta, o cmd;<br>
- Se você olhar a barra de tarefas, poderá encontrar o ícone do aplicativo instalado na cor verde. Como pode ser observado na imagem abaixo:<br>
<img src="https://cdn.discordapp.com/attachments/901303352883822635/908408900024418434/unknown.png" width="30%" /><br>

Se a resposta for parecida com o texto e a imagem acima, quer dizer que está tudo certo até agora! :tada:

<h1 align="center"></h1>

### Visual Studio Code

O _Visual Studio Code_ é um editor de código-fonte desenvolvido pela Microsoft. Ele inclui suporte para depuração, controle de versionament, realce de sintaxe, complementação inteligente de código, snippets e refatoração de código. Será útil caso surja a necessidade de alguma alteração no decorrer do uso do projeto.<br>
Para instalá-lo, siga os seguintes passos:

- O melhor jeito de instalar o _WampServer_ na sua máquina é usando o [link do site oficial](https://code.visualstudio.com/);<br>
- Identifique qual _download_ contempla seu _sistema operacional_ (Linux, Windows ou Mac), qual sua capacidade de processamento (32bit ou 64bit) e execute a instalação;<br>
- Execute o programa e siga as instruções do instalador;<br>
- Para ter certeza de que deu tudo certo, procure e abra o programa no seu computador. Ele sugira alguns arquivos complementares para serem baixados e completará o _download_;<br>

Se o programa abrir e mostrar a tela inicial, quer dizer que está tudo certo até agora! :tada:
    
 <br>
    
## Clonagem

Clonar é trazer um repositório existente em alguma plataforma como o GitHub para a sua máquina.
<br>
Para clonar, siga os seguintes passos:
- Você deve abrir a página no github do projeto desejado, clicar no botão verde `code` e copiar a linha de https.
- Após isso, abra o git bash here (clique com o botão direito do mouse na pasta que deseja que tenha o projeto e depois em `git bash here`).
- No terminal digite o comando git clone e cole o https copiado(No terminal a colagem deve ser feita através do mouse) e de enter, isso clonará o projeto.

Para clonar no github desktop, siga os seguintes passos:

- No menu File, clique em Clone Repository; <br>
- Clique na aba que corresponde à localização do projeto que você irá clonar ou clique em URL para inserir manualmente o local do repositório, colocando o https; <br>
- Após escolher o repositório que você quer clonar escolha em `local path` o local em sua maquina que ele deve ser clonado; <br>
- Clique em `clone`. <br>

 <br>

## Localhost

(salvar na pasta wwww)
 <br> 

<h1 align="center"></h1>

## Importar Banco

Importar o banco é fundamental para rodar corretamente o sistema. Para realizar a importação do banco siga os seguintes passos:

- Confirme que concluiu corretamente as etapas anteriores;
- Clique com o botão direito do mouse no ícone do Wamp que aparecerá na barra de tarefas; <br>
- Clique no phpMyAdmin que aparecerá no menu do WampServer. Conforme mostra a imagem abaixo:<br><br>
 <img src="https://cdn.discordapp.com/attachments/826526043917647912/908764998224994304/unknown.png" width="30%" /><br><br>
- No phpMyAdmin entre com _root_ no username e deixe a senha em branco. Conforme mostra a imagem abaixo:<br><br>
 <img src="https://cdn.discordapp.com/attachments/826526043917647912/908766159644528650/unknown.png" width="45%" /><br>
- Após realizar a etapa anterior clique em _go_, o que abrirá a seguinte tela: <br><br>
 <img src="https://cdn.discordapp.com/attachments/826526043917647912/908767144056078417/unknown.png" width="87%" /><br>
- Clique em _New_ e nomeia a Database com o mesmo nome do arquivo que será importado. Nesse caso, "inodevsbd"; <br><br>
- Lembre-se também de selecionar o "utf8_general_ci" para dessa forma os caracteres e acentos possam ser exibidos. Conforme a imagem abaixo:<br><br>
 <img src="https://cdn.discordapp.com/attachments/826526043917647912/908768305660166144/unknown.png" width="60%" /><br><br>
 - Clique em Import. Conforme a imagem abaixo:; <br><br>
<img src="https://cdn.discordapp.com/attachments/826526043917647912/908769419872829470/unknown.png" width="64%" /><br><br>
 - Assim, será exibida a seguinte tela: <br><br>
<img src="https://cdn.discordapp.com/attachments/826526043917647912/908770623885574154/unknown.png" width="84%" /><br><br>

Dessa forma, a instalação estará completa e você poderá utilizar o sistema :tada:

## Veja também:
> [Guia do Usuário]()
