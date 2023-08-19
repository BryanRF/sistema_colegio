# Configuración del Proyecto Sistema Colegio

Esta es una guía paso a paso para configurar y ejecutar el proyecto Sistema Colegio en tu entorno local.

## Requerimientos

Asegúrate de tener instalados los siguientes elementos antes de comenzar:

- [XAMPP](https://www.apachefriends.org/) - Última versión recomendada.
- [Visual Studio Code](https://code.visualstudio.com/download) - Editor de código preferido.
- [Node.js](https://nodejs.org/es) - Plataforma JavaScript.
- [Composer](https://getcomposer.org/Composer-Setup.exe) - Gestor de paquetes PHP.

## Configuración del Proyecto

1. Clona este repositorio en tu sistema.

2. Abre XAMPP y asegúrate de que los servicios de Apache y MySQL estén activos.

3. En el módulo de Apache, abre el archivo `php.ini`. Puedes encontrarlo en la configuración.
   Busca la línea `;extension=zip` y elimina el `;` al comienzo para que se vea así: `extension=zip`.

4. Abre el proyecto en Visual Studio Code.

5. Cambia el nombre del archivo `txtenv` a `.env`.

6. Abre el terminal en Visual Studio Code usando `Ctrl + Shift + Ñ`.

7. Ejecuta el siguiente comando para instalar las dependencias de Node.js:


8. Ejecuta el siguiente comando para instalar las dependencias de Composer:


9. Ejecuta las migraciones de la base de datos y agrega datos de prueba:


10. Abre tu navegador web e ingresa la siguiente URL para acceder al proyecto:

 ```
 http://localhost/sistema_colegio/public
 ```

¡Listo! Ahora deberías poder ver y explorar el proyecto Sistema Colegio en tu entorno local.

---
