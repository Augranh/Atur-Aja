<section id="newsletter" class="py-20 transition-colors duration-300" style="background-color: var(--bg-primary);">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4" style="color: var(--text-primary);">
                Stay Updated
            </h2>
            <p class="text-lg" style="color: var(--text-secondary);">
                Subscribe to our newsletter and get the latest updates, tips, and exclusive offers delivered to your inbox.
            </p>
        </div>

        <div class="rounded-2xl p-8 md:p-12 shadow-xl transition-all duration-300" style="background-color: var(--bg-primary); border: 2px solid var(--border-color);">
            <form action="#" method="POST" class="space-y-6">
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label for="firstName" class="block text-sm font-medium mb-2" style="color: var(--text-primary);">
                            First Name
                        </label>
                        <input 
                            type="text" 
                            id="firstName" 
                            name="firstName" 
                            required
                            class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 transition-all duration-300"
                            style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);"
                            placeholder="John"
                        >
                    </div>
                    <div>
                        <label for="lastName" class="block text-sm font-medium mb-2" style="color: var(--text-primary);">
                            Last Name
                        </label>
                        <input 
                            type="text" 
                            id="lastName" 
                            name="lastName" 
                            required
                            class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 transition-all duration-300"
                            style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);"
                            placeholder="Doe"
                        >
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium mb-2" style="color: var(--text-primary);">
                        Email Address
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required
                        class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 transition-all duration-300"
                        style="background-color: var(--bg-secondary); color: var(--text-primary); border: 1px solid var(--border-color);"
                        placeholder="john.doe@example.com"
                    >
                </div>

                <div class="flex items-start">
                    <input 
                        type="checkbox" 
                        id="terms" 
                        name="terms" 
                        required
                        class="mt-1 h-4 w-4 rounded focus:ring-2 transition-all duration-300"
                        style="accent-color: var(--accent-2);"
                    >
                    <label for="terms" class="ml-3 text-sm" style="color: var(--text-secondary);">
                        I agree to receive marketing emails and accept the 
                        <a href="#" class="underline hover:opacity-80 transition-opacity" style="color: var(--accent-2);">
                            privacy policy
                        </a>
                    </label>
                </div>

                <button 
                    type="submit"
                    class="w-full py-4 px-6 rounded-lg font-semibold text-white text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg focus:outline-none focus:ring-4"
                    style="background-color: var(--accent-2);"
                    onmouseover="this.style.backgroundColor='var(--accent-1)'"
                    onmouseout="this.style.backgroundColor='var(--accent-2)'"
                >
                    Subscribe Now
                </button>
            </form>

            <!-- Features -->
            <div class="grid md:grid-cols-3 gap-6 mt-10 pt-10" style="border-top: 1px solid var(--border-color);">
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0">
                        <i data-lucide="mail" class="w-6 h-6" style="color: var(--accent-2);"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-1" style="color: var(--text-primary);">Weekly Updates</h4>
                        <p class="text-sm" style="color: var(--text-secondary);">Get fresh content every week</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0">
                        <i data-lucide="shield-check" class="w-6 h-6" style="color: var(--accent-2);"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-1" style="color: var(--text-primary);">No Spam</h4>
                        <p class="text-sm" style="color: var(--text-secondary);">We respect your privacy</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0">
                        <i data-lucide="gift" class="w-6 h-6" style="color: var(--accent-2);"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-1" style="color: var(--text-primary);">Exclusive Offers</h4>
                        <p class="text-sm" style="color: var(--text-secondary);">Special deals for subscribers</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">
            <div class="text-center">
                <div class="text-3xl font-bold mb-2" style="color: var(--accent-2);">10K+</div>
                <div class="text-sm" style="color: var(--text-secondary);">Subscribers</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold mb-2" style="color: var(--accent-2);">98%</div>
                <div class="text-sm" style="color: var(--text-secondary);">Satisfaction Rate</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold mb-2" style="color: var(--accent-2);">50+</div>
                <div class="text-sm" style="color: var(--text-secondary);">Weekly Articles</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold mb-2" style="color: var(--accent-2);">24/7</div>
                <div class="text-sm" style="color: var(--text-secondary);">Support</div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });
</script>