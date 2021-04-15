# La rosa dorada

Hola y bienvenido al equipo La Rosa Dorada. Como sabes, somos una pequeña posada situada en el centro de la ciudad. La dueña de la posada se llama Elanor. En la posada vendemos de todo tipo de productos. Desafortunadamente, la calidad de nuestros productos se degrada conforme se acerca su fecha de caducidad.

En la posada tenemos un programa informático que actualiza el estado inventario automáticamente. El programa fue
desarrollado por un tipo loco llamado Bolger que ha desaparecido.

Ahora tenemos un nuevo tipo de productos y necesitamos que nos ayudes!

**Tu tarea es actualizar el programa para que podamos a empezar a vender la nueva categoria de productos.**

Antes de contarte sobre el nuevo producto, vamos a explicarte como funcionan nuestros productos actuales:

- Todos los productos tienen un `diasParaVencimiento` que indica cuantos dias nos quedan para poder vender el producto.
- Todos los productos tienen una `calidad` que indica cual es el estado del producto.
- Al final del dia, el programa reduce un punto a los `diasParaVencimiento` y a la `calidad` con una funciona llamada `tick`.

Fácil no? Bien, pues ahora es donde las cosas se ponen interesantes:

- Una vez se ha vencido `diasParaVencimiento`, la `calidad` del producto se degrada el doble de rápido.
- La `calidad` de un producto nunca puede ser negativa.
- El producto `queso brie`, al contrario, incrementa su `calidad` cuanto mas envejece.
- La `calidad` de un producto nunca puede ser mayor de 50.
- El producto `sulfuras`, al ser un producto legendario, no tiene dias para vencimiento y tampoco se degrada en calidad.
- El producto `pases de camerino`, como los `quesos brie`, incrementa su `calidad` cuanto menos dias quedan para su vencimiento. Su `calidad` se incrementa el doble cuando quedan menos de 10 dias para su vencimiento y el triple cuando quedan menos de cinco dias. Sin embargo, su `calidad` baja a cero despues del concierto.

Hace poco hemos firmado un contrato con un proveedor de `conjuros`. Para ello, tenemos que actualizar nuestro programa:

## Tu tarea

`Conjuros` se degradan en calidad el doble de rapido que los productos normales.

## Agradecimientos

Esta kata no la hice yo :). La kata fue diseñada por Terry Hughes([http://twitter.com/TerryHughes](http://twitter.com/TerryHughes)).

Yo la encontré en PHP en el repositorio de Jeffrey Way([https://github.com/laracasts/Gilded-Rose-Kata-in-PHP](https://github.com/laracasts/Gilded-Rose-Kata-in-PHP)).

Mi aporte ha sido traducirla a Español.

Espero que la disfruten.
