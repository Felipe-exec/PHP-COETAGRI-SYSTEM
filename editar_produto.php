<?php
require_once('valida_session.php');
require_once('header.php'); 
require_once('sidebar.php'); 
require_once("bd/bd_produto.php");

// Recupera o código do produto a ser editado
$codigo = $_GET['cod'];

// Busca os dados do produto para edição
$dados = buscaProdutoEditar($codigo);
$nome = $dados["nome"];
$descricao = $dados["descricao"];
$valor = $dados["valor"];
?>

<!-- Main Content -->
<div id="content">
    <?php require_once('navbar.php'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-2">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-8">
                        <h6 class="m-0 font-weight-bold text-primary" id="title">ATUALIZAR DADOS DO PRODUTO</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form class="user" action="editar_produto_envia.php" method="post">
                    <input type="hidden" name="cod" value="<?= $codigo ?>">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label> Nome do Produto </label>
                            <input type="text" class="form-control form-control-user" id="nome" name="nome" value="<?= $nome ?>" required>
                        </div>
                        <div class="col-sm-6">
                            <label> Valor </label>
                            <input type="number" step="0.01" class="form-control form-control-user" id="valor" name="valor" value="<?= $valor ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label> Descrição </label>
                        <textarea class="form-control form-control-user" id="descricao" name="descricao" placeholder="Descrição do Produto"><?= $descricao ?></textarea>
                    </div>
                    <div class="card-footer text-muted" id="btn-form">
                        <div class="text-right">
                            <a title="Voltar" href="produto.php"><button type="button" class="btn btn-success"><i class="fas fa-arrow-circle-left"></i>&nbsp;Voltar</button></a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"><i class="fas fa-edit">&nbsp;</i>Atualizar</button>
                        </div>
                    </div>
                </form>  
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php
require_once('footer.php');
?>
