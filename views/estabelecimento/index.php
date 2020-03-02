<?php require '../layout/header.php';
require '..\..\config.php';

$dados = $estabelecimentoDao->list();
//var_dump($dados);
?>

<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Razao Social</th>
                        <th>Nome Fantasia</th>
                        <th>CNPJ</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dados as $key => $value) : ?>
                        <tr>
                            <td><?= $value[1] ?></td>
                            <td><?= $value[2] ?></td>
                            <td><?= $value[3] ?></td>
                            <td>
                                <form action="edit.php" method="post">
                                    <input type="hidden" name="estabelecimento-id" id="estabelecimento-id" value="<?= $value[0] ?>">
                                    <button class="btn btn-primary">Visualizar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require '../layout/footer.php' ?>