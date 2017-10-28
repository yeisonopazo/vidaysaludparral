
<h5>Agregar Categorias</h5>
<div class="row col s12 m6">

    <div class=" row col s12">
        <form>
            <h6>Agregegar Categoria</h6>
            <div class="input-field">
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombreprov"/>
            </div>
            <input type="submit" value="Agregar Categoria" class="btn btn-primary"/>
        </form>
    </div>
    <div class="row col s12">
        <form>
            <h6>Agregegar Sub-Categoria</h6>
            <div class="input-field">

                <label for="direccion">Nombre: </label>
                <input type="text" name="direccion"  id="direccionprov"/>
            </div>
            <select id="idsubcat">
                <option value="" disabled selected>Selecciona una categoria</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
            <input type="submit" value="Agregar Sub-Categoria" class="btn btn-primary"/>
        </form> 
    </div>
</div>
<div class="row col s12 m6">
    <div id="tablcat" >
        <table class="bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoria</th>
                    <th>Subcategoria</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Alvin</td>
                    <td>Eclair</td>                 
                    <td><button id="edit" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">edit</i></button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td><button id="edit" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">edit</i></button></td>

                </tr>
                <tr>
                    <td>3</td>
                    <td>Jonathan</td>
                    <td>Lollipop</td>                   
                    <td><button id="edit" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">edit</i></button></td>
                </tr>
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


