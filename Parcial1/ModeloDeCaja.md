
# **MODELO DE CAJA EN HTML**

> *El modelo de caja es la manera en que se representan todos los elementos html en una página. Cada elemento genera una caja, el comportamiento de esa caja depende de su clasificación: si es de línea o de bloque
> A todas las cajas se les puede aplicar las siguientes propiedades: 
> **width, height, padding, margin, border, background**. 
> Lo particular de este concepto es que por defecto el width se refiere al ancho del contenido de un elemento (no al ancho total, de borde a borde).*

>*Para calcular el ancho total de un elemento es necesario sumar el ancho, más los dos padding (izquierda y derecha), más los bordes  (izquierda y derecha). En cuanto a los valores verticales pasa lo mismo, pero en diseño web generalmente nos preocupa más definir los anchos de los elementos ya que las alturas están dadas en general por el contenido de cada elemento.
>Existe una propiedad nueva (CSS3) que modifica este concepto y si la aplicamos, se considera el ancho del elemento a la distancia entre los bordes. Esta propiedad es box-sizing:border-box.*

+ **El background (imagen o color) ocupa todo el elemento desde los bordes.**
+ **El margin es la distancia desde el borde de un elemento hacia otro.**
+ **El padding es la distancia desde el borde hacia**   
+  **el contenido.**

>*Para que un elemento acepte las propiedades width, height, padding y margin tiene que ser de bloque. Si la etiqueta no es bloque originalmente, se puede modificar su condición con otra propiedad CSS: display.*

### **Medidas flexibles:**
> Existen propiedades que definen el valor máximo o mínimo, éstas permiten mayor flexibilidad y se usan especialmente en los sitios responsive:

+ Max-width: ancho máximo. El elemento no puede ser más ancho que el valor especificado pero sí puede achicarse.

+ Min-width: ancho mínimo.  El elemento no puede ser más angosto que el valor especificado pero sí puede agrandarse.

+ Max-height: alto máximo. El elemento no puede ser más alto que el valor especificado pero sí puede achicarse.

+ Min-height: alto mínimo. El elemento no puede ser más bajo que el valor especificado pero sí puede agrandarse.

### **Partes de una caja**  

>*Al hacer una caja de tipo bloque en CSS tenemos los elementos siguientes:*

+ El contenido de la caja (o content box): El área donde se muestra el contenido, cuyo tamaño puede cambiarse utilizando propiedades como **width y height**. 
  
+ El relleno de la caja (o padding box): El relleno es espacio en blanco alrededor del contenido; es posible controlar su tamaño usando la propiedad **padding** y otras propiedades relacionadas.  
  
+ El borde de la caja (o border box): El borde de la caja envuelve el contenido y el de relleno. Es posible controlar su tamaño y estilo utilizando la propiedad **border** y otras propiedades relacionadas.  

+ El margen de la caja (o margin box): El margen es la capa más externa. Envuelve el contenido, el relleno y el borde como espacio en blanco entre la caja y otros elementos. Es posible controlar su tamaño usando la propiedad **margin** y otras propiedades relacionadas.