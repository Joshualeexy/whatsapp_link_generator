<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" title="<?= session('title') . '  ' . APP_TITLE; ?>">
    <meta name="description" content="<?= APP_DESCRIPTION ?>">
    <meta name="keywords" content="<?= APP_KEYWORDS ?>">
    <meta name="author" content="<?= APP_AUTHOR ?>">
    <meta property="og:title" content="<?= APP_TITLE ?>">
    <meta property="og:description" content="<?= APP_DESCRIPTION ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= APP_URL ?>">
    <meta property="og:image" content="<?= assets('images/seo-cover.png') ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= APP_TITLE ?>">
    <meta name=" twitter:description" content="<?= APP_DESCRIPTION ?>">
    <meta name="twitter:image" content="<?= assets('images/seo-cover.png') ?>">
    <link rel="stylesheet" href="<?= assets('css/all.css') ?>">
    <link rel="stylesheet" href="<?= assets('css/output.css') ?>">
    <link rel="shortcut icon" href="<?= assets("images/favicon.png") ?>" type="image/x-icon">
    <title><?= session('title') . '  ' . APP_TITLE; ?></title>
    <script src="<?= assets('js/jquery.js') ?>"></script>
</head>

<header class="z-10">
    <nav class="bg-gray-800 relative w-full -top-10 ">
        <div class="flex justify-between w-full items-end">
            <a href="/"> <img class="" width="150px" src="<?= assets("images/logo.png") ?>" alt="<?= APP_NAME ?>"></a>
            <a href="pro" class="text-yellow-600 p-4 font-extrabold font-sans leading-8"> <i class="fa fa-crown"></i> GET PRO FOR ONLY $1</a>
        </div>
    </nav>

</header>