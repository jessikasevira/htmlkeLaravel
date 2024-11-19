<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-right text-black font-montserrat min-h-screen" style="background-image: url('/imgs/background.jpg');">

    <!-- Wrapper -->
    <div class="wrapper bg-white h-screen w-full sm:max-w-[600px] lg:max-w-[40%] p-5 flex flex-col items-center justify-center rounded-r-[20px]">

        <!-- Heading -->
        <h1 class="text-5xl font-extrabold uppercase mb-8">Login</h1>

        <!-- Form -->
        <form class="w-full max-w-[500px] flex flex-col items-center gap-5 mt-10 mb-10">
            
            <!-- Username Field -->
            <div class="w-full flex justify-center">
                <label class="w-[70px] h-[60px] bg-[#817b6d] text-white flex justify-center items-center rounded-l-[10px] text-2xl font-medium">
                    U
                </label>
                <input type="text" placeholder="Username" class="flex-grow h-[60px] p-4 border-2 border-[#F3F0FF] border-l-0 rounded-r-[10px] bg-[#F3F0FF] text-black placeholder:text-black focus:outline-none focus:border-black hover:border-[#817b6d] transition duration-150 ease-in-out">
            </div>

            <!-- Password Field -->
            <div class="w-full flex justify-center">
                <label class="w-[70px] h-[60px] bg-[#817b6d] text-white flex justify-center items-center rounded-l-[10px] text-2xl font-medium">
                    P
                </label>
                <input type="password" placeholder="Password" class="flex-grow h-[60px] p-4 border-2 border-[#F3F0FF] border-l-0 rounded-r-[10px] bg-[#F3F0FF] text-black placeholder:text-black focus:outline-none focus:border-black hover:border-[#817b6d] transition duration-150 ease-in-out">
            </div>

            <!-- Error State (if any) -->
            <div class="w-full flex justify-center incorrect">
                <label class="w-[70px] h-[60px] bg-[#f06272] text-white flex justify-center items-center rounded-l-[10px] text-2xl font-medium">
                    E
                </label>
                <input type="text" placeholder="Error Field" class="flex-grow h-[60px] p-4 border-2 border-[#f06272] border-l-0 rounded-r-[10px] bg-[#F3F0FF] text-black placeholder:text-black focus:outline-none focus:border-black hover:border-[#f06272] transition duration-150 ease-in-out">
            </div>

            <!-- Button -->
            <button class="mt-10 px-12 py-5 bg-[#817b6d] text-white font-semibold text-xl uppercase rounded-full transition duration-150 ease-in-out hover:bg-white hover:text-[#817b6d] focus:outline-none focus:bg-white focus:text-[#817b6d]">
                Login
            </button>
        </form>

        <!-- Link -->
        <a href="#" class="text-[#817b6d] font-bold text-xl hover:underline">Forgot Password?</a>

    </div>

</body>
</html>
