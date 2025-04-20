<?php
$path = isset($_GET['path']) ? $_GET['path'] : '.';
$fullPath = realpath($path);
$basePath = realpath(__DIR__);
if (strpos($fullPath, $basePath) !== 0) {
    die('Access denied');
}
function getIcon($isDir)
{
    return $isDir ? "📁" : "📄";
}
echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>File Browser</title>";
echo "<style>
    :root {
        --bg: #f9fafb;
        --panel: #ffffff;
        --border: #e5e7eb;
        --text: #111827;
        --muted: #6b7280;
        --hover: #f3f4f6;
        --accent:rgb(0, 0, 0);
    }
    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, 'San Francisco', 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
        background: var(--bg);
        color: var(--text);
        padding: 60px 20px;
        display: flex;
        justify-content: center;
    }
    .container {
        width: 100%;
        max-width: 680px;
        background: var(--panel);
        border: 1px solid var(--border);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }
    .header {
        padding: 16px 20px;
        font-weight: 500;
        border-bottom: 1px solid var(--border);
        background: var(--bg);
        font-size: 15px;
        color: var(--muted);
    }
    .list {
        padding: 10px 20px;
    }
    .item {
        display: flex;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid var(--border);
        transition: background 0.2s;
    }
    .item:last-child {
        border-bottom: none;
    }
    .item:hover {
        background: var(--hover);
    }
    .icon {
        width: 24px;
        font-size: 18px;
        margin-right: 12px;
        text-align: center;
    }
    a {
        text-decoration: none;
        color: var(--accent);
        font-weight: 500;
    }
    a:hover {
        text-decoration: underline;
    }
</style></head><body>";
echo "<div class='container'>";
echo "<div class='header'>📂 Browsing: <code>$path</code></div>";
echo "<div class='list'>";
if ($path !== '.' && realpath($path) !== $basePath) {
    $parent = dirname($path);
    echo "<div class='item'><div class='icon'>⏪</div><a href='?path=" . urlencode($parent) . "'>Go Back</a></div>";
}
$folders = [];
$files = [];
foreach (scandir($fullPath) as $file) {
    if ($file === '.' || $file === '..') continue;

    $filePath = $fullPath . DIRECTORY_SEPARATOR . $file;
    $relativePath = $path . '/' . $file;

    if (is_dir($filePath)) {
        $folders[] = ['name' => $file, 'url' => "?path=" . urlencode($relativePath), 'isDir' => true];
    } else {
        $files[] = ['name' => $file, 'url' => $relativePath, 'isDir' => false];
    }
}
$items = array_merge($folders, $files);
foreach ($items as $item) {
    $icon = getIcon($item['isDir']);
    echo "<div class='item'><div class='icon'>$icon</div><a href='{$item['url']}'>{$item['name']}</a></div>";
}
echo "</div></div></body></html>";
