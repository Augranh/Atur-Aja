<?php
    $todo_data = [
        [
            'task' => 'Finish UI Design',
            'due_date' => '2025-11-20',
            'priority' => 'High',
            'status' => 'Completed'
        ],
        [
            'task' => 'Create Database Schema',
            'due_date' => '2025-11-15',
            'priority' => 'High',
            'status' => 'Completed'
        ],
        [
            'task' => 'Setup Development Environment',
            'due_date' => '2025-11-10',
            'priority' => 'Medium',
            'status' => 'Completed'
        ],
        [
            'task' => 'Design System Documentation',
            'due_date' => '2025-11-12',
            'priority' => 'Low',
            'status' => 'Completed'
        ],
        [
            'task' => 'User Research Analysis',
            'due_date' => '2025-11-14',
            'priority' => 'Medium',
            'status' => 'Completed'
        ],
        [
            'task' => 'Setup Git Repository',
            'due_date' => '2025-11-08',
            'priority' => 'High',
            'status' => 'Completed'
        ],
        [
            'task' => 'Create Project Wireframes',
            'due_date' => '2025-11-11',
            'priority' => 'Medium',
            'status' => 'Completed'
        ],
        [
            'task' => 'Team Kickoff Meeting',
            'due_date' => '2025-11-05',
            'priority' => 'Low',
            'status' => 'Completed'
        ],
        // In Progress tasks (12 total)
        [
            'task' => 'Implement Authentication',
            'due_date' => '2025-11-22',
            'priority' => 'High',
            'status' => 'In Progress'
        ],
        [
            'task' => 'Build Dashboard Components',
            'due_date' => '2025-11-23',
            'priority' => 'High',
            'status' => 'In Progress'
        ],
        [
            'task' => 'API Integration',
            'due_date' => '2025-11-24',
            'priority' => 'High',
            'status' => 'In Progress'
        ],
        [
            'task' => 'User Profile Page',
            'due_date' => '2025-11-25',
            'priority' => 'Medium',
            'status' => 'In Progress'
        ],
        [
            'task' => 'Notification System',
            'due_date' => '2025-11-26',
            'priority' => 'Medium',
            'status' => 'In Progress'
        ],
        [
            'task' => 'Search Functionality',
            'due_date' => '2025-11-27',
            'priority' => 'Medium',
            'status' => 'In Progress'
        ],
        [
            'task' => 'Data Visualization Charts',
            'due_date' => '2025-11-28',
            'priority' => 'Low',
            'status' => 'In Progress'
        ],
        [
            'task' => 'Email Templates',
            'due_date' => '2025-11-29',
            'priority' => 'Low',
            'status' => 'In Progress'
        ],
        [
            'task' => 'Settings Page Layout',
            'due_date' => '2025-11-30',
            'priority' => 'Medium',
            'status' => 'In Progress'
        ],
        [
            'task' => 'Mobile Responsive Design',
            'due_date' => '2025-12-01',
            'priority' => 'High',
            'status' => 'In Progress'
        ],
        [
            'task' => 'Form Validation Logic',
            'due_date' => '2025-12-02',
            'priority' => 'Medium',
            'status' => 'In Progress'
        ],
        [
            'task' => 'Loading States Implementation',
            'due_date' => '2025-12-03',
            'priority' => 'Low',
            'status' => 'In Progress'
        ],
        [
            'task' => 'Set Up Database',
            'due_date' => '2025-11-13',
            'priority' => 'High',
            'status' => 'Overdue'
        ],
        [
            'task' => 'Security Audit',
            'due_date' => '2025-11-14',
            'priority' => 'High',
            'status' => 'Overdue'
        ],
        [
            'task' => 'Performance Optimization',
            'due_date' => '2025-11-15',
            'priority' => 'Medium',
            'status' => 'Overdue'
        ],
        [
            'task' => 'Browser Compatibility Testing',
            'due_date' => '2025-11-16',
            'priority' => 'Medium',
            'status' => 'Overdue'
        ],
    ];

    $get_priority_class = function($priority) {
        switch (strtolower($priority)) {
            case 'high':
                return 'bg-black text-red-900 dark:bg-black dark:text-red-300';
            case 'medium':
                return 'bg-black text-yellow-900 dark:bg-black dark:text-yellow-300';
            case 'low':
                return 'bg-black text-green-900 dark:bg-black dark:text-green-300';
            default:
                return 'bg-black text-gray-900 dark:bg-black dark:text-gray-300';
        }
    };

    $choose_status_class = function($status) {
        switch (strtolower($status)) {
            case 'completed':
                return 'bg-black text-green-900 dark:bg-black dark:text-green-300';
            case 'in progress':
                return 'bg-black text-blue-900 dark:bg-black dark:text-blue-300';
            case 'overdue':
                return 'bg-black text-red-900 dark:bg-black dark:text-red-300';
            case 'not started':
                return 'bg-black text-gray-900 dark:bg-black dark:text-gray-300';
            default:
                return 'bg-black text-gray-900 dark:bg-black dark:text-gray-300';
        }
    };
?>

<div class="mx-auto">
  <div class="mb-6 flex items-center justify-between">
    <div>
      <h2 class="text-2xl font-semibold tracking-tight" style="color: var(--text-primary);">Task Dashboard</h2>
      <p class="text-sm mt-1" style="color: var(--text-secondary);">Manage and track your tasks</p>
    </div>
    <button class="inline-flex items-center gap-2 px-4 py-2 rounded-md text-sm font-medium transition-colors hover:opacity-90" style="background-color: var(--accent-2); color: var(--text-primary);">
      <i data-lucide="plus" width="16" height="16"></i>
      Add Section
    </button>
  </div>

  <div class="rounded-lg overflow-hidden" style="border: 1px solid var(--border-color); background-color: var(--bg-primary);">
    <!-- Table Header -->
    <div class="flex items-center px-4 py-3" style="background-color: var(--bg-secondary); border-bottom: 1px solid var(--border-color);">
      <div class="flex-1">
        <span class="text-sm font-semibold" style="color: var(--text-primary);">Task</span>
      </div>
      <div class="grid grid-cols-4 gap-4 flex-1">
        <span class="text-xs font-medium uppercase tracking-wider" style="color: var(--text-secondary);">Due Date</span>
        <span class="text-xs font-medium uppercase tracking-wider" style="color: var(--text-secondary);">Priority</span>
        <span class="text-xs font-medium uppercase tracking-wider" style="color: var(--text-secondary);">Status</span>
        <span class="text-xs font-medium uppercase tracking-wider" style="color: var(--text-secondary);">Action</span>
      </div>
    </div>

    <!-- Table Body -->
    <div>
      <?php foreach ($todo_data as $index => $todo): ?>
      <div class="flex items-center px-4 py-4 hover:opacity-90 transition-colors" style="background-color: var(--bg-primary); border-bottom: 1px solid var(--border-color);">
        <div class="flex-1">
          <div class="text-sm font-medium" style="color: var(--text-primary);">
            <?php echo htmlspecialchars($todo['task']); ?>
          </div>
        </div>
        <div class="grid grid-cols-4 gap-4 flex-1 items-center">
          <div class="text-sm" style="color: var(--text-secondary);">
            <?php echo htmlspecialchars($todo['due_date']); ?>
          </div>
          <div>
            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium <?php echo $get_priority_class($todo['priority']); ?>">
              <?php echo htmlspecialchars($todo['priority']); ?>
            </span>
          </div>
          <div>
            <span class="inline-flex items-center gap-1 px-2 py-1 rounded text-xs font-medium <?php echo $choose_status_class($todo['status']); ?>">
              <?php if (strtolower($todo['status']) === 'completed'): ?>
              <i data-lucide="check-circle" width="12" height="12"></i>
              <?php elseif (strtolower($todo['status']) === 'in progress'): ?>
              <i data-lucide="loader" width="12" height="12"></i>
              <?php endif; ?>
              <?php echo htmlspecialchars($todo['status']); ?>
            </span>
          </div>
          <div class="flex items-center gap-2">
            <button class="p-1 rounded hover:opacity-70 transition-opacity" style="color: var(--text-primary);">
              <i data-lucide="edit" width="16" height="16"></i>
            </button>
            <button class="p-1 rounded hover:opacity-70 transition-opacity" style="color: #dc2626;">
              <i data-lucide="trash-2" width="16" height="16"></i>
            </button>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<?php
    include('../includes/components/floatingThemeSwitch.php');
?>

<script>
  // Initialize Lucide icons
  if (typeof lucide !== 'undefined') {
    lucide.createIcons();
  }
</script>
