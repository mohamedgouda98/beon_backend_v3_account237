@extends('layouts.app')

@section('title', 'Beon - نظام واتساب المدير التنفيذي | WhatsApp Executive Management System')
@section('description', 'Beon يوفر نظام متكامل لإدارة واتساب للمدير التنفيذي مع إمكانية قراءة وإدارة الرسائل بكفاءة | Complete WhatsApp management for executives')
@section('keywords', 'beon, واتساب, whatsapp, المدير, التنفيذي, executive manager, read messages, قراءة الرسائل, إدارة المحادثات')

@section('content')
    <!-- Hero Section with Primary Keywords in H1 -->
    <section class="hero bg-gradient-to-b from-blue-50 to-white py-16 md:py-24">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-center mb-6 text-gray-900">
                Beon - نظام واتساب للمدير التنفيذي
                <span class="block text-2xl md:text-3xl mt-4 text-blue-600">WhatsApp Management for Executives</span>
            </h1>
            <p class="text-xl text-center text-gray-700 max-w-3xl mx-auto mb-8">
                نظام متكامل لقراءة وإدارة رسائل واتساب للمدير التنفيذي بكفاءة عالية
            </p>
            <div class="text-center">
                <a href="#features" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                    اكتشف المميزات
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section with Secondary Keywords in H2 -->
    <section id="features" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900">
                مميزات نظام Beon لإدارة واتساب
            </h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1: Read Messages -->
                <div class="feature-card bg-gray-50 p-6 rounded-lg">
                    <div class="icon mb-4">
                        <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">قراءة الرسائل - Read Messages</h3>
                    <p class="text-gray-700">
                        يمكن للمدير التنفيذي قراءة جميع رسائل واتساب بسهولة وكفاءة عالية، مع إمكانية البحث والفلترة المتقدمة.
                    </p>
                </div>
                
                <!-- Feature 2: Executive Management -->
                <div class="feature-card bg-gray-50 p-6 rounded-lg">
                    <div class="icon mb-4">
                        <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">إدارة المحادثات للمدير</h3>
                    <p class="text-gray-700">
                        نظام متقدم لإدارة محادثات واتساب مصمم خصيصاً للمدير التنفيذي مع صلاحيات كاملة.
                    </p>
                </div>
                
                <!-- Feature 3: Executive Control -->
                <div class="feature-card bg-gray-50 p-6 rounded-lg">
                    <div class="icon mb-4">
                        <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">التحكم التنفيذي الكامل</h3>
                    <p class="text-gray-700">
                        صلاحيات كاملة للمدير التنفيذي في نظام Beon مع أعلى مستويات الأمان والخصوصية.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section with Rich Keywords -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900">
                نظام Beon لواتساب الأعمال
            </h2>
            <div class="max-w-4xl mx-auto">
                <p class="text-lg text-gray-700 mb-6">
                    يوفر <strong>Beon</strong> حلاً متكاملاً <strong>للمدير التنفيذي</strong> لإدارة 
                    <strong>واتساب</strong> الأعمال، مع إمكانية <strong>قراءة (read)</strong> جميع الرسائل 
                    وإدارة المحادثات بكفاءة عالية. النظام <strong>التنفيذي</strong> مصمم خصيصاً لتلبية 
                    احتياجات <strong>المدير</strong> في بيئة الأعمال الحديثة.
                </p>
                <p class="text-lg text-gray-700 mb-6">
                    مع <strong>Beon</strong>، يمكن <strong>للمدير التنفيذي</strong> الحصول على رؤية شاملة 
                    لجميع محادثات <strong>واتساب</strong> التجارية، مع القدرة على <strong>قراءة</strong> 
                    وتحليل الرسائل بسرعة وفعالية.
                </p>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-16 bg-blue-600">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                ابدأ مع Beon اليوم
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                انضم إلى المئات من المديرين التنفيذيين الذين يستخدمون Beon لإدارة واتساب بكفاءة
            </p>
            <div class="space-x-4 rtl:space-x-reverse">
                <a href="/register" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg hover:bg-gray-100 transition duration-300 font-semibold">
                    ابدأ الآن
                </a>
                <a href="/demo" class="inline-block border-2 border-white text-white px-8 py-3 rounded-lg hover:bg-white hover:text-blue-600 transition duration-300 font-semibold">
                    طلب عرض توضيحي
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section with Keywords -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900">
                الأسئلة الشائعة حول نظام Beon
            </h2>
            <div class="max-w-3xl mx-auto">
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">
                        كيف يمكن للمدير التنفيذي قراءة رسائل واتساب؟
                    </h3>
                    <p class="text-gray-700">
                        يوفر نظام Beon واجهة سهلة الاستخدام تمكن المدير التنفيذي من قراءة جميع رسائل واتساب 
                        بشكل منظم ومرتب، مع إمكانية البحث والفلترة حسب التاريخ أو المرسل.
                    </p>
                </div>
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">
                        هل يدعم Beon اللغة العربية في واتساب؟
                    </h3>
                    <p class="text-gray-700">
                        نعم، نظام Beon يدعم اللغة العربية بالكامل في قراءة وإدارة رسائل واتساب، 
                        مع واجهة مستخدم متوافقة مع الاتجاه من اليمين إلى اليسار.
                    </p>
                </div>
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">
                        ما هي صلاحيات المدير في نظام Beon؟
                    </h3>
                    <p class="text-gray-700">
                        المدير التنفيذي لديه صلاحيات كاملة في النظام تشمل قراءة جميع الرسائل، 
                        إدارة المستخدمين، تصدير التقارير، وضبط إعدادات النظام.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "Beon",
    "description": "نظام إدارة واتساب للمدير التنفيذي - WhatsApp Management System for Executives",
    "applicationCategory": "BusinessApplication",
    "operatingSystem": "Web",
    "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "250"
    },
    "keywords": "beon, واتساب, whatsapp, المدير, التنفيذي, executive, manager, read, قراءة"
}
</script>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "كيف يمكن للمدير التنفيذي قراءة رسائل واتساب؟",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "يوفر نظام Beon واجهة سهلة الاستخدام تمكن المدير التنفيذي من قراءة جميع رسائل واتساب بشكل منظم ومرتب، مع إمكانية البحث والفلترة حسب التاريخ أو المرسل."
            }
        },
        {
            "@type": "Question",
            "name": "هل يدعم Beon اللغة العربية في واتساب؟",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "نعم، نظام Beon يدعم اللغة العربية بالكامل في قراءة وإدارة رسائل واتساب، مع واجهة مستخدم متوافقة مع الاتجاه من اليمين إلى اليسار."
            }
        },
        {
            "@type": "Question",
            "name": "ما هي صلاحيات المدير في نظام Beon؟",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "المدير التنفيذي لديه صلاحيات كاملة في النظام تشمل قراءة جميع الرسائل، إدارة المستخدمين، تصدير التقارير، وضبط إعدادات النظام."
            }
        }
    ]
}
</script>
@endpush