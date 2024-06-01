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

<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <a href="/"> <img class="" width="150px" src="<?= assets("images/logo.png") ?>" alt="<?= APP_NAME ?>"></a>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <!-- <a href="/dashboard" class=" text-white rounded-md px-3 py-2 text-sm " aria-current="page">Dashboard</a> -->
                        </div>
                    </div>
                </div>
                <!-- Profile dropdown -->
                <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" id="user-menu">
                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <a href="/profile" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Profile</a>
                    <a href="/Settings" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                    <a href="/logout" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                </div>
            </div>
        </div>
</div>


</nav>
</div>