<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brew Haven - Specialty Coffee Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .heading {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body class="bg-amber-50">
    <!-- Navigation Bar -->
    <nav class="container mx-auto py-6 px-4 md:px-8 flex justify-between items-center">
        <div class="text-2xl font-bold text-amber-900">Brew<span class="text-amber-600">Haven</span></div>
        <div class="hidden md:flex space-x-8">
            <a href="#" class="text-amber-900 hover:text-amber-600 font-medium">Home</a>
            <a href="#" class="text-amber-900 hover:text-amber-600 font-medium">Menu</a>
            <a href="#" class="text-amber-900 hover:text-amber-600 font-medium">About</a>
            <a href="#" class="text-amber-900 hover:text-amber-600 font-medium">Contact</a>
        </div>
        <div class="flex items-center space-x-4">
            <a href="#" class="bg-amber-900 text-white px-4 py-2 rounded-full hover:bg-amber-800 transition duration-300">Order Now</a>
            <button class="md:hidden text-amber-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="container mx-auto px-4 md:px-8 py-12 md:py-20">
        <div class="flex flex-col md:flex-row items-center">
            <!-- Left Content Area -->
            <div class="w-full md:w-1/2 mb-12 md:mb-0">
                <div class="max-w-lg">
                    <h1 class="heading text-4xl md:text-5xl lg:text-6xl font-bold text-amber-900 leading-tight mb-6">
                        Experience the Art of <span class="text-amber-600">Perfect Coffee</span>
                    </h1>
                    <p class="text-amber-800 text-lg mb-8">
                        Carefully sourced, expertly roasted, and perfectly brewed. Discover coffee the way it's meant to be enjoyed.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-amber-900 text-white px-6 py-3 rounded-full text-lg font-medium hover:bg-amber-800 transition duration-300">
                            Explore Menu
                        </a>
                        <a href="#" class="border-2 border-amber-600 text-amber-600 px-6 py-3 rounded-full text-lg font-medium hover:bg-amber-600 hover:text-white transition duration-300">
                            About Us
                        </a>
                    </div>
                    <div class="flex items-center mt-12">
                        <div class="flex -space-x-4">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=120&q=80" alt="Customer" class="w-10 h-10 rounded-full border-2 border-white">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=120&q=80" alt="Customer" class="w-10 h-10 rounded-full border-2 border-white">
                            <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=120&q=80" alt="Customer" class="w-10 h-10 rounded-full border-2 border-white">
                        </div>
                        <div class="ml-4">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span class="ml-2 text-amber-800 font-medium">4.9</span>
                            </div>
                            <p class="text-amber-700 text-sm">From 2,500+ reviews</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Image Area -->
            <div class="w-full md:w-1/2 relative">
                <div class="relative">
                    <!-- Main coffee image -->
                    <div class="bg-amber-200 rounded-3xl overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1498804103079-a6351b050096?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2000&q=80" alt="Coffee Cup" class="w-full h-full object-cover">
                        <!-- Semi-transparent overlay -->
                        <div class="absolute inset-0 bg-amber-900 opacity-10"></div>
                    </div>
                    
                    <!-- Coffee bean accent image -->
                    <div class="absolute -bottom-6 -left-6 bg-amber-100 rounded-2xl shadow-lg p-4 w-32 h-32 flex items-center justify-center">
                        <img src="https://images.unsplash.com/photo-1587734361995-5792cd5d3d1e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=150&q=80" alt="Coffee Beans" class="w-20 h-20 object-contain">
                    </div>
                    
                    <!-- Customer review card -->
                    <div class="absolute -top-4 -right-4 bg-white rounded-2xl shadow-lg p-4 w-64">
                        <div class="flex items-center mb-2">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=120&q=80" alt="Customer" class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <p class="font-medium text-amber-900">Sarah L.</p>
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <p class="text-amber-800 text-sm">"The best coffee experience I've ever had. Their specialty brews are absolutely worth trying!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Coffee Features -->
    <section class="container mx-auto px-4 md:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-6 shadow-md">
                <div class="bg-amber-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-amber-900 mb-2">Ethically Sourced</h3>
                <p class="text-amber-700">We partner directly with farmers to ensure fair trade and sustainable practices.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-md">
                <div class="bg-amber-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-amber-900 mb-2">Freshly Roasted</h3>
                <p class="text-amber-700">Our beans are roasted in small batches to ensure peak flavor and freshness.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 shadow-md">
                <div class="bg-amber-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-amber-900 mb-2">Artisan Crafted</h3>
                <p class="text-amber-700">Each cup is prepared by our expert baristas using traditional methods.</p>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="bg-amber-100 py-16">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
                <h2 class="heading text-3xl md:text-4xl font-bold text-amber-900 mb-4">Our Signature Blends</h2>
                <p class="text-amber-800 max-w-2xl mx-auto">Explore our carefully curated selection of premium coffee blends, each with its own unique character and flavor profile.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-md transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1611854779393-1b2da9d400fe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="Morning Sunrise Blend" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-semibold text-amber-900">Morning Sunrise</h3>
                            <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm font-medium">$18.99</span>
                        </div>
                        <p class="text-amber-700 mb-4">A bright and vibrant medium roast with notes of citrus and caramel.</p>
                        <button class="w-full bg-amber-900 text-white py-2 rounded-lg hover:bg-amber-800 transition duration-300">Add to Cart</button>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-md transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1559589689-577aabd1db4f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="Midnight Reserve" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-semibold text-amber-900">Midnight Reserve</h3>
                            <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm font-medium">$21.99</span>
                        </div>
                        <p class="text-amber-700 mb-4">A bold dark roast with rich chocolate and smoky undertones.</p>
                        <button class="w-full bg-amber-900 text-white py-2 rounded-lg hover:bg-amber-800 transition duration-300">Add to Cart</button>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-md transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1572286258217-215b31a7253d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="Exotic Origins" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-semibold text-amber-900">Exotic Origins</h3>
                            <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm font-medium">$24.99</span>
                        </div>
                        <p class="text-amber-700 mb-4">A unique single-origin with floral notes and fruity finish.</p>
                        <button class="w-full bg-amber-900 text-white py-2 rounded-lg hover:bg-amber-800 transition duration-300">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-6 shadow-md">
                    <div class="bg-amber-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-amber-900 mb-2">Ethically Sourced</h3>
                    <p class="text-amber-700">We partner directly with farmers to ensure fair trade and sustainable practices.</p>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-md">
                    <div class="bg-amber-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-amber-900 mb-2">Freshly Roasted</h3>
                    <p class="text-amber-700">Our beans are roasted in small batches to ensure peak flavor and freshness.</p>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-md">
                    <div class="bg-amber-100 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-amber-900 mb-2">Artisan Crafted</h3>
                    <p class="text-amber-700">Each cup is prepared by our expert baristas using traditional methods.</p>
                </div>
            </div>
        </section>
    </body>
    </html>