<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barcode Generator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="mt-5">
    <h2 class="text-center">MPHARMA Barcode Generator</h2>
    <form class="form-horizontal" method="post" action="{{ route('barcode.generate') }}" target="_blank">
      @csrf
      <div class="form-group row">
        <label class="control-label col-sm-2" for="product">Company Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="product" name="product" value="MPHARMA" readonly/>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-sm-2" for="product_id">Product Code:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="product_id" name="product_id" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-sm-2" for="rate">Product Price:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="rate" name="rate" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="control-label col-sm-2" for="print_qty">Barcode Quantity:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="print_qty" name="print_qty" required>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Submit</button>
          <button type="button" class="btn btn-danger" onclick="window.close()">Close</button>
          <button type="button" class="btn btn-primary" onclick="window.open('../index.php','_parent')">Home</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
