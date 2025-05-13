<?php
  $headline = get_field('form_headline');
  $description = get_field('form_description');
  $form_date = get_field('form_date');
  $time = get_field('form_time');
  $location = get_field('form_location');
  $admission = get_field('form_admission');
  $button_text = get_field('form_button_text');
  $quote = get_field('form_quote');
  $quote_author = get_field('form_quote_author');
  $note = get_field('form_note');
?>

<section id="register" class="py-16 bg-gradient-to-br from-[#D5B4CF] to-[#E4C8D6]">
    <div class="container mx-auto px-4 max-w-4xl">
      <div class="bg-white rounded-3xl shadow-lg p-8 md:p-12">
        <div class="text-center mb-8">
          <h2 class="font-serif text-3xl md:text-4xl text-[#2D1E2F] mb-4"><?php echo esc_html($headline) ?></h2>
          <p class="text-lg text-[#2D1E2F] max-w-2xl mx-auto">
            <?php echo esc_html($headline) ?></p>
        </div>
        <div class="flex flex-col md:flex-row gap-8">
          <div class="md:w-1/2">
            <div class="mb-6">
              <div class="flex items-center mb-4">
                <i class="fa-solid fa-calendar-check text-[#4D325A] text-xl mr-3"></i>
                <span class="text-lg text-[#2D1E2F] font-medium">
                  <?php echo esc_html($form_date); ?>
                </span>
              </div>
              <div class="flex items-center mb-4">
                <i class="fa-solid fa-clock text-[#4D325A] text-xl mr-3"></i>
                <span class="text-lg text-[#2D1E2F] font-medium">
                  <?php echo esc_html($time);?>
                </span>
              </div>
              <div class="flex items-center mb-4">
                <i class="fa-solid fa-video text-[#4D325A] text-xl mr-3"></i>
                <span class="text-lg text-[#2D1E2F] font-medium">Live Online Event</span>
              </div>
              <div class="flex items-center">
                <i class="fa-solid fa-gift text-[#4D325A] text-xl mr-3"></i>
                <span class="text-lg text-[#2D1E2F] font-medium">Free Admission</span>
              </div>
            </div>
            
            <div class="bg-gradient-to-br from-[#FCE8DD] to-[#FDF3E9] p-4 rounded-xl">
              <p class="text-[#2D1E2F] italic">"The Akashic Records hold the blueprint of your soul's journey. Learning to access them safely can transform your understanding of yourself and your purpose."</p>
              <p class="text-right text-[#4D325A] font-medium mt-2">— Olga Stępińska</p>
            </div>
          </div>
          
          <div class="md:w-1/2">
            <form id="registration-form" class="space-y-4">
              <div>
                <label for="name" class="block text-[#2D1E2F] mb-1">Full Name</label>
                <input type="text" id="name" class="w-full px-4 py-3 rounded-xl border border-[#E4C8D6] focus:outline-none focus:ring-2 focus:ring-[#4D325A]" placeholder="Your name" required>
              </div>
              
              <div>
                <label for="email" class="block text-[#2D1E2F] mb-1">Email Address</label>
                <input type="email" id="email" class="w-full px-4 py-3 rounded-xl border border-[#E4C8D6] focus:outline-none focus:ring-2 focus:ring-[#4D325A]" placeholder="Your email" required>
              </div>
              
              <div class="flex items-start mt-4">
                <input type="checkbox" id="consent" class="mt-1 mr-2" required>
                <label for="consent" class="text-sm text-[#2D1E2F]">I agree to receive information about the webinar and future events from Szkoła Numerologii. You can unsubscribe at any time.</label>
              </div>
              
              <button type="submit" class="w-full bg-[#4D325A] text-white py-4 px-6 rounded-full text-lg font-medium hover:bg-[#3F2B46] transition-all transform hover:scale-105 mt-4">
                Reserve My Spot
              </button>
              
              <p class="text-center text-sm text-[#2D1E2F] mt-4">
                <i class="fa-solid fa-lock text-[#4D325A] mr-1"></i>
                Your information is secure and will never be shared.
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>