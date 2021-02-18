<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarik dana</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/penarikan-dana.css'); ?>">
</head>

<body>

    <div class="container" id="login-area">
        <h1 class="text-center">Penarikan Dana Freelancer</h1>
        <div class="submit-area">
            <h2>Verifikasi ulang</h2>
            <br>
            <input type="text" class="form-control" placeholder="email">
            <br>
            <input type="password" name="" id="" class="form-control" placeholder="password">
            <br>
            <button id="login" class="btn btn-success">Masuk</button>
        </div>
    </div>

    <div class="container" id="transaction">
        <div class="row text-white text-center">
            <div class="col-md-4">
                <div class="deposit status">
                    <h5>Hasil Deposit</h5>
                    <h2>$<span id="currentdepositNumber">00</span> </h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="withdraw status">
                    <h5>Jumlah Penarikan</h5>
                    <h2>$<span id="currentwithdraw">00</span></h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="balance status">
                    <h5>Dana adalam rekening</h5>
                    <h2>$<span id="balance">500</span></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 ">
                <div class="submit-area">
                    <h4>Deposit</h4>
                    <br>
                    <input type="text" id="depositAmount" class="form-control" placeholder="Jumlah yang akan dideposit">
                    <br>
                    <button class="btn btn-success"  id="deposit">Deposit</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="submit-area">
                    <h4>Penarikan</h4>
                    <br>
                    <input id="WithdrawAmount" type="text" class="form-control" placeholder="Jumlah yang akan ditarik">
                    <br>
                    <button class="btn btn-success" id="withdraw" >Penarikan</button>
                </div>
            </div>
        </div>

    </div>






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script>
        document.getElementById("login").addEventListener("click", () => {
  document.getElementById("login-area").style.display = "none";
  document.getElementById("transaction").style.display = "block";
});


//deposit button handler
document.getElementById("deposit").addEventListener("click", () => {
  let depositNumber = getAmount("depositAmount");
  updateField("currentdepositNumber", depositNumber);
  document.getElementById("depositAmount").value = "";
  updateField("balance", depositNumber);
});



//withdraw button handler
document.getElementById("withdraw").addEventListener("click", () => {
  let withdrawNumber = getAmount("WithdrawAmount");
  updateField("currentwithdraw", withdrawNumber);
  document.getElementById("WithdrawAmount").value = "";
  updateField("balance", -1* withdrawNumber);
});


function getAmount(id) {
  let amount = document.getElementById(id).value;
  let amountNumber = parseFloat(amount);
  return amountNumber;
}

//deposit adding
function updateField(id, lastNumber) {
  let balance = document.getElementById(id).innerText;
  let balanceFloat = parseFloat(balance);
  let newBalance = balanceFloat + lastNumber;
  document.getElementById(id).innerText = newBalance;
}
    </script>
</body>

</html>