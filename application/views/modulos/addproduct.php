<div class="row">
     <div id="addproduct1" class="col s12 m4">
        <h5  >Agregar un Producto</h5>
        <form id="formprod">
            <div class="input-field">
                <label for="nombreprod">Nombre producto: </label>
                <input type="text" required id="nombreprod">
            </div>
            <div>
                <select id="subcat" required >     
                </select>
            </div>
            <div class="input-field">
                <label for="drescripcionprod">Descripcion:</label>
                <textarea class="materialize-textarea" required name="drescripcionprod" id="drescripcionprod"></textarea>
            </div>
            <div class="input-field">
                <label for="precioprod">Precio:</label>
                <input type="number" required name="precioprod" id="precioprod">
            </div>
            <div class="input-field">
                <label for="stockprod">Stock:</label>
                <input type="number" name="stockprod" required id="stockprod">
            </div>
            <div class="col s9">
                <select id="selectprov" required name="selectprov">                    
                </select>
            </div>
            <div class="col s3">
                <a id="addprov" class="btn-floating waves-effect waves-light green modal-trigger" href="#modalprov"><i class="material-icons">add</i></a>
            </div>
            <input type="submit" class="btn" id="btnaddprodut1" value="Siguiente">
        </form>
    </div>

    <div id="addproduct2" class="col s12 m8">
        <div class="row tooltipped" data-position="top" data-delay="50" data-tooltip="Antes de agregar una imagen debe haber un producto seleccionado">
            <h5 >Agregar Imagenes</h5>
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
            <input type="submit" class="btn right" id="btnaddprodut2" value="Finalizar" />
        </div>
    </div>

</div>



