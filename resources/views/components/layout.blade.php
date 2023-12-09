<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body>
    <x-navbar/>
    {{ $slot }} 
    <x-footer/>
    {{-- google font --}}
{{-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&family=Paytone+One&display=swap"
rel="stylesheet"> --}}
<script src="https://kit.fontawesome.com/fa0eaf86f2.js" crossorigin="anonymous"></script>
</body>
</html>