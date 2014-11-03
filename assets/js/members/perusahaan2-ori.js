var app = angular.module('myApp', ['angularFileUpload','ui.bootstrap.datepicker']);

app.controller('myCtrl', [ '$scope', '$upload', function($scope, $upload) {
  $scope.onFileSelect = function($files) {
    for (var i = 0; i < $files.length; i++) {
      var file = $files[i];
      $scope.upload = $upload.upload({
        url: 'perusahaan2_upload.php',
        data: {myObj: $scope.myModelObj},
        file: file, 
      }).progress(function(evt) {
        console.log('percent: ' + parseInt(100.0 * evt.loaded / evt.total));
      }).success(function(data, status, headers, config) {
        console.log(data);
      });      
    }    
  };
  
  /////
  
}]);

console.log('form built by mirzalazuardi hermawan (mirzalazuardi@gmail.com) - www.mh-praxis.com - 6th october 2014');