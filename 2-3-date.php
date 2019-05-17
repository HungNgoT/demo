<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <h1 class="text-center" id="date">Hello World</h1>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(() => {
            // setInterval(() => {
            //     var today = new Date();
            //     var day = today.getDay();
            //     var daylist = ["Sunday", "Monday", "Tuesday", "Wednesday ", "Thursday", "Friday", "Saturday"];
            //     console.log("Today is : " + daylist[day] + ".");
            //     var hour = today.getHours();
            //     var minute = today.getMinutes();
            //     var second = today.getSeconds();
            //     var prepand = (hour >= 12) ? " PM " : " AM ";
            //     hour = (hour >= 12) ? hour - 12 : hour;
            //     if (hour === 0 && prepand === ' PM ') {
            //         if (minute === 0 && second === 0) {
            //             hour = 12;
            //             prepand = ' Noon';
            //         } else {
            //             hour = 12;
            //             prepand = ' PM';
            //         }
            //     }
            //     if (hour === 0 && prepand === ' AM ') {
            //         if (minute === 0 && second === 0) {
            //             hour = 12;
            //             prepand = ' Midnight';
            //         } else {
            //             hour = 12;
            //             prepand = ' AM';
            //         }
            //     }
            //     console.log("Current Time : " + hour + prepand + " : " + minute + " : " + second);
            //     document.getElementById("date").innerHTML = hour + prepand + " : " + minute + " : " + second;
            // }, 1000);
        })
        var today = new Date();
        var dd = today.getDate();
        console.log(dd);
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd;
        }

        if (mm < 10) {
            mm = '0' + mm;
        }
        today = mm + '-' + dd + '-' + yyyy;
        console.log(today);
        today = mm + '/' + dd + '/' + yyyy;
        console.log(today);
        today = dd + '-' + mm + '-' + yyyy;
        console.log(today);
        today = dd + '/' + mm + '/' + yyyy;
        console.log(today);

        // new Date()
        // new Date(year, month, day, hours, minutes, seconds, milliseconds)
        // new Date(milliseconds)
        // new Date(date string)
        console.log('--------------------');
        for (var year = 2014; year <= 2050; year++) {
            var d = new Date(year, 0, 1); // nam thang ngay
            console.log(d);
            if (d.getDay() === 0)
                console.log("1st January is being a Sunday  " + year);
        }
        console.log('--------------------');
    </script>
</body>

</html>