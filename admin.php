<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/logInCSS.css" >
    <link rel="shortcut icon" href="https://alpineeventrentals.com/wp-content/uploads/2018/03/Alpine_Events_Logo_Small_4.png">
    <title>Admin</title>
</head>
<body>
<nav id="aa" class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
    <img src="https://alpineeventrentals.com/wp-content/uploads/2018/03/Alpine_Events_Logo_Small_4.png">
    <H1>LPINE EVENT CATARINGS</H1>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<form id="adminForm">
    <div class="form-group">
        <label for="formGroupExampleInput">Item ID</label>
        <input name="Iid" type="text" class="form-control" id="formGroupExampleInput" placeholder="Item ID">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Item Name</label>
        <input name="Iname" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Item Name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Discription</label>
        <textarea name="Discription" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Daily Rental</label>
        <input name="dailyRental" type="text" class="form-control" id="formGroupExampleInput" placeholder="Discription">
    </div>

    <button id="butADD" type="button" class="btn btn-primary">Primary</button>
</form>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Item ID</th>
        <th scope="col">Item Name</th>
        <th scope="col">Discription</th>
        <th scope="col">Daily Rental</th>
    </tr>
    </thead>
    <tbody id="tab">

    </tbody>

</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="dist/js/jquery-3.3.1.min.js"></script>
<script>
    $('#butADD').click(function () {
        let cusForm = $('#adminForm').serialize();
        $.ajax({
            url: "../Catering_Service/api/service/ItemService.php",
            method: "POST",
            async: true,
            data: cusForm
        }).done(function (res) {
            alert(res);
        });
    });


    function lordComb() {
        $.ajax({
            url:"api/service/ItemService.php",
            method:"GET",
            async:true,
            dataType:"json"
        }).done(function (resp) {
            for (var itm in resp){
                var  temp=resp[itm];
                let row = "<tr><td>" + temp[0] + "</td><td>" + temp[1] + "</td><td>" + temp[2] + "</td><td>" + temp[3] + "</td></tr>";
                $("#tab").append(row);
            }
        });
    }
    lordComb();

</script>

</body>
</html>