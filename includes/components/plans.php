<?php
$plans = [
    [
        "name" => "Basic",
        "price" => "Free",
        "features" => [
            "Access to basic task management features",
            "Limited project templates",
            "Community support",
            "Task prioritization",
            "Basic reporting",
            "Mobile app access"
        ]
    ],
    [
        "name" => "Pro",
        "price" => "$9.99/month",
        "features" => [
            "All Basic features",
            "Advanced reporting and analytics",
            "Priority email support",
            "Task dependencies",
            "Custom task labels",
            "Time tracking",
            "Team collaboration tools",
            "Recurring tasks"
        ]
    ],
    [
        "name" => "Enterprise",
        "price" => "Contact us",
        "features" => [
            "All Pro features",
            "Custom integrations",
            "Dedicated account manager",
            "24/7 phone support",
            "On-site training and onboarding",
            "Service Level Agreement (SLA)",
            "Advanced security features",
            "Unlimited users and projects",
            "API access",
            "Custom branding",
        ]
    ]
];
?>

<section id="plans" class="plans-section py-12 md:py-20" style="background-color: var(--bg-primary);">
    <div class="container mx-auto px-4">
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold md:text-4xl" style="color: var(--text-primary);">Our Plans</h2>
            <p class="mt-2" style="color: var(--text-secondary);">Choose the plan that suits your needs</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($plans as $plan): ?>
                <div class="plan-card group rounded-2xl p-5 transition-all duration-300 flex flex-col <?= $plan['name'] === 'Pro' ? 'relative' : '' ?>"
                    style="border: 1px solid var(--border-color); background-color: var(--bg-secondary);">
                    <?php if ($plan['name'] === 'Pro'): ?>
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 px-4 py-1 rounded-full text-sm font-semibold text-white" style="background-color: var(--accent-2);">
                            Most Popular
                        </div>
                    <?php endif; ?>
                    <h3 class="mb-3 text-xl font-bold" style="color: var(--text-primary);">
                        <?= $plan["name"] ?>
                    </h3>
                    <p class="text-2xl font-semibold mb-4" style="color: var(--text-primary);">
                        <?= $plan["price"] ?>
                    </p>
                    <ul class="mb-6 space-y-2 flex-grow">
                        <?php foreach ($plan["features"] as $feature): ?>
                            <li class="leading-relaxed" style="color: var(--text-secondary);">• <?= $feature ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <button class="w-full rounded-lg py-2 font-semibold transition"
                            style="background-color: var(--accent-1); color: var(--button-text);"
                            onmouseover="this.style.backgroundColor='var(--accent-2)'"
                            onmouseout="this.style.backgroundColor='var(--accent-1)'">
                        Choose Plan
                    </button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
