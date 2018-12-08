<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://alpineeventrentals.com/wp-content/uploads/2018/03/Alpine_Events_Logo_Small_4.png">
    <title>ALPINE EVENT CATARINGS</title>
</head>
<body>

<style>
    * {
        box-sizing: border-box;
    }

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }

    body {
        font-family: Arial;
        font-size: 17px;
        padding: 8px;
    }

    * {
        box-sizing: border-box;
    }

    .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        margin: 0 -16px;
    }

    .col-25 {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
    }

    .col-50 {
        -ms-flex: 50%; /* IE10 */
        flex: 50%;
    }

    .col-75 {
        -ms-flex: 75%; /* IE10 */
        flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
        padding: 0 16px;
    }

    .container {
        background-color: #f2f2f2;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 3px;
    }

    input[type=text] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    label {
        margin-bottom: 10px;
        display: block;
    }

    .icon-container {
        margin-bottom: 20px;
        padding: 7px 0;
        font-size: 24px;
    }

    .btn {
        background-color: #4CAF50;
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
    }

    .btn:hover {
        background-color: #45a049;
    }

    a {
        color: #2196F3;
    }

    hr {
        border: 1px solid lightgrey;
    }

    span.price {
        float: right;
        color: grey;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
        .row {
            flex-direction: column-reverse;
        }
        .col-25 {
            margin-bottom: 20px;
        }
    }
</style>

<center>
    <h2>Order Form</h2>
    <p>You can order Items Hear.</p>
</center>

<div class="container">
    <form id="formOrder">
        <div class="row">
            <div class="col-10">
                <input id="myId" type="text" name="myID" placeholder="ID">
            </div>
            <div class="col-25">
                <label for="country">Select Item</label>
            </div>
            <div class="col-75">
                <select id="country" name="country">
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="fname">QTY</label>
            </div>
            <div class="col-75">
                <input type="text" id="qty" name="firstname" placeholder="Item qty">
            </div>
        </div>

        <div>
            <div class="col-25">

            </div>
            <div class="col-75">
                <button id="butAdd" class="btn btn-success" type="button" >ADD to CART</button>
                <br>
            </div>
        </div>

        <table id="table" class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Item Name</th>
                <th scope="col">QTY</th>
            </tr>
            </thead>
            <tbody>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-25">
                <label for="lname">Conform NIC</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="custId" placeholder="conform NIC">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Delivery Adress</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="deliveryAdress" placeholder="delivery adress">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Delivery TP</label>
            </div>
            <div class="col-75">
                <input type="text" name="otherTp" placeholder="delivery tp">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Start Date</label>
            </div>
            <div class="col-75">
                <input type="date" name="onDate">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">End Date</label>
            </div>
            <div class="col-75">
                <input type="date" name="offDate">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Price</label>
            </div>
            <div class="col-25">
                <input type="text" name="totalPrice" placeholder="final price">
            </div>
        </div>
    </form>

    <div class="col-50">
        <center>
            <h3>Payment</h3>
        </center>
        <label for="fname">Accepted Cards</label>
        <div class="icon-container">
            <i class="fa fa-cc-visa" style="color:navy;"></i>
            <i class="fa fa-cc-amex" style="color:blue;"></i>
            <i class="fa fa-cc-mastercard" style="color:red;"></i>
            <i class="fa fa-cc-discover" style="color:orange;"></i>
        </div>
        <label for="cname">Name on Card</label>
        <input type="text" id="cname" name="cardname" placeholder="John More Doe">
        <label for="ccnum">Credit card number</label>
        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
        <label for="expmonth">Exp Month</label>
        <input type="text" id="expmonth" name="expmonth" placeholder="September">
        <div class="row">
            <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
            </div>
            <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
            </div>
        </div>
    </div>

</div>
<label>
    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
</label>
<input id="butOrder" type="submit" value="Continue to checkout" class="btn">
</form>
</div>
</div>
</div>

<script type="text/javascript" src="dist/js/jquery-3.3.1.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
<script>
    $('#butOrder').click(function () {
        let cusForm = $('#formOrder').serialize();
        $.ajax({
            url:"api/service/OrderService.php",
            method:"POST",
            async:true,
            data:cusForm
        }).done(function (resp) {
            alert(resp);
        });
    });


    $('#butOrder').click(function () {
        let cusForm = $('#formOrder').serialize();
        $.ajax({
            url:"api/service/OrderDetailsServece.php",
            method:"POST",
            async:true,
            data:cusForm
        }).done(function (resp) {
            alert(resp);
        });
    });


    function lordId() {
        var  temp;
        var returns;
        $.ajax({
            url:"api/service/OrderService.php",
            method:"GET",
            async:true,
            dataType:"json"
        }).done(function (resp) {
            for (var itm in resp){
                temp=resp[itm];
                $('#myId').val(parseInt(temp)+1);
            }
        });
    }
    lordId()


    function lordComb() {
       $.ajax({
           url:"api/service/ItemService.php",
           method:"GET",
           async:true,
           dataType:"json"
       }).done(function (resp) {
           $('#country').empty();
           for (var itm in resp){
               var  temp=resp[itm];
               let row="<option>" + temp[1] + "</option>";
               $('#country').append(row);
           }
       });
    }
    lordComb();

    $("#butAdd").click(function () {
        let row= "<tr><td>" +  $("#country").val() + "</td><td>" + $("#qty").val()  + "</td></tr>";
        $("#table").append(row);
    })

</script>
</body>
</html>