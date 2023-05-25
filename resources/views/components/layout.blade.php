<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    
    @livewireStyles


    <title>The Daily Bugle</title>
</head>
<body>



    <x-navbar />

    {{-- <x-header headerTitle="{{ $headertitle }}"></x-header> --}}

    <div class="">
        {{ $slot }}
    </div>
    
    <x-footer/>
    @livewireScripts
    
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>