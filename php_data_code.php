<?php
include('../conn.php');

if(isset($_POST['submit']))
{    
    $team_name =  $_POST['team_name'];
    $school_name = $_POST['school_name'];
    $contact =  $_POST['contact'];
    $email =  $_POST['email'];
    $category =  $_POST['category'];
    $city =  $_POST['city'];
    $state =  $_POST['state'];
    $zip =  $_POST['zip'];
    $member_one =  $_POST['member_one'];
    $member_one_dob =  $_POST['member_one_dob'];
    $member_two =  $_POST['member_two'];
    $member_two_dob =  $_POST['member_two_dob'];
    $member_three =  $_POST['member_three'];
    $member_three_dob =  $_POST['member_three_dob'];
    $member_four =  $_POST['member_four'];
    $member_four_dob =  $_POST['member_four_dob'];

    // insert new record
   if($allcount == 0){
     
     $sql = "SELECT * FROM Your_Table_Name WHERE email='$email'";
        $res = mysqli_query($db, $sql);

     if(mysqli_num_rows($res) > 0){
       $email_error = "Sorry... email already taken";  
     }else{
    
    $sql = "INSERT INTO Your_Table_Name (team_name,school_name,contact,email,category,city,state,zip,member_one,"
            . "member_one_dob,member_two,member_two_dob,member_three,member_three_dob,member_four,member_four_dob) VALUES ('$team_name','$school_name','$contact','$email','$category','$city',"
            . "'$state','$zip','$member_one','$member_one_dob','$member_two','$member_two_dob','$member_three','$member_three_dob','$member_four','$member_four_dob')";

    if(mysqli_query($db, $sql)){           
                $success = "Registration successfully done!";

            } else{
                echo "Error: " . $sql . ":-" . mysqli_error($db);
            }
            
            //      auto page refresh after 2 sec
            $page = $_SERVER['PHP_SELF'];
            $sec = "2";
            header("Refresh: $sec; url=$page");
        }

    }
    mysqli_close($db);
}

?>