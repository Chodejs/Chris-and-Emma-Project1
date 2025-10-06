<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chris's Developer Directory</title>
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Use Inter font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }
        /* Simple scrollbar styling for a more integrated look */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #1f2937;
        }
        ::-webkit-scrollbar-thumb {
            background: #4b5563;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #6b7280;
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-200 leading-relaxed antialiased">

    <!-- Header -->
    <header class="bg-gray-800 shadow-lg py-4 sticky top-0 z-10">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl sm:text-4xl font-extrabold text-cyan-400">Developer Directory</h1>
            <p class="text-lg sm:text-xl text-gray-400">Your Personal Command Center</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-4 sm:p-6 md:p-8">

        <!-- Local Development Section -->
        <section id="local" class="mb-12">
            <h2 class="text-2xl sm:text-3xl font-bold text-white border-b-2 border-cyan-500 pb-2 mb-6">
                Local Development
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Link Cards -->
                <a href="http://localhost/CHRISANDEMMASHOW/index.php" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-cyan-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-cyan-400 mb-2">Chris & Emma Show</h3>
                    <p class="text-sm text-gray-400 truncate">localhost/CHRISANDEMMASHOW</p>
                </a>
                <a href="http://localhost/hilltop-copy/index.php" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-cyan-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-cyan-400 mb-2">Hilltop Welding</h3>
                    <p class="text-sm text-gray-400 truncate">localhost/hilltop-copy</p>
                </a>
                <a href="http://localhost/portfolio-chrisandemmashow/index.php" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-cyan-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-cyan-400 mb-2">Portfolio</h3>
                    <p class="text-sm text-gray-400 truncate">localhost/portfolio-chrisandemmashow</p>
                </a>
                <a href="http://localhost/superbrosultra/index.php" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-cyan-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-cyan-400 mb-2">SuperBros Ultra</h3>
                    <p class="text-sm text-gray-400 truncate">localhost/superbrosultra</p>
                </a>
                <a href="http://localhost/wellness-chrisandemmashow/index.php" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-cyan-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-cyan-400 mb-2">Wellness Suite</h3>
                    <p class="text-sm text-gray-400 truncate">localhost/wellness-chrisandemmashow</p>
                </a>
                <a href="http://localhost/phpmyadmin/index.php?route=/" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-cyan-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-cyan-400 mb-2">phpMyAdmin</h3>
                    <p class="text-sm text-gray-400 truncate">localhost/phpmyadmin</p>
                </a>
            </div>
        </section>

        <!-- Live Projects Section -->
        <section id="live" class="mb-12">
            <h2 class="text-2xl sm:text-3xl font-bold text-white border-b-2 border-purple-500 pb-2 mb-6">
                Live Projects & Servers
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                 <a href="https://wellness.chrisandemmashow.com/" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-purple-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-purple-400 mb-2">Wellness Suite</h3>
                    <p class="text-sm text-gray-400 truncate">wellness.chrisandemmashow.com</p>
                </a>
                <a href="https://portfolio.chrisandemmashow.com/" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-purple-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-purple-400 mb-2">Portfolio</h3>
                    <p class="text-sm text-gray-400 truncate">portfolio.chrisandemmashow.com</p>
                </a>
                <a href="https://www.hilltopweldingandmaintenancellc.com/" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-purple-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-purple-400 mb-2">Hilltop Welding</h3>
                    <p class="text-sm text-gray-400 truncate">hilltopweldingandmaintenancellc.com</p>
                </a>
                <a href="https://ultra.superbrosllc.com/index.php" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-purple-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-purple-400 mb-2">SuperBros Ultra</h3>
                    <p class="text-sm text-gray-400 truncate">ultra.superbrosllc.com</p>
                </a>
                 <a href="https://chrisandemmashow.com/index.php" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-purple-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-purple-400 mb-2">Chris & Emma Show</h3>
                    <p class="text-sm text-gray-400 truncate">chrisandemmashow.com</p>
                </a>
                <a href="https://chrisandinga.com/" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-purple-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-purple-400 mb-2">ChrisAndInga.com</h3>
                    <p class="text-sm text-gray-400 truncate">chrisandinga.com</p>
                </a>
                <a href="https://maracentral.com/" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-purple-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-purple-400 mb-2">MaraCentral.com</h3>
                    <p class="text-sm text-gray-400 truncate">maracentral.com</p>
                </a>
                 <a href="https://east1-phpmyadmin.dreamhost.com/index.php?route=/" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-purple-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-purple-400 mb-2">DreamHost phpMyAdmin</h3>
                    <p class="text-sm text-gray-400 truncate">east1-phpmyadmin.dreamhost.com</p>
                </a>
            </div>
        </section>

        <!-- Professional & Social Section -->
        <section id="professional" class="mb-12">
            <h2 class="text-2xl sm:text-3xl font-bold text-white border-b-2 border-emerald-500 pb-2 mb-6">
                Professional & Social
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <a href="https://github.com/Chodejs" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-emerald-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-emerald-400 mb-2">GitHub</h3>
                    <p class="text-sm text-gray-400 truncate">github.com/Chodejs</p>
                </a>
                <a href="https://www.linkedin.com/in/christopher-cameron-382b2992/" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-emerald-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-emerald-400 mb-2">LinkedIn</h3>
                    <p class="text-sm text-gray-400 truncate">in/christopher-cameron-382b2992</p>
                </a>
                 <a href="https://creators.spotify.com/pod/show/4Co8J5w1BYV6INl336bvMh/episodes" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-emerald-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-emerald-400 mb-2">Spotify for Podcasters</h3>
                    <p class="text-sm text-gray-400 truncate">creators.spotify.com</p>
                </a>
                <a href="https://www.youtube.com/@ChrisThePlantBased" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-emerald-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-emerald-400 mb-2">YouTube</h3>
                    <p class="text-sm text-gray-400 truncate">@ChrisThePlantBased</p>
                </a>
                <a href="https://www.instagram.com/chris_cameron_503/" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-emerald-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-emerald-400 mb-2">Instagram</h3>
                    <p class="text-sm text-gray-400 truncate">@chris_cameron_503</p>
                </a>
                <a href="https://www.facebook.com/chris.tow.52" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-emerald-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-emerald-400 mb-2">Facebook</h3>
                    <p class="text-sm text-gray-400 truncate">chris.tow.52</p>
                </a>
            </div>
        </section>

        <!-- Education & Learning Section -->
        <section id="education" class="mb-12">
            <h2 class="text-2xl sm:text-3xl font-bold text-white border-b-2 border-amber-500 pb-2 mb-6">
                Education & Learning
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <a href="https://home.edx.org/" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-amber-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-amber-400 mb-2">edX Home</h3>
                    <p class="text-sm text-gray-400 truncate">home.edx.org</p>
                </a>
                <a href="https://pll.harvard.edu/course/cs50-introduction-computer-science" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-amber-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-amber-400 mb-2">Harvard CS50</h3>
                    <p class="text-sm text-gray-400 truncate">pll.harvard.edu/course/cs50</p>
                </a>
                <a href="https://www.udemy.com/home/my-courses/learning/" target="_blank" rel="noopener noreferrer" class="block bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-amber-500/50 hover:bg-gray-700 transition-all duration-300 transform hover:-translate-y-1">
                    <h3 class="text-xl font-semibold text-amber-400 mb-2">My Udemy Courses</h3>
                    <p class="text-sm text-gray-400 truncate">udemy.com/home/my-courses</p>
                </a>
            </div>
        </section>

    </main>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-6 text-center mt-8">
        <div class="container mx-auto px-4">
            <p class="text-sm mb-2">&copy; <span id="currentYear"></span> Christopher Cameron Tow. All rights reserved.</p>
            <p class="text-xs text-gray-400">Designed with panache by Chris and Emma.</p>
        </div>
        <script>
            // Dynamically set the current year for the copyright notice
            document.getElementById('currentYear').textContent = new Date().getFullYear();
        </script>
    </footer>

</body>
</html>

