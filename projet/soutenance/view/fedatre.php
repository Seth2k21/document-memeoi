<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="../asset/bootstraps/bootstrap.min.css">
  <link rel="stylesheet" href="../asset/bootstraps/bootstrap.min.css.map">
  <link rel="stylesheet" href="../asset/img.css">
</head>
<body>

<form method="POST">
 <input type="hidden" name="field" value="test">
 <script
   src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
   data-public-key="pk_sandbox_CAz-J0QVLwbCtNj6lETTQOvG"
   data-button-text="Payer 1000"
   data-button-class="button-class"
   data-transaction-amount="1000"
   data-transaction-description="Description de la transaction"
   data-currency-iso="XOF">
 </script>
</form>


</body>
</html>