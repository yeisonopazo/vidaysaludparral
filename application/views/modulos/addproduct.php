<div class="row">
    <form id="formprod">
        <div id="addproduct1" class="col s12 m4">
            <h5  >Agregar un Producto</h5>

            <div class="input-field">
                <label for="nombreprod">Nombre producto: </label>
                <input type="text" required hidden id="fecha" name="fecha">
                <input type="text" required id="nombreprod" name="nombre">
            </div>
            <div>
                <select id="subcat" required name="idsubcategoria">     
                </select>
            </div>
            <div class="input-field">
                <label for="drescripcionprod">Descripcion:</label>
                <textarea class="materialize-textarea" required name="descripcion" id="drescripcionprod"></textarea>
            </div>
            <div class="input-field">
                <label for="precioprod">Precio:</label>
                <input type="number" required name="precio" id="precioprod">
            </div>
            <div class="input-field">
                <label for="stockprod">Stock:</label>
                <input type="number" name="stock" required id="stockprod">
            </div>
            <div class="col s9">
                <select id="selectprov" required name="rutencargado">                    
                </select>
            </div>
            <div class="col s3">
                <a id="addprov" class="btn-floating waves-effect waves-light green modal-trigger" href="#modalprov"><i class="material-icons">add</i></a>
            </div>


        </div>

        <div id="addproduct2" class="col s12 m8">
            <div class="row tooltipped" data-position="top" data-delay="50" data-tooltip="Antes de agregar una imagen debe haber un producto seleccionado">
                <h5 >Agregar Imagenes</h5>
                <div class="dropify-preview col s6 m6">

                    <label for="input-file-now"></label>
                    <input type="file" id="input-file-now" name="imagen" class="dropify" data-max-file-size-preview="2M" data-allowed-file-extensions="jpg jpeg"/>

                </div>
                <!--                TRABAJO FUTURO-->
                <!--                <div class="dropify-preview col s6 m6">
                                    <label for="input-file-now"></label>
                                    <input type="file" id="input-file-now" class="dropify"  class="dropify" data-max-file-size-preview="2M" data-allowed-file-extensions="jpg jpeg"/>
                
                                </div>
                                <div class="dropify-preview col s6 m6">
                                    <label for="input-file-now"></label>
                                    <input type="file" id="input-file-now" class="dropify" class="dropify" data-max-file-size-preview="2M" data-allowed-file-extensions="jpg jpeg"/>
                
                                </div>
                                <div class="dropify-preview col s6 m6">
                                    <label for="input-file-now"></label>
                                    <input type="file" id="input-file-now" class="dropify" class="dropify" data-max-file-size-preview="2M" data-allowed-file-extensions="jpg jpeg" />
                                </div>-->
            </div>
            <div class="row">
                <input type="submit" class="btn" id="btnaddprodut1" value="Agregar producto">
            </div>
        </div>
    </form>
</div>



