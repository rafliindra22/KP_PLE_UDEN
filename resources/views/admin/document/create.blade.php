<!DOCTYPE html>
<html>
<head>
    <tittle>Document</tittle>
</head>
<body>

    <form action="/files" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="tittle" placeholder="tittle">
    <input type="text" name="description" placeholder="description">
    <input type="file" name="file">
    <input type="submit" name="Submit">

    </form>

</body>
</html>