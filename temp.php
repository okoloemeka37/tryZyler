<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            padding: 20px;
            background-color: #007bff;
            color: #ffffff;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 20px;
            text-align: center;
        }

        .content p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .code {
            display: inline-block;
            font-size: 24px;
            font-weight: bold;
            padding: 10px 20px;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            letter-spacing: 2px;
        }

        .footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #777;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #28a745;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #218838;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Verify Your Account</h1>
        </div>
        <div class="content">
            <p>Hello,[name]</p>
            <p>Thank you for signing up! To complete your registration, please verify your email address by entering the verification code below:</p>
            <div class="code">[code]</div>
            <p>or click the button below:</p>
           
     </div>
        <div class="footer">
            <p>If you did not sign up for this account, please ignore this email.</p>
            <p>&copy; 2024 Aruku. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
