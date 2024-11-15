<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>
<?= loadPartial('top-banner') ?>
<link href="/public/css/output.css" rel="stylesheet">
<!-- Application Listings -->
<section>
    <div class="container mx-auto p-4 mt-4">

        <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">All applications</div>
        <a class="block p-4 text-blue-700" href="/listings/<?= $listing_id ?>">
            <i class="fa fa-arrow-alt-circle-left"></i>
            Back To Listing
        </a>
        <?php foreach ($applications as $application) : ?>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div class="rounded-lg shadow-md bg-white">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold"><?= $application->name ?></h2>
                        <p class="text-gray-700 text-lg mt-2">
                            Email: <?= $application->email ?>
                        </p>
                        <ul class="my-4 bg-gray-100 p-4 rounded">
                            <li class="mb-2">
                                <strong>Location:</strong> <?= $application->city?>, <?= $application->state?>
                            </li>
                            <?php if (!empty($application->skills)):?>
                                <li class="mb-2">
                                    <strong>Tags:</strong> <?=$application->skills?>
                                </li>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>

<?= loadPartial('bottom-banner'); ?>
<?= loadPartial('footer'); ?>
