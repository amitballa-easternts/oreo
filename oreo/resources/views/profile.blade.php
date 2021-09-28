<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Title</title>
</head>
<body>
<div class="container  " >
    <div class="card">
        <div class="row">
            <div class="col-sm-10">
                <h2>Welcome <span class="text-success">{{$data->first_name}}</span> </h2>
            </div>
            <div class="col-sm-2">
                <h4> <span ><a href="logout" class="text-danger">LogOut</a></span> </h4>
            </div>
        </div>
        
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <h3>Update Profile</h3>
        </div>
        <div class="card-body">
            <form action="update-profile-student" method="post">
                @csrf
                <input type="hidden" name="get_id" id="get_id" value={{$data->id}}>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">College</label>
                            <select name="college" id="college" class="form-control">
                                <option value="">Select College</option>
                                @foreach($members as $member)
                                    <option value="{{$member->id;}}" {{$member->id==$data->college_name ? 'selected':''}} >{{$member->college_name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                            <label for="">DOB</label>
                            <input type="date" class="form-control" name="dob" id="dob" value={{$data->dob}} >
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">

                    <div class="col-sm-4">
                        <div class="form-group">
                            <button class="btn btn-success">Update</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>