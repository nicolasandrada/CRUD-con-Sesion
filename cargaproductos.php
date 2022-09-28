
    <form action="producto/agregar.php" method="post">
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo">

        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca">

        <label for="precio">Precio</label>
        <input type="number" name="precio" id="precio">

        <div id="talles">
            <label for="talle">Talle</label>
            <input type="number" name="talle[]" id="talle">
            <label for="stock">Stock</label>
            <input type="number" name="stock[]" id="stock">
            <br>
        </div>

        <input type="button" value="agregar" id='agregar'>
        <br>
        <br>
        <input type="submit" value="Guardar">
    </form>


<script src="js/funcion.js"></script>