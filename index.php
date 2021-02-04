<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <style>
    *{
        margin: 0%;
        padding: 0%;
    }
    #disp{
        display: none;
    }
    #disp1{
        display:none;
    }
    h1{
        color:blueviolet;
    }
    h3{
        padding: 20px;
        color: brown;
    }
    form{
        margin: auto;
        margin-top: 100px;
    }
    
    body{
        background-color: lightblue;
    }
    .con{
        text-align: center;
    }
    </style>

    <title>Human Age Calculator</title>
    
  </head>
  <body>

        <div class="container-fluid con">
        <hr>
        <h1>Calculate Your Age :- </h1>
        <hr>

        <form action="" method="post" id="dataForm">
        <h3>Enter Your Date Of Birth :- </h3>
        <input type="date" class="form-control" name="date">
        <h3>Enter Your Time Of Birth :- </h3>
        <input type="time" class="form-control" name="time">
        <br><br>
        <input type="submit" value="Calculate age" name="submit" id="submit" class="btn btn-success">
        <div class="label mt-4" id="disp"></div>
        <div id="disp1" class="form-control "></div>
        </form>

        </div>

    
        <script>
    $(document).ready(function () {

        $("#submit").click(function (e) {

            e.preventDefault();
            $('#disp1').css('display', 'block');

            $.ajax({

                url: 'logic.php',
                type: 'POST',
                data: $('#dataForm').serialize(),

                success: function (data) {
                    if(data != " Invalid Date Of Birth " && data != " Feild Is Blank ") {

                        $('#disp').css('display', 'block');

                    }
                    
                    $("#disp1").html(data);
                }
            });

            setInterval(calculateAge, 1000);

        });

    });

    function calculateAge() {

        $.ajax({

            url: 'logic.php',
            type: 'POST',
            datatype: 'HTML',
            data: $('#dataForm').serialize(),

            success: function (data) {

                if(data != " Invalid Date Of Birth " && data != " Field Is Blank " ) {

                        $('#disp').css('display', 'block');

                    }

                $("#disp1").html(data);

            }

        });

    }


</script>

 
  </body>
</html>