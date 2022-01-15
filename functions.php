<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
</head>
<body>
    
    <form action="functions.php" method="POST">
        <input type="text" name="myName">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $name = validateInputData($_POST["myName"]);
    echo $name;
  }
    // FUNCTION TO TEST CLEAN DATA
    function validateInputData($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }

    // if(isset($_POST['submit'])){
    //     $name = validateInputData($_POST['myName']);
    //     echo $name;
    // }
?>