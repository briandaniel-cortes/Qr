
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Ver Perfil</h1>
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <p class="form-control-static"><?php echo $row["name"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <p class="form-control-static"><?php echo $row["address"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <p class="form-control-static"><?php echo $row["salary"]; ?></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Volver</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
