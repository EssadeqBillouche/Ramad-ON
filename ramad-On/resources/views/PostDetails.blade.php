
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
            <img src="{{ asset('Images/freepik__background__89079.png') }}" alt="Muslim.co Logo" class="h-8 md:h-10 w-auto transition-all duration-300">
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

<main class="flex-grow">
    <div class="max-w-4xl mx-auto px-4 py-8">
        <!-- Publication Header -->
        <header class="mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-primary mb-2">{{ $post->title }}</h1>
            <div class="flex items-center text-sm text-gray-600">
                <img src="/api/placeholder/40/40" alt="Author" class="w-10 h-10 rounded-full mr-3">
                <span class="mr-3">|</span>
                <time datetime="2025-03-15">{{ $post->created_at->format('F j, Y') }}</time>
                <span class="mr-3">|</span>
            </div>
        </header>

        <!-- Publication Content -->
        <article class="prose prose-lg max-w-none mb-12">
            <p>{{ $post->content }}</p>
        </article>

        <!-- Comment Section -->
        <section class="mb-12">
            <h2 class="text-xl font-semibold mb-4">Comments</h2>

            @foreach ($post->comments as $comment)
                <div class="bg-white p-4 rounded-lg shadow-sm mb-4">
                    <p class="text-gray-600">{{ $comment->content }}</p>
                    <div class="flex items-center text-sm text-gray-500 mt-2">
                        <span class="mr-3">— {{ $comment->created_at->format('F j, Y') }}</span>
                    </div>
                </div>
            @endforeach

            <!-- Add Comment Form -->
            <form method="POST" action="{{ route('posts.storeComment', $post->id) }}" class="bg-white p-6 rounded-lg shadow-md">
                @csrf
                <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Your Comment</label>
                    <textarea id="content" name="content" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent" required></textarea>
                </div>
                <button type="submit" class="bg-accent text-white px-6 py-2 rounded-md hover:bg-accent/80">Post Comment</button>
            </form>
        </section>
    </div>
</main>
</body>
</html>
