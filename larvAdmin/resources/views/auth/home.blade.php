{{-- @extend('layout.app')
@section('content')
<div class='container'>
    <div class="row justify-container-center">
        <div class="col-md-8">
            <div class ="card">
                <div class = "card-header">{{__('Dashboard')}}</div>
                <div class = "card body">
                    @if(session('status'))
                    <div class = "alert-alert-sucsess" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                    {{$users_id}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
</head>
<body>
    You are logged in
</body>
</html>