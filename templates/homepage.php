<?php 
	/* Template Name: Homepage */
?>

<?php get_header(); ?>

    <!-- Hero Section -->
    <div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 text-gray-300 py-[24px]">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/video-placeholder.png" class="w-full h-auto" alt="Video Placeholder" />
                <div class="flex items-start justify-center flex-col text-black">
                    <p class="text-[14px] text-[#4864C0] ">Investigation</p>
                    <h3 class="text-[24px] md:text-[48px] text-[#1B2228] mt-3 font-bold leading-[28px] md:leading-[52px] font-roboto-serif dark:text-white">
                        Governor Announces New Economic Plan
                    </h3>
                    <p class="text-[14px] md:text-[16px] text-[#1B2228] mt-3 dark:text-white">
                        Governor has announced a new economic plan for South Carolina, focusing on job creation, business incentives, and workforce development.
                    </p>
                    <p class="text-[12px] md:text-[14px] text-[#71767A] mt-3">October 10, 2023</p>
                </div>
            </div>
        </div>
    </div>


    <!--State View More -->
    <div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%] flex justify-between items-center pt-[24px] pb-[16px]">
            <div class="text-[32px] font-bold">
                <p class="dark:text-white text-[#1B2228]">State</p>
                <hr class="w-[60%] border-none h-[6px] bg-[#2D5599]" />
            </div>
            <div class="flex items-center justify-center gap-2 text-[14px] text-[#4864C0] cursor-pointer">
                View more <i class="fas fa-arrow-right dark:text-white"></i>
            </div>
        </div>
    </div>

    <!-- State Images Section -->
    <div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%] grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 py-8">
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-9.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Local Business Thrives Amid Economic Challenges
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 9, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-10.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Health Officials Warn of Flu Season
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-11.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        High School Football Team Wins State Championship
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-4.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Global Markets React to News
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-5.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Exploring the Depths of the Ocean
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-6.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Tech Giants Merge in Historic Deal
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-7.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        New Study on Mental Health
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-8.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Election Results Announced
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-5.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Exploring the Depths of the Ocean
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-6.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Tech Giants Merge in Historic Deal
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-7.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        New Study on Mental Health
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-8.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Election Results Announced
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>

        </div>
    </div>

    <hr class="border-none h-[1px] bg-[#cbd5e1]" />

    <!-- Local view -->
    <div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%] flex justify-between items-center pt-[24px] pb-[16px]">
            <div class="text-[32px] font-bold">
                <p class="dark:text-white text-[#1B2228]">Local</p>
                <hr class="w-[60%] border-none h-[6px] bg-[#2D5599]" />
            </div>
            <div class="flex items-center justify-center gap-2 text-[14px] text-[#4864C0] cursor-pointer">
                View more <i class="fas fa-arrow-right dark:text-white"></i>
            </div>
        </div>
    </div>

    <!-- Local grid -->
    <div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%]  flex items-start justify-between gap-10 pt-[16px] pb-[24px]">
            <!-- Main Large Article -->
            <div class="lg:flex-5 w-[50%]">
                <div class="overflow-hidden rounded-lg ">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-1.png" alt="Hurricane Florence" class="w-full h-250 md:h-120 lg:h-100 object-cover" />
                    <div class="p-4">
                        <h2 class="text-[24px] md:text-[28px] lg:text-[32px] font-extrabold mb-2 dark:text-white">
                            Exploring the Depths of the Ocean
                        </h2>
                        <p class="text-[#1B2228] text-[16px] md:text-[18px] lg:text-[20px] dark:text-white font-normal">
                            An in-depth look at the ongoing recovery efforts in North Carolina following Hurricane Florence.
                        </p>
                        <p class="text-sm text-[#71767A] mt-2">October 10, 2023</p>
                    </div>
                </div>
            </div>

            <!-- Smaller Articles -->
            <div class="w-[50%] grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-6 lg:flex-2">
                <div class="flex flex-col">
                    <div class="overflow-hidden rounded-lg ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-5.png" alt="Innovative Tech Startups" class="w-full h-40 md:h-60 object-cover rounded" />
                        <div class="p-2">
                            <h3 class="text-[18px] md:text-[20px] font-medium font-roboto-serif dark:text-white mt-2">
                                Innovative Tech Startups to Watch
                            </h3>
                            <p class="text-sm text-[#71767A] mt-2">October 8, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-hidden rounded-lg ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-8.png" alt="Quantum Computing" class="w-full h-40 md:h-60 object-cover rounded" />
                        <div class="p-2">
                            <h3 class="text-[18px] md:text-[20px] font-medium font-roboto-serif dark:text-white mt-2">
                                Breakthrough in Quantum Computing
                            </h3>
                            <p class="text-sm text-[#71767A] mt-2">October 8, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-hidden rounded-lg ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-6.png" alt="Olympic Games Highlights" class="w-full h-40 md:h-60 object-cover rounded" />
                        <div class="p-2">
                            <h3 class="text-[18px] md:text-[20px] font-medium font-roboto-serif dark:text-white mt-2">
                                Olympic Games Highlights
                            </h3>
                            <p class="text-sm text-[#71767A] mt-2">October 8, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-hidden rounded-lg ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-7.png" alt="Global Markets" class="w-full h-40 md:h-60 object-cover rounded" />
                        <div class="p-2">
                            <h3 class="text-[18px] md:text-[20px] font-medium font-roboto-serif dark:text-white mt-2">
                                Global Markets React to News
                            </h3>
                            <p class="text-sm text-[#71767A] mt-2">October 8, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-hidden rounded-lg ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-6.png" alt="Olympic Games Highlights" class="w-full h-40 md:h-60 object-cover rounded" />
                        <div class="p-2">
                            <h3 class="text-[18px] md:text-[20px] font-medium font-roboto-serif dark:text-white mt-2">
                                Olympic Games Highlights
                            </h3>
                            <p class="text-sm text-[#71767A] mt-2">October 8, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-hidden rounded-lg ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-17.png" alt="Global Markets" class="w-full h-40 md:h-60 object-cover rounded" />
                        <div class="p-2">
                            <h3 class="text-[18px] md:text-[20px] font-medium font-roboto-serif dark:text-white mt-2">
                                Global Markets React to News
                            </h3>
                            <p class="text-sm text-[#71767A] mt-2">October 8, 2023</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Record Card -->
    <div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-full bg-[#1B366447] flex justify-center items-center pt-6 pb-4">
            <div class="w-[90%]">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 text-gray-300 py-6 relative">
                    <!-- Left Section (Image) -->
                    <div class="flex items-center justify-center md:justify-start">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/record.png" class="w-full max-w-[300px] md:max-w-none" alt="Record Image" />
                    </div>

                    <!-- Right Section (Text Content) -->
                    <div class="flex flex-col text-black dark:text-white w-full">
                        <p class="text-[24px] md:text-[32px] mb-5 font-semibold">On the record</p>
                        <p class="text-[16px] md:text-[20px]">
                            Bill Washington and the "South Carolina Constitutional Carry Act"
                        </p>
                        <p class="text-[16px] md:text-[20px] mt-[30px] md:mt-[60px]">
                            <span class="font-bold">The Vote:</span> Passed by a 55-45 vote in the state legislature.
                        </p>
                        <p class="text-[16px] md:text-[20px] mt-2">
                            <span class="font-bold">The Bill:</span> South Carolina Constitutional Carry Act
                        </p>
                        <p class="text-[16px] md:text-[20px] mt-2">
                            Summary: Expands the right to carry firearms without a permit and adjusts where and how firearms can be carried in public spaces.
                        </p>
                        <p class="text-[16px] md:text-[20px] mt-[30px] md:mt-[100px]">
                            "This bill supports the right of South Carolinians to self-defense and responsible gun ownership," said Representative Bill Washington.
                        </p>
                    </div>

                    <!-- Check Icon -->
                    <div class="absolute right-[-5px]">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/icons/check.svg" />
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- National View More -->
    <div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%] flex justify-between items-center pt-[24px] pb-[16px]">
            <div class="text-[32px] font-bold">
                <p class="dark:text-white text-[#1B2228]">National</p>
                <hr class="w-[60%] border-none h-[6px] bg-[#2D5599]" />
            </div>
            <div class="flex items-center justify-center gap-2 text-[14px] text-[#4864C0] cursor-pointer">
                View more <i class="fas fa-arrow-right dark:text-white"></i>
            </div>
        </div>
    </div>

    <!-- National Images Section -->
    <div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%] grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 py-8">
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-1.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Exploring the Depths of the Ocean
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 9, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-2.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Tech Giants Merge in Historic Deal
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-3.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        New Study on Mental Health
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-4.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Election Results Announced
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-5.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Innovative Tech Startups to Watch
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-6.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Olympic Games Highlights
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-7.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Global Markets React to News
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-8.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Breakthrough in Quantum Computing
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-5.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Innovative Tech Startups to Watch
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-6.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Breakthrough in Quantum Computing
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-7.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Olympic Games Highlights
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>
            <div class="dark:bg-[#1B2228] overflow-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-8.png" alt="Card Image" class="w-full h-[220px] object-cover rounded" />
                <div class="py-4">
                    <h3 class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                        Global Markets React to News
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        October 8, 2023
                    </p>
                </div>
            </div>

        </div>
    </div>

    <hr class="border-none h-[1px] bg-[#cbd5e1]" />

    <!-- Investigations view more -->
    <div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%] flex justify-between items-center pt-[24px] pb-[16px]">
            <div class="text-[32px] font-bold">
                <p class="dark:text-white text-[#1B2228]">Investigations</p>
                <hr class="w-[60%] border-none h-[6px] bg-[#2D5599]" />
            </div>
            <div class="flex items-center justify-center gap-2 text-[14px] text-[#4864C0] cursor-pointer">
                View more <i class="fas fa-arrow-right dark:text-white"></i>
            </div>
        </div>
    </div>

    <!-- Investigations grid -->
    <div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%]  flex items-start justify-between gap-10 pt-[16px] pb-[24px]">
            <!-- Main Large Article -->
            <div class="lg:flex-5 w-[50%]">
                <div class="overflow-hidden rounded-lg ">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-1.png" alt="Hurricane Florence" class="w-full h-250 md:h-120 lg:h-100 object-cover" />
                    <div class="p-4">
                        <h2 class="text-[24px] md:text-[28px] lg:text-[32px] font-extrabold mb-2 dark:text-white">
                            Exploring the Depths of the Ocean
                        </h2>
                        <p class="text-[#1B2228] text-[16px] md:text-[18px] lg:text-[20px] dark:text-white font-normal">
                            An in-depth look at the ongoing recovery efforts in North Carolina following Hurricane Florence.
                        </p>
                        <p class="text-sm text-[#71767A] mt-2">October 10, 2023</p>
                    </div>
                </div>
            </div>

            <!-- Smaller Articles -->
            <div class="w-[50%] grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-6 lg:flex-2">
                <div class="flex flex-col">
                    <div class="overflow-hidden rounded-lg ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-5.png" alt="Innovative Tech Startups" class="w-full h-40 md:h-60 object-cover rounded" />
                        <div class="p-2">
                            <h3 class="text-[18px] md:text-[20px] font-medium font-roboto-serif dark:text-white mt-2">
                                Innovative Tech Startups to Watch
                            </h3>
                            <p class="text-sm text-[#71767A] mt-2">October 8, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-hidden rounded-lg ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-8.png" alt="Quantum Computing" class="w-full h-40 md:h-60 object-cover rounded" />
                        <div class="p-2">
                            <h3 class="text-[18px] md:text-[20px] font-medium font-roboto-serif dark:text-white mt-2">
                                Breakthrough in Quantum Computing
                            </h3>
                            <p class="text-sm text-[#71767A] mt-2">October 8, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-hidden rounded-lg ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-6.png" alt="Olympic Games Highlights" class="w-full h-40 md:h-60 object-cover rounded" />
                        <div class="p-2">
                            <h3 class="text-[18px] md:text-[20px] font-medium font-roboto-serif dark:text-white mt-2">
                                Olympic Games Highlights
                            </h3>
                            <p class="text-sm text-[#71767A] mt-2">October 8, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-hidden rounded-lg ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-7.png" alt="Global Markets" class="w-full h-40 md:h-60 object-cover rounded" />
                        <div class="p-2">
                            <h3 class="text-[18px] md:text-[20px] font-medium font-roboto-serif dark:text-white mt-2">
                                Global Markets React to News
                            </h3>
                            <p class="text-sm text-[#71767A] mt-2">October 8, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-hidden rounded-lg ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-6.png" alt="Olympic Games Highlights" class="w-full h-40 md:h-60 object-cover rounded" />
                        <div class="p-2">
                            <h3 class="text-[18px] md:text-[20px] font-medium font-roboto-serif dark:text-white mt-2">
                                Olympic Games Highlights
                            </h3>
                            <p class="text-sm text-[#71767A] mt-2">October 8, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-hidden rounded-lg ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-17.png" alt="Global Markets" class="w-full h-40 md:h-60 object-cover rounded" />
                        <div class="p-2">
                            <h3 class="text-[18px] md:text-[20px] font-medium font-roboto-serif dark:text-white mt-2">
                                Global Markets React to News
                            </h3>
                            <p class="text-sm text-[#71767A] mt-2">October 8, 2023</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <hr class="border-none h-[1px] bg-[#cbd5e1]" />

    <!-- Videos View More -->
    <div class="w-full flex flex-col items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%]">
            <div class="w-[100%] flex flex-wrap justify-between items-center pt-[24px]">
                <div class="w-full md:w-[60%] text-center md:text-end text-[24px] md:text-[32px] font-bold md:mb-0">
                    <p class="dark:text-white text-[#1B2228]">Videos and Podcasts</p>
                </div>
                <div class="flex w-full md:w-auto items-center justify-center gap-2 text-[14px] text-[#4864C0] cursor-pointer mb-[5px] md:mt-[20px]">
                    View more <i class="fas fa-arrow-right dark:text-white"></i>
                </div>
            </div>
            <div class="w-[100%]">
                <hr class="w-[100%] border-none h-[6px] bg-[#2D5599]" />
            </div>
        </div>
    </div>


    <!-- Videos Grid  -->
    <div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%]  flex items-start justify-between gap-10 pt-[16px] pb-[24px]">
            <!-- Main Large Article -->
            <div class="lg:flex-5 w-[50%]">
                <div class="overflow-hidden rounded-lg ">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-13.png" alt="Hurricane Florence" class="w-full h-250 md:h-120 lg:h-100 object-cover" />
                    <div class="p-4">
                        <h2 class="text-[24px] md:text-[28px] lg:text-[32px] font-extrabold mb-2 dark:text-white">
                            Hurricane Florence: North Carolina's Recovery Efforts
                        </h2>
                        <p class="text-[#1B2228] text-[16px] md:text-[18px] lg:text-[20px] dark:text-white font-normal">
                            An in-depth look at the ongoing recovery efforts in North Carolina following Hurricane Florence.
                        </p>
                        <p class="text-sm text-[#71767A] mt-2">October 10, 2023</p>
                    </div>
                </div>
            </div>

            <!-- Smaller Articles -->
            <div class="w-[50%] grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-6 lg:flex-2">
                <div class="flex flex-col">
                    <div class="overflow-hidden rounded-lg ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-14.png" alt="Innovative Tech Startups" class="w-full h-40 md:h-60 object-cover rounded" />
                        <div class="p-2">
                            <h3 class="text-[18px] md:text-[20px] font-medium font-roboto-serif dark:text-white mt-2">
                                Innovative Tech Startups to Watch
                            </h3>
                            <p class="text-sm text-[#71767A] mt-2">October 8, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-hidden rounded-lg ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-15.png" alt="Quantum Computing" class="w-full h-40 md:h-60 object-cover rounded" />
                        <div class="p-2">
                            <h3 class="text-[18px] md:text-[20px] font-medium font-roboto-serif dark:text-white mt-2">
                                Breakthrough in Quantum Computing
                            </h3>
                            <p class="text-sm text-[#71767A] mt-2">October 8, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-hidden rounded-lg ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-16.png" alt="Olympic Games Highlights" class="w-full h-40 md:h-60 object-cover rounded" />
                        <div class="p-2">
                            <h3 class="text-[18px] md:text-[20px] font-medium font-roboto-serif dark:text-white mt-2">
                                Olympic Games Highlights
                            </h3>
                            <p class="text-sm text-[#71767A] mt-2">October 8, 2023</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-hidden rounded-lg ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-17.png" alt="Global Markets" class="w-full h-40 md:h-60 object-cover rounded" />
                        <div class="p-2">
                            <h3 class="text-[18px] md:text-[20px] font-medium font-roboto-serif dark:text-white mt-2">
                                Global Markets React to News
                            </h3>
                            <p class="text-sm text-[#71767A] mt-2">October 8, 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr class="border-none h-[1px] bg-[#cbd5e1]" />

    <!-- seacrh -->
    <div class="w-full pb-[76px] pt-[96px] flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%] md:w-[60%] text-center">
            <h2 class="text-xl md:text-2xl font-bold text-[#1B2228] font-roboto-serif dark:text-white mb-4">
                Stay Informed
            </h2>
            <p class="text-gray-700 dark:text-gray-400 mb-6 text-sm md:text-base">
                Subscribe to our newsletter for the latest updates.
            </p>
            <form class="flex flex-col md:flex-row items-center justify-center gap-4">
                <input type="email" placeholder="Email address" class="bg-white text-gray-900 dark:bg-black dark:text-gray-200 py-3 px-4 rounded-lg w-full md:w-[60%] focus:outline-none focus:ring-2 focus:ring-blue-500" />
                <button type="submit" class="bg-[#4864C0] hover:bg-[#3d579e] text-white py-3 px-8 rounded-lg font-medium w-full md:w-auto">
                    Subscribe
                </button>
            </form>
        </div>
    </div>

<?php get_footer(); ?>
