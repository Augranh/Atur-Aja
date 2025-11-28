<?php
    $current_path = $_SERVER['PHP_SELF'];
    $base_path = '';

    if (strpos($current_path, '/pages/auth/') !== false) {
        $base_path = '../../';
    }
    elseif (strpos($current_path, '/pages/') !== false) {
        $base_path = '../';
    }
    else {
        $base_path = '';
    }

    $navigation_items = [
        [
            'label' => 'Dashboard',
            'url'   => $base_path . 'dashboard/index.php',
            'icon'  => 'layout-dashboard',
        ],
        [
            'label' => 'My Tasks',
            'url'   => $base_path . 'dashboard/tasks.php',
            'icon'  => 'clipboard-check',
        ],
        [
            'label' => 'Projects',
            'url'   => $base_path . 'dashboard/projects.php',
            'icon'  => 'folder-kanban',
        ],
        [
            'label' => 'Team',
            'url'   => $base_path . 'dashboard/team.php',
            'icon'  => 'users',
        ],
    ];
?>

<div id="sidebar-dashboard" class="hidden lg:flex lg:flex-col lg:w-64 lg:fixed lg:inset-y-0 lg:border-r lg:border-border-color lg:bg-bg-primary lg:px-6 lg:py-4 transition-transform duration-300 z-40">
    <nav class="mt-6 flex-1">
        <ul class="space-y-2">
            <li>
                <a href="<?php echo $base_path; ?>dashboard/index.php" class="flex items-center px-3 py-2 rounded-md text-lg font-bold text-text-primary hover:bg-bg-secondary hover:text-text-primary transition">
                    Atur Aja
                </a>
            </li>
            <?php foreach ( $navigation_items as $item ) : ?>
                <li>
                    <a href="<?php echo htmlspecialchars($item['url']); ?>" class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-text-primary hover:bg-bg-secondary hover:text-text-primary transition">
                        <i data-lucide="<?php echo htmlspecialchars($item['icon']); ?>" class="w-5 h-5 mr-3"></i>
                        <?php echo htmlspecialchars($item['label']); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <!-- User Profile Section -->
    <div class="pt-4 mt-4">
        <a href="<?php echo $base_path; ?>dashboard/profile.php" class="flex items-center px-3 py-2 rounded-md hover:bg-bg-secondary transition">
            <div class="w-8 h-8 rounded-full bg-accent-1 flex items-center justify-center text-text-primary font-semibold" id="user-avatar">
                U
            </div>
            <div class="ml-3 flex-1">
                <p class="text-sm font-medium text-text-primary" id="user-display-name">Loading...</p>
                <p class="text-xs text-text-secondary">View Profile</p>
            </div>
        </a>
    </div>
</div>
</button>

<script>
    lucide.createIcons();
    
    function loadUserProfile() {
        const loggedInEmail = localStorage.getItem('loggedInUserEmail');
        
        if (!loggedInEmail) {
            window.location.href = '../auth/login.php';
            return;
        }
        
        fetch('../../includes/components/form/data/users.json')
            .then(response => response.json())
            .then(users => {
                const currentUser = users.find(user => user.email === loggedInEmail);
                
                if (currentUser) {
                    const displayName = currentUser.username || currentUser.email.split('@')[0];
                    document.getElementById('user-display-name').textContent = displayName;
                    
                    const firstLetter = displayName.charAt(0).toUpperCase();
                    document.getElementById('user-avatar').textContent = firstLetter;
                    
                    window.currentUser = currentUser;
                } else {
                    document.getElementById('user-display-name').textContent = 'User';
                }
            })
            .catch(error => {
                console.error('Error loading user profile:', error);
                document.getElementById('user-display-name').textContent = loggedInEmail.split('@')[0];
            });
    }
    
    loadUserProfile();
</script>