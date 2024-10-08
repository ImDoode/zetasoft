<?php
$files = ['reg.php', 'demo.php', 'index.php', 'services.php', 'services1c.php', 'products.php', 'product.php', 'products1c.php', 'products1c2.php', 'competitions.php', 'cases.php', 'case.php', 'case-customer.php', 'blog.php', 'blog-item.php', 'contacts.php', 'about.php', 'vacancy.php', 'vacancies.php', 'dashboard.php'];

foreach ($files as $phpFile) {
    if (file_exists($phpFile)) {
        $htmlFile = str_replace('.php', '.html', $phpFile);
        ob_start();
        include $phpFile;
        $output = ob_get_clean();
        while (preg_match('/<\? include \'\.\/partials\/(.+?)\'; \?>/', $output, $matches)) {
            $includeFile = $matches[1];
            $includeContent = file_get_contents('./partials/' . $includeFile);
            $output = str_replace($matches[0], $includeContent, $output);
        }
        file_put_contents($htmlFile, $output);
        echo "Demo file $htmlFile is created\n";
    } else {
        echo "Source $phpFile doesn't exist\n";
    }

}
?>


