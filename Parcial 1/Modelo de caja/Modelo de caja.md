# *INSTITUTO TECNOLÓGICO DE NUEVO LAREDO*  
## **PROGRAMACIÓN WEB 7 - 8 A.M.**  
### **Ing. Gerardo Pineda Zapata**  
### Modelo de caja  
### __*Jafet Anselmo Sena Ramos 5to Semestre ISC*__
---
Todo en CSS tiene una caja alrededor, y comprender estas cajas es clave para poder crear diseños con CSS o para alinear elementos con otros elementos.  
En CSS, en general, hay dos tipos de cajas: cajas en bloque y cajas en línea. Estas características se refieren al modo como se comporta la caja en términos de flujo de página y en relación con otras cajas de la página:  
Si una caja se define como un bloque, se comportará de las maneras siguientes:
- La caja fuerza un salto de línea al llegar al final de la línea.
- La caja se extenderá en la dirección de la línea para llenar todo el espacio disponible que haya en su contenedor. En la mayoría de los casos, esto significa que la caja será tan ancha como su contenedor, y llenará el 100% del espacio disponible.
- Se respetan las propiedades width y height.  
- El relleno, el margen y el borde mantienen a los otros elementos alejados de la caja.  

La representación básica del modelo de cajas se basa en varios conceptos importantes, como veremos a continuación:  
- El borde (border), en negro, es el límite que separa el interior del exterior del elemento.  
- El márgen (margin), en naranja, es la parte exterior del elemento, por fuera del borde.  
- El relleno (padding), en verde, es la parte interior del elemento, entre el contenido y el borde.  
- El contenido, en azul, es la parte interior del elemento, excluyendo el relleno.  

Cada una de estas partes del modelo de cajas de CSS se puede alterar, cambiando sus dimensiones, colores, etc. Así pues, cada elemento HTML tendrá su propio borde, margen, relleno y contenido.
![Partes del modelo de caja](https://lenguajecss.com/css/modelo-de-cajas/que-es/modelo-de-cajas.png)  
#### Zonas De Un Elemento  
En CSS existen ciertas palabras clave para hacer referencia a una zona u orientación concreta sobre un elemento. Son conceptos muy sencillos y prácticamente lógicos, por lo que no tendrás ningún problema en comprenderlos. Son los siguientes:  
![Zonas de un elemento](https://lenguajecss.com/css/modelo-de-cajas/que-es/positions.png)  
  
- **Top:** Se refiere a la parte superior del elemento.  
- **Left:** Se refiere a la parte izquierda del elemento.  
- **Right:** Se refiere a la parte derecha del elemento.  
- **Bottom:** Se refiere a la parte inferior del elemento.  
- **Center:** En algunos casos se puede especificar el valor center para referirse a la posición central entre los extremos horizontales o verticales.  

Estas palabras clave las utilizaremos muy a menudo en diferentes propiedades CSS para hacer referencia a una zona particular del elemento.
#### *BIBLIOGRAFÍA*  
----  
- https://developer.mozilla.org/es/docs/Learn/CSS/Building_blocks/The_box_model  
- https://lenguajecss.com/css/modelo-de-cajas/que-es/