<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volea Artiom_Backend Developer</title>
    <link rel="shortcut icon" href="img/AV_wh.png" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home_flying_text.css">
    <link rel="stylesheet" href="parallax_img.css">
    <link rel="stylesheet" href="about_me.css">

    <script type="module" src="scripts.js"></script>
    <script type="module" src="home-flying_text.js"></script>
    <script type="module" src="parallax_img.js"></script>
    <style>
        .text-green-700 {
            color: #39ff14;
        }
        .text-gray-400 {
            color: #c6cdcf;
        }
    </style>

</head>
<body class="dark:bg-[#151515] bg-[#fcfcfc] text-black dark:text-white font-lato transition-colors">

<?php include('header.php') ?>

<div id="canvas-container" class="fixed inset-0 z-[-1] pointer-events-none"></div>

<!-- Основной контейнер для всего прокручиваемого контента -->
<div id="scrollable-content" class="relative z-10 min-h-[200vh] text-white">

    <div class="relative min-h-screen flex flex-col items-center justify-center pt-20 pb-10">


        <div class="flex-grow flex items-center justify-center text-center px-4">
            <a href="#info"><h1 class="text-4xl md:text-6xl font-bold mt-20"><?php echo ($translations['text_more_info'])?> &darr;</h1></a>
<!--            <h1 class="text-4xl md:text-3xl">Designe to scale</h1>-->
        </div>
    </div>

    <!-- Ниже будут располагаться основные блоки контента -->
    <div id="info" class="content-block text-center  mx-auto my-10 p-10 max-w-4xl rounded-lg shadow-lg">
        <p class="text-3xl font-bold mb-4"><?php echo ($translations['info_name'])?> | <?php echo ($translations['info_position'])?></p>
        <p class="text-xl font-bold mb-4"><?php echo ($translations['info_email'])?> | <?php echo ($translations['info_tel'])?></p>
        <h3 class="text-1xl font-bold mb-10"><?php echo ($translations['info_address'])?></h3>
        <a href="https://www.linkedin.com/in/artiom-volea" class="text-2xl italic hover:underline hover:text-3xl">LinkedIn: linkedin.com/in/artiom-volea</a>
    </div>
    <div id="skills" class="content-block text-left  mx-auto my-10 p-10 max-w-4xl rounded-lg shadow-lg">
        <p class="text-3xl font-bold mb-4 text-gray-300"><?php echo ($translations['skills'])?>:</p>
        <p class="text-lg mb-3 text-gray-400">
            <span class="text-2xl font-bold text-green-700"><?php echo ($translations['skill_1H'])?>:</span> <?php echo ($translations['skill_1'])?>
        </p>
        <p class="text-lg mb-3 text-gray-400">
            <span class="text-2xl font-bold text-green-700"><?php echo ($translations['skill_2H'])?>:</span> <?php echo ($translations['skill_2'])?>
        </p>
        <p class="ext-lg mb-3 text-gray-400">
            <span class="text-2xl font-bold text-green-700"><?php echo ($translations['skill_3H'])?>:</span> <?php echo ($translations['skill_3'])?>
        </p>
        <p class="ext-lg mb-3 text-gray-400">
            <span class="text-2xl font-bold text-green-700"><?php echo ($translations['skill_4H'])?>:</span> <?php echo ($translations['skill_4'])?>
        </p>
        <p class="ext-lg mb-3 text-gray-400">
            <span class="text-2xl font-bold text-green-700"><?php echo ($translations['skill_5H'])?>:</span> <?php echo ($translations['skill_5'])?>
        </p>
        <p class="ext-lg mb-3 text-gray-400">
            <span class="text-2xl font-bold text-green-700"><?php echo ($translations['skill_6H'])?>:</span> <?php echo ($translations['skill_6'])?>
        </p>
        <p class="ext-lg mb-3 text-gray-400">
            <span class="text-2xl font-bold text-green-700"><?php echo ($translations['skill_7H'])?>:</span> <?php echo ($translations['skill_7'])?>
        </p>
    </div>

    <div id="experience" class="content-block text-left  mx-auto my-10 p-10 max-w-4xl rounded-lg shadow-lg">
        <p class="text-3xl font-bold mb-4 text-gray-300"><?php echo ($translations['experience'])?>:</p>
        <ol class="relative border-s border-gray-200 dark:border-gray-700">
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                    <?php echo ($translations['cpa_time'])?>
                </time>
                <h3 class="mb-3 text-lg font-semibold text-gray-900 dark:text-white">
                    CpaBox (<a href="https://cpabox.net">https://cpabox.net</a>) | <?php echo ($translations['cpa_h'])?>
                </h3>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    <?php echo ($translations['cpa_1'])?>
                </p>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    <?php echo ($translations['cpa_2'])?>
                </p>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    <?php echo ($translations['cpa_3'])?>
                </p><p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    <?php echo ($translations['cpa_4'])?>
                </p><p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    <?php echo ($translations['cpa_5'])?>
                </p>
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                    <?php echo ($translations['midnight_time'])?>
                </time>
                <h3 class="mb-3 text-lg font-semibold text-gray-900 dark:text-white">
                    <?php echo ($translations['midnight_h'])?>
                </h3>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    <?php echo ($translations['midnight_1'])?>
                </p>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    <?php echo ($translations['midnight_2'])?>
                </p>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    <?php echo ($translations['midnight_3'])?>
                </p>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    <?php echo ($translations['midnight_4'])?>
                </p>
            </li>
            <li class="ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                    <?php echo ($translations['freelance_time'])?>
                </time>
                <h3 class="mb-3 text-lg font-semibold text-gray-900 dark:text-white">
                    <?php echo ($translations['freelance_h'])?>
                </h3>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    <?php echo ($translations['freelance_1'])?>
                </p>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    <?php echo ($translations['freelance_2'])?>
                </p>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    <?php echo ($translations['freelance_3'])?>
                </p>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    <?php echo ($translations['freelance_4'])?>
                </p>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    <?php echo ($translations['freelance_5'])?>
                </p>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                    <?php echo ($translations['freelance_6'])?>
                </p>
            </li>
        </ol>
    </div>

    <div id="about-me" class="content-block bg-black bg-opacity-60 mx-auto my-10 p-10 max-w-4xl rounded-lg shadow-lg">
        <section class="about-me about-container display-flex flex-column">
            <div class="about-me-photo">
                <img src="img/profile2.jpg" alt="Your Profile Picture">
            </div>
            <div class="about-me-info">
                <h2 class="about-me-info-title text-3xl font-bold mb-3"><?php echo ($translations['index_about_me_h'])?>:</h2>
                <p class="mb-3"><?php echo ($translations['index_about_me_description_1'])?></p>
                <p class="mb-3"><?php echo ($translations['index_about_me_description_2'])?></p>
                <p class="mb-3"><?php echo ($translations['index_about_me_description_3'])?></p>
            </div>
        </section>
    </div>

    <?php include('parallax_img.php') ?>



    <?php include('home_flying_text.php') ?>

    <div data-dial-init class="fixed right-6 bottom-6 group">
        <div id="speed-dial-menu-dropdown-square" class="flex flex-col justify-end hidden py-1 mb-4 space-y-2 bg-white border border-gray-100 rounded-lg shadow-xs dark:bg-gray-700 dark:border-gray-600">
            <ul class="text-sm text-gray-500 dark:text-gray-300">
                <li>
                    <a href="#to-top" class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white">
                        <span class="text-sm font-medium"><?php echo ($translations['to_top'])?></span>
                    </a>
                </li>
                <li>
                    <a href="#info" class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white">
                        <span class="text-sm font-medium"><?php echo ($translations['menu_info'])?></span>
                    </a>
                </li>
                <li>
                    <a href="#skills" class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white">
                        <span class="text-sm font-medium"><?php echo ($translations['skills'])?></span>
                    </a>
                </li>
                <li>
                    <a href="#experience" class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white">
                        <span class="text-sm font-medium"><?php echo ($translations['experience'])?></span>
                    </a>
                </li>
                <li>
                    <a href="#about-me" class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white">
                        <span class="text-sm font-medium"><?php echo ($translations['index_about_me_h'])?></span>
                    </a>
                </li>
                <li>
                    <a href="#projects" class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white">
                        <span class="text-sm font-medium"><?php echo ($translations['my_projects'])?></span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white" onclick="setLanguage('<?php echo ($translations['lang'] ?? 'ru')?>'); return false;" style="text-transform: uppercase;">
                        <b class="text"><span class="text-sm font-medium"> lang: <?php echo ($translations['lang'] ?? 'en') ?> </span></b>
                    </a>
                </li>
            </ul>
        </div>
        <button type="button" data-dial-toggle="speed-dial-menu-dropdown-square" aria-controls="speed-dial-menu-dropdown-square" aria-expanded="false" class="flex items-center justify-center ml-auto text-white bg-green-700 rounded-lg w-14 h-14 hover:bg-green-800 dark:bg-green-600 dark:hover:bg-green-700 focus:ring-4 focus:ring-green-300 focus:outline-none dark:focus:ring-green-800">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
            </svg>
            <span class="sr-only">Open actions menu</span>
        </button>
    </div>



    <!-- конечный контейнер -->
    <div class="h-20"></div>

</div>

<!--Для отрисовки 3D-канваса-->
<script type="module">
    import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.164.1/build/three.module.js';
    import { TextureLoader } from 'https://cdn.jsdelivr.net/npm/three@0.164.1/build/three.module.js';

    const container = document.getElementById('canvas-container');
    if (!container) throw new Error('canvas-container not found');

    const scene = new THREE.Scene();

    const camera = new THREE.PerspectiveCamera(45, container.clientWidth / container.clientHeight, 0.1, 1000);
    camera.position.set(0, 0, 10);

    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.setClearColor(0x000000, 0);
    renderer.shadowMap.enabled = true;
    container.appendChild(renderer.domElement);

    scene.add(new THREE.AmbientLight(0xffffff, 0.6));
    const pointLight = new THREE.PointLight(0xffffff, 1);
    pointLight.position.set(10, 10, 10);
    scene.add(pointLight);

    let logoPlane;
    const textureLoader = new TextureLoader();
    textureLoader.load('img/AV_wh.png', (texture) => {
        const aspectRatio = texture.image.width / texture.image.height;
        const planeHeight = 4;
        const planeWidth = planeHeight * aspectRatio;

        const geometry = new THREE.PlaneGeometry(planeWidth, planeHeight);
        const material = new THREE.MeshBasicMaterial({
            map: texture,
            transparent: true,
            alphaTest: 0.5,
            side: THREE.DoubleSide
        });
        logoPlane = new THREE.Mesh(geometry, material);
        logoPlane.position.set(0, 0, 0);
        scene.add(logoPlane);
    }, undefined, (err) => {
        console.error('Ошибка загрузки изображения:', err);
    });

    const stars = new THREE.Group();
    scene.add(stars);

    const starCount = 1000;
    const starRadius = 200;
    const starSize = 0.1;
    const starMaterial = new THREE.MeshBasicMaterial({ color: 0xffffff });

    for (let i = 0; i < starCount; i++) {
        const starGeometry = new THREE.SphereGeometry(starSize, 4, 4);
        const star = new THREE.Mesh(starGeometry, starMaterial);
        star.position.x = (Math.random() * 2 - 1) * starRadius;
        star.position.y = (Math.random() * 2 - 1) * starRadius;
        star.position.z = (Math.random() * 2 - 1) * starRadius;
        if (star.position.length() > starRadius) {
            star.position.normalize().multiplyScalar(starRadius);
        }
        stars.add(star);
    }

    let mouseX = 0, mouseY = 0;
    document.addEventListener('mousemove', (e) => {
        mouseX = (e.clientX / window.innerWidth) * 2 - 1;
        mouseY = -(e.clientY / window.innerHeight) * 2 + 1;
    });

    function animate() {
        requestAnimationFrame(animate);
        if (logoPlane) {
            logoPlane.rotation.y += (mouseX * 0.5 - logoPlane.rotation.y) * 0.05;
            logoPlane.rotation.x += (-mouseY * 0.5 - logoPlane.rotation.x) * 0.05;
        }
        stars.rotation.y += (mouseX * 0.2 - stars.rotation.y) * 0.05;
        stars.rotation.x += (-mouseY * 0.2 - stars.rotation.x) * 0.05;
        renderer.render(scene, camera);
    }
    animate();

    window.addEventListener('resize', () => {
        camera.aspect = container.clientWidth / container.clientHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(container.clientWidth, container.clientHeight);
    });
</script>
<!--<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>-->
</body>
</html>