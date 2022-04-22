
 <!DOCTYPE html>
<html>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="site/css/style.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
 <script type="text/javascript" src="site/js/table.js"></script> 
    <title>table</title>
    


</head>
<body>

<table id="table_id" class="display" width="100%">
    <thead>
        <tr>
            <th></th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>CP</th>
            <th>Permis</th>
            <th>Courriel</th>
        </tr>
    </thead>
    <tbody>

        <?php include 'backend-script.php';?>


        
    </tbody>
</table>

</body>
</html> 
