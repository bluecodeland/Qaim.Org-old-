<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute باید پذیرفته شده باشد.',
    'active_url'           => 'آدرس :attribute معتبر نیست',
    'after'                => ':attribute باید تاریخی بعد از :date باشد.',
    'alpha'                => ':attribute باید شامل حروف الفبا باشد.',
    'alpha_dash'           => ':attribute باید شامل حروف الفبا و عدد و خظ تیره(-) باشد.',
    'alpha_num'            => ':attribute باید شامل حروف الفبا و عدد باشد.',
    'array'                => ':attribute باید شامل آرایه باشد.',
    'before'               => ':attribute باید تاریخی قبل از :date باشد.',
    'between'              => [
        'numeric' => ':attribute باید بین :min و :max باشد.',
        'file'    => ':attribute باید بین :min و :max کیلوبایت باشد.',
        'string'  => ':attribute باید بین :min و :max رقم باشد.',
        'array'   => ':attribute باید بین :min و :max آیتم باشد.',
    ],
    'boolean'              => ':attribute فقط میتواند صحیح و یا غلط باشد',
    'confirmed'            => ':attribute با تاییدیه مطابقت ندارد.',
    'date'                 => ':attribute یک تاریخ معتبر نیست.',
    'date_format'          => ':attribute با الگوی :format مطاقبت ندارد.',
    'different'            => ':attribute و :other باید متفاوت باشند.',
    'digits'               => ':attribute باید :digits رقم باشد.',
    'digits_between'       => ':attribute باید بین :min و :max رقم باشد.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'فرمت :attribute معتبر نیست.',
    'exists'               => ':attribute انتخاب شده، معتبر نیست.',
    'filled'               => ':attribute الزامی است',
    'image'                => ':attribute باید تصویر باشد.',
    'in'                   => ':attribute انتخاب شده، معتبر نیست.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':attribute باید نوع داده ای عددی (integer) باشد.',
    'ip'                   => ':attribute باید IP آدرس معتبر باشد.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':attribute نباید بزرگتر از :max باشد.',
        'file'    => ':attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'string'  => ':attribute نباید بیشتر از :max رقم باشد.',
        'array'   => ':attribute نباید بیشتر از :max آیتم باشد.',
    ],
    'mimes'                => ':attribute باید یکی از فرمت های :values باشد.',
    'min'                  => [
        'numeric' => ':attribute نباید کوچکتر از :min باشد.',
        'file'    => ':attribute نباید کوچکتر از :min کیلوبایت باشد.',
        'string'  => ':attribute نباید کمتر از :min رقم باشد.',
        'array'   => ':attribute نباید کمتر از :min آیتم باشد.',
    ],
    'not_in'               => ':attribute انتخاب شده، معتبر نیست.',
    'numeric'              => ':attribute باید شامل عدد باشد.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => ':attribute یک فرمت معتبر نیست.',
    'required'             => ':attribute الزامی است',
    'required_if'          => ':attribute هنگامی که :other برابر با :value است، الزامیست.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => ':attribute الزامی است زمانی که :values موجود است.',
    'required_with_all'    => ':attribute الزامی است زمانی که :values موجود است.',
    'required_without'     => ':attribute الزامی است زمانی که :values موجود نیست.',
    'required_without_all' => ':attribute الزامی است زمانی که :values موجود نیست.',
    'same'                 => ':attribute و :other باید مانند هم باشند.',
    'size'                 => [
        'numeric' => ':attribute باید برابر با :size باشد.',
        'file'    => ':attribute باید برابر با :size کیلوبایت باشد.',
        'string'  => ':attribute باید برابر با :size رقم باشد.',
        'array'   => ':attribute باسد شامل :size آیتم باشد.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => ':attribute باید یک منطقه صحیح باشد.',
    'unique'               => ':attribute قبلا انتخاب شده است.',
    'url'                  => 'فرمت آدرس :attribute اشتباه است.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom'               => [
        'read_booklet.required' => 'گزینه مطالعه دفترچه را تیک بزنید.'
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes'           => [
        'picture'               => 'عکس',
        'read_booklet'          => 'مطالعه دفترچه راهنما',
        'name'                  => 'نام',
        'username'              => 'نام کاربری',
        'email'                 => 'پست الکترونیکی',
        'firstname'             => 'نام',
        'lastname'              => 'نام خانوادگی',
        'password'              => 'رمز عبور',
        'password_confirmation' => 'تاییدیه ی رمز عبور',
        'country'               => 'کشور',
        'phone'                 => 'تلفن',
        'mobile'                => 'تلفن همراه',
        'age'                   => 'سن',
        'sex'                   => 'جنسیت',
        'gender'                => 'جنسیت',
        'day'                   => 'روز',
        'month'                 => 'ماه',
        'year'                  => 'سال',
        'hour'                  => 'ساعت',
        'minute'                => 'دقیقه',
        'second'                => 'ثانیه',
        'title'                 => 'عنوان',
        'text'                  => 'متن',
        'content'               => 'محتوا',
        'description'           => 'توضیحات',
        'excerpt'               => 'گلچین کردن',
        'date'                  => 'تاریخ',
        'time'                  => 'زمان',
        'available'             => 'موجود',
        'size'                  => 'اندازه',

        'remember'              => 'ذخیره کن',
        'fathers_name'          => 'نام پدر',
        'national_code'         => 'کد ملی',
        'id_number'             => 'شماره شناسنامه',
        'birth_date'            => 'تاریخ تولد',
        'birth_place'           => 'محل تولد',
        'place_of_issue'        => 'محل صدور شناسنامه',
        'marital_status'        => 'وضعیت تأهل',
        'children'              => 'تعدا اولاد',
        'landline'              => 'شماره تلفن ثابت',
        'state'                 => 'استان محل سکونت',
        'city'                  => 'شهر محل سکونت',
        'address'               => 'آدرس محل سکونت',
        'employment_status'     => 'وضعیت اشتغال',
        'place_of_work'         => 'عنوان شغل',
        'level_1_grade'         => 'معدل پایه اول',
        'level_2_grade'         => 'معدل پایه دوم',
        'level_3_grade'         => 'معدل پایه سوم',
        'level_4_grade'         => 'معدل پایه چهارم',
        'level_5_grade'         => 'معدل پایه پنجم',
        'current_school'        => 'نام شهر و مدرسه محل تحصیل فعلی',
    ],

];
