
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>MPHARMA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div style="margin:10%;">
  	<h2 class="text-center">MPHARMA</h2>
  	<form class="form-horizontal" method="post" action="barcode.php" target="_blank">
  	<div class="form-group">
      <label class="control-label col-sm-2" for="product">Company Name:</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="product" name="product" value="MPHARMA" readonly/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_id">Product Code:</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="product_id" name="product_id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="rate">Product Price</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="rate"  name="rate">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="print_qty">Barcode Quantity</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="print_qty" class="form-control" id="print_qty"  name="print_qty">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="button" class="btn btn-danger" onclick="window.close()">Close</button>
        <button type="Button" class="btn btn-primary" onclick="window.open('../index.php','_parent')">Home</button>
      </div>
    </div>
  </form>
  </div>
</div>

</body>
</html>
