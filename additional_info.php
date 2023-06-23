<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/additional_info.css">
    <title>Additional Form</title>
</head>
<body>
    <div class="container">
        <h2>Additional Information</h2>
        <form method="POST" action="additional_action.php">
            <label for="phone">Phone</label>
            <input type="text" name="phone" placeholder="Phone Number" required>

            <label for="address">Address</label>
            <input type="text" name="address" placeholder="Address" required>

            <label for="job_position">Job Position</label>
            <input type="text" name="job_position" placeholder="Job Position" required>

            <label for="profile_photo">Profile Photo</label>
            <input type="file" name="profile_photo" id="image" required>
            <img id="preview_image" src="#" alt="Preview" style="display: none; max-width: 300px; margin-top: 10px;">
            <script src="dashboard/js/image.js"></script>

            <button type="submit" name="submit">Submit</button>
<hr>
            <a href="index.php" class="skip-button">Skip</a>
        </form>
    </div>
</body>
</html>
