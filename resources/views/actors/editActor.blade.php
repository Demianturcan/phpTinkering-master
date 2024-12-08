<?php require "../resources/views/layout/nav.blade.php"; ?>
<section class="flex flex-col min-h-screen bg-gray-100 p-6">
    <div class="flex-grow">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Edit Actor</h1>
            <form action="/updateActor" method="POST">
                <input type="hidden" name="id" value="<?= htmlspecialchars($actor->id) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2">

                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name:</label>
                    <input type="text" name="name" value="<?= htmlspecialchars($actor->name) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>

                <div class="mb-4">
                    <label for="birth_day" class="block text-gray-700">Birth Day:</label>
                    <input type="date" name="birth_day" value="<?= htmlspecialchars($actor->birth_day) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>

                <div class="mb-4">
                    <label for="nationality" class="block text-gray-700">Nationality:</label>
                    <input type="text" name="nationality" value="<?= htmlspecialchars($actor->nationality) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</button>
            </form>

            <a href="/actors" class="text-gray-500 hover:underline mt-4 block">Return</a>
        </div>
    </div>
</section>
<?php require "../resources/views/layout/footer.blade.php"; ?>


