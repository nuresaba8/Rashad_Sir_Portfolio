<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Rashad Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 dark:bg-gray-900">
    <section class="flex flex-col items-center justify-center min-h-screen px-6 py-8 mx-auto">
        <div class="flex items-center mb-6 space-x-2">
            <img class="w-20 h-20 object-contain" src="https://dream71.com/image/static/logo.png" alt="logo">
            <span class="text-2xl font-semibold text-gray-900 dark:text-white">Rashad Portfolio</span>
        </div>

        <div class="w-full max-w-md bg-white rounded-xl shadow-lg dark:bg-gray-800 dark:border dark:border-gray-700 p-6 sm:p-8 space-y-6">
            <h1 class="text-2xl font-bold text-center text-gray-900 dark:text-white">Log in</h1>
            @if ($errors->has('message'))
            <div class="mb-4 text-red-600 font-medium">
                {{ $errors->first('message') }}
            </div>
            @endif

            <form method="POST" action="{{ route('admin.login') }}" class="space-y-6">
                @csrf
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                    <input type="email" name="email" id="email" class="w-full px-4 py-3 text-sm bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-600 dark:focus:border-blue-600 transition duration-200" required>
                    @if ($errors->has('email'))
                    <div class="text-red-500 text-sm mt-2">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-4 py-3 text-sm bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-600 dark:focus:border-blue-600 transition duration-200" required>
                </div>
                <div class="flex items-center justify-between">
                    <!-- <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Forgot password?</a> -->
                </div>
                <button type="submit" class="w-full py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 font-medium text-sm transition duration-200">Log in</button>
            </form>
        </div>
    </section>
</body>

</html>