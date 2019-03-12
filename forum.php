<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include('forum_code.php');

$forumCode = new ForumCode();

if(isset($_POST['msg_post'])){
  $forumCode->send_message($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Blog Post - Start Bootstrap Template</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <!-- Custom styles for this template -->
      <link href="css/quickblog.css" rel="stylesheet">
      <link rel="stylesheet" href="css/chatcss.css">
   </head>
   <body style="padding-top: 56px;">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
         <div class="container">
            <a class="navbar-brand" href="#">Forum</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#">Home</a>
                  </li>
                  <?php 
                    if(isset($_SESSION['user_online'])){
                      echo '
                        <li class="nav-item"><a href="user_access_code.php?logout" class="nav-link">Logout</a></li>
                      ';
                    } else {
                      echo '
                        <li class="nav-item"><a href="login.php" class="nav-link">Login/Register</a></li>
                      ';
                    }
                  ?>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Page Content -->
      <div class="container">
         <div class="row">
            <!-- Post Content Column -->
            <div class="col-lg-8" id="forumPage">
               <h1 class="mt-4">Forum Page</h1>
               <hr>
                <?php 
                  $posts = $forumCode->get_posts();
                  foreach($posts as $post) {
                    echo '
                      <div class="card my-4">
                      <h5 class="card-header">'. $post['post_title'] . '</h5>
                      <div class="card-body">
                      <p>' . $post['post_author'] . ', ' . date('d/m/y H:i:s', strtotime($post['post-date'])) . '</p>
                      </div>
                      </div>
                    ';
                  } 
                ?>
            </div>
            <div class="col-lg-8" id="privateMsgWidget">
               <h1 class="mt-4">Private Messages</h1>
               <hr>
               <div class="card my-4">
                  <h5 class="card-header">Private Message</h5>
                  <div class="card-body">
                     <div class="panel panel-primary">
                        <div class="panel-body">
                           <ul class="chat">
                              <span id="dynamic_chat"></span>
                           </ul>
                        </div>
                        <div class="panel-footer">
                           <form role="form" method="POST" action="">
                              <div class="input-group" style="margin-bottom: 5px;">
                                 <input type="hidden" name="receiver" value="<?php echo 'tester@test.com' //echo $getAssoc['receiver']; ?>">
                                 <input type="hidden" name="sender" id="user_who_online" value="<?php echo $_SESSION['user_online']; ?>">
                                 <input type="text" name="msgbody" id="msgbody" placeholder="Enter your message..." class="form-control">
                              </div>
                              <div class="input-group">
                                 <input type="submit" class="form-control btn btn-success" name="msg_post">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">
               <!-- Search Widget -->
               <div class="card my-4">
                  <h5 class="card-header">Search</h5>
                  <div class="card-body">
                    <?php //echo 'tester@test.com' 
                      $getUser = $forumCode->get_users();
                      foreach($getUser as $foundUser) {
                        echo '<div class="input-group" style="border: 0.5px solid black; padding: 5px; border-radius: 10px; margin-bottom:5px;">
                            <img src="assets/generic-profile.png" name="hey" alt="pp" style="height:30px; margin-right: 5px;" class="privMsgUsr">
                            <h5>
                              <span id="startMsgUsr">
                                '. $foundUser['email'] . '
                              </span>
                            </h5>
                         </div>';
                      }
                    ?>
                     <Br>
                     <div class="input-group">
                        <button class="btn btn-success" style="width: 100%;" type="button">Go!</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
      <!-- Bootstrap core JavaScript -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <script type="text/javascript">
          $(document).ready(function(){
            $(".privMsgUsr").click(function(e) {
              var messageThem = $('#startMsgUsr').html();
              var online_user = $('#user_who_online').val();
              //try classes but then that doesnt 100% work, use alerts to test
              $.ajax({
                type: "POST",
                url: 'private_room_ajax.php',
                data: {"messageThem": messageThem, 'who_sending': online_user},
                success: function(data) {
                  $('#dynamic_chat').html(data);
                }
              });
            });

            $("#privateMsgWidget").hide();
            $(".privMsgUsr").click(function() {
              $("#privateMsgWidget").toggle();
              $("#forumPage").toggle();
            });
          });
      </script>
   </body>
</html>