<?php
$testimonials = [
    [
        "name" => "Lü Bu",
        "role" => "Warlord of the Late Eastern Han Dynasty",
        "photo" => "https://randomuser.me/api/portraits/men/44.jpg",
        "feedback" => "Atur Aja has revolutionized the way I manage my campaigns and alliances. The intuitive interface and powerful features have made it easier to coordinate with my generals and strategists."
    ],
    [
        "name" => "Wolfgang A. Mozart",
        "role" => "Composer",
        "photo" => "https://randomuser.me/api/portraits/men/35.jpg",
        "feedback" => "As a composer, organization is key to my creative process. Atur Aja has provided me with the tools to keep track of my compositions, deadlines, and collaborations with fellow musicians."
    ],
    [
        "name" => "Diao Chan",
        "role" => "Court Dancer and Advisor",
        "photo" => "https://randomuser.me/api/portraits/women/68.jpg",
        "feedback" => "Using Atur Aja has allowed me to efficiently manage my performances and engagements at court. The platform's flexibility and ease of use have been invaluable in balancing my artistic and advisory roles."   
    ],
    [
        "name" => "Linus T.",
        "role" => "Software Engineer",
        "photo" => "https://randomuser.me/api/portraits/men/22.jpg",
        "feedback" => "Atur Aja has transformed the way our development team collaborates on projects. The real-time updates and task management features have significantly improved our productivity and communication."
    ],
    [
        "name" => "Olivia T.",
        "role" => "Entrepreneur",
        "photo" => "https://randomuser.me/api/portraits/women/12.jpg",
        "feedback" => "Atur Aja is the perfect solution for small business owners like me. It helps me stay organized and manage my team effectively without the need for multiple tools."
    ],
    [
        "name" => "Qin Shi Huang",
        "role" => "First Emperor of China",
        "photo" => "https://randomuser.me/api/portraits/men/99.jpg",
        "feedback" => "Even in ancient times, I would have appreciated a tool like Atur Aja to help me manage the construction of the Great Wall. Highly recommended!"  
    ],
    [
        "name" => "Ada Lovelace",
        "role" => "Mathematician and Writer",
        "photo" => "https://randomuser.me/api/portraits/women/65.jpg",
        "feedback" => "Atur Aja has been an invaluable tool in organizing my projects and ideas. Its user-friendly design and powerful features make it a must-have for anyone looking to enhance their productivity."
    ],
    [
        "name" => "Nikola Tesla",
        "role" => "Inventor and Engineer",
        "photo" => "https://randomuser.me/api/portraits/men/77.jpg",
        "feedback" => "The efficiency and organization that Atur Aja brings to project management is unparalleled. It has allowed me to focus more on innovation and less on administrative tasks."
    ],
    [
        "name" => "Yi Sun-sin",
        "role" => "Korean Naval Commander",
        "photo" => "https://randomuser.me/api/portraits/men/88.jpg",
        "feedback" => "Atur Aja has helped me strategize and manage naval operations efficiently. The platform's reliability and ease of use are commendable."
    ]
];

$chosenTestimonials = [];
foreach ($testimonials as $testimonial) {
    $chosenTestimonials[] = $testimonial;
}
?>

<section id="testimonials" class="testimonials-section py-12 md:py-20" style="background-color: var(--bg-primary);">
  <div class="container mx-auto px-4">
    <div class="mb-12 text-center">
      <h2 class="text-3xl font-bold md:text-4xl" style="color: var(--text-primary);">What Our Users Say</h2>
      <p class="mt-2" style="color: var(--text-secondary);">Hear from some of our satisfied users</p>
    </div>
    
    <!-- Carousel Row 1 -->
    <div class="testimonial-carousel mb-6">
      <div class="testimonial-carousel-wrapper">
        <div class="testimonial-carousel-track">
          <?php 
          // First set of testimonials
          foreach ($chosenTestimonials as $t): ?>
            <div class="testimonial-card-carousel rounded-2xl p-6 transition-all duration-300" style="border: 1px solid var(--border-color); background-color: var(--bg-secondary);">
              <div class="mb-4 flex items-center gap-4">
                <img src="<?= $t['photo'] ?>" alt="<?= $t['name'] ?>" class="h-14 w-14 rounded-full object-cover" />
                <div>
                  <h3 class="text-base font-bold" style="color: var(--text-primary);"><?= $t['name'] ?></h3>
                  <p class="text-sm" style="color: var(--text-secondary);"><?= $t['role'] ?></p>
                </div>
              </div>
              <p class="text-sm leading-relaxed line-clamp-4" style="color: var(--text-secondary);">"<?= $t['feedback'] ?>"</p>
            </div>
          <?php endforeach; ?>
          
          <?php 
          // Duplicate for infinite scroll effect
          foreach ($chosenTestimonials as $t): ?>
            <div class="testimonial-card-carousel rounded-2xl p-6 transition-all duration-300" style="border: 1px solid var(--border-color); background-color: var(--bg-secondary);">
              <div class="mb-4 flex items-center gap-4">
                <img src="<?= $t['photo'] ?>" alt="<?= $t['name'] ?>" class="h-14 w-14 rounded-full object-cover" />
                <div>
                  <h3 class="text-base font-bold" style="color: var(--text-primary);"><?= $t['name'] ?></h3>
                  <p class="text-sm" style="color: var(--text-secondary);"><?= $t['role'] ?></p>
                </div>
              </div>
              <p class="text-sm leading-relaxed line-clamp-4" style="color: var(--text-secondary);">"<?= $t['feedback'] ?>"</p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- Carousel Row 2 (Reverse Direction) -->
    <div class="testimonial-carousel">
      <div class="testimonial-carousel-wrapper">
        <div class="testimonial-carousel-track reverse">
          <?php 
          // Reverse array for second row
          $reversedTestimonials = array_reverse($chosenTestimonials);
          foreach ($reversedTestimonials as $t): ?>
            <div class="testimonial-card-carousel rounded-2xl p-6 transition-all duration-300" style="border: 1px solid var(--border-color); background-color: var(--bg-secondary);">
              <div class="mb-4 flex items-center gap-4">
                <img src="<?= $t['photo'] ?>" alt="<?= $t['name'] ?>" class="h-14 w-14 rounded-full object-cover" />
                <div>
                  <h3 class="text-base font-bold" style="color: var(--text-primary);"><?= $t['name'] ?></h3>
                  <p class="text-sm" style="color: var(--text-secondary);"><?= $t['role'] ?></p>
                </div>
              </div>
              <p class="text-sm leading-relaxed line-clamp-4" style="color: var(--text-secondary);">"<?= $t['feedback'] ?>"</p>
            </div>
          <?php endforeach; ?>
          
          <?php 
          // Duplicate for infinite scroll effect
          foreach ($reversedTestimonials as $t): ?>
            <div class="testimonial-card-carousel rounded-2xl p-6 transition-all duration-300" style="border: 1px solid var(--border-color); background-color: var(--bg-secondary);">
              <div class="mb-4 flex items-center gap-4">
                <img src="<?= $t['photo'] ?>" alt="<?= $t['name'] ?>" class="h-14 w-14 rounded-full object-cover" />
                <div>
                  <h3 class="text-base font-bold" style="color: var(--text-primary);"><?= $t['name'] ?></h3>
                  <p class="text-sm" style="color: var(--text-secondary);"><?= $t['role'] ?></p>
                </div>
              </div>
              <p class="text-sm leading-relaxed line-clamp-4" style="color: var(--text-secondary);">"<?= $t['feedback'] ?>"</p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>