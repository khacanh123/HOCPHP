<?php
    // xu ly form
    //thuoc tinh action trong the form: tro den file xu ly form
    if(isset($_POST['submit'])){
        // xu ly form
        echo 'Xu ly form';
        die(); // k hien thi noi dung sau no
    }
    // thuoc tinh method trong the form: la phuong thuc gui du lieu tu form len server
    // method: POST ---> dung $_POST['name cua input trong form'] VD: $email = $_POST['email']
    // method: GET  ---> dung $_GET['name cua input trong form'] VD: $email = $_GET['email']
      // Phuong thuc GET va post de xu ly form khac nhau ntn?
    //   2 phuong thuc deu lam nhiem vu xu ly form, gui du lieu tu form len server
    // GET: thi nhung du lieu tu input se bi hien thi tren url cua trinh duyet
    // POST: thi du lieu dc bao mat hon so voi GET
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Stacked form</h2>
  <form action="./ABC/action.php" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group">
      <label for="pwd">Ten:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="hoten">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
