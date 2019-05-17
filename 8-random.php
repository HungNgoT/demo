<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

</body>
<script>
    // Get a random integer from 1 to 10 inclusive
    const num = Math.ceil(Math.random() * 10);
    console.log(num);
    // setInterval(()=>{

    // },1000);
    //const gnum = prompt('Guess the number between 1 and 10 inclusive');
    // if (gnum == num)
    //     console.log('Matched');
    // else
    //     console.log('Not matched, the number was ' + gnum);

    today = new Date();
    console.log(today.getFullYear());
    var cmas = new Date(today.getFullYear(), 11, 25);
    if (today.getMonth() == 11 && today.getDate() > 25) {
        cmas.setFullYear(cmas.getFullYear() + 1);
    }
    var one_day = 1000 * 60 * 60 * 24;
    console.log(Math.ceil((cmas.getTime() - today.getTime()) / (one_day)) +
        " days left until Christmas!");
</script>

</html>