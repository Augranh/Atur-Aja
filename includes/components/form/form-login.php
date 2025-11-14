<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8" style="background-color: var(--bg-primary);">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-6 text-center text-2xl/9 font-bold tracking-tight" style="color: var(--text-primary);">Sign in to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="#" method="POST" class="space-y-6">
      <div>
        <label for="email" class="block text-sm/6 font-medium" style="color: var(--text-primary);">Email address</label>
        <div class="mt-2">
          <input id="email" type="email" name="email" placeholder="you@example.com" required autocomplete="email" class="block w-full rounded-md px-3 py-1.5 text-base outline-1 -outline-offset-1 sm:text-sm/6 transition" style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);" onfocus="this.style.outline='2px solid var(--accent-2)'; this.style.outlineOffset='-2px'; this.style.borderColor='var(--accent-2)';" onblur="this.style.outline=''; this.style.outlineOffset=''; this.style.borderColor='var(--border-color)';" />
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm/6 font-medium" style="color: var(--text-primary);">Password</label>
          <div class="text-sm">
            <a href="#" class="font-semibold transition" style="color: var(--accent-2);" onmouseover="this.style.color='var(--accent-1)'" onmouseout="this.style.color='var(--accent-2)'">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="password" type="password" name="password" placeholder="••••••••" required autocomplete="current-password" class="block w-full rounded-md px-3 py-1.5 text-base outline-1 -outline-offset-1 sm:text-sm/6 transition" style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);" onfocus="this.style.outline='2px solid var(--accent-2)'; this.style.outlineOffset='-2px'; this.style.borderColor='var(--accent-2)';" onblur="this.style.outline=''; this.style.outlineOffset=''; this.style.borderColor='var(--border-color)';" />
        </div>
      </div>

      <div class="flex items-center">
        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded transition" style="border: 1px solid var(--border-color); background-color: var(--bg-secondary);" />
        <label for="remember-me" class="ml-2 block text-sm" style="color: var(--text-secondary);">Remember me</label>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md px-3 py-2.5 text-sm/6 font-semibold transition shadow-sm" style="background-color: var(--accent-1); color: var(--text-primary);" onmouseover="this.style.backgroundColor='var(--accent-2)'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 4px 6px -1px rgba(0, 0, 0, 0.1)';" onmouseout="this.style.backgroundColor='var(--accent-1)'; this.style.transform='translateY(0)'; this.style.boxShadow='';">Sign in</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm/6" style="color: var(--text-secondary);">
      Not a member?
      <a href="#" class="font-semibold transition" style="color: var(--accent-2);" onmouseover="this.style.color='var(--accent-1)'" onmouseout="this.style.color='var(--accent-2)'">Start a 14 day free trial</a>
    </p>
  </div>
</div>