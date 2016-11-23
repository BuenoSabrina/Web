<div id="homebody">
    <h2></h2>
    <div class ="alinhado-centro borda-base espaco-vertical">
    </div>
    <div class="row-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Data de Captura</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>

                <tr class="danger">
                    <?php
                    foreach ($pokemon as $pikachu) {
                        echo "<tr>";
                        echo "<td>" . $pikachu->nome . "</td>";
                        echo "<td>" . $pikachu->tipo_pokemon . "</td>";
                        echo "<td>" . $pikachu->data_captura . "</td>";
                        echo "<td><a href='http://localhost/pokemon/index.php/Editar'><button type='submit' class='btn btn-default'>Editar</button></a></td>";
                        echo"<td><a><button type='submit' class='btn btn-info'>X</button></a></td>";
                    }
                    ?>

                </tr>

            </tbody>
        </table>
    </div>
</div>
</div>
