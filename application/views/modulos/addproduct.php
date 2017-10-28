
<h5>Agregar un Producto</h5>
<form>
    <div class="input-field">
        <input type="text" id="nombre">
        <div class="col s9">
            <select id="cat">
                <option value="" disabled selected>Selecciona una categoria</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
        </div>

        <input type="text" id="drescripcion">
        <input type="text" id="precio" >
        <input type="text" id="stock">

    </div>
    <div class="file-field input-field">
        <div class="btn">
            <span>Imagen</span>
            <input type="file" id="fileimg">
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text" id="imagen">
        </div>
    </div>
    <div class="col s9">
        <select >
            <option value="" disabled selected>Selecciona proveedor</option>

            <option value="idprove1">[Proveedor x]</option>
            <option value="idprove2">[Proveedor x]</option>
        </select>
    </div>
    <div class="col s3">
        <a id="addprov" class="btn-floating btn-large waves-effect waves-light green modal-trigger" href="#modalprov"><i class="material-icons">add</i></a>

    </div>
    <input type="submit" class="btn" value="Ingresar Producto">
</form>



