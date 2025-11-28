<?php
    include('../../includes/components/dashboard/header.php');
?>

<?php
    include('../../includes/components/dashboard/sidebar.php');
?>

<?php
    $team_members = [
        [
            'name' => 'Alice Johnson',
            'role' => 'Project Manager',
            'email' => 'alice.johnson@aturaja.com',
            'avatar_color' => 'bg-blue-500'
        ],
        [
            'name' => 'Bob Smith',
            'role' => 'Lead Developer',
            'email' => 'bob.smith@aturaja.com',
            'avatar_color' => 'bg-green-500'
        ],
        [
            'name' => 'Carol Williams',
            'role' => 'UI/UX Designer',
            'email' => 'carol.williams@aturaja.com',
            'avatar_color' => 'bg-purple-500'
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
                        <h1 class="text-3xl font-bold text-text-primary">Team</h1>
                        <p class="text-text-secondary mt-1">Kelola anggota tim kamu</p>
                    </div>
                    <button class="mt-4 sm:mt-0 inline-flex items-center gap-2 px-4 py-2 rounded-lg font-medium text-white transition-colors" style="background-color: var(--primary-color, var(--accent-2));">
                        <i data-lucide="user-plus" class="w-5 h-5"></i>
                        Tambah Anggota
                    </button>
                </div>

                <!-- Team Cards Grid -->
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <?php foreach ($team_members as $member) : ?>
                        <?php $initials = strtoupper(substr($member['name'], 0, 1) . substr(strstr($member['name'], ' '), 1, 1)); ?>
                        <div class="p-5 rounded-xl border transition-all hover:shadow-md" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                            <!-- Header with Avatar & Menu -->
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-12 h-12 rounded-full <?php echo $member['avatar_color']; ?> flex items-center justify-center text-white font-semibold text-lg">
                                        <?php echo $initials; ?>
                                    </div>
                                    <div>
                                        <h2 class="text-lg font-semibold" style="color: var(--text-primary);">
                                            <?php echo htmlspecialchars($member['name']); ?>
                                        </h2>
                                        <p class="text-sm text-text-secondary"><?php echo htmlspecialchars($member['role']); ?></p>
                                    </div>
                                </div>
                                <button class="p-1.5 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                                    <i data-lucide="more-vertical" class="w-5 h-5 text-text-secondary"></i>
                                </button>
                            </div>
                            
                            <!-- Contact Info -->
                            <div class="space-y-2 pt-4 border-t" style="border-color: var(--border-color);">
                                <div class="flex items-center gap-2 text-sm text-text-secondary">
                                    <i data-lucide="mail" class="w-4 h-4"></i>
                                    <span><?php echo htmlspecialchars($member['email']); ?></span>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex gap-2 mt-4">
                                <button class="flex-1 flex items-center justify-center gap-2 px-3 py-2 text-sm font-medium rounded-lg border transition-colors hover:bg-gray-50 dark:hover:bg-gray-700" style="border-color: var(--border-color); color: var(--text-primary);">
                                    <i data-lucide="message-circle" class="w-4 h-4"></i>
                                    Chat
                                </button>
                                <button class="flex-1 flex items-center justify-center gap-2 px-3 py-2 text-sm font-medium rounded-lg text-white transition-colors" style="background-color: var(--accent-2);">
                                    <i data-lucide="eye" class="w-4 h-4"></i>
                                    Profil
                                </button>
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
    // Initialize Lucide icons
    lucide.createIcons();
</script>