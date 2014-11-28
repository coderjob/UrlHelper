# Exercício de TDD

Url helper para a sua aplicacão

### Requisitos

Para completar o exercício, você precisará ser capaz de:

- programar em php
- instalar composer
- instalar dependências com o composer
- instalar o git
- saber fazer um pull request


## O que fazer

Crie, utilizando a abordagem TDD o helper que funcione como explicado abaixo:

## Modo de usar:

Dado a segunte url

```php
$baseUrl = 'http://example.com'
```


### Usando a classe url

```php
$url = new Url($baseUrl);

echo $url; // http://example.com

$url->setUri('admin/produtos');

echo $url; // http://example.com/admin/produtos

$url->setParams(array(
    'action' => 'edit',
    'edit'   => '16',
));

echo $url;  // http://example.com/admin/noticias?action=edit&id=16
```


### Usando o Helper

```php
use App\Helpers\UrlHelper;

$helper = new UrlHelper($baseUrl);

$url = $helper->getUrl('admin/usuarios', array(
    'action' => 'edit',
    'edit'   => '1',
));

echo get_class($url); // App\Url

echo $url;            // http://example.com/admin/usuarios?action=edit&id=1
```

### Instalando as dependências

```
composer install
```

### Rodando os testes

```
./vendor/bin/phpunit -c tests/phpunit.xml
```

### Como enviar o seu exercício

- Faća um fork do projeto
- Crie um branch
- Codifique
- Faca um pull request

Dúvidas? Pergunte: marcelo.jacobus@gmail.co

