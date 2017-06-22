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
    <link rel="stylesheet" href="assets/style1.css">
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

<body ng-app="myApp" ng-controller="myCtrl">

    <?php require 'navbar.php'; ?>

    <div class="ui grid">

        <div class="sixteen wide column">
            <h2 class="ui center aligned icon header" ng-if="item.type == <?=$_GET['id']?>" ng-repeat="item in data">
                <i class="circular cloud icon"></i>
                {{ item.item }}
            </h2>
        </div>

    </div>

    <div class="ui grid">

        <div class="sixteen wide column">
            <div class="ui segment basic" ng-repeat="item in content" ng-if="item.type == <?=$_GET['id']?>">
                <h2 class="ui header">
                    <i class="hashtag icon"></i>
                    <div class="content">
                        {{ item.title }}
                    </div>
                </h2>
                <div class="ui piled segment" ng-bind-html="item.descriptions | to_trusted"></div>
            </div>
        </div>

    </div>
    <div class="ui grid"><!--聊天室-->
        <div id="live-chat">

            <header class="clearfix">

                <a href="#" class="chat-close">x</a>

                <h4>John Doe</h4>


            </header>
            <div class="chat">

                <div class="chat-history">

                    <div class="chat-message clearfix">

                        <img src="http://lorempixum.com/32/32/people" alt="" width="32" height="32">

                        <div class="chat-message-content clearfix">

                            <span class="chat-time">13:35</span>

                            <h5>John Doe</h5>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, explicabo quasi ratione odio dolorum harum.</p>

                        </div>
                        <!-- end chat-message-content -->

                    </div>
                    <!-- end chat-message -->

                    <hr>

                    <div class="chat-message clearfix">

                        <img src="http://gravatar.com/avatar/2c0ad52fc5943b78d6abe069cc08f320?s=32" alt="" width="32" height="32">

                        <div class="chat-message-content clearfix">

                            <span class="chat-time">13:37</span>

                            <h5>Marco Biedermann</h5>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, nulla accusamus magni vel debitis numquam
                                qui tempora rem voluptatem delectus!</p>

                            </div>
                            <!-- end chat-message-content -->

                        </div>
                        <!-- end chat-message -->

                        <hr>

                        <div class="chat-message clearfix">

                            <img src="http://lorempixum.com/32/32/people" alt="" width="32" height="32">

                            <div class="chat-message-content clearfix">

                                <span class="chat-time">13:38</span>

                                <h5>John Doe</h5>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

                            </div>
                            <!-- end chat-message-content -->

                        </div>
                        <!-- end chat-message -->

                        <hr>

                    </div>
                    <!-- end chat-history -->

                    <p class="chat-feedback">Your partner is typing…</p>

                    <form action="#" method="post">

                        <fieldset>

                            <input type="text" placeholder="Type your message…" autofocus>
                            <input type="hidden">

                        </fieldset>

                    </form>

                </div>
                <!-- end chat -->

            </div>
            <!-- end live-chat -->
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    </body>
    <script src="assets/index1.js"></script>
    </html>
