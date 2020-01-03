<?php 
$tamanho_maximo = 200000;
$caminho_absoluto = "C:\servers\usbwebserver_v8.6.2\usbwebserver\root\siscom\image";
$nome_arquivo = $_FILES["arquivo"]["name"];
$tamanho_arquivo = $_FILES["arquivo"]["size"];
$extensao_arquivo = strrchr($nome_arquivo, ".");
$extensoes = array(".png", ".jpg", ".svg");

if(!empty($nome_arquivo)){
    if(!in_array($extensao_arquivo, $extensoes)){
        
    }
}



    if(isset($_FILES['arquivo'])){
        $nome = $_FILES['arquivo']['name'];
?>
    <div class="alert alert-success">
            <?=$nome ?>
    </div>
<?php } else { ?>

<div class="alert alart-warning">
    <p>Ocorreu um problema!</p>
</div>
<?php } 

?>