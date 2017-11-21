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

    'accepted'             => 'Le :attribute doit être accépté.',
    'active_url'           => 'Le :attribute n\'est pas un URL valide.',
    'after'                => 'Le :attribute doit être une date ultérieure à :date.',
    'after_or_equal'       => 'Le :attribute doit être une date ultérieure ou égale à :date.',
    'alpha'                => 'Le :attribute ne doit contenir que des lettres.',
    'alpha_dash'           => 'Le :attribute ne doit contenir que des lettres, nombres, et tirets.',
    'alpha_num'            => 'Le :attribute ne doit contenir que des lettres et nombre.',
    'array'                => 'Le :attribute doit être un tableau.',
    'before'               => 'Le :attribute doit être une date ultérieure à :date.',
    'before_or_equal'      => 'Le :attribute doit être une date ultérieure à ou égale à :date.',
    'between'              => [
        'numeric' => 'Le :attribute doit être compris entre :min et :max.',
        'file'    => 'Le :attribute doit être compris entre  :min et :max kilo-octets.',
        'string'  => 'Le :attribute doit être compris entre :min et :max caractères.',
        'array'   => 'Le :attribute doit avoir entre :min et :max articles.',
    ],
    'boolean'              => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed'            => 'La confirmation du :attribute ne correspond pas.',
    'date'                 => 'La :attribute n\'est pas une date valide.',
    'date_format'          => 'Le :attribute ne correspond pas au format :format.',
    'different'            => 'Le :attribute et :other doivent être différents.',
    'digits'               => 'Le :attribute doit être :digits chiffres.',
    'digits_between'       => 'Le :attribute doit être compris entre les chiffre :min et :max.',
    'dimensions'           => 'Le :attribute a une dimensio d\'image invalie.',
    'distinct'             => 'Le :attribute a une valeur en double.',
    'email'                => 'Le :attribute doit être une adresse email valide.',
    'exists'               => 'Le :attribute séléctionné est invalide.',
    'file'                 => 'Le :attribute doit être un fichier.',
    'filled'               => 'Le champ :attribute ne devrait pas être vide.',
    'image'                => 'Le :attribute doit être une image.',
    'in'                   => 'Le :attribute sélécttionné est invalide.',
    'in_array'             => 'Le :attribute n\'existe pas dans :other.',
    'integer'              => 'Le :attribute doit être un entier.',
    'ip'                   => 'Le :attribute doit être un adresse IP valide.',
    'ipv4'                 => 'Le :attribute doit être un adresse IPv4 valide.',
    'ipv6'                 => 'Le :attribute doit être un valid IPv6 valide.',
    'json'                 => 'Le :attribute doit être une chaîne JSON valide.',
    'max'                  => [
        'numeric' => 'Le :attribute ne doit pas être supérieur à :max.',
        'file'    => 'Le :attribute ne doit pas être supérieur à :max liko-octets.',
        'string'  => 'Le :attribute ne doit pas être supérieur à :max caractères.',
        'array'   => 'Le :attribute ne doit pas avoir plus de :max articles.',
    ],
    'mimes'                => 'Le :attribute doit être un un fichier de type: :values.',
    'mimetypes'            => 'Le :attribute doit être un un fichier de type: :values.',
    'min'                  => [
        'numeric' => 'Le :attribute doit être au moins :min.',
        'file'    => 'Le :attribute doit être au moins :min kilo-octets.',
        'string'  => 'Le :attribute doit être au moins :min caractères.',
        'array'   => 'Le :attribute doit au moins avoir :min articles.',
    ],
    'not_in'               => 'Le :attribute séléctionné est invalide.',
    'numeric'              => 'Le :attribute doit être un nombre.',
    'present'              => 'Le champ :attribute doit être présent.',
    'regex'                => 'Le format de :attribute est invalide.',
    'required'             => 'Le champ :attribute est requise.',
    'required_if'          => 'Le champ :attribute est requise quand :other est :value.',
    'required_unless'      => 'Le champ :attribute est requise à moins que :other est dans :values.',
    'required_with'        => 'Le champ :attribute est requise quand :values est présent.',
    'required_with_all'    => 'Le champ :attribute est requise quand :values est présent.',
    'required_without'     => 'Le champ :attribute est requise quand :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requise quand aucun des :values ne sont présent.',
    'same'                 => 'Le :attribute et :other doivent être identiques.',
    'size'                 => [
        'numeric' => 'Le :attribute doit être :size.',
        'file'    => 'Le :attribute doit être :size kilo-octets.',
        'string'  => 'Le :attribute doit être :size caractères.',
        'array'   => 'Le :attribute doit contenir :size articles.',
    ],
    'string'               => 'Le :attribute doit être une chaine de caractères.',
    'timezone'             => 'Le :attribute doit être un champ valide.',
    'unique'               => 'Le :attribute a déjà été prise.',
    'uploaded'             => 'Le :attribute a échoué lors de l(upload',
    'url'                  => 'Le format de :attribute est invalide.',

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
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

    'attributes' => [],

];
