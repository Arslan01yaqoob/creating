<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1>All user's Data</h1>

    <div class="container p-4">
        <a href="/newuser" class="btn btn-success my-2">Add User</a>
        <table class="table table-danger table-striped">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">City</th>
                <th scope="col">Phone</th>
                <th scope="col">view</th>
                <th scope="col">Delete</th>
                <th scope="col"> Update</th>
            </tr>
            @foreach ($abc as $col)
                <tr>
                    <th scope="row">{{ $col->id }}</th>
                    <td>{{ $col->name }}</td>
                    <td>{{ $col->lastname }}</td>
                    <td>{{ $col->city }}</td>
                    <td>{{ $col->phone }}</td>

                    <td><a href="{{ route('view.user', $col->id) }}" class="btn btn-primary">view</a></td>
                    <td> <a href="{{ route('delete.user', $col->id) }}" class="btn btn-danger">Delete</a></td>
                    <td><a href="{{ route('update.page', $col->id) }}" class="btn btn-warning">Update</a></td>

                    {{-- <td>{{ $col->created_at }}</td> --}}
                    {{-- <td>{{ $col->updated_at }}</td> --}}
                </tr>
            @endforeach


        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
