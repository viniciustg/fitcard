<?php require '../layout/header.php';
require '..\..\config.php';

$dados = $estabelecimentoDao->list();
//var_dump($dados);
?>

<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <table class="table table-striped" id="table">
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
<script>
    $(document).ready(function() {
        $('#table').DataTable({
            "language" : {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            },
            "select": {
                "rows": {
                    "_": "Selecionado %d linhas",
                    "0": "Nenhuma linha selecionada",
                    "1": "Selecionado 1 linha"
                }
            },            
        }
        });
        
    });
</script>