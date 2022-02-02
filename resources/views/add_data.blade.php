<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud</title>
  </head>
  <body>

    {{-- <div>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
        </div> --}}
    
    <div class="container">
       
        <a href="{{url('/')}}" class="btn btn-primary my-3">Show Data</a>
           @if (Session::has('msg'))
             <p>{{Session::get('msg')}}</p>
               
           @endif
        <form action="{{url('/store-data')}}" method="POST">  
        @csrf
        <div class="form-grop">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control"  placeholder="Enter your name">
            @error('name')
                <p>{{$message}}</p>
            @enderror

            <label for="">Eamil</label>
            <input type="text" name="email" class="form-control"  placeholder="Enter your name">
            @error('email')
            <p>{{$message}}</p>
        @enderror 
        </div>
        <input type="submit" value="submit" class="btn btn-primary my-3" >
    </form> 
       
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>