<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejemplo</title>
    <link href="diseno/style.css" rel="stylesheet">
</head>
<body>
<?php $ejemplo = 'Ulatina San Pedro, Dennis' ?>
<?php echo $ejemplo ?>

<h1>Ulatina</h1>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Ingresar</button>
            </div>
        </div>
    </form>

</body>
</html>