<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add post</title>
</head>

<body>

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Add Post
                        </div>
                        <div class="card-body">
                            @if(Session::has('post_created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_created')}}
                            </div>
                            @endif
                            <form action="{{route('post.create')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" id="" class="form-control" placeholder="Enter Post Title">
                                </div>

                                <div class="form-group">
                                    <label for="body">Article</label>
                                    <input type="text" name="body" id="" class="form-control" placeholder="Enter Post Article">
                                </div>

                                <button type="submit">Add Post</button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    
    </section>

</body>

</html>