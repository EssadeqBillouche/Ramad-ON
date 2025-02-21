<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan Recipes</title>
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
            <img src="/api/placeholder/150/50" alt="Logo" class="h-8 md:h-10 w-auto transition-all duration-300">
        </div>
        <button class="md:hidden text-white p-2 rounded-md hover:bg-white/10 transition-colors focus:outline-none focus:ring-2 focus:ring-accent">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"/>
            </svg>
        </button>
        <div class="hidden md:flex items-center space-x-1 lg:space-x-2">
            <a href="#" class="px-3 py-2 text-sm lg:text-base text-white hover:bg-white/10 rounded-md transition-colors">HOME</a>
            <a href="#" class="px-3 py-2 text-sm lg:text-base text-white hover:bg-white/10 rounded-md transition-colors">ABOUT</a>
            <a href="#" class="px-3 py-2 text-sm lg:text-base bg-accent text-white rounded-md font-medium hover:bg-accent/90 transition-colors">RECIPES</a>
            <a href="#" class="px-3 py-2 text-sm lg:text-base text-white hover:bg-white/10 rounded-md transition-colors">CONTACT</a>
        </div>
    </div>
</nav>

<main class="flex-grow">
    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Page Header with Add Recipe Button -->
        <header class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <h1 class="text-3xl md:text-4xl font-bold text-primary mb-2">Ramadan Recipes</h1>
                <p class="text-gray-600">Discover traditional and modern recipes for your iftar and suhoor meals.</p>
            </div>
            <div class="mt-4 md:mt-0">
                <label for="toggle-form" class="inline-block px-6 py-3 bg-accent text-white font-semibold rounded-md hover:bg-accent/90 transition-all cursor-pointer focus:ring-2 focus:ring-accent focus:ring-offset-2">
                    Add New Recipe
                </label>
            </div>
        </header>

        <!-- Add Recipe Form (Hidden by default, shown when checkbox is checked) -->
        <input type="checkbox" id="toggle-form" class="hidden peer">
        <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data" class="hidden peer-checked:block bg-white rounded-lg shadow-md p-6 mb-8">
            @csrf
            <h2 class="text-2xl font-semibold mb-6 text-primary">Share Your Recipe</h2>
            <div class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Recipe Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Recipe Title</label>
                        <input type="text" id="title" name="title" placeholder="Enter recipe name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent">
                    </div>
                    <!-- Category -->
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                        <select id="category" name="category_id" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent">
                            <option value="">Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- Preparation Time -->
                <div>
                    <label for="prep-time" class="block text-sm font-medium text-gray-700 mb-1">Preparation Time (minutes)</label>
                    <input type="number" id="prep-time" name="preparation_time" placeholder="Enter preparation time" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent">
                </div>
                <!-- Ingredients -->
                <div>
                    <label for="ingredients" class="block text-sm font-medium text-gray-700 mb-1">Ingredients</label>
                    <textarea id="ingredients" name="ingredients" rows="4" placeholder="Enter ingredients (one per line)" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent"></textarea>
                </div>
                <!-- Instructions -->
                <div>
                    <label for="instructions" class="block text-sm font-medium text-gray-700 mb-1">Instructions</label>
                    <textarea id="instructions" name="instructions" rows="6" placeholder="Enter step-by-step instructions" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent"></textarea>
                </div>
                <!-- Recipe Image -->
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Recipe Image</label>
                    <input type="file" id="image" name="image" accept="image/*" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent">
                </div>
                <button type="submit" class="w-full px-6 py-3 bg-accent text-white font-semibold rounded-md hover:bg-accent/90 transition-all focus:ring-2 focus:ring-offset-2 focus:ring-accent">
                    Share Recipe
                </button>
            </div>
        </form>

        <!-- Filter Section -->
        <div class="mb-8">
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <h2 class="text-lg font-semibold mb-4">Filter Recipes</h2>
                <div class="flex flex-wrap gap-3">
                    <!-- 'All' button -->
                    <!-- 'All' button: shows all recipes -->
                    <a href="{{ route('recipes.index') }}" class="px-4 py-2 bg-accent text-white rounded-md hover:bg-accent/90 transition-colors">All</a>

                    <!-- Dynamically generate buttons for each category -->
                    @foreach ($categories as $category)
                        <a href="{{ route('recipes.index', ['category' => $category->id]) }}" class="px-4 py-2 bg-white text-gray-700 border border-gray-300 rounded-md hover:bg-gray-50 transition-colors">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Recipe Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($recipes as $recipe)
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    @if($recipe->image)
                        <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}" class="w-full h-48 object-cover">
                    @else
                        <img src="/api/placeholder/400/250" alt="{{ $recipe->title }}" class="w-full h-48 object-cover">
                    @endif
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-2">
                                <span class="text-sm text-accent font-medium">
                                    @if($recipe->category)
                                        {{ $recipe->category->name }}
                                    @else
                                        Uncategorized
                                    @endif
                                </span>
                            <span class="text-sm text-gray-500">{{ $recipe->prep_time ?? $recipe->preparation_time }} mins</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">{{ $recipe->title }}</h3>
                        <p class="text-gray-600 text-sm mb-4">{{ Str::limit($recipe->instructions, 100) }}</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="/api/placeholder/30/30" alt="Author" class="w-6 h-6 rounded-full">
                                <span class="ml-2 text-sm text-gray-600">Chef Aisha</span>
                            </div>
                            <a href="{{ route('recipes.show', $recipe->id) }}" class="text-accent hover:text-accent/80">View Recipe →</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</main>
</body>
</html>
