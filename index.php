<?php
?>;
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Mpesa Paybill</title>
</head>
<body>
<main class="container form-signin w-100 m-auto">
  <form class="w-50" action="stkpush.php" method="POST" >
    <img class="mb-4" src="./Me.jpg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Lipa na Mpesa</h1>

    <div class="form-floating">
      <input type="number" name="amount" class="form-control" id="floatingInput" placeholder="Amount">
      <label for="floatingInput">Enter Amount</label>
    </div>
    <div class="form-floating">
      <input type="number" name="phone" class="form-control" id="floatingPassword" placeholder="254700021264">
      <label for="floatingPassword">Enter Your PhoneNumber</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit" name="submit" value="submit">Pay Now</button>
    <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
  </form>
</main>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
