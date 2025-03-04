<?php
$page_title = "About | Time Portal";
include_once 'includes/header.inc.php';
?>

<div class="flex flex-col justify-center items-center font-['MedievalSharp'] mt-20 md:w-[60%] sm:p-6 transition-all duration-500">
    <div>
        <h1 class="bg-slate-950 text-5xl text-center hover:scale-125 transition-all duration-500 p-8 rounded">About Us</h1>
    </div>
    <p class="m-6 text-2xl text-center">
        Welcome to the Time Travel Adventure Portal, your gateway to exploring the wonders of the past, present, and future! Our platform is designed to take you on an interactive journey through time, bringing historical events, scientific discoveries, and cosmic phenomena to life.
    </p>
    <div class="grid md:grid-cols-3 sm:grid-cols-1">
        <div class="text-center">
            <h4 class="text-3xl m-4 font-bold">Our Mission</h4>
            <p class="font-['Spectral']">This project is part of our Web Development module at NSBM Green University. As undergraduates in Computer Science, we aimed to create a dynamic platform that enhances learning through visually rich content and structured timelines.</p>
        </div>
        <hr class="md:hidden mt-2">
        <div class="md:border-x-4 sm:border-x-0 text-center px-4">
            <h4 class="text-3xl m-4 font-bold">What You'll Discover</h4>
            <ul class="font-['Spectral']">
                <li>
                    <span class="font-bold">Interactive Timelines</span> - Navigate through different eras with dynamic and engaging timelines.
                </li>
                <li>
                    <span class="font-bold">Subtopics</span> - Explore significant events, from the birth of the universe to major historical milestones.
                </li>
                <li>
                    <span class="font-bold">Multimedia Elements</span> - Experience history with images, videos, and animations that bring the past to life.
                </li>
            </ul>
        </div>
        <hr class="md:hidden mt-2">
        <div class="text-center md:mr-4">
            <h4 class="text-3xl m-4 font-bold">Our Approch</h4>
            <p class="font-['Spectral']">We focused on delivering an intuitive, visually appealing, and informative experience. This project is not just an assignment—it’s a step toward building interactive and educational web applications.</p>
        </div>
    </div>

    <?php
    $profile_names = array(
        "Seniru Samaranayake",
        "Wasana Fernando",
        "Sanidula Liyanage",
        "Achini Subasinghe",
        "Fathima Shamha",
        "Seniru Damsith",
        "Supundi Minupama"
    );

    $profile_links = array(
        "https://www.linkedin.com/in/seniru-samaranayake-788957294?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
        "https://www.linkedin.com/in/wasana-fernando-12aa50309?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
        "https://www.linkedin.com/in/sanidula-liyanage-4bb764338?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
        "https://www.linkedin.com/in/achini-subasinghe-a7642b2aa?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
        "https://www.linkedin.com/in/fathima-shamha-ab0806300?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
        "https://www.linkedin.com/in/seniru-damsith-26014434a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
        ""
    );
    ?>

    <h2 class="text-4xl font-bold mb-6 mt-12 bg-slate-950 p-4 hover:scale-125 transition-all duration-500">Meet the Creators</h2>
    <div class="grid md:grid-cols-4 sm:grid-cols-2 justify-center items-center">
        <?php
        foreach (array_keys($profile_names) as $i) {
            $profile_name = $profile_names[$i];
            $image_name = strtolower(strtok($profile_name, " ")) . ".webp";
        ?>
            <a href="<?php echo $profile_links[$i] ?>">
                <div class="bg-slate-950 flex flex-col justify-center items-center p-4 rounded hover:scale-125 transition-all duration-500 m-4">
                    <img src="<?php echo "images/static/profile/$image_name" ?>" alt="<?php echo "$profile_name" ?>" class="sm:w-60 rounded-full">
                    <h3 class="text-2xl font-bold m-2 text-center"><?php echo "$profile_name" ?></h3>
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
                            <path fill="#0078d4" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5	V37z"></path>
                            <path d="M30,37V26.901c0-1.689-0.819-2.698-2.192-2.698c-0.815,0-1.414,0.459-1.779,1.364	c-0.017,0.064-0.041,0.325-0.031,1.114L26,37h-7V18h7v1.061C27.022,18.356,28.275,18,29.738,18c4.547,0,7.261,3.093,7.261,8.274	L37,37H30z M11,37V18h3.457C12.454,18,11,16.528,11,14.499C11,12.472,12.478,11,14.514,11c2.012,0,3.445,1.431,3.486,3.479	C18,16.523,16.521,18,14.485,18H18v19H11z" opacity=".05"></path>
                            <path d="M30.5,36.5v-9.599c0-1.973-1.031-3.198-2.692-3.198c-1.295,0-1.935,0.912-2.243,1.677	c-0.082,0.199-0.071,0.989-0.067,1.326L25.5,36.5h-6v-18h6v1.638c0.795-0.823,2.075-1.638,4.238-1.638	c4.233,0,6.761,2.906,6.761,7.774L36.5,36.5H30.5z M11.5,36.5v-18h6v18H11.5z M14.457,17.5c-1.713,0-2.957-1.262-2.957-3.001	c0-1.738,1.268-2.999,3.014-2.999c1.724,0,2.951,1.229,2.986,2.989c0,1.749-1.268,3.011-3.015,3.011H14.457z" opacity=".07"></path>
                            <path fill="#fff" d="M12,19h5v17h-5V19z M14.485,17h-0.028C12.965,17,12,15.888,12,14.499C12,13.08,12.995,12,14.514,12	c1.521,0,2.458,1.08,2.486,2.499C17,15.887,16.035,17,14.485,17z M36,36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698	c-1.501,0-2.313,1.012-2.707,1.99C24.957,25.543,25,26.511,25,27v9h-5V19h5v2.616C25.721,20.5,26.85,19,29.738,19	c3.578,0,6.261,2.25,6.261,7.274L36,36L36,36z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 100 100">
                            <circle cx="52" cy="52" r="44" opacity=".35"></circle>
                            <circle cx="50" cy="50" r="44" fill="#f2f2f2"></circle>
                            <path fill="#707cc0" d="M50,12.5c-20.711,0-37.5,16.789-37.5,37.5S29.289,87.5,50,87.5S87.5,70.711,87.5,50 S70.711,12.5,50,12.5z"></path>
                            <path fill="#f2f2f2" d="M60.161,83.936c0-1.122,0.042-4.813,0.042-9.389c0-3.192-1.095-5.281-2.324-6.338 c7.624-0.847,15.626-3.74,15.626-16.888c0-3.736-1.324-6.791-3.518-9.184c0.352-0.866,1.527-4.346-0.341-9.057 c0,0-2.868-0.92-9.402,3.508c-2.734-0.759-5.662-1.139-8.568-1.152c-2.91,0.013-5.838,0.393-8.568,1.152 c-6.538-4.429-9.411-3.508-9.411-3.508c-1.862,4.712-0.687,8.192-0.336,9.057c-2.189,2.393-3.523,5.448-3.523,9.184 c0,13.115,7.99,16.051,15.589,16.915c-0.978,0.856-1.862,2.364-2.173,4.575c-1.95,0.876-6.907,2.386-9.96-2.844 c0,0-1.808-3.285-5.242-3.527c0,0-3.342-0.043-0.235,2.08c0,0,2.244,1.053,3.8,5.006c0,0,2.009,6.656,11.529,4.588 c0.017,2.856,0.046,5.008,0.046,5.821c0,0.385-0.122,0.792-0.383,1.115C45.945,86.292,49.3,87,52.807,87 c2.981,0,5.853-0.509,8.576-1.417C60.502,85.37,60.161,84.613,60.161,83.936z"></path>
                            <path fill="#40396e" d="M50,89c-21.505,0-39-17.495-39-39s17.495-39,39-39s39,17.495,39,39S71.505,89,50,89z M50,14 c-19.851,0-36,16.149-36,36s16.149,36,36,36s36-16.149,36-36S69.851,14,50,14z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
                            <path fill="#f55376" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20 c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20 C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                            <path fill="#fac8d5" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5 s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path>
                            <circle cx="31.5" cy="16.5" r="1.5" fill="#fac8d5"></circle>
                            <path fill="#fac8d5" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12 C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18 z"></path>
                        </svg>
                    </div>
                </div>
            </a>
        <?php
        }
        ?>
    </div>
</div>
<?php
include_once 'includes/footer.php';
?>
</body>

</html>