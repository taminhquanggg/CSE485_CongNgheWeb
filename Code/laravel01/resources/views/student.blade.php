<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($data as $item) {
            echo $item->id;
            echo $item->student_name;
            echo $item->student_email;
    }
    
    ?>
    <h1>Hello</h1>
</body>
</html>