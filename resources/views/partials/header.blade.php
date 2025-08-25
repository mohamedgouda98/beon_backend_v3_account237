<header class="bg-white shadow-sm">
    <nav class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-2 rtl:space-x-reverse">
                <img src="{{ asset('images/logo.svg') }}" alt="Beon Logo" class="h-10 w-10">
                <span class="text-2xl font-bold text-gray-900">Beon</span>
            </a>
            
            <!-- Navigation Menu -->
            <nav class="hidden md:flex space-x-8 rtl:space-x-reverse">
                <a href="/" class="text-gray-700 hover:text-blue-600 transition duration-300">
                    الرئيسية
                </a>
                <a href="/features" class="text-gray-700 hover:text-blue-600 transition duration-300">
                    المميزات
                </a>
                <a href="/pricing" class="text-gray-700 hover:text-blue-600 transition duration-300">
                    الأسعار
                </a>
                <a href="/about" class="text-gray-700 hover:text-blue-600 transition duration-300">
                    عن Beon
                </a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 transition duration-300">
                    اتصل بنا
                </a>
            </nav>
            
            <!-- CTA Buttons -->
            <div class="flex items-center space-x-4 rtl:space-x-reverse">
                <a href="/login" class="text-gray-700 hover:text-blue-600 transition duration-300">
                    تسجيل الدخول
                </a>
                <a href="/register" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    ابدأ مجاناً
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button class="md:hidden text-gray-700" id="mobile-menu-button">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div class="hidden md:hidden mt-4 pb-4" id="mobile-menu">
            <a href="/" class="block py-2 text-gray-700 hover:text-blue-600">الرئيسية</a>
            <a href="/features" class="block py-2 text-gray-700 hover:text-blue-600">المميزات</a>
            <a href="/pricing" class="block py-2 text-gray-700 hover:text-blue-600">الأسعار</a>
            <a href="/about" class="block py-2 text-gray-700 hover:text-blue-600">عن Beon</a>
            <a href="/contact" class="block py-2 text-gray-700 hover:text-blue-600">اتصل بنا</a>
            <div class="mt-4 pt-4 border-t">
                <a href="/login" class="block py-2 text-gray-700 hover:text-blue-600">تسجيل الدخول</a>
                <a href="/register" class="block py-2 bg-blue-600 text-white text-center rounded-lg hover:bg-blue-700 mt-2">ابدأ مجاناً</a>
            </div>
        </div>
    </nav>
</header>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>