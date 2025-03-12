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
    @extends('layouts.navbar')

    @section('title', 'Home - Coffee Shop')

    @section('content')

    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold text-center mb-6">OUR COFFEE CATALOG</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4">
            
            <!-- Coffee Card 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden p-4 border border-gray-200 relative">
                <div class="relative">
                    <img src="pics/brownsugaroatmilkespresso.jpeg" alt="Chocolate"
                        class="w-full aspect-[3/4] object-cover rounded-lg">
                    <span class="absolute top-2 left-2 bg-orange-500 text-white px-3 py-1 text-xs font-bold rounded-full">50%</span>
                </div>
                <h3 class="mt-4 text-md font-semibold text-center">Brown Sugar Oatmilk Espresso</h3>
                <p class="text-gray-600 text-xs text-center">espresso with caramelized brown sugar</p>
                <div class="flex flex-col items-center justify-center mt-4">
                    <span class="text-lg font-bold text-[#62432d]">$2.50</span>
                    <button class="bg-[#573e2c] text-white px-4 py-2 rounded-lg font-semibold hover:bg-[#4b3a2d] transition w-full mt-3">
                        ADD TO CART
                    </button>
                </div>
            </div>

            <!-- Coffee Card 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden p-4 border border-gray-200 relative">
                <div class="relative">
                    <img src="pics/tiramisulatte.jpeg" alt="Chocolate"
                        class="w-full aspect-[3/4] object-cover rounded-lg">
                    <span class="absolute top-2 left-2 bg-orange-500 text-white px-3 py-1 text-xs font-bold rounded-full">25%</span>
                </div>
                <h3 class="mt-4 text-md font-semibold text-center">Tiramisu Honey Latte</h3>
                <p class="text-gray-600 text-xs text-center">espresso, honey, and mascarpone cream</p>
                <div class="flex flex-col items-center justify-center mt-4">
                    <span class="text-lg font-bold text-[#62432d]">$3.00</span>
                    <button class="bg-[#573e2c] text-white px-4 py-2 rounded-lg font-semibold hover:bg-[#4b3a2d] transition w-full mt-3">
                        ADD TO CART
                    </button>
                </div>
            </div>

            <!-- Coffee Card 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden p-4 border border-gray-200 relative">
                <div class="relative">
                    <img src="pics/dalgonacoffee.png" alt="Chocolate"
                        class="w-full aspect-[3/4] object-cover rounded-lg">
                </div>
                <h3 class="mt-4 text-md font-semibold text-center">Dalgona Sugar Coffee</h3>
                <p class="text-gray-600 text-xs text-center">fluffy, airy coffee texture on creamy milk</p>
                <div class="flex flex-col items-center justify-center mt-4">
                    <span class="text-lg font-bold text-[#62432d]">$2.80</span>
                    <button class="bg-[#573e2c] text-white px-4 py-2 rounded-lg font-semibold hover:bg-[#4b3a2d] transition w-full mt-3">
                        ADD TO CART
                    </button>
                </div>
            </div>

            <!-- Coffee Card 4 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden p-4 border border-gray-200 relative">
                <div class="relative">
                    <img src="pics/irishcreamcoldbrew.jpeg" alt="Chocolate"
                        class="w-full aspect-[3/4] object-cover rounded-lg">
                </div>
                <h3 class="mt-4 text-md font-semibold text-center">Irish Cream Cold Brew</h3>
                <p class="text-gray-600 text-xs text-center">Irish cream and a vanilla-sweetened foam</p>
                <div class="flex flex-col items-center justify-center mt-4">
                    <span class="text-lg font-bold text-[#62432d]">$3.20</span>
                    <button class="bg-[#573e2c] text-white px-4 py-2 rounded-lg font-semibold hover:bg-[#4b3a2d] transition w-full mt-3">
                        ADD TO CART
                    </button>
                </div>
            </div>

        </div>

        <!-- dekorasi buat slider -->
        <div class="flex justify-center mt-6">
            <div class="h-2 w-2 bg-gray-400 rounded-full mx-1"></div>
            <div class="h-2 w-4 bg-black rounded-full mx-1"></div>
            <div class="h-2 w-2 bg-gray-400 rounded-full mx-1"></div>
        </div>
    </div>
    @endsection
</body>
</html>
