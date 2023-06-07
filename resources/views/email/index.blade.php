<!DOCTYPE html>
<html>
<head>
    <style>
        /* Add your custom styles here */
        /* For example: */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .message {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
        .message p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>CrowdPlay Bookings</h1>

        <div class="message">
            <p><strong>Name:</strong> {{ $formData['name'] }}</p>
            <p><strong>Email:</strong> {{ $formData['email'] }}</p>
            <p><strong>Phone:</strong> {{ $formData['phone'] }}</p>
            <p><strong>Service:</strong> {{ $formData['service'] }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $formData['message'] }}</p>
        </div>
    </div>
</body>
</html>
