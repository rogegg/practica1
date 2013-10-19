#<u>Práctica1: Creación y despliegue de una aplicación en un PaaS.</u>


Durate el primer tema de la asignatura hemos conocido diferentes niveles de infraestructura virtual. En un nivel intermedio se encuentra el PaaS, que contiene infraestructura y una *pila de soluciones (solution stack)* completa que permite desplegar en el mismo nuestras propias aplicaciones.

###La plataforma: OpenShift
>!["OpenShift"](https://raw.github.com/rogegg/practica1/master/proyecto/capturas_pantalla/openshift.png)

La plataforma elegida para la práctica es [OpenShift](https://www.openshift.com) ya que se ha trabajado con ella en la parte final del tema 1. OpenShift presta servicio para correr aplicaciones en varios lenguajes como pueden ser:

* Java
* PHP
* Ruby 
* Node.js 
* Python 
* Perl
* MySQL
* ...


Esta gran variedad es debida gracias a la posibilidad de instalar módulos independientes capaces de dar soporte a estos lenguajes.

###¿Qué lenguaje y por qué?  PHP 5.3
La práctica se ha realizado con __PHP__ y HTML aprovechando la rápida integración del lenguaje en la plataforma y la clara orientación del mismo al desarrollo de aplicaciones web y al rápido acceso a información de una base de datos (si fuese necesario). 

Para ello lo único que necesitamos es instalar el módulo correspondiente, en este caso **"PHP 5.3"**. 

###La aplicación
La aplicación web es una presentación al material que vamos a ver en la asignatura, el temario de teoría y prácticas así como los links a los apuntes y repositorios de la misma.

La aplicación se ofrece bajo la licencia GPLv2. Recordamos que es una licencia *copyleft*.



##Pasos para la creación de nuestra aplicación.
A continuación se muestran algunas capturas para aclarar el proceso:

1. Registro en OpenShift: Lo primero que necesitamos es una cuenta en la plataforma.
>!["Registro"](https://raw.github.com/rogegg/practica1/master/proyecto/capturas_pantalla/registro_openshift.png)

2. Hacemos click en *Add application* y seleccionamos el módulo necesario. En nuestro caso el paquete de PHP5.3
>!["Anadir_aplicacion"](https://raw.github.com/rogegg/practica1/master/proyecto/capturas_pantalla/anadir_aplicacion.png)
>!["paquete_php"](https://raw.github.com/rogegg/practica1/master/proyecto/capturas_pantalla/seleccionar_paquete.png)

3. Elegir una dirección donde se publicará nuestra aplicación.
>!["direccion"](https://raw.github.com/rogegg/practica1/master/proyecto/capturas_pantalla/direccion_publica.png)

4. Una vez seleccionado el módulo y ya con una url para la aplicación OpenShift nos proporcionará una dirección desde donde descargar el repositorio.

>!["clone"](https://raw.github.com/rogegg/practica1/master/proyecto/capturas_pantalla/paquetes_instalados.png)

Como podemos ver arriba a la derecha *Source Code*.
Este nos servirá para descargar el repositorio desde un terminal de la siguiente manera:
>$ git clone <ssh://526...>

Esta acción la hemos realizado ya dentro de un repositorio local de GitHub, con el fin de poder subir los cambios independientemente a OpenShift o GitHub según nos interese.

El árbol de directorios quedaría:


>Practica1 (repositorio local de GitHub)
>>proyecto (repositorio local de OpenShift)
>>>libs, misc,php (directorios necesarios para la aplicación)


Para subir los cambios en OpenShift y poder verlos en nuestra dirección de la aplicación haremos, desde el terminal y dentro del directorio *.../Practica1/proyecto* (recordemos que es repositorio de OpenShift):

>$ git commit -a -m "comentario"
>$ git push

Como vemos funciona de forma similar a GitHub.


>5.Ahora ya conocemos la forma de descargar y actualizar los repositorios. ¡Ya estamos listos para trabajar en nuestra aplicación!

