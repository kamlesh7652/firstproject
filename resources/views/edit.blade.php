<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <h1 class="text-center">Create Blog</h1>
    </div>

    <div class="row">


        <form action="{{url('demo/'.$getdata->id)}}" method="POST" enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label  class="form-label">Title</label>
              <input type="text" class="form-control" id="title1" name="title" value="{{$getdata->title}}">

            </div>
            <div class="mb-3">
                <label  class="form-label">Post</label>
                <input type="file" class="form-control" id="title1" name="profile">

              </div>
              <div class="mb-3 col-md-12">
                <label class="form-label">Description</label>
                <textarea class="form-control"  name="description" rows="3">{{$getdata->description}}</textarea>

              </div>
              <br>
            <button type="submit" class="btn btn-primary">UPDATE</button>
          </form>

    </div>
</div>
</body>
</html>
