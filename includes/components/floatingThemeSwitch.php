<div>
    <button id="theme-toggle" class="fixed bottom-5 right-5 z-50 rounded-full p-3 shadow-lg transition" style="background-color: var(--bg-secondary);" onmouseover="this.style.backgroundColor='var(--accent-1)'" onmouseout="this.style.backgroundColor='var(--bg-secondary)'">
        <i id="theme-toggle-light-icon" data-lucide="sun" class="hidden h-6 w-6" style="color: var(--accent-2);"></i>
        <i id="theme-toggle-dark-icon" data-lucide="moon" class="hidden h-6 w-6" style="color: var(--text-primary);"></i>
    </button>
</div>

<script>
    lucide.createIcons();

    const themeToggleBtn = document.getElementById('theme-toggle');
    const lightIcon = document.getElementById('theme-toggle-light-icon');
    const darkIcon = document.getElementById('theme-toggle-dark-icon');

    if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
        darkIcon.classList.remove('hidden');
    } else {
        lightIcon.classList.remove('hidden');
    }

    themeToggleBtn.addEventListener('click', () => {
        lightIcon.classList.toggle('hidden');
        darkIcon.classList.toggle('hidden');

        // Toggle tema
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    });
</script>