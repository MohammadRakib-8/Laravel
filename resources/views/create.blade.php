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
<input type="text" id="uName" name="name"><br>
<label for="description">Description</label>
<textarea id="description" name="description" row="5" col="50" placeholder="Write About Yourself Somthing"></textarea><br>
<input type="file" id="imageFile" name="imageFile" placeholder="Choose file">
<button type="submit" id="submitBtn">Submit</button>
</form>
</body>
</html>