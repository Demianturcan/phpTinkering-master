<?php require "../resources/views/layout/nav.blade.php"; ?>
<section class="flex flex-col min-h-screen bg-gray-100 p-6">
    <div class="flex-grow">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Add New Actor</h1>
            <form action="/storeActor" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                    <input type="text" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter actor's name">
                </div>

                <div class="mb-4">
                    <label for="birthday" class="block text-sm font-medium text-gray-700">Birth Day:</label>
                    <input type="date" name="birthday" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter birth day">
                </div>

                <div class="mb-4">
                    <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality:</label>
                    <input type="text" name="nationality" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter nationality">
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add Actor</button>
            </form>
        </div>
    </div>
</section>
<?php require "../resources/views/layout/footer.blade.php"; ?>


