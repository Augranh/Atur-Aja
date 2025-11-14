<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8" style="background-color: var(--bg-primary);">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <h2 class="mt-6 text-center text-2xl/9 font-bold tracking-tight" style="color: var(--text-primary);">Create your account</h2>
    <p class="mt-2 text-center text-sm" style="color: var(--text-secondary);">Join us and start managing your tasks efficiently</p>
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <form action="#" method="POST" class="space-y-5">
      <!-- Full Name -->
      <div>
        <label for="fullname" class="block text-sm/6 font-medium" style="color: var(--text-primary);">Full Name</label>
        <div class="mt-2">
          <input id="fullname" type="text" name="fullname" placeholder="John Doe" required autocomplete="name" class="block w-full rounded-md px-3 py-1.5 text-base outline-1 -outline-offset-1 sm:text-sm/6 transition" style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);" onfocus="this.style.outline='2px solid var(--accent-2)'; this.style.outlineOffset='-2px'; this.style.borderColor='var(--accent-2)';" onblur="this.style.outline=''; this.style.outlineOffset=''; this.style.borderColor='var(--border-color)';" />
        </div>
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm/6 font-medium" style="color: var(--text-primary);">Email address</label>
        <div class="mt-2">
          <input id="email" type="email" name="email" placeholder="you@example.com" required autocomplete="email" class="block w-full rounded-md px-3 py-1.5 text-base outline-1 -outline-offset-1 sm:text-sm/6 transition" style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);" onfocus="this.style.outline='2px solid var(--accent-2)'; this.style.outlineOffset='-2px'; this.style.borderColor='var(--accent-2)';" onblur="this.style.outline=''; this.style.outlineOffset=''; this.style.borderColor='var(--border-color)';" />
        </div>
      </div>

      <!-- Phone Number -->
      <div>
        <label for="phone" class="block text-sm/6 font-medium" style="color: var(--text-primary);">Phone Number</label>
        <div class="mt-2">
          <input id="phone" type="tel" name="phone" placeholder="+62 812-3456-7890" required autocomplete="tel" class="block w-full rounded-md px-3 py-1.5 text-base outline-1 -outline-offset-1 sm:text-sm/6 transition" style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);" onfocus="this.style.outline='2px solid var(--accent-2)'; this.style.outlineOffset='-2px'; this.style.borderColor='var(--accent-2)';" onblur="this.style.outline=''; this.style.outlineOffset=''; this.style.borderColor='var(--border-color)';" />
        </div>
      </div>

      <!-- Username -->
      <div>
        <label for="username" class="block text-sm/6 font-medium" style="color: var(--text-primary);">Username</label>
        <div class="mt-2">
          <input id="username" type="text" name="username" placeholder="johndoe123" required autocomplete="username" class="block w-full rounded-md px-3 py-1.5 text-base outline-1 -outline-offset-1 sm:text-sm/6 transition" style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);" onfocus="this.style.outline='2px solid var(--accent-2)'; this.style.outlineOffset='-2px'; this.style.borderColor='var(--accent-2)';" onblur="this.style.outline=''; this.style.outlineOffset=''; this.style.borderColor='var(--border-color)';" />
        </div>
        <p class="mt-1 text-xs" style="color: var(--text-secondary);">Must be at least 4 characters</p>
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm/6 font-medium" style="color: var(--text-primary);">Password</label>
        <div class="mt-2">
          <input id="password" type="password" name="password" placeholder="••••••••" required autocomplete="new-password" class="block w-full rounded-md px-3 py-1.5 text-base outline-1 -outline-offset-1 sm:text-sm/6 transition" style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);" onfocus="this.style.outline='2px solid var(--accent-2)'; this.style.outlineOffset='-2px'; this.style.borderColor='var(--accent-2)';" onblur="this.style.outline=''; this.style.outlineOffset=''; this.style.borderColor='var(--border-color)';" />
        </div>
        <p class="mt-1 text-xs" style="color: var(--text-secondary);">Must be at least 8 characters with letters and numbers</p>
      </div>

      <!-- Confirm Password -->
      <div>
        <label for="confirm-password" class="block text-sm/6 font-medium" style="color: var(--text-primary);">Confirm Password</label>
        <div class="mt-2">
          <input id="confirm-password" type="password" name="confirm-password" placeholder="••••••••" required autocomplete="new-password" class="block w-full rounded-md px-3 py-1.5 text-base outline-1 -outline-offset-1 sm:text-sm/6 transition" style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);" onfocus="this.style.outline='2px solid var(--accent-2)'; this.style.outlineOffset='-2px'; this.style.borderColor='var(--accent-2)';" onblur="this.style.outline=''; this.style.outlineOffset=''; this.style.borderColor='var(--border-color)';" />
        </div>
      </div>

      <!-- Date of Birth -->
      <div>
        <label for="dob" class="block text-sm/6 font-medium" style="color: var(--text-primary);">Date of Birth</label>
        <div class="mt-2">
          <input id="dob" type="date" name="dob" required class="block w-full rounded-md px-3 py-1.5 text-base outline-1 -outline-offset-1 sm:text-sm/6 transition" style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);" onfocus="this.style.outline='2px solid var(--accent-2)'; this.style.outlineOffset='-2px'; this.style.borderColor='var(--accent-2)';" onblur="this.style.outline=''; this.style.outlineOffset=''; this.style.borderColor='var(--border-color)';" />
        </div>
      </div>

      <!-- Gender -->
      <div>
        <label class="block text-sm/6 font-medium mb-2" style="color: var(--text-primary);">Gender</label>
        <div class="flex gap-4">
          <div class="flex items-center">
            <input id="male" name="gender" type="radio" value="male" required class="h-4 w-4 transition" style="border: 1px solid var(--border-color);" />
            <label for="male" class="ml-2 block text-sm" style="color: var(--text-secondary);">Male</label>
          </div>
          <div class="flex items-center">
            <input id="female" name="gender" type="radio" value="female" required class="h-4 w-4 transition" style="border: 1px solid var(--border-color);" />
            <label for="female" class="ml-2 block text-sm" style="color: var(--text-secondary);">Female</label>
          </div>
          <div class="flex items-center">
            <input id="other" name="gender" type="radio" value="other" required class="h-4 w-4 transition" style="border: 1px solid var(--border-color);" />
            <label for="other" class="ml-2 block text-sm" style="color: var(--text-secondary);">Other</label>
          </div>
        </div>
      </div>

      <!-- Terms and Conditions -->
      <div class="flex items-start">
        <input id="terms" name="terms" type="checkbox" required class="h-4 w-4 mt-1 rounded transition" style="border: 1px solid var(--border-color); background-color: var(--bg-secondary);" />
        <label for="terms" class="ml-2 block text-sm" style="color: var(--text-secondary);">
          I agree to the 
          <a href="#" class="font-semibold transition" style="color: var(--accent-2);" onmouseover="this.style.color='var(--accent-1)'" onmouseout="this.style.color='var(--accent-2)'">Terms and Conditions</a>
          and 
          <a href="#" class="font-semibold transition" style="color: var(--accent-2);" onmouseover="this.style.color='var(--accent-1)'" onmouseout="this.style.color='var(--accent-2)'">Privacy Policy</a>
        </label>
      </div>

      <!-- Newsletter -->
      <div class="flex items-center">
        <input id="newsletter" name="newsletter" type="checkbox" class="h-4 w-4 rounded transition" style="border: 1px solid var(--border-color); background-color: var(--bg-secondary);" />
        <label for="newsletter" class="ml-2 block text-sm" style="color: var(--text-secondary);">Send me news and updates</label>
      </div>

      <!-- Submit Button -->
      <div class="pt-2">
        <button type="submit" class="flex w-full justify-center rounded-md px-3 py-2.5 text-sm/6 font-semibold transition shadow-sm" style="background-color: var(--accent-1); color: var(--text-primary);" onmouseover="this.style.backgroundColor='var(--accent-2)'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 4px 6px -1px rgba(0, 0, 0, 0.1)';" onmouseout="this.style.backgroundColor='var(--accent-1)'; this.style.transform='translateY(0)'; this.style.boxShadow='';">Create account</button>
      </div>
    </form>

    <p class="mt-8 text-center text-sm/6" style="color: var(--text-secondary);">
      Already have an account?
      <a href="login.php" class="font-semibold transition" style="color: var(--accent-2);" onmouseover="this.style.color='var(--accent-1)'" onmouseout="this.style.color='var(--accent-2)'">Sign in</a>
    </p>
  </div>
</div>