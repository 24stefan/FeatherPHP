<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeatherPHP — The Ultra-Lightweight PHP Framework</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary-color: #3b82f6; 
        }
        body { font-family: 'Inter', sans-serif; }
        code { font-family: 'Fira Code', monospace; }
        
        .btn-primary-shadow { box-shadow: 0 4px 14px 0 rgba(59, 130, 246, 0.39); }
        .btn-primary-shadow:hover { box-shadow: 0 6px 20px 0 rgba(59, 130, 246, 0.45); }
    </style>
</head>
<body class="bg-gray-900 text-gray-100 antialiased">

<header class="sticky top-0 z-50 bg-gray-900/95 backdrop-blur-sm border-b border-gray-800">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
    <!--<img src="../icons/feather-logo.png" class="w-8 h-8" alt="">-->
            <h1 class="text-xl font-bold tracking-tight text-white">FeatherPHP</h1>
        </div>
        <nav class="hidden md:flex space-x-6">
            <a href="#features" class="text-gray-400 hover:text-blue-400 transition">Features</a>
            <a href="#performance" class="text-gray-400 hover:text-blue-400 transition">Benchmarks</a>
            <a href="#getting-started" class="text-gray-400 hover:text-blue-400 transition">Docs</a>
            <a href="https://github.com/24stefan/FeatherPHP" class="px-3 py-1 text-sm bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">GitHub</a>
        </nav>
        <button class="md:hidden text-gray-400 hover:text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
    </div>
</header>

<main>

    <section class="py-20 md:py-32 text-center overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
            <span class="inline-block px-4 py-1 mb-4 text-xs font-semibold text-blue-400 bg-blue-900/50 rounded-full uppercase tracking-wider border border-blue-600/50">
                PHP Micro-Framework
            </span>
            <h2 class="text-6xl md:text-8xl font-extrabold mb-4 leading-tight text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-500">
                Lightweight. Blazing Fast.
            </h2>
            <p class="text-xl text-gray-400 mb-8 max-w-2xl mx-auto">
                **FeatherPHP** is the tiny, zero-bloat PHP framework designed for speed, low-end devices, and low-bandwidth environments.
            </p>
            <div class="flex justify-center gap-4">
                <a href="#getting-started" class="px-8 py-3 text-lg font-semibold bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition transform hover:scale-[1.02] btn-primary-shadow">
                    Get Started Instantly &rarr;
                </a>
                <a href="/demo" class="px-8 py-3 text-lg font-semibold border border-gray-600 text-gray-300 rounded-lg hover:bg-gray-800 transition">
                    View Live Demo
                </a>
            </div>
        </div>
    </section>

    ---

    <section id="features" class="py-16 bg-gray-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-4xl font-bold text-center mb-12">Built for Pure Efficiency</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="p-6 bg-gray-800 rounded-xl shadow-lg border border-gray-700 hover:border-blue-500 transition duration-300">
                    <div class="text-blue-400 mb-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Ultra-Light Core</h4>
                    <p class="text-gray-400">The entire framework core is **~10KB**. Minimal footprint means maximal speed and near-instant bootstrapping.</p>
                </div>
                <div class="p-6 bg-gray-800 rounded-xl shadow-lg border border-gray-700 hover:border-blue-500 transition duration-300">
                    <div class="text-blue-400 mb-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10h16V7H4zm16 0H4m16 0l-8 4-8-4m8 11V7"></path></svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Low Bandwidth</h4>
                    <p class="text-gray-400">Optimized to perform flawlessly on slow or unstable network connections and older devices.</p>
                </div>
                <div class="p-6 bg-gray-800 rounded-xl shadow-lg border border-gray-700 hover:border-blue-500 transition duration-300">
                    <div class="text-blue-400 mb-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Simple Routing</h4>
                    <p class="text-gray-400">Define routes and create pages or powerful APIs with minimal, intuitive code in one file.</p>
                </div>
                <div class="p-6 bg-gray-800 rounded-xl shadow-lg border border-gray-700 hover:border-blue-500 transition duration-300">
                    <div class="text-blue-400 mb-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4m0 0l7.585 7.585M13 18l7.585-7.585M18 13v4m-2-2h4m-4-2.585L13 15M7 7l4 4"></path></svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Zero Dependencies</h4>
                    <p class="text-gray-400">No external dependencies needed. Run your application anywhere PHP is available.</p>
                </div>
            </div>
        </div>
    </section>

    ---

    <section id="performance" class="py-16 bg-gray-800 border-t border-b border-gray-700">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-4xl font-bold text-center mb-4">Live Performance Test</h3>
            <p class="text-lg text-gray-400 text-center mb-10 max-w-3xl mx-auto">
                Experience the speed. Enter any FeatherPHP route (e.g., <code class="text-blue-400">/</code> or <code class="text-blue-400">/api/test</code>) and see the real-time response latency.
            </p>

            <div class="bg-gray-900 p-6 sm:p-8 rounded-xl shadow-2xl border border-gray-700">
                <div class="flex flex-col md:flex-row gap-3 mb-6 items-center">
                    <label for="routeInput" class="sr-only">Route Path</label>
                    <input id="routeInput" type="text" placeholder="Enter route path, e.g., /api/test" value="/" class="px-5 py-3 rounded-lg bg-gray-800 text-white flex-1 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-500 transition">
                    <button id="runTest" class="w-full md:w-auto px-8 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition transform hover:scale-[1.01]">
                        Run Test
                    </button>
                </div>

                <div class="h-64 relative">
                    <canvas id="speedChart" class="w-full h-full bg-gray-800 rounded-lg shadow-inner p-2"></canvas>
                    <div id="chartLoading" class="absolute inset-0 flex items-center justify-center bg-gray-800/80 rounded-lg text-lg font-medium text-blue-400 hidden">
                        Running Test...
                    </div>
                </div>

                <p class="text-gray-500 mt-4 text-sm text-right">Performance times are displayed in milliseconds (ms).</p>
            </div>
        </div>
    </section>

    ---

    <section id="getting-started" class="py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-4xl font-bold text-center mb-12">Rapid Development: Get Started in Minutes</h3>

            <div class="grid lg:grid-cols-2 gap-12">
                <div class="space-y-4">
                    <h4 class="text-2xl font-semibold text-blue-400 mb-4">1. Create a Standard Page</h4>
                    <p class="text-gray-300">Set up a dynamic, rendered HTML page with minimal fuss. FeatherPHP's templating is clean and fast.</p>
                    <div class="bg-gray-800 p-4 rounded-lg text-sm shadow-xl">
                        <div class="text-gray-400 mb-2">// 1. Create `views/about.php`</div>
                        <div class="text-gray-400 mb-2">// 2. Register the route in `public/index.php`</div>
                        <pre class="overflow-x-auto"><code>
$router->get('/about', function($req, $res) use ($engine) {
    $res->write($engine->render('about.php', ['title' => 'About FeatherPHP']));
    $res->send();
});
                        </code></pre>
                    </div>
                    <p class="text-gray-400 mt-4 text-sm">Visit <code class="text-white">/about</code> and your page is served instantly.</p>
                </div>

                <div class="space-y-4">
                    <h4 class="text-2xl font-semibold text-blue-400 mb-4">2. Build a JSON API Endpoint</h4>
                    <p class="text-gray-300">Quickly create high-performance JSON API endpoints without any boilerplate.</p>
                    <div class="bg-gray-800 p-4 rounded-lg text-sm shadow-xl">
                        <div class="text-gray-400 mb-2">// Define a new API route in `public/index.php`</div>
                        <pre class="overflow-x-auto"><code>
$router->get('/api/test', function($req, $res) {
    $res->json(['message' => 'Hello from FeatherPHP']);
    $res->send();
});
                        </code></pre>
                    </div>
                     <p class="text-gray-400 mt-4 text-sm">Hit <code class="text-white">/api/test</code> for an optimized JSON response.</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="https://github.com/24stefan/FeatherPHP/blob/main/docs/GettingStarted.md" class="px-8 py-4 text-xl font-bold bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition transform hover:scale-[1.02] btn-primary-shadow">
                    Read Full Documentation
                </a>
            </div>
        </div>
    </section>
    
</main>

<footer class="bg-gray-900 border-t border-gray-800 py-8 text-center text-gray-400">
    <div class="container mx-auto px-4">
        <p class="mb-2">FeatherPHP © <?= date('Y') ?> | A commitment to lightweight, fast PHP development.</p>

    </div>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const canvas = document.getElementById("speedChart");
        const ctx = canvas.getContext("2d");
        const routeInput = document.getElementById("routeInput");
        const runTestButton = document.getElementById("runTest");
        const chartLoading = document.getElementById("chartLoading");

        // Simple utility to draw the performance bar
        const drawChart = (label, time) => {
            const w = canvas.width = canvas.parentElement.clientWidth;
            const h = canvas.height = 250;
            const pad = 40;
            const max = Math.max(time, 100) * 1.3; // Ensure a minimum scale
            const barW = 60; // Fixed bar width for cleaner look

            ctx.clearRect(0, 0, w, h);
            ctx.font = "16px Inter, sans-serif";
            ctx.textAlign = "center";
            
            const x = w / 2 - barW / 2; // Center the bar
            const barH = (time / max) * (h - pad * 2);
            
            // Draw axis line
            ctx.fillStyle = "#374151"; // gray-700
            ctx.fillRect(pad, h - pad, w - pad * 2, 1);

            // Animate bar
            let height = 0;
            const step = () => {
                if (height < barH) {
                    height += barH / 20;
                    if (height > barH) height = barH; // Clamp

                    // Clear and draw the bar
                    ctx.clearRect(x, 0, barW, h - pad); // Clear previous frame
                    ctx.fillStyle = "#2563eb"; // blue-600
                    ctx.fillRect(x, h - pad - height, barW, height);

                    // Draw time text
                    ctx.fillStyle = "#fff";
                    ctx.fillText(time.toFixed(2) + " ms", x + barW / 2, h - pad - height - 8);

                    // Draw label
                    ctx.fillStyle = "#9ca3af"; // gray-400
                    ctx.fillText(label, x + barW / 2, h - pad + 20);

                    if (height < barH) {
                        requestAnimationFrame(step);
                    }
                }
            };
            requestAnimationFrame(step);
        };

        const runTest = async () => {
            const route = routeInput.value.trim() || "/";
            
            chartLoading.classList.remove('hidden');
            runTestButton.disabled = true;

            let time = 0;
            try {
                const start = performance.now();
                const res = await fetch(route);
                await res.text();
                const end = performance.now();
                time = end - start;
            } catch (err) {
                console.error("Test failed:", err);
                // Draw a bar representing failure (e.g., 0ms or error text)
                time = 0;
                ctx.clearRect(0,0,canvas.width,canvas.height);
                ctx.font = "18px Inter, sans-serif";
                ctx.fillStyle = "#ef4444";
                ctx.fillText("Failed to reach route. Check path.", canvas.width/2, canvas.height/2);
            }

            chartLoading.classList.add('hidden');
            runTestButton.disabled = false;
            
            if (time > 0) {
                 drawChart(route, time);
            }
        };

        runTestButton.addEventListener("click", runTest);

        // Initial default test on load
        runTest();
    });
</script>

</body>
</html>
