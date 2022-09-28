var talles = document.getElementById('talles');
var agregar = document.getElementById('agregar');

agregar.addEventListener("click", function(){

    /*
    a = 100;
    b = 200; 
    a = a + 500
    */
    talles.innerHTML = talles.innerHTML + `<label for="talle">Talle</label>
                                            <input type="number" name="talle[]" id="talle">
                                            <label for="stock">Stock</label>
                                            <input type="number" name="stock" id="stock">
                                            <br>`

    
})