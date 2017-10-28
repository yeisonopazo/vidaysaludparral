
<h5>Agregar Categorias</h5>
<div class="row col s12 m4">
    <div class=" row col s12">
        <form id="formcat">
            <h6>Agregegar Categoria</h6>
            <div class="input-field">
                <label for="nombre">Nombre categoria: </label>
                <input type="text" name="nombre" id="nombrecat"/>
            </div>
            <input type="submit" id="btnaddcat"value="Agregar Categoria" class="btn btn-primary"/>
        </form>
    </div>
    <div class="row col s12">
        <form id="formsubcat" name="formsubcat">
            <h6>Agregegar Sub-Categoria</h6>
            <div class="input-field">

                <label for="subcat">Nombre Sub-Categoria </label>
                <input type="text" name="subcat"  id="nombresubcat"/>
            </div>
            <select id="idcat" name="idcat">
                <option value="0" disabled selected>Selecciona una categoria</option>
                
            </select>
            <input type="submit" id="btnaddsubcat" value="Agregar Sub-Categoria" class="btn btn-primary"/>
        </form> 
    </div>
</div>
<div class="row col s12 m8">
    <div id="tablcat" >
        <table class="bordered">
            <thead>
                <tr>
                    <th>ID-Cat</th>
                    <th>Categoria</th>
                    <th>ID-SubCat</th>
                    <th>Sub-Categoria</th>
                </tr>
            </thead>

            <tbody id="tablacateg">

            </tbody>
        </table> 
        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>
</div>


