<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script type="text/javascript" src="validation.js" defer></script>
</head>
<body class="bg-gray-900 text-gray-100">
    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-gray-800 text-center p-8 rounded-lg shadow-lg w-full sm:w-96">
            <h1 class="text-3xl font-semibold mb-4">Login</h1>
            <p id="error-message" class="text-red-500 mb-4"></p>
            <form id="form" novalidate>
                <div class="mb-4">
                    <label for="email-input" class="block text-left mb-2 text-lg">Email</label>
                    <input required type="email" name="email" id="email-input" placeholder="Email"
                        class="w-full px-4 py-2 rounded-md bg-gray-700 text-gray-300 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-red-600">
                </div>
                <div class="mb-6">
                    <label for="password-input" class="block text-left mb-2 text-lg">Password</label>
                    <input required type="password" name="password" id="password-input" placeholder="Password"
                        class="w-full px-4 py-2 rounded-md bg-gray-700 text-gray-300 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-red-600">
                </div>
                <button type="submit" class="w-full py-2 rounded-md bg-red-600 text-white font-semibold hover:bg-red-700 transition-colors">
                    Login
                </button>
            </form>
            <p class="mt-4 text-sm">New Here? <a href="signup.html" class="text-red-500 hover:text-red-400">Create an Account</a></p>
        </div>
    </div>
</body>
</html>
