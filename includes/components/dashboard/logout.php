<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8" style="background-color: var(--bg-primary);">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <div class="flex justify-center mb-4">
      <div class="rounded-full p-4" style="background-color: var(--bg-secondary); border: 1px solid var(--border-color);">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: var(--accent-1);">
          <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
          <polyline points="16 17 21 12 16 7"></polyline>
          <line x1="21" y1="12" x2="9" y2="12"></line>
        </svg>
      </div>
    </div>
    <h2 class="mt-4 text-center text-2xl/9 font-bold tracking-tight" style="color: var(--text-primary);">Log Out</h2>
    <p class="mt-2 text-center text-sm" style="color: var(--text-secondary);">Are you sure you want to log out of your account?</p>
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
    <div class="space-y-4">
      <div>
        <button id="logout-btn" type="button" class="flex w-full justify-center rounded-md px-3 py-2.5 text-sm/6 font-semibold transition shadow-sm" style="background-color: var(--accent-1); color: var(--text-primary);" onmouseover="this.style.backgroundColor='var(--accent-2)'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 4px 6px -1px rgba(0, 0, 0, 0.1)';" onmouseout="this.style.backgroundColor='var(--accent-1)'; this.style.transform='translateY(0)'; this.style.boxShadow='';">
          Yes, Log Out
        </button>
      </div>
      
      <div>
        <a href="index.php" class="flex w-full justify-center rounded-md px-3 py-2.5 text-sm/6 font-semibold transition" style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);" onmouseover="this.style.backgroundColor='var(--bg-primary)'; this.style.borderColor='var(--accent-2)';" onmouseout="this.style.backgroundColor='var(--bg-secondary)'; this.style.borderColor='var(--border-color)';">
          Cancel
        </a>
      </div>
    </div>

    <p class="mt-10 text-center text-sm/6" style="color: var(--text-secondary);">
      You will be redirected to the login page.
    </p>
  </div>
</div>

<script>
  const logoutBtn = document.getElementById('logout-btn');

  logoutBtn.addEventListener('click', function() {
    localStorage.removeItem('loggedInUserEmail');
    
    window.location.href = '../index.php?page=login';
  });
</script>
