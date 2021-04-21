<?php

function language($lang)
{
	$arr[' '] = " ";
	$arr[':'] = " : ";
	$arr['/'] = " / ";
	$arr['-'] = " - ";
	$arr['*'] = " * ";
	
	$arr['edit'] = "تعديل";
	$arr['delete'] = "حذف";
	$arr['en'] = "انجليزي";
	$arr['ar'] = "عربي";
	$arr['first'] = "الأول";
	$arr['next'] = "التالي";
	$arr['previous'] = "السابق";
	$arr['last'] = "الأخير";
	$arr['add'] = "اضافة";
	$arr['save'] = "حفظ";
	$arr['day'] = "اليوم";
	$arr['hello'] = "مرحبا";
	$arr['show'] = "عرض";
	$arr['print'] = "طباعة";
	
	// Ourteam	
	$arr['more'] = "المزيد";
	$arr['job'] = "الوظيفة";
	$arr['team'] = "الفريق";
	$arr['ourteam'] = "فريق عملنا";
	$arr['newourteam'] = "عضو جديد";
	$arr['noourteam'] = "لا يوجد أعضاء";
	$arr['deleteourteammodal'] = "هل أنت متأكد من رغبتك في حذف هذا العضو ؟";
	$arr['description'] = "الوصف";
	
	// Wish
	$arr['wish'] = "أمنية";
	$arr['wait'] = "انتظر ...";	
	
	//
	$arr['slogan'] = "الإستثنائي بالنسبة لنا هو العادي";
	$arr['copyright'] = "كل الحقوق محفوظة, تم التصميم والتطوير لدى ";
	$arr['contactslogan'] = "اتصل بنا حينما تريد";
	$arr['form'] = "المراسلة";
	$arr['home'] = "الرئيسية";
	$arr['about'] = "عنا";
	$arr['address'] = "العنوان";
	$arr['message'] = "الرسالة";
	$arr['send'] = "ارسال";
	$arr['email'] = "البريد الإلكتروني";
	$arr['name'] = "الإسم";
	
	// Menu
	$arr['system'] = "النظام";
	$arr['homepage'] = "الرئيسية";
	$arr['addproduct'] = "اضافة منتج";
	$arr['services'] = "الخدمات";
	$arr['portfolio'] = "الإعمال";
	$arr['contact'] = "التواصل";
	$arr['database'] = "قاعدة البيانات";
	
	// Database
	$arr['exportbackup'] = "نسخ قاعدة البيانات";
	$arr['importbackup'] = "تحميل قاعدة البيانات";
	$arr['databasedate'] = "تاريخ قاعدة البيانات التي تود تحميلها";
	$arr['mustselectdate'] = "يجب أن تختار تاريخا";
	
	// System
	$arr['websitename'] = "اسم الموقع";
	$arr['slogan'] = "الشعار";
	$arr['currency'] = "العملة";
	$arr['logo'] = "اللوجو";
	$arr['nodata'] = "لا توجد بيانات";
	$arr['paiementemail'] = "ايميل عمليات الدفع";
	
	// Homepage
	$arr['newimage'] = "صورة جديدة";
	$arr['changeimage'] = "تغيير الصورة";
	
	
	// About
	$arr['body'] = "من نحن";
	$arr['vision'] = "رؤيتنا";
	$arr['mission'] = "رسالتنا";
	$arr['values'] = "قيمنا";
	$arr['logostory'] = "قصة اللوجو";
	
	// Pages
	$arr['pageurl'] = "عنوان الصفحة";
	$arr['pages'] = "الصفحات";
	$arr['newpage'] = "صفحة جديدة";
	$arr['page'] = "صفحة";
	$arr['nopages'] = "لا توجد صفحات";
	$arr['deletepagemodal'] = "هل أنت متأكد من رغبتك في حذف هذه الصفحة ؟"; 
	$arr['keywords'] = "الكلمات الدالة";
	
	// Contact
	$arr['phone'] = "هاتف";
	$arr['sphone'] = "هاتف المبيعات";
	$arr['facebook'] = "فيسبوك";
	$arr['twitter'] = "تويتر";
	$arr['googleplus'] = "جوجل بلاس";
	$arr['linkedin'] = "لنكيد إن";
	$arr['skype'] = "سكايب";
	$arr['instagram'] = "انستجرام";
	$arr['pinterest'] = "بينتريست";
	$arr['youtube'] = "يوتيوب";
	
	// Testimonials
	$arr['job'] = "وظيفة";
	$arr['company'] = "شركة";
	$arr['website'] = "موقع إلكتروني";
	$arr['testimonials'] = "فخرنا";
	$arr['notestimonials'] = "لا يوجد ما تفخر به";
	$arr['newtestimonial'] = "شهادة فخر جديدة";
	$arr['deletetestimonialmodal'] = "هل أنت متأكد من رغبتك في حذف شهادة الفخر هذه ؟";
	
	// Categories
	$arr['all'] = "الكل";
	$arr['icon'] = "ايكون";
	$arr['title'] = "اسم المنتج";
	$arr['nocategories'] = "لا توجد تصنيفات";
	$arr['categories'] = "التصنيفات";
	$arr['currectcategories'] = "التصنيفات الحالية";
	$arr['newcategory'] = "تصنيف جديد";	
	$arr['deletecategorymodal'] = "هل أنت متأكد من رغبتك في حذف هذا التصنيف ؟ ";
	
	// Sizes
	$arr['sizes'] = "القياسات";
	$arr['currentsizes'] = "القياسات الحالية";
	$arr['newsize'] = "قياس جديد";
	$arr['size'] = "قياس";
	$arr['nosizes'] = "لا توجد قياسات";
	$arr['deletesizemodal'] = "هل أنت متأكد من رغبتك في حذف هذا القياس ؟";
	
	// Colors
	$arr['colors'] = "الألوان";
	$arr['currentcolors'] = "الألوان الحالية";
	$arr['newcolor'] = "لون جديد";
	$arr['color'] = "لون";
	$arr['nocolors'] = "لا توجد الوان";
	$arr['deletecolormodal'] = "هل أنت متأكد من رغبتك في حذف هذا اللون ؟";
	
	// Products
	$arr['code'] = "كود";
	$arr['inputmatchnotarabic'] = "لا يمكن أن تكون الحروف باللغة العربية";
	$arr['productcode'] = "كود المنتج";
	$arr['details'] = "التفاصيل";
	$arr['noproducts'] = "لا توجد منتجات";
	$arr['product'] = "منتج";
	$arr['products'] = "منتجات";	
	$arr['newproduct'] = "منتج جديد";	
	$arr['deleteproductmodal'] = "هل أنت متأكد من رغبتك في حذف هذا المنتج ؟";
	$arr['oldprice'] = "السعر القديم";
	$arr['price'] = "السعر";
	$arr['quantity'] = "الكمية";
	$arr['inputmatch'] = "الخانة يجب أن تملأ";
	$arr['selectmatch'] = "يجب أن تختار من الخيارات";	
	$arr['oldpricematch'] = "الخانة يجب أن تملأ مثل 00.00";
	$arr['pricematch'] = "الخانة يجب أن تملأ مثل 00.00";
	$arr['quantitymatch'] = "يجب أن تكون عددا";
	$arr['views'] = "المشاهدات";
	
	// Categories
	$arr['men'] = "رجالي";
	$arr['kids'] = "اطفالي";
	$arr['underwear'] = "ملابس داخلية";
	$arr['homewear'] = "ملابس بيت";
	$arr['socks'] = "شرابات";
	$arr['boxer'] = "بوكسر";
	$arr['undershirt'] = "فانلة";
	$arr['longunderwear'] = "كلسون";
	$arr['pajama'] = "بيجامة";
	$arr['sweatpant'] = "شروال";
	$arr['towel'] = "فوطة";
	$arr['robe'] = "برنس";
	
	// Sales	
	$arr['sale'] = "شراء";
	$arr['invoice'] = "فاتورة";
	$arr['invoicetotal'] = "اجمالي الفاتورة";
	$arr['newsale'] = "عملية شراء";
	$arr['sales'] = "المشتريات";
	$arr['nosales'] = "لا توجد مشتريات";
	$arr['delivered'] = "تم التوصيل";
	$arr['nondelivered'] = "قيد التوصيل";
	$arr['deletesalemodal'] = "هل أنت متأكد من رغبتك في حذف هذا الشراء ؟";
	$arr['time'] = "الوقت";
	$arr['number'] = "رقم";	
	
	// Backs
	$arr['back'] = "مرتجع";
	$arr['backs'] = "المرتجعات";
	$arr['nobacks'] = "لا توجد مرتجعات";
	$arr['newback'] = "مرتجع جديد";
	$arr['olddata'] = "البيانات القديمة";
	$arr['newdata'] = "البيانات الجديدة";
	
	//	FrontEnd
	
	//	Product
	$arr['addtocart'] = "أضف الى الحافظة";
	$arr['unitprice'] = "سعر الوحدة";
	$arr['total'] = "المجموع";
	$arr['mycartproducts'] = "حقيبتي التسويقية";
	$arr['checkout'] = "الدفع";
	$arr['emptycart'] = "اخلاء المحفظة";
	$arr['yourcartisempty'] = "محفظتك خالية";
	$arr['paymessage'] = "رسالة الدفع";
	$arr['paycancel'] = "لقد قمت بالغاء عملية الدفع";
	$arr['paysuccess'] = "لقد تمت عملية الدفع بنجاح و كود الشراء هو : ";
	$arr['search'] = "بحث";
	$arr['followus'] = "تابعنا";
	$arr['links'] = "روابط";
	$arr['paymethod'] = "طريقة الدفع";
	$arr['select'] = "اختر";
	$arr['paypal'] = "باي بال";
	$arr['ondelivery'] = "أثناء التوصيل";
	$arr['cantbuy'] = "لا يمكنك الشراء لانه لديك 3 طلبات قيد الوصول";
	
	// Offers
	$arr['offers'] = "العروض";
	$arr['newoffer'] = "عرض جديد";
	$arr['offer'] = "العرض";
	$arr['nooffer'] = "لا توجد عروض";
	$arr['deleteoffermodal'] = "هل أنت متأكد من رغبتك في حذف هذا العرض ؟";
	$arr['hurryoffer'] = "سارع بالإتصال بنا";
	
	// Portfolio
	$arr['noprojects'] = "لا توجد مشروعات";
	$arr['newproject'] = "مشروع جديد";
	
	$arr['reset'] = "إعادة";
	$arr['accept'] = "موافق";
	$arr['year'] = "سنوات";
	$arr['members'] = "أعداد";
	$arr['appearto'] = "تظهر ل";
	
	// Clients	
	$arr['newclient'] = "عميل جديد";
	$arr['clients'] = "العملاء";
	$arr['noclients'] = "لا يوجد عملاء";
	$arr['deleteclientmodal'] = "هل أنت متأكد من رغبتك في حذف هذا العميل ؟";
	
	// admin
	$arr['countries'] = "الدول";
	$arr['hello'] = "مرحبا";
	$arr['image'] = "صورة";
	$arr['agree'] = "موافق";
	$arr['no'] = "لا";
		
	//	designs/forms/login.php
	$arr['nowuser'] = "مستخدم حالي";
	$arr['username'] = "اسم المستخدم";
	$arr['mobile'] = "رقم الموبايل";
	$arr['password'] = "كلمة المرور";
	$arr['remember'] = "تذكرني";
	$arr['close'] = "اغلاق";
	$arr['login'] = "دخول";
	$arr['logout'] = "خروج";
	$arr['forgotpass'] = "نسيت كلمة المرور";
	$arr['wronglogin'] = "ادخل اسم المستخدم وكلمة المرور الصحيحتين";	
	
	echo $arr[$lang];
}

?>