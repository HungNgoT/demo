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
        function leapyear(year) {
            return (year % 100 === 0) ? (year % 400 === 0) : (year % 4 === 0);
        }
        console.log(leapyear(2016));
        console.log(leapyear(2000));
        console.log(leapyear(1700));
        console.log(leapyear(1800));
        console.log(leapyear(100));
    </script>
</body>

</html>