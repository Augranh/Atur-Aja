<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8" style="background-color: var(--bg-primary);">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <h2 class="mt-6 text-center text-2xl/9 font-bold tracking-tight" style="color: var(--text-primary);">Create your account</h2>
    <p class="mt-2 text-center text-sm" style="color: var(--text-secondary);">Join us and start managing your tasks efficiently</p>
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    
    <div id="error-message" class="mb-4 rounded-md bg-red-100 p-3 text-center text-sm text-red-700" style="display: none;">
    </div>
    <div id="success-message" class="mb-4 rounded-md bg-green-100 p-3 text-center text-sm text-green-700" style="display: none;">
    </div>

    <form id="register-form" class="space-y-5">

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm/6 font-medium" style="color: var(--text-primary);">Email address</label>
        <div class="mt-2">
          <input id="email" type="email" name="email" placeholder="you@example.com" required autocomplete="email" class="block w-full rounded-md px-3 py-1.5 text-base outline-1 -outline-offset-1 sm:text-sm/6 transition" style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);" onfocus="this.style.outline='2px solid var(--accent-2)'; this.style.outlineOffset='-2px'; this.style.borderColor='var(--accent-2)';" onblur="this.style.outline=''; this.style.outlineOffset=''; this.style.borderColor='var(--border-color)';" />
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

      <!-- Submit Button -->
      <div class="pt-2">
        <button type="submit" class="flex w-full justify-center rounded-md px-3 py-2.5 text-sm/6 font-semibold transition shadow-sm" style="background-color: var(--accent-1); color: var(--text-primary);" onmouseover="this.style.backgroundColor='var(--accent-2)'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 4px 6px -1px rgba(0, 0, 0, 0.1)';" onmouseout="this.style.backgroundColor='var(--accent-1)'; this.style.transform='translateY(0)'; this.style.boxShadow='';">Create account</button>
      </div>
    </form>

    <p class="mt-8 text-center text-sm/6" style="color: var(--text-secondary);">
      Already have an account?
      <a href="../auth/login.php" class="font-semibold transition" style="color: var(--accent-2);" onmouseover="this.style.color='var(--accent-1)'" onmouseout="this.style.color='var(--accent-2)'">Sign in</a>
    </p>
  </div>
</div>

<script>
  const registerForm = document.getElementById('register-form');
  const emailInput = document.getElementById('email');
  const usernameInput = document.getElementById('username');
  const passwordInput = document.getElementById('password');
  const confirmPasswordInput = document.getElementById('confirm-password');
  const termsCheckbox = document.getElementById('terms');
  const errorMessage = document.getElementById('error-message');
  const successMessage = document.getElementById('success-message');

  registerForm.addEventListener('submit', function(event) {
    event.preventDefault();

    errorMessage.style.display = 'none';
    successMessage.style.display = 'none';

    const email = emailInput.value.trim();
    const username = usernameInput.value.trim();
    const password = passwordInput.value;
    const confirmPassword = confirmPasswordInput.value;

    if (username.length < 4) {
      errorMessage.textContent = 'Username harus minimal 4 karakter.';
      errorMessage.style.display = 'block';
      return;
    }

    if (password.length < 8) {
      errorMessage.textContent = 'Password harus minimal 8 karakter.';
      errorMessage.style.display = 'block';
      return;
    }

    if (password !== confirmPassword) {
      errorMessage.textContent = 'Password dan konfirmasi password tidak cocok.';
      errorMessage.style.display = 'block';
      return;
    }

    if (!termsCheckbox.checked) {
      errorMessage.textContent = 'Anda harus menyetujui Terms and Conditions.';
      errorMessage.style.display = 'block';
      return;
    }

    fetch('../../includes/components/form/register-handler.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        email: email,
        username: username,
        password: password
      })
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        successMessage.textContent = 'Registrasi berhasil! Mengalihkan ke halaman login...';
        successMessage.style.display = 'block';
        
        setTimeout(() => {
          window.location.href = 'login.php';
        }, 2000);
      } else {
        errorMessage.textContent = data.message || 'Terjadi kesalahan saat registrasi.';
        errorMessage.style.display = 'block';
      }
    })
    .catch(error => {
      console.error('Error:', error);
      errorMessage.textContent = 'Terjadi kesalahan. Tidak bisa melakukan registrasi.';
      errorMessage.style.display = 'block';
    });
  });
</script>