<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="bg.css"> --}}
</head>
<body>

    {{-- <div id="background" > --}}
    <div class="container card px-3 pt-3 shadow-lg" style="max-width: 50rem">
        <div class="row col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1 class="text-center alert-info">Edit Data</h1>
                </div>

                <ul>
                    @foreach($errors->all() as $msg)
                    <li class="text-danger">{{$msg}}</li>
                    @endforeach
                </ul>    

                <div class="panel-body">    
                <form action="/data/{{$data->id}}" method="POST">
                    @method('put')
                   @csrf
                    <!-- Username input -->

            <div class="form-outline mb-4">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" id="username" class="form-control" name="username" placeholder="Masukan Username Baru anda" value="{{$data->username}}"></div> 
                          <!-- Email input -->
     
                    <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email address</label>
                    <input type="text" id="email" class="form-control" name="email" placeholder="Masukan Email Baru anda"  value="{{$data->email}}"></div>
                                     
                
                    <!-- Passwordinput -->
                    <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password </label>
                     <input type="text" id="password" class="form-control" name="password" placeholder="Masukan password Baru anda"  value="{{$data->passsword}}" />
                    <span class="eye">
                    <i class="fa-fa-eye"></i>
                    <i class="fa-fa-eye-slash"></i>
                    </span>
                    </div>
                  
                      <div class="d-flex justify-content-center">
                       <button type="submit" name="submit" value="Save" class=" btn btn-dark ">Submit</button></li></div>
                     
                                    
                    </div>
                </form>
                    
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>

