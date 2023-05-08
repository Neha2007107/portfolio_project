<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>view page</title>
  </head>
  <body>
    <h1>contact Details</h1>
    <form>
      <form action="{{url('/view-contact')}}" method ="post" class="form-right">
        <div class="form-group">
          <label for="exampleInputfirst_name">first Name</label>
          <input type="text" class="form-control" id="exampleInputfirst_Name" aria-describedby="first Name" placeholder="Enter your name"  value="{{$getData->first_name}}">
          <small id="first Name" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
           <div class="form-group">
          <label for="last name">last Name</label>
          <input type="text" class="form-control" id="exampleInputlast_Name" placeholder="last Name" value="{{$getData->last_name}}">
           </div>
          
           <div class="form-group">
            <label for="your email">your email</label>
            <input type="text" class="form-control" id="exampleInputyouremail" placeholder="your email" value="{{$getData->email}}">
          </div>

          <div class="form-group">
            <label for="Adderess">Adderess</label>
            <input type="text" class="form-control" id="exampleInputAdderess" placeholder="Adderess" value="{{$getData->adderess}}">
          </div>

          <div class="form-group">
            <label for="phone no.">phone no.</label>
            <input type="text" class="form-control" id="exampleInputphoneno" placeholder="phone no." value="{{$getData->phone_no}}">
          </div>

          <div class="form-group">
            <label for="gender">gender</label>
            <input type="text" class="form-control" id="exampleInputgender" placeholder="gender" value="{{$getData->gender}}">
          </div>










        <!--  <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="female" value="{{$getData->gender}}">
            <label class="form-check-label" for="exampleRadios1">
             female
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="male" value="{{$getData->gender}}">
            <label class="form-check-label" for="exampleRadios2">
             male
            </label>
            </div> -->
</form>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>