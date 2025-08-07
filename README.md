# Account237 Workflow Seeder

This repository contains the Account237 workflow seeder for the BeOn Backend v3 project.

## Overview

The Account237 workflow seeder implements an interactive customer service flow with the following features:

### 🔄 Main Flow:
1. **Initial Contact** - Detects when user sends a message
2. **Department Selection** - Interactive buttons to choose between Sales (المبيعات) or Support (الدعم الفني)

### 💼 Sales Flow:
When users select Sales, they get a service selection with interactive buttons:
- **SMS Service** (خدمة الرسائل النصية) - Bulk messaging with competitive pricing
- **OTP Service** (خدمة رمز التحقق) - Secure verification codes
- **WhatsApp Business Service** (خدمة الواتساب للأعمال) - Professional messaging platform

### 🔧 Support Flow:
Complete technical support information including:
- Working hours and contact details
- Available support services
- Response time expectations

## Implementation Details

- **Workflow ID**: 237
- **Interactive Buttons**: Uses WhatsApp interactive message format
- **Language**: All content in Arabic with appropriate emojis
- **Database Structure**: Creates 9 workflow steps with proper branching logic

## Installation

1. Copy the `Account237WorkflowSeeder.php` file to your `database/seeders/` directory
2. Run the seeder using: `php artisan db:seed --class=Account237WorkflowSeeder`

## File Location

The seeder file is located at:
```
database/seeders/Account237WorkflowSeeder.php
```

## Usage

The workflow will be triggered when users interact with the chat system for Account237. The flow provides:
- Professional Arabic content
- Interactive button navigation
- Detailed service explanations
- Proper fallback handling

## Technical Requirements

- Laravel framework
- WorkflowStep and WorkflowBranch models
- JSON configuration support
- WhatsApp Business API integration

---

**Note**: This seeder follows the existing project patterns and can be easily integrated into the main BeOn Backend v3 project.
