<?php
session_start();
if(!isset($_SESSION['college'])){
    echo "<script> alert('You have all ready given your Quiz. Thank You! ');window.location.href='index.php';</script>";
}
include "db.php";
if(isset($_POST['submit_quiz'])){
    header('Location: '.'welcome.php');
}

if(isset($_GET['question_no'])){
    if(isset($_POST['lock_btn']))
        $ques_no = $_GET['question_no']+1;
    else
        $ques_no = $_GET['question_no'];
}else{
    $ques_no = 1;
}


if( isset($_POST['lock_btn'])){
    $sql = "select * from answers where college_name='$_SESSION[college]'";
    $data = mysqli_query($conn,$sql);

    if(mysqli_num_rows($data)==0) {
        if ($ques_no == 1) {
            if (isset($_POST['question_sel']))
                $sql = "insert into answers (college_name,`50`) VALUES('$_SESSION[college]','$_POST[question_sel]') ";
        } else {
            $ques_no1 = $ques_no - 2;
            $ques_no = $ques_no - 1;
            if (isset($_POST['question_sel']))
                $sql = "insert into answers (college_name,`$ques_no1`) VALUES('$_SESSION[college]','$_POST[question_sel]')";
        }
    }else{
        if ($ques_no == 1) {
            if (isset($_POST['question_sel']))
                $sql = "update answers set `50` = '$_POST[question_sel]' where college_name='$_SESSION[college]' ";
        } else {
            $ques_no1 = $ques_no - 2;
            $ques_no = $ques_no - 1;
            if (isset($_POST['question_sel']))
                $sql = "update answers set `$ques_no1` = '$_POST[question_sel]' where college_name='$_SESSION[college]' ";
        }
    }

    if(mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$sql = "select * from stage1 where ques_no='$ques_no'";
$data = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($data);
if(mysqli_num_rows($data)==0){
    header('Location: '.'wrong_question_url.php');
}

$sql_check_answer = "select * from answers where college_name='$_SESSION[college]' ";
$data_check_answer = mysqli_query($conn,$sql_check_answer);
if(mysqli_num_rows($data_check_answer)!=0){
    $row_check_answer = mysqli_fetch_assoc($data_check_answer);
}


if($row['ques_no']==50)
    $r = 0;
else
    $r = $row['ques_no']+1;
?>


<script type="text/javascript">
    // Set the date we're counting down to
    var countDownDate = new Date("<?= date('M d, Y H:i:s', strtotime($_SESSION['end_time'])) ?>").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        if(seconds <10 && minutes < 10){
            document.getElementById("response").innerHTML = "0"+minutes + " : 0" + seconds;
        }
        else if(minutes <10 ){
            document.getElementById("response").innerHTML = "0"+minutes + " : " + seconds;
        }
        else if(seconds <10 ){
            document.getElementById("response").innerHTML = minutes + " : 0" + seconds;
        }else{
            document.getElementById("response").innerHTML = minutes + " : " + seconds;
        }

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            window.location = "welcome.php";
        }
    }, 1000);
</script>


<!DOCTYPE Html>
<html>
<head>
    <title>
        Quiz
    </title>
    <!--    <link rel="stylesheet" href="css/bootstrap.css">-->
    <!--    <script src="js/bootstrap.js" ></script>-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--<script src="js/jquery.js" ></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="text-center">
        <div class="col-md-12">
            <div class="col-md-7">
                <h1>Quiz</h1>
            </div>
            <div class="col-md-5 text-center">
                <h1 id="response"></h1>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <form action="main.php?question_no=<?=$r?>" method="POST">
            <div class="panel-group">
                <div class="col-md-9">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Question No. <?= $row['ques_no']  ?></h4>
                            <p><?= $row['question']  ?>:</p>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="radio">
                                    <?php if(isset($row_check_answer)){
                                        if($row_check_answer[$ques_no] == '1'){
                                            echo '<label><input type="radio" value="1" name="question_sel" checked>'.$row['option_1'].'</label>';
                                        }else{
                                            echo '<label><input type="radio" value="1" name="question_sel">'.$row['option_1'].'</label>';
                                        }
                                    }else{
                                        echo '<label><input type="radio" value="1" name="question_sel">'.$row['option_1'].'</label>';
                                    }?>


                                </div>
                            </div>
                            <div class="form-group">
                                <div class="radio">
                                    <?php if(isset($row_check_answer)){
                                        if($row_check_answer[$ques_no] == '2'){
                                            echo '<label><input type="radio" value="2" name="question_sel" checked>'.$row['option_2'].'</label>';
                                        }else{
                                            echo '<label><input type="radio" value="2" name="question_sel">'.$row['option_2'].'</label>';
                                        }
                                    }else{
                                        echo '<label><input type="radio" value="2" name="question_sel">'.$row['option_2'].'</label>';
                                    }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="radio">
                                    <?php if(isset($row_check_answer)){
                                        if($row_check_answer[$ques_no] == '3'){
                                            echo '<label><input type="radio" value="3" name="question_sel" checked>'.$row['option_3'].'</label>';
                                        }else{
                                            echo '<label><input type="radio" value="3" name="question_sel">'.$row['option_3'].'</label>';
                                        }
                                    }else{
                                        echo '<label><input type="radio" value="3" name="question_sel">'.$row['option_3'].'</label>';
                                    }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="radio">
                                    <?php if(isset($row_check_answer)){
                                        if($row_check_answer[$ques_no] == '4'){
                                            echo '<label><input type="radio" value="4" name="question_sel" checked>'.$row['option_4'].'</label>';
                                        }else{
                                            echo '<label><input type="radio" value="4" name="question_sel">'.$row['option_4'].'</label>';
                                        }
                                    }else{
                                        echo '<label><input type="radio" value="4" name="question_sel">'.$row['option_4'].'</label>';
                                    }?>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <ul class="pager">
                                <?php if($row['ques_no']==1){?>
                                    <li class="previous"><a href="main.php?question_no=50">Previous</a></li>
                                <?php }else{ ?>
                                    <li class="previous"><a href="main.php?question_no=<?= $row['ques_no']-1 ?>">Previous</a></li>
                                <?php } ?>



                                <input type="submit" name="lock_btn"  class="btn btn-info" value="Save Answer And Next" >

                                <?php if($row['ques_no']==50){?>
                                    <li class="next"><a href="main.php?question_no=1">Next</a></li>
                                <?php }else{ ?>
                                    <li class="next"><a href="main.php?question_no=<?= $row['ques_no']+1 ?>">Next</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="margin-top: 0;padding-top: 0;">
                    <?php
                    echo '<div class="btn-group" style="padding: 20px;padding-top:0;">';
                    for($i=0;$i<50;$i++){
                        if($i%5==0)
                            echo '<br>';
                        if(isset($row_check_answer)){
                            if($row_check_answer[$i+1]!=''){
                                echo '<a class="anchor_question btn btn-success" style="width:40px;height:40px;" href="main.php?question_no='.($i+1).'" data-value="'.($i+1).'">'.($i+1).'</a>';
                            }
                            else{
                                echo '<a class="anchor_question btn btn-danger" style="width:40px;height:40px;" href="main.php?question_no='.($i+1).'" data-value="'.($i+1).'">'.($i+1).'</a>';
                            }
                        }else{
                            echo '<a class="anchor_question btn btn-danger" style="width:40px;height:40px;" href="main.php?question_no='.($i+1).'" data-value="'.($i+1).'">'.($i+1).'</a>';
                        }

                    }
                    echo '</div>';
                    ?>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="form-group col-md-9">
                <button name="submit_quiz" class="btn btn-warning btn-block form-control" type="submit">Exit</button>
            </div>
            <br>
            <br>
        </form>
    </div>

</div>




</body>


</html>

