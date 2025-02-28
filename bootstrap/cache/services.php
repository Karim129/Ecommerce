<?php return  [
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
    22 => \Laravel\Sail\SailServiceProvider::class,
    23 => \Laravel\Sanctum\SanctumServiceProvider::class,
    24 => \Laravel\Tinker\TinkerServiceProvider::class,
    25 => \Laravel\Ui\UiServiceProvider::class,
    26 => \Mcamara\LaravelLocalization\LaravelLocalizationServiceProvider::class,
    27 => \Carbon\Laravel\ServiceProvider::class,
    28 => \NunoMaduro\Collision\Adapters\Laravel\CollisionServiceProvider::class,
    29 => \Termwind\Laravel\TermwindServiceProvider::class,
    30 => \Flasher\Laravel\FlasherServiceProvider::class,
    31 => \RahulAlam31\LaravelAbuseIp\AbuseIPServiceProvider::class,
    32 => \Spatie\LaravelIgnition\IgnitionServiceProvider::class,
    33 => \Spatie\Permission\PermissionServiceProvider::class,
    34 => \Spatie\Translatable\TranslatableServiceProvider::class,
    35 => \Yoeunes\Toastr\ToastrServiceProvider::class,
    36 => \App\Providers\AppServiceProvider::class,
    37 => \App\Providers\AuthServiceProvider::class,
    38 => \App\Providers\EventServiceProvider::class,
    39 => \App\Providers\RouteServiceProvider::class,
  ],
  'eager' => 
   [
    0 => \Illuminate\Auth\AuthServiceProvider::class,
    1 => \Illuminate\Cookie\CookieServiceProvider::class,
    2 => \Illuminate\Database\DatabaseServiceProvider::class,
    3 => \Illuminate\Encryption\EncryptionServiceProvider::class,
    4 => \Illuminate\Filesystem\FilesystemServiceProvider::class,
    5 => \Illuminate\Foundation\Providers\FoundationServiceProvider::class,
    6 => \Illuminate\Notifications\NotificationServiceProvider::class,
    7 => \Illuminate\Pagination\PaginationServiceProvider::class,
    8 => \Illuminate\Session\SessionServiceProvider::class,
    9 => \Illuminate\View\ViewServiceProvider::class,
    10 => \Laravel\Sanctum\SanctumServiceProvider::class,
    11 => \Laravel\Ui\UiServiceProvider::class,
    12 => \Mcamara\LaravelLocalization\LaravelLocalizationServiceProvider::class,
    13 => \Carbon\Laravel\ServiceProvider::class,
    14 => \NunoMaduro\Collision\Adapters\Laravel\CollisionServiceProvider::class,
    15 => \Termwind\Laravel\TermwindServiceProvider::class,
    16 => \Flasher\Laravel\FlasherServiceProvider::class,
    17 => \RahulAlam31\LaravelAbuseIp\AbuseIPServiceProvider::class,
    18 => \Spatie\LaravelIgnition\IgnitionServiceProvider::class,
    19 => \Spatie\Permission\PermissionServiceProvider::class,
    20 => \Spatie\Translatable\TranslatableServiceProvider::class,
    21 => \Yoeunes\Toastr\ToastrServiceProvider::class,
    22 => \App\Providers\AppServiceProvider::class,
    23 => \App\Providers\AuthServiceProvider::class,
    24 => \App\Providers\EventServiceProvider::class,
    25 => \App\Providers\RouteServiceProvider::class,
  ],
  'deferred' => 
   [
    \Illuminate\Broadcasting\BroadcastManager::class => \Illuminate\Broadcasting\BroadcastServiceProvider::class,
    \Illuminate\Contracts\Broadcasting\Factory::class => \Illuminate\Broadcasting\BroadcastServiceProvider::class,
    \Illuminate\Contracts\Broadcasting\Broadcaster::class => \Illuminate\Broadcasting\BroadcastServiceProvider::class,
    \Illuminate\Bus\Dispatcher::class => \Illuminate\Bus\BusServiceProvider::class,
    \Illuminate\Contracts\Bus\Dispatcher::class => \Illuminate\Bus\BusServiceProvider::class,
    \Illuminate\Contracts\Bus\QueueingDispatcher::class => \Illuminate\Bus\BusServiceProvider::class,
    \Illuminate\Bus\BatchRepository::class => \Illuminate\Bus\BusServiceProvider::class,
    \Illuminate\Bus\DatabaseBatchRepository::class => \Illuminate\Bus\BusServiceProvider::class,
    'cache' => \Illuminate\Cache\CacheServiceProvider::class,
    'cache.store' => \Illuminate\Cache\CacheServiceProvider::class,
    'cache.psr6' => \Illuminate\Cache\CacheServiceProvider::class,
    'memcached.connector' => \Illuminate\Cache\CacheServiceProvider::class,
    \Illuminate\Cache\RateLimiter::class => \Illuminate\Cache\CacheServiceProvider::class,
    \Illuminate\Foundation\Console\AboutCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Cache\Console\ClearCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Cache\Console\ForgetCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ClearCompiledCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Auth\Console\ClearResetsCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ConfigCacheCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ConfigClearCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ConfigShowCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\DbCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\MonitorCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\PruneCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\ShowCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\TableCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\WipeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\DownCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\EnvironmentCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\EnvironmentDecryptCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\EnvironmentEncryptCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\EventCacheCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\EventClearCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\EventListCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\KeyGenerateCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\OptimizeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\OptimizeClearCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\PackageDiscoverCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Cache\Console\PruneStaleTagsCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Queue\Console\ClearCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Queue\Console\ListFailedCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Queue\Console\FlushFailedCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Queue\Console\ForgetFailedCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Queue\Console\ListenCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Queue\Console\MonitorCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Queue\Console\PruneBatchesCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Queue\Console\PruneFailedJobsCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Queue\Console\RestartCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Queue\Console\RetryCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Queue\Console\RetryBatchCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Queue\Console\WorkCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\RouteCacheCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\RouteClearCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\RouteListCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\DumpCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\Seeds\SeedCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Console\Scheduling\ScheduleFinishCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Console\Scheduling\ScheduleListCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Console\Scheduling\ScheduleRunCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Console\Scheduling\ScheduleClearCacheCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Console\Scheduling\ScheduleTestCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Console\Scheduling\ScheduleWorkCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Console\Scheduling\ScheduleInterruptCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\ShowModelCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\StorageLinkCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\StorageUnlinkCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\UpCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ViewCacheCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ViewClearCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Cache\Console\CacheTableCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\CastMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ChannelListCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ChannelMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ComponentMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ConsoleMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Routing\Console\ControllerMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\DocsCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\EventGenerateCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\EventMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ExceptionMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\Factories\FactoryMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\JobMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\LangPublishCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ListenerMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\MailMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Routing\Console\MiddlewareMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ModelMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\NotificationMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Notifications\Console\NotificationTableCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ObserverMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\PolicyMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ProviderMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Queue\Console\FailedTableCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Queue\Console\TableCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Queue\Console\BatchesTableCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\RequestMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ResourceMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\RuleMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ScopeMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\Seeds\SeederMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Session\Console\SessionTableCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ServeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\StubPublishCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\TestMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\VendorPublishCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Foundation\Console\ViewMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    'migrator' => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    'migration.repository' => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    'migration.creator' => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\Migrations\MigrateCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\Migrations\FreshCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\Migrations\InstallCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\Migrations\RefreshCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\Migrations\ResetCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\Migrations\RollbackCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\Migrations\StatusCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    'composer' => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    'hash' => \Illuminate\Hashing\HashServiceProvider::class,
    'hash.driver' => \Illuminate\Hashing\HashServiceProvider::class,
    'mail.manager' => \Illuminate\Mail\MailServiceProvider::class,
    'mailer' => \Illuminate\Mail\MailServiceProvider::class,
    \Illuminate\Mail\Markdown::class => \Illuminate\Mail\MailServiceProvider::class,
    'auth.password' => \Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
    'auth.password.broker' => \Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
    \Illuminate\Contracts\Pipeline\Hub::class => \Illuminate\Pipeline\PipelineServiceProvider::class,
    'pipeline' => \Illuminate\Pipeline\PipelineServiceProvider::class,
    'queue' => \Illuminate\Queue\QueueServiceProvider::class,
    'queue.connection' => \Illuminate\Queue\QueueServiceProvider::class,
    'queue.failer' => \Illuminate\Queue\QueueServiceProvider::class,
    'queue.listener' => \Illuminate\Queue\QueueServiceProvider::class,
    'queue.worker' => \Illuminate\Queue\QueueServiceProvider::class,
    'redis' => \Illuminate\Redis\RedisServiceProvider::class,
    'redis.connection' => \Illuminate\Redis\RedisServiceProvider::class,
    'translator' => \Illuminate\Translation\TranslationServiceProvider::class,
    'translation.loader' => \Illuminate\Translation\TranslationServiceProvider::class,
    'validator' => \Illuminate\Validation\ValidationServiceProvider::class,
    'validation.presence' => \Illuminate\Validation\ValidationServiceProvider::class,
    \Illuminate\Contracts\Validation\UncompromisedVerifier::class => \Illuminate\Validation\ValidationServiceProvider::class,
    \Laravel\Sail\Console\InstallCommand::class => \Laravel\Sail\SailServiceProvider::class,
    \Laravel\Sail\Console\PublishCommand::class => \Laravel\Sail\SailServiceProvider::class,
    'command.tinker' => \Laravel\Tinker\TinkerServiceProvider::class,
  ],
  'when' => 
   [
    \Illuminate\Broadcasting\BroadcastServiceProvider::class => 
     [
    ],
    \Illuminate\Bus\BusServiceProvider::class => 
     [
    ],
    \Illuminate\Cache\CacheServiceProvider::class => 
     [
    ],
    \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class => 
     [
    ],
    \Illuminate\Hashing\HashServiceProvider::class => 
     [
    ],
    \Illuminate\Mail\MailServiceProvider::class => 
     [
    ],
    \Illuminate\Auth\Passwords\PasswordResetServiceProvider::class => 
     [
    ],
    \Illuminate\Pipeline\PipelineServiceProvider::class => 
     [
    ],
    \Illuminate\Queue\QueueServiceProvider::class => 
     [
    ],
    \Illuminate\Redis\RedisServiceProvider::class => 
     [
    ],
    \Illuminate\Translation\TranslationServiceProvider::class => 
     [
    ],
    \Illuminate\Validation\ValidationServiceProvider::class => 
     [
    ],
    \Laravel\Sail\SailServiceProvider::class => 
     [
    ],
    \Laravel\Tinker\TinkerServiceProvider::class => 
     [
    ],
  ],
];