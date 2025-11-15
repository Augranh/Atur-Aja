<?php
    include(__DIR__ . '/../../includes/components/dashboard/header.php');
?>

<?php
    include(__DIR__ . '/../../includes/components/dashboard/sidebar.php');
?>

<div class="lg:pl-64">
    <main class="py-10 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <h1 class="text-3xl font-bold text-text-primary mb-6">Hi, <span id="dashboard-user-name">User</span>!</h1>
        </div>
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
</script>