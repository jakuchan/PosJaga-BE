<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Icon --}}
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="sweetalert2.all.min.js"></script> --}}
    {{-- <script src="sweetalert2.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="sweetalert2.min.css"> --}}

    {{-- Animate.css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Montserrat+Alternates&display=swap" rel="stylesheet">

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Tailwind Elements styles -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />

    <!-- Tailwind CSS config -->
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          fontFamily: {
            sans: ["Roboto", "sans-serif"],
            body: ["Roboto", "sans-serif"],
            mono: ["ui-monospace", "monospace"],
            montserrat: ["Montserrat Alternates"],
            montserratclassic: ["Montserrat"],
          },
        },
        corePlugins: {
          preflight: false,
        },
      };
      
      // Definitions
      const notifTime = 2000;
    </script>

    <title>@yield('title') - SKAPEL</title>
</head>
<body>
    @if(Auth::user())
    <header>
        <link rel="stylesheet" href="">
    </header>
    @endif
    <main>
        @yield('content')
    </main>
    @if(Auth::user())
    <footer>
        
    </footer>
    @endif
  
    {{-- Tailwind --}}
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>