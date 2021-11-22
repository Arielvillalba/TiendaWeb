<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="estilo2.css">
<body>
    <title>Salida</title>
<div id="salida">
    <?php
   $codigo= $_POST['codigo'];
    $nombre= $_POST['nombre'];
    ?>
<?php

 if( $codigo == "1")
{
    echo "Su nombre es: $nombre <BR>";
    echo "El producto seleccionado es: Fresh <BR>";
    echo "Precio: $73.-<BR>";
    echo "<h2> su compra  es inferior a 100$ .-, debe para los gastos de envio  <BR> ";
}
else if ($codigo == "2")
{
    echo "Su nombre es: $nombre <BR>";
    echo "El producto seleccionado es: 9 de Oro <BR>";
    echo "Precio: $60.-<BR>";
    echo "<h2> su compra  es inferior a 100$ .-, debe para los gastos de envio <BR> ";
}
else if ($codigo == "3")
{
    echo "Su nombre es: $nombre <BR>";
    echo "El producto seleccionado es: Semillitas Girasol <BR>";
    echo "Precio: $50.-<BR>";
    echo "<h2> su compra  es inferior a 100$ .-, debe para los gastos de envio <BR> ";
}
else if ($codigo == "4")
{
    echo "Su nombre es: $nombre <BR>";
    echo "El producto seleccionado es: Galletitas Surtidas <BR>";
    echo "Precio: $120.-<BR>";
    echo "<h2> Su compra es superior a $100.- e inferior a $200 .-, no debe para los gastos del envio  <BR> ";
}
else if( $codigo == "5")
{
    echo "Su nombre es: $nombre<BR>";
    echo "El producto seleccionado es: Carbon 5k <BR>";
    echo "Precio: $160.-<BR>";
    echo "<h2> Su compra es superior a $100.- e inferior a $200 .-, no debe para los gastos del envio <BR>";
    

}
else if( $codigo == "6")
{
    echo "Su nombre es: $nombre<BR>";
    echo "El producto seleccionado es: Coca Cola 2L <BR>";
    echo "Precio: $180.-<BR>";
    echo "<h2> Su compra es superior a $100.- e inferior a $200 .-, no debe para los gastos del envio<BR>";
    

}
else if( $codigo == "7")
{
    echo "Su nombre es: $nombre<BR>";
    echo "El p2oducto seleccionado es: Secco Pomelo 3L <BR>";
    echo "Precio: $140.-<BR>";
    echo "<h2> Su compra es superior a $100.- e inferior a $200 .-, no debe para los gastos del envio<BR>";
    

}
else if( $codigo == "8")
{
    echo "Su nombre es: $nombre<BR>";
    echo "El producto seleccionado es: Vodka 1.25L <BR>";
    echo "Precio: $600.-<BR>";
    echo "<h2> Su compra es superior a $200 .- y tiene un descuento del 10% <BR>";
    

}
else if ( $codigo == "9")
{
    echo "Su nombre es: $nombre <BR>";
    echo "El producto seleccionado es: Cerveza Brahamá 1L<BR>";
    echo "Precio: $220.-<BR>";
    echo "<h2> Su compra es superior a $200.- y tiene un descuento del 10% ";
}
else if ( $codigo == "10")
{
    echo "Su nombre es: $nombre <BR>";
    echo "El producto seleccionado es:Chocolate Cofler <BR>";
    echo "Precio: $120.-<BR>";
    echo "<h2> Su compra es superior a $100.- e inferior a $200 .-, no debe para los gastos del envio ";
}
else
{
    echo "<h2>Código inexistente.";
}
?>
   
    </div>

</body>
</html>