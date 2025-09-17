<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cek Subdomain DNS</title>
  <style>
    body { font-family:sans-serif; max-width:600px; margin:40px auto; }
    input { width:100%; padding:8px; }
    #result { margin-top:15px; font-weight:bold; }
    .ok { color:green; }
    .fail { color:red; }
  </style>
</head>
<body>
  <h2>Cek Subdomain</h2>
  <input id="sub" placeholder="misal: test.jkp.my.id">
  <div id="result"></div>

  <script>
    const input = document.getElementById('sub');
    const result = document.getElementById('result');
    let timer;

    input.addEventListener('input', () => {
      clearTimeout(timer);
      const host = input.value.trim();
      if (!host) { result.textContent = ''; return; }
      timer = setTimeout(async () => {
        result.textContent = 'Memeriksa...';
        try {
          const res = await fetch('check.php?host=' + encodeURIComponent(host));
          const data = await res.json();
          if (data.dnsFound) {
            result.innerHTML = `<span class="ok">${host} ditemukan di DNS ✅</span>`;
          } else {
            result.innerHTML = `<span class="fail">${host} tidak ditemukan di DNS ❌</span>`;
          }
        } catch(e) {
          result.textContent = 'Error: ' + e;
        }
      }, 600); // delay biar ga spam server
    });
  </script>
</body>
</html>
