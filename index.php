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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#createDatabase").click(function(){
    $.get("createDatabase.php", function(data){
      $("#createDatabaseResponse").html(data);
      $("#deleteDatabaseResponse").html(" ");
      $("#createTableResponse").html(" ");
      $("#deleteTableResponse").html(" ");
    });
  });
});

$(document).ready(function(){
  $("#createTable").click(function(){
    $.get("createTable.php", function(data){
      $("#createTableResponse").html(data);
      $("#deleteTableResponse").html(" ");
      $("#createDatabaseResponse").html(" ");
      $("#deleteDatabaseResponse").html(" ");
    });
  });
});

$(document).ready(function(){
  $("#deleteTable").click(function(){
    $.get("deleteTable.php", function(data){
      $("#deleteTableResponse").html(data);
      $("#createTableResponse").html(" ");
      $("#createDatabaseResponse").html(" ");
      $("#deleteDatabaseResponse").html(" ");
    });
  });
});

$(document).ready(function(){
  $("#deleteDatabase").click(function(){
    $.get("deleteDatabase.php", function(data){
      $("#deleteDatabaseResponse").html(data);
      $("#createDatabaseResponse").html(" ");
      $("#deleteTableResponse").html(" ");
      $("#createTableResponse").html(" ");

    });
  });
});

$(document).ready(function(){
  $("#showTable").click(function(){
    $.get("showTable.php", function(data){
      $("#showTableResponse").html(data);
      $("#createTableResponse").html(" ");
      $("#createDatabaseResponse").html(" ");
      $("#deleteDatabaseResponse").html(" ");
    });
  });
});
</script>

<body>
    
        <ul>
          <button id ="createDatabase" name = "createDatabase.php"> Create Database  </button>
          <div id = "createDatabaseResponse"> </div>
        </ul>
            
        <ul>
               <button id ="createTable" name = "createTable.php" >   Create Table </button> 
               <div id = "createTableResponse"> </div>
        </ul>
            

        <ul>
           <button id = "deleteTable" name = "deleteTable.php"> Delete Table </button>
           <div id = "deleteTableResponse"> </div> 
        </ul>
            

        <ul>
             <button id = "deleteDatabase" name = "deleteDatabase.php">   Delete Database </button>
             <div id = "deleteDatabaseResponse"> </div> 
        </ul>

        <form action="insertData.php" method="post">
            Part Name: <input type="text" name="partName"><br>
            Part Model: <input type="text" name="partModel"><br>
            Quantity: <input type="text" name="partQuantity"><br>
            <input type="submit">
        </form>

        <ul>
             <button id = "showTable" name = "showTable.php">   Show Table </button>
             <div id = "showTableResponse"> </div> 
        </ul>
    


</body>

</html>