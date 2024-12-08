<?php require "../resources/views/layout/nav.blade.php"; ?>
<section class="flex flex-col min-h-screen pt-12 bg-gray-50 sm:pt-16">
    <div class="flex-grow ">
        <div class="flex-grow max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-3xl font-bold mb-4">Actors</h1>
            <a href="/createActor" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Actor</a>
            <table class="min-w-full mt-4 bg-white border border-gray-300">
                <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-left">Birth Day</th>
                    <th class="py-3 px-6 text-left">Nationality</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                <?php if (empty($actors)): ?>
                <tr>
                    <td colspan="5" class="py-3 px-6 text-center">No actors available.</td>
                </tr>
                <?php else: ?>
                    <?php foreach ($actors as $actor): ?>
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6"><?= $actor['id'] ?></td>
                    <td class="py-3 px-6"><?= htmlspecialchars($actor['name']) ?></td>
                    <td class="py-3 px-6"><?= htmlspecialchars($actor['birthday']) ?></td>
                    <td class="py-3 px-6"><?= htmlspecialchars($actor['nationality']) ?></td>
                    <td class="py-3 px-2 text-center">
                        <a href="/editActor/<?= $actor['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>
                        <a href="/deleteActor/<?= $actor['id'] ?>" class="text-red-500 hover:text-red-700 mr-8">Delete</a>
                        <a href="/showActor/<?= $actor['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-4">Show</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php require "../resources/views/layout/footer.blade.php"; ?>