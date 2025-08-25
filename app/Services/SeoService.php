<?php

namespace App\Services;

class SeoService
{
    /**
     * Generate SEO meta tags for different pages
     * 
     * @param string $page
     * @return array
     */
    public static function generateMeta($page = 'home')
    {
        $meta = [
            'home' => [
                'title' => 'Beon - نظام واتساب المدير التنفيذي | WhatsApp Executive Management',
                'description' => 'Beon نظام متكامل لإدارة واتساب للمدير التنفيذي - قراءة وإدارة الرسائل بكفاءة عالية',
                'keywords' => 'beon, واتساب, whatsapp, المدير, manager, التنفيذي, executive, read, قراءة',
                'og_title' => 'Beon - نظام واتساب المدير التنفيذي',
                'og_description' => 'نظام متكامل لإدارة واتساب للمدير التنفيذي',
            ],
            'features' => [
                'title' => 'مميزات Beon - نظام واتساب التنفيذي | Features',
                'description' => 'اكتشف مميزات نظام Beon لإدارة واتساب للمدير التنفيذي - قراءة الرسائل وإدارة المحادثات',
                'keywords' => 'مميزات, features, واتساب, المدير, التنفيذي, beon, قراءة, read',
                'og_title' => 'مميزات نظام Beon لواتساب',
                'og_description' => 'اكتشف جميع مميزات نظام Beon لإدارة واتساب',
            ],
            'pricing' => [
                'title' => 'أسعار Beon - نظام واتساب المدير | Pricing',
                'description' => 'خطط أسعار مرنة لنظام Beon - حلول واتساب للمدير التنفيذي',
                'keywords' => 'أسعار, pricing, beon, واتساب, المدير, التنفيذي',
                'og_title' => 'أسعار نظام Beon',
                'og_description' => 'اختر الخطة المناسبة لعملك',
            ],
            'contact' => [
                'title' => 'تواصل معنا - Beon نظام واتساب | Contact Us',
                'description' => 'تواصل مع فريق Beon للحصول على نظام إدارة واتساب للمدير التنفيذي',
                'keywords' => 'contact, تواصل, beon, واتساب, support, دعم',
                'og_title' => 'تواصل مع Beon',
                'og_description' => 'نحن هنا لمساعدتك',
            ],
            'about' => [
                'title' => 'عن Beon - نظام واتساب التنفيذي | About Us',
                'description' => 'تعرف على Beon - الحل المتكامل لإدارة واتساب للمدير التنفيذي',
                'keywords' => 'about, عن, beon, واتساب, المدير, التنفيذي, شركة',
                'og_title' => 'عن Beon',
                'og_description' => 'تعرف على قصتنا ورؤيتنا',
            ],
        ];

        return $meta[$page] ?? $meta['home'];
    }

    /**
     * Generate breadcrumb schema markup
     * 
     * @param array $items
     * @return string
     */
    public static function breadcrumbSchema($items)
    {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => []
        ];

        foreach ($items as $position => $item) {
            $schema['itemListElement'][] = [
                '@type' => 'ListItem',
                'position' => $position + 1,
                'name' => $item['name'],
                'item' => $item['url']
            ];
        }

        return json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    /**
     * Generate organization schema markup
     * 
     * @return string
     */
    public static function organizationSchema()
    {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'Beon',
            'url' => config('app.url'),
            'logo' => asset('images/logo.png'),
            'description' => 'نظام إدارة واتساب للمدير التنفيذي',
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+20-123-456-789',
                'contactType' => 'Customer Service',
                'availableLanguage' => ['Arabic', 'English']
            ],
            'sameAs' => [
                'https://twitter.com/beon',
                'https://facebook.com/beon',
                'https://linkedin.com/company/beon'
            ]
        ];

        return json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    /**
     * Generate local business schema markup
     * 
     * @return string
     */
    public static function localBusinessSchema()
    {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'name' => 'Beon',
            'image' => asset('images/office.jpg'),
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'شارع التحرير',
                'addressLocality' => 'القاهرة',
                'addressRegion' => 'القاهرة',
                'postalCode' => '11511',
                'addressCountry' => 'EG'
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => 30.0444,
                'longitude' => 31.2357
            ],
            'url' => config('app.url'),
            'telephone' => '+20123456789',
            'openingHoursSpecification' => [
                [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => [
                        'Sunday',
                        'Monday',
                        'Tuesday',
                        'Wednesday',
                        'Thursday'
                    ],
                    'opens' => '09:00',
                    'closes' => '18:00'
                ]
            ],
            'priceRange' => '$$'
        ];

        return json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}