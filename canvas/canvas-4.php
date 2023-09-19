<?php
  session_start();
 
  // Check if the user is logged in, if not then redirect him to login page
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      header("location: ../login");
      exit;
  }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        
          <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108740911-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108740911-1');
</script>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Big Canvas 1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css"/>
        <link rel="stylesheet" href="../css/book.css">
    </head>
    <body>
    <?php include('headsgubu.php'); ?>

        <div class="main">
            <div class="container" >
                <div id="visuals">
                    <div id="visual_edit">
                        <div id="pallette">

                            <a href="javascript:void(0)" class="pallette_btns" title="Text" id="pallette_text_btn" onclick="openTextBox()">
                                <img class="pallette_icons" src="../img/text.svg" alt="">
                            </a>
                            <a href="javascript:void(0)" class="pallette_btns" title="Text Colour" id="pallette_text_color" onclick="openColorPicker('text_color')">
                                <img class="pallette_icons" src="../img/text-color-icon.svg" alt="">
                            </a>
                            
                            <a href="javascript:void(0)" class="pallette_btns" title="Background Colour" id="pallette_background_color" onclick="openColorPicker('background_color')">
                                <img class="pallette_icons" src="../img/paint-bucket-icon.svg" alt="">
                            </a>
                            
                            <a href="javascript:void(0)" class="pallette_btns" title="Background Image" id="pallette_background_img_btn" onclick='uploadBackImg()'>
                                <img class="pallette_icons" src="../img/picture-icon.svg" alt="">
                            </a>
                            
                            <a href="javascript:void(0)" class="pallette_btns" title="Graphic Colour" id="pallette_graphic" onclick="openColorPicker('graphic_color')">
                                <img class="pallette_icons" src="../img/paintbrush-icon.svg" alt="">
                            </a>
                            
                            <a href="javascript:void(0)" class="pallette_btns action_btns" id="uploadbtn" onclick="uploadSong()" title="Upload Song">
                                <img class="pallette_icons" src="../img/audio.svg" alt="">
                            </a>
                            <a href="javascript:void(0)" class="pallette_btns action_btns" id="qalaRecording" title="Start Record">
                                <img class="pallette_icons" src="../img/circle.svg" alt="">
                            </a>
                            <a href="javascript:void(0)" class="pallette_btns action_btns" id="rec" disabled title="Stop Recording">
                                <img class="pallette_icons" src="../img/media-control.svg" alt="">
                            </a>
                            <a href="" id="thelink" class="action_btns" download="bigcanvas.mp4" title="Download File"></a>
                            <input type="file" accept="audio/*" id="trackupload">
                            <p id="trackname">Track Name</p>

                            <div>
                                <div id="pallette_text">
                                    <textarea id="pallette_text_box" name="" maxlength="30"></textarea><br>
                                    
                                </div>
                                <div class="color-picker" id="text_color"></div>
                                <div class="color-picker" id="background_color_btn"></div>
                                <div class="colo-picker" id="pallette_graphic_color"></div>
                                <input type="file" class="pallette_inputs" name="" id="pallette_background_img" accept="image/*" style="display: none;">
                            </div>

                        </div>

                        <audio id="audio1" autoplay ></audio>

                        <form action="../uploadcanvas.php" method="post" name="downloadform">
                            <input type="text" name="userid" value="<?php echo htmlspecialchars($_SESSION['userid']) ?>"> 
                            <input type="number" name="canvas_type">    
                            <input type="text" name="link" >
                            <!-- <input type="submit" value="submit"> -->
                        </form>
                    </div>

                    <div id="visual_canvas">
                        <canvas id="canvas"></canvas>
                        <div id="timeDisplay">
                            <p> Recording</p>
                            <div id="record_clock">
                                <p id="download_duration">0</p>
                            </div>
                            <p id="d_d">00:00:00 / 00:00:00</p>
                            
                        </div>
                        
                    </div>

                    <!-- <div id="visual_controls">
                        <div id="thebtns">
                            
                            
                            
                        </div>
                        

                    </div> -->
                </div>
            </div>

        </div>

        <?php include('bottom.php'); ?>
        <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
        <script src="../js/detect.min.js"></script>
        <script src="../js/webm.js" defer></script>
        <script src="../js/recordRTC.js" defer></script>
        <script src="../js/animation4.js" defer></script>
        <script src="../js/pallette.js" defer></script>
        <script src="../js/visual.js" defer></script>
    </body>
</html>