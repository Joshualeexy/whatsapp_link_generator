<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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