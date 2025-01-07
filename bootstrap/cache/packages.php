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
     [
      0 => \Flasher\Laravel\FlasherServiceProvider::class,
    ],
  ],
  'spatie/laravel-ignition' => 
   [
    'aliases' => 
     [
      'Flare' => \Spatie\LaravelIgnition\Facades\Flare::class,
    ],
    'providers' => 
     [
      0 => \Spatie\LaravelIgnition\IgnitionServiceProvider::class,
    ],
  ],
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