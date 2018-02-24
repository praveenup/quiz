<?php
    include "db.php";
    $college_name = $_SESSION['college'];
    $score = 0;
    $ans;
    $coll_ans;$result;$result1;
    for ($x = 1; $x <= 50; $x++) {
        $sql = "SELECT `$x` FROM answers WHERE `college_name` = '$college_name'";
        $result = mysqli_query($conn, $sql);
        $sql1 = "SELECT `$x` FROM solutions1";
        $result1 = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                $coll_ans = $row["$x"];
            }
            if (mysqli_num_rows($result1) > 0){
                while($row1 = mysqli_fetch_assoc($result1)){
                    $ans = $row1["$x"];
                }   
            }
            if($ans === $coll_ans){
                $score = $score + 1;
            }
        }    
    } 

    $sql2 = "UPDATE quiz_registration SET score = '$score' WHERE college = '$college_name'";
    if(mysqli_query($conn,$sql2) === TRUE){
        echo "<script>alert('Score has been updated successfully');</script>";
        //echo "Score has been updated successfully";
    }
    else {
        echo "Error".$sql2;
    }

   
?>