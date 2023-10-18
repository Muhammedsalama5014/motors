
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>anonymous</title>
</head>
<body style="padding: 50px" >

    <section class="m-5">
        <div class="container ">
            <form class="" method="get"  action="{{url("anonymous")}}">
                <div class="form-group">
                  <input type="text" name="cmd" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="cmd">
                </div>
                @csrf
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

    <section style="padding: 50px">
        <div style="background-color: black; border-radius: 5px;padding: 40px;font-size:25px " class="container m-5 p-5">
          <span style="color: #fff " >  $$$$ </span>   @if(!empty($cmd)) <span style="color: green" >  {{$cmd}} </span> @endif
            <br>
            <hr>
            <br>
            @if(!empty($output))
            <p style="color: green" >{{$output}} </p>
            @endif
            <br>
        </div>
    </section>






</body>
</html>







