<?php
    include('../../includes/components/dashboard/header.php');
?>

<?php
    include('../../includes/components/dashboard/sidebar.php');
?>

<?php
    $projects = [
        [
            'name' => 'Project Alpha',
            'description' => 'This is the first project.',
            'status' => 'In Progress'
        ],
        [
            'name' => 'Project Beta',
            'description' => 'This is the second project.',
            'status' => 'Completed'
        ]
    ];
?>

<section>
    <div class="lg:pl-64">
        <main class="py-10 px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <!-- Header Section -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-text-primary">Projects</h1>
                        <p class="text-text-secondary mt-1">Kelola semua project kamu di sini</p>
                    </div>
                    <button class="mt-4 sm:mt-0 inline-flex items-center gap-2 px-4 py-2 rounded-lg font-medium text-white transition-colors" style="background-color: var(--accent-2);">
                        <i data-lucide="plus" class="w-5 h-5"></i>
                        Tambah Project
                    </button>
                </div>

                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <?php foreach ($projects as $project) : ?>
                        <?php
                            $statusConfig = match($project['status']) {
                                'Completed' => ['bg' => 'bg-green-100 text-green-700', 'icon' => 'check-circle'],
                                'In Progress' => ['bg' => 'bg-blue-100 text-blue-700', 'icon' => 'loader'],
                                'On Hold' => ['bg' => 'bg-yellow-100 text-yellow-700', 'icon' => 'pause-circle'],
                                default => ['bg' => 'bg-gray-100 text-gray-700', 'icon' => 'circle']
                            };
                        ?>
                        <div class="p-5 rounded-xl border transition-all hover:shadow-md" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                            <!-- Status Badge & Menu -->
                            <div class="flex items-center justify-between mb-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 text-xs font-medium rounded-full <?php echo $statusConfig['bg']; ?>">
                                    <i data-lucide="<?php echo $statusConfig['icon']; ?>" class="w-3.5 h-3.5"></i>
                                    <?php echo htmlspecialchars($project['status']); ?>
                                </span>
                                <button class="p-1.5 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                                    <i data-lucide="more-vertical" class="w-5 h-5 text-text-secondary"></i>
                                </button>
                            </div>
                            
                            <!-- Project Info -->
                            <div class="flex items-start gap-3 mb-4">
                                <div class="p-2 rounded-lg" style="background-color: var(--accent-1);">
                                    <i data-lucide="folder" class="w-5 h-5" style="color: var(--text-primary);"></i>
                                </div>
                                <div>
                                    <h2 class="text-lg font-semibold" style="color: var(--text-primary);">
                                        <?php echo htmlspecialchars($project['name']); ?>
                                    </h2>
                                    <p class="text-text-secondary text-sm mt-1 line-clamp-2">
                                        <?php echo htmlspecialchars($project['description']); ?>
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-center justify-between pt-4 border-t" style="border-color: var(--border-color);">
                                <div class="flex -space-x-2">
                                    <div class="w-7 h-7 rounded-full bg-blue-500 flex items-center justify-center text-white text-xs font-medium ring-2 ring-white dark:ring-gray-800">A</div>
                                    <div class="w-7 h-7 rounded-full bg-green-500 flex items-center justify-center text-white text-xs font-medium ring-2 ring-white dark:ring-gray-800">B</div>
                                </div>
                                <a href="#" class="inline-flex items-center gap-1 text-sm font-medium hover:underline" style="color: var(--accent-2);">
                                    Lihat Detail
                                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <?php
                    include('../../includes/components/floatingThemeSwitch.php');
                ?>
            </div>
        </main>
    </div>
</section>

<script>
    lucide.createIcons();
</script>