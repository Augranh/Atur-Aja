<?php
    $projects = [
        [
            'name' => 'U-Reserve',
            'url' => 'https://u-reserve.vercel.app/login',
        ],
        [
            'name' => 'Davidson Rafael Portfolio',
            'url' => 'https://davidsonrafael.me',
        ],
        [
            'name' => 'Purwoko Portfolio',
            'url' => 'https://purwoko.dev',
        ],
        [
            'name' => 'Instagram Account Injection Tool',
            'url' => 'https://github.com/',
        ],
        [
            'name' => 'Simple RAG Discord Bot With Gemini API',
            'url' => 'https://github.com/',
        ],
        [
            'name' => 'Nextjs Starter Template for Business',
            'url' => 'https://github.com/Hwayeeon/template-nextjs',
        ],
        [
            'name' => 'Sentiment Analysis on myTelkomsel App Reviews',
            'url' => 'https://github.com/DavidsonRafaelK/ufxa',
        ],
        [
            'name' => 'Pre-Order Food Website for church',
            'url' => 'https://lektor-smoky.vercel.app/'
        ],
        [
            'name' => 'MacOS Installation Guide for Non-Apple Hardware',
            'url' => 'https://github.com/DavidsonRafaelK/MacOS-Installation'
        ]
    ];
?>

<section class="about-section py-16 px-4 sm:px-6 lg:px-8" style="background-color: var(--bg-primary);">
    <div class="max-w-6xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4" style="color: var(--text-primary);">
                <span class="px-3 py-1 rounded-lg text-red-500">About Me</span> 
                <span class="block mt-3">Davidson Rafael Krisman Nugroho</span>
            </h1>
            <p class="text-lg max-w-2xl mx-auto" style="color: var(--text-secondary);">
                As a university student at Kristen Krida Wacana University A.K.A UKRIDA, I am passionate about learning and growing in the field of technology.
            </p>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <!-- Image Section -->
            <div class="flex justify-center">
                <div class="relative">
                    <div class="w-full h-full sm:w-80 sm:h-[28rem] lg:w-full lg:h-[32rem] rounded-2xl overflow-hidden shadow-2xl border-4" style="border-color: var(--accent-1);">
                        <img src="../includes/assets/images/profile.jpg" alt="Picture of me (Davidson Rafael Krisman Nugroho)" class="w-full h-full object-cover object-top" style="background-color: var(--bg-secondary);">
                    </div>
                    <!-- Decorative Elements -->
                    <div class="absolute -bottom-4 -right-4 w-32 h-32 rounded-xl -z-10" style="background-color: var(--accent-2);"></div>
                    <div class="absolute -top-4 -left-4 w-20 h-20 rounded-full -z-10" style="background-color: var(--accent-1); opacity: 0.5;"></div>
                </div>
            </div>

            <!-- Text Content Section -->
            <div class="space-y-6">
                <div class="p-6 rounded-xl shadow-md" style="background-color: var(--bg-secondary); border: 1px solid var(--border-color);">
                    <p class="leading-relaxed" style="color: var(--text-secondary);">
                        Hello! My name is Davidson Rafael Krisman Nugroho, and I am currently a student at Kristen Krida Wacana University (UKRIDA). I am deeply passionate about technology and constantly seek to expand my knowledge and skills in this ever-evolving field. Through my studies and personal projects, I aim to contribute meaningfully to the tech community and make a positive impact in the world.
                    </p>
                </div>
                <div class="p-6 rounded-xl shadow-md" style="background-color: var(--bg-secondary); border: 1px solid var(--border-color);">
                    <p class="leading-relaxed" style="color: var(--text-secondary);">
                        In my free time, I enjoy exploring new technologies, coding, and collaborating with like-minded individuals. I believe that continuous learning and adaptability are key to success in the tech industry, and I am committed to staying updated with the latest trends and advancements. Thank you for taking the time to learn a bit about me!
                    </p>
                </div>

                <!-- Projects Section -->
                <div class="mt-8">
                    <h2 class="text-xl sm:text-2xl font-semibold mb-4" style="color: var(--text-primary);">
                        <i data-lucide="folder-open" class="inline-block w-6 h-6 mr-2" style="color: var(--accent-1);"></i>
                        Here are some projects I have worked on:
                    </h2>
                    <ul class="space-y-3">
                        <?php foreach ($projects as $project): ?>
                        <li class="flex items-center gap-3 p-3 rounded-lg transition-all duration-300 hover:translate-x-2" style="background-color: var(--bg-secondary);" onmouseover="this.style.backgroundColor='var(--accent-1)'" onmouseout="this.style.backgroundColor='var(--bg-secondary)'">
                            <i data-lucide="external-link" class="w-4 h-4" style="color: var(--accent-2);"></i>
                            <a href="<?= $project['url'] ?>" target="_blank" class="font-medium transition" style="color: var(--text-primary);"><?= $project['name'] ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    lucide.createIcons();
</script>

