<?php require "../resources/views/layout/nav.blade.php"; ?>
<section class="flex flex-col min-h-screen bg-gray-100 p-6">
    <div class="flex-grow">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Delete Film</h1>
            <p class="mb-4">Are you sure you want to delete the film "<strong><?= htmlspecialchars($film->name) ?></strong>"?</p>

            <form action="/destroy" method="POST" class="mt-4">
                <input type="hidden" name="id" value="<?= htmlspecialchars($film->id) ?>">
                <button type="submit" class="w-full bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Delete</button>
            </form>

            <a href="/films" class="text-gray-500 hover:underline mt-4 block">Cancel</a>
        </div>
    </div>
</section>
<?php require "../resources/views/layout/footer.blade.php"; ?>