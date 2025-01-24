<?php return  [
  'abuseip' => 
   [
    'source' => 
     [
      0 => 'https://raw.githubusercontent.com/borestad/blocklist-abuseipdb/main/abuseipdb-s100-14d.ipv4',
    ],
    'whitelist' => 
     [
      0 => '127.0.0.1',
    ],
    'storage' => 
     [
      'path' => '/media/karim/drive1/laravel projects/Ecommerce/storage/framework/cache/abuseip.json',
      'compress' => true,
    ],
  ],
  'app' => 
   [
    'name' => 'karimEcommerce',
    'env' => 'production',
    'debug' => true,
    'url' => 'http://karimashraf.byethost4.com',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:s00ccHkgaYC5whdZHHbbUk9L/w7DAJBEtWC/80JgVxk=',
    'cipher' => 'AES-256-CBC',
    'maintenance' => 
     [
      'driver' => 'file',
    ],
    'providers' => 
     [
      0 => \Illuminate\Auth\AuthServiceProvider::class,
      1 => \Illuminate\Broadcasting\BroadcastServiceProvider::class,
      2 => \Illuminate\Bus\BusServiceProvider::class,
      3 => \Illuminate\Cache\CacheServiceProvider::class,
      4 => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
      5 => \Illuminate\Cookie\CookieServiceProvider::class,
      6 => \Illuminate\Database\DatabaseServiceProvider::class,
      7 => \Illuminate\Encryption\EncryptionServiceProvider::class,
      8 => \Illuminate\Filesystem\FilesystemServiceProvider::class,
      9 => \Illuminate\Foundation\Providers\FoundationServiceProvider::class,
      10 => \Illuminate\Hashing\HashServiceProvider::class,
      11 => \Illuminate\Mail\MailServiceProvider::class,
      12 => \Illuminate\Notifications\NotificationServiceProvider::class,
      13 => \Illuminate\Pagination\PaginationServiceProvider::class,
      14 => \Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
      15 => \Illuminate\Pipeline\PipelineServiceProvider::class,
      16 => \Illuminate\Queue\QueueServiceProvider::class,
      17 => \Illuminate\Redis\RedisServiceProvider::class,
      18 => \Illuminate\Session\SessionServiceProvider::class,
      19 => \Illuminate\Translation\TranslationServiceProvider::class,
      20 => \Illuminate\Validation\ValidationServiceProvider::class,
      21 => \Illuminate\View\ViewServiceProvider::class,
      22 => \App\Providers\AppServiceProvider::class,
      23 => \App\Providers\AuthServiceProvider::class,
      24 => \App\Providers\EventServiceProvider::class,
      25 => \App\Providers\RouteServiceProvider::class,
    ],
    'aliases' => 
     [
      'App' => \Illuminate\Support\Facades\App::class,
      'Arr' => \Illuminate\Support\Arr::class,
      'Artisan' => \Illuminate\Support\Facades\Artisan::class,
      'Auth' => \Illuminate\Support\Facades\Auth::class,
      'Blade' => \Illuminate\Support\Facades\Blade::class,
      'Broadcast' => \Illuminate\Support\Facades\Broadcast::class,
      'Bus' => \Illuminate\Support\Facades\Bus::class,
      'Cache' => \Illuminate\Support\Facades\Cache::class,
      'Config' => \Illuminate\Support\Facades\Config::class,
      'Cookie' => \Illuminate\Support\Facades\Cookie::class,
      'Crypt' => \Illuminate\Support\Facades\Crypt::class,
      'Date' => \Illuminate\Support\Facades\Date::class,
      'DB' => \Illuminate\Support\Facades\DB::class,
      'Eloquent' => \Illuminate\Database\Eloquent\Model::class,
      'Event' => \Illuminate\Support\Facades\Event::class,
      'File' => \Illuminate\Support\Facades\File::class,
      'Gate' => \Illuminate\Support\Facades\Gate::class,
      'Hash' => \Illuminate\Support\Facades\Hash::class,
      'Http' => \Illuminate\Support\Facades\Http::class,
      'Js' => \Illuminate\Support\Js::class,
      'Lang' => \Illuminate\Support\Facades\Lang::class,
      'Log' => \Illuminate\Support\Facades\Log::class,
      'Mail' => \Illuminate\Support\Facades\Mail::class,
      'Notification' => \Illuminate\Support\Facades\Notification::class,
      'Number' => \Illuminate\Support\Number::class,
      'Password' => \Illuminate\Support\Facades\Password::class,
      'Process' => \Illuminate\Support\Facades\Process::class,
      'Queue' => \Illuminate\Support\Facades\Queue::class,
      'RateLimiter' => \Illuminate\Support\Facades\RateLimiter::class,
      'Redirect' => \Illuminate\Support\Facades\Redirect::class,
      'Request' => \Illuminate\Support\Facades\Request::class,
      'Response' => \Illuminate\Support\Facades\Response::class,
      'Route' => \Illuminate\Support\Facades\Route::class,
      'Schema' => \Illuminate\Support\Facades\Schema::class,
      'Session' => \Illuminate\Support\Facades\Session::class,
      'Storage' => \Illuminate\Support\Facades\Storage::class,
      'Str' => \Illuminate\Support\Str::class,
      'URL' => \Illuminate\Support\Facades\URL::class,
      'Validator' => \Illuminate\Support\Facades\Validator::class,
      'View' => \Illuminate\Support\Facades\View::class,
      'Vite' => \Illuminate\Support\Facades\Vite::class,
    ],
  ],
  'auth' => 
   [
    'defaults' => 
     [
      'guard' => 'web',
      'passwords' => 'users',
    ],
    'guards' => 
     [
      'web' => 
       [
        'driver' => 'session',
        'provider' => 'users',
      ],
      'sanctum' => 
       [
        'driver' => 'sanctum',
        'provider' => NULL,
      ],
    ],
    'providers' => 
     [
      'users' => 
       [
        'driver' => 'eloquent',
        'model' => \App\Models\User::class,
      ],
    ],
    'passwords' => 
     [
      'users' => 
       [
        'provider' => 'users',
        'table' => 'password_reset_tokens',
        'expire' => 60,
        'throttle' => 60,
      ],
    ],
    'password_timeout' => 10800,
  ],
  'broadcasting' => 
   [
    'default' => 'log',
    'connections' => 
     [
      'pusher' => 
       [
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
         [
          'cluster' => 'mt1',
          'host' => 'api-mt1.pusher.com',
          'port' => '443',
          'scheme' => 'https',
          'encrypted' => true,
          'useTLS' => true,
        ],
        'client_options' => 
         [
        ],
      ],
      'ably' => 
       [
        'driver' => 'ably',
        'key' => NULL,
      ],
      'redis' => 
       [
        'driver' => 'redis',
        'connection' => 'default',
      ],
      'log' => 
       [
        'driver' => 'log',
      ],
      'null' => 
       [
        'driver' => 'null',
      ],
    ],
  ],
  'cache' => 
   [
    'default' => 'file',
    'stores' => 
     [
      'apc' => 
       [
        'driver' => 'apc',
      ],
      'array' => 
       [
        'driver' => 'array',
        'serialize' => false,
      ],
      'database' => 
       [
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ],
      'file' => 
       [
        'driver' => 'file',
        'path' => '/media/karim/drive1/laravel projects/Ecommerce/storage/framework/cache/data',
        'lock_path' => '/media/karim/drive1/laravel projects/Ecommerce/storage/framework/cache/data',
      ],
      'memcached' => 
       [
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
         [
          0 => NULL,
          1 => NULL,
        ],
        'options' => 
         [
        ],
        'servers' => 
         [
          0 => 
           [
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ],
        ],
      ],
      'redis' => 
       [
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ],
      'dynamodb' => 
       [
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ],
      'octane' => 
       [
        'driver' => 'octane',
      ],
    ],
    'prefix' => 'karimecommerce_cache_',
  ],
  'cors' => 
   [
    'paths' => 
     [
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ],
    'allowed_methods' => 
     [
      0 => '*',
    ],
    'allowed_origins' => 
     [
      0 => '*',
    ],
    'allowed_origins_patterns' => 
     [
    ],
    'allowed_headers' => 
     [
      0 => '*',
    ],
    'exposed_headers' => 
     [
    ],
    'max_age' => 0,
    'supports_credentials' => false,
  ],
  'database' => 
   [
    'default' => 'mysql',
    'connections' => 
     [
      'sqlite' => 
       [
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'b4_38170579_Ecommerce',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ],
      'mysql' => 
       [
        'driver' => 'mysql',
        'url' => NULL,
        'host' => 'sql106.byethost4.com',
        'port' => '3306',
        'database' => 'b4_38170579_Ecommerce',
        'username' => 'b4_38170579',
        'password' => 't5!Fe',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
         [
        ],
      ],
      'pgsql' => 
       [
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => 'sql106.byethost4.com',
        'port' => '3306',
        'database' => 'b4_38170579_Ecommerce',
        'username' => 'b4_38170579',
        'password' => 't5!Fe',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'search_path' => 'public',
        'sslmode' => 'prefer',
      ],
      'sqlsrv' => 
       [
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => 'sql106.byethost4.com',
        'port' => '3306',
        'database' => 'b4_38170579_Ecommerce',
        'username' => 'b4_38170579',
        'password' => 't5!Fe',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ],
    ],
    'migrations' => 'migrations',
    'redis' => 
     [
      'client' => 'phpredis',
      'options' => 
       [
        'cluster' => 'redis',
        'prefix' => 'karimecommerce_database_',
      ],
      'default' => 
       [
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ],
      'cache' => 
       [
        'url' => NULL,
        'host' => '127.0.0.1',
        'username' => NULL,
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ],
    ],
  ],
  'filesystems' => 
   [
    'default' => 'local',
    'disks' => 
     [
      'local' => 
       [
        'driver' => 'local',
        'root' => '/media/karim/drive1/laravel projects/Ecommerce/storage/app',
        'throw' => false,
      ],
      'public' => 
       [
        'driver' => 'local',
        'root' => '/media/karim/drive1/laravel projects/Ecommerce/storage/app/public',
        'url' => 'http://karimashraf.byethost4.com/storage',
        'visibility' => 'public',
        'throw' => false,
      ],
      's3' => 
       [
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => false,
      ],
    ],
    'links' => 
     [
      '/media/karim/drive1/laravel projects/Ecommerce/public/storage' => '/media/karim/drive1/laravel projects/Ecommerce/storage/app/public',
    ],
  ],
  'flasher_toastr' => 
   [
    'scripts' => 
     [
      'cdn' => 
       [
        0 => 'https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js',
        1 => 'https://cdn.jsdelivr.net/npm/@flasher/flasher-toastr@1.2.4/dist/flasher-toastr.min.js',
      ],
      'local' => 
       [
        0 => '/vendor/flasher/jquery.min.js',
        1 => '/vendor/flasher/flasher-toastr.min.js',
      ],
    ],
    'styles' => 
     [
    ],
    'options' => 
     [
    ],
  ],
  'hashing' => 
   [
    'driver' => 'bcrypt',
    'bcrypt' => 
     [
      'rounds' => 12,
      'verify' => true,
    ],
    'argon' => 
     [
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
      'verify' => true,
    ],
  ],
  'laravellocalization' => 
   [
    'supportedLocales' => 
     [
      'en' => 
       [
        'name' => 'English',
        'script' => 'Latn',
        'native' => 'English',
        'regional' => 'en_GB',
      ],
      'ar' => 
       [
        'name' => 'Arabic',
        'script' => 'Arab',
        'native' => 'العربية',
        'regional' => 'ar_AE',
      ],
    ],
    'useAcceptLanguageHeader' => true,
    'hideDefaultLocaleInURL' => false,
    'localesOrder' => 
     [
    ],
    'localesMapping' => 
     [
    ],
    'utf8suffix' => '.UTF-8',
    'urlsIgnored' => 
     [
      0 => '/skipped',
    ],
    'httpMethodsIgnored' => 
     [
      0 => 'POST',
      1 => 'PUT',
      2 => 'PATCH',
      3 => 'DELETE',
    ],
  ],
  'logging' => 
   [
    'default' => 'single',
    'deprecations' => 
     [
      'channel' => NULL,
      'trace' => false,
    ],
    'channels' => 
     [
      'stack' => 
       [
        'driver' => 'stack',
        'channels' => 
         [
          0 => 'single',
        ],
        'ignore_exceptions' => false,
      ],
      'single' => 
       [
        'driver' => 'single',
        'path' => '/media/karim/drive1/laravel projects/Ecommerce/storage/logs/laravel.log',
        'level' => 'error',
        'replace_placeholders' => true,
      ],
      'daily' => 
       [
        'driver' => 'daily',
        'path' => '/media/karim/drive1/laravel projects/Ecommerce/storage/logs/laravel.log',
        'level' => 'error',
        'days' => 14,
        'replace_placeholders' => true,
      ],
      'slack' => 
       [
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'error',
        'replace_placeholders' => true,
      ],
      'papertrail' => 
       [
        'driver' => 'monolog',
        'level' => 'error',
        'handler' => \Monolog\Handler\SyslogUdpHandler::class,
        'handler_with' => 
         [
          'host' => NULL,
          'port' => NULL,
          'connectionString' => 'tls://:',
        ],
        'processors' => 
         [
          0 => \Monolog\Processor\PsrLogMessageProcessor::class,
        ],
      ],
      'stderr' => 
       [
        'driver' => 'monolog',
        'level' => 'error',
        'handler' => \Monolog\Handler\StreamHandler::class,
        'formatter' => NULL,
        'with' => 
         [
          'stream' => 'php://stderr',
        ],
        'processors' => 
         [
          0 => \Monolog\Processor\PsrLogMessageProcessor::class,
        ],
      ],
      'syslog' => 
       [
        'driver' => 'syslog',
        'level' => 'error',
        'facility' => 8,
        'replace_placeholders' => true,
      ],
      'errorlog' => 
       [
        'driver' => 'errorlog',
        'level' => 'error',
        'replace_placeholders' => true,
      ],
      'null' => 
       [
        'driver' => 'monolog',
        'handler' => \Monolog\Handler\NullHandler::class,
      ],
      'emergency' => 
       [
        'path' => '/media/karim/drive1/laravel projects/Ecommerce/storage/logs/laravel.log',
      ],
    ],
  ],
  'mail' => 
   [
    'default' => 'smtp',
    'mailers' => 
     [
      'smtp' => 
       [
        'transport' => 'smtp',
        'url' => NULL,
        'host' => 'mailpit',
        'port' => '1025',
        'encryption' => NULL,
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
        'local_domain' => NULL,
      ],
      'ses' => 
       [
        'transport' => 'ses',
      ],
      'mailgun' => 
       [
        'transport' => 'mailgun',
      ],
      'postmark' => 
       [
        'transport' => 'postmark',
      ],
      'sendmail' => 
       [
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs -i',
      ],
      'log' => 
       [
        'transport' => 'log',
        'channel' => NULL,
      ],
      'array' => 
       [
        'transport' => 'array',
      ],
      'failover' => 
       [
        'transport' => 'failover',
        'mailers' => 
         [
          0 => 'smtp',
          1 => 'log',
        ],
      ],
    ],
    'from' => 
     [
      'address' => 'hello@example.com',
      'name' => 'karimEcommerce',
    ],
    'markdown' => 
     [
      'theme' => 'default',
      'paths' => 
       [
        0 => '/media/karim/drive1/laravel projects/Ecommerce/resources/views/vendor/mail',
      ],
    ],
  ],
  'permission' => 
   [
    'models' => 
     [
      'permission' => \Spatie\Permission\Models\Permission::class,
      'role' => \Spatie\Permission\Models\Role::class,
    ],
    'table_names' => 
     [
      'roles' => 'roles',
      'permissions' => 'permissions',
      'model_has_permissions' => 'model_has_permissions',
      'model_has_roles' => 'model_has_roles',
      'role_has_permissions' => 'role_has_permissions',
    ],
    'column_names' => 
     [
      'role_pivot_key' => NULL,
      'permission_pivot_key' => NULL,
      'model_morph_key' => 'model_id',
      'team_foreign_key' => 'team_id',
    ],
    'register_permission_check_method' => true,
    'register_octane_reset_listener' => false,
    'teams' => false,
    'use_passport_client_credentials' => false,
    'display_permission_in_exception' => false,
    'display_role_in_exception' => false,
    'enable_wildcard_permission' => false,
    'cache' => 
     [
      'expiration_time' => 
      \DateInterval::__set_state([
         'from_string' => true,
         'date_string' => '24 hours',
      ]),
      'key' => 'spatie.permission.cache',
      'store' => 'default',
    ],
  ],
  'queue' => 
   [
    'default' => 'sync',
    'connections' => 
     [
      'sync' => 
       [
        'driver' => 'sync',
      ],
      'database' => 
       [
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ],
      'beanstalkd' => 
       [
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ],
      'sqs' => 
       [
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ],
      'redis' => 
       [
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ],
    ],
    'batching' => 
     [
      'database' => 'mysql',
      'table' => 'job_batches',
    ],
    'failed' => 
     [
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ],
  ],
  'sanctum' => 
   [
    'stateful' => 
     [
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => 'karimashraf.byethost4.com',
    ],
    'guard' => 
     [
      0 => 'web',
    ],
    'expiration' => NULL,
    'token_prefix' => '',
    'middleware' => 
     [
      'authenticate_session' => \Laravel\Sanctum\Http\Middleware\AuthenticateSession::class,
      'encrypt_cookies' => \App\Http\Middleware\EncryptCookies::class,
      'verify_csrf_token' => \App\Http\Middleware\VerifyCsrfToken::class,
    ],
  ],
  'services' => 
   [
    'mailgun' => 
     [
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
      'scheme' => 'https',
    ],
    'postmark' => 
     [
      'token' => NULL,
    ],
    'ses' => 
     [
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ],
  ],
  'session' => 
   [
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => true,
    'files' => '/media/karim/drive1/laravel projects/Ecommerce/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
     [
      0 => 2,
      1 => 100,
    ],
    'cookie' => 'karimecommerce_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => true,
    'http_only' => true,
    'same_site' => 'lax',
  ],
  'toastr' => 
   [
    'options' => 
     [
    ],
  ],
  'view' => 
   [
    'paths' => 
     [
      0 => '/media/karim/drive1/laravel projects/Ecommerce/resources/views',
    ],
    'compiled' => '/media/karim/drive1/laravel projects/Ecommerce/storage/framework/views',
  ],
  'flasher' => 
   [
    'default' => 'flasher',
    'root_script' => 
     [
      'cdn' => 'https://cdn.jsdelivr.net/npm/@flasher/flasher@1.3.2/dist/flasher.min.js',
      'local' => '/vendor/flasher/flasher.min.js',
    ],
    'scripts' => 
     [
    ],
    'styles' => 
     [
      'cdn' => 
       [
        0 => 'https://cdn.jsdelivr.net/npm/@flasher/flasher@1.3.2/dist/flasher.min.css',
      ],
      'local' => 
       [
        0 => '/vendor/flasher/flasher.min.css',
      ],
    ],
    'options' => 
     [
    ],
    'use_cdn' => true,
    'auto_translate' => true,
    'auto_render' => true,
    'flash_bag' => 
     [
      'enabled' => true,
      'mapping' => 
       [
        'success' => 
         [
          0 => 'success',
        ],
        'error' => 
         [
          0 => 'error',
          1 => 'danger',
        ],
        'warning' => 
         [
          0 => 'warning',
          1 => 'alarm',
        ],
        'info' => 
         [
          0 => 'info',
          1 => 'notice',
          2 => 'alert',
        ],
      ],
    ],
    'filter_criteria' => 
     [
    ],
    'presets' => 
     [
      'created' => 
       [
        'type' => 'success',
        'message' => 'The resource was created',
      ],
      'updated' => 
       [
        'type' => 'success',
        'message' => 'The resource was updated',
      ],
      'saved' => 
       [
        'type' => 'success',
        'message' => 'The resource was saved',
      ],
      'deleted' => 
       [
        'type' => 'success',
        'message' => 'The resource was deleted',
      ],
    ],
  ],
  'flare' => 
   [
    'key' => NULL,
    'flare_middleware' => 
     [
      0 => \Spatie\FlareClient\FlareMiddleware\RemoveRequestIp::class,
      1 => \Spatie\FlareClient\FlareMiddleware\AddGitInformation::class,
      2 => \Spatie\LaravelIgnition\FlareMiddleware\AddNotifierName::class,
      3 => \Spatie\LaravelIgnition\FlareMiddleware\AddEnvironmentInformation::class,
      4 => \Spatie\LaravelIgnition\FlareMiddleware\AddExceptionInformation::class,
      5 => \Spatie\LaravelIgnition\FlareMiddleware\AddDumps::class,
      \Spatie\LaravelIgnition\FlareMiddleware\AddLogs::class => 
       [
        'maximum_number_of_collected_logs' => 200,
      ],
      \Spatie\LaravelIgnition\FlareMiddleware\AddQueries::class => 
       [
        'maximum_number_of_collected_queries' => 200,
        'report_query_bindings' => true,
      ],
      \Spatie\LaravelIgnition\FlareMiddleware\AddJobs::class => 
       [
        'max_chained_job_reporting_depth' => 5,
      ],
      6 => \Spatie\LaravelIgnition\FlareMiddleware\AddContext::class,
      7 => \Spatie\LaravelIgnition\FlareMiddleware\AddExceptionHandledStatus::class,
      \Spatie\FlareClient\FlareMiddleware\CensorRequestBodyFields::class => 
       [
        'censor_fields' => 
         [
          0 => 'password',
          1 => 'password_confirmation',
        ],
      ],
      \Spatie\FlareClient\FlareMiddleware\CensorRequestHeaders::class => 
       [
        'headers' => 
         [
          0 => 'API-KEY',
          1 => 'Authorization',
          2 => 'Cookie',
          3 => 'Set-Cookie',
          4 => 'X-CSRF-TOKEN',
          5 => 'X-XSRF-TOKEN',
        ],
      ],
    ],
    'send_logs_as_events' => true,
  ],
  'ignition' => 
   [
    'editor' => 'phpstorm',
    'theme' => 'auto',
    'enable_share_button' => true,
    'register_commands' => false,
    'solution_providers' => 
     [
      0 => \Spatie\Ignition\Solutions\SolutionProviders\BadMethodCallSolutionProvider::class,
      1 => \Spatie\Ignition\Solutions\SolutionProviders\MergeConflictSolutionProvider::class,
      2 => \Spatie\Ignition\Solutions\SolutionProviders\UndefinedPropertySolutionProvider::class,
      3 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\IncorrectValetDbCredentialsSolutionProvider::class,
      4 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\MissingAppKeySolutionProvider::class,
      5 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\DefaultDbNameSolutionProvider::class,
      6 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\TableNotFoundSolutionProvider::class,
      7 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\MissingImportSolutionProvider::class,
      8 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\InvalidRouteActionSolutionProvider::class,
      9 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\ViewNotFoundSolutionProvider::class,
      10 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\RunningLaravelDuskInProductionProvider::class,
      11 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\MissingColumnSolutionProvider::class,
      12 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\UnknownValidationSolutionProvider::class,
      13 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\MissingMixManifestSolutionProvider::class,
      14 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\MissingViteManifestSolutionProvider::class,
      15 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\MissingLivewireComponentSolutionProvider::class,
      16 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\UndefinedViewVariableSolutionProvider::class,
      17 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\GenericLaravelExceptionSolutionProvider::class,
      18 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\OpenAiSolutionProvider::class,
      19 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\SailNetworkSolutionProvider::class,
      20 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\UnknownMysql8CollationSolutionProvider::class,
      21 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\UnknownMariadbCollationSolutionProvider::class,
    ],
    'ignored_solution_providers' => 
     [
    ],
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '/media/karim/drive1/laravel projects/Ecommerce',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
    'settings_file_path' => '',
    'recorders' => 
     [
      0 => \Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder::class,
      1 => \Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder::class,
      2 => \Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder::class,
      3 => \Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder::class,
    ],
    'open_ai_key' => NULL,
    'with_stack_frame_arguments' => true,
    'argument_reducers' => 
     [
      0 => \Spatie\Backtrace\Arguments\Reducers\BaseTypeArgumentReducer::class,
      1 => \Spatie\Backtrace\Arguments\Reducers\ArrayArgumentReducer::class,
      2 => \Spatie\Backtrace\Arguments\Reducers\StdClassArgumentReducer::class,
      3 => \Spatie\Backtrace\Arguments\Reducers\EnumArgumentReducer::class,
      4 => \Spatie\Backtrace\Arguments\Reducers\ClosureArgumentReducer::class,
      5 => \Spatie\Backtrace\Arguments\Reducers\DateTimeArgumentReducer::class,
      6 => \Spatie\Backtrace\Arguments\Reducers\DateTimeZoneArgumentReducer::class,
      7 => \Spatie\Backtrace\Arguments\Reducers\SymphonyRequestArgumentReducer::class,
      8 => \Spatie\LaravelIgnition\ArgumentReducers\ModelArgumentReducer::class,
      9 => \Spatie\LaravelIgnition\ArgumentReducers\CollectionArgumentReducer::class,
      10 => \Spatie\Backtrace\Arguments\Reducers\StringableArgumentReducer::class,
    ],
  ],
  'tinker' => 
   [
    'commands' => 
     [
    ],
    'alias' => 
     [
    ],
    'dont_alias' => 
     [
      0 => 'App\\Nova',
    ],
  ],
];
