<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Registration</title>
</head>
<body>
<div class="container  row" style="padding-left:400px;padding-right:200px;">
    <div class="card col-sm-12 ">
        <div class="card-header">
                <h1 class="text-center text-success">Registration</h1>
                @if(Session::get('sess'))

                    <div class="alert alert-success alert-dismissible">
                         <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong> {{Session::get('sess')}}!</strong> 
                    </div> 


                @endif 

        </div>
        <div class="card-body">
            <form method="post" action="register-here">
                @csrf
                <div class="form-group">
                   
                        <label for="">Name</label>

                        <input type="text" class='form-control' name="name" id="name" value={{old('name')}}>        
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                </div>



                <div class="form-group">
                   
                        <label for="">Email</label>
             
                        <input type="text" class='form-control' name="email" id="email"  value={{old('email')}}>        
                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                </div>

                <div class="form-group">
                    
                        <label for="">Password</label>
             
                        <input type="password" class='form-control' name="password" id="password">        
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                </div>

                <div class="form-group">
                    
                        <label for="">Confirm Password</label>
             
                        <input type="password" class='form-control' name="cpassword" id="cpassword">        
                        <span class="text-danger">@error('cpassword'){{$message}}@enderror</span>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                    
                </div>
                <div class="form-group">
                    <a href="login">Login Here</a>
                    
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
<script>
    // $(document).ready(function(){

        
    // });
</script>
</html>