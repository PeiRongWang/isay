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
     <script src="assets/controller.js"></script>
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
       <div class=" eight wide column" ng-controller="myCtrl">
          <div class="ui piled segment" ng-repeat="item in data">
             <p>
               <h1 class="ui header font">{{ item.item }}</h1>
                <a class="ui tag label" ng-repeat="keywords in item.keywords">{{ keywords }}</a>
             </p>
               <p style="position:absolute;right:55px;top: 120px;" class="font">共同參與人數：{{ item.joined }} 人</p><img src="people.png" style="position:absolute;right:10px;top: 115px" width="25"> 
          </div>
       </div>
      
       <div class="eight wide column" id="result_data"> </div>
        
        </div>
         <div class="ui grid">
            <div class="eight wide column"></div>
            <div class="eight wide column">
                <div class="ui icon input fluid">
                    <input type="text" placeholder="說些什麼呢..." id="say_text" data-content="記下些什麼吧、說話啊、打字阿">
                    <i class="send link icon" id="send"></i>

                </div>
            </div>

        <script>

            $('#say_text').popup();

            // 我的標記
            $("#send").click(function() {

                submit_text();

            });

            $("#say_text").keypress(function(e){

                code = (e.keyCode ? e.keyCode : e.which);

                if (code == 13 && $("#say_text").val() != "") {

                    submit_text();

                }

            });

            function submit_text () {

                $("#result_data").append(

                    '<div class="ui segment clearing basic">' + 

                        '<div class="ui left floated button blue">' + $("#say_text").val() + '</div>' + 

                    '</div>'
               
                );

                $("#say_text").val("");

                setTimeout(function () {
                    
                    $("#result_data").append(

                        '<div class="ui segment clearing basic">' + 

                            '<div class="ui right floated button grey">對啊夏天超熱的</div>' + 

                        '</div>'

                    );

                }, 1200);

            }

            // 自動輸入
            $("#auto_say").click(function(){
  
                $("#say_text").val("你想去墾丁玩唷?");
                $("#say_text").focus();

            });


        </script>
</body>
</html>
