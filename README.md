# LAIKA - API :smile:
## Cristian Camilo Vasquez Osorio - laika
### Prueba realizada del 26/11/2021 al 28/11/2021

Bienvenido. Esta es la prueba técnica para validar mis conocimientos y fortalezas en el mundo del Backend utilizando laravel, demostrando así mi capacidad de arquitectura de codigo, patrones de diseño, clean code, normas SOLID, REST y demás para el mundo de Laika.

### Contenido
* Modelo relacional de mi base de datos y procedimientos almacenados.
* Patron de diseño y arquitectura de la aplicación.
* Implementación de normas S.O.L.I.D
* Pruebas unitarias.
* Objetivos cumplidos.
* Herramientas de desarrollo utilizadas.
* API en producción con HEROKU.
* ¿Deseas probas la api en POSTMAN?
* Un poco sobre mí :grinning:

## MODELO RELACIONAL DE MI BASE DE DATOS Y PROCEDIMIENTOS ALMACENADOS
Para la base de datos llamada **test** tomé como referencia 2 tablas: una de datos llamada **usuarios** y una estática llamada **países**, las cuales tiene una relación de uno a muchos.<br/>
<img src='https://github.com/cristianV0117/docs/blob/main/capturaUml.PNG' alt='linkedin' height='250'><br/>
Para crear las tablas, las relaciones y los procedimientos almacenados se debe ejecutar el comando:<br/>
**php artisan migrate**<br/>
Este comando también crea los procedimientos almacenados que tendrán interacción con las tablas ya mencionadas.<br/>
La tabla **countries** funciona a través de un seeder, ejecutar el comando **php artisan db:seed** para llenar dicha tabla automaticamente.

## PATRÓN DE DISEÑO Y ARQUITECTURA DE LA APLICACIÓN
* Patrón de diseño
Para la arquitectura se implementaron conceptos de **ADR - (ACCION - DOMINIO - RESPUESTA)** para no depender de la arquitectura por defecto de laravel, la cual es **MVC**. Utilizando ADR permite que el código se atomice de una mayor manera, centralizando responsabilidades a cada una de las clases, así siguiendo el principio de responsabilidad unica, que se implementa en dichas clases que cumplen más de una responsabilidad, como controladores, modelos de dominio, repositorios entre otros.
Se implementaron normas **REST** para el API, incluyendo normas **HATEOAS** para darle navegabilidad a los recursos
* Arquitectura
El concepto de responsabilidad única se implementa en el patrón ADR, causando que, por ejemplo, los controladores sólo tengan una responsabilidad y no adjuntar métodos por verbo http en un solo controlador.<br>
<img src='https://github.com/cristianV0117/docs/blob/main/arquitectura.PNG' alt='linkedin' height='250'><br/>

## IMPLEMENTACIÓN DE NORMAS S.O.L.I.D
Las normas SOLID son muy importantes para mantener un código limpio y bien estructurado por lo que, para este trabajo, se implementa 4 conceptos de dichas normas:
* RESPONSABILIDAD ÚNICA Y ABIERTO/CERRADO
<br> Le decimos a las clases y a los métodos que solo deben cumplir una sola responsabilidad, con ello cerrando las puertas de entrada que puede tener una clase y así cerrando el acoplamiento, dejando el codigo mas mantenible<br>
<img src='https://github.com/cristianV0117/docs/blob/main/solid1.PNG' alt='linkedin' height='250'><br/>
* INVERSIÓN DE DEPENDENCIAS
<br> Utilizamos la inversión de dependencias para formar una abstracción entre dos clases gracias al manejo de **interfaces** e implementando la **inyección de dependencias**. Desacoplamos nuestro código y así dejamos de depender de clases con funciones padre, por lo que hacer cambios a nivel de código será más óptimo en un futuro.<br>
<img src='https://github.com/cristianV0117/docs/blob/main/solid2.PNG' alt='linkedin' height='150'><br/>
* SEGREGACIÓN DE INTERFACES
<br>Con la segregación de interfaces, que va de la mano con el principio de inversión de dependencias, armamos nuestras interfaces para que sus métodos sean definidos y propios de la interfaz, para así no tener el error de implementar interfaces en clases que no necesita y se obligan a usar metodos inncecesarios.<br>
<img src='https://github.com/cristianV0117/docs/blob/main/solid3.PNG' alt='linkedin' height='170'><br/>

## PRUEBAS UNITARIAS
Se implementaron pruebas unitarias con PHPUNIT el cual viene intregado a laravel. Hay 17 pruebas las cuales se enfocan en los endpoints de países, usuarios y autorizaciones con API KEY. Para probar los unit test se ejecuta el comando **php artisan test**

## OBJETIVOS CUMPLIDOS
* Crear todos los caminos para el mantenimiento de la tabla relacional no paramétrica usando consumo directo de la base de datos sin ORM a través de Stored Procedures.
* Crear pruebas unitarias a los EndPoints logrando una cobertura de al menos el 80%. Y demostrar dicha cobertura.
* Crear un middleware donde se verifique que exista y tenga valor un header “api-key-laika”.
* Ningún Endpoint deberá demorar más de 250 milisegundos en dar respuesta.
* Dentro de las pruebas unitarias se deberá demostrar que se realizan las validaciones requeridas para garantizar la calidad de la data almacenada. (Ejemplo – Si pides un teléfono que solo sean números, si pides un Email que se valide el formato adecuado).

## HERRAMIENTAS DE DESARROLLO UTILIZADAS
* Laravel v - 8.73.2
* postman
* MySQL workbench
* Git
* GitHub
* Heroku

## API EN PRODUCCIÓN CON HEROKU
Se subió la API a producción utilizando el sistema de despliegue de HEROKU
* http://laika-api-app.herokuapp.com/api/v1

## ¿DESEAS PROBAR LA API EN POSTMAN?
https://www.getpostman.com/collections/74de7a573a09942891fb se debe cambiar el enviorement de LAIKA-DOMAIN a http://laika-api-app.herokuapp.com/api/v1

## SOBRE MÍ
Espero con ansias ser parte de Laika, aportar mis conocimientos y aptitudes, como también tener la posibilidad de ser un pilar en el engranaje encargado del crecimiento de la empresa.
Actualmente estudio sobre **DDD** - **ARQUITECTURA HEXAGONAL** - **AWS** - **DOCKER** y **FLASK CON PYTHON**. Quiero fortalecerme como profesional y siento que Laika es la oportunidad que necesito. Muchas gracias :grinning:





