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
            src: url(//fonts.gstatic.com/ea/cwtexhei/v3/cwTeXHei-zhonly.eot?#iefix) format('embedded-opentype'), url(//fonts.gstatic.com/ea/cwtexhei/v3/cwTeXHei-zhonly.woff2) format('woff2'), url(//fonts.gstatic.com/ea/cwtexhei/v3/cwTeXHei-zhonly.woff) format('woff'), url(//fonts.gstatic.com/ea/cwtexhei/v3/cwTeXHei-zhonly.ttf) format('truetype');
        }
    </style>
</head>

<body>

    <?php require 'navbar.php'; ?>
    <div class="ui grid">
        <div class=" eight wide column">

            <div class="ui piled segment">
                <a class="ui blue ribbon label">文書</a>
                <h4>1.請各專題組於106年6月8日(四)17點前繳交1頁專題簡介電子檔至系辦：簡介請包含以下三項：(1)動機。(2)使用技術。(3)預期成果。 2.請各專題組於106年6月22日(四)中午12點前繳交3本書面計畫書及一份簡報檔案至系辦並測試無誤，為維持公平原則起見，計畫書及簡報內容不可出現專題指導老師姓名。
                </h4>
            </div>
            <div class="ui piled segment">
                <a class="ui red ribbon label" href="kwd_code_all.php">程式設計</a><br><br>
                <iframe width="350" height="300" src="https://www.youtube.com/embed/0NLO7ciejT4" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <div class="eight wide column" id="result_data"> 
            <h1 id="text">專題初審</h1>
        </div>

    </div>
    <div class="ui grid">
        <div class="eight wide column"></div>
        <div class="eight wide column">
            <div class="ui icon input fluid">
                <input type="text" style="border-color: cornflowerblue;border-width:3px;" placeholder="說些什麼呢..." id="say_text" data-content="記下些什麼吧、說話啊、打字阿">
                <i class="send link icon" id="send"></i>

            </div>
        </div>
    </div>
    <script>
        $('#say_text').popup();

        // 我的標記
        $("#send").click(function () {

            submit_text();

        });

        $("#say_text").keypress(function (e) {

            code = (e.keyCode ? e.keyCode : e.which);

            if (code == 13 && $("#say_text").val() != "") {

                submit_text();

            }

        });

        function submit_text() {

            $("#result_data").append(

                '<div class="ui segment clearing basic">' +

                '<div class="ui right floated button blue">' + $("#say_text").val() + '</div>' +

                '</div>'

            );

            $("#say_text").val("");

            setTimeout(function () {

                $("#result_data").append(

                    '<div class="ui segment clearing basic">' +

                    '<div class="ui left floated button grey">我樹梅派研究好了</div>' +


                    '</div>' +

                    '<div class="ui left floated button green">我3D列印壞掉了</div>' +


                    '</div>'

                );

            }, 1500);

        }

        // 自動輸入
        $("#auto_say").click(function () {

            $("#say_text").val("妳做到哪裡了");
            $("#say_text").focus();

        });
    </script>
</body>

</html>