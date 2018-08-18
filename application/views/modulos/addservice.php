<div class="row">
    <form id="formserv"> 
        <div id="addserv1" class="col s12 m4">
            <h5  >Agregar un Servicio</h5>

            <div class="input-field">
                <label for="nombreserv">Nombre de Servicio: </label>
                <input type="text" required id="nombreserv" name="nombreserv">
            </div>
            <div>
                <select id="subcatserv" required name="idsubcategoria">     
                </select>
            </div>
            <div class="input-field">
                <label for="descripcionserv">Descripcion:</label>
                <textarea class="materialize-textarea" required name="descripcionserv" id="drescripcionserv"></textarea>
            </div>
            <div class="input-field">
                <label for="precioserv">Precio:</label>
                <input type="number" required name="precioserv" id="precioserv">
            </div>
            <div class="input-field">
                <label for="stockserv">Cupos:</label>
                <input type="number" name="stockserv" required id="stockserv">
            </div>
            <div class="input-field">
                <label for="fecha">Fecha de el evento:</label>
                <input type="text" id="fechaserv" name="fechaserv" class="datepicker">
            </div>
            <div class="col s9">
                <select id="selectencarg" required name="selectencarg">                    
                </select>
            </div>
            <div class="col s3">
                <a id="addprov" class="btn-floating waves-effect waves-light green modal-trigger" href="#modalprov"><i class="material-icons">add</i></a>
            </div>

        </div>

        <div id="addserv2" class="col s12 m8 tooltipped" data-position="top" data-delay="50" data-tooltip="Antes de agregar una imagen debe haber un producto seleccionado">
            <div class="row" >
                <h5 >Agregar Imagenes</h5>
                <div class="dropify-preview col s6 m6">
                    <label for="input-file-now"></label>
                    <input type="file" id="input-file-now" name="imagen" class="dropify" />

                </div>

                <!--            TRABAJO FUTURO-->
                <!--            <div class="dropify-preview col s6 m6">
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
                            </div>-->
            </div>
            <div class="row">
                <input type="submit" class="btn" id="btnaddserv1" value="Agregar Servicio">
            </div>
        </div>
    </form>
</div>