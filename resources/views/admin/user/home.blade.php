<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Laravel Livewire Crud</h2>
                </div>
                <div class="card-body">
                    @livewire('user-component') {{-- Memanggil Components --}}
                </div>
            </div>
        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
