	app.controller('admincontroller', function($scope,$http,$window) {
    $scope.initialize=false;
    $scope.countFacebookLink=0;
    $scope.countGoogleLink=0;
    $scope.updateGoogleReview = function(){
    	$scope.countGoogleLink++;
     
    };

        $scope.updateFacebookReview = function(){
    	
        $scope.countFacebookLink++;
    };

});

