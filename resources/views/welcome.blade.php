<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GT Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-[#0f0f0f] text-[#fbfcf8]">

    <div class="bg-red-600"></div>

    <header class="fixed top-0 left-0 w-full z-50 py-4 px-6 bg-transparent">
        <nav class="flex justify-between items-center">
            <a href="#home" class="font-bold text-3xl">GT Gallery</a>
            <div class="hidden md:block">
                <ul class="flex space-x-6">
                    <li><a href="#home" class="text-lg hover:text-red-600">Home</a></li>
                    <li><a href="#brands" class="text-lg hover:text-red-600">Brands</a></li>
                    <li><a href="#aboutus" class="text-lg hover:text-red-600">About Us</a></li>
                    <li><a href="#footer" class="text-lg hover:text-red-600">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <nav class="fixed top-0 left-0 md:hidden bg-gray-800 w-60 h-full p-4">
        <ul class="space-y-6">
            <li><a href="#home" class="text-lg text-white">Home</a></li>
            <li><a href="#brands" class="text-lg text-white">Brands</a></li>
            <li><a href="#aboutus" class="text-lg text-white">About Us</a></li>
            <li><a href="#footer" class="text-lg text-white">Contact</a></li>
        </ul>
    </nav>

    <main class="pt-16 px-10 max-w-screen-xl mx-auto">

        <section class="home pt-8 pb-24">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-5xl font-bold">Your Journey Starts Here</h1>
                    <p class="mt-4 text-xl">Quality You Can Count On</p>
                    <button class="mt-6 bg-red-600 text-white py-2 px-4 rounded-lg"><a href="#brands">Start</a></button>
                </div>
                <div class="w-1/2">
                    <img src="/imgs/Untitled design (3).png" alt="" class="w-full">
                </div>
            </div>
        </section>

        <section class="brands py-24">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="relative group">
                    <img src="/imgs/McLaren.png" alt="McLaren" class="w-full h-auto">
                    <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-75 flex justify-center items-center">
                        <h1 class="text-white text-2xl">McLaren</h1>
                        <p class="text-white">For price inquiries, please contact your official Dealer.</p>
                    </div>
                </article>

                <article class="relative group">
                    <img src="/imgs/AstonMartin.png" alt="Aston Martin" class="w-full h-auto">
                    <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-75 flex justify-center items-center">
                        <h1 class="text-white text-2xl">Aston Martin</h1>
                        <p class="text-white">For price inquiries, please contact your official Dealer.</p>
                    </div>
                </article>

                <article class="relative group">
                    <img src="/imgs/nissan.png" alt="Nissan" class="w-full h-auto">
                    <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-75 flex justify-center items-center">
                        <h1 class="text-white text-2xl">Nissan</h1>
                        <p class="text-white">For price inquiries, please contact your official Dealer.</p>
                    </div>
                </article>

                <article class="relative group">
                    <img src="/imgs/911.png" alt="Porsche" class="w-full h-auto">
                    <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-75 flex justify-center items-center">
                        <h1 class="text-white text-2xl">Porsche</h1>
                        <p class="text-white">For price inquiries, please contact your official Dealer.</p>
                    </div>
                </article>

                <article class="relative group">
                    <img src="/imgs/sf90.png" alt="Ferrari" class="w-full h-auto">
                    <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-75 flex justify-center items-center">
                        <h1 class="text-white text-2xl">Ferrari</h1>
                        <p class="text-white">For price inquiries, please contact your official Dealer.</p>
                    </div>
                </article>

                <article class="relative group">
                    <img src="/imgs/Koenigsegg.png" alt="Koenigsegg" class="w-full h-auto">
                    <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:bg-opacity-75 flex justify-center items-center">
                        <h1 class="text-white text-2xl">Koenigsegg</h1>
                        <p class="text-white">For price inquiries, please contact your official Dealer.</p>
                    </div>
                </article>
            </div>
        </section>

        <section class="aboutus py-24">
            <h1 class="text-4xl font-semibold">The Team</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-12">
                <article class="text-center">
                    <img src="/imgs/jia.jpg" alt="Kezhia Aurelia" class="w-full h-auto rounded-full mx-auto mb-4">
                    <h2 class="font-bold">Kezhia Aurelia</h2>
                    <p class="text-sm">zhia cantik pacar mingyu ganteeng ilifyu somattttttt</p>
                </article>

                <article class="text-center">
                    <img src="/imgs/me.jpg" alt="Nam Ye Jin" class="w-full h-auto rounded-full mx-auto mb-4">
                    <h2 class="font-bold">Nam Ye Jin</h2>
                    <p class="text-sm">mewing level 100000 gyatttt (the ACE)</p>
                </article>

                <article class="text-center">
                    <img src="/imgs/ce.jpg" alt="Chesya Anandyta" class="w-full h-auto rounded-full mx-auto mb-4">
                    <h2 class="font-bold">Chesya Anandyta</h2>
                    <p class="text-sm">Chesya So Sigma +1000 aura</p>
                </article>

                <article class="text-center">
                    <img src="/imgs/jema.jpg" alt="Jesika Sevira Amanda" class="w-full h-auto rounded-full mx-auto mb-4">
                    <h2 class="font-bold">Jesika Sevira Amanda</h2>
                    <p class="text-sm">JEMA</p>
                </article>
            </div>
        </section>

        <section class="GT py-24 text-center">
            <h1 class="text-4xl font-semibold">Where Quality Meets the Road</h1>
            <p class="text-xl mt-4">More Than Just a Deal</p>

            <div class="mt-8">
                <div class="flex justify-center items-center">
                    <span class="text-5xl font-bold text-red-600">GRAN TURISMO</span>
                    <span class="text-5xl font-bold text-white mx-4">GRAND GALLERY</span>
                </div>
                <img src="/imgs/Vferrari.png" alt="Ferrari" class="w-full h-auto mt-6">
            </div>
        </section>

    </main>

    <footer class="bg-black text-center py-6">
        <p>&copy; GT Gallery | @GT_Gallery | All rights reserved.</p>
    </footer>

</body>
</html>
