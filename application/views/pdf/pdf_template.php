
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IPP SYS ACAD</title>

  
    
    <link href="<?= base_url('assets/dash/css/style.css')?>" rel="stylesheet">
</head>
<body>
    
    <img class="text-center" src="<?=base_url('assets/images/logo_ipp.jpg')?>" alt="" srcset="" width="20%">
    <h1>Dados do Usuário</h1>
    <p>Nome: <?= $estudante->fullname; ?></p>
    <p>Email: <?=$estudante->nome_pai; ?></p>
    <!-- Adicione mais campos conforme necessário -->

</body>
</html>