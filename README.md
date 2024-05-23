## Proyecto de Práctica en Laravel

Este proyecto de práctica en Laravel es una aplicación web básica que se construyó con el propósito de comprender los fundamentos de Laravel y desarrollar habilidades en el desarrollo web utilizando este popular framework de PHP.

## Tecnologías Utilizadas

La aplicación se desarrolló utilizando las siguientes tecnologías y herramientas:

Laravel: Se utilizó como el framework principal para el desarrollo del backend de la aplicación, proporcionando una estructura MVC sólida y numerosas características integradas.
Jetstream: Se implementó para manejar la autenticación de usuarios, proporcionando características de registro, inicio de sesión, verificación de correo electrónico, restablecimiento de contraseña, etc.
MySQL: Se utilizó como el sistema de gestión de base de datos relacional para almacenar y gestionar los datos de la aplicación.
Alertify JS: Se incorporó para mostrar notificaciones al usuario de manera elegante y fácil de usar.
Tailwind CSS: Se aprovechó para el diseño y estilización de la interfaz de usuario, utilizando su enfoque de utilidad-first para crear estilos limpios y responsivos.

## Estructura del Proyecto

El proyecto sigue una estructura de directorios estándar de Laravel, con las siguientes carpetas y archivos principales:

app/: Contiene los modelos de la aplicación, que representan las entidades de la base de datos.
config/: Contiene archivos de configuración para la aplicación, incluyendo configuraciones de base de datos, autenticación, rutas, etc.
database/migrations/: Contiene archivos de migración que definen la estructura de la base de datos y permiten gestionar cambios en la misma.
public/: Contiene los archivos públicos accesibles desde el navegador, como imágenes, scripts, estilos, etc.
resources/: Contiene recursos como vistas de Blade, componentes de Vue.js, archivos CSS, JavaScript, etc.
routes/: Contiene archivos de definición de rutas que dirigen las solicitudes HTTP a los controladores correspondientes.
tests/: Contiene archivos de pruebas automatizadas para probar diferentes aspectos de la aplicación.
vendor/: Contiene las dependencias de Composer, incluyendo las bibliotecas de terceros utilizadas en el proyecto.

## Conclusión

Este proyecto de práctica en Laravel proporciona una introducción práctica al desarrollo web utilizando este framework PHP. Al construir una aplicación sencilla de gestión de estudiantes y maestros, con las principales funcionalidades de un CRUD y haciendo uso del Sistema de Autenticacion.

/* */

## Sistema de Autenticación de Jetstream

Jetstream es una biblioteca que proporciona un sistema de autenticación completo y personalizable para las aplicaciones Laravel. Facilita la implementación de características de autenticación avanzadas, como el registro de usuarios, la gestión de sesiones, la verificación de correo electrónico, el restablecimiento de contraseñas, la autenticación de dos factores, entre otras.

## Características Principales

Registro de Usuarios: Jetstream incluye formularios de registro preconstruidos que permiten a los usuarios crear cuentas en la aplicación. Los usuarios pueden proporcionar su nombre, dirección de correo electrónico y contraseña para registrarse.

Inicio de Sesión: Una vez registrados, los usuarios pueden iniciar sesión en la aplicación utilizando su dirección de correo electrónico y contraseña. Jetstream maneja la autenticación y la creación de sesiones de usuario de forma segura.

Verificación de Correo Electrónico: Jetstream facilita la implementación de la verificación de correo electrónico para nuevos usuarios. Después de registrarse, se envía un correo electrónico de verificación con un enlace único al usuario, quien debe hacer clic en él para verificar su dirección de correo electrónico y activar su cuenta.

Restablecimiento de Contraseñas: Los usuarios pueden restablecer sus contraseñas en caso de olvido. Jetstream proporciona formularios para que los usuarios ingresen su dirección de correo electrónico y reciban un enlace seguro para restablecer su contraseña.

Autenticación de Dos Factores: Jetstream permite habilitar la autenticación de dos factores (2FA) para una capa adicional de seguridad. Los usuarios pueden optar por activar la autenticación de dos factores en su cuenta y luego usar una aplicación de autenticación como Google Authenticator para generar códigos de seguridad adicionales durante el inicio de sesión.

## Personalización y Flexibilidad

Jetstream es altamente personalizable y permite adaptar el sistema de autenticación según las necesidades específicas de la aplicación. Algunas de las formas en que se puede personalizar incluyen:

Plantillas de Vistas: Jetstream proporciona plantillas Blade predefinidas para las vistas de autenticación, pero se pueden personalizar según el diseño y los requisitos de la aplicación.
Configuración de Rutas: Las rutas de autenticación se pueden personalizar y proteger según sea necesario. Jetstream facilita la gestión de rutas para el registro, inicio de sesión, verificación de correo electrónico, restablecimiento de contraseña, etc.
Notificaciones y Eventos: Jetstream utiliza notificaciones y eventos para manejar acciones como el envío de correos electrónicos de verificación, notificaciones de restablecimiento de contraseñas, etc. Estos pueden personalizarse para adaptarse al estilo y los requisitos de la aplicación.

## Implementación en el Proyecto
En este proyecto de práctica en Laravel, se utilizó Jetstream para gestionar la autenticación de usuarios. Los usuarios pueden registrarse, iniciar sesión, verificar su dirección de correo electrónico, restablecer contraseñas y, opcionalmente, habilitar la autenticación de dos factores para una mayor seguridad. Jetstream proporciona una base sólida para la autenticación de la aplicación y facilita el desarrollo de características adicionales de seguridad y administración de usuarios.

