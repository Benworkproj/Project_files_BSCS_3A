<?php
$row['firstname'] = null;
$row['lastname'] = null;
$row['address'] = null;
$row['birthdate'] = null;
$row['contact_info'] = null;
$row['gender'] = null;
$row['schedule_id'] = null;
$row['position_id'] = null;
$row['photo'] = null;
$row['created_on'] = null;

if(isset($_GET['get_id'])){
    
    $employee_id = $_GET['employee_id'];
    $query = "SELECT * FROM employees WHERE employee_id='$employee_id'";
    
    $query_run = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $row){
            ?>

            <?php
        }
    }
    else{
        echo '<script>alert("No rec")</script>';
    }
    
}
?>
