<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $privacyPolicy->heading ?? 'Privacy Policy' }}</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 40px 20px;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 30px;
        }

        .content {
            text-align: justify;
        }

        @media screen and (max-width: 600px) {
            body {
                padding: 20px 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $pageData->heading ?? 'Privacy Policy' }}</h1>

        <div class="content">
            {!! strip_tags($pageData->description) ?? 'No privacy policy content available at the moment.' !!}
        </div>
    </div>
</body>
</html>
