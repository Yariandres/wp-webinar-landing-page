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
					<?php echo $sub_healine; ?>
				</p>

				<h1 class="text-6xl font-normal leading-[60px] lg:w-[454px]">
          <?php echo $main_headline; ?>
        </h1>
					<p class="text-lg font-normal font-['Inter'] leading-none lg:w-[436px]"><?php echo $description;?>
				</p>
				<div class="bg-black/0 border-gray-200">
					<a href="<?php echo $button_link  ?>" class="inline-block bg-zinc-700 rounded-full border-gray-200 py-3 px-6 cursor-pointer hover:bg-zinc-600">
						<span class="text-center justify-start text-white text-base font-normal"><?php echo $button_text;?></span>
					</a>

					<div class="flex gap-3 mt-4">
						<div class="bg-black/0 border-gray-200">
							<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
							<g id="Frame">
							<g clip-path="url(#clip0_2_827)">
							<path id="Vector" d="M4.01562 0C4.43125 0 4.76562 0.334375 4.76562 0.75V2H9.26562V0.75C9.26562 0.334375 9.6 0 10.0156 0C10.4312 0 10.7656 0.334375 10.7656 0.75V2H12.0156C13.1187 2 14.0156 2.89687 14.0156 4V4.5V6V14C14.0156 15.1031 13.1187 16 12.0156 16H2.01562C0.9125 16 0.015625 15.1031 0.015625 14V6V4.5V4C0.015625 2.89687 0.9125 2 2.01562 2H3.26562V0.75C3.26562 0.334375 3.6 0 4.01562 0ZM12.5156 6H1.51562V14C1.51562 14.275 1.74063 14.5 2.01562 14.5H12.0156C12.2906 14.5 12.5156 14.275 12.5156 14V6ZM10.2969 9.28125L6.79688 12.7812C6.50313 13.075 6.02813 13.075 5.7375 12.7812L3.7375 10.7812C3.44375 10.4875 3.44375 10.0125 3.7375 9.72188C4.03125 9.43125 4.50625 9.42813 4.79688 9.72188L6.26562 11.1906L9.23438 8.22188C9.52812 7.92813 10.0031 7.92813 10.2937 8.22188C10.5844 8.51562 10.5875 8.99063 10.2937 9.28125H10.2969Z" fill="#4D325A"/>
							</g>
							</g>
							<defs>
							<clipPath id="clip0_2_827">
							<path d="M0.015625 0H14.0156V16H0.015625V0Z" fill="white"/>
							</clipPath>
							</defs>
							</svg>
						</div>
						<div class="justify-start text-zinc-800 text-base font-normal  leading-none">
							<?php echo $date ?>
						</div>
					</div>
				</div>
			</div>

			<!-- Second column -->      
			<div class="w-full md:w-1/2">
        <div class="bg-black/0 border-gray-200">
            <div class="bg-gradient-to-r from-stone-300 to-stone-300 rounded-3xl border-gray-200 p-4">
                <img class="rounded-2xl border-gray-200 w-full" src="<?php echo $image['url']; ?>" alt="<?php echo $image_alt ? $image_alt : $image['alt']; ?>" />
            </div>
        </div>
    </div>
		</div>
	</div>
</section>