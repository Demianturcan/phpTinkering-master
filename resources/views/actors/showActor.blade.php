<?php require "../resources/views/layout/nav.blade.php"; ?>
<section class="flex flex-col min-h-screen bg-gray-100 p-6">
    <div class="flex-grow">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Actor Details</h1>

            <div class="mb-4">
                <strong class="block text-gray-700">ID:</strong>
                <p class="mt-1"><?= htmlspecialchars($actor->id) ?></p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700">Name:</strong>
                <p class="mt-1"><?= htmlspecialchars($actor->name) ?></p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700">Birth Day:</strong>
                <p class="mt-1"><?= htmlspecialchars($actor->birthday) ?></p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700">Nationality:</strong>
                <p class="mt-1"><?= htmlspecialchars($actor->nationality) ?></p>
            </div>

            <a href="/actors" class="text-blue-500 hover:underline">Return</a>
        </div>
    </div>
</section>
<?php require "../resources/views/layout/footer.blade.php"; ?>


