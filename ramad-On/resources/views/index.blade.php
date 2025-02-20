<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Celebrate Ramadan with Muslim.co - Join our community during this blessed month">
    <title>Ramada-On</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#003B7A',
                        accent: '#FF8A00',
                        secondary: '#E6F4FF',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        twinkle: {
                            '0%, 100%': { opacity: 1, transform: 'scale(1)' },
                            '50%': { opacity: 0.5, transform: 'scale(0.8)' },
                        }
                    },
                    animation: {
                        float: 'float 3s ease-in-out infinite',
                        twinkle: 'twinkle 2s ease-in-out infinite',
                    }
                },
            },
        }
    </script>
</head>
<body class=" w-full bg-cover bg-center bg-[url('{{ asset('Images/13114820_5152379.png') }}')]">
<!-- Navigation -->
<nav class="px-4 py-3 md:py-4 sticky top-0 bg-primary/95 backdrop-blur-sm z-50 shadow-md transition-all duration-300">
    <div class="mx-auto max-w-7xl flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('Images/freepik__background__89080.png ') }}" alt="Muslim.co Logo" class="h-8 md:h-10 w-auto transition-all duration-300">
        </div>
        <!-- Mobile Menu Button -->
        <button class="md:hidden text-white p-2 rounded-md hover:bg-white/10 transition-colors focus:outline-none focus:ring-2 focus:ring-accent" aria-label="Toggle menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"/>
            </svg>
        </button>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center space-x-1 lg:space-x-2">
            <a href="#" class="px-3 py-2 text-sm lg:text-base bg-accent text-white rounded-md font-medium hover:bg-accent/90 transition-colors focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-primary">HOME</a>
            <a href="#" class="px-3 py-2 text-sm lg:text-base text-white hover:bg-white/10 rounded-md transition-colors focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-primary">ABOUT</a>
            <a href="/Posts" class="px-3 py-2 text-sm lg:text-base text-white hover:bg-white/10 rounded-md transition-colors focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-primary">PUBLICATION</a>
            <a href="#" class="px-3 py-2 text-sm lg:text-base text-white hover:bg-white/10 rounded-md transition-colors focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-primary">CONTACT</a>
        </div>
    </div>

    <!-- Mobile Menu (Hidden by default) -->
    <div class="hidden md:hidden absolute top-full left-0 right-0 bg-primary/95 backdrop-blur-sm shadow-lg">
        <div class="flex flex-col space-y-2 p-4">
            <a href="#" class="text-white hover:bg-white/10 px-4 py-2 rounded-md transition-colors">HOME</a>
            <a href="#" class="text-white hover:bg-white/10 px-4 py-2 rounded-md transition-colors">ABOUT</a>
            <a href="/posts" class="text-white hover:bg-white/10 px-4 py-2 rounded-md transition-colors">PUBLICATION</a>
            <a href="#" class="text-white hover:bg-white/10 px-4 py-2 rounded-md transition-colors">CONTACT</a>
        </div>
    </div>
</nav>
<!-- Hero Section -->
<main class="flex-1 relative px-4 py-12 md:py-16 overflow-hidden min-h-[calc(100vh-64px-200px)]">    <div class="mx-auto max-w-7xl">
        <div class="relative z-10 max-w-2xl">
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-4">
                Welcome to<br>
                <span class="text-accent">Ramadan</span>
            </h1>
            <p class="text-white/90 text-lg mb-8 max-w-xl">
                Join our community in celebrating this blessed month of spiritual reflection, worship, and compassion.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#" class="inline-block px-8 py-4 bg-accent text-white font-semibold rounded-md text-lg hover:bg-accent/90 transition-all transform hover:scale-105 focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:outline-none">
                    REGISTER NOW
                </a>
                <a href="#" class="inline-block px-8 py-4 bg-white/10 text-white font-semibold rounded-md text-lg hover:bg-white/20 transition-all backdrop-blur-sm">
                    LEARN MORE
                </a>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-1/2 h-full pointer-events-none">
            <div class="relative h-full">
                <!-- Mosque Silhouette -->
                <div class="absolute right-10 top-20 w-96 h-96">
                    <div class="absolute right-20 top-10 w-64 h-64 bg-secondary/20 backdrop-blur-sm rounded-t-full animate-float"></div>
                    <div class="absolute right-32 top-0 w-40 h-40 bg-secondary/10 backdrop-blur-sm rounded-t-full"></div>
                    <div class="absolute right-0 top-20 w-32 h-80 bg-secondary/15 backdrop-blur-sm"></div>
                </div>

                <!-- Ornamental Lanterns -->
                <div class="absolute right-10 top-10 w-20 h-32 bg-accent/80 rounded-lg animate-float" style="animation-delay: 0.5s"></div>
                <div class="absolute right-40 top-20 w-20 h-32 bg-accent/80 rounded-lg animate-float" style="animation-delay: 1s"></div>

                <!-- Crescent Moon -->
                <div class="absolute right-28 top-28 w-20 h-20 animate-float" style="animation-delay: 1.5s">
                    <div class="absolute inset-0 bg-accent/90 rounded-full"></div>
                    <div class="absolute inset-2 bg-primary rounded-full"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->

</main>

<!-- Footer -->
<!-- Main Section -->


<!-- Footer (Smaller version) -->
<footer class="bg-primary/95 text-white py-6">
    <div class="mx-auto max-w-7xl px-4 md:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
            <!-- Logo and Social Links -->
            <div class="col-span-2 md:col-span-1">
                <img src="/api/placeholder/150/40" alt="Muslim.co Logo" class="h-8 w-auto mb-2">
                <div class="flex space-x-3">
                    <a href="#" class="text-white hover:text-accent transition-colors">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-white hover:text-accent transition-colors">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-white hover:text-accent transition-colors">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-sm font-semibold mb-2">Quick Links</h3>
                <ul class="space-y-1 text-sm">
                    <li><a href="#" class="text-white/80 hover:text-accent transition-colors">Home</a></li>
                    <li><a href="#" class="text-white/80 hover:text-accent transition-colors">About</a></li>
                    <li><a href="#" class="text-white/80 hover:text-accent transition-colors">Publication</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-sm font-semibold mb-2">Contact Us</h3>
                <ul class="space-y-1 text-sm">
                    <li class="flex items-center">
                        <svg class="h-4 w-4 mr-1 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <a href="mailto:info@muslim.co" class="text-white/80 hover:text-accent transition-colors">info@muslim.co</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="h-4 w-4 mr-1 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span class="text-white/80">+1 (123) 456-7890</span>
                    </li>
                </ul>
            </div>

            <!-- Newsletter (optional, remove if not needed) -->
            <div class="col-span-2 md:col-span-1">
                <h3 class="text-sm font-semibold mb-2">Newsletter</h3>
                <form class="flex">
                    <input type="email" placeholder="Your email" class="px-3 py-1 w-full text-sm rounded-l-md focus:outline-none focus:ring-1 focus:ring-accent" />
                    <button type="submit" class="bg-accent px-3 py-1 text-sm rounded-r-md hover:bg-accent/90 transition-colors">Subscribe</button>
                </form>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center text-white/60 text-xs">
            Copyright © 2025 Muslim.co. All rights reserved.
        </div>
    </div>
</footer>
</body>
</html>
