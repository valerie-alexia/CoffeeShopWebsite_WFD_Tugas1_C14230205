<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>C14230205_CoffeeShop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
    <!-- Navbar -->
    @extends('layouts.navbar')

    @section('title', 'Home - Coffee Shop')

    @section('content')

    <!-- Header Section -->
    <section class="relative flex flex-col justify-center items-center text-center text-white w-full h-screen bg-cover bg-center bg-no-repeat"
        style="background-image: url('/pics/coffeestage.png');">
        <h1 class="text-4xl md:text-5xl font-bold">CODE & <span class="text-[#6d5342]">COFFEE</span></h1>
        <p class="text-xl md:text-3xl font-bold mt-4">CONSUME COFFEE WHILE YOU CODE</p>
    </section>

    <!-- Most Popular Product Section -->
    <section class="flex flex-col md:flex-row items-center md:space-x-10 px-6 py-12 bg-white">
        <div class="w-full md:w-1/3 flex justify-center">
            <img src="pics/splashcoffee.png" alt="Coffee Cup" class="w-72 md:w-96">
        </div>
        <div class="text-center md:text-left w-full md:w-2/3">
            <h2 class="text-3xl font-bold">PEOPLE'S FAVORITE</h2>
            <h3 class="text-xl font-semibold text-gray-700">Dark Roast Espresso</h3>
            <p class="text-yellow-500 text-lg mt-1">★★★★★</p>
            <p class="text-2xl font-bold text-gray-800">$12</p>
            <p class="text-gray-600 mt-3 max-w-lg">
                A bold and rich espresso with a deep, velvety cream. This dark roast is crafted
                for those who love a strong, full-bodied coffee with hints of cocoa and caramel.
                The perfect blend of intensity and smoothness in every sip.
            </p>
            <div class="flex justify-center md:justify-start items-center mt-5 space-x-3">
                <button class="px-5 py-2 border border-gray-400 rounded">-</button>
                <span class="px-4 text-lg">1</span>
                <button class="px-5 py-2 border border-gray-400 rounded">+</button>
                <button class="px-6 py-2 bg-[#573e2c] text-white rounded-lg shadow-md hover:bg-[#4b3425]">
                    ADD TO CART
                </button>
            </div>
        </div>
    </section>


    <!-- Decoration Section -->
    <section class="bg-gray-200 py-12 px-4">
        <h2 class="text-center text-2xl font-bold">Guaranteed To Keep You Awake</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-6 max-w-4xl mx-auto">
            <div class="p-6 bg-[#6F4E37] text-white text-center rounded-lg">Hand Roasted</div>
            <div class="p-6 bg-[#C4A484] text-[#4B2E2E] font-semibold text-center rounded-lg">Authentic Beans</div>
            <div class="p-6 bg-[#8B5A2B] text-white text-center rounded-lg">Organic Taste</div>
        </div>
    </section>
    @endsection
</body>
</html>