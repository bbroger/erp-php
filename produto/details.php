<?php include("../header.php"); ?>
    <div class="container mt-3">
            <div class="row">
                <div class="col mt-3">
                    <h1>Informações do Produto</h1>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sx-12 col-sm-12 col-md-4 col-lg-4">
                    <img src="../image/produtos.png" style="width: 100%;" />
                </div>
                <div class="col-sx-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" disabled />
                    </div>

                    <div class="form-group">
                        <label>Valor</label>
                        <input type="text" name="valor" class="form-control" disabled />
                    </div>

                    <div class="form-group">
                        <label>Descrição</label>
                        <input type="text" name="descricao" class="form-control" disabled />
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <a href="index.php" class="btn btn-outline-dark">Voltar</a>
                </div>
            </div>
    </div>    
<?php include("../footer.php"); ?>