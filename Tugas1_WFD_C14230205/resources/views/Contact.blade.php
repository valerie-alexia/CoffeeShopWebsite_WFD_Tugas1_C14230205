<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>C14230205_CoffeeShop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">
    <!-- Navbar -->
    @extends('layouts.navbar')

    @section('title', 'Home - Coffee Shop')

    @section('content')

    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold text-center mb-6">Contact Us & Get Updates</h2>
        <div class="flex flex-col md:flex-row items-center justify-center gap-8">
            <!-- Contact Form -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg w-full md:w-1/2">
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold">Name</label>
                        <input type="text" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-orange-500">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold">Email</label>
                        <input type="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-orange-500">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold">Message</label>
                        <textarea class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-orange-500" rows="4"></textarea>
                    </div>
                    <button class="bg-[#573e2c] text-white px-4 py-2 rounded-lg font-semibold hover:bg-[#4b3a2d] transition w-full">Send Message</button>
                </form>
            </div>

            <div class="w-full md:w-1/2 flex justify-center">
                <img src="pics/messylatte.png" alt="Contact Us" class="w-full max-w-sm md:max-w-md h-auto ">
            </div>
        </div>
        <div class="mt-8 text-center">
            <h3 class="text-lg font-semibold">Our Contact Information</h3>
            <p class="text-gray-700">Permai III, Siwalankerto, Surabaya</p>
            <p class="text-gray-700">+62 822 1326 2287</p>
            <p class="text-gray-700">c14230205@john.petra.ac.id</p>
            <p class="text-gray-700">www.valeriealexiaandreeyanto.com</p>
        </div>
    </div>
    @endsection
</body>

</html>