<?php 


    include 'database.php';



$query = "SELECT * FROM task";
$result = mysqli_query($conn, $query);

if(!$result){
    die('La consulta ha fallado.' . mysqli_error($conn));
}
    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'name' => $row['name'],
            'description' => $row['description'],
            'id' => $row['id'] 
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;

?>