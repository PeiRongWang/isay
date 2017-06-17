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
</head>

<body>

    <?php require 'navbar.php'; ?>

    <!-- CONTAINER -->
    <div class="ui container" ng-app="myApp">

        <div class="ui grid">
            <div class="four wide column" ng-controller="myCtrl">
                <div class="ui card">
                    <div class="image">
                        <img src="https://semantic-ui.com/images/avatar2/large/kristy.png">
                    </div>
                    <div class="content">
                        <a class="header">{{ userInfo.name }}</a>
                        <div class="meta">
                            <span class="date">{{ userInfo.dept }}</span>
                        </div>
                        <div class="description">
                            {{ userInfo.describe }}
                        </div>
                    </div>
                </div>
                <button class="fluid ui button"><i class="plus icon"></i> 新增日記</button>
            </div>
        </div>
    </div>
    <!-- CONTAINER END -->

</body>

</html>