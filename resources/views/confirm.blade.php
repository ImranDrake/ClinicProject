<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>
<title>Confirm</title>
@livewireStyles
</head>
<link rel="stylesheet" href="custom.css" />
<script src="https://cdn.tailwindcss.com"></script>
<script src="/tailwind.config.js"></script>
<livewire:stripe-checkout />

<body>
    {{-- CONFIRM BLADE IMPORT --}}
    @livewire('confirm')

    
    @livewireScripts
<body>
   
</body>
</html>