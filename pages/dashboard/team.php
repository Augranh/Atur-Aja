<?php
    include('../../includes/components/dashboard/header.php');
?>

<?php
    include('../../includes/components/dashboard/sidebar.php');
?>

<?php
    $team_members = [
        [
            'name' => 'John Doe',
            'role' => 'Full Stack Developer',
            'email' => 'john.doe@example.com',
            'avatar' => 'JD',
            'status' => 'online',
            'department' => 'Engineering',
            'tasks' => 8,
            'projects' => 3,
            'joined' => '2023-01-15',
            'skills' => ['PHP', 'JavaScript', 'React', 'Node.js']
        ],
        [
            'name' => 'Jane Smith',
            'role' => 'Backend Developer',
            'email' => 'jane.smith@example.com',
            'avatar' => 'JS',
            'status' => 'online',
            'department' => 'Engineering',
            'tasks' => 6,
            'projects' => 2,
            'joined' => '2023-03-20',
            'skills' => ['Python', 'Django', 'PostgreSQL', 'Redis']
        ],
        [
            'name' => 'Mike Johnson',
            'role' => 'DevOps Engineer',
            'email' => 'mike.j@example.com',
            'avatar' => 'MJ',
            'status' => 'away',
            'department' => 'Operations',
            'tasks' => 5,
            'projects' => 4,
            'joined' => '2022-11-10',
            'skills' => ['Docker', 'Kubernetes', 'AWS', 'CI/CD']
        ],
        [
            'name' => 'Sarah Wilson',
            'role' => 'Frontend Developer',
            'email' => 'sarah.w@example.com',
            'avatar' => 'SW',
            'status' => 'online',
            'department' => 'Engineering',
            'tasks' => 7,
            'projects' => 2,
            'joined' => '2023-05-01',
            'skills' => ['React', 'Vue.js', 'CSS', 'Tailwind']
        ],
        [
            'name' => 'David Brown',
            'role' => 'UI/UX Designer',
            'email' => 'david.b@example.com',
            'avatar' => 'DB',
            'status' => 'offline',
            'department' => 'Design',
            'tasks' => 4,
            'projects' => 5,
            'joined' => '2023-02-14',
            'skills' => ['Figma', 'Adobe XD', 'Sketch', 'Prototyping']
        ],
        [
            'name' => 'Emily Davis',
            'role' => 'Product Manager',
            'email' => 'emily.d@example.com',
            'avatar' => 'ED',
            'status' => 'online',
            'department' => 'Product',
            'tasks' => 12,
            'projects' => 6,
            'joined' => '2022-08-22',
            'skills' => ['Agile', 'Scrum', 'JIRA', 'Product Strategy']
        ],
        [
            'name' => 'Alex Martinez',
            'role' => 'QA Engineer',
            'email' => 'alex.m@example.com',
            'avatar' => 'AM',
            'status' => 'away',
            'department' => 'Quality Assurance',
            'tasks' => 9,
            'projects' => 3,
            'joined' => '2023-04-10',
            'skills' => ['Selenium', 'Jest', 'Cypress', 'Testing']
        ],
        [
            'name' => 'Lisa Anderson',
            'role' => 'Data Analyst',
            'email' => 'lisa.a@example.com',
            'avatar' => 'LA',
            'status' => 'online',
            'department' => 'Analytics',
            'tasks' => 5,
            'projects' => 2,
            'joined' => '2023-06-15',
            'skills' => ['SQL', 'Python', 'Tableau', 'Power BI']
        ],
    ];

    $get_status_class = function($status) {
        switch (strtolower($status)) {
            case 'online':
                return 'bg-green-500';
            case 'away':
                return 'bg-yellow-500';
            case 'offline':
                return 'bg-gray-400';
            default:
                return 'bg-gray-400';
        }
    };

    $get_department_color = function($department) {
        switch (strtolower($department)) {
            case 'engineering':
                return 'bg-blue-100 text-blue-900 dark:bg-blue-900/30 dark:text-blue-300';
            case 'design':
                return 'bg-purple-100 text-purple-900 dark:bg-purple-900/30 dark:text-purple-300';
            case 'product':
                return 'bg-pink-100 text-pink-900 dark:bg-pink-900/30 dark:text-pink-300';
            case 'operations':
                return 'bg-orange-100 text-orange-900 dark:bg-orange-900/30 dark:text-orange-300';
            case 'quality assurance':
                return 'bg-teal-100 text-teal-900 dark:bg-teal-900/30 dark:text-teal-300';
            case 'analytics':
                return 'bg-indigo-100 text-indigo-900 dark:bg-indigo-900/30 dark:text-indigo-300';
            default:
                return 'bg-gray-100 text-gray-900 dark:bg-gray-900/30 dark:text-gray-300';
        }
    };
?>

<section>
    <div class="lg:pl-64">
        <main class="py-10 px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <!-- Header -->
                <div class="mb-8 flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold mb-2" style="color: var(--text-primary);">Team Members</h1>
                        <p class="text-sm" style="color: var(--text-secondary);">Manage your team and collaborate effectively</p>
                    </div>
                    <div class="flex gap-3">
                        <button class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium transition-all hover:opacity-90" style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);">
                            <i data-lucide="filter" width="16" height="16"></i>
                            Filter
                        </button>
                        <button class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium transition-all hover:opacity-90" style="background-color: var(--accent-2); color: #ffffff;">
                            <i data-lucide="user-plus" width="16" height="16"></i>
                            Add Member
                        </button>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                    <div class="rounded-lg p-4 border transition-all hover:shadow-md" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                        <div class="flex items-center gap-3">
                            <div class="p-2 rounded-lg" style="background-color: var(--accent-1);">
                                <i data-lucide="users" width="20" height="20" style="color: var(--text-primary);"></i>
                            </div>
                            <div>
                                <p class="text-xs" style="color: var(--text-secondary);">Total Members</p>
                                <p class="text-2xl font-bold" style="color: var(--text-primary);">8</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg p-4 border transition-all hover:shadow-md" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                        <div class="flex items-center gap-3">
                            <div class="p-2 rounded-lg bg-green-500/20">
                                <i data-lucide="circle-check" width="20" height="20" class="text-green-500"></i>
                            </div>
                            <div>
                                <p class="text-xs" style="color: var(--text-secondary);">Online</p>
                                <p class="text-2xl font-bold" style="color: var(--text-primary);">5</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg p-4 border transition-all hover:shadow-md" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                        <div class="flex items-center gap-3">
                            <div class="p-2 rounded-lg bg-blue-500/20">
                                <i data-lucide="briefcase" width="20" height="20" class="text-blue-500"></i>
                            </div>
                            <div>
                                <p class="text-xs" style="color: var(--text-secondary);">Departments</p>
                                <p class="text-2xl font-bold" style="color: var(--text-primary);">6</p>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg p-4 border transition-all hover:shadow-md" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                        <div class="flex items-center gap-3">
                            <div class="p-2 rounded-lg bg-purple-500/20">
                                <i data-lucide="rocket" width="20" height="20" class="text-purple-500"></i>
                            </div>
                            <div>
                                <p class="text-xs" style="color: var(--text-secondary);">Active Projects</p>
                                <p class="text-2xl font-bold" style="color: var(--text-primary);">12</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <?php foreach ($team_members as $member): ?>
                    <div class="rounded-lg p-6 border transition-all hover:shadow-lg" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                        <!-- Header -->
                        <div class="flex items-start justify-between mb-4">
                            <div class="relative">
                                <div class="w-16 h-16 rounded-full flex items-center justify-center text-xl font-bold" style="background-color: var(--accent-1); color: var(--text-primary);">
                                    <?php echo htmlspecialchars($member['avatar']); ?>
                                </div>
                                <div class="absolute bottom-0 right-0 w-4 h-4 rounded-full border-2 <?php echo $get_status_class($member['status']); ?>" style="border-color: var(--bg-secondary);"></div>
                            </div>
                            <button class="p-1 rounded hover:opacity-70 transition-opacity" style="color: var(--text-primary);">
                                <i data-lucide="more-vertical" width="18" height="18"></i>
                            </button>
                        </div>

                        <!-- Info -->
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold mb-1" style="color: var(--text-primary);">
                                <?php echo htmlspecialchars($member['name']); ?>
                            </h3>
                            <p class="text-sm mb-2" style="color: var(--text-secondary);">
                                <?php echo htmlspecialchars($member['role']); ?>
                            </p>
                            <span class="inline-block px-2 py-1 text-xs font-medium rounded <?php echo $get_department_color($member['department']); ?>">
                                <?php echo htmlspecialchars($member['department']); ?>
                            </span>
                        </div>

                        <!-- Contact -->
                        <div class="mb-4 flex items-center gap-2 text-sm" style="color: var(--text-secondary);">
                            <i data-lucide="mail" width="14" height="14"></i>
                            <span class="truncate"><?php echo htmlspecialchars($member['email']); ?></span>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-2 gap-3 mb-4 py-3" style="border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
                            <div class="text-center">
                                <p class="text-xl font-bold" style="color: var(--text-primary);"><?php echo $member['tasks']; ?></p>
                                <p class="text-xs" style="color: var(--text-secondary);">Tasks</p>
                            </div>
                            <div class="text-center">
                                <p class="text-xl font-bold" style="color: var(--text-primary);"><?php echo $member['projects']; ?></p>
                                <p class="text-xs" style="color: var(--text-secondary);">Projects</p>
                            </div>
                        </div>

                        <!-- Skills -->
                        <div class="mb-4">
                            <p class="text-xs font-medium mb-2" style="color: var(--text-secondary);">Skills</p>
                            <div class="flex flex-wrap gap-1">
                                <?php foreach ($member['skills'] as $skill): ?>
                                <span class="px-2 py-1 text-xs rounded" style="background-color: var(--bg-primary); color: var(--text-primary);">
                                    <?php echo htmlspecialchars($skill); ?>
                                </span>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="flex gap-2">
                            <button class="flex-1 px-3 py-2 rounded-lg text-sm font-medium transition-all hover:opacity-90" style="background-color: var(--accent-2); color: #ffffff;">
                                <i data-lucide="message-circle" width="14" height="14" class="inline mr-1"></i>
                                Message
                            </button>
                            <button class="px-3 py-2 rounded-lg text-sm font-medium transition-all hover:opacity-90" style="background-color: var(--bg-primary); color: var(--text-primary); border: 1px solid var(--border-color);">
                                <i data-lucide="user" width="14" height="14"></i>
                            </button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
    </div>
</section>

<script>
    // Initialize Lucide icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
</script>