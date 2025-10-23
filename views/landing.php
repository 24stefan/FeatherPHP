<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeatherPHP </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/assets/css/feather.css">
    <style>
        
        body { font-family: 'Inter', sans-serif; }
        .bar { transition: all 0.6s ease-in-out; }
        code { font-family: 'Fira Code', monospace; }
    </style>
</head>
<body class="bg-gray-900 text-gray-100">

<header class="bg-gray-800 shadow-md">
    <div class="container mx-auto px-6 py-6 flex flex-col md:flex-row items-center justify-between">
        <div class="flex items-center gap-3">
            <img src="/../icons/feather-logo.png" class="w-16 h-16" alt="FeatherPHP logo">
            <div>
                <h1 class="text-white-3xl font-extrabold tracking-tight">FeatherPHP</h1>
                <p class="text-gray-400 mt-1 text-sm md:text-base">Lightweight PHP framework optimized for speed, low bandwidth & low-end devices</p>
            </div>
        </div>
        <nav class="mt-4 md:mt-0 space-x-4">
            <a href="#optimization" class="text-blue-400 hover:underline">Why FeatherPHP ?</a>
            <a href="#charts" class="text-blue-400 hover:underline">Live Benchmarks</a>
            <a href="#tutorial" class="text-blue-400 hover:underline">Get Started</a>
        </nav>
    </div>
</header>

<main class="container mx-auto px-6 py-12 space-y-20">

    
    <section class="text-center space-y-4">
        <h2 class="text-5xl font-extrabold">Fast. Minimal. FeatherPHP.</h2>
        <p class="text-gray-300 max-w-2xl mx-auto text-lg">
            FeatherPHP is built for speed. Tiny core, zero bloat.
        </p>
      <!--  <a href="/demo" class="inline-block mt-4 px-8 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Open Demo Page</a> -->
    </section>

  
    <section id="optimization" class="space-y-4">
        <h3 class="text-3xl font-semibold mb-4"> Why FeatherPHP is Fast</h3>
        <p class="text-gray-300 text-lg">
            FeatherPHP is designed for efficiency and speed(keep in mind that it's in earliest stage of development and lead dev is 19!):
        </p>
        <ul class="list-disc pl-6 space-y-2 text-gray-300">
            <li>Ultra-lightweight core (~10KB) — instant load</li>
            <li>Optimized rendering even on low-end devices</li>
            <li>Works smoothly on slow networks</li>
            <li>No unnecessary dependencies, no bloat</li>
        </ul>
    </section>

    <section id="charts" class="space-y-4">
    <h3 class="text-3xl font-semibold mb-4"> Live Performance Tester</h3>
    <p class="text-gray-400 mb-2">
        Test the speed of FeatherPHP or any route you create. Enter the path (like <code>/demo</code> or <code>/api/test</code>) and see real response times instantly.
    </p>

    <div class="flex flex-col md:flex-row gap-2 mb-4 items-center">
        <input id="routeInput" type="text" placeholder="/demo" class="px-3 py-2 rounded bg-gray-800 text-white flex-1 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
        <button id="runTest" class="px-6 py-2 bg-blue-600 rounded hover:bg-blue-700 transition">Run Test</button>
    </div>

    <canvas id="speedChart" class="mx-auto max-w-full h-64 bg-gray-800 rounded-lg shadow-inner p-4"></canvas>
    <p class="text-gray-500 mt-2 text-sm">(Times in milliseconds. )</p>
</section>

    
    <section id="tutorial" class="space-y-4">
        <h3 class="text-3xl font-semibold mb-4"> Get Started</h3>
        <p class="text-gray-300">Create pages and APIs with FeatherPHP in minutes:</p>
        <ol class="list-decimal pl-6 space-y-2 text-gray-300">
            <li>Create a PHP file in <code>/views/</code>, e.g., <code>about.php</code></li>
            <li>Register route in <code>public/index.php</code>:
<pre class="bg-gray-800 p-3 rounded text-sm"><code>
$router->get('/about', function($req, $res) use ($engine) {
    $res->write($engine->render('about.php', ['title' => 'About FeatherPHP']));
    $res->send();
});
</code></pre></li>
            <li>Visit <code>/about</code> — page loads instantly!</li>
        </ol>
        <p class="text-gray-300 mt-4">Creating APIs is easy:
<pre class="bg-gray-800 p-3 rounded text-sm"><code>
$router->get('/api/test', function($req, $res) {
    $res->json(['message' => 'Hello FeatherPHP']);
    $res->send();
});
</code></pre>
        </p>
    </section>

</main>

<footer class="bg-gray-800 shadow-md py-6 text-center text-gray-400">
    FeatherPHP © <?= date('Y') ?> — lightweight, fast.
</footer>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const canvas = document.getElementById("speedChart");
    const ctx = canvas.getContext("2d");

    const drawChart = (labels, times) => {
        const w = canvas.width = canvas.parentElement.clientWidth;
        const h = canvas.height = 300;
        const pad = 40;
        const max = Math.max(...times) * 1.3;
        const barW = (w - pad*2)/times.length * 0.6;

        ctx.clearRect(0,0,w,h);
        ctx.font = "14px system-ui";
        ctx.textAlign = "center";

        labels.forEach((label,i) => {
            const x = pad + i*((w - pad*2)/times.length) + ((w - pad*2)/times.length - barW)/2;
            const barH = (times[i]/max)*(h-pad*2);
            const y = h-pad-barH;

            // Animate bar
            let height = 0;
            const step = () => {
                if(height < barH){
                    height += barH / 20;
                    ctx.fillStyle = "#2563eb";
                    ctx.clearRect(x, 0, barW, h);
                    ctx.fillRect(x, h-pad-height, barW, height);

                    ctx.fillStyle = "#fff";
                    ctx.fillText(times[i].toFixed(1) + " ms", x + barW/2, h-pad-height-6);

                    ctx.fillStyle = "#9ca3af";
                    ctx.fillText(label, x + barW/2, h-pad+18);

                    requestAnimationFrame(step);
                }
            };
            step();
        });
    };

    const runTest = async () => {
        const route = document.getElementById("routeInput").value || "/";
        const times = [];
        const labels = [route];

        try {
            const start = performance.now();
            const res = await fetch(route);
            await res.text(); // wait for full response
            const end = performance.now();
            times.push(end-start);
        } catch(err) {
            console.error(err);
            times.push(0); // failed requests
        }

        drawChart(labels, times);
    };

    document.getElementById("runTest").addEventListener("click", runTest);

    // Default: test the main page
    document.getElementById("routeInput").value = "/";
    runTest();
});
</script>


</body>
</html>
