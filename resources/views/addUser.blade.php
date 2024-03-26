<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container  vstack">
        <h1 class="m-4">Add Your User Details</h1>
        <div class="col-6">
            <form action="{{ route('addlawyer')}}" method="POST">


                @csrf <!-- This is important for CSRF protection -->
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input type="text" class="form-control" id="lastname" name="lastname"
                        placeholder="Enter last name">
                </div>
                <div class="form-group">
                    <label for="phoneno">Phone Number:</label>
                    <input type="text" class="form-control" id="phoneno" name="phoneno"
                        placeholder="Enter phone number">
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Enter city">
                </div>
                <button type="submit" class="btn btn-primary my-3">Submit</button>
            </form>
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
