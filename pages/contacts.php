<?php
    $contact_person = [
        "name" => "Davidson Rafael Krisman Nugroho",
        "NIM" => "412024030",
        "email" => "davidson.412024030@civitas.ukrida.ac.id",
        "github" => "DavidsonRafaelKN",
    ]        
?>

<?php
    include('../includes/header.php');
    include('../includes/navigation.php');
?>

<main>
    <div class="p-4 bg-white shadow rounded-lg max-w-sm mx-auto m-4">
        <h2 class="text-xl font-bold mb-2">Contact Person</h2>
        <p class="text-text-primary"><strong>Name:</strong> <?php echo $contact_person['name']; ?></p>
        <p class="text-text-primary"><strong>Email:</strong> <a href="mailto:<?php echo $contact_person['email']; ?>" class="text-blue-500 hover:underline"><?php echo $contact_person['email']; ?></a></p>
        <p class="text-text-primary"><strong>GitHub:</strong> <a href="https://github.com/<?php echo $contact_person['github']; ?>" class="text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer"><?php echo $contact_person['github']; ?></a></p>
    </div>
</main>

<?php
    include('../includes/footer.php');
?>