<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <script>
        var side1 = 5;
        var side2 = 6;
        var side3 = 7;
        var s = (side1 + side2 + side3) / 2;
        var area = Math.sqrt(s * ((s - side1) * (s - side2) * (s - side3)));
        console.log(area);
    </script>
</body>

</html>