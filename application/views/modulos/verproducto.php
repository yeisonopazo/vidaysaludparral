<div class="row">
    <div id="verprod1" class="col s12 m4">
        <h5 >Ver Producto</h5>
        <form id="formupdate">
            <div class="input-field">
                <label class="active" for="upidprod">Nombre producto: </label>
                <input type="text" value=" " disabled id="upidprod">
            </div>
            <div class="input-field">
                <label  class="active" for="upnombreprod">Nombre producto: </label>
                <input type="text" value=" " required id="upnombreprod">
            </div>
            <div>
                <select id="upsubcat" required >     
                </select>
            </div>
            <div class="input-field">
                <label class="active"  for="updescripcionprod">Descripcion:</label>
                <textarea class=" materialize-textarea" value=" " required name="updescripcionprod" id="updescripcionprod"></textarea>
            </div>
            <div class="input-field">
                <label class="active" for="upprecioprod">Precio:</label>
                <input type="text" value=" "  required name="upprecioprod" id="upprecioprod">
            </div>
            <div class="input-field">
                <label class="active" for="upstockprod">Stock:</label>
                <input type="text" value=" "  name="upstockprod" required id="upstockprod">
            </div>
            <div class="col s9">
                <select id="upselectprov" required name="selectprov">                    
                </select>
            </div>
            <div class="col s3">
                <a id="addprov2" class="btn-floating waves-effect waves-light green modal-trigger" href="#modalprov"><i class="material-icons">add</i></a>
            </div>

            <button type="submit" class="btn waves-effect waves-light" id="btnaddprodut1"><i class="material-icons left">mode_edit</i>Actualizar Producto</button>
        </form>
    </div>
    <div id="verprod2" class="col s12 m8">
        <div class="row">
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

