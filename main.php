<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <div class="form-group">
      <label for=""></label>
      <input type="text" class="form-control" name="ab" id="ab" aria-describedby="helpId" placeholder="Nhập số N" />
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    <a name="" id="" class="btn btn-primary" href="#" role="button" onclick="testb(4)">Demo</a>
    <div class="alert alert-success" role="alert" id="ac">
      <h4 class="alert-heading">h4</h4>
      <p>p</p>

      <p class="mb-0">d</p>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script>
    $(() => {
        const myArray = [1, 2, 3, 4, 5];
        //map
        const myArrayMap = myArray.map((value, index, array) => {
          return index + value;
        });
        // console.log(myArrayMap);
        //filter
        const myArrayFilter = myArray.filter((value, index, array) => {
          return value > 2;
        });
        //console.log(myArrayFilter);
        //reduce
        const myArrayReduce = myArray.reduce((valueFisrt, currValue, currIndex, array) => {
          return valueFisrt += currValue;
        }, 0);
        //alert(myArrayReduce);

        // value:gia tri;
        // index:vitri;
        // array:mang hien tai;
        // valueFisrt:gia tri mac dinh luc dau tien trong mang, co the khoi tao;
        // currValue:gia tri hien tai;
        // currIndex:vi tri;



        foreach1 = (currentValue, index, arr) => {

          document.getElementById('ac').innerHTML = (currentValue += currentValue)
          console.log(currentValue);
        };
        const myArrayForArray = myArray.forEach(foreach1);

        // console.log(myArrayForArray);
        printBr = (element, index, array) => {
          document.write("<br />[" + index + "] is " + element);

        }
        console.log(myArray.forEach((value) => {
          value += value;
        }));
        //prototype Array,Date,...
        Array.prototype.myUcase = () => {
          for (i = 0; i < this.length; i++) {
            this[i] = this[i].toUpperCase();
          }
        };
        var fruits = ["Banana", "Orange", "Apple", "Mango"];
        fruits.myUcase();
        //foreach
        const numbers = [1, 2, 3, 4, 5, 6];
        let sum = 0;
        numbers.forEach((element, index, array) => {
          sum += element;
          //console.log(array);
        });
        //console.log(sum);
        // => 21
        /////compare for and forEach
        var elements = ["a1", "b2", "b3"];
        for (let i = 0; i < elements.length; i++) {
          //alert(i);
          setTimeout(() => {
            //alert(i);
            console.log("index: " + i + " value" + elements[i]);
          }, 100)
        }
        //slice(vi tri bat dau, vi tri ket thuc(không có mặc định chạy hết mảng));
        var arr1 = [1, 5, 8, 9];

        console.log(arr1.slice(1));

        //splice(vitri,so phan tu xoa/them,tham 3 den n:giá trị muốn thêm vào)
        var arrSplice = [1, 3, 5, 7];
        var arrSpliceTam = arrSplice.splice(1, 2, "a", "b", "c", "d");
        // console.log(arrSpliceTam);
        // console.log(arrSplice);
        // //Spread
        // var arrSpread1 = [1,3,6,7];
        // var arrSpread2 = [5,arr1,8,9];
        // console.log(arrSpread2);
        // //...arr
        // var arrSpread3 = [5,...arrSpread1,8,9];
        // console.log(arrSpread3);
        // var arrSpread4 =[7,8,9];
        // var arrSpread5 =[10,arrSpread4,12];
        // arrSpread5.push(111)
        // console.log(arrSpread5);
        // console.log(arrSpread4);
      }

    )



    function demo() {
      var a = document.getElementById('ab').value;
      var b = parseInt(a);
      document.getElementById('ac').innerHTML = Math.pow(10, b) - 1;

      // alert(typeof parseInt(a));
      // if(parseInt(a) > 0){
      //   var b="";
      //   for(let i=0 ;i<parseInt(a);i++){
      //     b+="9";
      //   }
      //   alert(b);
      // }else{
      //   alert("Gia tri lon hon 0");
      // }
      // var c = 10*Math.pow(3)- 1;
      // alert(c);

    }
    // function demo2(){
    //   var a = "123";
    //   var b = parseInt(a);
    //   var c = b/10;
    //   var e = [];
    //   while(c != 0 ){
    //     var c = b/10;
    //   var d = b%10;

    //   e.push(d);
    //   }
    //   alert(e);
    //   // console.log(e);

    //   // return (10* Math.pow(3) - 1);
    // };
    function fibonacci(num) {
      var a = 1,
        b = 0,
        temp;
      while (num >= 0) { //4
        temp = a; //1
        a = a + b;

        b = temp;
        num--;
        // console.log(a);
        // console.log(b);
      }
      // console.log(b);
    };

    function day_fibonaci(i) {
      if (i == 0) {
        return 0;
      }
      if (i == 1) {
        return 1;
      }
      return day_fibonaci(i - 1) + day_fibonaci(i - 2);
    }
    const str = "hello khong co gi"
    const str2 = "hi abc";
   
    console.log ([...str].reduce((prev,next)=>{next+prev}));
    console.log([...str]);
    console.log([...str2]);
    console.log((str.split(' ').reverse()));
    console.log(typeof((["a","ddde"],["khong","ok"]).join(" ")));

  </script>
</body>

</html>