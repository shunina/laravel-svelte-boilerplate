<script>
    let appName = "My Application";
</script>

<main class="min-h-screen bg-gradient-to-br from-indigo-100 via-white to-purple-100 py-16 px-4">
    <div class="max-w-4xl mx-auto">
        <div class="text-center space-y-6">
            <h1 class="text-5xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                Welcome to {appName}
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Thank you for visiting our application. We're glad you're here!
            </p>
            
            <div class="mt-16 bg-white/50 backdrop-blur-lg rounded-2xl p-8 shadow-xl">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Key Features</h2>
                <ul class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <li class="p-6 bg-white/70 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="text-indigo-600 mb-3">
                            <!-- Heroicon example - you can use any icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="font-medium text-gray-800 mb-2">Feature 1</h3>
                        <p class="text-sm text-gray-600">Amazing feature description goes here</p>
                    </li>
                    <li class="p-6 bg-white/70 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="text-purple-600 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h3 class="font-medium text-gray-800 mb-2">Feature 2</h3>
                        <p class="text-sm text-gray-600">Another cool feature description</p>
                    </li>
                    <li class="p-6 bg-white/70 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="text-green-600 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h3 class="font-medium text-gray-800 mb-2">Feature 3</h3>
                        <p class="text-sm text-gray-600">Yet another feature description</p>
                    </li>
                </ul>
            </div>

            <div class="flex space-x-4">
                <button class="primary-btn">Get Started</button>
                <button class="secondary-btn">Learn More</button>
            </div>
        </div>
    </div>
</main>

