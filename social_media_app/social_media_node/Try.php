<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Social Media App</title>
<!-- Use CDN to ensure AngularJS library loads properly -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</head>
<body ng-app="socialMediaApp">
<div ng-controller="MainController">
<h1>{{ message }}</h1>
</div>
<script>
    // Define the AngularJS application module
    var app = angular.module('socialMediaApp', []);
    
    // Define the controller and its scope
    app.controller('MainController', function ($scope) { 
        $scope.message = 'Welcome to Social Media App!'; 
    });
</script>
</body>
</html>
