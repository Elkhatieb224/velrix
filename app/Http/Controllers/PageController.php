<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', [
            'title' => 'Velrix — حلول رقمية ذكية',
            'servicesSlider' => [
                [
                    'title' => 'متجر الكتروني',
                    'figma' => 'imgFigureMetaverseSolutions4',
                    'imageFit' => 'cover',
                ],
                [
                    'title' => 'تطبيق موبايل',
                    'figma' => 'imgFigureMetaverseSolutions3',
                    'imageFit' => 'cover',
                ],
                [
                    'title' => 'تصميم الالعاب',
                    'figma' => 'imgFigureMetaverseSolutions2',
                    'imageFit' => 'positioned',
                    'imageLeft' => '-204.72%',
                    'imageWidth' => '377.47%',
                    'imageTop' => '0.03%',
                ],
                [
                    'title' => 'الذكاء الاصطناعي',
                    'figma' => 'imgFigureMetaverseSolutions1',
                    'imageFit' => 'positioned',
                    'imageLeft' => '-53.75%',
                    'imageWidth' => '205.89%',
                ],
                [
                    'title' => 'التسويق الالكتروني',
                    'figma' => 'imgFigureMetaverseSolutions',
                    'imageFit' => 'positioned',
                    'imageLeft' => '-62.37%',
                    'imageWidth' => '377.47%',
                ],
            ],
            'features' => [
                ['figma' => 'imgIcon1', 'title' => 'دقة وسرعة التنفيذ', 'text' => 'نلتزم بتسليم المشاريع وفق أطُر زمنية محددة وبأعلى معايير الجودة البرمجية.'],
                ['figma' => 'imgIcon2', 'title' => 'حلول مخصصة (Custom Built)', 'text' => 'لا نعتمد على القوالب الجاهزة، بل نبني حلولاً تفصيلية تُصمم خصيصًا لتناسب احتياجات عملك بدقة.'],
                ['figma' => 'imgIcon3', 'title' => 'أمان واستقرار عالي', 'text' => 'نبني أنظمتنا بأحدث معايير الأمان والحماية لضمان استقرار بياناتك وتشغيلها بدون انقطاع.'],
                ['figma' => 'imgIcon4', 'title' => 'دعم وتطوير مستمر', 'text' => 'شراكتنا لا تنتهي بالتسليم، بل نوفر صيانة وتحديثات دورية لضمان استمرار نجاح مشروعك.'],
            ],
            'faqs' => [
                [
                    'q' => 'كم تستغرق مدة تصميم وتطوير المشروع؟',
                    'a' => 'تختلف المدة حسب حجم ونوع المشروع؛ التطبيقات والمواقع البسيطة تستغرق عادة من 2 إلى 4 أسابيع، بينما الأنظمة المخصصة والمنصات الضخمة تتطلب مدة أطول مع التزامنا التام بالجدول الزمني المتفق عليه.',
                    'open' => true,
                ],
                ['q' => 'هل تقدمون خدمات الدعم الفني والصيانة بعد تسليم المشروع؟'],
                ['q' => 'هل يتم بناء التطبيقات والمواقع من الصفر أم باستخدام قوالب جاهزة؟'],
                ['q' => 'كيف يتم تحديد تكلفة الميزانية والخدمات؟'],
            ],
        ]);
    }

    public function about(): View
    {
        return view('pages.about', [
            'title' => 'عن الشركة — Velrix',
            'stats' => [
                ['figma' => 'imgIcon2', 'value' => '+50', 'label' => 'مشروع ناجح'],
                ['figma' => 'imgIcon3', 'value' => '+35', 'label' => 'عميل سعيد'],
                ['figma' => 'imgIcon4', 'value' => '99%', 'label' => 'نسبة الرضا'],
                ['figma' => 'imgIcon5', 'value' => '+4', 'label' => 'سنوات خبرة'],
            ],
            'visionItems' => [
                'قيادة التحول الرقمي الإقليمي',
                'بناء منتجات بمعايير عالمية',
                'تطوير شراكات تقنية طويلة الأمد',
            ],
        ]);
    }

    public function services(): View
    {
        return view('pages.services', [
            'title' => 'خدماتنا — Velrix',
            'services' => [
                [
                    'badge' => 'Mobile',
                    'figmaIcon' => 'imgServicesPage',
                    'figmaImage' => 'imgImagePlaceholder',
                    'title' => 'تطبيقات الموبايل',
                    'subtitle' => 'iOS & Android',
                    'desc' => 'تصميم وتطوير تطبيقات جوال متكاملة بواجهات مستخدم سلسة وأداء عالٍ على منصتَي iOS وAndroid.',
                    'features' => [
                        'تصميم UI/UX احترافي',
                        'أداء عالٍ وسرعة قياسية',
                        'دعم اللغتين العربية والإنجليزية',
                        'تكامل مع الأنظمة الخارجية',
                    ],
                ],
                [
                    'badge' => 'Web',
                    'figmaIcon' => 'imgServicesPage1',
                    'figmaImage' => 'imgImagePlaceholder1',
                    'title' => 'تطوير المواقع والمنصات',
                    'subtitle' => 'الإلكترونية',
                    'desc' => 'إنشاء مواقع ومتاجر إلكترونية سريعة، آمنة، ومتجاوبة مع جميع الشاشات وبمعايير SEO عالمية.',
                    'features' => [
                        'متاجر إلكترونية متكاملة',
                        'سرعة تحميل قياسية',
                        'تحسين محركات البحث',
                        'لوحة تحكم سهلة',
                    ],
                ],
                [
                    'badge' => 'AI',
                    'figmaIcon' => 'imgServicesPage2',
                    'figmaImage' => 'imgImagePlaceholder2',
                    'imageFit' => 'positioned',
                    'imageTop' => '-40.36%',
                    'imageHeight' => '164.72%',
                    'title' => 'حلول الذكاء الاصطناعي',
                    'subtitle' => 'والأتمتة',
                    'desc' => 'دمج تقنيات الذكاء الاصطناعي والأتمتة لتطوير كفاءة العمليات وتحليل البيانات واتخاذ قرارات أذكى.',
                    'features' => [
                        'نماذج لغوية مخصصة',
                        'أتمتة العمليات',
                        'تحليل البيانات المتقدم',
                        'تكامل API ذكي',
                    ],
                ],
                [
                    'badge' => 'Marketing',
                    'figmaIcon' => 'imgServicesPage4',
                    'figmaImage' => 'imgImagePlaceholder4',
                    'title' => 'التسويق الإلكتروني',
                    'subtitle' => 'والحملات الرقمية',
                    'desc' => 'إدارة الحملات الإعلانية والسوشيال ميديا للوصول للجمهور المستهدف وزيادة المبيعات بشكل مقيس.',
                    'features' => [
                        'حملات جوجل وميتا',
                        'إدارة السوشيال ميديا',
                        'تحليلات أداء تفصيلية',
                        'تحسين معدل التحويل',
                    ],
                ],
                [
                    'badge' => 'Games',
                    'figmaIcon' => 'imgServicesPage3',
                    'figmaImage' => 'imgImagePlaceholder3',
                    'title' => 'تطوير وتصميم الألعاب',
                    'subtitle' => 'الرقمية التفاعلية',
                    'desc' => 'ابتكار ألعاب رقمية تفاعلية وممتعة بتصاميم حديثة وتجربة ألعاب ممتازة على جميع المنصات.',
                    'features' => [
                        'تصميم تجربة لعب احترافي',
                        'رسومات ثلاثية الأبعاد',
                        'متعددة اللاعبين',
                        'توافق متعدد المنصات',
                    ],
                ],
            ],
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact', [
            'title' => 'اتصل بنا — Velrix',
            'serviceOptions' => [
                'تطوير تطبيقات الموبايل',
                'تطوير المواقع والمنصات',
                'حلول الذكاء الاصطناعي',
                'التسويق الإلكتروني',
                'تصميم وتطوير الألعاب',
                'الدعم الفني والصيانة',
            ],
            'contactInfo' => [
                [
                    'figmaIcon' => 'imgIcon3',
                    'label' => 'العنوان',
                    'value' => config('velrix.address'),
                    'note' => config('velrix.address_ar'),
                ],
                [
                    'figmaIcon' => 'imgIcon4',
                    'label' => 'البريد الإلكتروني',
                    'value' => config('velrix.email'),
                    'note' => config('velrix.email_support'),
                    'ltr' => true,
                ],
                [
                    'figmaIcon' => 'imgIcon5',
                    'label' => 'الهاتف',
                    'value' => config('velrix.phone'),
                    'note' => 'واتساب متاح',
                    'ltr' => true,
                ],
                [
                    'figmaIcon' => 'imgIcon6',
                    'label' => 'ساعات العمل',
                    'value' => 'الأحد – الخميس',
                    'note' => '10:00 ص — 6:00 م',
                ],
            ],
            'contactSocial' => [
                ['figma' => 'imgIcon7', 'url' => '#', 'label' => 'Instagram'],
                ['figma' => 'imgIcon8', 'url' => '#', 'label' => 'LinkedIn'],
                ['figma' => 'imgIcon9', 'url' => '#', 'label' => 'Facebook'],
                ['figma' => 'imgIcon10', 'url' => '#', 'label' => 'TikTok'],
                ['figma' => 'imgIcon11', 'url' => '#', 'label' => 'WhatsApp'],
            ],
        ]);
    }
}
