<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @Vite(['resources/js/app.js','resources/css/app.css'])  
</head>
<body class="h-full bg-gray-900">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        
            {{ $slot }}
    </div>
</body>
</html>