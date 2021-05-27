<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>My Hotel Crud</title>
        {{-- link to fontawsome cdn --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- link to bootstrap cdn --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        {{-- link to stylesheet --}}
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body>

        @include('components.header')
        @yield('sectionHome')
        @yield('sectionEdit')
        @yield('sectionCreate')
        @yield('sectionShow')
        @include('components.footer')

    </body>
</html>
