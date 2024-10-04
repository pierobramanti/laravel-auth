<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite(['resources/js/app.js'])

</head>
<body>
    <div>
        <div class="sidebar">
        </div>
        <div class="content">
            @include('layouts.partials.header')
            <main>
                @yeld(main-content)
            </main>
        </div>
    </div>
</body>
</html>
