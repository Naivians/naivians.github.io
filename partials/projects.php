<div id="modal-container"></div>

<section id="projects" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
            class="text-center mb-16"
            data-aos="fade-up"
            data-aos-duration="2000">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">
                TAKE A LOOK AT MY PROJECTS
            </h2>
            <div
                class="w-20 h-1 bg-indigo-600 mx-auto"
                data-animate="slideInLeft"></div>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto" data-animate="fadeIn">
                Here's a selection of my recent work. Each project was built with
                attention to detail and a focus on solving real-world problems.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div data-aos="fade-up"
                data-aos-duration="2000"
                class="project-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow"
                data-animate="slideUp">
                <div class="relative h-48 overflow-hidden">
                    <img
                        src="<?= $projectsData['proj7']['img'] ?>"
                        alt="Expense Tracker"
                        class="w-full h-full object-cover" />
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2 flex-wrap">
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['HTML5'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['CSS3'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['JS'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['Tailwind'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs mr-1 mt-1">
                            <?= $tags['Laravel'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs mr-1 mt-1">
                            <?= $tags['MySQL'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-emerald-300 text-purple-600 rounded-full text-xs mt-1">
                            <?= $tags['use'] ?>
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                        <?= $projectsData['proj7']['title'] ?>
                    </h3>
                    <p class="text-gray-600 mb-4">
                        <?= $projectsData['proj7']['description'] ?>
                    </p>
                    <div class="flex justify-between items-center">
                        <button
                            onclick="openModal('proj7', 'expense-tracker')"
                            data-folder="ittsm"
                            class="bg-blue-600 text-white px-4 py-2 rounded">
                            View Projects
                        </button>
                        <a
                            href="https://github.com/Naivians"
                            class="text-gray-500 hover:text-gray-700">
                            <i class="fab fa-github"></i>
                        </a>
                        <a
                            href="https://trackexpense.infinityfree.me/" target="_blank"
                            class="text-white hover: rounded-full bg-green-500 px-4 py-1">
                            Live!
                        </a>
                    </div>
                </div>
            </div>
            <div
                data-aos="fade-up"
                data-aos-duration="2000"
                class="project-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow"
                data-animate="slideUp">
                <div class="relative h-48 overflow-hidden">
                    <img
                        src="<?= $projectsData['proj1']['img'] ?>"
                        alt="ticketing system v1"
                        class="w-full h-full object-cover" />
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2 flex-wrap">
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['HTML5'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['CSS3'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['JS'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['Bootstrap'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs mr-1 mt-1">
                            <?= $tags['php'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs mr-1 mt-1">
                            <?= $tags['MySQL'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-emerald-300 text-purple-600 rounded-full text-xs mt-1">
                            <?= $tags['use'] ?>
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                        <?= $projectsData['proj1']['title'] ?>
                    </h3>
                    <p class="text-gray-600 mb-4">
                        <?= $projectsData['proj1']['description'] ?>
                    </p>
                    <div class="flex justify-between items-center">
                        <button
                            onclick="openModal('proj1', 'ittsm')"
                            data-folder="ittsm"
                            class="bg-blue-600 text-white px-4 py-2 rounded">
                            View Projects
                        </button>
                        <a
                            href="https://github.com/Naivians"
                            class="text-gray-500 hover:text-gray-700">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div
                data-aos="fade-up"
                data-aos-duration="2000"
                class="project-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow"
                data-animate="slideUp">
                <div class="relative h-48 overflow-hidden">
                    <img
                        src="<?= $projectsData['proj2']['img'] ?>"
                        alt="ticketing system v2"
                        class="w-full h-full object-cover" />
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2 flex-wrap">
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['HTML5'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['CSS3'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['JS'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['Bootstrap'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs mr-1 mt-1">
                            <?= $tags['Laravel'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs mr-1 mt-1">
                            <?= $tags['MySQL'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-emerald-300 text-purple-600 rounded-full text-xs mt-1">
                            <?= $tags['use'] ?>
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                        <?= $projectsData['proj2']['title'] ?>
                    </h3>
                    <p class="text-gray-600 mb-4">
                        <?= $projectsData['proj2']['description'] ?>
                    </p>
                    <div class="flex justify-between items-center">
                        <button
                            onclick="openModal('proj2', 'ittsm2')"
                            data-folder="ittsm"
                            class="bg-blue-600 text-white px-4 py-2 rounded">
                            View Projects
                        </button>
                        <a
                            href="https://github.com/Naivians"
                            class="text-gray-500 hover:text-gray-700">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="moreProjects" class="hidden grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8 transition">
            <div
                data-aos="fade-up"
                data-aos-duration="2000"
                class="project-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow"
                data-animate="slideUp">
                <div class="relative h-48 overflow-hidden">
                    <img
                        src="<?= $projectsData['proj3']['img'] ?>"
                        alt="ticketing system v1"
                        class="w-full h-full object-cover" />
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2 flex-wrap">
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['HTML5'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['CSS3'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['JS'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['Bootstrap'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs mr-1">
                            <?= $tags['Laravel'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs mr-1 mt-1">
                            <?= $tags['MySQL'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-emerald-300 text-purple-600 rounded-full text-xs mt-1">
                            <?= $tags['process'] ?>
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                        <?= $projectsData['proj3']['title'] ?>
                    </h3>
                    <p class="text-gray-600 mb-4">
                        <?= $projectsData['proj3']['description'] ?>
                    </p>

                    <div class="flex justify-between items-center">
                        <button
                            onclick="openModal('proj3', 'leiaai')"
                            data-folder="ittsm"
                            class="bg-blue-600 text-white px-4 py-2 rounded">
                            View Projects
                        </button>
                        <a
                            href="https://github.com/Naivians"
                            class="text-gray-500 hover:text-gray-700">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- project 4 -->
            <div
                data-aos="fade-up"
                data-aos-duration="2000"
                class="project-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow"
                data-animate="slideUp">
                <div class="relative h-48 overflow-hidden">
                    <img
                        src="<?= $projectsData['proj4']['img'] ?>"
                        alt="ticketing system v1"
                        class="w-full h-full object-cover" />
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2 flex-wrap">
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['HTML5'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['CSS3'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['JS'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['Bootstrap'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs mr-1">
                            <?= $tags['Laravel'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs mr-1 mt-1">
                            <?= $tags['MySQL'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-emerald-300 text-purple-600 rounded-full text-xs mt-1">
                            <?= $tags['process'] ?>
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                        <?= $projectsData['proj4']['title'] ?>
                    </h3>
                    <p class="text-gray-600 mb-4">
                        <?= $projectsData['proj4']['description'] ?>
                    </p>

                    <div class="flex justify-between items-center">
                        <button
                            onclick="openModal('proj4', 'MyPOS')"
                            data-folder="ittsm"
                            class="bg-blue-600 text-white px-4 py-2 rounded">
                            View Projects
                        </button>
                        <a
                            href="https://github.com/Naivians"
                            class="text-gray-500 hover:text-gray-700">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- project 5 -->
            <div
                data-aos="fade-up"
                data-aos-duration="2000"
                class="project-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow"
                data-animate="slideUp">
                <div class="relative h-48 overflow-hidden">
                    <img
                        src="<?= $projectsData['proj5']['img'] ?>"
                        alt="ticketing system v1"
                        class="w-full h-full object-cover" />
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2 flex-wrap">
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['HTML5'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['CSS3'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['JS'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['Bootstrap'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs mr-1">
                            <?= $tags['Laravel'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs mr-1 mt-1">
                            <?= $tags['MySQL'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-emerald-300 text-purple-600 rounded-full text-xs mt-1">
                            <?= $tags['process'] ?>
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                        <?= $projectsData['proj5']['title'] ?>
                    </h3>
                    <p class="text-gray-600 mb-4">
                        <?= $projectsData['proj5']['description'] ?>
                    </p>

                    <div class="flex justify-between items-center">
                        <button
                            onclick="openModal('proj5', 'vision')"
                            class="bg-blue-600 text-white px-4 py-2 rounded">
                            View Projects
                        </button>
                        <a
                            href="https://github.com/Naivians"
                            class="text-gray-500 hover:text-gray-700">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- project 6 -->
            <div
                data-aos="fade-up"
                data-aos-duration="2000"
                class="project-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow"
                data-animate="slideUp">
                <div class="relative h-48 overflow-hidden">
                    <img
                        src="<?= $projectsData['proj6']['img'] ?>"
                        alt="ticketing system v1"
                        class="w-full h-full object-cover" />
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2 flex-wrap">
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['HTML5'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['CSS3'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-yellow-300 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['JS'] ?>
                        </span>
                        <span
                            class="inline-block px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-xs mr-1">
                            <?= $tags['Bootstrap'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs mr-1">
                            <?= $tags['Laravel'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-xs mr-1 mt-1">
                            <?= $tags['MySQL'] ?>
                        </span>

                        <span
                            class="inline-block px-3 py-1 bg-emerald-300 text-purple-600 rounded-full text-xs mt-1">
                            <?= $tags['process'] ?>
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                        <?= $projectsData['proj6']['title'] ?>
                    </h3>
                    <p class="text-gray-600 mb-4">
                        <?= $projectsData['proj6']['description'] ?>
                    </p>

                    <div class="flex justify-between items-center">
                        <button
                            onclick="openModal('proj6', 'zignet')"
                            class="bg-blue-600 text-white px-4 py-2 rounded">
                            View Projects
                        </button>
                        <a
                            href="https://github.com/Naivians"
                            class="text-gray-500 hover:text-gray-700">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-16" data-animate="fadeIn">
            <a
                href="https://github.com/Naivians" target="_blank"
                class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">
                View all projects in github <i class="fas fa-arrow-right ml-2"></i>
            </a>

            <button id="viewMore" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700">
                See all projects <i class="fas fa-arrow-right ml-2"></i>
            </button>
        </div>
    </div>
</section>