<!DOCTYPE html>
<html lang="en">

<head>
    <title>my - calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        .btn {
            margin: 4px;
            width: 54px;
        }

        .top {
            margin-top: 50px;
        }

        .calc {
            border: 1px solid #E4ECFA;
            padding: 15px 10px;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row top">
        <h4 class="me-5" style="text-align: center;">My - Calculator</h4>
        <div class="col-lg-4 col-md-4 col-sm-4">&nbsp;</div>
        <div class="col-lg-3 col-md-4 col-sm-5 calc">
          <form id="calc" method="POST">
              @csrf
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <input id="inputBox" class="input form-control" readonly />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button class="clean btn btn-danger">DEL</button>
                    <button class="clean btn btn-warning">C</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <input type="submit" name="one" value="1" id="one" class="btn btn-info">
                    <button class="btn btn-info">2</button>
                    <button class="btn btn-info">3</button>
                    <button class="btn btn-success">-</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-info">4</button>
                    <button class="btn btn-info">5</button>
                    <button class="btn btn-info">6</button>
                    <button class="btn btn-success">*</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-info">7</button>
                    <button class="btn btn-info">8</button>
                    <button class="btn btn-info">9</button>
                    <button class="btn btn-success">/</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-info">0</button>
                    <button class="btn btn-info">.</button>
                    <button class="btn btn-success equalButton">=</button>
                    <button class="btn btn-success">+</button>
                </div>
            </div>
          </form>
        </div>
    </div>
</div>


<script>
    $(document)
</script>

{{--<script>--}}

{{--    let display = document.getElementById('inputBox');--}}
{{--    let buttons = document.querySelectorAll('button');--}}

{{--    let buttonArray = Array.from(buttons);--}}
{{--    let string = '';--}}

{{--    buttonArray.forEach( btn => {--}}
{{--        btn.addEventListener('click', (e) => {--}}

{{--            if (e.target.innerHTML == 'DEL') {--}}
{{--                string = string.substring(0, string.length-1);--}}
{{--                display.value = string;--}}
{{--            }else if(e.target.innerHTML == 'C'){--}}
{{--                string = '';--}}
{{--                display.value = string;--}}
{{--            }else{--}}
{{--                string += e.target.innerHTML;--}}
{{--                display.value = string;--}}
{{--            }--}}
{{--        })--}}
{{--    })--}}

{{--    // console.log(btn);--}}

{{--</script>--}}
</body>
