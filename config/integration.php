<?php

return [

    'models' => [
        'category' => Riari\Forum\Models\Category::class,
        'thread'   => Riari\Forum\Models\Thread::class,
        'post'     => Riari\Forum\Models\Post::class
    ],

    /*
    |--------------------------------------------------------------------------
    | Policies
    |--------------------------------------------------------------------------
    |
    | Here we specify the policy classes to use. Change these if you want to
    | extend the provided classes and use your own instead.
    |
    */

    'policies' => [
        'forum' => Riari\Forum\Policies\ForumPolicy::class,
        'model' => [
            'category' => Riari\Forum\Policies\CategoryPolicy::class,
            'thread'   => Riari\Forum\Policies\ThreadPolicy::class,
            'post'     => Riari\Forum\Policies\PostPolicy::class
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Application user model
    |--------------------------------------------------------------------------
    |
    | Your application's user model.
    |
    */

    'user_model' => App\User::class,

    /*
    |--------------------------------------------------------------------------
    | Application user name
    |--------------------------------------------------------------------------
    |
    | The attribute to use for the username.
    |
    */

    'user_name' => 'name',

];
