<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>The Ether Life is Coming!</title>
        <link rel="stylesheet" href="css/jbclock.css" type="text/css" media="all" />
        <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
        <script type="text/javascript" src="js/jbclock.js"></script>
        <?php
            /* Set start and end dates here */
            $startDate  = strtotime("03 April 2017 12:00:00");
            $endDate    = strtotime("24 May 2017 12:00:00");
            /* /Set start and end dates here */
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                JBCountDown({
                    secondsColor : "#ffdc50",
                    secondsGlow  : "none",
                    
                    minutesColor : "#9cdb7d",
                    minutesGlow  : "none",
                    
                    hoursColor   : "#378cff",
                    hoursGlow    : "none",
                    
                    daysColor    : "#ff6565",
                    daysGlow     : "none",
                    
                    startDate   : "<?php echo $startDate; ?>",
                    endDate     : "<?php echo $endDate; ?>",
                    now         : "<?php echo strtotime('now'); ?>"
                });
            });
        </script>
    </head>

    <body>

        <div class="wrapper" style="margin-top:150px;">
            <h1><img src="http://dsdomination.com/themes/public_2/images/logo.png" width="207" height="89" /><br />
              <br />
            The Ether Network Opens In:            </h1>
            <div class="clock">
              <div class="clock_days">
                  <canvas id="canvas_days" height="190px" width="190px" id="canvas_days"></canvas>
                  <div class="text">
                        <p class="val">0</p>
                        <p class="type_days">Days</p>
                    </div>
                </div>
                <div class="clock_hours">
                    <canvas height="190px" width="190px" id="canvas_hours"></canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_hours">Hours</p>
                    </div>
                </div>
                <div class="clock_minutes">
                    <canvas height="190px" width="190px" id="canvas_minutes"></canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_minutes">Minutes</p>
                    </div>
                </div>
                <div class="clock_seconds">
                    <canvas height="190px" width="190px" id="canvas_seconds"></canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_seconds">Seconds</p>
                    </div>
                </div>
                
            </div><!--/clock -->
        </div><!--/wrapper -->


        <div class="social">
            <div class="wrapper">
                <p>In the meantime why not join us on <a href="#">Facebook</a>? ;) </p>
            </div>
        </div><!--/social-->
    </body>
</html>
