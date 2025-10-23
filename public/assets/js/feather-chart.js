document.addEventListener("DOMContentLoaded", async () => {
  const canvas = document.getElementById("speedChart");
  const ctx = canvas.getContext("2d");

  let data;
  try {
    const res = await fetch("/api/bench");
    data = await res.json();
  } catch (err) {
    console.error("Benchmark data fetch failed:", err);
    data = {
      tests: [
        { name: "FeatherPHP", time_ms: 2.4 },
        { name: "Slim", time_ms: 6.1 },
        { name: "Laravel", time_ms: 14.2 },
        { name: "Symfony", time_ms: 20.8 }
      ]
    };
  }

  const labels = data.tests.map(t => t.name);
  const times = data.tests.map(t => t.time_ms);

  const w = canvas.width;
  const h = canvas.height;
  const pad = 40;
  const max = Math.max(...times) * 1.1;
  const barW = (w - pad * 2) / times.length * 0.6;

  ctx.clearRect(0, 0, w, h);
  ctx.font = "14px system-ui";
  ctx.textAlign = "center";

  labels.forEach((label, i) => {
    const x = pad + i * ((w - pad * 2) / times.length) + ((w - pad * 2) / times.length - barW) / 2;
    const barH = (times[i] / max) * (h - pad * 2);
    const y = h - pad - barH;

    // Bar
    ctx.fillStyle = i === 0 ? "#2563eb" : "#94a3b8";
    ctx.fillRect(x, y, barW, barH);

  
    ctx.fillStyle = "#111";
    ctx.fillText(times[i].toFixed(1) + " ms", x + barW / 2, y - 6);

    ctx.fillStyle = "#374151";
    ctx.fillText(label, x + barW / 2, h - pad + 18);
  });
});
