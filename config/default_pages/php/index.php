<?php
$projectName = "{{PROJECT_NAME}}";
$phpVersion = PHP_VERSION;
$serverTime = date('Y-m-d H:i:s T');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{PROJECT_NAME}} - Laraflare</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #0b0f19;
      --card-bg: rgba(18, 24, 38, 0.75);
      --card-border: rgba(255, 255, 255, 0.08);
      --primary: #6366f1;
      --primary-glow: rgba(99, 102, 241, 0.25);
      --accent: #10b981;
      --text: #f3f4f6;
      --text-muted: #9ca3af;
    }
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Inter', -apple-system, sans-serif;
      background: var(--bg);
      color: var(--text);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background-image: 
        radial-gradient(circle at 15% 15%, rgba(99, 102, 241, 0.15) 0%, transparent 40%),
        radial-gradient(circle at 85% 85%, rgba(16, 185, 129, 0.1) 0%, transparent 40%);
    }
    .container {
      width: 100%;
      max-width: 640px;
      padding: 2.5rem;
      background: var(--card-bg);
      backdrop-filter: blur(16px);
      border: 1px solid var(--card-border);
      border-radius: 24px;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4), 0 0 40px var(--primary-glow);
      text-align: center;
    }
    .badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 6px 14px;
      border-radius: 9999px;
      background: rgba(16, 185, 129, 0.12);
      border: 1px solid rgba(16, 185, 129, 0.3);
      color: #34d399;
      font-size: 0.85rem;
      font-weight: 500;
      margin-bottom: 1.5rem;
    }
    .pulse {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #10b981;
      box-shadow: 0 0 10px #10b981;
      animation: pulse-anim 2s infinite;
    }
    @keyframes pulse-anim {
      0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
      70% { transform: scale(1); box-shadow: 0 0 0 10px rgba(16, 185, 129, 0); }
      100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
    }
    h1 {
      font-size: 2.25rem;
      font-weight: 700;
      letter-spacing: -0.025em;
      margin-bottom: 0.75rem;
      background: linear-gradient(135deg, #ffffff 0%, #cbd5e1 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    p.subtitle {
      color: var(--text-muted);
      font-size: 1rem;
      margin-bottom: 2rem;
    }
    .grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 12px;
      margin-bottom: 2rem;
      text-align: left;
    }
    .info-card {
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(255, 255, 255, 0.05);
      border-radius: 14px;
      padding: 14px 16px;
    }
    .info-card span {
      display: block;
      font-size: 0.75rem;
      color: var(--text-muted);
      text-transform: uppercase;
      letter-spacing: 0.05em;
      margin-bottom: 4px;
    }
    .info-card strong {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.95rem;
      color: #e2e8f0;
    }
    .actions {
      display: flex;
      gap: 12px;
      justify-content: center;
    }
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 10px 20px;
      border-radius: 12px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.2s ease;
      font-size: 0.9rem;
    }
    .btn-primary {
      background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
      color: #ffffff;
      box-shadow: 0 4px 14px rgba(99, 102, 241, 0.4);
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(99, 102, 241, 0.6);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="badge">
      <span class="pulse"></span>
      PHP Stack Ready & Running
    </div>
    <h1>{{PROJECT_NAME}}</h1>
    <p class="subtitle">Your PHP application is running locally on Laraflare.</p>

    <div class="grid">
      <div class="info-card">
        <span>Domain</span>
        <strong>{{PROJECT_DOMAIN}}</strong>
      </div>
      <div class="info-card">
        <span>PHP Version</span>
        <strong><?php echo PHP_VERSION; ?></strong>
      </div>
      <div class="info-card">
        <span>Document Root</span>
        <strong>/www/{{PROJECT_SLUG}}</strong>
      </div>
      <div class="info-card">
        <span>Server Time</span>
        <strong><?php echo date('H:i:s T'); ?></strong>
      </div>
    </div>

    <div class="actions">
      <a href="http://{{PROJECT_DOMAIN}}" class="btn btn-primary">Refresh Page</a>
    </div>
  </div>
</body>
</html>
