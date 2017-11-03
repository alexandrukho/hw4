<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>
<body>
<?php if ($_SESSION['uid']) {?>
    <div class="container">

    <div class="form-container">
        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="add_info.php">
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Имя</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Имя">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAge" class="col-sm-2 control-label">Возраст</label>
                <div class="col-sm-10">
                    <input type="number" name="age" class="form-control" id="inputAge" placeholder="Возраст">
                </div>
            </div>
            <div class="form-group">
                <label for="inputDesc" class="col-sm-2 control-label">Описание</label>
                <div class="col-sm-10">
                    <textarea style="resize: none" name="desc" class="form-control" id="inputDesc"
                              placeholder="Описание"> </textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputImg" class="col-sm-2 control-label">Картинка</label>
                <div class="col-sm-10">
                    <input type="file" name="image" class="form-control" id="inputImg" placeholder="Картинка">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Отправить</button>
                </div>
            </div>
        </form>
    </div>
    <?php
} ?>

</body>
</html>