<?php return  [
  'laravel/sail' =>
   [
    'providers' =>
     [
      0 => \Laravel\Sail\SailServiceProvider::class,
    ],
  ],
  'laravel/sanctum' =>
   [
    'providers' =>
     [
      0 => \Laravel\Sanctum\SanctumServiceProvider::class,
    ],
  ],
  'laravel/tinker' =>
   [
    'providers' =>
     [
      0 => \Laravel\Tinker\TinkerServiceProvider::class,
    ],
  ],
  'laravel/ui' =>
   [
    'providers' =>
     [
      0 => \Laravel\Ui\UiServiceProvider::class,
    ],
  ],
  'mcamara/laravel-localization' =>
   [
    'aliases' =>
     [
      'LaravelLocalization' => \Mcamara\LaravelLocalization\Facades\LaravelLocalization::class,
    ],
    'providers' =>
     [
      0 => \Mcamara\LaravelLocalization\LaravelLocalizationServiceProvider::class,
    ],
  ],
  'nesbot/carbon' =>
   [
    'providers' =>
     [
      0 => \Carbon\Laravel\ServiceProvider::class,
    ],
  ],
  'nunomaduro/collision' =>
   [
    'providers' =>
     [
      0 => \NunoMaduro\Collision\Adapters\Laravel\CollisionServiceProvider::class,
    ],
  ],
  'nunomaduro/termwind' =>
   [
    'providers' =>
     [
      0 => \Termwind\Laravel\TermwindServiceProvider::class,
    ],
  ],
  'php-flasher/flasher-laravel' =>
   [
    'aliases' =>
     [
      'Flasher' => \Flasher\Laravel\Facade\Flasher::class,
    ],
    'providers' =>
    array (
      0 => 'Flasher\\Laravel\\FlasherServiceProvider',
    ),
  ),
  
  'rahulalam31/laravel-abuse-ip' =>
  array (
    'providers' =>
    array (
      0 => 'RahulAlam31\\LaravelAbuseIp\\AbuseIPServiceProvider',
    ),
  ),
  'spatie/laravel-ignition' =>
   [
    'aliases' =>
    array (
      'Flare' => 'Spatie\\LaravelIgnition\\Facades\\Flare',
    ),
  ),
  'spatie/laravel-permission' =>
  array (
    'providers' =>
    array (
      0 => 'Spatie\\Permission\\PermissionServiceProvider',
    ),
  ),
  'spatie/laravel-translatable' =>
   [
    'providers' =>
     [
      0 => \Spatie\Translatable\TranslatableServiceProvider::class,
    ],
  ],
  'yoeunes/toastr' =>
   [
    'aliases' =>
     [
      'Toastr' => \Yoeunes\Toastr\Facades\Toastr::class,
    ],
    'providers' =>
     [
      0 => \Yoeunes\Toastr\ToastrServiceProvider::class,
    ],
  ],
];