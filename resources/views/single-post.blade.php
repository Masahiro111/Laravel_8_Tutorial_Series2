<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add post</title>
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Post Details
                        </div>
                        <div class="card-body">
                            <form>
                                @csrf
                                <label for="title">Post Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Post Title"
                                    value="{{$post->title}}">
                        </div>
                        <div class="form-group">
                            <label for="body">Post Description</label>
                            <textarea name="body" id="" class="form-control" cols="30"
                                rows="8">{{$post->body}}</textarea>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>