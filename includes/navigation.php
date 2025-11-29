<?php
  $current_path = $_SERVER['PHP_SELF'];
  $base_path = '';
  
  switch (true) {
      case (strpos($current_path, '/pages/auth/') !== false):
      case (strpos($current_path, '/pages/dashboard/') !== false):
          $base_path = '../';
          break;
      case (strpos($current_path, '/pages/index.php') !== false):
          $base_path = '';
          break;
      default:
          $base_path = '';
          break;
  }
  
  $navigation_items = [
      ["label" => "Features", "href" => $base_path . "index.php#features"],
      ["label" => "Solutions", "href" => $base_path . "index.php#solution"],
      ["label" => "Plans", "href" => $base_path . "index.php#plans"],
      ["label" => "Resources", "href" => $base_path . "index.php#resources"],
      ["label" => "Contacts", "href" => $base_path . "index.php?page=contacts"],
      ["label" => "About", "href" => $base_path . "index.php?page=about"],
  ];
?>

<nav class="navbar sticky top-0 z-50 border-b backdrop-blur-md" style="border-color: var(--border-color); background-color: color-mix(in srgb, var(--bg-primary) 80%, transparent);">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
      <div class="logo">
        <a href="<?= $base_path ?>index.php" class="text-xl font-bold" style="color: var(--text-primary);">
          Atur Aja
        </a>
      </div>      <div class="hidden items-center gap-8 md:flex">
        <ul class="flex gap-6 text-sm font-medium" style="color: var(--text-secondary);">
          
          <?php foreach ($navigation_items as $item): ?>
            <li>
              <a href="<?= $item['href'] ?>" 
                 class="transition"
                 style="color: var(--text-secondary);" 
                 onmouseover="this.style.color='var(--accent-2)'" 
                 onmouseout="this.style.color='var(--text-secondary)'">
                <?= $item['label'] ?>
              </a>
            </li>
          <?php endforeach; ?>
          </ul>
        <div class="flex gap-4">
          <a href="<?= $base_path ?>index.php?page=login" class="btn-login px-4 py-2 text-sm font-medium transition" style="color: var(--text-secondary);" onmouseover="this.style.color='var(--accent-2)'" onmouseout="this.style.color='var(--text-secondary)'">Login</a>
          <a href="<?= $base_path ?>index.php?page=register" class="btn-register rounded-lg px-4 py-2 text-sm font-medium text-white transition" style="background-color: var(--accent-1);" onmouseover="this.style.backgroundColor='var(--accent-2)'" onmouseout="this.style.backgroundColor='var(--accent-1)'">Register</a>
        </div>
      </div>
      <div class="flex items-center md:hidden">
        <button id="mobile-menu-btn" class="focus:outline-none" style="color: var(--text-secondary);" onmouseover="this.style.color='var(--accent-2)'" onmouseout="this.style.color='var(--text-secondary)'">
          <i data-lucide="menu" class="h-6 w-6"></i>
        </button>
      </div>
    </div>
  </div>

  <div id="mobile-menu" class="hidden border-b md:hidden" style="border-color: var(--border-color); background-color: var(--bg-primary);">
    <div class="flex flex-col space-y-1 px-4 pt-2 pb-4">

      <?php foreach ($navigation_items as $item): ?>
        <a href="<?= $item['href'] ?>" 
           class="block rounded-md px-3 py-2 text-base font-medium transition" 
           style="color: var(--text-secondary);" 
           onmouseover="this.style.backgroundColor='var(--bg-secondary)'; this.style.color='var(--accent-2)'" 
           onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--text-secondary)'">
          <?= $item['label'] ?>
        </a>
      <?php endforeach; ?>
      <div class="mt-4 flex flex-col gap-3 pt-4" style="border-top: 1px solid var(--border-color);">
        <a href="<?= $base_path ?>index.php?page=login" class="block rounded-lg px-4 py-2 text-center text-base font-medium transition" style="border: 1px solid var(--border-color); color: var(--text-secondary);" onmouseover="this.style.backgroundColor='var(--bg-secondary)'" onmouseout="this.style.backgroundColor='transparent'">Login</a>
        <a href="<?= $base_path ?>index.php?page=register" class="block rounded-lg px-4 py-2 text-center text-base font-medium text-white transition" style="background-color: var(--accent-1);" onmouseover="this.style.backgroundColor='var(--accent-2)'" onmouseout="this.style.backgroundColor='var(--accent-1)'">Register</a>
      </div>
    </div>
  </div>
  </nav>

<script>
  lucide.createIcons();
  const btn = document.getElementById('mobile-menu-btn');
  const menu = document.getElementById('mobile-menu');

  if (btn && menu) {
    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
  }
</script>