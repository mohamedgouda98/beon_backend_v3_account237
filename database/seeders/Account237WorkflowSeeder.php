<?php

namespace Database\Seeders;

use App\Models\WorkflowBranch;
use App\Models\WorkflowStep;
use Illuminate\Database\Seeder;

class Account237WorkflowSeeder extends Seeder
{
    public function run(): void
    {
        $workflowId = 237;

        /*──────────────── STEP 1 : root detector ────────────────*/
        $root = WorkflowStep::create([
            'workflow_id' => $workflowId,
            'type'        => 'condition',
            'name'        => 'Detect client message',
            'order'       => 1,
            'config'      => ['condition_type' => 'message_contains'],
        ]);

        /*──────────────── STEP 2-A : ask department selection (interactive) ──*/
        $askDepartment = WorkflowStep::create([
            'workflow_id'  => $workflowId,
            'type'         => 'action',
            'message_type' => 'interactive',
            'name'         => 'Ask Department Selection',
            'order'        => 2,
            'config'       => json_encode([
                'action'  => 'send_message',
                'message' => 'مرحباً بك! 👋\n\nكيف يمكنني مساعدتك اليوم؟ \nيرجى اختيار القسم المناسب:',
                'buttons' => [
                    ['type' => 'reply', 'reply' => ['id' => 'sales', 'title' => 'المبيعات 💼']],
                    ['type' => 'reply', 'reply' => ['id' => 'support', 'title' => 'الدعم الفني 🔧']],
                ],
            ]),
        ]);

        /*──────────────── STEP 3-A : check department selection ───────────────*/
        $checkDepartment = WorkflowStep::create([
            'workflow_id' => $workflowId,
            'type'        => 'condition',
            'name'        => 'Check Department Selection',
            'order'       => 3,
            'config'      => ['condition_type' => 'message_equals'],
        ]);

        /*──────────────── STEP 3-B : ask service selection for sales (interactive) ──*/
        $askService = WorkflowStep::create([
            'workflow_id'  => $workflowId,
            'type'         => 'action',
            'message_type' => 'interactive',
            'name'         => 'Ask Service Selection',
            'order'        => 4,
            'config'       => json_encode([
                'action'  => 'send_message',
                'message' => 'أهلاً وسهلاً بك في قسم المبيعات! 💼\n\nيرجى اختيار الخدمة التي تحتاجها:',
                'buttons' => [
                    ['type' => 'reply', 'reply' => ['id' => 'sms', 'title' => 'خدمة الرسائل النصية 📱']],
                    ['type' => 'reply', 'reply' => ['id' => 'otp', 'title' => 'خدمة OTP 🔐']],
                    ['type' => 'reply', 'reply' => ['id' => 'whatsapp', 'title' => 'خدمة الواتساب 💚']],
                ],
            ]),
        ]);

        /*──────────────── STEP 4-A : check service selection ───────────────*/
        $checkService = WorkflowStep::create([
            'workflow_id' => $workflowId,
            'type'        => 'condition',
            'name'        => 'Check Service Selection',
            'order'       => 5,
            'config'      => ['condition_type' => 'message_equals'],
        ]);

        /*──────────────── STEP 4-B : explain SMS service ───────────────*/
        $explainSMS = WorkflowStep::create([
            'workflow_id'  => $workflowId,
            'type'         => 'action',
            'message_type' => 'text',
            'name'         => 'Explain SMS Service',
            'order'        => 6,
            'config'       => json_encode([
                'action'   => 'send_message',
                'message'  => '📱 **خدمة الرسائل النصية (SMS)**\n\n' .
                             'توفر لك خدمة الرسائل النصية إمكانية إرسال الرسائل القصيرة إلى عملائك بشكل فوري وموثوق.\n\n' .
                             '✨ **مميزات الخدمة:**\n' .
                             '• إرسال رسائل جماعية\n' .
                             '• تغطية محلية وعالمية\n' .
                             '• تقارير مفصلة عن حالة التسليم\n' .
                             '• أسعار تنافسية\n' .
                             '• واجهة برمجة تطبيقات سهلة الاستخدام\n\n' .
                             '💰 **الأسعار تبدأ من 0.05 ريال للرسالة الواحدة**\n\n' .
                             'لمزيد من التفاصيل أو لبدء الخدمة، تواصل مع فريق المبيعات. 📞',
                'complete' => true,
            ]),
        ]);

        /*──────────────── STEP 4-C : explain OTP service ───────────────*/
        $explainOTP = WorkflowStep::create([
            'workflow_id'  => $workflowId,
            'type'         => 'action',
            'message_type' => 'text',
            'name'         => 'Explain OTP Service',
            'order'        => 7,
            'config'       => json_encode([
                'action'   => 'send_message',
                'message'  => '🔐 **خدمة رمز التحقق (OTP)**\n\n' .
                             'خدمة آمنة ومتقدمة لحماية حسابات المستخدمين من خلال إرسال رموز التحقق الفوري.\n\n' .
                             '🛡️ **مميزات الخدمة:**\n' .
                             '• أمان عالي المستوى\n' .
                             '• سرعة في التسليم (أقل من 30 ثانية)\n' .
                             '• دعم متعدد القنوات (SMS, Voice, WhatsApp)\n' .
                             '• حماية ضد الاحتيال والهجمات\n' .
                             '• تخصيص قوالب الرسائل\n' .
                             '• تقارير تفصيلية\n\n' .
                             '💰 **الأسعار تبدأ من 0.08 ريال لكل عملية تحقق**\n\n' .
                             '🎯 **مناسب للمصارف، التطبيقات، المواقع الإلكترونية**\n\n' .
                             'لمزيد من التفاصيل أو لبدء الخدمة، تواصل مع فريق المبيعات. 📞',
                'complete' => true,
            ]),
        ]);

        /*──────────────── STEP 4-D : explain WhatsApp service ───────────────*/
        $explainWhatsApp = WorkflowStep::create([
            'workflow_id'  => $workflowId,
            'type'         => 'action',
            'message_type' => 'text',
            'name'         => 'Explain WhatsApp Service',
            'order'        => 8,
            'config'       => json_encode([
                'action'   => 'send_message',
                'message'  => '💚 **خدمة الواتساب للأعمال (WhatsApp Business)**\n\n' .
                             'تواصل مع عملائك بطريقة أكثر تفاعلاً من خلال منصة الواتساب الرسمية للأعمال.\n\n' .
                             '🌟 **مميزات الخدمة:**\n' .
                             '• رسائل نصية وصور وفيديوهات\n' .
                             '• قوالب رسائل معتمدة من واتساب\n' .
                             '• رسائل تفاعلية مع أزرار\n' .
                             '• دعم الرسائل الجماعية\n' .
                             '• تقارير مفصلة عن معدل الوصول والقراءة\n' .
                             '• دعم متعدد اللغات\n' .
                             '• ربط مع أنظمة CRM\n\n' .
                             '💰 **الأسعار:**\n' .
                             '• رسائل الخدمة: 0.12 ريال\n' .
                             '• رسائل المحادثة: 0.08 ريال\n' .
                             '• رسائل التسويق: 0.20 ريال\n\n' .
                             '📈 **معدل فتح 95% - أعلى من البريد الإلكتروني والرسائل النصية**\n\n' .
                             'لمزيد من التفاصيل أو لبدء الخدمة، تواصل مع فريق المبيعات. 📞',
                'complete' => true,
            ]),
        ]);

        /*──────────────── STEP 3-C : support message ───────────────*/
        $supportMessage = WorkflowStep::create([
            'workflow_id'  => $workflowId,
            'type'         => 'action',
            'message_type' => 'text',
            'name'         => 'Support Message',
            'order'        => 9,
            'config'       => json_encode([
                'action'   => 'send_message',
                'message'  => '🔧 **مرحباً بك في قسم الدعم الفني!**\n\n' .
                             'نحن هنا لمساعدتك في حل أي مشكلة تقنية قد تواجهها.\n\n' .
                             '📋 **خدمات الدعم الفني:**\n' .
                             '• حل المشاكل التقنية\n' .
                             '• مساعدة في التكامل مع API\n' .
                             '• دعم الإعدادات والتكوين\n' .
                             '• استكشاف الأخطاء وإصلاحها\n' .
                             '• التدريب على استخدام النظام\n\n' .
                             '⏰ **أوقات العمل:** من الأحد إلى الخميس، 9 صباحاً - 6 مساءً\n\n' .
                             '📞 **للحصول على دعم فوري:**\n' .
                             '• الهاتف: 920000000\n' .
                             '• البريد الإلكتروني: support@company.com\n' .
                             '• تذكرة دعم: portal.company.com\n\n' .
                             'سيتم الرد عليك في أقرب وقت ممكن. شكراً لك! 🙏',
                'complete' => true,
            ]),
        ]);

        /*──────────────── STEP 99 : END WORKFLOW ──────────────*/
        $end = WorkflowStep::create([
            'workflow_id'  => $workflowId,
            'type'         => 'action',
            'message_type' => 'text',
            'name'         => 'End Workflow',
            'config'       => ['action' => 'noop', 'message' => 'سوف يتم الرد عليك في أسرع وقت'],
            'order'        => 99,
        ]);

        /*────────────────── BRANCHES CONFIGURATION ──────────────────*/

        // Root to department selection (always)
        WorkflowBranch::insert([
            [
                'parent_step_id'  => $root->id,
                'child_step_id'   => $askDepartment->id,
                'condition_type'  => 'always',
                'condition_value' => null,
            ],
        ]);

        // Department selection to service selection or support
        WorkflowBranch::insert([
            [
                'parent_step_id'  => $askDepartment->id,
                'child_step_id'   => $checkDepartment->id,
                'condition_type'  => 'always',
                'condition_value' => null,
            ],
        ]);

        // Check department branches
        WorkflowBranch::insert([
            [
                'parent_step_id'  => $checkDepartment->id,
                'child_step_id'   => $askService->id,
                'condition_type'  => 'if',
                'condition_value' => json_encode(['type' => 'equals', 'value' => 'sales']),
            ],
            [
                'parent_step_id'  => $checkDepartment->id,
                'child_step_id'   => $supportMessage->id,
                'condition_type'  => 'if',
                'condition_value' => json_encode(['type' => 'equals', 'value' => 'support']),
            ],
            [
                'parent_step_id'  => $checkDepartment->id,
                'child_step_id'   => $end->id,
                'condition_type'  => 'else',
                'condition_value' => null,
            ],
        ]);

        // Service selection to service check
        WorkflowBranch::insert([
            [
                'parent_step_id'  => $askService->id,
                'child_step_id'   => $checkService->id,
                'condition_type'  => 'always',
                'condition_value' => null,
            ],
        ]);

        // Check service branches
        WorkflowBranch::insert([
            [
                'parent_step_id'  => $checkService->id,
                'child_step_id'   => $explainSMS->id,
                'condition_type'  => 'if',
                'condition_value' => json_encode(['type' => 'equals', 'value' => 'sms']),
            ],
            [
                'parent_step_id'  => $checkService->id,
                'child_step_id'   => $explainOTP->id,
                'condition_type'  => 'if',
                'condition_value' => json_encode(['type' => 'equals', 'value' => 'otp']),
            ],
            [
                'parent_step_id'  => $checkService->id,
                'child_step_id'   => $explainWhatsApp->id,
                'condition_type'  => 'if',
                'condition_value' => json_encode(['type' => 'equals', 'value' => 'whatsapp']),
            ],
            [
                'parent_step_id'  => $checkService->id,
                'child_step_id'   => $end->id,
                'condition_type'  => 'else',
                'condition_value' => null,
            ],
        ]);

        // End connections for complete workflows
        WorkflowBranch::insert([
            [
                'parent_step_id'  => $explainSMS->id,
                'child_step_id'   => $end->id,
                'condition_type'  => 'always',
                'condition_value' => null,
            ],
            [
                'parent_step_id'  => $explainOTP->id,
                'child_step_id'   => $end->id,
                'condition_type'  => 'always',
                'condition_value' => null,
            ],
            [
                'parent_step_id'  => $explainWhatsApp->id,
                'child_step_id'   => $end->id,
                'condition_type'  => 'always',
                'condition_value' => null,
            ],
            [
                'parent_step_id'  => $supportMessage->id,
                'child_step_id'   => $end->id,
                'condition_type'  => 'always',
                'condition_value' => null,
            ],
        ]);
    }
}
