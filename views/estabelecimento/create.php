<?php require '../layout/header.php' ?>

<div class="container">
    <div class="card border-danger m-3">
        <div class="card-header">
            Cadastrar Estabelecimento
        </div>
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="razao-social">Razão Social:</label>
                    <input type="text" class="form-control" name="razao-social" id="razao-social" maxlength="100">
                </div>
                <div class="col-md-4">
                    <label for="nome-fantasia">Nome Fantasia:</label>
                    <input type="text" class="form-control" name="nome-fantasia" id="nome-fantasia" maxlength="100">
                </div>
                <div class="col-md-4">
                    <label for="cnpj">CNPJ:</label>
                    <input type="text" class="form-control" name="cnpj" id="cnpj">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="col-md-4">
                    <label for="status">Status:</label>
                    <select class="form-control" name="status" id="status">
                        <option value="">Selecione..</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="data-cadastro">Data de Cadastro:</label>
                    <input type="date" class="form-control" name="data-cadastro" id="data-cadastro">
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
        </div>
    </div>

</div>

<?php require '../layout/footer.php' ?>