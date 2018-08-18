<div class="row">

    <div id="uppserv1" class="col s12 m4 scrollspy">
        <h5  >Ver Servicio</h5>
        <form id="formupdserv">
            <div class="input-field">
                <label class="active" for="upidserv">ID Servicio: </label>
                <input type="text" value=" " disabled id="upidserv">
            </div>
            <div class="input-field">
                <label for="upnombreserv" class="active">Nombre de Servicio: </label>
                <input type="text" value=" " required id="upnombreserv">
            </div>
            <div>
                <select id="upsubcatserv" required >     
                </select>
            </div>
            <div class="input-field">
                <label for="updescripcionserv" class="active">Descripcion:</label>
                <textarea class="materialize-textarea" required  id="updescripcionserv" placeholder=" "></textarea>
            </div>
            <div class="input-field">
                <label for="upprecioserv"  class="active">Precio:</label>
                <input type="number" value="0" required name="upprecioserv" id="upprecioserv">
            </div>
            <div class="input-field">
                <label for="upstockserv" class="active">Cupos:</label>
                <input type="number" value="0" name="upstockserv" required id="upstockserv">
            </div>
            <div class="input-field">
                <label for="upfecha" class="active">Fecha de el evento:</label>
                <input type="text" value=" " id="upfechaserv" class="datepicker">
            </div>
            <div class="col s9">
                <select id="upselectencarg" required name="upselectencarg">                    
                </select>
            </div>
            <div class="col s3">
                <a id="addprov" class="btn-floating waves-effect waves-light green modal-trigger" href="#modalprov"><i class="material-icons">add</i></a>
            </div>
            <button type="submit" class="btn waves-effect waves-light" id="btnupserv1"><i class="material-icons left">mode_edit</i>Actualizar Servicio</button>
        </form>
    </div>

    <div id="uppserv2" class="col s12 m8 tooltipped" data-position="top" data-delay="50" data-tooltip="Antes de agregar una imagen debe haber un producto seleccionado">
        <form id="formimgserv">
            <div class="row" >
                <input type="text" name="idprodserv" hidden id="idproducto">
                <h5 >Agregar Imagenes</h5>
                <div class="dropify-preview col s6 m6 materialboxed" id="verimagen">
                    <label for="input-file-now"></label>
                    <input type="file" id="input-file-now" class="dropify" />

                </div>
                <div class="dropify-preview col s6 m6">
                    <label for="input-file-now"></label>
                    <input type="file" id="imagen" class="dropify" name="imagen"/>


                </div>
<!--                <div class="dropify-preview col s6 m6">
                    <label for="input-file-now"></label>
                    <input type="file" id="input-file-now" class="dropify" />

                </div>
                <div class="dropify-preview col s6 m6">
                    <label for="input-file-now"></label>
                    <input type="file" id="input-file-now" class="dropify" />
                </div>-->
            </div>
            <div class="row">
                <input type="submit" class="btn right" id="btnupserv2" value="Actualizar imagen" />
            </div>
        </form>
    </div>

</div>