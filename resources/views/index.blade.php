<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container-fuild">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Blog</h1>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('demo/create') }}" class="btn btn-success btn-sm" title="Add new blog">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <br />
                    </div> <br />


                    @foreach ($getdata as $item)

                        <div class=" text-center"><span style="font-size:20px"><b>{{ $item->title }}</b></span></div>
                        <div>
                            <img src="{{ asset('storage/' . $item->profile) }}" class="rounded mx-auto d-block"
                                alt="..." style="width:100%;height:300px">
                        </div>
                        <div>
                            {{ $item->description }}</div>
                        <hr>
                        <div class="col-md-10 card-body">
                            <a href="{{ url('comment/'.$item->id) }}" class="btn btn-primary btn-sm" title="write comment here..">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add Comment
                            </a>
                            <a href="{{ url('demo/' . $item->id . '/edit') }}" class="btn btn-success btn-sm" title="click edit here..">
                                <i class="fa fa-plus" aria-hidden="true"></i> EDIT
                            </a>

                        </div>
                        <div class=" text-end ">
                            <form action="{{ url('demo/'. $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" title="click delete here..">DELETE</button>
                            </form>
                        </div>
                        @foreach ($com as $cam)
                        @if ($cam->blog_id==$item->id)


                            <div>{{ $cam->name . ':' }}
                                {{ $cam->comment }}</div>
                                @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
</body>

</html>
