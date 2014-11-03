var app = angular.module('myApp', ['angularFileUpload','restangular','ui.bootstrap.datepicker']);

app.config(function(RestangularProvider) {
    RestangularProvider.setBaseUrl('/api/v1');
  });

app.controller('myCtrl', [ '$scope', '$upload', 'Restangular', function($scope, $upload, Restangular) {
  $scope.onFileSelect = function($files) {
    for (var i = 0; i < $files.length; i++) {
      var file = $files[i];
      $scope.upload = $upload.upload({
        url: 'perusahaan2_upload',
        data: {myObj: $scope.myModelObj},
        file: file,
      }).progress(function(evt) {
        $scope.persen  = parseInt(100.0 * evt.loaded / evt.total);
      }).success(function(data, status, headers, config) {
        $scope.kumplit = data;
      });
    }
  };

  /////
  var akt = Restangular.all('akta');

  $scope.pencet = function() {
    akt.post($scope.user).then(function(msg){
      $scope.message = msg;
    });    
  };

}]);

console.log('form built by mirzalazuardi hermawan (mirzalazuardi@gmail.com) - www.mh-praxis.com - 6th october 2014');