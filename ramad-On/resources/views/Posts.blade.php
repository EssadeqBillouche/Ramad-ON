<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan Inspiration - Blog Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#003B7A',
                        accent: '#FF8A00',
                        secondary: '#E6F4FF',
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-gray-50">
<!-- Header -->
<header class="sticky top-0 bg-primary/95 backdrop-blur-sm z-50">
    <nav class="px-4 py-4 md:px-8">
        <div class="mx-auto max-w-7xl flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <img src="/api/placeholder/150/50" alt="Logo" class="h-10 w-auto">
                <span class="text-white text-xl font-semibold">Ramadan Inspiration</span>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-white p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"/>
                </svg>
            </button>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#" class="text-white hover:text-accent transition-colors">Home</a>
                <a href="#" class="text-white hover:text-accent transition-colors">Experiences</a>
                <a href="#" class="text-white hover:text-accent transition-colors">Recipes</a>
                <a href="#" class="px-4 py-2 bg-accent text-white rounded-md font-medium hover:bg-accent/90 transition-colors">Blog</a>
            </div>
        </div>
    </nav>
</header>

<!-- Main Content -->
<main class="max-w-4xl mx-auto px-4 py-8">
    <!-- Add Post Button -->
    <div class="text-center mb-8">
        <label for="toggle-form" class="inline-block px-6 py-3 bg-accent text-white font-semibold rounded-md hover:bg-accent/90 transition-all cursor-pointer">
            Add New Post
        </label>
    </div>

    <!-- Blog Post Form -->
    <input type="checkbox" id="toggle-form" class="hidden peer">
    <form class="hidden peer-checked:block bg-white rounded-lg shadow-md p-6 mb-8" method="POST" action="{{ route('posts.store') }}">
        <div class="space-y-6">
            @csrf
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input type="text" id="title" name="title" placeholder="Enter your blog post title"
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent">
            </div>

            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                <textarea id="content" name="content" rows="6" placeholder="Share your thoughts..."
                          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent"></textarea>
            </div>

            <button type="submit"
                    class="w-full px-6 py-3 bg-accent text-white font-semibold rounded-md hover:bg-accent/90 transition-all focus:ring-2 focus:ring-offset-2 focus:ring-accent">
                Publish Post
            </button>
        </div>
    </form>

    <!-- Example Blog Posts -->
    <div class="space-y-8">
        <!-- Post 1 -->
        @foreach ($posts as $post)
            <article class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">{{ $post->title }}</h2>
                    <p class="text-gray-700 mb-4">{{ Str::limit($post->content, 150) }}...</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <button class="text-gray-500 hover:text-accent">
                                <span>💬 {{ $post->comments()->count() }} comments</span>
                            </button>
                        </div>
                        <a href="{{ route('posts.show', $post->id) }}" class="text-accent hover:text-accent/80">Read More →</a>
                    </div>
                </div>
            </article>
        @endforeach

    </div>
</main>

<!-- Footer -->
<footer class="bg-primary/95 text-white mt-auto">
    <div class="max-w-7xl mx-auto px-4 py-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="text-sm mb-4 md:mb-0">
                © 2025 Ramadan Inspiration. All rights reserved.
            </div>
            <div class="flex items-center space-x-4">
                <a href="mailto:contact@ramadaninspiration.com" class="text-sm hover:text-accent transition-colors">
                    contact@ramadaninspiration.com
                </a>
                <span class="text-sm">|</span>
                <a href="tel:+1234567890" class="text-sm hover:text-accent transition-colors">
                    +123 456 7890
                </a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
