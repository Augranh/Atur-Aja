<?php
    include('../../includes/components/dashboard/header.php');
?>

<?php
    include('../../includes/components/dashboard/sidebar.php');
?>

<section>
    <div class="lg:pl-64">
        <main class="py-10 px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-4xl">
                <!-- Header -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold mb-2" style="color: var(--text-primary);">Settings</h1>
                    <p class="text-sm" style="color: var(--text-secondary);">Manage your account settings and preferences</p>
                </div>

                <!-- Tabs -->
                <div class="mb-6 flex gap-2" style="border-bottom: 2px solid var(--border-color);">
                    <button class="px-4 py-3 text-sm font-medium transition-all -mb-0.5" style="color: var(--accent-2); border-bottom: 2px solid var(--accent-2);">
                        Profile
                    </button>
                    <button class="px-4 py-3 text-sm font-medium transition-all hover:opacity-80" style="color: var(--text-secondary);">
                        Account
                    </button>
                    <button class="px-4 py-3 text-sm font-medium transition-all hover:opacity-80" style="color: var(--text-secondary);">
                        Notifications
                    </button>
                    <button class="px-4 py-3 text-sm font-medium transition-all hover:opacity-80" style="color: var(--text-secondary);">
                        Security
                    </button>
                    <button class="px-4 py-3 text-sm font-medium transition-all hover:opacity-80" style="color: var(--text-secondary);">
                        Appearance
                    </button>
                </div>

                <div class="space-y-6">
                    <!-- Profile Information -->
                    <div class="rounded-lg border p-6" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-bold" style="color: var(--text-primary);">Profile Information</h2>
                            <button class="text-sm font-medium transition-all hover:opacity-80" style="color: var(--accent-2);">
                                Edit
                            </button>
                        </div>

                        <div class="space-y-6">
                            <!-- Avatar -->
                            <div class="flex items-center gap-6">
                                <div class="w-20 h-20 rounded-full flex items-center justify-center text-2xl font-bold" style="background-color: var(--accent-1); color: var(--text-primary);" id="user-avatar">
                                    JD
                                </div>
                                <div>
                                    <button class="px-4 py-2 rounded-lg text-sm font-medium transition-all hover:opacity-90 mb-2" style="background-color: var(--accent-2); color: #ffffff;">
                                        <i data-lucide="upload" width="14" height="14" class="inline mr-1"></i>
                                        Upload Photo
                                    </button>
                                    <p class="text-xs" style="color: var(--text-secondary);">JPG, PNG or GIF. Max size 2MB</p>
                                </div>
                            </div>

                            <!-- Form Fields -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium mb-2" style="color: var(--text-primary);">First Name</label>
                                    <input type="text" value="John" class="w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 transition-all" style="background-color: var(--bg-primary); color: var(--text-primary); border: 1px solid var(--border-color);">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2" style="color: var(--text-primary);">Last Name</label>
                                    <input type="text" value="Doe" class="w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 transition-all" style="background-color: var(--bg-primary); color: var(--text-primary); border: 1px solid var(--border-color);">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2" style="color: var(--text-primary);">Email Address</label>
                                <input type="email" value="john.doe@example.com" class="w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 transition-all" style="background-color: var(--bg-primary); color: var(--text-primary); border: 1px solid var(--border-color);">
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2" style="color: var(--text-primary);">Username</label>
                                <input type="text" value="johndoe" class="w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 transition-all" style="background-color: var(--bg-primary); color: var(--text-primary); border: 1px solid var(--border-color);">
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2" style="color: var(--text-primary);">Bio</label>
                                <textarea rows="3" class="w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 transition-all" style="background-color: var(--bg-primary); color: var(--text-primary); border: 1px solid var(--border-color);">Full Stack Developer passionate about creating amazing web experiences.</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Account Settings -->
                    <div class="rounded-lg border p-6" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                        <h2 class="text-xl font-bold mb-6" style="color: var(--text-primary);">Account Settings</h2>

                        <div class="space-y-4">
                            <div class="flex items-center justify-between py-3" style="border-bottom: 1px solid var(--border-color);">
                                <div class="flex items-center gap-3">
                                    <div class="p-2 rounded-lg" style="background-color: var(--accent-1);">
                                        <i data-lucide="globe" width="18" height="18" style="color: var(--text-primary);"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium" style="color: var(--text-primary);">Language</p>
                                        <p class="text-xs" style="color: var(--text-secondary);">Select your preferred language</p>
                                    </div>
                                </div>
                                <select class="px-3 py-2 rounded-lg text-sm focus:outline-none focus:ring-2 transition-all" style="background-color: var(--bg-primary); color: var(--text-primary); border: 1px solid var(--border-color);">
                                    <option>English</option>
                                    <option>Indonesian</option>
                                    <option>Spanish</option>
                                </select>
                            </div>

                            <div class="flex items-center justify-between py-3" style="border-bottom: 1px solid var(--border-color);">
                                <div class="flex items-center gap-3">
                                    <div class="p-2 rounded-lg" style="background-color: var(--accent-1);">
                                        <i data-lucide="clock" width="18" height="18" style="color: var(--text-primary);"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium" style="color: var(--text-primary);">Timezone</p>
                                        <p class="text-xs" style="color: var(--text-secondary);">Set your local timezone</p>
                                    </div>
                                </div>
                                <select class="px-3 py-2 rounded-lg text-sm focus:outline-none focus:ring-2 transition-all" style="background-color: var(--bg-primary); color: var(--text-primary); border: 1px solid var(--border-color);">
                                    <option>UTC+7 Jakarta</option>
                                    <option>UTC+0 GMT</option>
                                    <option>UTC-5 EST</option>
                                </select>
                            </div>

                            <div class="flex items-center justify-between py-3">
                                <div class="flex items-center gap-3">
                                    <div class="p-2 rounded-lg" style="background-color: var(--accent-1);">
                                        <i data-lucide="calendar" width="18" height="18" style="color: var(--text-primary);"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium" style="color: var(--text-primary);">Date Format</p>
                                        <p class="text-xs" style="color: var(--text-secondary);">Choose date display format</p>
                                    </div>
                                </div>
                                <select class="px-3 py-2 rounded-lg text-sm focus:outline-none focus:ring-2 transition-all" style="background-color: var(--bg-primary); color: var(--text-primary); border: 1px solid var(--border-color);">
                                    <option>DD/MM/YYYY</option>
                                    <option>MM/DD/YYYY</option>
                                    <option>YYYY-MM-DD</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Notifications -->
                    <div class="rounded-lg border p-6" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                        <h2 class="text-xl font-bold mb-6" style="color: var(--text-primary);">Notifications</h2>

                        <div class="space-y-4">
                            <div class="flex items-center justify-between py-3" style="border-bottom: 1px solid var(--border-color);">
                                <div class="flex items-center gap-3">
                                    <div class="p-2 rounded-lg" style="background-color: var(--accent-1);">
                                        <i data-lucide="mail" width="18" height="18" style="color: var(--text-primary);"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium" style="color: var(--text-primary);">Email Notifications</p>
                                        <p class="text-xs" style="color: var(--text-secondary);">Receive updates via email</p>
                                    </div>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div class="w-11 h-6 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all" style="background-color: var(--accent-2);"></div>
                                </label>
                            </div>

                            <div class="flex items-center justify-between py-3" style="border-bottom: 1px solid var(--border-color);">
                                <div class="flex items-center gap-3">
                                    <div class="p-2 rounded-lg" style="background-color: var(--accent-1);">
                                        <i data-lucide="bell" width="18" height="18" style="color: var(--text-primary);"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium" style="color: var(--text-primary);">Push Notifications</p>
                                        <p class="text-xs" style="color: var(--text-secondary);">Get browser notifications</p>
                                    </div>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div class="w-11 h-6 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all" style="background-color: var(--accent-2);"></div>
                                </label>
                            </div>

                            <div class="flex items-center justify-between py-3">
                                <div class="flex items-center gap-3">
                                    <div class="p-2 rounded-lg" style="background-color: var(--accent-1);">
                                        <i data-lucide="message-square" width="18" height="18" style="color: var(--text-primary);"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium" style="color: var(--text-primary);">SMS Notifications</p>
                                        <p class="text-xs" style="color: var(--text-secondary);">Receive text messages</p>
                                    </div>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer">
                                    <div class="w-11 h-6 rounded-full bg-gray-400 peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all"></div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Privacy & Security -->
                    <div class="rounded-lg border p-6" style="background-color: var(--bg-secondary); border-color: var(--border-color);">
                        <h2 class="text-xl font-bold mb-6" style="color: var(--text-primary);">Privacy & Security</h2>

                        <div class="space-y-4">
                            <button class="w-full flex items-center justify-between p-4 rounded-lg transition-all hover:opacity-90" style="background-color: var(--bg-primary); border: 1px solid var(--border-color);">
                                <div class="flex items-center gap-3">
                                    <i data-lucide="key" width="18" height="18" style="color: var(--accent-2);"></i>
                                    <span class="text-sm font-medium" style="color: var(--text-primary);">Change Password</span>
                                </div>
                                <i data-lucide="chevron-right" width="18" height="18" style="color: var(--text-secondary);"></i>
                            </button>

                            <button class="w-full flex items-center justify-between p-4 rounded-lg transition-all hover:opacity-90" style="background-color: var(--bg-primary); border: 1px solid var(--border-color);">
                                <div class="flex items-center gap-3">
                                    <i data-lucide="shield" width="18" height="18" style="color: var(--accent-2);"></i>
                                    <span class="text-sm font-medium" style="color: var(--text-primary);">Two-Factor Authentication</span>
                                </div>
                                <span class="text-xs px-2 py-1 rounded bg-green-500/20 text-green-600">Enabled</span>
                            </button>

                            <button class="w-full flex items-center justify-between p-4 rounded-lg transition-all hover:opacity-90" style="background-color: var(--bg-primary); border: 1px solid var(--border-color);">
                                <div class="flex items-center gap-3">
                                    <i data-lucide="smartphone" width="18" height="18" style="color: var(--accent-2);"></i>
                                    <span class="text-sm font-medium" style="color: var(--text-primary);">Connected Devices</span>
                                </div>
                                <i data-lucide="chevron-right" width="18" height="18" style="color: var(--text-secondary);"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Danger Zone -->
                    <div class="rounded-lg border border-red-500/30 p-6" style="background-color: var(--bg-secondary);">
                        <h2 class="text-xl font-bold mb-2 text-red-600">Danger Zone</h2>
                        <p class="text-sm mb-6" style="color: var(--text-secondary);">These actions are irreversible. Please be careful.</p>

                        <div class="space-y-3">
                            <button class="w-full px-4 py-3 rounded-lg text-sm font-medium transition-all hover:opacity-90 border border-red-500/30 text-red-600 hover:bg-red-500/10">
                                Deactivate Account
                            </button>
                            <button class="w-full px-4 py-3 rounded-lg text-sm font-medium transition-all hover:opacity-90 bg-red-600 text-white hover:bg-red-700">
                                Delete Account
                            </button>
                        </div>
                    </div>

                    <!-- Save Button -->
                    <div class="flex justify-end gap-3">
                        <button class="px-6 py-3 rounded-lg text-sm font-medium transition-all hover:opacity-90" style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);">
                            Cancel
                        </button>
                        <button class="px-6 py-3 rounded-lg text-sm font-medium transition-all hover:opacity-90" style="background-color: var(--accent-2); color: #ffffff;">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</section>

<script>
    setTimeout(() => {
        if (window.currentUser) {
            const displayName = window.currentUser.username || window.currentUser.email.split('@')[0];
            const firstLetter = displayName.charAt(0).toUpperCase();
            document.getElementById('user-avatar').textContent = firstLetter;
        } else {
            document.getElementById('user-avatar').textContent = 'U';
        }
    }, 500);

    // Initialize Lucide icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
</script>
