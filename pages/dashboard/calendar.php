<?php
    include('../../includes/components/dashboard/header.php');
?>

<?php
    include('../../includes/components/dashboard/sidebar.php');
?>

<?php
    // Get current month and year
    $currentMonth = date('n');
    $currentYear = date('Y');
    $currentDay = date('j');
    
    // Events data
    $events = [
        '2025-11-25' => [
            ['time' => '09:00', 'title' => 'Team Standup Meeting', 'type' => 'meeting', 'color' => 'blue'],
            ['time' => '14:00', 'title' => 'Client Presentation', 'type' => 'presentation', 'color' => 'purple'],
        ],
        '2025-11-26' => [
            ['time' => '10:30', 'title' => 'Code Review Session', 'type' => 'meeting', 'color' => 'green'],
            ['time' => '15:00', 'title' => 'Sprint Planning', 'type' => 'planning', 'color' => 'orange'],
        ],
        '2025-11-27' => [
            ['time' => '11:00', 'title' => 'Design Workshop', 'type' => 'workshop', 'color' => 'pink'],
        ],
        '2025-11-28' => [
            ['time' => '09:30', 'title' => 'Product Demo', 'type' => 'demo', 'color' => 'blue'],
            ['time' => '13:00', 'title' => 'Team Lunch', 'type' => 'social', 'color' => 'yellow'],
            ['time' => '16:00', 'title' => 'Security Audit Meeting', 'type' => 'meeting', 'color' => 'red'],
        ],
        '2025-11-29' => [
            ['time' => '10:00', 'title' => 'Performance Review', 'type' => 'review', 'color' => 'purple'],
        ],
        '2025-12-01' => [
            ['time' => '14:00', 'title' => 'Monthly Review', 'type' => 'review', 'color' => 'blue'],
        ],
    ];

    // Calendar helper functions
    function getFirstDayOfMonth($month, $year) {
        return date('N', mktime(0, 0, 0, $month, 1, $year));
    }

    function getDaysInMonth($month, $year) {
        return date('t', mktime(0, 0, 0, $month, 1, $year));
    }

    $firstDay = getFirstDayOfMonth($currentMonth, $currentYear);
    $daysInMonth = getDaysInMonth($currentMonth, $currentYear);
    $monthName = date('F Y', mktime(0, 0, 0, $currentMonth, 1, $currentYear));
?>

<section>
    <div class="lg:pl-64">
        <main class="py-10 px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <!-- Header -->
                <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h1 class="text-3xl font-bold mb-2" style="color: var(--text-primary);">Calendar</h1>
                        <p class="text-sm" style="color: var(--text-secondary);">Manage your schedule and events</p>
                    </div>
                    <div class="flex gap-3">
                        <button class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium transition-all hover:opacity-90" style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);">
                            <i data-lucide="filter" width="16" height="16"></i>
                            Filter
                        </button>
                        <button class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium transition-all hover:opacity-90" style="background-color: var(--accent-2); color: #ffffff;">
                            <i data-lucide="plus" width="16" height="16"></i>
                            New Event
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Calendar -->
                    <div class="lg:col-span-2">
                        <div class="rounded-lg border overflow-hidden" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                            <!-- Calendar Header -->
                            <div class="px-6 py-4 flex items-center justify-between" style="border-bottom: 1px solid var(--border-color);">
                                <h2 class="text-xl font-bold" style="color: var(--text-primary);"><?php echo $monthName; ?></h2>
                                <div class="flex gap-2">
                                    <button class="p-2 rounded-lg hover:opacity-80 transition-opacity" style="background-color: var(--bg-primary); color: var(--text-primary);">
                                        <i data-lucide="chevron-left" width="18" height="18"></i>
                                    </button>
                                    <button class="p-2 rounded-lg hover:opacity-80 transition-opacity" style="background-color: var(--bg-primary); color: var(--text-primary);">
                                        <i data-lucide="chevron-right" width="18" height="18"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Calendar Grid -->
                            <div class="p-4">
                                <!-- Days of week -->
                                <div class="grid grid-cols-7 gap-2 mb-2">
                                    <?php 
                                    $daysOfWeek = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                                    foreach ($daysOfWeek as $day): 
                                    ?>
                                    <div class="text-center text-xs font-semibold py-2" style="color: var(--text-secondary);">
                                        <?php echo $day; ?>
                                    </div>
                                    <?php endforeach; ?>
                                </div>

                                <!-- Calendar days -->
                                <div class="grid grid-cols-7 gap-2">
                                    <?php
                                    // Empty cells before first day
                                    for ($i = 1; $i < $firstDay; $i++) {
                                        echo '<div class="aspect-square"></div>';
                                    }

                                    // Days of the month
                                    for ($day = 1; $day <= $daysInMonth; $day++) {
                                        $date = sprintf('%04d-%02d-%02d', $currentYear, $currentMonth, $day);
                                        $isToday = ($day == $currentDay);
                                        $hasEvents = isset($events[$date]);
                                        
                                        echo '<div class="aspect-square p-1">';
                                        echo '<div class="h-full rounded-lg p-2 cursor-pointer transition-all hover:opacity-90 ' . 
                                             ($isToday ? 'ring-2' : '') . '" ' .
                                             'style="background-color: ' . ($isToday ? 'var(--accent-2)' : 'var(--bg-primary)') . '; ' .
                                             'color: ' . ($isToday ? '#ffffff' : 'var(--text-primary)') . '; ' .
                                             ($isToday ? 'ring-color: var(--accent-2);' : '') . '">';
                                        echo '<div class="text-sm font-medium">' . $day . '</div>';
                                        if ($hasEvents) {
                                            echo '<div class="mt-1 flex flex-wrap gap-1">';
                                            foreach (array_slice($events[$date], 0, 2) as $event) {
                                                echo '<div class="w-1.5 h-1.5 rounded-full bg-' . $event['color'] . '-500"></div>';
                                            }
                                            echo '</div>';
                                        }
                                        echo '</div>';
                                        echo '</div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <!-- Legend -->
                        <div class="mt-4 rounded-lg p-4 border" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                            <h3 class="text-sm font-semibold mb-3" style="color: var(--text-primary);">Event Types</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-blue-500"></div>
                                    <span class="text-xs" style="color: var(--text-secondary);">Meeting</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-purple-500"></div>
                                    <span class="text-xs" style="color: var(--text-secondary);">Presentation</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                    <span class="text-xs" style="color: var(--text-secondary);">Review</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-orange-500"></div>
                                    <span class="text-xs" style="color: var(--text-secondary);">Planning</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Upcoming Events -->
                    <div class="lg:col-span-1">
                        <div class="rounded-lg border" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                            <div class="px-6 py-4" style="border-bottom: 1px solid var(--border-color);">
                                <h2 class="text-lg font-bold" style="color: var(--text-primary);">Upcoming Events</h2>
                            </div>
                            <div class="p-4 space-y-3 max-h-[600px] overflow-y-auto">
                                <?php
                                $todayDate = date('Y-m-d');
                                $displayedEvents = [];
                                
                                foreach ($events as $date => $dayEvents) {
                                    if ($date >= $todayDate) {
                                        foreach ($dayEvents as $event) {
                                            $displayedEvents[] = ['date' => $date, 'event' => $event];
                                        }
                                    }
                                }
                                
                                usort($displayedEvents, function($a, $b) {
                                    return strcmp($a['date'] . $a['event']['time'], $b['date'] . $b['event']['time']);
                                });

                                foreach (array_slice($displayedEvents, 0, 10) as $item):
                                    $date = $item['date'];
                                    $event = $item['event'];
                                    $formattedDate = date('D, M j', strtotime($date));
                                ?>
                                <div class="p-3 rounded-lg border transition-all hover:shadow-md" style="background-color: var(--bg-primary); border-color: var(--border-color);">
                                    <div class="flex items-start gap-3">
                                        <div class="flex-shrink-0 w-10 h-10 rounded-lg flex items-center justify-center bg-<?php echo $event['color']; ?>-500/20">
                                            <i data-lucide="calendar" width="18" height="18" class="text-<?php echo $event['color']; ?>-500"></i>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h4 class="text-sm font-semibold mb-1 truncate" style="color: var(--text-primary);">
                                                <?php echo htmlspecialchars($event['title']); ?>
                                            </h4>
                                            <div class="flex items-center gap-2 text-xs" style="color: var(--text-secondary);">
                                                <i data-lucide="clock" width="12" height="12"></i>
                                                <span><?php echo $event['time']; ?></span>
                                            </div>
                                            <div class="text-xs mt-1" style="color: var(--text-secondary);">
                                                <?php echo $formattedDate; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
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