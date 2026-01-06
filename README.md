# Divical_Back
Backend para la subida de archivos

Ejecuta estos comandos uno por uno en tu carpeta C:\Users\angel\Desktop\php:
Bashcomposer require slim/slim -W
(Instala la latest 4.15.1 automáticamente, compatible con tu PHP 8.2)
Bashcomposer require slim/psr7 -W
(Instala la latest 1.8.0, compatible)
Bashcomposer require vlucas/phpdotenv -W
(Instala la latest 5.6.x)
Bashcomposer require dmhendricks/b2-sdk-php -W




Solución rápida y definitiva (para Windows)

Descarga el archivo de certificados CA:
Ve a: https://curl.se/ca/cacert.pem
Descarga el archivo y guárdalo como cacert.pem en una carpeta fácil, por ejemplo:
C:\php\cacert.pem (o en tu carpeta de proyecto: C:\Users\angel\Desktop\php\cacert.pem)

Edita tu php.ini (el mismo que usaste para activar pdo_pgsql):
Abre php.ini (usa php --ini para encontrar la ruta).
Busca o agrega estas líneas (al final si no existen):ini[curl]
curl.cainfo = "C:\php\cacert.pem"   # Ruta completa al archivo que descargaste

[openssl]
openssl.cafile = "C:\php\cacert.pem"   # Igual ruta
Guarda el archivo.

Solución paso a paso (para Windows)

Encuentra tu php.ini:
Abre una terminal (CMD o PowerShell).
Ejecuta:textphp --ini
Te dirá la ruta del php.ini cargado (ej: C:\xampp\php\php.ini o C:\php\php.ini).

Edita php.ini:
Abre ese archivo con Notepad o VS Code (como administrador si es necesario).
Busca (Ctrl + F) estas líneas (están comentadas con ;):text;extension=pdo_pgsql
;extension=pgsql
Quita el punto y coma (;) para que queden así:textextension=pdo_pgsql
extension=pgsql
Si no existen, agrégalas al final de la sección de extensions (después de otras extension=...).

Guarda el archivo.
Reinicia el servidor PHP:
Si usas XAMPP: Reinicia Apache desde el panel.
Si usas php -S: Para el servidor (Ctrl + C) y vuelve a arrancarlo:textcd C:\Users\angel\Desktop\php\public
php -S localhost:3000

Verifica que funcione:
Ejecuta en terminal:textphp -m | findstr pgsql
Debe aparecer:textpdo_pgsql
pgsql
Si no aparece, revisa que editaste el php.ini correcto (el que muestra php --ini).
