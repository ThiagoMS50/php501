<?php require_once 'classeInterface.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta author='Mariao'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Contato</title>
</head>
<body>
<div class="cotainer mt-4">
    <div class="card">
        <div class="card shadow">
            <div class="card-header bg-primary">
                <?=$obj->getHtml('<h5 class="car-title">{nome}</h5>')?>
            </div>
            <div class="card-body">
                <?=$obj->getHtml('<h5 class="card-text">{email}</h5>')?>
                <?=$obj->getHtml('<h5 class="card-text">{endereco}</h5>') ?>
                <?=$obj->getHtml('<h5 class="card-text">{telefone}</h5>') ?>
            </div>
            <div class="card-footer">
                <?=$obj->getHtml('<p class="card-text">{final}</p>')?>
            </div>
        </div>
    </div>
</div>

</body>
</html>