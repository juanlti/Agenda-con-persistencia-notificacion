<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Notificaciones</title>

        <!-- Fonts -->


        <!-- Styles -->
        <style>




        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <script src="https://cdn.tailwindcss.com"></script>

    </head>

    <body>

    @livewire('users')



    @livewireScripts()
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        //window.addEventListener('alert',event=>alert(event.detail.message));
        window.addEventListener('alert',event=>{
            toastr.success(event.detail.message)
        })

    </script>


    </body>
</html>
