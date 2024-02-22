<!DOCTYPE html>
<html lang="en">

<head>
    <title>my - calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
            <div class="col-lg-4 col-md-4 col-sm-4">&nbsp;</div>
            <div class="col-lg-3 col-md-4 col-sm-5 calc">
                <form action="{{ route('calc.save') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <input id="inputBox" class="input form-control" value="" readonly />
                    </div>

                    <div class="col-lg-12 col-sm-12 mt-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>select operator</option>
                            <option value="1">+</option>
                            <option value="2">-</option>
                            <option value="3">*</option>
                            <option value="3">/</option>
                        </select>
                    </div>

                    <div class="col-lg-12 col-sm-12 mt-2">
                        <input id="inputBox" class="input form-control" value="" readonly />
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>


    <script>
            let res = document.getElementById('inputBox');
            let buttons = document.querySelectorAll('button');

            // console.log(buttons);
            let buttonArray = Array.from(buttons);
            let string = '';

            buttonArray.forEach( btn => {
                    btn.addEventListener('click', (e) => {

                        if(e.target.innerHTML == 'C'){
                            string = '';
                            res.value = string;
                        }else{
                            string += e.target.innerHTML;
                            res.value = string;
                        }
                    })
            })
                // console.log(btn);
    </script>
</body>
