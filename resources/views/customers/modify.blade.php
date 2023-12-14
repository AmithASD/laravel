<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form method="put" action="{{route('customers.update',['customer'=>$customer])}}">
         @csrf
         @method('put')
        <div class="outer"style="margin:50px 0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <lable for="name">Name</lable>
                            <input class="form-control" type="text" name="name" placeholder="Samantha" id="name" value="{{$customer->name}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <lable for="address">Address</lable>
                            <input class="form-control" type="address" name="address" placeholder="Colombo" id="address" value="{{$customer->address}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <lable for="designation">Designation</lable>
                            <input class="form-control" type="text" name="designation" placeholder="React Developer" id="designation" value="{{$customer->designation}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <lable for="age">Age</lable>
                            <input class="form-control" type="text" name="age" placeholder="25 y" id="age" value="{{$customer->age}}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group" >
                            <input type="submit" value="Update Customer" class="btn btn-warning col-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>