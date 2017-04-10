<!DOCTYPE html>
<html>
    <head>
        <title>Review</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="public/js/index.js"></script>
  <script src="public/app/app.js"></script>
    </head>
    <body ng-app="myApp">
<div class="container" >
<div class="text-centre"><h2>Give us Feedback</h2></div>
<form action="" class="form-horizontal" ng-controller="indexcontroller">
<div class="form-group">
<label for="name">Name:</label>
<input type="text" class="form-control" id="name" name="name">
</div>
<div class="form-group">
<label for="email">Email:</label>
<input type="text" class="form-control" id="email" name="email">
</div>
<div class="form-group">
<label for="name">Phone No.</label>
<input type="text" class="form-control" id="phone" name="phone">
</div>
<div class="form-group">
<label for="name">Facebook Review</label>
<a class="btn btn-primary" href="{{ route('social.login', ['facebook']) }}">Facebook</a>
@if(isset($reviewFacebook))
 @if(!$reviewFacebook)
  
            <a class="btn btn-primary" target="_blank" ng-click="updateFacebookReview()" href="https://www.facebook.com/pg/Roboticsembeddededucationservicespvtltd/reviews/">Give Review at Facebook</a>         
   @endif
 @endif
</div>
  <div class="form-group">
<label for="name">Google Review</label>
<a class="btn btn-primary" href="{{ route('social.login', ['google']) }}">Google</a>
@if(isset($reviewGoogle))
 @if(!$reviewGoogle)
  
            <a class="btn btn-primary" target="_blank" ng-click="updateGoogleReview()" href="https://www.google.co.in/search?q=rees52">Give Review at Google</a>         
   @endif
 @endif
</div>
   
<div class="form-group">
<input type="text"  id="facebookcount" name="facebook"  value="<% countFacebookLink %>">
<input type="text"  id="googlecount" name="google" value="<% countGoogleLink %>">

<input type="submit" class="form-control btn btn-primary" value="submit">
</div>
</form>
</div>
    </body>
    <script src="public/app/controllers/indexcontroller.js"></script>
</html>
