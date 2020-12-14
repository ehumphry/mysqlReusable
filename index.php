<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Database Menu</title>
</head>

<body>
    
        <ul>
        <a href = "createDatabase.php">  <button> Create Database  </button> </a>
        </ul>
        <ul>
             <a href = "createTable.php"> <button >   Create Table </button> </a>
        </ul>

        <ul>
            <a href = "deleteTable.php">  <button> Delete Table </button> </a>
        </ul>
        
        <ul>
            <a href = "deleteDatabase.php"><button>   Delete Database </button> </a> 
        </ul>
        

        <form action="insertData.php" method="post">
            Part Name: <input type="text" name="partName"><br>
            Part Model: <input type="text" name="partModel"><br>
            Quantity: <input type="text" name="partQuantity"><br>
            <input type="submit">
        </form>
    


</body>
</html>