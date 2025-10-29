<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="{{route('test')}}">

    @csrf
<label for="userName">User Name</label>
<input type="text" id="uName" name="name" value="{{old('name')}}"><br>
@error('name')
<div>{{$message}}</div> 
@enderror
<label for="description">Description</label>

<textarea id="description" name="description" row="5" col="50" placeholder="Write About Yourself Somthing" value="{{old('description')}}"></textarea><br>
@error('description')
<div>{{$message}}</div>
@enderror
<input type="file" id="imageFile" name="imageFile" placeholder="Choose file">
@error('imageFile')
<div>{{$message}}</div>
@enderror
<button type="submit" id="submitBtn">Submit</button>
</form>
</body>
</html>