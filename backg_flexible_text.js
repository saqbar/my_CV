    // Импортируем модули Three.js из CDN
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
    textureLoader.load('img/logo0.png', (texture) => {
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