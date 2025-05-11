<?php
  $sub_healine = get_field('sub_healine');
  $main_headline = get_field('main_headline');
  $description = get_field('description');
  $button_text = get_field('button_text');
  $button_link = get_field('button_link');
  $image = get_field('image');
  $image_alt = get_field('image_alt');
  $icon = get_field('icon');
  $date = get_field('date');
?>

<section>
	<div class="mx-auto px-4 text-zinc-800 bg-[#FCE8DD] font-['Inter' px-[19px] py-[96px] md:px-[98px]">
		<div class="flex flex-col md:flex-row gap-8 items-center">
			<!-- First column -->
			<div class="w-full md:w-1/2 flex flex-col gap-[16px]">
				<p class="text-sm font-normal leading-none tracking-wide">
					<?php echo esc_html($sub_healine); ?>
				</p>

				<h1 class="text-6xl font-normal leading-[60px] lg:w-[454px]">
          <?php echo esc_html($main_headline); ?>
        </h1>
					<p class="text-lg font-normal font-['Inter'] leading-none lg:w-[436px]"><?php echo esc_html($description); ?>
				</p>
				<div class="bg-black/0 border-gray-200">
					<a href="<?php echo esc_url($button_link); ?>" class="inline-block bg-zinc-700 rounded-full border-gray-200 py-3 px-6 cursor-pointer hover:bg-zinc-600">
						<span class="text-center justify-start text-white text-base font-normal"><?php echo esc_html($button_text); ?></span>
					</a>

					<div class="flex gap-3 mt-4">
						<div class="bg-black/0 border-gray-200">
							<!-- ... existing code ... -->
						</div>
						<div class="justify-start text-zinc-800 text-base font-normal  leading-none">
							<?php echo esc_html($date); ?>
						</div>
					</div>
				</div>
			</div>

			<!-- Second column -->      
			<div class="w-full md:w-1/2">
        <div class="bg-black/0 border-gray-200">
            <div class="bg-gradient-to-r from-stone-300 to-stone-300 rounded-3xl border-gray-200 p-4">
                <img class="rounded-2xl border-gray-200 w-full" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image_alt ? $image_alt : $image['alt']); ?>" />
            </div>
        </div>
    </div>
		</div>
	</div>
</section>