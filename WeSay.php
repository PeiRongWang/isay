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
     <script src="https://ajax.googleapis.com/ajax/libs/<angula></angula>rjs/1.6.4/angular.min.js"></script>
     <script src="assets/container.js"></script>
     <style>
        @font-face {
            font-family: 'cwTeXHei';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/ea/cwtexhei/v3/cwTeXHei-zhonly.eot);
            src: url(//fonts.gstatic.com/ea/cwtexhei/v3/cwTeXHei-zhonly.eot?#iefix) format('embedded-opentype'),
            url(//fonts.gstatic.com/ea/cwtexhei/v3/cwTeXHei-zhonly.woff2) format('woff2'),
            url(//fonts.gstatic.com/ea/cwtexhei/v3/cwTeXHei-zhonly.woff) format('woff'),
            url(//fonts.gstatic.com/ea/cwtexhei/v3/cwTeXHei-zhonly.ttf) format('truetype');
        }
     </style>
</head>
<body>

    <?php require 'navbar.php'; ?>
        <!-- CONTAINER -->
    <div class="ui container" ng-app="myApp">
    <div class="ui grid">
       <div class=" ten wide column" ng-controller="myCtrl">
          <div class="ui piled segment" ng-repeat="item in data">
             <p>
               <h1 class="ui header font">{{ item.item }}</h1>
                <a class="ui tag label" ng-repeat="keywords in item.keywords">{{ keywords }}</a>
             </p>
               <p style="position:absolute;right:55px;top: 120px;" class="font">共同參與人數：{{ item.joined }} 人</p><img src="people.png" style="position:absolute;right:10px;top: 115px" width="25"> 
          </div>
       </div>
</body>
</html>
