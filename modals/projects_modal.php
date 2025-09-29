<?php
include __DIR__ . '/../partials/projectsData.php';




$folder = $_GET['folder'] ?? '';
$project_id = $_GET['project_id'] ?? '';
$folderPath = realpath(__DIR__ . "/../projects/" . $folder);

if (!$folderPath || !is_dir($folderPath)) {
    echo "<p class='text-red-600 text-center'>Invalid project folder.</p>";
    exit;
}

$images = glob($folderPath . '/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
sort($images);
?>

<div
    id="<?= $project_id ?>"
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div
        class="bg-white p-6 rounded-lg shadow-lg w-full max-w-5xl h-[80vh] overflow-y-auto overflow-x-hidden relative">
        <div class="slider w-full mt-5">
            <?php foreach ($images as $image):
                $image = str_replace('\\', '/', $image);
                $docRoot = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
                $imageURL = str_replace($docRoot, '', $image);
            ?>
                <div><img src="<?= $imageURL ?>"
                        class="max-w-lg max-h-80 object-fit mx-auto"
                        alt="<?= htmlspecialchars(basename($image)) ?>"></div>
            <?php endforeach; ?>
        </div>

        <h2 class="text-2xl font-bold text-gray-800 mb-4">
            <?= htmlspecialchars($projectsData[$project_id]['title']) ?>
        </h2>

        <p class="text-gray-600 leading-relaxed mb-6">
            <?= htmlspecialchars($projectsData[$project_id]['description']) ?>
        </p>
    </div>

    <button onclick="closeModal('<?= $project_id ?>')"
        class="bg-red-500 text-white px-4 py-2 rounded absolute top-5 right-5">
        Close
    </button>
</div>