<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" />
    <link rel="stylesheet" href="{{ url('/') }}/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="@yield('keyword')" />
    <meta name="description" content="@yield('description')" />
    <title>@yield('title') - MS Solution</title>
    <style>

    </style>
</head>

<body style="overflow-x: hidden">
    @include('public.layout.header')
    @yield('content')
    @include('public.layout.footer')

    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $(".fixed-top");
                $nav.toggleClass('scrolled', $(this).scrollTop() > 500);
            });


        });
        $(function () {
            AOS.init({ duration: 1000 });
            $('.ql-code-block').each(function (i, e) { hljs.highlightBlock(e) });
            $('.ql-ui').hide();
        });
    </script>
</body>
</html>