<?php
/*
 * Developed by Jordan Thomson 2015
 * 
 * System name: Scrt
 * 
 * Licenced software
 * 
 * Jordanthomson@techie.com
 */
?>


<script type="text/javascript">
$(document).ready(function() {
$.ajaxSetup({ cache: false }); // This part addresses an IE bug.  without it, IE will only load the first number and will never refresh
setInterval(function() {
$('#mail').load('./mailquery.php');
}, 8000); // the "1000" here refers to the time to refresh the div.  it is in milliseconds. 
});
</script>

<header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="../logged_in.php" class="logo"><b>SCRT Dashboard</b></a>
    <!--logo end-->
    
    
    <?PHP
     $taskqueryrows = mysql_query("select * from tasks where username='$login_session'");
            $taskquery = mysql_query("SELECT * FROM `tasks` WHERE `complete`='0' AND `username`='$login_session' ORDER by id DESC");
            $totaltasks = mysql_num_rows($taskqueryrows);
    ?>
    

    <div class="nav notify-row" id="top_menu">

        <!--  notification start -->
        <ul class="nav top-menu">
            <!-- settings start -->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-tasks"></i>
                    <span class="badge bg-theme"><?php echo $totaltasks ?></span>
                </a>
                <ul class="dropdown-menu extended tasks-bar">
                    <div class="notify-arrow notify-arrow-green"></div>
                 
                  
                     <?php
                        if ($taskqueryrows == "0") {
                            echo "<li> <p class='green'>You have 0 new tasks</p> </li>";
                        } else {
                          echo "<li> <p class='green'>You have ".$totaltasks." new tasks</p> </li>";
                           while($get1 = mysql_fetch_object($taskquery)){ ?>
                    <li>
                     <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc"><?PHP echo $get1->task; ?></div>
                                        <div class="percent"><?PHP echo $get1->percentage." %" ?></div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $get1->percentage; ?>" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only"><?PHP echo $get1->percentage;   ?> Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                    
                   
                     <?PHP } } ?>
                    <li class="external">
                        <a href="tasks.php">See All Tasks</a>
                    </li>
                </ul>
            </li>
            <!-- settings end -->





            <?php
            $mailqueryrows = mysql_query("select * from mail where username='$login_session'");
            $mailquery = mysql_query("SELECT * FROM `mail` WHERE `read`='0' AND `username`='$login_session' ORDER by id DESC");
            $totalmail = mysql_num_rows($mailqueryrows);
            ?>




            <!-- inbox dropdown start-->
            
            
            <li id="header_inbox_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-theme"><?php echo $totalmail ?></span>
                </a>

                <ul class="dropdown-menu extended inbox">
                    <div class="notify-arrow notify-arrow-green"></div>
                    <li>


                        <?php
                        if ($mailqueryrows == "0") {
                            echo "<p class='green'>You have 0 new messages</p> </li>";
                        } else {
                          echo "<p class='green'>You have ".$totalmail." new messages</p> </li>";
                           while($get = mysql_fetch_object($mailquery)){ ?>
                        
                    
                              <li>
                             
                               <?php echo "<a href='mail.php&read=$get->id'"; ?>
                                         <span class="photo"><img alt="avatar here" src="assets/img/ui-danro.jpg"></span>
                                         <span class="subject">
                            <?PHP  echo"  <span class='from'>$get->username_from</span>"; ?>
                                <span class="time">Just now</span>
                            </span>
                            <span class="message">
                            <?php echo $get->message; ?>
                            </span>
                                         </a>
                        </li>                       
                   
                             <?PHP } } ?>
                        <li>
                        <a href="mail.php">See all messages</a>
                    </li>
                </ul>
            </li>
            <!-- inbox dropdown end -->
        </ul>
        <!--  notification end -->
    </div>
    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li><a class="logout" href="sets/logout.php">Logout</a></li>
        </ul>
    </div>
</header>
<!--header end-->
