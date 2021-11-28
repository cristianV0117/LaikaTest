# LAIKA - API :smile:
## Cristian Camilo Vasquez Osorio - laika
### Prueba realizada del 26/11/2021 al 28/11/2021

Bienvenido, esta es la prueba tecnica para validar mis conocimientos y fortalezas en el mundo del Backend utilizando laravel y demostrando así, mi capacidad de arquitectura de codigo, patrones de diseño, clean code, normas SOLID, REST y demás para el mundo de Laika.

### Contenido
* Modelo relacional de mi base de datos y procedimientos almacenados
* Patron de diseño Y arquitectura de la aplicacion
* Implementacion de normas S.O.L.I.D
* Pruebas unitarias
* Objetivos cumplidos
* Herramientas de desarrollo utilizadas
* API en produccion con HEROKU
* ¿Deseas probas la api en POSTMAN?
* Un poco sobre mí :grinning:

## MODELO RELACIONAL DE MI BASE DE DATOS & PROCEDIMIENTOS ALMACENADOS
Para la base de datos llamada **test** tomé como referencia 2 tablas, una de datos llamada usuarios y una estatica llamada paises las cuales tiene una relacion de uno a muchos.<br/>
<img src='https://github.com/cristianV0117/docs/blob/main/capturaUml.PNG' alt='linkedin' height='250'><br/>
Para crear las tablas, las relaciones y los procedimientos almacenados se debe ejecutar el comando:<br/>
**php artisan migrate**<br/>
Este comando tambien crea los procedimeintos almacenados que tendrán interaccion con las tablas ya mencionadas.<br/>
La tabla **countries** funciona a traves de un seeder, ejecutar el comando **php artisan db:seed** para llenar dicha tabla automaticamente.

## PATRON DE DISEÑO & ARQUITECTURA DE LA APLICACION
* Patron de diseño
Para la arquitectura se implementó conceptos de **ADR - (ACCION - DOMINIO - RESPUESTA)** para no depender de la arquitectura por defecto de laravel la cual es **MVC**, utilizando ADR permite que el codigo se atomice de una mayor manera centralizando responsabilidades a cada una de las clases y así siguiendo el principio de responsabilidad unica, esto se implementa en dichas clases que cumplen mas de una responsabilidad, como controladores, modelos de dominio, repositorios entre otros.
* Arquitectura
El concepto de responsabilidad unica se implementa en el patron ADR causando que, por ejemplo los controladore solo tengan una sola responsabilidad y no adjuntar metodos por verbo http en un solo controlador.<br>
<img src='https://github.com/cristianV0117/docs/blob/main/arquitectura.PNG' alt='linkedin' height='250'><br/>

## IMPLEMENTACION DE NORMAS S.O.L.I.D
Las normas SOLID son muy importantes para mantener un codigo limpio y bien estructurado por lo que para este trabajo se implementa 4 conceptos de dichas normas
* RESPONSABILIDAD UNICA & ABIERTO/CERRADO
<br> Le decimos a las clases y a los metodos que solo deben cumplir una sola responsabilidad con ello cerrando las puertas de entrada que puede tener una clase y asi cerrando el acoplamiento dejando el codigo mas mantenible<br>
<img src='https://github.com/cristianV0117/docs/blob/main/solid1.PNG' alt='linkedin' height='250'><br/>
* INVERSION DE DEPENDENCIAS
<br> Utilizamos la inversion de dependencias para formar una abstraccion entre dos clases gracias al menejo de **interfaces** e implementando la **inyeccion de dependencias** desacoplamos nuestro codigo y asi dejamos de depender de clases con funciones padre. por lo que hacer cambios a nivel de codigo será mas optimo en un futuro.<br>
<img src='https://github.com/cristianV0117/docs/blob/main/solid2.PNG' alt='linkedin' height='150'><br/>
* SEGREGACION DE INTERFACES
<br>Con la segregacion de interfaces que va de la mano con el principio de inversionde dependencias, armamos nuestras interfcaes para que sus metodos sean definidos y propios de la interfaz y así no tener el error de implementar interfaces en clases que no necesita y se obligan a usar metodos inncecesario.<br>
<img src='https://github.com/cristianV0117/docs/blob/main/solid3.PNG' alt='linkedin' height='150'><br/>

## PRUEBAS UNITARIAS
Se implementaron pruebas unitarias con PHPUNIT el cual viene intregado a laravel, hay 17 pruebas las cuales se enfocan en los controladores endpoints de paises, usuraios y autorizaciones con API KEY.



