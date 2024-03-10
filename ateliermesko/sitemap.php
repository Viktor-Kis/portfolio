<?php

function generateSitemap($directory, $baseUrl, $outputFile, $excludedDirectories = [])
{
    $directories = [];
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory), RecursiveIteratorIterator::SELF_FIRST);

    foreach ($iterator as $file) {
        if ($file->isDir() && $file->getFilename() !== '.' && $file->getFilename() !== '..') {
            $directoryPath = $file->getPathname();
            $relativePath = str_replace($directory, '', $directoryPath);
            $relativePath = str_replace(DIRECTORY_SEPARATOR, '/', $relativePath);

            // Ellenőrizze, hogy a könyvtár neve vagy annak bármely alkönyvtár ne szerepeljen az kizárt könyvtárak között
            $skip = false;
            foreach ($excludedDirectories as $excludedDirectory) {
                if (stristr($relativePath, $excludedDirectory) !== false) {
                    $skip = true;
                    break;
                }
            }

            if ($skip) {
                continue;
            }

            $pageUrl = rtrim($baseUrl, '/') . '/' . ltrim($relativePath, '/');

            $directories[] = [
                'url' => htmlspecialchars($pageUrl),
                'lastmod' => getLastModifiedDate($directoryPath),
            ];
        }
    }

    // Főoldal hozzáadása
    $directories[] = [
        'url' => rtrim($baseUrl, '/'),
        'lastmod' => getLastModifiedDate(__FILE__), // Itt az __FILE__ az aktuális fájl, módosíthatod a főoldal fájljára
    ];

    // Sitemap generálása
    header('Content-Type: application/xml');
    echo '<?xml version="1.0" encoding="UTF-8"?>';
    ?>
    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <?php foreach ($directories as $directory) : ?>
            <url>
                <loc><?= $directory['url'] ?></loc>
                <lastmod><?= $directory['lastmod'] ?></lastmod>
            </url>
        <?php endforeach; ?>
    </urlset>
    <?php

    // Sitemap mentése fájlba
    file_put_contents($outputFile, ob_get_contents());
}

// Példa használat
$directory = '/xampp/htdocs/ateliermesko';
$baseUrl = 'https://ateliermesko.com';
$outputFile = 'sitemap.xml';
$excludedDirectories = ['contact', 'thankyou']; // Azok a könyvtárak, amelyeket ki kell hagyni a sitemapból

generateSitemap($directory, $baseUrl, $outputFile, $excludedDirectories);

function getLastModifiedDate($directoryPath)
{
    // Ezt a függvényt az oldal utolsó módosításának dátumának meghatározására kell testre szabni
    return date('Y-m-d', filemtime($directoryPath));
}
?>
