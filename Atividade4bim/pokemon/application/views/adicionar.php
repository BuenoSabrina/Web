
<div class="input-group">

    <fieldset>
        <div class ="alinhado-centro borda-base espaco-vertical">

            <!-- Form Name -->
            <legend>Novo Pokemon</legend>
            <form name="formCadastro" id="formCadastro" class="form-horizontal" enctype="multipart/form-data" method="POST" action="http://localhost/pokemon/index.php/Add/cadastrar">
                <label class="input-group">Nome:</label>
                <div class="input-group">
                    <input id="nome" type="text" class="form-control" name="nome" placeholder="Nome" required="">
                </div>
                <br>
                <label class="input-group">DATA:</label>
                <div class="input-group">

                    <input id="data_captura" type="text" class="form-control" name="data_captura" placeholder="AAAA-MM-DD" required="">
                </div>
                <br>
                <div class="dropdown">
                    <label class="input-group">Tipo de pokemon:</label>

                    <select data-toggle="dropdown" id="tipo_pokemon" name="tipo_pokemon" class="btn btn-default dropdown-toggle" required=""><span class="caret"></span>
                        <ul class="dropdown-menu">
                            <option value="" disabled selected hidden>Tipo</option>
                            <option value="Verde">Vermelho</option>
                            <option value="Laranja">Laranja</option>
                            <option value="Vermelho">Verde</option>

                        </ul>
                    </select>

                </div>
                <br>
                <div class="form-group">
                    <!-- Button -->
                    <div class="col-sm-12 controls">

                        <button type="submit" href="#" class="btn btn-info"><i class="fa fa-sign-in"></i> Salvar</button>


                    </div>
                </div>


            </form>

    </fieldset>

</div>
