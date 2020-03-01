<?php require '../layout/header.php';
require '..\..\config.php';

$categoria = $estabelecimentoDao->combo('categoria');
$status = $estabelecimentoDao->combo('status');
$estado = $estabelecimentoDao->combo('estado');
//var_dump($estado);

if(isset($_POST['btn-cadastrar']))
    {
        $razaoSocial = filter_input(INPUT_POST, 'razao-social');
        $nomeFantasia = filter_input(INPUT_POST, 'nome-fantasia');
        $cnpj = filter_input(INPUT_POST, 'cnpj');
        $email = filter_input(INPUT_POST, 'email');
        $endereco = filter_input(INPUT_POST, 'endereco');
        $cidade = filter_input(INPUT_POST, 'cidade');
        $estado = filter_input(INPUT_POST, 'estado');
        $telefone = filter_input(INPUT_POST, 'telefone');
        $dataCadastro = filter_input(INPUT_POST, 'data-cadastro');
        $categoria = filter_input(INPUT_POST, 'categoria');
        $status = filter_input(INPUT_POST, 'status');
        $agencia = filter_input(INPUT_POST, 'agencia');
        $conta = filter_input(INPUT_POST, 'conta');       

        $estabelecimento->setRazaoSocial($razaoSocial)
                        ->setNomeFantasia($nomeFantasia)
                        ->setCnpj($cnpj)
                        ->setEmail($email)
                        ->setEndereco($endereco)
                        ->setCidade($cidade)
                        ->setEstado($estado)
                        ->setTelefone($telefone)
                        ->setDataCadastro($dataCadastro)
                        ->setCategoria($categoria)
                        ->setStatus($status)
                        ->setAgencia($agencia)
                        ->setConta($conta);

        $valida = $estabelecimentoDao->save();
        //echo var_dump($valida);
        if($valida == true) {
            echo '
            <div class="container">
                <div class="alert alert-success mt-3" role="alert">
                    Cadastro do Estabelecimento realizado com sucesso!
                </div>
            </div>';
        }
        elseif ($valida == false)
        {
            echo '
            <div class="container">
                <div class="alert alert-danger mt-3" role="alert">
                    Erro! Cadastro não realizado!
                </div>
            </div>';
        }
    }
?>

<div class="container">   
    <div class="card border-danger m-3">
        <div class="card-header">
            Cadastrar Estabelecimento
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="row mt-3">
                    <div class="col-md-4">
                        <label for="razao-social">Razão Social:</label>
                        <input type="text" class="form-control" name="razao-social" id="razao-social" maxlength="100" required>
                    </div>
                    <div class="col-md-4">
                        <label for="nome-fantasia">Nome Fantasia:</label>
                        <input type="text" class="form-control" name="nome-fantasia" id="nome-fantasia" maxlength="100">
                    </div>
                    <div class="col-md-4">
                        <label for="cnpj">CNPJ:</label>
                        <input type="text" class="form-control" name="cnpj" id="cnpj" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    </div>
                    <div class="col-md-4">
                        <label for="status">Status:</label>
                        <select class="form-control" name="status" id="status">
                            <option value="">Selecione..</option>
                            <?php foreach ($status as $key => $value) : ?>
                                <option value="<?= $value[0] ?>"><?= $value[1] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="data-cadastro">Data de Cadastro:</label>
                        <input type="date" class="form-control" maxlength="10" name="data-cadastro" id="data-cadastro" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2020-01-01" max="2021-01-01"/>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" name="endereco" id="endereco">
                    </div>
                    <div class="col-md-3">
                        <label for="cidade">Cidade:</label>
                        <select class="form-control" name="cidade" id="cidade">
                            <option value="">Selecione o estado..</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="estado">Estado:</label>
                        <select class="form-control" name="estado" id="estado">
                            <option value="">Selecione..</option>
                            <?php foreach ($estado as $key => $value) : ?>
                                <option value="<?= $value[0] ?>"><?= $value[2] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="telefone">Telefone:</label>
                        <input type="tel" class="form-control" name="telefone" id="telefone">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <label for="categoria">Categoria:</label>
                        <select class="form-control" name="categoria" id="categoria">
                            <option value="">Selecione..</option>
                            <?php foreach ($categoria as $key => $value) : ?>
                                <option value="<?= $value[0] ?>"><?= $value[1] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="agencia">Agência:</label>
                        <input type="text" class="form-control" name="agencia" id="agencia">
                    </div>
                    <div class="col-md-2">
                        <label for="conta">Conta:</label>
                        <input type="text" class="form-control" name="conta" id="conta">
                    </div>
                </div>
                <button type="submit" class="btn btn-info mt-3" name="btn-cadastrar" id="btn-cadastrar">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
<?php require '../layout/footer.php' ?>