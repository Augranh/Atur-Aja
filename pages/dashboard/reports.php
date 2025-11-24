<?php
    include('../../includes/components/dashboard/header.php');
?>

<?php
    include('../../includes/components/dashboard/sidebar.php');
?>

<?php
    // Sample data for reports
    $monthlyStats = [
        ['month' => 'Jan', 'completed' => 45, 'pending' => 15, 'revenue' => 12500],
        ['month' => 'Feb', 'completed' => 52, 'pending' => 12, 'revenue' => 15200],
        ['month' => 'Mar', 'completed' => 48, 'pending' => 18, 'revenue' => 14800],
        ['month' => 'Apr', 'completed' => 61, 'pending' => 10, 'revenue' => 18300],
        ['month' => 'May', 'completed' => 55, 'pending' => 14, 'revenue' => 16500],
        ['month' => 'Jun', 'completed' => 68, 'pending' => 8, 'revenue' => 21000],
    ];

    $teamPerformance = [
        ['name' => 'John Doe', 'tasks' => 28, 'completed' => 24, 'performance' => 86],
        ['name' => 'Jane Smith', 'tasks' => 32, 'completed' => 30, 'performance' => 94],
        ['name' => 'Mike Johnson', 'tasks' => 25, 'completed' => 22, 'performance' => 88],
        ['name' => 'Sarah Wilson', 'tasks' => 30, 'completed' => 26, 'performance' => 87],
        ['name' => 'David Brown', 'tasks' => 22, 'completed' => 20, 'performance' => 91],
    ];

    $projectStats = [
        ['project' => 'Website Redesign', 'progress' => 85, 'status' => 'On Track', 'deadline' => '2025-12-15'],
        ['project' => 'Mobile App', 'progress' => 62, 'status' => 'On Track', 'deadline' => '2026-01-20'],
        ['project' => 'API Integration', 'progress' => 45, 'status' => 'At Risk', 'deadline' => '2025-12-01'],
        ['project' => 'Database Migration', 'progress' => 92, 'status' => 'On Track', 'deadline' => '2025-11-30'],
    ];
?>

<section>
    <div class="lg:pl-64">
        <main class="py-10 px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <!-- Header -->
                <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h1 class="text-3xl font-bold mb-2" style="color: var(--text-primary);">Reports & Analytics</h1>
                        <p class="text-sm" style="color: var(--text-secondary);">Track performance and analyze your data</p>
                    </div>
                    <div class="flex gap-3">
                        <button class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium transition-all hover:opacity-90" style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);">
                            <i data-lucide="calendar" width="16" height="16"></i>
                            Last 6 Months
                        </button>
                        <button class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium transition-all hover:opacity-90" style="background-color: var(--accent-2); color: #ffffff;">
                            <i data-lucide="download" width="16" height="16"></i>
                            Export
                        </button>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="rounded-lg p-6 border transition-all hover:shadow-md" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 rounded-lg" style="background-color: var(--accent-1);">
                                <i data-lucide="trending-up" width="24" height="24" style="color: var(--text-primary);"></i>
                            </div>
                            <span class="text-xs px-2 py-1 rounded bg-green-500/20 text-green-600">+12.5%</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-1" style="color: var(--text-primary);">$98,500</h3>
                        <p class="text-sm" style="color: var(--text-secondary);">Total Revenue</p>
                    </div>

                    <div class="rounded-lg p-6 border transition-all hover:shadow-md" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 rounded-lg bg-blue-500/20">
                                <i data-lucide="check-circle" width="24" height="24" class="text-blue-500"></i>
                            </div>
                            <span class="text-xs px-2 py-1 rounded bg-blue-500/20 text-blue-600">+8.2%</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-1" style="color: var(--text-primary);">329</h3>
                        <p class="text-sm" style="color: var(--text-secondary);">Tasks Completed</p>
                    </div>

                    <div class="rounded-lg p-6 border transition-all hover:shadow-md" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 rounded-lg bg-purple-500/20">
                                <i data-lucide="users" width="24" height="24" class="text-purple-500"></i>
                            </div>
                            <span class="text-xs px-2 py-1 rounded bg-purple-500/20 text-purple-600">+5.1%</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-1" style="color: var(--text-primary);">89%</h3>
                        <p class="text-sm" style="color: var(--text-secondary);">Team Performance</p>
                    </div>

                    <div class="rounded-lg p-6 border transition-all hover:shadow-md" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 rounded-lg bg-orange-500/20">
                                <i data-lucide="clock" width="24" height="24" class="text-orange-500"></i>
                            </div>
                            <span class="text-xs px-2 py-1 rounded bg-orange-500/20 text-orange-600">-3.2%</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-1" style="color: var(--text-primary);">77</h3>
                        <p class="text-sm" style="color: var(--text-secondary);">Pending Tasks</p>
                    </div>
                </div>

                <!-- Charts Row -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                    <!-- Monthly Performance -->
                    <div class="rounded-lg border p-6" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-lg font-bold" style="color: var(--text-primary);">Monthly Performance</h2>
                            <button class="text-sm" style="color: var(--accent-2);">View Details</button>
                        </div>
                        <div class="space-y-4">
                            <?php foreach ($monthlyStats as $stat): 
                                $total = $stat['completed'] + $stat['pending'];
                                $percentage = ($stat['completed'] / $total) * 100;
                            ?>
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm font-medium" style="color: var(--text-primary);"><?php echo $stat['month']; ?></span>
                                    <span class="text-xs" style="color: var(--text-secondary);"><?php echo $stat['completed']; ?>/<?php echo $total; ?></span>
                                </div>
                                <div class="w-full h-2 rounded-full" style="background-color: var(--bg-primary);">
                                    <div class="h-2 rounded-full transition-all" style="width: <?php echo $percentage; ?>%; background-color: var(--accent-2);"></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Revenue Chart -->
                    <div class="rounded-lg border p-6" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-lg font-bold" style="color: var(--text-primary);">Revenue Overview</h2>
                            <button class="text-sm" style="color: var(--accent-2);">View Details</button>
                        </div>
                        <div class="flex items-end justify-between h-48 gap-2">
                            <?php 
                            $maxRevenue = max(array_column($monthlyStats, 'revenue'));
                            foreach ($monthlyStats as $stat): 
                                $height = ($stat['revenue'] / $maxRevenue) * 100;
                            ?>
                            <div class="flex-1 flex flex-col items-center gap-2">
                                <div class="w-full rounded-t-lg transition-all hover:opacity-80 cursor-pointer" 
                                     style="height: <?php echo $height; ?>%; background-color: var(--accent-2);"
                                     title="$<?php echo number_format($stat['revenue']); ?>">
                                </div>
                                <span class="text-xs" style="color: var(--text-secondary);"><?php echo $stat['month']; ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Team Performance -->
                <div class="rounded-lg border p-6 mb-6" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-bold" style="color: var(--text-primary);">Team Performance</h2>
                        <button class="text-sm" style="color: var(--accent-2);">View All</button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr style="border-bottom: 1px solid var(--border-color);">
                                    <th class="text-left py-3 px-4 text-sm font-semibold" style="color: var(--text-primary);">Team Member</th>
                                    <th class="text-left py-3 px-4 text-sm font-semibold" style="color: var(--text-primary);">Total Tasks</th>
                                    <th class="text-left py-3 px-4 text-sm font-semibold" style="color: var(--text-primary);">Completed</th>
                                    <th class="text-left py-3 px-4 text-sm font-semibold" style="color: var(--text-primary);">Performance</th>
                                    <th class="text-left py-3 px-4 text-sm font-semibold" style="color: var(--text-primary);">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($teamPerformance as $member): ?>
                                <tr class="hover:opacity-80 transition-opacity" style="border-bottom: 1px solid var(--border-color);">
                                    <td class="py-4 px-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-semibold" style="background-color: var(--accent-1); color: var(--text-primary);">
                                                <?php echo strtoupper(substr($member['name'], 0, 2)); ?>
                                            </div>
                                            <span class="text-sm font-medium" style="color: var(--text-primary);"><?php echo $member['name']; ?></span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4 text-sm" style="color: var(--text-primary);"><?php echo $member['tasks']; ?></td>
                                    <td class="py-4 px-4 text-sm" style="color: var(--text-primary);"><?php echo $member['completed']; ?></td>
                                    <td class="py-4 px-4">
                                        <div class="flex items-center gap-2">
                                            <div class="flex-1 h-2 rounded-full" style="background-color: var(--bg-primary); max-width: 100px;">
                                                <div class="h-2 rounded-full" style="width: <?php echo $member['performance']; ?>%; background-color: var(--accent-2);"></div>
                                            </div>
                                            <span class="text-sm font-medium" style="color: var(--text-primary);"><?php echo $member['performance']; ?>%</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">
                                        <?php if ($member['performance'] >= 90): ?>
                                        <span class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs font-medium bg-green-500/20 text-green-600">
                                            <i data-lucide="trending-up" width="12" height="12"></i>
                                            Excellent
                                        </span>
                                        <?php else: ?>
                                        <span class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs font-medium bg-blue-500/20 text-blue-600">
                                            <i data-lucide="check" width="12" height="12"></i>
                                            Good
                                        </span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Project Status -->
                <div class="rounded-lg border p-6" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-bold" style="color: var(--text-primary);">Project Status</h2>
                        <button class="text-sm" style="color: var(--accent-2);">View All</button>
                    </div>
                    <div class="space-y-4">
                        <?php foreach ($projectStats as $project): ?>
                        <div class="p-4 rounded-lg border transition-all hover:shadow-md" style="background-color: var(--bg-primary); border-color: var(--border-color);">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <h3 class="text-sm font-semibold mb-1" style="color: var(--text-primary);"><?php echo $project['project']; ?></h3>
                                    <div class="flex items-center gap-2 text-xs" style="color: var(--text-secondary);">
                                        <i data-lucide="calendar" width="12" height="12"></i>
                                        <span>Due: <?php echo date('M j, Y', strtotime($project['deadline'])); ?></span>
                                    </div>
                                </div>
                                <?php if ($project['status'] === 'On Track'): ?>
                                <span class="px-2 py-1 rounded text-xs font-medium bg-green-500/20 text-green-600">On Track</span>
                                <?php else: ?>
                                <span class="px-2 py-1 rounded text-xs font-medium bg-orange-500/20 text-orange-600">At Risk</span>
                                <?php endif; ?>
                            </div>
                            <div class="w-full h-2 rounded-full" style="background-color: var(--bg-secondary);">
                                <div class="h-2 rounded-full transition-all" style="width: <?php echo $project['progress']; ?>%; background-color: <?php echo $project['status'] === 'On Track' ? 'var(--accent-2)' : '#f97316'; ?>;"></div>
                            </div>
                            <div class="mt-2 text-xs text-right" style="color: var(--text-secondary);"><?php echo $project['progress']; ?>% Complete</div>
                        </div>
                        <?php endforeach; ?>
                    </div>
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