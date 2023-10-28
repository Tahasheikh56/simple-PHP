<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>CONVERTING IN JSON </h2>
  <form action="savefrom.php" method="post">
    <div class="mb-3 mt-3">
      <label for="email">name</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name"  required>
    </div>

    <div class="mb-3 mt-3">
      <label for="email">email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required >
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
  </form>
</div>

</body>
</html>
