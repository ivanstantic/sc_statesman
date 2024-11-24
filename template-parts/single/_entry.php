
<!-- Article Header -->
<header class="w-full flex items-center justify-center  ">
    <div class="w-full p-4 md:p-0 max-w-[1344px]">
        <div class="flex justify-center items-center flex-col mt-[3rem]">

            <!-- Header Section -->
            <div class="w-full max-w-[750px]">
                <?php if (!empty(get_the_category())) : ?>
                    <div class="text-blue-600 text-[14px] font-bold font-roboto-serif">
                        <?php the_category(', '); ?>
                    </div>
                <?php endif; ?>
                <h1 class="lg:text-[3rem] md:text-[2.5rem] sm:text-[2.5rem] text-[2rem] leading-[52px] font-bold mt-2 w-[77%]">
                    <?php the_title(); ?>
                </h1>
                <!-- <p class="text-gray-600 mt-2 text-[20px] dark:text-white">
                    An In-depth Look at the Recent Developments Along South Carolina's Coastline
                </p> -->
            </div>

            <!-- Image Section -->
            <div class="mt-6 w-full max-w-[996px] aspect-[996/474] overflow-hidden">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('thumbnail_single', [ 'class' => 'w-full h-full object-cover rounded-lg shadow-lg' ]); ?>
                <?php endif; ?>
                <!-- <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/article-hero.png" 
                    alt="South Carolina Coastline" 
                    class="rounded-lg shadow-lg"
                /> -->
            </div>
            
            <!-- Author Info Section -->
            <div class="mt-4 w-full max-w-[750px] flex items-center">
                <?php echo get_avatar(get_the_author_meta('ID'), 40, '', '', [
                    'class' => 'w-10 h-10 rounded-full mr-4',
                ]); ?>
                <div>
                    <p class="font-bold text-gray-800 dark:text-white">
                        <a href="<?php echo scs_get_author_url(); ?>">
                            <?php the_author(); ?>
                        </a>
                    </p>
                    <!-- <p class="text-[14px] text-gray-500">Senior Reporter</p> -->
                </div>
            </div>
        
            <!-- Date Section -->
            <p class="mt-2 w-full max-w-[750px] text-[14px] text-gray-500">
                <?php echo get_the_date('F j, Y'); ?>
            </p>
        </div>
    </div>
</header>

<main class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228] pt-10 pb-14">
    <div class="w-full p-4 md:p-0 max-w-[750px]">
        <div class="mx-auto pt-10 self-center border-t-2">
            <!-- <hr class="border-none h-[1px] bg-gray-600 m-8 w-[100%]" /> -->
            <!-- Title Section -->
            <h1 class="text-[24px] font-bold font-roboto-serif">An In-depth Look at the Recent Developments Along South Carolina's Coastline</h1>
            <p class="mt-4 text-gray-600 leading-relaxed text-[14px]  dark:text-white">
                The scenic coastline of South Carolina has been a focal point for recent urban and infrastructural advancements. These developments are not only reshaping the landscape but are also fueling discussions about the future of coastal management and environmental impacts. One of the prominent changes along the coast is the surge in new residential communities. Cities like Charleston and Myrtle Beach are witnessing the construction of luxury homes and gated communities, aiming to attract affluent retirees and professionals looking for scenic beachfront living. With a growing influx of new residents, these developments are creating a wave of both excitement and concern among locals.
            </p>
            <p class="mt-4 text-gray-600 leading-relaxed text-[14px] dark:text-white">
                Tourism remains a key economic driver for South Carolina’s coastal areas. The state government and private investors are ramping up efforts to modernize tourist facilities, build new hotels, and expand marina infrastructure to cater to a rising number of visitors. Recent investment projects include revitalizing the historic downtowns and expanding recreational facilities to create a more attractive and accessible coastline.
            </p>
            <p class="mt-4 text-gray-600 leading-relaxed text-[14px] dark:text-white">
                The accelerated growth along the coastline has sparked debates over its environmental consequences. Experts warn that the rapid expansion of infrastructure may lead to increased erosion, loss of natural habitats, and water quality issues. Coastal management authorities are grappling with the challenge of balancing development with sustainability, implementing stricter regulations, and investing in erosion-control measures.
            </p>
        
            <!-- Image Section -->
            <div class="mt-6">
                <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/article-1.png" 
                alt="New commercial area" 
                class="w-[100%]"
                />
                <p class="mt-2 text-sm text-gray-500">A new commercial area in Charleston, South Carolina.</p>
            </div>
        
            <!-- Environmental Concerns -->
            <h2 class="mt-8 text-[24px] font-bold font-roboto-serif ">Environmental Concerns</h2>
            <p class="mt-1 text-gray-600 leading-relaxed text-[14px] dark:text-white">
                Hurricanes and rising sea levels remain a persistent threat. Recent policy changes emphasize the importance of enhancing the resilience of coastal infrastructure. Building codes are being updated to ensure that new constructions can withstand extreme weather events. Additionally, there are ongoing initiatives to strengthen levees and implement flood protection systems in vulnerable areas.
            </p>
            <p class="mt-4 text-gray-600 leading-relaxed text-[14px] dark:text-white">
                As South Carolina’s coastal regions continue to grow, the emphasis on sustainable development and smart city planning will be paramount. There is a push for eco-friendly architecture, green spaces, and the preservation of natural coastal features. The coming years will likely see tighter regulations and innovative solutions aimed at harmonizing development with the preservation of South Carolina’s unique coastal ecosystem.
            </p>
            <p class="mt-4 text-gray-600 leading-relaxed text-[14px] dark:text-white">
                South Carolina’s coastline is at a pivotal moment, with recent developments reshaping the landscape and creating new opportunities and challenges. Former President Barack Obama once noted, “We are the first generation to feel the impact of climate change and the last generation that can do something about it.” This resonates deeply in the context of South Carolina’s ongoing struggle to balance development with the preservation of its beautiful and delicate coastal environment.
            </p>
        
            <!-- Podcast Embed Section -->
            <div class="mt-8 rounded-lg flex items-start">
                <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/audio-placeholder.png" 
                alt="Podcast Thumbnail" 
                class="w-[100%]"
                />
            </div>
        
            <!-- Final Summary -->
            <p class="mt-6 text-gray-600 leading-relaxed text-[14px] dark:text-white">
                As South Carolina’s coastal regions continue to grow, the emphasis on sustainable development and smart city planning will be paramount. There is a push for eco-friendly architecture, green spaces, and the preservation of natural coastal features. The coming years will likely see tighter regulations and innovative solutions aimed at harmonizing development with the preservation of South Carolina’s unique coastal ecosystem.
            </p>
            </div>
    </div>
</main>
<hr class="border-none h-[1px] bg-[#cbd5e1]" />
<div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
    <div class="xl:w-[70%] lg:w-[80%] w-[90%] flex justify-between items-center pt-[24px] pb-[0px]">
        <div class="text-[32px] font-bold">
            <p class="dark:text-white text-[#1B2228]">Related Articles</p>
            <hr class="w-[20%] border-none h-[6px] bg-[#2D5599]" />
        </div>
        <div class="flex items-center justify-center gap-2 text-[14px] text-[#4864C0] cursor-pointer">
            View more <i class="fas fa-arrow-right dark:text-white"></i>
        </div>
    </div>
</div>
<div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
    <div class="xl:w-[70%] lg:w-[80%] w-[90%] grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6 py-8">
        <div class="dark:bg-[#1B2228] overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-9.png" alt="Card Image"
                class="w-full h-[220px] object-cover rounded" />
            <div class="py-4">
                <h3
                    class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                    Local Business Thrives Amid Economic Challenges
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                    October 9, 2023
                </p>
            </div>
        </div>
        <div class="dark:bg-[#1B2228] overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-10.png" alt="Card Image"
                class="w-full h-[220px] object-cover rounded" />
            <div class="py-4">
                <h3
                    class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                    Health Officials Warn of Flu Season
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                    October 8, 2023
                </p>
            </div>
        </div>
        <div class="dark:bg-[#1B2228] overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-11.png" alt="Card Image"
                class="w-full h-[220px] object-cover rounded" />
            <div class="py-4">
                <h3
                    class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                    High School Football Team Wins State Championship
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                    October 8, 2023
                </p>
            </div>
        </div>

    </div>
</div>

<hr class="border-none h-[1px] bg-[#cbd5e1]" />
<div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
    <div class="w-[90%] max-w-[1344px] flex justify-between items-center pt-[24px] pb-[0px]">
        <div class="text-[32px] font-bold">
            <p class="dark:text-white text-[#1B2228]">Latest News</p>
            <hr class="w-[20%] border-none h-[6px] bg-[#2D5599]" />
        </div>
        <div class="flex items-center justify-center gap-2 text-[14px] text-[#4864C0] cursor-pointer">
            View more <i class="fas fa-arrow-right dark:text-white"></i>
        </div>
    </div>
</div>
<div class="w-full flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
    <div class="w-[90%] max-w-[1344px] grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 py-8">
        <div class="dark:bg-[#1B2228] overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-9.png" alt="Card Image"
                class="w-full h-[220px] object-cover rounded" />
            <div class="py-4">
                <h3
                    class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                    Local Business Thrives Amid Economic Challenges
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                    October 9, 2023
                </p>
            </div>
        </div>
        <div class="dark:bg-[#1B2228] overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-10.png" alt="Card Image"
                class="w-full h-[220px] object-cover rounded" />
            <div class="py-4">
                <h3
                    class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                    Health Officials Warn of Flu Season
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                    October 8, 2023
                </p>
            </div>
        </div>
        <div class="dark:bg-[#1B2228] overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-11.png" alt="Card Image"
                class="w-full h-[220px] object-cover rounded" />
            <div class="py-4">
                <h3
                    class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                    High School Football Team Wins State Championship
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                    October 8, 2023
                </p>
            </div>
        </div>
        <div class="dark:bg-[#1B2228] overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-4.png" alt="Card Image"
                class="w-full h-[220px] object-cover rounded" />
            <div class="py-4">
                <h3
                    class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                    Global Markets React to News
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                    October 8, 2023
                </p>
            </div>
        </div>
        <div class="dark:bg-[#1B2228] overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-5.png" alt="Card Image"
                class="w-full h-[220px] object-cover rounded" />
            <div class="py-4">
                <h3
                    class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                    Exploring the Depths of the Ocean
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                    October 8, 2023
                </p>
            </div>
        </div>
        <div class="dark:bg-[#1B2228] overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-6.png" alt="Card Image"
                class="w-full h-[220px] object-cover rounded" />
            <div class="py-4">
                <h3
                    class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                    Tech Giants Merge in Historic Deal
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                    October 8, 2023
                </p>
            </div>
        </div>
        <div class="dark:bg-[#1B2228] overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-7.png" alt="Card Image"
                class="w-full h-[220px] object-cover rounded" />
            <div class="py-4">
                <h3
                    class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                    New Study on Mental Health
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                    October 8, 2023
                </p>
            </div>
        </div>
        <div class="dark:bg-[#1B2228] overflow-hidden">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/grid/grid-8.png" alt="Card Image"
                class="w-full h-[220px] object-cover rounded" />
            <div class="py-4">
                <h3
                    class="text-[20px] font-semibold text-gray-800 dark:text-white leading-[24px] font-medium font-roboto-serif">
                    Election Results Announced
                </h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                    October 8, 2023
                </p>
            </div>
        </div>
    </div>
</div>
