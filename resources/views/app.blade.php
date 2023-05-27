<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Application</title>
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body>
        @inertia
        <div id="app"></div>
    </body>
</html>