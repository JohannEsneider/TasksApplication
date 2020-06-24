<?php 
include 'database.php';
if(isset($_POST['name'])) {
    
    $name = $_POST['name'];
    $description = $_POST['description'];
    $query = "INSERT INTO task(name, description) VALUES('$name', '$description')";

    $result = mysqli_query($conn, $query);
    if(!$result){
        die('La consulta ha fallado.');
    }
    echo 'The task has been saved.';
}
?>