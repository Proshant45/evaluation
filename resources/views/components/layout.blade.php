<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @Vite(['resources/js/app.js','resources/css/app.css'])
</head>

<body class="h-full bg-gray-900 ">
    <x-navbar />
    <div class="container mx-auto" >
        {{$slot}}
    </div>
    <x-footer />
</body>
</html>