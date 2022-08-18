<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trainee Attendance :: Activate Account</title>
    <link href="{{ asset('icon.png') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="{{asset('assets/js/init-alpine.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/tailwind.output.css')}}" />
    <script src="{{asset('assets/js/charts-lines.js')}}" defer></script>
    <script src="{{asset('assets/js/charts-pie.js')}}" defer></script>
</head>

<body>
    <form>
        <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
            <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
                <div class="flex flex-col overflow-y-auto md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="../assets/img/create-account-office.jpeg" alt="Office" />
                        <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="../assets/img/create-account-office-dark.jpeg" alt="Office" />
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                                Activate Account
                            </h1>
                            <button class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" href="/mentor">
                                Verify Account
                            </button>
                            <hr class="my-8" />

                            <p class="mt-4">
                                <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="/">
                                    Go back to login
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
