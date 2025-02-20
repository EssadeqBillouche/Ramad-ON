<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication Content</title>
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
                },
            },
        }
    </script>
</head>
<body class="h-full flex flex-col bg-secondary">
<!-- Header -->
<nav class="px-4 py-3 md:py-4 sticky top-0 bg-primary/95 backdrop-blur-sm z-50 shadow-md transition-all duration-300">
    <div class="mx-auto max-w-7xl flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('Images/freepik__background__89079.png ') }}" alt="Logo" class="h-8 md:h-10 w-auto transition-all duration-300">
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
            <a href="#" class="px-3 py-2 text-sm lg:text-base text-white hover:bg-white/10 rounded-md transition-colors focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-primary">PUBLICATION</a>
            <a href="#" class="px-3 py-2 text-sm lg:text-base text-white hover:bg-white/10 rounded-md transition-colors focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-primary">CONTACT</a>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class="flex-grow">
    <div class="max-w-4xl mx-auto px-4 py-8">
        <!-- Publication Header -->
        <header class="mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-primary mb-2">The Importance of Ramadan in Islamic Culture</h1>
            <div class="flex items-center text-sm text-gray-600">
                <img src="/api/placeholder/40/40" alt="Author" class="w-10 h-10 rounded-full mr-3">
                <span class="mr-3">By Mohammed Ali</span>
                <span class="mr-3">|</span>
                <time datetime="2025-03-15">March 15, 2025</time>
                <span class="mr-3">|</span>
                <span>5 min read</span>
            </div>
        </header>

        <!-- Publication Content -->
        <article class="prose prose-lg max-w-none mb-12">
            <p>Ramadan, the ninth month of the Islamic calendar, holds immense significance for Muslims worldwide. It is a time of spiritual reflection, increased devotion, and communal solidarity.</p>
            <h2>The Spiritual Journey</h2>
            <p>During Ramadan, Muslims fast from dawn to sunset, abstaining from food, drink, and other physical needs. This practice is not merely about denying oneself, but about purifying the soul, practicing self-discipline, and focusing on spiritual growth.</p>
            <blockquote>
                "O you who have believed, decreed upon you is fasting as it was decreed upon those before you that you may become righteous" - Quran 2:183
            </blockquote>
            <p>The fast is broken each evening with a meal called Iftar, often shared with family and friends, fostering a sense of community and gratitude.</p>
            <!-- Add more content as needed -->
        </article>

        <!-- Tags -->
        <div class="mb-12">
            <h3 class="text-lg font-semibold text-primary mb-3">Tags</h3>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-sm">Ramadan</span>
                <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-sm">Islam</span>
                <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-sm">Fasting</span>
                <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-sm">Spirituality</span>
            </div>
        </div>

        <!-- Comments Section -->
        <section class="mb-8">
            <h2 class="text-2xl font-bold text-primary mb-4">Comments</h2>

            <!-- Existing Comments -->
            <div class="space-y-6 mb-8">
                <!-- Comment 1 -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center mb-2">
                        <img src="/api/placeholder/40/40" alt="Commenter" class="w-8 h-8 rounded-full mr-3">
                        <div>
                            <h4 class="font-semibold text-primary">Ahmed Hassan</h4>
                            <time datetime="2025-03-16" class="text-sm text-gray-600">March 16, 2025</time>
                        </div>
                    </div>
                    <p class="text-gray-700">Thank you for this insightful article. It really helped me understand the deeper meaning of Ramadan.</p>
                </div>

                <!-- Comment 2 -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center mb-2">
                        <img src="/api/placeholder/40/40" alt="Commenter" class="w-8 h-8 rounded-full mr-3">
                        <div>
                            <h4 class="font-semibold text-primary">Fatima Ali</h4>
                            <time datetime="2025-03-17" class="text-sm text-gray-600">March 17, 2025</time>
                        </div>
                    </div>
                    <p class="text-gray-700">I appreciate how you've explained the spiritual aspects of fasting. It's not just about abstaining from food and drink, but about nurturing our souls.</p>
                </div>
            </div>

            <!-- Add Comment Form -->
            <form class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold text-primary mb-4">Add a Comment</h3>
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <div class="mb-4">
                    <label for="comment" class="block text-sm font-medium text-gray-700 mb-1">Comment</label>
                    <textarea id="comment" name="comment" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                </div>
                <button type="submit" class="px-4 py-2 bg-accent text-white rounded-md hover:bg-accent/90 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent">
                    Post Comment
                </button>
            </form>
        </section>
    </div>
</main>

<!-- Footer -->
<footer class="bg-primary/95 text-white py-6">
    <div class="mx-auto max-w-7xl px-4 md:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
            <div class="col-span-2 md:col-span-1">
                <img src="/api/placeholder/150/50" alt="Muslim.co Logo" class="h-8 md:h-10 w-auto mb-2">
                <p class="text-white/80 text-sm">Celebrating Ramadan together.</p>
            </div>

            <div>
                <h3 class="text-sm font-semibold mb-2">Quick Links</h3>
                <ul class="space-y-1 text-sm">
                    <li><a href="#" class="text-white/80 hover:text-accent transition-colors">Home</a></li>
                    <li><a href="#" class="text-white/80 hover:text-accent transition-colors">About</a></li>
                    <li><a href="#" class="text-white/80 hover:text-accent transition-colors">Publication</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-semibold mb-2">Contact</h3>
                <ul class="space-y-1 text-sm">
                    <li class="flex items-center">
                        <svg class="h-4 w-4 mr-1 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <a href="mailto:info@muslim.co" class="text-white/80 hover:text-accent transition-colors">info@muslim.co</a>
                    </li>
                </ul>
            </div>

            <div class="col-span-2 md:col-span-1">
                <h3 class="text-sm font-semibold mb-2">Follow Us</h3>
                <div class="flex space-x-2">
                    <a href="#" class="text-white hover:text-accent transition-colors">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
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
        </div>

        <div class="text-center text-white/60 text-xs">
            Copyright © 2025 Muslim.co. All rights reserved.
        </div>
    </div>
</footer>
</body>
</html>
