<?php include("../header.php"); ?>
    <div class="container mt-3">
        <h1>Cadastro de Produto</h1>
        <form method="post" action="image_upload.php" enctype="multipart/form-data">
            <input  type="hidden" name="MAX_FILE_SIZE" value="200000" />

            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" />
            </div>

            <div class="form-group">
                <label>Valor</label>
                <input type="text" name="valor" class="form-control" />
            </div>

            <div class="form-group">
                <label>Descrição</label>
                <input type="text" name="descricao" class="form-control" />
            </div>

            <div class="form-group">
                <label for="arquivo">Selecione o arquivo</label>
                <br />
                <input type="file" name="arquivo">
            </div>
            <button type="submit" class="btn btn-success float-right">Salvar</button>
        </form>

        <a href="index.php" class="btn btn-outline-dark">Voltar</a>
    </div>

    
<?php include("../footer.php"); ?>