
toymaniacos@gmail.com

......... OUTLOOK .........................

Viktor Devops  
vitorabreudevops@outlook.com
#xbox360#

...........  CONTA GIT HUB ............

USER ViktorDevops 
EMAIL - vitorabreudevops@outlook.com
SENHA - #gitxbox360#

ID - @ViktorDevops

.....................

- https://www.apachefriends.org/pt_br/index.html
-	https://www.apachefriends.org/pt_br/download_success.html
- https://www.apachefriends.org/faq_windows.html
-	site - mindmeister - https://www.mindmeister.com/pt
................

composer é um gerenciador de dependencias - baixar atualizar e manter a versão correta do projeto
exemplos de dependencias {

	Envio de email
	Meios de pagamento
	Meios de entrega
	Geração de logs
	Validação de informação
	Emissão de nota fiscal
	Integração com outros sistemas
	Bibliotécas próprias

}

https://getcomposer.org/
http://composer.json.jolicode.com/
https://packagist.org/  -- grande repositório de bibliotescas
https://www.gitignore.io/

para instalar o composer teve que se fazer o comentário no php.ini - ;extension=php_openssl.dll 

cmder.net - site de um programa

Acabei baixando o Git Bash para poder usar o terminal de comandos

.............. INSTALANDO O COMPOSER ....................

getcomposer

getcomposer.org/schema.json

https://choosealicense.com/
.............

cd /c/xampp/htdocs/notification/
cd  /c/xampp/htdocs

.......... Configuração de parametros

vendor / name - vitor / notification
Readme - This is a library that uses composer as the basis for generating email notifications
dev
library

--------------------------------------------------------------------------------------------------------------------------------------------
https://packagist.org/packages/phpmailer/phpmailer  -  site da documentação do phpmailer
--------------------------------------------------------------------------------------------------------------------------------------------

Instalação e carregamento - O PHPMailer está disponível no Packagist (usando versionamento semântico), e a instalação via Composer é a maneira recomendada de instalar o 
PHPMailer. Basta adicionar esta linha ao seu arquivo composer.json :

" phpmailer / phpmailer " : " ~ 6.0 " 

ou correr

composer requier phpmailer / phpmailer

traduzido errado Observe que a vendorpasta e o vendor/autoload.phpscript são gerados pelo Composer; eles não fazem parte do PHPMailer.

...................................

composer require phpmailer/phpmailer - mudamos para 6.0.5 e depois pelo terminal demos o comando : composer update

composer remove phpmailer/phpmailer

composer require phpmailer/phpmailer:6.0.5

composer list  ----- mostra lista de comandos

var_dump — Mostra informações sobre a variável - Esta função imprime uma saída de algumas informações sobre a variável que você passou. 

É importante notar que foi criada a classe Email.php, assim deve-se buscar entender o seu conteudo, como name space e o restante

Em Java, o construtor é definido como um método cujo nome deve ser o mesmo nome da classe e sem indicação do tipo de retorno -- nem mesmo void. O construtor é unicamente 
invocado no momento da criação do objeto através do operador new. O retorno do operador new é uma referência para o objeto recém-criado.

......................... Comando para o git hub

git init

git remote add origin https://github.com/ViktorDevops/notification.git

git pull origin master --allow-unrelated-histories

git status

Entrar no site  - https://www.gitignore.io/ e gerar um documentos através destes parametros{
	linux macos windows composer php netbeans phpstorm
}

nano .gitignore - cria um arquivo em branco onde se irá colar o codigo de parametros do gitignore

voltar ao documento nono .gitignore e modificar a vendor para lib_ext

ocultar as pastas do netbeans e phpstorm antes de enviar para o github

.... Modificar no gitignore:

nano .gitignore

.idea/
idea/

.nbproject/
nbproject/

------- Gerar o Commit

git add .
git commit -m "Commit Initial"

........ Enviar para o Git Hub

git push origin master


.......... site de configuração git

git config --global user.name "ViktorDevops"
git config --global user.email "vitorabreudevops@outlook.com"

....... Configurando o Readme

dillinger.io - site para conferencia do modelo de readme

nano README.md  

colar a configuração modelo

git add .
git commit -m "Set README.md"
git push origin master



.......................

Python 3 COMPLETO - Do iniciante ao avançado!

............

<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use  PHPMailer \ PHPMailer \ Exception ;

class Email {
    
    private $mail = \stdClass::class;
    
    public function __construct() {
        
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 2;                                        // Enable verbose debug output
        $this->mail->isSMTP();                                             // Set mailer to use SMTP
        $this->mail->Host = 'smtp.live.com';                               // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                                      // Enable SMTP authentication
        $this->mail->Username = 'email@outlook.com';                       // SMTP username
        $this->mail->Password = 'password';                                // SMTP password
        $this->mail->SMTPSecure = 'tsl';                                   // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = 587;                                           // TCP port to connect to
        $this->mail->setLanguage('br');
        $this->mail->CharSet = 'utf-8';
        $this->mail->isHTML(true);
        $this->mail->setFrom('email@outlook.com', 'Name');         
        
    }    
    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName){
        
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;        
        $this->mail->addReplyTo($replyEmail. $replyName);
        $this->mail->addAddress($addressEmail, $addressName);
        
        try{
            $this->mail->send();
            
        }catch (Exception $e){            
            echo"Erro ao enviar o email: ($this->mail->ErrorInfo) ($e->getMessage())";
        }      
        
    }
}




