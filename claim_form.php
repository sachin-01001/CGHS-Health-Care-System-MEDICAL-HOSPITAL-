<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claim Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles can be added here */
        body {
            padding: 20px;
            background-color: aquamarine;        }
    </style>
</head>
<body>
    <h1>Claim Form</h1>
    <form action="submit.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="cghs_id" class="form-label">CGHS Ben ID No:</label>
            <input type="text" class="form-control" id="cghs_id" name="cghs_id" required>
        </div>
        <div class="mb-3">
            <label for="mob" class="form-label">Mobile Number:</label>
            <input type="tel" class="form-control" id="mob" name="mob" required>
        </div>
        <div class="mb-3">
            <label for="hospital" class="form-label">Hospital/Diagnostic Center/Imaging Center:</label>
            <input type="text" class="form-control" id="hospital" name="hospital" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="total_amount" class="form-label">Total Amount Claimed:</label>
            <input type="number" class="form-control" id="total_amount" name="total_amount" required>
        </div>
        <div class="mb-3">
            <label for="opd_amount" class="form-label">OPD Treatment Amount:</label>
            <input type="number" class="form-control" id="opd_amount" name="opd_amount">
        </div>
        <div class="mb-3">
            <label for="indoor_amount" class="form-label">Indoor Treatment Amount:</label>
            <input type="number" class="form-control" id="indoor_amount" name="indoor_amount">
        </div>
        <div class="mb-3">
            <label for="tests_amount" class="form-label">Tests/Investigation Amount:</label>
            <input type="number" class="form-control" id="tests_amount" name="tests_amount">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>



+