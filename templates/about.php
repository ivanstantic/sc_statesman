<?php 
	/* Template Name: About */ 
?>

<?php get_header(); ?>

    <!-- Hero Section -->
    <div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228] md:pt-10 md:pb-10 sm:pt-8 sm:pb-8 dark:pb-2">
        <div class="w-[90%] max-w-[1344px] md:h-[23.75rem] sm:h-[38rem] h-[45rem]">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 h-[100%]">
                <!-- About Us Text -->
                <div class="md:col-span-2 flex items-start justify-center flex-col">
                    <h2 class="lg:text-[3rem] md:text-[2.5rem] sm:text-[2.5rem] text-[2rem]   font-roboto-serif font-bold text-[#1B2228] sm:mb-4 mb-2 dark:text-[#F2F3F4]">About Us</h2>
                    <p class="text-gray-600 mb-4 dark:text-white lg:text-[1.25rem] md:text-[1rem]">
                        Welcome to insideSCPolitics, your trusted source for the latest news and analysis on South Carolina politics. We’re dedicated to delivering comprehensive coverage of the issues that matter most to you.
                    </p>
                    <p class="text-gray-600 dark:text-white lg:text-[1.25rem] md:text-[1rem]">
                        Our mission is to provide accurate and timely information, helping you stay informed and engaged with developments across the state. Thank you for choosing us as your go-to resource for political insights.
                    </p>
                </div>
                
                <!-- Editor Section -->
                <div class="flex flex-col items-center justify-start text-center p-6 rounded-lg bg-[#E0E3E7] dark:bg-[#e0e3e7] dark:bg-opacity-10 ">
                    <img
                        class="w-[156px] h-[156px] rounded-full mb-4"
                        src="<?php echo get_stylesheet_directory_uri().'/_assets/public/images/about-hero.png'; ?>"
                        alt="Evelyn Harper"
                    />
                    <h3 class="lg:text-[1.25rem] md:text-[1rem] font-medium font-roboto-serif text-[#1B2228] dark:text-[#F2F3F4]">Evelyn Harper</h3>
                    <p class="text-gray-500 lg:text-[1rem] md:text-[0.75rem]">Editor-in-Chief</p>
                    <p class="text-gray-600  lg:text-[1rem] md:text-[0.75rem] mt-4 dark:text-[#FFFFFF]">
                        Evelyn has over 20 years of experience in journalism and leads our team with a commitment to truth and integrity.
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
