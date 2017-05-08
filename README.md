# Prestashop 1.6 Plugin

## Introducción

NPS se integra fácilmente a Prestashop, otorgando la posibilidad de poder configurar su medio de pago en simples pasos. En sólo cuestión de minutos su carrito de compras quedará listo para comenzar a operar en línea.

## Disponibilidad

Este paquete se encuentra certificado para la versión 1.6.0.x.


## Modos de Integración

Para el manejo de transacciones financieras el servidor PSP soporta dos mecanismos de integración en Prestashop con el método 3 partes:

•	PayOnline_3p
•	Authorize_3p / Capture 

El método Authorize, precisa de una captura posterior desde el panel de administrador.
El método Authorize_3p/Capture_3p actúa como PayOnline_3p donde la autorización y captura se realizan en la misma transacción.

## Instalación

**Para realizar la siguiente configuración es requisito tener instalado PrestaShop: 

Junto con esta documentación usted recibirá un archivo comprimido con el módulo que se integrará a Prestashop.

1.	Extraer el archivo NPS.Prestashop.1.6.0.x.Connector.v1.01.006.tar.gz

2.	Renombrar la carpeta admin con el nombre de la carpeta admin que está en prestashop.

3.	Copiar los cuatro directorios extraídas y en el directorio raíz de prestashop. 

4.	Ingresar al Administrador de tienda de PrestaShop.

5.	En el Menú Módulos seleccionar Módulos:

![1](https://cloud.githubusercontent.com/assets/24914148/25529881/65136ea0-2bfa-11e7-841f-7251dda04e76.png)

6.	En categorías seleccionar Plataforma de pago

![2](https://cloud.githubusercontent.com/assets/24914148/25529882/651736fc-2bfa-11e7-860e-ea96e1955d17.png)

7.	Al traer el resultado se puede ver el módulo NPS

![3](https://cloud.githubusercontent.com/assets/24914148/25529883/651856f4-2bfa-11e7-8243-2ea60883ce76.png)

8.	Al finalizar la instalación verán la siguiente pantalla:

![4](https://cloud.githubusercontent.com/assets/24914148/25529884/65226ec8-2bfa-11e7-9d4e-73f9c05b034d.png)

9.	Configurar con los datos que corresponda:

Metodología de Pago: PayOnline_3p / p Autorización y Captura.
Completar todos los datos con la información provista por altas@nps.com.ar y presionar SALVAR.

![5](https://cloud.githubusercontent.com/assets/24914148/25529885/652b101e-2bfa-11e7-984a-dc58bf8f5883.png)

Ejemplo: 

Comercio Email: mail@mail.com
Identificacion del Comerciante: test
URL Servicio Web: https://implementacion.nps.com.ar/ws.php?wsdl
Clave Secreta: mf7mw2Aal9ozRkrbYD9asZ7mGKx4t7LfmQPgSZHBg3A7nziJCrt5Q0rgLnkCu3pe

## Configuraciones Avanzadas

En esta sección se explicará cómo configurar la moneda, el país, y las cuotas.

1.	Configuración de Moneda:
Seleccionar “Menú” / “Localización”/ “Moneda”

![6](https://cloud.githubusercontent.com/assets/24914148/25529886/654ad58e-2bfa-11e7-8bf2-e15400ba5c80.png)

Aquí se podrá configurar la moneda del país con el cuál se va a operar, por ejemplo en argentina los parámetros son :
Argentina = ARG   ,  Pesos Argentinos = 032.

Como ya está creado lo modificamos con los valores correctos, ya que por default Argentina figura como ARS y no ARG y la moneda 32 en vez de 032.

![7](https://cloud.githubusercontent.com/assets/24914148/25529887/654e293c-2bfa-11e7-9958-643809a2b39c.png)

2.	Configuración de Países

![8](https://cloud.githubusercontent.com/assets/24914148/25529888/655130f0-2bfa-11e7-9764-78785281a577.png)

Se pueden agregar o Modificar países.
Ejemplo Modificación de País Argentina:


![9](https://cloud.githubusercontent.com/assets/24914148/25529889/6553adbc-2bfa-11e7-90e2-ea6229c132dd.png)

![10](https://cloud.githubusercontent.com/assets/24914148/25529875/64d71fc2-2bfa-11e7-8be3-bd03206b6dc2.png)

![11](https://cloud.githubusercontent.com/assets/24914148/25529876/64e08576-2bfa-11e7-974f-63483ce33ddd.png)

3.	Configuración de Cuotas

Menú: NPS / Installments

(En caso de no poder ver la pantalla correctamente (figura1), realizar el paso 4 y luego volver al paso 3)

![12](https://cloud.githubusercontent.com/assets/24914148/25529877/64e3420c-2bfa-11e7-9516-0e2e07d4644b.png)

Se desplegará la siguiente pantalla:
(En caso de no poder ver la pantalla correctamente (Figura1), realizar el paso 4 y luego volver al paso 3) 

![13](https://cloud.githubusercontent.com/assets/24914148/25529879/64e62e54-2bfa-11e7-92cf-951002c0e872.png)

Para añadir un nuevo plan de cuotas presionar en “Añadir nuevo”

Configuración de nuevo plan de cuotas:

i)	Seleccionan el Producto
ii)	Ingresan las cuotas, ejemplo 1
iii)	Ingresan el porcentaje de interés o “0” si no tiene interés. 
iv)	Guardar o Save

![14](https://cloud.githubusercontent.com/assets/24914148/25529878/64e501dc-2bfa-11e7-9708-6a4f0c475b01.png)

4.	Limpiar Caché nuevamente. (Menú: Parámetros Avanzados / Rendimiento / Vacia el caché:

![15](https://cloud.githubusercontent.com/assets/24914148/25529880/64eb2846-2bfa-11e7-92b7-5eb025939758.png)



