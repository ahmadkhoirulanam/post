<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php
  // define variables and set to empty values
  $name = $alamat = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $alamat = test_input($_POST["alamat"]);
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <h2>PHP Form Validation Example</h2>
  <p><span class="error">* required field</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="validationCustom01" class="form-label">Nama</label>
    <input type="text" class="form-control" id="validationCustom01" name="name" value="<?php echo $name; ?>" required>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
    </div>

    <br>

    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
  echo "<h2>Your Input:</h2>";
  echo "Nama : ".$name;
  echo "<br>";
  echo "alamat : ".$alamat;

  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>