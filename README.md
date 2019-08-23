# Generate Logs
A principal função da biblioteca, é gerencia o sistema de Logs.

## Instalar com Composer 
```
composer require xxggabriel/generate-logs:"1.0"
```

## Como usar
```
<?php 

require_once "vendor/autoload.php";

use Log\Log;

$log = new Log(__DIR__.'/logs.log');

$msg = "Test error.";
$file = __FILE__;
$line = __LINE__;

// Log de erro.
if(!$log->setMessageError($msg, $file, $line)){
  echo "Erro ao salvar o Log.";
}
// Log de aviso
if(!$log->setWarningMessage($msg, $file, $line)){
  echo "Erro ao salvar o Log.";
}
```

## Saída do arquivo de log
```
Warning log on file /var/www/html/generate-logs/tests/LogTest.php: at line 27: - 2019/08/23 21:08:35
Warning Message: Test warning.
 =======================================

Error log on file /var/www/html/generate-logs/tests/LogTest.php: at line 16: - 2019/08/23 21:08:07
Error Message: Test error.
 =======================================

```

## Ajude 
Ajude esse projeto, enviando seu Pull Request. Assim, manteremos esse projeto vivo!


## Licença
MIT License

Copyright (c) 2019 Gabriel Olivera

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
