<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>I say</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/semantic.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src="//code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="assets/semantic.min.js"></script>
  <link rel="stylesheet" href="assets/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script src="assets/container.js"></script>
</head>

<body>

  <?php require 'navbar.php'; ?>

  <h2 class="ui center aligned icon header">
    <img src="target.png"><br> 關於"程式設計"的最近幾筆資料
  </h2><br>

  <div class="ui container">
    <div class="ui two column centered grid">
      <div class="column">
        <div class="ui piled segments">
          <div class="ui segment">
            <img src="youtube.png" width="80">
            <script>
              $('.url.example .ui.embed').embed();
            </script>
            <p>
             <iframe width="350" height="300" src="https://www.youtube.com/embed/0NLO7ciejT4" frameborder="0" allowfullscreen></iframe>
            </p>
          </div>
        </div>

        <div class="ui piled segments">
          <div class="ui segment">
            <img src="picture.png" width="80">
            <p>
              <div class="ui small images">
                <img class="ui image" src="a.jpg">
                <img class="ui image" src="bb.jpg">
                <img class="ui image" src="c.jpg">
              </div>
            </p>

          </div>
        </div>

        <div class="ui piled segments">
          <div class="ui segment">
            <img src="microphone.png" width="80">
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 右下角小圈圈 -->
  <nav class="containers">
    <a class="buttons" href="#" tooltip="文字"></a>
    <a class="buttons" href="#" tooltip="語音"></a>
    <a class="buttons" href="#" tooltip="圖片"></a>
    <a class="buttons" href="#" tooltip="影片"></a>
    <a class="buttons" href="#" tooltip="Choose">
      <span>
          <span class="rotate"></span>
      </span>
    </a>
  </nav>
  </div>

</body>

</html>