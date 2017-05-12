var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {

$scope.userInfo = {
    "name": "王姵蓉",
    "dept": "資管系",
    "describe": "程式好難r"
}

    $scope.data = [
  {
    "item": "專題初審",
    "keywords": [
      "程式設計",
      "中原",
      "文書",
      "硬體設備"
    ],
    "joined": 3
  },
  {
    "item": "宿營企劃",
    "keywords": [
      "場地",
      "隊輔",
      "活動規劃",
      "備案"
    ],
    "joined": 20
  },
  {
    "item": "母親節",
    "keywords": [
      "禮物",
      "餐廳",
      "優惠券",
      "百貨公司"
    ],
    "joined": 4
  }
];
}

);