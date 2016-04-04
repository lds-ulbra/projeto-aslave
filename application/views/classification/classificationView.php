<script type="text/javascript"  src="<?= base_url('assets/js/jquery-2.2.2.js')?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#openIt").click(function(){
            $('#modal1').openModal();

        });
    	
    	$(".openIt3").click(function(){
        	$('#modal3').openModal();
        	document.getElementById('id').value=$(this).attr('id');
  		});

    });
</script>

<div>
    <!-- MODAL 1 -->
    <a class="modal-trigger waves-effect waves-light btn" id="openIt" href="#modal1">+CLASSIFICAÇÃO</a>

    <!-- Modal Estrutura -->
    <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4>Cadastrar classificação</h4>
            <div>
                <form action="create-classification" method="POST">
                    <ul>
                        <li>
                            <label>Nome: </label>
                            <input type="text" name="classificationName">
                        </li>
                        <li>    
                            <label>Tipo de classificação: </label>
                        </li>
                        <li>
                            <input name="classificationType" type="radio"  value="e" id="classificationType1" checked/>
                            <label for="classificationType1" >Entrada</label>
                            <input name="classificationType" type="radio"  value="s" id="classificationType2" />
                            <label for="classificationType2" >Saida</label>
                        </li>
                        <hr>
                        <li>
                            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>    
                        </li>
                    </ul>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Fechar</a>
        </div>
    </div>

    <!-- Modal Altera pessoa-->
    <div id="modal3" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4>Alterar classificação</h4>
            <form action="update-classification/" method="POST">
                <ul>
                    <li>
                        <label>Nome: </label>
                        <input type="text" value="" name="updateClasName">
                        <input type="hidden" name="updateClasId" id="id" value="">
                    </li>
                    <li>
                        <label>Tipo de classificação: </label>
                    </li>
                    <li>
                        <input name="updateClasType" type="radio"  value="e" id="updateClasType1" checked/>
                        <label for="updateClasType1" >Entrada</label>

                        <input name="updateClasType" type="radio"  value="s" id="updateClasType2" />
                        <label for="updateClasType2" >Saida</label>
                    </li>
                    <hr>
                    <li>
                        <button class="btn waves-effect waves-light" type="submit">Enviar</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>



    <!-- MOSTRAR DADOS DO DB CLASSIFICAÇÃO -->
    <div>
        <h3 align="center">Classificações</h3>
        <table class="striped">
            <thead>
                <td><strong>Nome: </strong></td>
                <td><strong>Tipo de classificação: </strong></td>
            </thead>
            <tbody>
                <?php foreach ($classifications as $classification) :?>
                    <tr>
                        <td><?= $classification['name'] ?></td>
                        <td>
                            <?php
                            if($classification['classification_type'] == 'e'){
                                echo 'Entrada';
                            }else if($classification['classification_type'] == 's'){
                                echo 'Saída';
                            }
                            ?>
                        </td>
                        <td>
                            <a id="<?= $classification['id'] ?>" class="openIt3" href="#modal3">
                                <button class="modal-trigger waves-effect waves-light btn" >Alterar</button></a>

                                <a href="delete-classification/<?= $classification['id'] ?>">
                                    <button class="btn waves-effect waves-light">Deletar</button></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>