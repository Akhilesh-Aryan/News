<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-danger">
        <a class="navbar-brand" href="">News18</a>
    </nav>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <h1>Insert Here</h1>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" name="author">
                            </div>
                            <div class="form-group">
                                <label for="post">Post</label>
                                <input type="text" class="form-control" name="post">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-success btn-block" name="send">
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Post</th>
                    </tr>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->title}}</td>
                        <td>{{$d->author}}</td>
                        <td>{{$d->post}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>

</html>
