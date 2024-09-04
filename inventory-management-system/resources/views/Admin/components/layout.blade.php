<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- Vite CSS and JavaScript -->
    @vite(['resources/js/app.js', 'resources/css/app.css'])

    <!-- Bootstrap CSS (if not included in app.css) -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('custom_css/theme.css') }}" rel="stylesheet">
</head>

<body>
    @include('admin.components.navbar')

    <div class="container">
        @yield('content')
    </div>

    <!-- Corrected script tag -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var acc = document.querySelectorAll(".accordion");

            acc.forEach(function(button) {
                button.addEventListener("click", function() {
                    // Get the panel associated with the clicked accordion
                    var panel = this.nextElementSibling;
                    // Check if this panel is already open
                    var isOpen = panel.style.maxHeight;

                    // Close all panels and remove Accactive class from all accordions
                    acc.forEach(function(otherButton) {
                        otherButton.classList.remove("Accactive");
                        otherButton.nextElementSibling.style.maxHeight = null;
                    });

                    // If the panel was not open, open it and set this accordion to active
                    if (!isOpen) {
                        this.classList.add("Accactive");
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            });

            function adjustSidebarHeight() {
                var sidebar = document.querySelector(".customContainer > .col-md-2");
                if (sidebar) {
                    sidebar.style.height = window.innerHeight + 'px';
                }
            }

            // Adjust height on initial load
            adjustSidebarHeight();

            // Adjust height on window resize
            window.addEventListener('resize', adjustSidebarHeight);
        });
    </script>
</body>

</html>