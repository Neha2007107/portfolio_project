<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
  
  /* Reseting */
  * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
  }
  
  body{
      background: #00E5FF;
      min-height: 100vh;
  }
  
  .wrapper{
      max-width: 850px;
      background-color: #fff;
      border-radius: 10px;
      position: relative;
      display: flex;
      margin: 50px auto;
      box-shadow: 0 8px 20px 0px #1f1f1f1a;
      overflow: hidden;
  }
  
  .wrapper .form-left{
      background: #3786bd;
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
      padding: 20px 40px;
      position: relative;
      width: 100%;
      color: #fff;
  }
  
  .wrapper h2{
      font-weight: 700;
      font-size: 25px;
      padding: 5px 0 0;
      margin-bottom: 34px;
      pointer-events: none;
  }
  
  .wrapper .form-left p{
      font-size: 0.9rem;
      font-weight: 300;
      line-height: 1.5;
      pointer-events: none;
  }
  
  .wrapper .form-left .text{
      margin: 20px 0 25px;
  }
  
  .wrapper .form-left p span{
      font-weight: 700;
  }
  
  .wrapper .form-left input{
      padding: 15px;
      background: #fff;
      border-top-left-radius: 5px;
      border-bottom-right-radius: 5px;
      width: 180px;
      border: none;
      margin: 15px 0 50px 0px;
      cursor: pointer;
      color: #333;
      font-weight: 700;
      font-size: 0.9rem;
      appearance: unset;
      outline: none;
  }
  
  .wrapper .form-left input:hover{
      background-color: #f2f2f2;
  }
  
  .wrapper .form-right{
      padding: 20px 40px;
      position: relative;
      width: 100%;
  }
  
  .wrapper .form-right h2{
      color: #3786bd;
  }
  
  .wrapper .form-right label{
      font-weight: 600;
      font-size: 15px;
      color: #666;
      display: block;
      margin-bottom: 8px;
  }
  
  .wrapper .form-right .input-field{
      width: 100%;
      padding: 10px 15px;
      border: 1px solid #e5e5e5;
      border-top-left-radius: 5px;
      border-bottom-right-radius: 5px;
      outline: none;
      color: #333;
  }
  
  .wrapper .form-right .input-field:focus{
      border: 1px solid #31a031;
  }
  
  
  .wrapper .option {
      display: block;
      position: relative;
      padding-left: 30px;
      margin-bottom: 12px;
      font-size: 0.95rem;
      font-weight: 900;
      cursor: pointer;
      user-select: none
  }
  
  .wrapper .option input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0
  }
  
  .wrapper .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 18px;
      width: 18px;
      background-color: #fff;
      border: 2px solid #ddd;
      border-radius: 2px
  }
  
  .wrapper .option:hover input~.checkmark {
      background-color: #f1f1f1
  }
  
  .wrapper .option input:checked~.checkmark {
      border: 2px solid #e5e5e5;
      background-color: #fff;
      transition: 300ms ease-in-out all
  }
  
  .wrapper .checkmark:after {
      content: "\2713";
      position: absolute;
      display: none;
      color: #3786bd;
      font-size: 1rem;
  }
  
  .wrapper .option input:checked~.checkmark:after {
      display: block
  }
  
  .wrapper .option .checkmark:after {
      left: 2px;
      top: -4px;
      width: 5px;
      height: 10px
  }
  
  .wrapper .register{
      padding: 12px;
      background: #3786bd;
      border-top-left-radius: 5px;
      border-bottom-right-radius: 5px;
      width: 130px;
      border: none;
      margin: 6px 0 50px 0px;
      cursor: pointer;
      color: #fff;
      font-weight: 700;
      font-size: 15px;
  }
  
  .wrapper .register:hover{
      background-color: #3785bde0;
  }
  
  .wrapper a{
      text-decoration: none;
  }
  
  @media (max-width: 860.5px) {
      .wrapper{
          margin: 50px 5px;
      }
  }
  
  
  @media (max-width: 767.5px){
      .wrapper{
          flex-direction: column;
          margin: 30px 20px;
      }
  
      .wrapper .form-left{
          border-bottom-left-radius: 0px;
      }
  
      
  }
  
  @media (max-width: 575px) {
  
      .wrapper{
          margin: 30px 15px;
      }
  
      .wrapper .form-left{
          padding: 25px;
      }
      .wrapper .form-right{
          padding: 25px;
      }
  }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a   href="{{url('/team')}}"class="nav-link active" aria-current="page" href="#">Have an accoun?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>











    
    <h1>form data
      <div class="conatiner">
      <p>Count ({{$count}})</p>

      <a href ="{{url('show-add')}}" type="button" class="btn btn-primary">Add new Student</a>
       </div>
       <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Nmae</th>
            <th scope="col">your email</th>
            <th scope="col">Adderess</th>
            <th scope="col">phone no.</th>
            <th scope="col">Gender </th>
            <th scope="col">Course</th>
            <th scope="col">Action</th>
            <th scope="col">Status</th>

          </tr>
        </thead>
@foreach ($getData as $item)
    

        <tbody>
          <tr>
            
            <td>{{$item->contact_id}}</td>
            <td>{{$item->first_name}}</td>
            <td>{{$item->last_name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->adderess}}</td>
            <td>{{$item->phone_no}}</td>
            <td>{{$item->gender}}</td>
            <td>{{$item->course}}</td>
            <td>
             <a href ="{{url('editpage-contact')}}/{{$item->contact_id}}" type="button" class="btn btn-primary">edit</a>
             <a href="{{url('/Delete_row')}}/{{$item->contact_id}}" type="button" class="btn btn-primary">delete</a>
             <a href="{{url('view-contact')}}/{{$item->contact_id}}" type="button" class="btn btn-primary">view</a>
              </td>
               <td>
                  @if ($item->status==0)
                  
                  <a href="{{'/changeStatus'}}/{{$item->contact_id}}" type="button" class="btn btn-denger">Pending</a>
                  @else
                  {{"Viewed"}}
                  @endif
                </td>       
                </tr>
          
        </tbody>
@endforeach
      </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>