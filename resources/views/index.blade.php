<!DOCTYPE html>
<html>
    <head>
        <title>Review</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  
  <script src="public/js/index.js"></script>
  <script>
 var app = angular.module('myApp', [], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});
 
app.controller('indexcontroller', function($scope) {
     $scope.countFacebookLink=0;
    $scope.countGoogleLink=0;
    $scope.updateGoogleReview = function(){
    	$scope.countGoogleLink++;
    
    };

        $scope.updateFacebookReview = function(){
        $scope.countFacebookLink++;
    };
});
</script>
  
    </head>
    <body ng-app="myApp">
<div class="container" >
<div class="text-centre"><h2>Give us Feedback</h2></div>
<form action="{{route('submitReview')}}" class="form-horizontal" method="post" ng-controller="indexcontroller">
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<label for="name">Name: </label>
<input type="text" class="form-control" id="name" name="name">
<span class="help-block">{{ $errors->first('name') }}</span>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
<label for="email">Email:</label>
<input type="text" class="form-control" id="email" name="email">
<span class="help-block">{{ $errors->first('email') }}</span>
</div>
<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
<label for="name">Phone No.</label>
<input type="text" class="form-control" id="phone" name="phone">
<span class="help-block">{{ $errors->first('phone') }}</span>
</div>
<div class="form-group">
<label for="name">Facebook Review</label>
<a class="btn btn-primary" href="{{ route('social.login', ['facebook']) }}" ng-click="updateFacebookReview()">Facebook</a>
<span class="help-block">{{ $errors->first('facebook') }}</span>
@if(isset($reviewFacebook))
 @if(!$reviewFacebook)
  
            <a class="btn btn-primary" target="_blank"  href="https://www.facebook.com/pg/Roboticsembeddededucationservicespvtltd/reviews/">Give Review at Facebook</a>         
   @endif
 @endif
</div>
  <div class="form-group">
<label for="name">Google Review</label>
<a class="btn btn-primary" href="{{ route('social.login', ['google']) }}" ng-click="updateGoogleReview()">Google</a>
<span class="help-block">{{ $errors->first('google') }}</span>
@if(isset($reviewGoogle))
 @if(!$reviewGoogle)
  
            <a class="btn btn-primary" target="_blank"  href="https://www.google.co.in/search?q=rees52">Give Review at Google</a>         
   @endif
 @endif
</div>
   
<div class="form-group">
<input type="hidden"  id="facebookcount" name="facebook"  value="<% countFacebookLink %>">
<input type="hidden"  id="googlecount" name="google" value="<% countGoogleLink %>">

<input type="submit" class="form-control btn btn-primary" value="submit">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="hidden" name="_token" value="{{ Session::token() }}">
</div>
</form>
</div>
    </body>
 
</html>
