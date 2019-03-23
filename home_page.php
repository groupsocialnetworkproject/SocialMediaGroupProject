<?php 
session_start();
if (isset($_SESSION['user_online'])){
    
}
else{
    header('Location:https://betterbook.000webhostapp.com/login.php');
}
include_once('forum_code.php');
//$forumCode = new ForumCode();
include_once "Header.php";
include "profile_code.php";
include_once "job_objects.php";
include_once "post_objects.php";
include_once "profile_objects.php";

$objVariable = new Profile();
?>
<!DOCTYPE html>
<html>
<head>
<title>Better Face</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/Header.css">
<link type="text/css" rel="stylesheet" href="css/home_page.css">
</head>
<body>
    <div class="row" id="space30"></div>
    <div id="container">
        <div class="row">
            <div class="col-4" style="background-color:#c5bef9;">
                <div class="row">
                    <div class="col-12" >
                        <?php
                            echo "<br>";
                            $profileData = $objVariable->get_profile($_SESSION['user_online']);
                            $profile_image = $profileData['profile_picture'];
                            echo "<div><img class='img-fluid' style='max-width: 100%; height: auto;' src='assets/".$profile_image."'></div>";
                            //echo "<div style='background-image: url(assets/".$profile_image.")></div>";
                        ?>
                    </div>
                </div>
                <div class="row" id="space30"></div>
                <div class="row">
                    <div class="col-12" style="font-size:1.2vw;">
                        <?php
                            $loggedin = True;
                            echo "Welcome " . $profileData['first_name'];
                        ?>
                    </div>
                </div>
                <div class="row" id="space30"></div>
                <div>
                    <hr><br>
                    <p class="fluid-text" style="font-size:1.2vw;">Suggested Job Listings For You</p>
                    <?php
                        $sug_jobs_array = array();
                        $url_software = "assets/software.jpg";
                        $url_chemical = "assets/chemical.jpg";
                        $url_mechanical = "assets/mechanical.jpg";
                        $url_electronic = "assets/electronics.jpg";
                        $url_bck;
                        while(sizeof($sug_jobs_array) < 3)
                        {
                            $random = rand(0, sizeof($jobs_array));
                            if(sizeof($sug_jobs_array) == 0)
                            {
                                $jobObj = $jobs_array[$random];
                                array_push($sug_jobs_array, $jobObj);
                            }
                            else
                            {
                                $jobObj = $jobs_array[$random];
                                for($x = 0; $x < sizeof($sug_jobs_array); $x++)
                                {
                                    if($sug_jobs_array[$x]->getId() != $jobObj->getId())
                                    {
                                        array_push($sug_jobs_array, $jobObj);
                                    }
                                }
                            }
                        }
                            
                        for($x = 0; $x < 3; $x++)
                        {
                            if($sug_jobs_array[$x]->getField() == "Software and Technology")
                            {
                                $url_bck = $url_software;
                            }
                            if($sug_jobs_array[$x]->getField() == "Mechanical Engineering")
                            {
                                $url_bck = $url_mechanical;
                            }
                            if($sug_jobs_array[$x]->getField() == "Chemical Engineering")
                            {
                                $url_bck = $url_chemical;
                            }
                            if($sug_jobs_array[$x]->getField() == "Electronic Engineering")
                            {
                                $url_bck = $url_electronic;
                            }
                            echo  "<div class='row' style='background-image: url(".$url_bck.");height:20px;'></div><div class='row' style='color:white; font-size:1.2vw; background-color:#591792;'><div class='col-12'>" . $sug_jobs_array[$x]->getTitle() . "<br>" . $sug_jobs_array[$x]->getCompany() . "</div></div><br><br>";   
                        }    
                    ?>
                    <hr>
                </div>
            </div>
            <div class="col-8">
                <?php
                    $posts_array = array_reverse($posts_array, FALSE);
                    for($x = 0; $x < sizeof($posts_array); $x++){
                        if($x > 100)
                        {
                            break;
                        }
                        else{
                            $img_item = "generic-profile.png";
                            for($y = 0; $y < sizeof($profiles_array); $y++)
                            {
                                if($profiles_array[$y]->get_user_email() == $posts_array[$x]->get_post_author())
                                {
                                    $img_item = $profiles_array[$y]->get_profile_pic();
                                }
                            }
                            //echo $img_item ."<br>";
                        
                            //$image = $profile_array;
                            echo"<div style='background-color:#c5bef9'>
                                <div class='row'>
                                    <div class='col-2'><img class='img-fluid' style='max-width: 100%;min-width:40px; height: auto;' src='assets/". $img_item ."'></div>
                                    <div class='col-8 align-middle'  text-md-center' style='font-weight:bold; font-size:1vw;'>".$posts_array[$x]->get_post_author()."</div><div class='col-2'></div>
                                </div>
                                <br><hr>
                                <div class='row'>
                                    <div class='col-12' style='font-weight:bold;font-size:1vw;'>".$posts_array[$x]->get_post_title()."</div>
                                </div>
                                <br>
                                <div class='row'>
                                    <div class='col-12'style='font-size:1vw;'>".$posts_array[$x]->get_post_text()."</div>
                                </div><br>
                            </div><br><br><br><br>"; 
                        }
                          
                    }
                    echo "<hr>";
                ?>
                
            </div>
        </div>
    </div>
    
    
<script src="Header.js"></script>
</body>
</html>