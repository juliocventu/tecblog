<?php include "includes/cabecalho_painel.php"; ?>

    <form id="main-upload" enctype="multipart/form-data" method="POST" action="painel_noticiasUploadSalve.php">
        <input type="file" name="fileUpload"/>
        <button>Enviar</button>
    </form>

<?php include "includes/rodape_painel.php"; ?>