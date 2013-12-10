<!DOCTYPE html>
<html>
 <head>
   <script src="http://player.ooyala.com/v3/<?php echo $player_id; ?>"></script>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/application/assets/css/web-sample.css">
  </head>
  <body>
    <h1> Web example </h1>
    <h1 id="video_title"> Title </h1>
      <div class="main">
         <div id='playerwrapper'></div>
         <p id="description">
            Description
          </p>
          <p id="metadata">
            Metadata
          </p>

          <div id="related_video_container">
            <div class="container">
              <img id="related_1" class="video related_video" src="http://www.fimfiction-static.net/images/story_images/92970.png"/>
              <div class="caption">Caption x</div>
            </div>
            <div class="container">
              <img id="related_2" class="video related_video" src="http://www.fimfiction-static.net/images/story_images/92970.png"/>
              <div class="caption">Caption x</div>
            </div>
            <div class="container">
              <img id="related_3" class="video related_video" src="http://www.fimfiction-static.net/images/story_images/92970.png"/>
              <div class="caption">Caption x</div>
            </div>
          </div>
      </div>
     <script>
         var videoPlayer =
            OO.Player.create('playerwrapper', '<?php echo $embed_code; ?>', {
        });
      </script>
      <script>
        var related_videos = <?php echo $related_videos;?>;
        var trending_videos = <?php echo $trending_videos;?>;
        var mb = videoPlayer.mb
      </script>


      <div class="related_video_container">
          <div class='side_container'>
             <img id="trending_1" class="video trending_video" src="http://www.fimfiction-static.net/images/story_images/92970.png"/>
              <div class="caption">Trending</div>
          </div>
          <div class='side_container'>
             <img id="trending_2" class="video trending_video" src="http://www.fimfiction-static.net/images/story_images/92970.png"/>
              <div class="caption">Trending</div>
          </div>
      </div>



      <script src="<?php echo base_url();?>/application/assets/javascript/web-sample.js"> </script>
  </body>
</html>