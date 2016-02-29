var app = angular.module("testingApp", ["firebase"]);

app.controller("SampleCtrl", function($scope, $firebaseArray) {
  var ref = new Firebase("https://testing-ui.firebaseio.com");

  // create a synchronized array
  // click on `index.html` above to see it used in the DOM!
  $scope.slides = $firebaseArray(ref);
});