<!DOCTYPE HTML>
<html>
<head>
    <title></title>
</head>
<body>
<form action="Form.php" method="post">
First Name: <input type="text" name="fname"><br />
last Name: <input type="text" name="1name"><br />
About: <textarea name="about"></textarea><br />
<input type="reset" name="reset">
<input type="submit" name="submit" value="Go">
</form>    
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">UPLOAD</button>

    </form>
</body>
</html>