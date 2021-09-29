<?php

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

return [
    'accepted'             => 'Това поле трябва да бъде взето.',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'Това е невалиден URL адрес.',
    'after'                => 'Това трябва да е датата след :date година.',
    'after_or_equal'       => 'Това трябва да бъде датата след или равна на :date.',
    'alpha'                => 'Това поле може да съдържа само букви.',
    'alpha_dash'           => 'Това поле може да съдържа само букви, цифри, тирета и подчертавания.',
    'alpha_num'            => 'Това поле може да съдържа само букви и цифри.',
    'array'                => 'Това поле трябва да е масив.',
    'attached'             => 'Това поле вече е прикачено.',
    'before'               => 'Това трябва да е дата преди :date година.',
    'before_or_equal'      => 'Това трябва да е дата преди или равна на :date.',
    'between'              => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'              => 'Това поле трябва да е вярно или невярно.',
    'confirmed'            => 'Потвърждението не съвпада.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Това не е валидна дата.',
    'date_equals'          => 'Това трябва да е дата, равна на :date.',
    'date_format'          => 'Това не съответства на формата :format.',
    'different'            => 'Тази стойност трябва да се различава от :other.',
    'digits'               => 'Това трябва да е :digits цифра.',
    'digits_between'       => 'Тя трябва да бъде между :min и :max цифри.',
    'dimensions'           => 'Това изображение има невалидни размери.',
    'distinct'             => 'Това поле има повтарящо се значение.',
    'email'                => 'Това трябва да е валиден имейл адрес.',
    'ends_with'            => 'Това трябва да завърши с едно от следните: :values.',
    'exists'               => 'Избраната стойност е невалидна.',
    'file'                 => 'Съдържанието трябва да е файл.',
    'filled'               => 'Това поле трябва да има значение.',
    'gt'                   => [
        'array'   => 'The content must have more than :value items.',
        'file'    => 'The file size must be greater than :value kilobytes.',
        'numeric' => 'The value must be greater than :value.',
        'string'  => 'The string must be greater than :value characters.',
    ],
    'gte'                  => [
        'array'   => 'The content must have :value items or more.',
        'file'    => 'The file size must be greater than or equal :value kilobytes.',
        'numeric' => 'The value must be greater than or equal :value.',
        'string'  => 'The string must be greater than or equal :value characters.',
    ],
    'image'                => 'Това трябва да е изображение.',
    'in'                   => 'Избраната стойност е невалидна.',
    'in_array'             => 'Тази стойност не съществува в :other.',
    'integer'              => 'Това трябва да е цяло число.',
    'ip'                   => 'Това трябва да е валиден IP адрес.',
    'ipv4'                 => 'Това трябва да е валиден IPv4 адрес.',
    'ipv6'                 => 'Това трябва да е валиден IPv6 адрес.',
    'json'                 => 'Това трябва да е валиден JSON низ.',
    'lt'                   => [
        'array'   => 'The content must have less than :value items.',
        'file'    => 'The file size must be less than :value kilobytes.',
        'numeric' => 'The value must be less than :value.',
        'string'  => 'The string must be less than :value characters.',
    ],
    'lte'                  => [
        'array'   => 'The content must not have more than :value items.',
        'file'    => 'The file size must be less than or equal :value kilobytes.',
        'numeric' => 'The value must be less than or equal :value.',
        'string'  => 'The string must be less than or equal :value characters.',
    ],
    'max'                  => [
        'array'   => 'The content may not have more than :max items.',
        'file'    => 'The file size may not be greater than :max kilobytes.',
        'numeric' => 'The value may not be greater than :max.',
        'string'  => 'The string may not be greater than :max characters.',
    ],
    'mimes'                => 'Това трябва да бъде файл тип: :values.',
    'mimetypes'            => 'Това трябва да е файл тип: :values.',
    'min'                  => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'Тази стойност трябва да бъде кратно на :value',
    'not_in'               => 'Избраната стойност е невалидна.',
    'not_regex'            => 'Този формат е невалиден.',
    'numeric'              => 'Това трябва да е число.',
    'password'             => 'Паролата е грешна.',
    'present'              => 'Това поле трябва да присъства.',
    'prohibited'           => 'Това поле е забранено.',
    'prohibited_if'        => 'Това поле е забранено, ако :other е равно на :value.',
    'prohibited_unless'    => 'Това поле е забранено, освен ако :other не е в :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Този формат е невалиден.',
    'relatable'            => 'Това поле може да не е свързано с този ресурс.',
    'required'             => 'Това поле е задължително.',
    'required_if'          => 'Това поле е задължително, ако :other е равно на :value.',
    'required_unless'      => 'Това поле е задължително, освен ако :other не е в :values.',
    'required_with'        => 'Това поле е задължително, когато има :values.',
    'required_with_all'    => 'Това поле е задължително при наличие на :values.',
    'required_without'     => 'Това поле е задължително, ако :values липсва.',
    'required_without_all' => 'Това поле е задължително, ако не присъства нито един от :values.',
    'same'                 => 'Стойността на това поле трябва да съвпада със стойността от :other.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with'          => 'Това трябва да започне с една от следните точки: :values.',
    'string'               => 'Това трябва да е низ.',
    'timezone'             => 'Това трябва да е допустима зона.',
    'unique'               => 'Това вече е направено.',
    'uploaded'             => 'Това не може да бъде изтеглено.',
    'url'                  => 'Този формат е невалиден.',
    'uuid'                 => 'Това трябва да е валиден UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
