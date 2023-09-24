<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {

                    }
                }
            }
        }
    </script>

    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>


    <script src="{{ asset('assets/images/scripts.js') }}"></script>
</body>

</html>
