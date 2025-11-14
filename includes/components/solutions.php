<?php
$images = [
    "https://www.brainspores.com/wp-content/uploads/2014/07/task-management-tool.jpg",
    "https://www.zohowebstatic.com/sites/zweb/images/analytics/bi-helpdesk.png",
    "https://www.brainspores.com/wp-content/uploads/2014/07/task-management-tool.jpg",
    "http://aonflow.com/blog/wp-content/uploads/2023/10/Key-Advantages-of-System-Integration.png"
];

$chosenImages = [];
foreach ($images as $image) {
    $chosenImages[] = $image;
}
?>

<section class="solution-section min-h-screen" style="background-color: var(--bg-primary);">
  <div class="container mx-auto px-4 py-12" id="solution">
    <div class="mb-12 text-center">
      <h2 class="text-3xl font-bold md:text-4xl" style="color: var(--text-primary);">Solutions</h2>
      <p class="mt-2" style="color: var(--text-secondary);">Streamline your workflow and enhance team collaboration with our powerful task management solution</p>
    </div>

    <div class="grid grid-cols-2 gap-6 rounded-2xl p-6" style="background-color: var(--bg-primary);">
      <div class="feature-card overflow-hidden rounded-xl transition-all duration-300" style="background-color: var(--bg-secondary); border: 2px solid var(--border-color);">
        <img src="<?php echo $chosenImages[0]; ?>" alt="" class="h-full w-full object-cover">
      </div>

      <div class="feature-card overflow-hidden rounded-xl transition-all duration-300" style="background-color: var(--bg-secondary); border: 2px solid var(--border-color);">
        <img src="<?php echo $chosenImages[1]; ?>" alt="" class="h-full w-full object-cover">
      </div>

      <div class="feature-card overflow-hidden rounded-xl transition-all duration-300" style="background-color: var(--bg-secondary); border: 2px solid var(--border-color);">
        <img src="<?php echo $chosenImages[2]; ?>" alt="" class="h-full w-full object-cover">
      </div>

      <div class="feature-card overflow-hidden rounded-xl transition-all duration-300" style="background-color: var(--bg-secondary); border: 2px solid var(--border-color);">
        <img src="<?php echo $chosenImages[3]; ?>" alt="" class="h-full w-full object-cover">
      </div>
    </div>
  </div>
</section>
