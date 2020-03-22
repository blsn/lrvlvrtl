<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{asset('js/app.js')}}" defer></script> <!--/ add for bootstrap-->
        <title>{{config('app.name', 'lrvlvrtl')}}</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            <main class="py-4">
                @include('inc.messages')
                @yield('content')
            </main>
        </div>
        <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
        <script>
            var elementExists = document.getElementById("article-ckeditor");
            if (elementExists) {
                CKEDITOR.replace('article-ckeditor');
            }
        </script>
    </body>
</html>
