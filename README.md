<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


### Link al deploy de heroku: http://proyecto-juanbunes.herokuapp.com/
(Desde los cambios en los usuarios de heroku, esta aplicacion no se encuentra subida al servidor)
### Video de la defensa: https://drive.google.com/file/d/1o6JNAIfLjktZbudL-lpTmV2J2LkvGlDn/view?usp=sharing (si no se visualiza correctamente, probar de descargar el video)

#
## Agregados finales de esta etapa:
Como ultima funcionalidad al proyecto de Laravel, introduci la posibilidad de añadir comentarios a la base de datos de postgres. Cada producto va a tener asociado 0 o mas comentarios y los comentarios tienen un autor, su mail y el contenido del mensaje. En esta aplicacion solo se puede visualizar los comentarios asignados a un producto ya que no tiene mucho sentido que puedan eliminarse o modificarse desde esta aplicacion. La modificacion y eliminacion se va a hacer a traves de la aplicacion de react, utilizando la API, y la llevaran a cabo aquellos usuarios que son moderadores.

#
### Usuarios y contraseñas necesarios:
#### 1. Para login en el sistema como administrador: 
Ya no se pueden registrar nuevos usuarios desde la pagina web.
Usuario: franciscobunes@rocketmail.com
Contraseña: holahola

##
### Librerias/APIs/utilidades utilizadas:
1. Bootstrap v5.1.3: Para el login y registro de usuarios al sistema.
2. [Bootstrap](https://getbootstrap.com/docs/5.0/getting-started/introduction/): Como starter template en el layout vista padre vistaPadre y para formularios
3. [Datatable](https://datatables.net/examples/styling/bootstrap5.html): Tabla utilizada para la visualizacion de los datos
4. [Cloudinary API](https://cloudinary.com/documentation/image_upload_api_reference): Para guardar imagenes asociadas a los productos en un repositorio externo

##
### Funcionamiento API Cloudinary:
La API cloudinary provee metodos para subir, visualizar y eliminar imagenes a un repositorio vinculado a una cuenta de [Cloudinary](https://cloudinary.com/). La logica se encuentra en el ProductoController en los metodos store, updateImagen y destroy. En el campo imagen de la tabla productos se almacena un string que hace referencia al public_id que la API devuelve cuando se crea una imagen. El mismo id se utiliza para borrar una imagen en cloudinary al eliminar un producto de la base de datos o al visualizarla a traves de la pagina.

