
    <hr class="border-none h-[1px] bg-[#cbd5e1]" />

    <!-- Subscribe -->
    <div id="subscribe" class="w-full pb-[76px] pt-[96px] flex items-center justify-center bg-[#f2f3f4] dark:bg-[#1B2228]">
        <div class="w-[90%] max-w-[1344px] md:w-[60%] text-center">
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

    <!-- Footer -->
    <footer class="flex items-center justify-center bg-[#1B3664] text-white">
        <div class="container w-[90%] max-w-[1344px] pt-[48px] pb-[88px]">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6 text-center md:text-left">
                <!-- Logo Section -->
                <div class="flex flex-col items-center md:items-start">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/logo.svg" alt="SC Statesman Logo" class="w-40 h-auto mb-6" />
                    </a>
                </div>

                <!-- About Us Section -->
                <div>
                    <h3 class="text-lg font-bold">About Us</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="/about/" class="hover:text-gray-300">Our Mission</a></li>
                        <li><a href="#subscribe" class="hover:text-gray-300">Subscribe</a></li>
                    </ul>
                </div>

                <!-- Resources Section -->
                <div>
                    <h3 class="text-lg font-bold">Resources</h3>
                    <ul class="mt-4 space-y-2">
                        <li>
                            <a href="#" class="hover:text-gray-300">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-gray-300">Terms of Service</a>
                        </li>
                    </ul>
                </div>

                <!-- Follow Us Section -->
                <div>
                    <h3 class="text-lg font-bold">Follow Us</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="hover:text-gray-300">Facebook</a></li>
                        <li><a href="#" class="hover:text-gray-300">Twitter</a></li>
                        <li><a href="#" class="hover:text-gray-300">Instagram</a></li>
                    </ul>
                </div>

                <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/Tree.png" alt="SC Statesman Logo" class="absolute max-w-[258px] h-auto 2xl:right-[20rem] xl:right-[15rem] lg:right-[8rem] md:right-[8rem] sm:right-[2rem]" />

                <!-- Social Icons Section -->
                <div class="flex justify-center md:justify-end space-x-4">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/icons/Fb.svg" alt="Facebook Logo" class="w-6 h-auto" />
                    </a>
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/icons/instagram-icon.svg" alt="Instagram Logo" class="w-6 h-auto" />
                    </a>
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/icons/twitter-icon.svg" alt="Twitter Logo" class="w-6 h-auto" />
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <script>
        const themeToggle = document.getElementById("theme-toggle");
        const toggleThumb = document.getElementById("toggle-thumb");
        const toggleIcon = document.getElementById("toggle-icon");

        if (
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
            toggleThumb.classList.add("translate-x-4");
            toggleThumb.classList.remove("translate-x-1");
            toggleIcon.src = "<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/icons/night-icon.svg";
        } else {
            document.documentElement.classList.remove("dark");
            toggleThumb.classList.add("translate-x-1");
            toggleThumb.classList.remove("translate-x-4");
            toggleIcon.src = "<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/icons/day-icon.svg";
        }

        if ( themeToggle ) {
            themeToggle.addEventListener("click", () => {
                if (document.documentElement.classList.contains("dark")) {
                    document.documentElement.classList.remove("dark");
                    localStorage.theme = "light";
                    toggleThumb.classList.add("translate-x-1");
                    toggleThumb.classList.remove("translate-x-4");
                    toggleIcon.src = "<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/icons/day-icon.svg";
                } else {
                    document.documentElement.classList.add("dark");
                    localStorage.theme = "dark";
                    toggleThumb.classList.add("translate-x-4");
                    toggleThumb.classList.remove("translate-x-1");
                    toggleIcon.src = "<?php echo get_stylesheet_directory_uri(); ?>/_assets/public/images/icons/night-icon.svg";
                }
            });
        }

        const menuToggle = document.getElementById("mobile-menu-toggle");
        const mobileMenu = document.getElementById("mobile-menu");
        const hamburgerIcon = document.getElementById("hamburger-icon");
        const closeIcon = document.getElementById("close-icon");

        if ( menuToggle ) {
            menuToggle.addEventListener("click", () => {
                mobileMenu.classList.toggle("hidden");

                hamburgerIcon.classList.toggle("hidden");
                closeIcon.classList.toggle("hidden");
            });
        }
    </script>
</body>

</html>