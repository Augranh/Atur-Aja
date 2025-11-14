<footer style="background-color: var(--bg-primary);">
        <div class="container mx-auto px-4 py-8" style="border-top: 1px solid var(--border-color);">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm" style="color: var(--text-secondary);">
                    &copy; 2024 Atur Aja. All rights reserved.
                </p>
                
                <div class="flex gap-6 mt-4 md:mt-0">
                    <?php foreach ($navigation_items as $item): ?>
                        <a href="<?= $item['href'] ?>" 
                           class="transition" 
                           style="color: var(--text-secondary);" 
                           onmouseover="this.style.color='var(--accent-2)'" 
                           onmouseout="this.style.color='var(--text-secondary)'">
                            <?= $item['label'] ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                </div>
        </div>
    </footer>
    </body>
</html> 