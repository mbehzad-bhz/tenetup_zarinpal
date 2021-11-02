<?php
return [
    'merchantID' => 'xxxx-xxxx-xxxx-xxx-xxxxx',
    'sandBox' => true,
    'callBackUrl' => 'https://example.com/backPayment',
    'zarinGate' => false,

    'errorList' => [
        "-1" 	=> "اطلاعات ارسال شده ناقص است.",
        "-2" 	=> "IP و يا مرچنت كد پذيرنده صحيح نيست",
        "-3" 	=> "با توجه به محدوديت هاي شاپرك امكان پرداخت با رقم درخواست شده ميسر نمي باشد",
        "-4" 	=> "سطح تاييد پذيرنده پايين تر از سطح نقره اي است.",
        "-9" 	=> "خطای اعتبار سنجی",
        "-10" 	=> "ای پی و يا مرچنت كد پذيرنده صحيح نيست",
        "-11" 	=> "مرچنت کد فعال نیست لطفا با تیم پشتیبانی ما تماس بگیرید",
        "-12" 	=> "تلاش بیش از حد در یک بازه زمانی کوتاه.",
        "-15" 	=> "ترمینال شما به حالت تعلیق در آمده با تیم پشتیبانی تماس بگیرید",
        "-16" 	=> "سطح تاييد پذيرنده پايين تر از سطح نقره اي است.",
        "-21" 	=> "هيچ نوع عمليات مالي براي اين تراكنش يافت نشد",
        "-22" 	=> "تراكنش ناموفق ميباشد",
        "-30" 	=> "اجازه دسترسی به تسویه اشتراکی شناور ندارید",
        "-31" 	=> "حساب بانکی تسویه را به پنل اضافه کنید مقادیر وارد شده واسه تسهیم درست نیست",
        "-32" 	=> "Wages is not valid, Total wages(floating) has been overload max amount.	",
        "-33" 	=> "رقم تراكنش با رقم پرداخت شده مطابقت ندارد",
        "-34" 	=> "سقف تقسيم تراكنش از لحاظ تعداد يا رقم عبور نموده است",
        "-35" 	=> "تعداد افراد دریافت کننده تسهیم بیش از حد مجاز است",
        "-40" 	=> "اجازه دسترسي به متد مربوطه وجود ندارد.",
        "-41" 	=> "اطلاعات ارسال شده مربوط به AdditionalData غيرمعتبر ميباشد.",
        "-42" 	=> "مدت زمان معتبر طول عمر شناسه پرداخت بايد بين 30 دقيه تا 45 روز مي باشد.",
        "-50" 	=> "مبلغ پرداخت شده با مقدار مبلغ در وریفای متفاوت است",
        "-51" 	=> "تراكنش نا موفق ميباشد",
        "-52" 	=> "خطای غیر منتظره با پشتیبانی تماس بگیرید",
        "-53" 	=> "اتوریتی برای این مرچنت کد نیست",
        "-54" 	=> "اتوریتی نامعتبر است",
        "100" 	=> "عمليات با موفقيت انجام گرديده است.",
        "101" 	=> "عمليات پرداخت موفق بوده و قبلا این تراكنش انجام شده است.",
    ]
];
