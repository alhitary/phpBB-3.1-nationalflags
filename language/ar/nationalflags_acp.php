<?php

/**
*
*
* @package - National Flags language
* @copyright (c) RMcGirr83
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'ACP_FLAGS_EXPLAIN'					=> 'من هنا تستطيع إضافة / تعديل / حذف أعلام الدول التي تريدها.',
	'ACP_NO_UPLOAD'						=> '<br><strong>يجب عليك رفع صور الأعلام التي تريدها إلى المسار ext/rmcgirr83/nationalflags/flags قبل إضافة العلم الجديد. إسم صورة العلم يجب أن تكون بحروف صغيرة , مثال : ye.gif</strong>',
	'ACP_FLAGS_DONATE'					=> 'نرجوا <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=S4UTZ9YNKEDDN&item_name=National%20Flags" onclick="window.open(this.href); return false;"><strong>التبرع</strong></a> لو أعجبتك هذه الإضافة',
	'ACP_FLAG_USERS'					=> 'عدد الأعضاء',

	//Add/Edit Flags
	'FLAG_DEFAULT'						=> 'العلم الإفتراضي ',
	'FLAG_DEFAULT_EXPLAIN'				=> 'اختيارك "نعم" يعني أن العلم الإفتراضي سيظهر في بداية القائمة المنسدلة عند تحديد العلم بواسطة العضو.',
	'FLAG_EDIT'							=> 'تعديل الصورة',
	'FLAG_NAME'							=> 'إسم العلم ',
	'FLAG_NAME_EXPLAIN'					=> 'اكتب إسم العلم الذي سيظهر للجميع.',
	'FLAG_IMG'							=> 'إسم الصورة',
	'FLAG_IMG_EXPLAIN'					=> 'مثال : ye.gif. يجب رفع صور الأعلام الجديدة إلى المسار ext/rmcgirr83/nationalflags/flags.',
	'FLAG_IMAGE'						=> 'إسم العلم',
	'FLAG_ADD'							=> 'إضافة علم جديد',
	'FLAG_UPLOAD'						=> 'رفع علم',
	'FLAG_UPLOAD_NOTICE'				=> 'سيتم استبدال الصورة الموجودة مُسبقاً في السيرفر في حالة رفعك لصورة أخرى. <strong>خذ في الإعتبار</strong> حالة الأحرف في إسم ملف الصورة.',
	'FLAG_UPLOAD_NO_OVERWRITE'			=> 'الصورة التي سترفعها يجب أن لا تحمل نفس الإسم أو الإمتداد لأي صورة موجودة مُسبقاً كما هو واضح أدناه.',
	'FLAG_FOUND'						=> 'العلم المتوفر ',
	'IMAGES_ON_SERVER'					=> 'أسماء الصور المتوفرة بالسيرفر ',

	//Settings
	'FLAGS_REQUIRED'					=> 'حقل مطلوب ',
	'FLAGS_REQUIRED_EXPLAIN'			=> 'اختيارك "نعم" يعني اجبار الأعضاء على تحديد علم بلادهم خلال عملية التسجيل أو عند زيارة ملفاتهم الشخصية',
	'FLAGS_DISPLAY_MSG'					=> 'عرض الرسالة ',
	'FLAGS_DISPLAY_MSG_EXPLAIN'			=> 'اختيارك "نعم" يعني ظهور رسالة للعضو في أعلى المنتدى تطلب منه تحديد علم بلاده',
	'FLAGS_NUM_DISPLAY'					=> 'عدد الأعلام ',
	'FLAGS_NUM_DISPLAY_EXPLAIN'			=> 'عدد أعلام الدول التي ستظهر في الصفحة الرئيسية للمنتدى',
	'FLAGS_ON_INDEX'					=> 'العرض في الصفحة الرئيسية ',
	'FLAGS_ON_INDEX_EXPLAIN'			=> 'اختيارك "نعم" يعني ظهور مُلخص لأعلام الأعضاء في الصفحة الرئيسية للمنتدى',
	'FLAGS_DISPLAY_TO_GUESTS'			=> 'العرض للزائرين ',
	'FLAGS_DISPLAY_TO_GUESTS_EXPLAIN'	=> 'اختيارك "نعم" يعني ظهور أعلام الدول للزوار ومحركات البحث',

	'FLAGS_VIEWTOPIC_POSITION'			=> 'مكان العلم ',
	'FLAGS_VIEWTOPIC_POSITION_EXPLAIN'	=> 'سيتم عرض علم الأعضاء في المكان الذي تُحدده هنا',
	'FLAG_POSITION_AFTER_AVATAR'		=> 'بعد الصورة الشخصية', //1
	'FLAG_POSITION_BEFORE_AVATAR'		=> 'قبل الصورة الشخصية', //2
	'FLAG_POSITION_AFTER_USER_NAME'		=> 'بعد إسم العضو', //3
	'FLAG_POSITION_BEFORE_USER_NAME'	=> 'قبل إسم العضو', //4
	'FLAG_POSITION_ABOVE_RANK'			=> 'أعلى رُتبة الأعضاء', //5
	'FLAG_POSITION_BELOW_RANK'			=> 'أسفل رُتبة الأعضاء', //6
	'FLAG_POSITION_AFTER_PROFILE_FIELDS'	=> 'بعد المعلومات الشخصية', //7
	'FLAG_POSITION_BEFORE_PROFILE_FIELDS'	=> 'قبل المعلومات الشخصية', //8
	'FLAG_POSITION_AFTER_CONTACT_FIELDS'	=> 'بعد معلومات الإتصال', //0

	//Logs, messages and errors
	
	'MSG_FLAGS_DELETED'					=> 'تم حذف العلم.',
	'MSG_CONFIRM'						=> '<strong>هل أنت متأكد من حذف هذا العلم ؟</strong>',
	'MSG_FLAG_CONFIRM_DELETE'			=> array(
		1	=> '<br><strong>%d</strong> عضو لديه هذا العلم وسيتوجب عليه اختيار علم آخر في حالة حذفك لهذا العلم.',
		2	=> '<br><strong>%d</strong> أعضاء لديهم هذا العلم وسيتوجب عليهم اختيار علم آخر في حالة حذفك لهذا العلم.',
	),
	'MSG_FLAG_EDITED'					=> 'تم تعديل العلم بنجاح.',
	'MSG_FLAG_ADDED'					=> 'تم إضافة علم جديد بنجاح.',
	'FLAG_ERROR_NO_FLAG_NAME'			=> 'يجب عليك إضافة إسم العلم.',
	'FLAG_ERROR_NO_FLAG_IMG'			=> 'يجب عليك إضافة صورة العلم.',
	'FLAG_ERROR_NOT_EXIST'				=> 'العلم الذي حددته غير موجود.',
	'FLAG_CONFIG_SAVED'					=> '<strong>تم تغيير الإعدادات بنجاح</strong>',
	'FLAG_NAME_EXISTS'					=> 'يجب عليك تغيير إسم العلم لأنه موجود مُسبقاً',
	'FLAG_SETTINGS_CHANGED'				=> 'تم تحديث الإعدادات بنجاح.',
	'FLAG_IMAGE_GENERAL_UPLOAD_ERROR'	=> 'لا يُمكن رفع العلم إلى %s. صورة العلم ربما تكون موجودة مُسبقاً.',
	'FLAG_IMAGE_DISALLOWED_CONTENT'			=> 'توقفت عملية النقل لأنه تم الكشف على أن الملف غير آمن.',
	'FLAG_IMAGE_DISALLOWED_EXTENSION'		=> 'لا يُمكن عرض صورة الملف لأن الإضافة <strong>%s</strong> لا تسمح بذلك.',
	'FLAG_IMAGE_EMPTY_FILEUPLOAD'			=> 'ملف العلم فارغ.',
	'FLAG_IMAGE_EMPTY_REMOTE_DATA'			=> 'لايُمكن نقل صورة العلم الذي رفعتها لأن البيانات تبدوا غير صحيحة أو تالفة.',
	'FLAG_IMAGE_IMAGE_FILETYPE_MISMATCH'	=> 'توجد مشكلة في نوع صورة العلم : الإمتداد المتوقع للصورة هو %1$s ولكن الإمتداد المُرسل هو %2$s.',
	'FLAG_IMAGE_INVALID_FILENAME'			=> 'إسم الملف %s غير صحيح.',
	'FLAG_IMAGE_NOT_UPLOADED'				=> 'لا يُمكن نقل العلم',
	'FLAG_IMAGE_PARTIAL_UPLOAD'				=> 'لا يُمكن نقل العلم تماماً.',
	'FLAG_IMAGE_PHP_SIZE_NA'				=> 'حجم صورة العلم كبير جداً.<br>لا يُمكن تحديد الحد الأقصى للحجم في الملف php.ini.',
	'FLAG_IMAGE_PHP_SIZE_OVERRUN'			=> 'حجم صورة العلم كبير جداً.<br>لا يُمكن تحديد الحد الأقصى للحجم في الملف php.ini.',
	'FLAG_IMAGE_REMOTE_UPLOAD_TIMEOUT'		=> 'تم ايقاف عملية رفع صورة العلم لأنها أخذت وقتاً طويلاً.',
	'FLAG_IMAGE_UNABLE_GET_IMAGE_SIZE'		=> 'لم يستطيع تحديد أبعاد صورة العلم',
	'FLAG_IMAGE_URL_INVALID'				=> 'عنوان العلم غير صحيح',
	'FLAG_IMAGE_URL_NOT_FOUND'				=> 'لا يُمكن العثور على الملف.',
	'FLAG_IMAGE_WRONG_FILESIZE'				=> 'يجب أن يكون حجم صورة العلم بين 0 و %1d %2s.',
	'FLAG_IMAGE_WRONG_SIZE'					=> 'مقاس صورة العلم التي حددتها هو : عرض %1$d بكسل وإرتفاع %2$d بكسل. صورة العلم يجب أن لا تتجاوز %3$d بكسل للعرض و%4$d بكسل للإرتفاع.',
	'FLAGS_REQUIRE_540'			=> 'يجب أن يتوفر لديك على الأقل الإصدار PHP 5.4.0 و منتدى phpBB 3.1.4-RC1 لكي تعمل هذه الإضافة. الرجاء تحديث نسختك الـ PHP و ( أو ) نسخة منتداك لكي تستطيع استخدام الإضافة.',
));
