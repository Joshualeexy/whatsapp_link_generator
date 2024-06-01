<?php include 'includes/app.php'; ?>
<?php controllers('LinkController'); ?>
<main class=" h-screen w-full">

    <div class="w-full h-4/5  flex flex-col justify-center items-center">
        <form action="" method="post" class="w-full mb-10 flex flex-col justify-center items-center gap-10">
            <div class="">
                <h1 class="col-11  text-center  p-3 mb-5  rounded" style="text-shadow: 2px 3px black; font-size:2rem; font-weight:bolder;">
                    WELCOME TO <?= APP_NAME ?>
                </h1>
            </div>
            <div class="w-full flex justify-center flex-col items-center">
                <input type="text" name="targetednumber" value="<?= @showValue('targetednumber') ?>" class=" rounded-lg px-5 py-3 w-10/12 sm:w-4/12 border-2 border-x-sky-500	border-y-teal-400 focus:outline-none" placeholder="Enter Whatsapp Numer">
                <small class="text-red-600 font-medium w-10/12 sm:w-4/12"><?= getError('targetednumber') ?></small>
            </div>

            <div class="w-full flex justify-center flex-col items-center">
                <input type="text" name="targetedmessage" value="<?= @showValue('targetedmessage') ?>" class=" rounded-lg px-5 py-3 w-10/12 sm:w-4/12 border-2 border-x-sky-500	border-y-teal-400 focus:outline-none" placeholder="Optional message">
                <small class="text-red-600 font-medium w-10/12 sm:w-4/12"><?= getError('targetedmessage') ?></small>
            </div>
            <div class="">
                <button type="submit" name="generate" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-10 py-4 text-center me-2 mb-2">Generate Link</button>
            </div>
        </form>
        <div class="w-full flex justify-center">
            <input type="text" id="uriInput" readonly id="" class="p-3 w-9/12 sm:w-5/12 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-lg  outline-none rounded-r-0" placeholder="Generated Link Will Show here" value="<?= session('generateduri') ?>">
            <button type="button" id="copybtn" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-blue-500 hover:to-green-400 font-medium rounded-r-lg text-sm px-5 py-2.5 text-center" onclick="copyuri()">Copy</button>
        </div>
    </div>
    <script defer>
        function copyuri() {
            const uri = document.getElementById('uriInput').value
            navigator.clipboard.writeText(uri)
            document.getElementById('copybtn').innerHTML = 'Link Copied';

            setTimeout(() => {
                document.getElementById('copybtn').innerHTML = 'Copy'
            }, 3000)
        }
    </script>
</main>
<?php includes('footer'); ?>