<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <h1>New Form Submission</h1>
    <p><strong>Name:</strong> {{ $formData['Name'] }}</p>
    <p><strong>Email:</strong> {{ $formData['Email'] }}</p>
    <p><strong>Phone:</strong> {{ $formData['Phone'] }}</p>
    <p><strong>Message:</strong> {{ $formData['Message'] }}</p>
</body>
</html>
