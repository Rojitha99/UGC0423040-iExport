<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpiceExport - Buyer Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: 'rgb(140, 77, 212)',
                        primarylight: 'rgba(140, 77, 212, 0.1)',
                        primarydark: 'rgb(110, 57, 182)'
                    }
                }
            }
        }
    </script>
    <style>
        .sidebar-link.active {
            background-color: rgba(140, 77, 212, 0.15);
            border-left: 4px solid rgb(140, 77, 212);
            color: rgb(140, 77, 212);
        }
        .sidebar-link:hover:not(.active) {
            background-color: rgba(140, 77, 212, 0.05);
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-white border-r border-gray-200">
                <!-- Logo -->
                <div class="flex items-center justify-center h-16 px-4 bg-primary">
                    <span class="text-white font-bold text-xl">SpiceExport</span>
                </div>
                
                <!-- Buyer Profile -->
                <div class="flex items-center p-4 border-b border-gray-200">
                    <div class="relative">
                        <img class="w-10 h-10 rounded-full" src="https://ui-avatars.com/api/?name=Buyer&background=8c4dd4&color=fff" alt="Buyer profile">
                        <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-white"></span>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">John Buyer</p>
                        <p class="text-xs text-gray-500">Premium Buyer</p>
                    </div>
                </div>
                
                <!-- Navigation -->
                <nav class="flex-1 px-2 py-4 space-y-1 overflow-y-auto">
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-900 rounded-md sidebar-link active">
                        <i class="fas fa-tachometer-alt mr-3 text-primary"></i>
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-md sidebar-link">
                        <i class="fas fa-shopping-bag mr-3"></i>
                        My Orders
                        <span class="ml-auto bg-primary text-white text-xs px-2 py-1 rounded-full">3</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-md sidebar-link">
                        <i class="fas fa-heart mr-3"></i>
                        Favorites
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-md sidebar-link">
                        <i class="fas fa-search mr-3"></i>
                        Browse Spices
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-md sidebar-link">
                        <i class="fas fa-truck mr-3"></i>
                        Shipment Tracking
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-md sidebar-link">
                        <i class="fas fa-comment-alt mr-3"></i>
                        Messages
                        <span class="ml-auto bg-primary text-white text-xs px-2 py-1 rounded-full">5</span>
                    </a>
                    
                    <!-- Account Section -->
                    <div class="px-4 pt-4 mt-4">
                        <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">Account</p>
                    </div>
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-md sidebar-link">
                        <i class="fas fa-user-circle mr-3"></i>
                        Profile
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-md sidebar-link">
                        <i class="fas fa-cog mr-3"></i>
                        Settings
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 rounded-md sidebar-link">
                        <i class="fas fa-sign-out-alt mr-3"></i>
                        Logout
                    </a>
                </nav>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Mobile header -->
            <header class="md:hidden bg-primary text-white">
                <div class="flex items-center justify-between px-4 py-3">
                    <button class="text-white focus:outline-none">
                        <i class="fas fa-bars"></i>
                    </button>
                    <span class="text-lg font-bold">SpiceExport</span>
                    <div class="w-6"></div> <!-- Spacer for balance -->
                </div>
            </header>
            
            <!-- Desktop header -->
            <header class="hidden md:flex items-center justify-between px-6 py-3 bg-white border-b border-gray-200">
                <h1 class="text-xl font-semibold text-gray-900">Buyer Dashboard</h1>
                <div class="flex items-center space-x-4">
                    <button class="p-2 text-gray-500 hover:text-gray-700 focus:outline-none">
                        <i class="fas fa-bell"></i>
                    </button>
                    <div class="relative">
                        <img class="w-8 h-8 rounded-full" src="https://ui-avatars.com/api/?name=Buyer&background=8c4dd4&color=fff" alt="User profile">
                    </div>
                </div>
            </header>
            
            <!-- Main content area -->
            <main class="flex-1 overflow-y-auto p-4 md:p-6 bg-gray-50">
                <!-- Welcome Banner -->
                <div class="bg-gradient-to-r from-primary to-purple-600 rounded-lg shadow-md p-6 text-white mb-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div>
                            <h2 class="text-2xl font-bold mb-2">Welcome back, John!</h2>
                            <p class="opacity-90">Track your spice orders, discover new products, and manage your account.</p>
                        </div>
                        <button class="mt-4 md:mt-0 bg-white text-primary px-6 py-2 rounded-md font-medium hover:bg-gray-100 transition duration-200">
                            Browse Spices
                        </button>
                    </div>
                </div>
                
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-primarylight text-primary mr-4">
                                <i class="fas fa-shopping-bag text-lg"></i>
                            </div>
                            <div>
                                <p class="text-gray-500 text-sm">Active Orders</p>
                                <p class="text-2xl font-bold">3</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-primarylight text-primary mr-4">
                                <i class="fas fa-truck text-lg"></i>
                            </div>
                            <div>
                                <p class="text-gray-500 text-sm">In Transit</p>
                                <p class="text-2xl font-bold">2</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-primarylight text-primary mr-4">
                                <i class="fas fa-check-circle text-lg"></i>
                            </div>
                            <div>
                                <p class="text-gray-500 text-sm">Completed</p>
                                <p class="text-2xl font-bold">7</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Orders -->
                <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-gray-900">Recent Orders</h3>
                            <a href="#" class="text-sm font-medium text-primary hover:text-primarydark">View All</a>
                        </div>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <!-- Order 1 -->
                        <div class="px-6 py-4 hover:bg-gray-50">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img class="w-16 h-16 rounded-md object-cover mr-4" src="https://via.placeholder.com/80?text=Cinnamon" alt="Cinnamon">
                                    <div>
                                        <h4 class="font-medium text-gray-900">Premium Ceylon Cinnamon</h4>
                                        <p class="text-sm text-gray-500">Order #SP2023-001</p>
                                        <p class="text-sm text-gray-500">Placed on 15 Oct 2023</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="font-medium text-gray-900">$450.00</p>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        Processing
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Order 2 -->
                        <div class="px-6 py-4 hover:bg-gray-50">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img class="w-16 h-16 rounded-md object-cover mr-4" src="https://via.placeholder.com/80?text=Pepper" alt="Pepper">
                                    <div>
                                        <h4 class="font-medium text-gray-900">Black Pepper (Grade 1)</h4>
                                        <p class="text-sm text-gray-500">Order #SP2023-002</p>
                                        <p class="text-sm text-gray-500">Placed on 10 Oct 2023</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="font-medium text-gray-900">$320.00</p>
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        In Transit
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recommended Spices -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-gray-900">Recommended Spices</h3>
                            <a href="#" class="text-sm font-medium text-primary hover:text-primarydark">Browse All</a>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
                        <!-- Product 1 -->
                        <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition duration-200">
                            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/300?text=Cardamom" alt="Cardamom">
                            <div class="p-4">
                                <h4 class="font-medium text-gray-900 mb-1">Organic Cardamom</h4>
                                <p class="text-sm text-gray-500 mb-2">From Kandy, Sri Lanka</p>
                                <div class="flex items-center justify-between">
                                    <p class="font-bold text-primary">$28.50/kg</p>
                                    <button class="text-sm bg-primary text-white px-3 py-1 rounded hover:bg-primarydark transition duration-200">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 2 -->
                        <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition duration-200">
                            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/300?text=Cloves" alt="Cloves">
                            <div class="p-4">
                                <h4 class="font-medium text-gray-900 mb-1">Premium Cloves</h4>
                                <p class="text-sm text-gray-500 mb-2">From Matale, Sri Lanka</p>
                                <div class="flex items-center justify-between">
                                    <p class="font-bold text-primary">$15.75/kg</p>
                                    <button class="text-sm bg-primary text-white px-3 py-1 rounded hover:bg-primarydark transition duration-200">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product 3 -->
                        <div class="border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition duration-200">
                            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/300?text=Nutmeg" alt="Nutmeg">
                            <div class="p-4">
                                <h4 class="font-medium text-gray-900 mb-1">Whole Nutmeg</h4>
                                <p class="text-sm text-gray-500 mb-2">From Kegalle, Sri Lanka</p>
                                <div class="flex items-center justify-between">
                                    <p class="font-bold text-primary">$22.30/kg</p>
                                    <button class="text-sm bg-primary text-white px-3 py-1 rounded hover:bg-primarydark transition duration-200">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Mobile sidebar overlay -->
    <div class="fixed inset-0 z-40 md:hidden hidden" id="mobile-sidebar">
        <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>
        <div class="relative flex flex-col w-72 max-w-xs bg-white">
            <div class="flex items-center justify-center h-16 px-4 bg-primary">
                <span class="text-white font-bold text-xl">SpiceExport</span>
                <button class="ml-auto text-white focus:outline-none" id="close-sidebar">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- Mobile sidebar content would go here -->
        </div>
    </div>

    <script>
        // Mobile sidebar toggle
        document.querySelector('[aria-controls="mobile-sidebar"]').addEventListener('click', function() {
            document.getElementById('mobile-sidebar').classList.remove('hidden');
        });
        
        document.getElementById('close-sidebar').addEventListener('click', function() {
            document.getElementById('mobile-sidebar').classList.add('hidden');
        });
    </script>
</body>
</html>