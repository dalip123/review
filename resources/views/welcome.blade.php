<!DOCTYPE html>
<html>
    <head>
        <title>Review</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="public/js/index.js"></script>
    </head>
    <body>
<div class="container">
<div class="text-centre"><h2>Give us Feedback</h2></div>
<form action="" class="form-horizontal">
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
@if(isset($reviewActive))
@if(!$reviewActive)
 <a class="btn btn-primary" href="https://www.facebook.com/pg/Roboticsembeddededucationservicespvtltd/reviews/">Give Review on Facebook</a>
@endif
@endif
</div>
  <div class="form-group">
<label for="name">Google Review</label>
<a class="btn btn-primary" href="{{ route('social.login', ['google']) }}">Google</a>
</div>
   
<div class="form-group">
<input type="submit" class="form-control btn btn-primary" value="submit">
</div>
</form>
</div>
    </body>
</html>
