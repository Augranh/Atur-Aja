<?php
  $features = [
    [
      "title" => "Board & Task Management",
      "description" => "Create task lists, drag and drop to update statuses, and monitor project progress with ease."
    ],
    [
      "title" => "Real-time Reporting",
      "description" => "Gain deep insights into team performance with easy-to-understand charts and analytics."
    ],
    [
      "title" => "Collaboration Tools",
      "description" => "Quickly chat, comment on tasks, mention team members, and collaborate seamlessly all in one place."
    ],
    [
      "title" => "Smart Notifications",
      "description" => "Intelligent notifications that surface only what's important—deadlines, task updates, and direct mentions."
    ],
    [
      "title" => "File & Document Sharing",
      "description" => "Upload files, attach them to tasks, and manage project documents with quick and organized access."
    ],
    [
      "title" => "Integrations & APIs",
      "description" => "Connect your favorite apps like Google Workspace, Slack, or use our API for advanced automation."
    ]
  ]
?>

<section class="features-section" style="background-color: var(--bg-primary);">
  <div class="container mx-auto px-4 py-12" id="features">
    <div class="mb-12 text-center">
      <h2 class="text-3xl font-bold md:text-4xl" style="color: var(--text-primary);">Features</h2>
      <p class="mt-2" style="color: var(--text-secondary);">
        Everything you need to boost your team's productivity.
      </p>
    </div>

    <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
      <?php foreach ($features as $f): ?>
        <div class="feature-card group rounded-2xl p-5 transition-all duration-300"
             style="border: 1px solid var(--border-color); background-color: var(--bg-secondary);">
          <h3 class="mb-3 text-xl font-bold" style="color: var(--text-primary);">
            <?= $f["title"] ?>
          </h3>
          <p class="leading-relaxed" style="color: var(--text-secondary);">
            <?= $f["description"] ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>