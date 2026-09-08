<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dardan | Technical Project Showcase</title>
    <!-- Alternate Global Tailwind Stylesheet Link -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8fafc !important; /* Premium soft white background */
        }
    </style>
</head>
<body class="text-gray-800 font-sans antialiased">

    <!-- 1. STICKY NAVBAR -->
    <nav class="sticky top-0 z-50 border-b border-gray-200" style="background-color: rgba(248, 250, 252, 0.9); backdrop-filter: blur(8px);">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <span class="text-xl font-black tracking-wider text-blue-600">DARDAN<span class="text-gray-500">.PROJECTS</span></span>
                </div>
                <div class="flex space-x-6 text-sm font-semibold text-gray-500">
                    <a href="https://github.com/22-Dardan" target="_blank" class="hover:text-blue-600 transition-colors">GitHub Profile</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- 2. MAIN PROJECT GRID -->
    <main class="max-w-6xl mx-auto px-4 py-12">
        
        <!-- Section Header -->
        <div class="mb-12 text-center sm:text-left">
            <h1 class="text-3xl font-black text-gray-900 tracking-tight">My Projects
            </h1>
            
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Project 1: Finova -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm flex flex-col justify-between overflow-hidden transition-all hover:shadow-md">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-bold text-gray-900">Finova</h2>
                        <span class="px-2.5 py-0.5 bg-green-100 text-green-800 text-xs font-bold rounded-full">Full-Stack</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                        Personal salary and dynamic earnings tracking platform. Features secure multi-workplace multi-year filtering data tables and complete native dashboard analytics.
                    </p>
                    <div class="flex flex-wrap gap-1.5 mb-4">
                        <span class="px-2 py-0.5 bg-gray-100 text-gray-700 text-xs font-semibold rounded">Core PHP</span>
                        <span class="px-2 py-0.5 bg-gray-100 text-gray-700 text-xs font-semibold rounded">MySQL</span>
                        <span class="px-2 py-0.5 bg-gray-100 text-gray-700 text-xs font-semibold rounded">Dompdf</span>
                        <span class="px-2 py-0.5 bg-gray-100 text-gray-700 text-xs font-semibold rounded">Bootstrap 5</span>
                    </div>
                </div>
                <div class="p-6 bg-gray-50 border-t border-gray-100 flex gap-3">
                    <a href="https://github.com/22-Dardan/Finova" target="_blank" rel="noopener noreferrer" class="w-full text-center py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold rounded-md transition-colors">Code repository</a>
                    <a href="https://darkblue-dotterel-675471.hostingersite.com/main.php" target="_blank" rel="noopener noreferrer" class="w-full text-center py-2 bg-white hover:bg-gray-100 text-gray-700 text-sm font-semibold rounded-md border border-gray-300 transition-colors">Live Demo</a>
                </div>
            </div>

            <!-- Project 2: Illyria-Unbound -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm flex flex-col justify-between overflow-hidden transition-all hover:shadow-md">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-bold text-gray-900">Illyria-Unbound</h2>
                        <span class="px-2.5 py-0.5 bg-blue-100 text-blue-800 text-xs font-bold rounded-full">Frontend App</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                        An interactive historical encyclopedia exploring kingdoms, ancient dynasties, maps, and weapons of the Illyrian Empire with type-safe responsive view layouts.
                    </p>
                    <div class="flex flex-wrap gap-1.5 mb-4">
                        <span class="px-2 py-0.5 bg-gray-100 text-gray-700 text-xs font-semibold rounded">Next.js</span>
                        <span class="px-2 py-0.5 bg-gray-100 text-gray-700 text-xs font-semibold rounded">React</span>
                        <span class="px-2 py-0.5 bg-gray-100 text-gray-700 text-xs font-semibold rounded">JavaScript</span>
                        <span class="px-2 py-0.5 bg-gray-100 text-gray-700 text-xs font-semibold rounded">Tailwind CSS</span>
                    </div>
                </div>
                <div class="p-6 bg-gray-50 border-t border-gray-100 flex gap-3">
                    <a href="https://github.com/22-Dardan/Illyria-Unbound" target="_blank" rel="noopener noreferrer" class="w-full text-center py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold rounded-md transition-colors">Code repository</a>
                    <a href="https://illyria-unbound.vercel.app/" target="_blank" rel="noopener noreferrer" class="w-full text-center py-2 bg-white hover:bg-gray-100 text-gray-700 text-sm font-semibold rounded-md border border-gray-300 transition-colors">Live Demo</a>
                </div>
            </div>

            <!-- Project 3: Calculatorium -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm flex flex-col justify-between overflow-hidden transition-all hover:shadow-md">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-bold text-gray-900">Calculatorium</h2>
                        <span class="px-2.5 py-0.5 bg-purple-100 text-purple-800 text-xs font-bold rounded-full">Web Tool</span>
                    </div>
                    <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                        A massive centralized full-stack suite containing 20+ custom financial and mathematical calculators computing complex algorithmic variables instantly.
                    </p>
                    <div class="flex flex-wrap gap-1.5 mb-4">
                        <span class="px-2 py-0.5 bg-gray-100 text-gray-700 text-xs font-semibold rounded">Laravel</span>
                        <span class="px-2 py-0.5 bg-gray-100 text-gray-700 text-xs font-semibold rounded">PHP</span>
                        <span class="px-2 py-0.5 bg-gray-100 text-gray-700 text-xs font-semibold rounded">Bootstrap 5</span>
                        <span class="px-2 py-0.5 bg-gray-100 text-gray-700 text-xs font-semibold rounded">MVC Architecture</span>
                    </div>
                </div>
                <div class="p-6 bg-gray-50 border-t border-gray-100 flex gap-3">
                    <a href="https://github.com/22-Dardan/Calculatorium" target="_blank" rel="noopener noreferrer" class="w-full text-center py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold rounded-md transition-colors">Code repository</a>
                    <a href="https://calculatorium.org/en" target="_blank" rel="noopener noreferrer" class="w-full text-center py-2 bg-white hover:bg-gray-100 text-gray-700 text-sm font-semibold rounded-md border border-gray-300 transition-colors">Live Demo</a>
                </div>
            </div>

        </div>
    </main>

    <!-- 3. FOOTER -->
    <footer class="max-w-6xl mx-auto px-4 py-8 border-t border-gray-200 text-center text-xs text-gray-400">
        Pristina, Kosovo • Open for Programming Internships
    </footer>

</body>
</html>
