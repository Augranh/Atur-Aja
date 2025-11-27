<?php
    $contact_person = [
        "name" => "Davidson Rafael Krisman Nugroho",
        "NIM" => "412024030",
        "email" => "davidson.412024030@civitas.ukrida.ac.id",
        "github" => "DavidsonRafaelKN",
    ];        
?>

<?php
    include('../includes/header.php');
    include('../includes/navigation.php');
?>

<main class="min-h-screen py-12 px-4" style="background-color: var(--bg-primary);">
    <div class="max-w-md mx-auto">
        <!-- Contact Card -->
        <div class="rounded-xl p-6 shadow-md" style="background-color: var(--bg-secondary); border: 1px solid var(--border-color);">
            <h2 class="text-xl font-bold mb-4 flex items-center gap-2" style="color: var(--text-primary);">
                <i data-lucide="user" class="w-5 h-5" style="color: var(--accent-1);"></i>
                Contact Person
            </h2>
            
            <div class="space-y-3">
                <p style="color: var(--text-secondary);">
                    <strong style="color: var(--text-primary);">Name:</strong> <?php echo $contact_person['name']; ?>
                </p>
                <p style="color: var(--text-secondary);">
                    <strong style="color: var(--text-primary);">NIM:</strong> <?php echo $contact_person['NIM']; ?>
                </p>
                <p style="color: var(--text-secondary);">
                    <strong style="color: var(--text-primary);">Email:</strong> 
                    <a href="mailto:<?php echo $contact_person['email']; ?>" 
                       class="hover:underline" 
                       style="color: var(--accent-2);">
                        <?php echo $contact_person['email']; ?>
                    </a>
                </p>
                <p style="color: var(--text-secondary);">
                    <strong style="color: var(--text-primary);">GitHub:</strong> 
                    <a href="https://github.com/<?php echo $contact_person['github']; ?>" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="hover:underline" 
                       style="color: var(--accent-2);">
                        <?php echo $contact_person['github']; ?>
                    </a>
                </p>
            </div>
        </div>
    </div>
</main>

<script>
    lucide.createIcons();
</script>

<?php
    include('../includes/components/floatingThemeSwitch.php');
    include('../includes/footer.php');
?>