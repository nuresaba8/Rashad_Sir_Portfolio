<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; padding: 20px; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px #ddd; }
        .footer { margin-top: 20px; font-size: 0.9em; color: #777; }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Message from Contact Form</h2>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
        <p><strong>Message:</strong></p>
        <p style="white-space: pre-wrap;">{{ $data['message'] }}</p>

        <div class="footer">
            This message was sent from your website contact form.
        </div>
    </div>
</body>
</html>
