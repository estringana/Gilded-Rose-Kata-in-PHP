# La rosa dorada

## Requerimientos

Hola y bienvenido al equipo La Rosa Dorada. Como sabes, somos una pequeño posada situado en el centro de la ciudad. La dueña de la posada se llama Alicia. Como sabes, tambien vendemos mejores productos. Desafortunadamente, la calidad de nuestros productos se degrada conforme de acerca su fecha de caducidad. Tenemos un programa que actualiza nuestro inventario por nosotros. El programa fue desarrollado por un tipo loco llamado Mauricio antes de irse a buscar nuevas aventuras.

**Tu tarea es actualizar el programa para que podamos a empezar a vender una nueva categoria de productos.**

Empecemos con una introducción a nuestro programa:

- Todos los productos tienen un `diasParaVencimiento` que indica cuantos dias nos quedan para poder venderlo.
- Todos los productos tienen una `calidad` que indica cual es el estado del producto.
- Al final del dia, el programa reduce la calidad de `venderEn` y `calidad`


Fácil no? Bien, pues ahora es donde las cosas se ponen interesantes:

- Una vez se ha vencido `diasParaVencimiento`, la `calidad` del producto se degrada el doble de rápido.
- La `calidad` de un producto nunca puedde ser negativa.
- El producto `queso brie`, al contrario, incrementa su `calidad` cuanto mas envejece.
- La `calidad` de un producto nunca puede ser mayor de 50.
- El producto `sulfuras`, al ser un producto legendario, no tiene dias para vencimiento y tampoco se degrada en calidad.
- Lo `pases al camerino`, como los `quesos brie`, incrementa su `calidad` cuanto menos dias quedan para su vencimiento. Su `calidad` se incrementa el doble cuando quedan menos de 10 dias para su vencimiento y por el triple cuando quedan menos de cinco dias. Sin embargo, su `calidad` baja a cero despues del concierto.

Hace poco hemos firmado un contrato con un proveedor de `conjuros`. Para ello, tenemos que actualizar nuestro programa:

`Conjuros` se degradan en calidad el doble de rapido que los productos normales.

Para clarificar, un producto nunca puede tener su `calidad` por encima de 50, sin embargo `sulfuras` es un producto legendario, y por ello, su `calidad` siempre es 80 y no cambia nunca.

## Agradecimientos

Esta kata no la hice yo :). La kata fue diseñada por Terry Hughes([http://twitter.com/TerryHughes](http://twitter.com/TerryHughes)). 

Yo la encontré en PHP en el repositorio de Jeffrey Way([https://github.com/laracasts/Gilded-Rose-Kata-in-PHP](https://github.com/laracasts/Gilded-Rose-Kata-in-PHP)).

Mi aporte ha sido traducirla a Español.

Espero que la disfruten.

