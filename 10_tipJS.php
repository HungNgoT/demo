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
        // var result = (function(a, b) {
        //     return a * b;
        // }(5, 2));
        // var result = ((a, b) => {
        //     return a * b;
        // }(5, 2));
        // console.log(result);
        //***************** */
        // const b = [1, 2, 3];
        // const f = (a, ...b) => a + b;
        // console.log(f(1));
        //***************** */

        //////////////////
        // let f = (...f) => f;
        // console.log(f(10, 5));

        // f = (...f) => f.reduce((f, value) => f * value);
        // console.log(f(10, 5, 3));

        // function ff() {
        //     return arguments;
        // }
        // console.log(ff(10));

        // f = f => f;
        // console.log(f(10));


        var foo = 10;
        bar = 3;
        (function() {
            var foo = 2;
            bar = 1;
            console.log(foo);
            console.log(bar);
        }())
        console.log(bar);
        bar = bar + foo;
        console.log(bar);
        ////////////////////reduce
        console.log(0.1 + 0.2);
        console.log(0.1 + 0.2 === 0.3);
        console.log(9007199254740993 === 9007199254740992);
    </script>
</body>

</html>