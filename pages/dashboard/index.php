<?php
    include('../../includes/components/dashboard/header.php');
?>

<?php
    include('../../includes/components/dashboard/sidebar.php');
?>

<div class="lg:pl-64">
    <main class="py-10 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <h1 class="text-3xl font-bold mb-6" style="color: var(--text-primary);">Hi, <span id="dashboard-user-name">User</span>!</h1>
        </div>
        <div class="mx-auto max-w-7xl grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <div class="rounded-lg p-6 shadow-sm border transition-all hover:shadow-md" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium mb-1" style="color: var(--text-secondary);">Total Tasks</p>
                        <h3 class="text-3xl font-bold" style="color: var(--text-primary);">24</h3>
                    </div>
                    <div class="rounded-full p-3" style="background-color: var(--accent-1);">
                        <i data-lucide="clipboard-list" style="color: var(--text-primary);" width="24" height="24"></i>
                    </div>
                </div>
            </div>
            
            <div class="rounded-lg p-6 shadow-sm border transition-all hover:shadow-md" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium mb-1" style="color: var(--text-secondary);">In Progress</p>
                        <h3 class="text-3xl font-bold" style="color: var(--text-primary);">12</h3>
                    </div>
                    <div class="rounded-full p-3" style="background-color: var(--accent-2);">
                        <i data-lucide="loader" style="color: var(--text-primary);" width="24" height="24"></i>
                    </div>
                </div>
            </div>
            
            <div class="rounded-lg p-6 shadow-sm border transition-all hover:shadow-md" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium mb-1" style="color: var(--text-secondary);">Completed</p>
                        <h3 class="text-3xl font-bold" style="color: var(--text-primary);">8</h3>
                    </div>
                    <div class="rounded-full p-3" style="background-color: var(--accent-1);">
                        <i data-lucide="check-circle" style="color: var(--text-primary);" width="24" height="24"></i>
                    </div>
                </div>
            </div>
            
            <div class="rounded-lg p-6 shadow-sm border transition-all hover:shadow-md" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium mb-1" style="color: var(--text-secondary);">Overdue</p>
                        <h3 class="text-3xl font-bold" style="color: var(--text-primary);">4</h3>
                    </div>
                    <div class="rounded-full p-3" style="background-color: var(--accent-2);">
                        <i data-lucide="alert-circle" style="color: var(--text-primary);" width="24" height="24"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto max-w-7xl space-y-6">
            <?php
                include('../../includes/components/dashboard/todo.php');
                include('../../includes/components/floatingThemeSwitch.php');
            ?>
        </div>
        <?php include('../../includes/components/floatingThemeSwitch.php'); ?>
    </main>
</div>

<script>
    setTimeout(() => {
        if (window.currentUser) {
            document.getElementById('dashboard-user-name').textContent = window.currentUser.username || window.currentUser.email.split('@')[0];
            document.getElementById('dashboard-user-email').textContent = window.currentUser.email;
            document.getElementById('dashboard-user-username').textContent = window.currentUser.username || 'Not set';
        }
    }, 500);
    
    // Initialize Lucide icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
</script>