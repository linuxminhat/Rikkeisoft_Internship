<?php

use Framework\Session;

?>

<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>
<link href="/public/css/output.css" rel="stylesheet">

<!-- Registration Form Box -->
<div class="flex justify-center items-center mt-20">
    <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-500 mx-6">
        <h2 class="text-4xl text-center font-bold mb-4">Apply job</h2>

        <form method="POST" action="/listings/apply/">
            <?= loadPartial('errors', ['errors' => $errors ?? []]) ?>
            <?php $listing_id = $listing['id']?? 0; ?>
            <input type="hidden" name="listing_id" value="<?= $listing_id ?>">
            <div class="mb-4">
                <input
                    type="text"
                    name="name"
                    placeholder="Full Name"
                    class="w-full px-4 py-2 border rounded focus:outline-none"

                />
            </div>
            <div class="mb-4">
                <input type="hidden" name="email" value="<?= Session::get('user')['email'];?>"/>
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="city"
                    placeholder="City"
                    class="w-full px-4 py-2 border rounded focus:outline-none"

                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="state"
                    placeholder="State"
                    class="w-full px-4 py-2 border rounded focus:outline-none"

                />
            </div>
            <div class="mb-4">
                <input
                    type="text"
                    name="skills"
                    placeholder="Skills"
                    class="w-full px-4 py-2 border rounded focus:outline-none"

                />
            </div>
            <button
                type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded focus:outline-none"
            >
                Send application
            </button>
        </form>
    </div>
</div>

<?= loadPartial('footer'); ?>
