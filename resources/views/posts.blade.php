<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>All Posts</h1>
    @foreach ($posts as $post)
    <h3>{{$post->title}}</h3>
    <p>{{$post->body}}</p>
    @endforeach

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            All Posts
                        </div>
                        <div class="card-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Post title</th>
                                        <th>Post Body</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->body}}</td>
                                        <td>
                                            <a href="/posts/{{$post->id}}" class="btn btn-info">Details</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>