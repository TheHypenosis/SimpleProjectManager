<?php
//Starting the session
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/mdb.min.css" type="text/css">
    <script src="../js/mdb.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="../css/index.css" type="text/css">
</head>
<body>
<?php
//Loading navbar from Navbar.php
require ('../Components/Navbar.php');
?>
<!-- Main Panel -->
<!-- Form for creating projects -->
<div class="container-fluid">
    <form action="../Modules/Pcreate.php" method="POST">
        <input type="text" id="form1" class="form-control" name="pname"/>
        <label class="form-label" for="form1">Project Name</label>
        <input type="text" id="form2" class="form-control" name="deadline" placeholder="yyyy-mm-dd"/>
        <label class="form-label" for="form2">Deadline</label>
        <textarea class="form-control" id="textAreaExample" rows="4" name="desc"></textarea>
        <label class="form-label" for="textAreaExample">Description</label><br>
        <button type="submit" class="btn btn-secondary">Submit</button>
    </form>
</div>

<!-- Main Panel -->
</body>
</html>