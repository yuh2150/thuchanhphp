<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      form{
        border: solid;
        width: 600px;
        height: auto;
       margin: auto;
       padding-left: 30px;
      }
    </style>
</head>

<body>
    <form action="mail.php" enctype="multipart/form-data" method="POST"> <br><br>
        <input type="text" class="form-control" name="email" placeholder="Email"><br><br>
        <input type="text" class="form-control" name="tieude" placeholder="ten"><br><br>
        <textarea name="content" id="editor" class="form-control"></textarea><br><br>
        <input type="file" class="form-control" name="file"><br><br>
        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
</body>

</html>