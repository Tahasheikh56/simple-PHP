<?php

if(isset($_POST["submit"])){

extract($_POST);

$to = "tahasheikh1829@gmail.com";
$subject = "Information Form";
$headers = "From: $email";
$message = "First Name: $first_name\n" .
               "Last Name: $last_name\n" .
               "Email: $email\n" .
               "Phone: $phone\n" .
               "Gender: $gender\n" .
               "Birthday: $birthday\n" .
               "Country: $country";

 $send = mail($to, $subject, $message, $headers);
 
 if ($send) {
    echo "<div class = 'alert alert-success'>Form submitted successfully. Thank you!</div>";
} else {
    echo "<div class = 'alert alert-danger'>Form submission failed.</div>";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Registration Form</h2>
        <form method="post">
            <div class="row mb-3">
                <div class="col">
                    <label for="first_name" class="form-label">First Name:</label>
                    <input type="text" name="first_name" class="form-control" required>
                </div>
                <div class="col">
                    <label for="last_name" class="form-label">Last Name:</label>
                    <input type="text" name="last_name" class="form-control" required>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number:</label>
                <input type="tel" name="phone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Gender:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="male" required>
                    <label class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="female" required>
                    <label class="form-check-label">Female</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="birthday" class="form-label">Birthday:</label>
                <input type="date" name="birthday" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="country" class="form-label">Choose Country:</label>
                <select name="country" class="form-select" required>
                    <option value="" disabled selected>Select a country</option>
                    <option value="us">United States</option>
                    <option value="ca">Canada</option>
                    <option value="uk">United Kingdom</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>