<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="TopArea">
    <h2>Home</h2>
   <a href="/create"> <button  id=createAccBtn>Create Account</button></a>
</div>

@if(session('success'))
        <h2>{{ session('success')}}</h2>
@endif
</body>
</html>