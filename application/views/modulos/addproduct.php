<div class="row">
    <!--    <div class="col s12">
            <ul class="tabs hoverable">       
                <li class="tab col s3"><a class="active" href="#addproduct1">Paso 1</a></li>
                <li class="tab col s3 disabled"><a class="tooltipped" href="#addproduct2" data-position="top" data-delay="50" data-tooltip="Antes deve ingresar Producto">Paso 2</a></li>
            </ul>
        </div>-->

    <div id="addproduct1" class="col s12 m4">
        <h5  >Agregar un Producto</h5>
        <form>
            <div class="input-field">
                <input type="text" id="nombre">

                <select id="cat">
                    <option value="" disabled selected>Selecciona una categoria</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>


                <input type="text" id="drescripcion">
                <input type="text" id="precio" >
                <input type="text" id="stock">

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
            <input type="submit" class="btn" id="btnaddprodut1" value="Siguiente">
        </form>

    </div>

    <div id="addproduct2" class="col s12 m8">
        <div class="row">
            <h5 class="tooltipped" data-position="top" data-delay="50" data-tooltip="Debe agregar producto">Agregar Imagenes</h5>
            <div class="dropify-preview col s6 m6">
                <label for="input-file-now"></label>
                <input type="file" id="input-file-now" class="dropify" />

            </div>
            <div class="dropify-preview col s6 m6">
                <label for="input-file-now"></label>
                <input type="file" id="input-file-now" class="dropify" />

            </div>
            <div class="dropify-preview col s6 m6">
                <label for="input-file-now"></label>
                <input type="file" id="input-file-now" class="dropify" />

            </div>
            <div class="dropify-preview col s6 m6">
                <label for="input-file-now"></label>
                <input type="file" id="input-file-now" class="dropify" />
            </div>
        </div>
        <div class="row">
            <input type="submit" class="btn right" value="Finalizar" />
        </div>
    </div>

</div>



