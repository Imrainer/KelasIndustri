<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Saran dan Kritik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container card px-3 pt-3 shadow-lg" style="max-width: 50rem">
        <div class="row col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1 class="text-center alert-info">Masukan Saran Anda</h1>
                </div>

                <ul>
                    @foreach($errors->all() as $msg)
                    <li>{{$msg}}</li>
                    @endforeach
                </ul>    

                <div class="panel-body">
                          <!-- Email input -->

                    <form action="/tabel/store" method="POST">
                        
                @csrf
                    <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email address</label>
                    <input type="text" id="email" class="form-control" name="email" placeholder="Masukan Email anda"></div>
                                     
                
                    <!-- Text input -->
                    <div class="form-outline mb-4">
                    <label class="form-label" for="number">Saran dan Kritik </label>
                     <input type="text" id="masukan" class="form-control" name="masukan" placeholder="Masukan saran anda" />
                                         
                    </div>
                  
                      <div class="d-flex justify-content-center">
                       <button type="submit" name="submit" value="Save" class=" btn btn-dark ">Submit</button></li></div>
                     
                   
                    </div>
                </form>
                    
                </div>
            </div>
        </div>
    </div>


</body>
</html>

