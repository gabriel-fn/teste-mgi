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

    'required' => 'O campo :attribute é obrigatório.',
    'min' => [
        'array' => 'O campo :attribute precisa ter no mínimo :min items.',
        'file' => 'O campo :attribute precisa ter no mínimo :min kilobytes.',
        'numeric' => 'O campo :attribute precisa ser no mínimo :min.',
        'string' => 'O campo :attribute precisa ter no mínimo :min caracteres.',
    ],
    'max' => [
        'array' => 'O campo :attribute não pode ter mais de :max items.',
        'file' => 'O campo :attribute não pode ter mais de :max kilobytes.',
        'numeric' => 'O campo :attribute não pode ser maior que :max.',
        'string' => 'O campo :attribute não pode ter mais de :max caracteres.',
    ],
    'string' => 'O campo :attribute deve estar no formato de text.',
    'unique' => 'O :attribute já existe.',
    'email' => 'O campo :attribute precisa ser um endereço de e-mail válido.',
    'confirmed' => 'O campo :attribute de confirmação não corresponde.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'Nome',
        'email' => 'E-mail',
        'password' => 'Senha'
    ],

];
