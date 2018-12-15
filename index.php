<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba PI</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="js/script.js"></script>
    
</head>
<body>

    <div class="text-center">
        <div class="form-group col-md-3"></div>
        <div id="data" class="form-group col-md-6">
            <h1 class="display-1">Prueba PI</h1>

            <label for="state">Seleccionar estado:</label>
            <select id ="statesSelect" class="form-control col-md-12">
                <option value="0">Todos</option>
                <?php
                //Conexion a la base de datos
                    require_once("db/DB.php");
                    $db = new DB();
                    $SQL = "SELECT * FROM states";
                    $resultado = $db->ejecutar($SQL);
                    foreach($resultado as $fila){
                        $json= json_decode($fila[0]);
                ?>
                <option value="<?=$fila[0]?>"><?=$fila[1]?></option>  
                <?php
                    }
                ?>
                </select>
        <br>
        <br>
            <label for="municipality">Seleccionar municipio:</label>
            <select id ="municipalitiesSelect" class="form-control col-md-12" >
                <option value="0">Todos</option>
            </select>
        <br>
        <br>
        <br>
            <div>
                <input type="button" value="Buscar" id="searchButton" class="btn btn-primary">
            </div> 
        <br>
        <br> 

            <div id="result" class="table-responsive-sm col-md-12 text-center">
                <table id="tableResult" class="table table-striped table-hover">
                <tr><th>Estado</td><th>Municipio</td><th>PDF</td></tr>
                </table>
            </div>
        </div>  
        <div class="form-group col-md-3"></div>
    </div>

</body>
</html>