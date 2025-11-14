<?php
$items_resources = [
    [
        "title" => "Getting Started with Atur Aja",
        "description" => "A comprehensive guide to help new users navigate and utilize the core features of Atur Aja effectively."
    ],
    [
        "title" => "Advanced Task Management Techniques",
        "description" => "Explore advanced strategies for managing tasks, setting priorities, and optimizing your workflow with Atur Aja."
    ],
    [
        "title" => "Integrating Atur Aja with Your Favorite Tools",
        "description" => "Learn how to connect Atur Aja with popular apps like Google Workspace and Slack to streamline your productivity."
    ]
];

$chosenResources = [];
foreach ($items_resources as $resource) {
    $chosenResources[] = $resource;
}
?>

<section id="resources" class="resources-section py-12 md:py-20" style="background-color: var(--bg-primary);">
    <div class="container mx-auto px-4">
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold md:text-4xl" style="color: var(--text-primary);">Resources</h2>
            <p class="mt-2" style="color: var(--text-secondary);">Explore our collection of articles, guides, and tutorials to maximize your productivity with Atur Aja.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($chosenResources as $resource): ?>
                <div class="resource-card group rounded-2xl p-5 transition-all duration-300"
                     style="border: 1px solid var(--border-color); background-color: var(--bg-secondary);">
                    <h3 class="mb-3 text-xl font-bold" style="color: var(--text-primary);"><?= $resource['title'] ?></h3>
                    <p class="leading-relaxed" style="color: var(--text-secondary);"><?= $resource['description'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
