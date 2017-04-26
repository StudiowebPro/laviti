Bluecode\Generator\Commands\ScaffoldMakeCommand {#513
  #signature: """
    generator:make:scaffold\n
                                    {tables?} : List table name for generate scaffold.}\n
                                    {--tables= : List table name for generate scaffold.}\n
                                    {--ignore= : List ignore table name.}\n
                                    {--models= : List model name for generate.}\n
                                    {--paginate=10 : Pagination for index.blade.php}
    """
  #description: "Create a full CRUD for given table with initial views."
  +models: []
  #files: null
  +ignoreTables: array:2 [
    0 => "migrations"
    1 => "products"
  ]
  +tables: array:1 [
    0 => "brands"
  ]
  +commandData: null
  +type: "scaffold"
  #laravel: Illuminate\Foundation\Application {#3
    #basePath: "/home/vagrant/Code/laviti/site"
    #hasBeenBootstrapped: true
    #booted: true
    #bootingCallbacks: array:6 [
      0 => Closure {#101
        class: "Arcanedev\Support\ServiceProvider"
        this: Arcanedev\LogViewer\LogViewerServiceProvider {#85
          #package: "log-viewer"
          #vendor: "arcanedev"
          #basePath: ""
          #multiConfigs: false
          #app: Illuminate\Foundation\Application {#3}
          #aliases: array:1 [ …1]
          -aliasLoader: Illuminate\Foundation\AliasLoader {#32 …2}
          #defer: false
        }
        use: { …1}
        file: "/home/vagrant/Code/laviti/site/vendor/arcanedev/support/src/ServiceProvider.php"
        line: "148 to 152"
      }
      1 => Closure {#117
        class: "App\Providers\AccessServiceProvider"
        this: App\Providers\AccessServiceProvider {#115
          #defer: false
          #app: Illuminate\Foundation\Application {#3}
        }
        file: "/home/vagrant/Code/laviti/site/app/Providers/AccessServiceProvider.php"
        line: "59 to 62"
      }
      2 => Closure {#141
        class: "App\Providers\HistoryServiceProvider"
        this: App\Providers\HistoryServiceProvider {#138
          #app: Illuminate\Foundation\Application {#3}
          #defer: false
        }
        file: "/home/vagrant/Code/laviti/site/app/Providers/HistoryServiceProvider.php"
        line: "29 to 32"
      }
      3 => Closure {#163
        class: "Illuminate\Foundation\Application"
        this: Illuminate\Foundation\Application {#3}
        use: { …1}
        file: "/home/vagrant/Code/laviti/site/vendor/laravel/framework/src/Illuminate/Foundation/Application.php"
        line: "686 to 688"
      }
      4 => Closure {#170
        class: "Illuminate\Foundation\Application"
        this: Illuminate\Foundation\Application {#3}
        use: { …1}
        file: "/home/vagrant/Code/laviti/site/vendor/laravel/framework/src/Illuminate/Foundation/Application.php"
        line: "686 to 688"
      }
      5 => Closure {#176
        class: "Illuminate\Foundation\Application"
        this: Illuminate\Foundation\Application {#3}
        use: { …1}
        file: "/home/vagrant/Code/laviti/site/vendor/laravel/framework/src/Illuminate/Foundation/Application.php"
        line: "686 to 688"
      }
    ]
    #bootedCallbacks: array:3 [
      0 => Closure {#24
        class: "Illuminate\Foundation\Console\Kernel"
        this: App\Console\Kernel {#22
          #commands: []
          #app: Illuminate\Foundation\Application {#3}
          #events: Illuminate\Events\Dispatcher {#21
            #container: Illuminate\Foundation\Application {#3}
            #listeners: array:20 [ …20]
            #wildcards: array:1 [ …1]
            #queueResolver: Closure {#23 …5}
          }
          #artisan: Illuminate\Console\Application {#440
            #laravel: Illuminate\Foundation\Application {#3}
            #lastOutput: null
            -commands: array:74 [
              "help" => Symfony\Component\Console\Command\HelpCommand {#456 …16}
              "list" => Symfony\Component\Console\Command\ListCommand {#462 …15}
              "debugbar:clear" => Barryvdh\Debugbar\Console\ClearCommand {#463
                #name: "debugbar:clear"
                #description: "Clear the Debugbar Storage"
                #debugbar: Barryvdh\Debugbar\LaravelDebugbar {#468
                  #app: Illuminate\Foundation\Application {#3}
                  #version: "5.4.19"
                  #booted: false
                  #enabled: null
                  #is_lumen: false
                  #collectors: []
                  #data: null
                  #jsRenderer: null
                  #requestIdGenerator: null
                  #requestId: null
                  #storage: null
                  #httpDriver: Barryvdh\Debugbar\SymfonyHttpDriver {#469 …2}
                  #stackSessionNamespace: "PHPDEBUGBAR_STACK_DATA"
                  #stackAlwaysUseSessionStorage: false
                }
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#470 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442
                  -helpers: array:4 [
                    "formatter" => Symfony\Component\Console\Helper\FormatterHelper {#443 …1}
                    "debug_formatter" => Symfony\Component\Console\Helper\DebugFormatterHelper {#444 …4}
                    "process" => Symfony\Component\Console\Helper\ProcessHelper {#445 …1}
                    "question" => Symfony\Component\Console\Helper\QuestionHelper {#446 …2}
                  ]
                  -command: null
                }
                -name: "debugbar:clear"
                -hidden: false
                -description: "Clear the Debugbar Storage"
              }
              "medialibrary:regenerate" => Spatie\MediaLibrary\Commands\RegenerateCommand {#478 …27}
              "medialibrary:clear" => Spatie\MediaLibrary\Commands\ClearCommand {#471 …25}
              "medialibrary:clean" => Spatie\MediaLibrary\Commands\CleanCommand {#493 …29}
              "generator:publish" => Bluecode\Generator\Commands\PublishCommand {#487 …24}
              "generator:make:migration" => Bluecode\Generator\Commands\MigrationMakeCommand {#501 …29}
              "generator:make:model" => Bluecode\Generator\Commands\ModelMakeCommand {#506 …30}
              "generator:make:scaffold" => Bluecode\Generator\Commands\ScaffoldMakeCommand {#513}
              "generator:make:factory" => Bluecode\Generator\Commands\FactoryMakeCommand {#520 …30}
              "generator:make:resource" => Bluecode\Generator\Commands\ResourceMakeCommand {#526 …24}
              "log-viewer:publish" => Arcanedev\LogViewer\Commands\PublishCommand {#533 …25}
              "log-viewer:stats" => Arcanedev\LogViewer\Commands\StatsCommand {#535 …25}
              "log-viewer:check" => Arcanedev\LogViewer\Commands\CheckCommand {#543 …26}
              "cache:clear" => Illuminate\Cache\Console\ClearCommand {#532
                #name: "cache:clear"
                #description: "Flush the application cache"
                #cache: Illuminate\Cache\CacheManager {#333
                  #app: Illuminate\Foundation\Application {#3}
                  #stores: array:1 [ …1]
                  #customCreators: []
                }
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#488 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "cache:clear"
                -hidden: false
                -description: "Flush the application cache"
              }
              "cache:forget" => Illuminate\Cache\Console\ForgetCommand {#540
                #signature: "cache:forget {key : The key to remove} {store? : The store to remove the key from}"
                #description: "Remove an item from the cache"
                #cache: Illuminate\Cache\CacheManager {#333}
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #name: "cache:forget"
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#549 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "cache:forget"
                -hidden: false
                -description: "Remove an item from the cache"
              }
              "clear-compiled" => Illuminate\Foundation\Console\ClearCompiledCommand {#550
                #name: "clear-compiled"
                #description: "Remove the compiled class file"
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#551 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "clear-compiled"
                -hidden: false
                -description: "Remove the compiled class file"
              }
              "auth:clear-resets" => Illuminate\Auth\Console\ClearResetsCommand {#552
                #signature: "auth:clear-resets {name? : The name of the password broker}"
                #description: "Flush expired password reset tokens"
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #name: "auth:clear-resets"
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#554 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "auth:clear-resets"
                -hidden: false
                -description: "Flush expired password reset tokens"
              }
              "config:cache" => Illuminate\Foundation\Console\ConfigCacheCommand {#555
                #name: "config:cache"
                #description: "Create a cache file for faster configuration loading"
                #files: Illuminate\Filesystem\Filesystem {#132}
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#556 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "config:cache"
                -hidden: false
                -description: "Create a cache file for faster configuration loading"
              }
              "config:clear" => Illuminate\Foundation\Console\ConfigClearCommand {#557
                #name: "config:clear"
                #description: "Remove the configuration cache file"
                #files: Illuminate\Filesystem\Filesystem {#132}
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#558 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "config:clear"
                -hidden: false
                -description: "Remove the configuration cache file"
              }
              "down" => Illuminate\Foundation\Console\DownCommand {#559
                #signature: """
                  down {--message= : The message for the maintenance mode. }\n
                                                   {--retry= : The number of seconds after which the request may be retried.}
                  """
                #description: "Put the application into maintenance mode"
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #name: "down"
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#562 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "down"
                -hidden: false
                -description: "Put the application into maintenance mode"
              }
              "env" => Illuminate\Foundation\Console\EnvironmentCommand {#563
                #name: "env"
                #description: "Display the current framework environment"
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#564 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "env"
                -hidden: false
                -description: "Display the current framework environment"
              }
              "key:generate" => Illuminate\Foundation\Console\KeyGenerateCommand {#565
                #signature: """
                  key:generate\n
                                      {--show : Display the key instead of modifying files}\n
                                      {--force : Force the operation to run when in production}
                  """
                #description: "Set the application key"
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #name: "key:generate"
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#568 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "key:generate"
                -hidden: false
                -description: "Set the application key"
              }
              "migrate" => Illuminate\Database\Console\Migrations\MigrateCommand {#569
                #signature: """
                  migrate {--database= : The database connection to use.}\n
                                  {--force : Force the operation to run when in production.}\n
                                  {--path= : The path of migrations files to be executed.}\n
                                  {--pretend : Dump the SQL queries that would be run.}\n
                                  {--seed : Indicates if the seed task should be re-run.}\n
                                  {--step : Force the migrations to be run so they can be rolled back individually.}
                  """
                #description: "Run the database migrations"
                #migrator: Illuminate\Database\Migrations\Migrator {#571
                  #repository: Illuminate\Database\Migrations\DatabaseMigrationRepository {#570
                    #resolver: Illuminate\Database\DatabaseManager {#155
                      #app: Illuminate\Foundation\Application {#3}
                      #factory: Illuminate\Database\Connectors\ConnectionFactory {#156
                        #container: Illuminate\Foundation\Application {#3}
                      }
                      #connections: array:1 [ …1]
                      #extensions: []
                    }
                    #table: "migrations"
                    #connection: null
                  }
                  #files: Illuminate\Filesystem\Filesystem {#132}
                  #resolver: Illuminate\Database\DatabaseManager {#155}
                  #connection: null
                  #notes: []
                  #paths: []
                }
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #name: "migrate"
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#578 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "migrate"
                -hidden: false
                -description: "Run the database migrations"
              }
              "migrate:install" => Illuminate\Database\Console\Migrations\InstallCommand {#579
                #name: "migrate:install"
                #description: "Create the migration repository"
                #repository: Illuminate\Database\Migrations\DatabaseMigrationRepository {#570}
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#580 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "migrate:install"
                -hidden: false
                -description: "Create the migration repository"
              }
              "migrate:refresh" => Illuminate\Database\Console\Migrations\RefreshCommand {#582
                #name: "migrate:refresh"
                #description: "Reset and re-run all migrations"
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#583 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "migrate:refresh"
                -hidden: false
                -description: "Reset and re-run all migrations"
              }
              "migrate:reset" => Illuminate\Database\Console\Migrations\ResetCommand {#590
                #name: "migrate:reset"
                #description: "Rollback all database migrations"
                #migrator: Illuminate\Database\Migrations\Migrator {#571}
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#591 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "migrate:reset"
                -hidden: false
                -description: "Rollback all database migrations"
              }
              "migrate:rollback" => Illuminate\Database\Console\Migrations\RollbackCommand {#596
                #name: "migrate:rollback"
                #description: "Rollback the last database migration"
                #migrator: Illuminate\Database\Migrations\Migrator {#571}
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#597 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "migrate:rollback"
                -hidden: false
                -description: "Rollback the last database migration"
              }
              "migrate:status" => Illuminate\Database\Console\Migrations\StatusCommand {#603
                #name: "migrate:status"
                #description: "Show the status of each migration"
                #migrator: Illuminate\Database\Migrations\Migrator {#571}
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#604 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "migrate:status"
                -hidden: false
                -description: "Show the status of each migration"
              }
              "optimize" => Illuminate\Foundation\Console\OptimizeCommand {#607
                #name: "optimize"
                #description: "Optimize the framework for better performance"
                #composer: Illuminate\Support\Composer {#608
                  #files: Illuminate\Filesystem\Filesystem {#132}
                  #workingPath: "/home/vagrant/Code/laviti/site"
                }
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#609 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "optimize"
                -hidden: false
                -description: "Optimize the framework for better performance"
              }
              "queue:failed" => Illuminate\Queue\Console\ListFailedCommand {#612
                #name: "queue:failed"
                #description: "List all of the failed queue jobs"
                #headers: array:5 [ …5]
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#613 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "queue:failed"
                -hidden: false
                -description: "List all of the failed queue jobs"
              }
              "queue:flush" => Illuminate\Queue\Console\FlushFailedCommand {#614
                #name: "queue:flush"
                #description: "Flush all of the failed queue jobs"
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#615 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "queue:flush"
                -hidden: false
                -description: "Flush all of the failed queue jobs"
              }
              "queue:forget" => Illuminate\Queue\Console\ForgetFailedCommand {#616
                #name: "queue:forget"
                #description: "Delete a failed queue job"
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#617 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "queue:forget"
                -hidden: false
                -description: "Delete a failed queue job"
              }
              "queue:listen" => Illuminate\Queue\Console\ListenCommand {#619
                #signature: """
                  queue:listen\n
                                              {connection? : The name of connection}\n
                                              {--delay=0 : Amount of time to delay failed jobs}\n
                                              {--force : Force the worker to run even in maintenance mode}\n
                                              {--memory=128 : The memory limit in megabytes}\n
                                              {--queue= : The queue to listen on}\n
                                              {--sleep=3 : Number of seconds to sleep when no job is available}\n
                                              {--timeout=60 : The number of seconds a child process can run}\n
                                              {--tries=0 : Number of times to attempt a job before logging it failed}
                  """
                #description: "Listen to a given queue"
                #listener: Illuminate\Queue\Listener {#620
                  #commandPath: "/home/vagrant/Code/laviti/site"
                  #environment: null
                  #sleep: 3
                  #maxTries: 0
                  #workerCommand: "'/usr/bin/php7.1' 'artisan' queue:work %s --once --queue=%s --delay=%s --memory=%s --sleep=%s --tries=%s"
                  #outputHandler: Closure {#630 …5}
                }
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #name: "queue:listen"
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#629 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "queue:listen"
                -hidden: false
                -description: "Listen to a given queue"
              }
              "queue:restart" => Illuminate\Queue\Console\RestartCommand {#631
                #name: "queue:restart"
                #description: "Restart queue worker daemons after their current job"
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#632 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "queue:restart"
                -hidden: false
                -description: "Restart queue worker daemons after their current job"
              }
              "queue:retry" => Illuminate\Queue\Console\RetryCommand {#633
                #name: "queue:retry"
                #description: "Retry a failed queue job"
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#634 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "queue:retry"
                -hidden: false
                -description: "Retry a failed queue job"
              }
              "queue:work" => Illuminate\Queue\Console\WorkCommand {#636
                #signature: """
                  queue:work\n
                                              {connection? : The name of the queue connection to work}\n
                                              {--queue= : The names of the queues to work}\n
                                              {--daemon : Run the worker in daemon mode (Deprecated)}\n
                                              {--once : Only process the next job on the queue}\n
                                              {--delay=0 : Amount of time to delay failed jobs}\n
                                              {--force : Force the worker to run even in maintenance mode}\n
                                              {--memory=128 : The memory limit in megabytes}\n
                                              {--sleep=3 : Number of seconds to sleep when no job is available}\n
                                              {--timeout=60 : The number of seconds a child process can run}\n
                                              {--tries=0 : Number of times to attempt a job before logging it failed}
                  """
                #description: "Start processing jobs on the queue as a daemon"
                #worker: Illuminate\Queue\Worker {#637
                  #manager: Illuminate\Queue\QueueManager {#638
                    #app: Illuminate\Foundation\Application {#3}
                    #connections: []
                    #connectors: array:6 [ …6]
                  }
                  #events: Illuminate\Events\Dispatcher {#21}
                  #cache: null
                  #exceptions: App\Exceptions\Handler {#648
                    #dontReport: array:6 [ …6]
                    #container: Illuminate\Foundation\Application {#3}
                  }
                  +shouldQuit: false
                  +paused: false
                }
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #name: "queue:work"
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#656 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "queue:work"
                -hidden: false
                -description: "Start processing jobs on the queue as a daemon"
              }
              "route:cache" => Illuminate\Foundation\Console\RouteCacheCommand {#657
                #name: "route:cache"
                #description: "Create a route cache file for faster route registration"
                #files: Illuminate\Filesystem\Filesystem {#132}
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#658 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "route:cache"
                -hidden: false
                -description: "Create a route cache file for faster route registration"
              }
              "route:clear" => Illuminate\Foundation\Console\RouteClearCommand {#659
                #name: "route:clear"
                #description: "Remove the route cache file"
                #files: Illuminate\Filesystem\Filesystem {#132}
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#660 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "route:clear"
                -hidden: false
                -description: "Remove the route cache file"
              }
              "route:list" => Illuminate\Foundation\Console\RouteListCommand {#661
                #name: "route:list"
                #description: "List all registered routes"
                #router: Illuminate\Routing\Router {#180
                  #events: Illuminate\Events\Dispatcher {#21}
                  #container: Illuminate\Foundation\Application {#3}
                  #routes: Illuminate\Routing\RouteCollection {#181
                    #routes: array:6 [ …6]
                    #allRoutes: array:75 [ …75]
                    #nameList: array:68 [ …68]
                    #actionList: array:74 [ …74]
                  }
                  #current: null
                  #currentRequest: null
                  #middleware: []
                  #middlewareGroups: []
                  +middlewarePriority: []
                  #binders: array:3 [ …3]
                  #patterns: []
                  #groupStack: []
                }
                #routes: Illuminate\Routing\RouteCollection {#181}
                #headers: array:6 [ …6]
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#662 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "route:list"
                -hidden: false
                -description: "List all registered routes"
              }
              "db:seed" => Illuminate\Database\Console\Seeds\SeedCommand {#668
                #name: "db:seed"
                #description: "Seed the database with records"
                #resolver: Illuminate\Database\DatabaseManager {#155}
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#669 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "db:seed"
                -hidden: false
                -description: "Seed the database with records"
              }
              "schedule:finish" => Illuminate\Console\Scheduling\ScheduleFinishCommand {#676
                #signature: "schedule:finish {id}"
                #description: "Handle the completion of a scheduled command"
                #hidden: true
                #schedule: Illuminate\Console\Scheduling\Schedule {#39
                  #events: []
                  #mutex: Illuminate\Console\Scheduling\CacheMutex {#342 …1}
                }
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #name: "schedule:finish"
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#678 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "schedule:finish"
                -hidden: true
                -description: "Handle the completion of a scheduled command"
              }
              "schedule:run" => Illuminate\Console\Scheduling\ScheduleRunCommand {#679
                #name: "schedule:run"
                #description: "Run the scheduled commands"
                #schedule: Illuminate\Console\Scheduling\Schedule {#39}
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#680 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "schedule:run"
                -hidden: false
                -description: "Run the scheduled commands"
              }
              "storage:link" => Illuminate\Foundation\Console\StorageLinkCommand {#673
                #signature: "storage:link"
                #description: "Create a symbolic link from "public/storage" to "storage/app/public""
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #name: "storage:link"
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#674 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "storage:link"
                -hidden: false
                -description: "Create a symbolic link from "public/storage" to "storage/app/public""
              }
              "up" => Illuminate\Foundation\Console\UpCommand {#675
                #name: "up"
                #description: "Bring the application out of maintenance mode"
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#681 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "up"
                -hidden: false
                -description: "Bring the application out of maintenance mode"
              }
              "view:clear" => Illuminate\Foundation\Console\ViewClearCommand {#682
                #name: "view:clear"
                #description: "Clear all compiled view files"
                #files: Illuminate\Filesystem\Filesystem {#132}
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#683 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "view:clear"
                -hidden: false
                -description: "Clear all compiled view files"
              }
              "app:name" => Illuminate\Foundation\Console\AppNameCommand {#684
                #name: "app:name"
                #description: "Set the application namespace"
                #composer: Illuminate\Support\Composer {#608}
                #files: Illuminate\Filesystem\Filesystem {#132}
                #currentRoot: null
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#685 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "app:name"
                -hidden: false
                -description: "Set the application namespace"
              }
              "make:auth" => Illuminate\Auth\Console\MakeAuthCommand {#687
                #signature: """
                  make:auth\n
                                      {--views : Only scaffold the authentication views}\n
                                      {--force : Overwrite existing views by default}
                  """
                #description: "Scaffold basic login and registration views and routes"
                #views: array:6 [ …6]
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #name: "make:auth"
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#690 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "make:auth"
                -hidden: false
                -description: "Scaffold basic login and registration views and routes"
              }
              "cache:table" => Illuminate\Cache\Console\CacheTableCommand {#691
                #name: "cache:table"
                #description: "Create a migration for the cache database table"
                #files: Illuminate\Filesystem\Filesystem {#132}
                #composer: Illuminate\Support\Composer {#608}
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#692 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "cache:table"
                -hidden: false
                -description: "Create a migration for the cache database table"
              }
              "make:command" => Illuminate\Foundation\Console\ConsoleMakeCommand {#693
                #name: "make:command"
                #description: "Create a new Artisan command"
                #type: "Console command"
                #files: Illuminate\Filesystem\Filesystem {#132}
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#694 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "make:command"
                -hidden: false
                -description: "Create a new Artisan command"
              }
              "make:controller" => Illuminate\Routing\Console\ControllerMakeCommand {#697
                #name: "make:controller"
                #description: "Create a new controller class"
                #type: "Controller"
                #files: Illuminate\Filesystem\Filesystem {#132}
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                #output: null
                #signature: null
                #hidden: false
                #verbosity: 32
                #verbosityMap: array:5 [ …5]
                -application: Illuminate\Console\Application {#440}
                -processTitle: null
                -aliases: []
                -definition: Symfony\Component\Console\Input\InputDefinition {#698 …6}
                -help: null
                -ignoreValidationErrors: false
                -applicationDefinitionMerged: false
                -applicationDefinitionMergedWithArgs: false
                -code: null
                -synopsis: []
                -usages: []
                -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
                -name: "make:controller"
                -hidden: false
                -description: "Create a new controller class"
              }
              "event:generate" => Illuminate\Foundation\Console\EventGenerateCommand {#703
                #name: "event:generate"
                #description: "Generate the missing events and listeners based on registration"
                #laravel: Illuminate\Foundation\Application {#3}
                #input: null
                 …20
              }
              "make:event" => Illuminate\Foundation\Console\EventMakeCommand {#705 …26}
              "make:job" => Illuminate\Foundation\Console\JobMakeCommand {#708 …26}
              "make:listener" => Illuminate\Foundation\Console\ListenerMakeCommand {#712 …26}
              "make:mail" => Illuminate\Foundation\Console\MailMakeCommand {#717 …26}
              "make:middleware" => Illuminate\Routing\Console\MiddlewareMakeCommand {#721 …26}
              "make:migration" => Illuminate\Database\Console\Migrations\MigrateMakeCommand {#725 …26}
              "make:model" => Illuminate\Foundation\Console\ModelMakeCommand {#731 …26}
              "make:notification" => Illuminate\Foundation\Console\NotificationMakeCommand {#737 …26}
              "notifications:table" => Illuminate\Notifications\Console\NotificationTableCommand {#741 …26}
              "make:policy" => Illuminate\Foundation\Console\PolicyMakeCommand {#743 …26}
              "make:provider" => Illuminate\Foundation\Console\ProviderMakeCommand {#747 …26}
              "queue:failed-table" => Illuminate\Queue\Console\FailedTableCommand {#750 …26}
              "queue:table" => Illuminate\Queue\Console\TableCommand {#752 …26}
              "make:request" => Illuminate\Foundation\Console\RequestMakeCommand {#754 …26}
              "make:seeder" => Illuminate\Database\Console\Seeds\SeederMakeCommand {#757 …27}
              "session:table" => Illuminate\Session\Console\SessionTableCommand {#760 …26}
              "serve" => Illuminate\Foundation\Console\ServeCommand {#762 …24}
              "make:test" => Illuminate\Foundation\Console\TestMakeCommand {#766 …26}
              "vendor:publish" => Illuminate\Foundation\Console\VendorPublishCommand {#770 …25}
              "tinker" => Laravel\Tinker\Console\TinkerCommand {#775 …25}
              "inspire" => Illuminate\Foundation\Console\ClosureCommand {#437 …25}
            ]
            -wantHelps: false
            -runningCommand: Bluecode\Generator\Commands\ScaffoldMakeCommand {#513}
            -name: "Laravel Framework"
            -version: "5.4.19"
            -catchExceptions: false
            -autoExit: false
            -definition: Symfony\Component\Console\Input\InputDefinition {#447
              -arguments: array:1 [ …1]
              -requiredCount: 1
              -hasAnArrayArgument: false
              -hasOptional: false
              -options: array:8 [ …8]
              -shortcuts: array:7 [ …7]
            }
            -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
            -dispatcher: null
            -terminal: Symfony\Component\Console\Terminal {#441}
            -defaultCommand: "list"
            -singleCommand: null
          }
          #commandsLoaded: true
          #bootstrappers: array:7 [ …7]
        }
        file: "/home/vagrant/Code/laviti/site/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php"
        line: "86 to 88"
      }
      1 => Closure {#251
        class: "Illuminate\Foundation\Support\Providers\RouteServiceProvider"
        this: App\Providers\RouteServiceProvider {#142
          #namespace: "App\Http\Controllers"
          #app: Illuminate\Foundation\Application {#3}
          #defer: false
        }
        file: "/home/vagrant/Code/laviti/site/vendor/laravel/framework/src/Illuminate/Foundation/Support/Providers/RouteServiceProvider.php"
        line: "32 to 35"
      }
      2 => Closure {#257
        class: "Illuminate\Foundation\Support\Providers\RouteServiceProvider"
        this: Arcanedev\LogViewer\Providers\RouteServiceProvider {#166
          #namespace: null
          #app: Illuminate\Foundation\Application {#3}
          #defer: false
        }
        file: "/home/vagrant/Code/laviti/site/vendor/laravel/framework/src/Illuminate/Foundation/Support/Providers/RouteServiceProvider.php"
        line: "32 to 35"
      }
    ]
    #terminatingCallbacks: []
    #serviceProviders: array:53 [
      0 => Illuminate\Events\EventServiceProvider {#2
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      1 => Illuminate\Log\LogServiceProvider {#5
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      2 => Illuminate\Routing\RoutingServiceProvider {#7
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      3 => Illuminate\Auth\AuthServiceProvider {#47
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      4 => Illuminate\Cookie\CookieServiceProvider {#53
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      5 => Illuminate\Database\DatabaseServiceProvider {#55
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      6 => Illuminate\Encryption\EncryptionServiceProvider {#62
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      7 => Illuminate\Filesystem\FilesystemServiceProvider {#64
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      8 => Illuminate\Foundation\Providers\FormRequestServiceProvider {#70
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      9 => Illuminate\Foundation\Providers\FoundationServiceProvider {#69
        #providers: array:1 [ …1]
        #instances: array:1 [ …1]
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      10 => Illuminate\Notifications\NotificationServiceProvider {#71
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      11 => Illuminate\Pagination\PaginationServiceProvider {#73
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      12 => Illuminate\Session\SessionServiceProvider {#77
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      13 => Illuminate\View\ViewServiceProvider {#81
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      14 => Arcanedev\LogViewer\Providers\UtilitiesServiceProvider {#86
        #app: Illuminate\Foundation\Application {#3}
        #aliases: []
        -aliasLoader: Illuminate\Foundation\AliasLoader {#32 …2}
        #defer: false
      }
      15 => Arcanedev\LogViewer\Providers\CommandsServiceProvider {#102
        #commands: array:3 [ …3]
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
        #aliases: []
        -aliasLoader: Illuminate\Foundation\AliasLoader {#32 …2}
      }
      16 => Arcanedev\LogViewer\LogViewerServiceProvider {#85}
      17 => Arcanedev\NoCaptcha\NoCaptchaServiceProvider {#103
        #package: "no-captcha"
        #vendor: "arcanedev"
        #basePath: ""
        #multiConfigs: false
        #app: Illuminate\Foundation\Application {#3}
        #aliases: []
        -aliasLoader: Illuminate\Foundation\AliasLoader {#32 …2}
        #defer: false
      }
      18 => Creativeorange\Gravatar\GravatarServiceProvider {#106
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      19 => DaveJamesMiller\Breadcrumbs\ServiceProvider {#108
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      20 => HieuLe\Active\ActiveServiceProvider {#110
        #defer: false
        #app: Illuminate\Foundation\Application {#3}
      }
      21 => Yajra\Datatables\DatatablesServiceProvider {#112
        #defer: false
        #app: Illuminate\Foundation\Application {#3}
      }
      22 => App\Providers\AccessServiceProvider {#115}
      23 => Barryvdh\Debugbar\ServiceProvider {#119
        #defer: false
        #app: Illuminate\Foundation\Application {#3}
      }
      24 => App\Providers\AppServiceProvider {#118
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      25 => App\Providers\AuthServiceProvider {#123
        #policies: []
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      26 => App\Providers\BladeServiceProvider {#124
        #defer: false
        #app: Illuminate\Foundation\Application {#3}
      }
      27 => App\Providers\ComposerServiceProvider {#136
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      28 => App\Providers\EventServiceProvider {#137
        #listen: []
        #subscribe: array:3 [ …3]
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      29 => App\Providers\HistoryServiceProvider {#138}
      30 => App\Providers\RouteServiceProvider {#142}
      31 => Spatie\MediaLibrary\MediaLibraryServiceProvider {#143
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      32 => Laracasts\Flash\FlashServiceProvider {#150
        #defer: false
        #app: Illuminate\Foundation\Application {#3}
      }
      33 => Bluecode\Generator\GeneratorServiceProvider {#153
        #app: Illuminate\Foundation\Application {#3}
        #defer: false
      }
      34 => Illuminate\Translation\TranslationServiceProvider {#160
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
      }
      35 => Arcanedev\LogViewer\Providers\RouteServiceProvider {#166}
      36 => Illuminate\Validation\ValidationServiceProvider {#167
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
      }
      37 => App\Providers\MacroServiceProvider {#174
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
      }
      38 => Illuminate\Cache\CacheServiceProvider {#43
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
      }
      39 => Illuminate\Broadcasting\BroadcastServiceProvider {#37
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
      }
      40 => Illuminate\Bus\BusServiceProvider {#339
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
      }
      41 => Illuminate\Foundation\Providers\ArtisanServiceProvider {#345
        #defer: true
        #commands: array:32 [ …32]
        #devCommands: array:25 [ …25]
        #app: Illuminate\Foundation\Application {#3}
      }
      42 => Illuminate\Database\MigrationServiceProvider {#404
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
      }
      43 => Illuminate\Foundation\Providers\ComposerServiceProvider {#408
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
      }
      44 => Illuminate\Foundation\Providers\ConsoleSupportServiceProvider {#344
        #defer: true
        #providers: array:3 [ …3]
        #instances: array:3 [ …3]
        #app: Illuminate\Foundation\Application {#3}
      }
      45 => Illuminate\Hashing\HashServiceProvider {#410
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
      }
      46 => Illuminate\Mail\MailServiceProvider {#412
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
      }
      47 => Illuminate\Pipeline\PipelineServiceProvider {#417
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
      }
      48 => Illuminate\Queue\QueueServiceProvider {#419
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
      }
      49 => Illuminate\Redis\RedisServiceProvider {#425
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
      }
      50 => Illuminate\Auth\Passwords\PasswordResetServiceProvider {#428
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
      }
      51 => Laravel\Socialite\SocialiteServiceProvider {#431
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
      }
      52 => Laravel\Tinker\TinkerServiceProvider {#433
        #defer: true
        #app: Illuminate\Foundation\Application {#3}
      }
    ]
    #loadedProviders: array:53 [
      "Illuminate\Events\EventServiceProvider" => true
      "Illuminate\Log\LogServiceProvider" => true
      "Illuminate\Routing\RoutingServiceProvider" => true
      "Illuminate\Auth\AuthServiceProvider" => true
      "Illuminate\Cookie\CookieServiceProvider" => true
      "Illuminate\Database\DatabaseServiceProvider" => true
      "Illuminate\Encryption\EncryptionServiceProvider" => true
      "Illuminate\Filesystem\FilesystemServiceProvider" => true
      "Illuminate\Foundation\Providers\FormRequestServiceProvider" => true
      "Illuminate\Foundation\Providers\FoundationServiceProvider" => true
      "Illuminate\Notifications\NotificationServiceProvider" => true
      "Illuminate\Pagination\PaginationServiceProvider" => true
      "Illuminate\Session\SessionServiceProvider" => true
      "Illuminate\View\ViewServiceProvider" => true
      "Arcanedev\LogViewer\Providers\UtilitiesServiceProvider" => true
      "Arcanedev\LogViewer\Providers\CommandsServiceProvider" => true
      "Arcanedev\LogViewer\LogViewerServiceProvider" => true
      "Arcanedev\NoCaptcha\NoCaptchaServiceProvider" => true
      "Creativeorange\Gravatar\GravatarServiceProvider" => true
      "DaveJamesMiller\Breadcrumbs\ServiceProvider" => true
      "HieuLe\Active\ActiveServiceProvider" => true
      "Yajra\Datatables\DatatablesServiceProvider" => true
      "App\Providers\AccessServiceProvider" => true
      "Barryvdh\Debugbar\ServiceProvider" => true
      "App\Providers\AppServiceProvider" => true
      "App\Providers\AuthServiceProvider" => true
      "App\Providers\BladeServiceProvider" => true
      "App\Providers\ComposerServiceProvider" => true
      "App\Providers\EventServiceProvider" => true
      "App\Providers\HistoryServiceProvider" => true
      "App\Providers\RouteServiceProvider" => true
      "Spatie\MediaLibrary\MediaLibraryServiceProvider" => true
      "Laracasts\Flash\FlashServiceProvider" => true
      "Bluecode\Generator\GeneratorServiceProvider" => true
      "Illuminate\Translation\TranslationServiceProvider" => true
      "Arcanedev\LogViewer\Providers\RouteServiceProvider" => true
      "Illuminate\Validation\ValidationServiceProvider" => true
      "App\Providers\MacroServiceProvider" => true
      "Illuminate\Cache\CacheServiceProvider" => true
      "Illuminate\Broadcasting\BroadcastServiceProvider" => true
      "Illuminate\Bus\BusServiceProvider" => true
      "Illuminate\Foundation\Providers\ArtisanServiceProvider" => true
      "Illuminate\Database\MigrationServiceProvider" => true
      "Illuminate\Foundation\Providers\ComposerServiceProvider" => true
      "Illuminate\Foundation\Providers\ConsoleSupportServiceProvider" => true
      "Illuminate\Hashing\HashServiceProvider" => true
      "Illuminate\Mail\MailServiceProvider" => true
      "Illuminate\Pipeline\PipelineServiceProvider" => true
      "Illuminate\Queue\QueueServiceProvider" => true
      "Illuminate\Redis\RedisServiceProvider" => true
      "Illuminate\Auth\Passwords\PasswordResetServiceProvider" => true
      "Laravel\Socialite\SocialiteServiceProvider" => true
      "Laravel\Tinker\TinkerServiceProvider" => true
    ]
    #deferredServices: []
    #monologConfigurator: null
    #databasePath: null
    #storagePath: null
    #environmentPath: null
    #environmentFile: ".env"
    #namespace: null
    #resolved: array:135 [
      "events" => true
      "App\Console\Kernel" => true
      "Illuminate\Contracts\Console\Kernel" => true
      "Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables" => true
      "Illuminate\Foundation\Bootstrap\LoadConfiguration" => true
      "Illuminate\Foundation\Bootstrap\HandleExceptions" => true
      "env" => true
      "Illuminate\Foundation\Bootstrap\RegisterFacades" => true
      "Illuminate\Foundation\Bootstrap\SetRequestForConsole" => true
      "Illuminate\Foundation\Bootstrap\RegisterProviders" => true
      "view.engine.resolver" => true
      "files" => true
      "view.finder" => true
      "view" => true
      "blade.compiler" => true
      "Illuminate\Foundation\Bootstrap\BootProviders" => true
      "db.factory" => true
      "db" => true
      "translation.loader" => true
      "translator" => true
      "validation.presence" => true
      "validator" => true
      "router" => true
      "url" => true
      "html" => true
      "session" => true
      "encrypter" => true
      "session.store" => true
      "form" => true
      "DaveJamesMiller\Breadcrumbs\CurrentRoute" => true
      "DaveJamesMiller\Breadcrumbs\Generator" => true
      "DaveJamesMiller\Breadcrumbs\View" => true
      "DaveJamesMiller\Breadcrumbs\Manager" => true
      "breadcrumbs" => true
      "active" => true
      "App\Listeners\Frontend\Auth\UserEventListener" => true
      "App\Listeners\Backend\Access\User\UserEventListener" => true
      "App\Listeners\Backend\Access\Role\RoleEventListener" => true
      "cache" => true
      "cache.store" => true
      "Illuminate\Console\Scheduling\CacheMutex" => true
      "debugbar" => true
      "command.debugbar.clear" => true
      "Spatie\MediaLibrary\MediaRepository" => true
      "Spatie\MediaLibrary\FileManipulator" => true
      "Spatie\MediaLibrary\Commands\RegenerateCommand" => true
      "command.medialibrary:regenerate" => true
      "Spatie\MediaLibrary\Commands\ClearCommand" => true
      "command.medialibrary:clear" => true
      "filesystem" => true
      "Spatie\MediaLibrary\PathGenerator\BasePathGenerator" => true
      "Spatie\MediaLibrary\Commands\CleanCommand" => true
      "command.medialibrary:clean" => true
      "Bluecode\Generator\Commands\PublishCommand" => true
      "Bluecode\Generator\Commands\MigrationMakeCommand" => true
      "Bluecode\Generator\Commands\ModelMakeCommand" => true
      "Bluecode\Generator\Commands\ScaffoldMakeCommand" => true
      "Bluecode\Generator\Commands\FactoryMakeCommand" => true
      "Bluecode\Generator\Commands\ResourceMakeCommand" => true
      "Arcanedev\LogViewer\Contracts\Utilities\Filesystem" => true
      "Arcanedev\LogViewer\Contracts\Utilities\LogLevels" => true
      "Arcanedev\LogViewer\Utilities\Factory" => true
      "Arcanedev\LogViewer\Contracts\Utilities\Factory" => true
      "Arcanedev\LogViewer\LogViewer" => true
      "Arcanedev\LogViewer\Contracts\LogViewer" => true
      "Arcanedev\LogViewer\Commands\PublishCommand" => true
      "Arcanedev\LogViewer\Commands\StatsCommand" => true
      "Arcanedev\LogViewer\Commands\CheckCommand" => true
      "command.cache.clear" => true
      "command.cache.forget" => true
      "command.clear-compiled" => true
      "command.auth.resets.clear" => true
      "command.config.cache" => true
      "command.config.clear" => true
      "command.down" => true
      "command.environment" => true
      "command.key.generate" => true
      "migration.repository" => true
      "migrator" => true
      "command.migrate" => true
      "command.migrate.install" => true
      "command.migrate.refresh" => true
      "command.migrate.reset" => true
      "command.migrate.rollback" => true
      "command.migrate.status" => true
      "composer" => true
      "command.optimize" => true
      "command.queue.failed" => true
      "command.queue.flush" => true
      "command.queue.forget" => true
      "queue.listener" => true
      "command.queue.listen" => true
      "command.queue.restart" => true
      "command.queue.retry" => true
      "queue" => true
      "App\Exceptions\Handler" => true
      "Illuminate\Contracts\Debug\ExceptionHandler" => true
      "queue.worker" => true
      "command.queue.work" => true
      "command.route.cache" => true
      "command.route.clear" => true
      "command.route.list" => true
      "command.seed" => true
      "Illuminate\Console\Scheduling\ScheduleFinishCommand" => true
      "Illuminate\Console\Scheduling\ScheduleRunCommand" => true
      "command.storage.link" => true
      "command.up" => true
      "command.view.clear" => true
      "command.app.name" => true
      "command.auth.make" => true
      "command.cache.table" => true
      "command.console.make" => true
      "command.controller.make" => true
      "command.event.generate" => true
      "command.event.make" => true
      "command.job.make" => true
      "command.listener.make" => true
      "command.mail.make" => true
      "command.middleware.make" => true
      "migration.creator" => true
      "command.migrate.make" => true
      "command.model.make" => true
      "command.notification.make" => true
      "command.notification.table" => true
      "command.policy.make" => true
      "command.provider.make" => true
      "command.queue.failed-table" => true
      "command.queue.table" => true
      "command.request.make" => true
      "command.seeder.make" => true
      "command.session.table" => true
      "command.serve" => true
      "command.test.make" => true
      "command.vendor.publish" => true
      "command.tinker" => true
    ]
    #bindings: array:159 [
      "events" => array:2 [
        "concrete" => Closure {#4 …5}
        "shared" => true
      ]
      "log" => array:2 [
        "concrete" => Closure {#6 …4}
        "shared" => true
      ]
      "router" => array:2 [
        "concrete" => Closure {#8 …5}
        "shared" => true
      ]
      "url" => array:2 [
        "concrete" => Closure {#9 …5}
        "shared" => true
      ]
      "redirect" => array:2 [
        "concrete" => Closure {#10 …5}
        "shared" => true
      ]
      "Psr\Http\Message\ServerRequestInterface" => array:2 [
        "concrete" => Closure {#11 …5}
        "shared" => false
      ]
      "Psr\Http\Message\ResponseInterface" => array:2 [
        "concrete" => Closure {#12 …5}
        "shared" => false
      ]
      "Illuminate\Contracts\Routing\ResponseFactory" => array:2 [
        "concrete" => Closure {#13 …5}
        "shared" => true
      ]
      "Illuminate\Contracts\Http\Kernel" => array:2 [
        "concrete" => Closure {#14 …6}
        "shared" => true
      ]
      "Illuminate\Contracts\Console\Kernel" => array:2 [
        "concrete" => Closure {#15 …6}
        "shared" => true
      ]
      "Illuminate\Contracts\Debug\ExceptionHandler" => array:2 [
        "concrete" => Closure {#16 …6}
        "shared" => true
      ]
      "env" => array:2 [
        "concrete" => Closure {#45 …5}
        "shared" => false
      ]
      "auth" => array:2 [
        "concrete" => Closure {#48 …5}
        "shared" => true
      ]
      "auth.driver" => array:2 [
        "concrete" => Closure {#49 …5}
        "shared" => true
      ]
      "Illuminate\Contracts\Auth\Authenticatable" => array:2 [
        "concrete" => Closure {#50 …5}
        "shared" => false
      ]
      "Illuminate\Contracts\Auth\Access\Gate" => array:2 [
        "concrete" => Closure {#51 …5}
        "shared" => true
      ]
      "cookie" => array:2 [
        "concrete" => Closure {#54 …5}
        "shared" => true
      ]
      "db.factory" => array:2 [
        "concrete" => Closure {#56 …5}
        "shared" => true
      ]
      "db" => array:2 [
        "concrete" => Closure {#57 …5}
        "shared" => true
      ]
      "db.connection" => array:2 [
        "concrete" => Closure {#58 …5}
        "shared" => false
      ]
      "Faker\Generator" => array:2 [
        "concrete" => Closure {#59 …5}
        "shared" => true
      ]
      "Illuminate\Database\Eloquent\Factory" => array:2 [
        "concrete" => Closure {#60 …5}
        "shared" => true
      ]
      "Illuminate\Contracts\Queue\EntityResolver" => array:2 [
        "concrete" => Closure {#61 …4}
        "shared" => true
      ]
      "encrypter" => array:2 [
        "concrete" => Closure {#63 …5}
        "shared" => true
      ]
      "files" => array:2 [
        "concrete" => Closure {#65 …4}
        "shared" => true
      ]
      "filesystem" => array:2 [
        "concrete" => Closure {#66 …4}
        "shared" => true
      ]
      "filesystem.disk" => array:2 [
        "concrete" => Closure {#67 …4}
        "shared" => true
      ]
      "filesystem.cloud" => array:2 [
        "concrete" => Closure {#68 …4}
        "shared" => true
      ]
      "Illuminate\Notifications\ChannelManager" => array:2 [
        "concrete" => Closure {#72 …5}
        "shared" => true
      ]
      "session" => array:2 [
        "concrete" => Closure {#78 …5}
        "shared" => true
      ]
      "session.store" => array:2 [
        "concrete" => Closure {#79 …5}
        "shared" => true
      ]
      "Illuminate\Session\Middleware\StartSession" => array:2 [
        "concrete" => Closure {#80 …6}
        "shared" => true
      ]
      "view" => array:2 [
        "concrete" => Closure {#82 …5}
        "shared" => true
      ]
      "view.finder" => array:2 [
        "concrete" => Closure {#83 …5}
        "shared" => false
      ]
      "view.engine.resolver" => array:2 [
        "concrete" => Closure {#84 …4}
        "shared" => true
      ]
      "Arcanedev\LogViewer\Contracts\Utilities\LogLevels" => array:2 [
        "concrete" => Closure {#87 …5}
        "shared" => true
      ]
      "arcanedev.log-viewer.levels" => array:2 [
        "concrete" => Closure {#88 …6}
        "shared" => true
      ]
      "Arcanedev\LogViewer\Contracts\Utilities\LogStyler" => array:2 [
        "concrete" => Closure {#89 …6}
        "shared" => true
      ]
      "arcanedev.log-viewer.styler" => array:2 [
        "concrete" => Closure {#90 …6}
        "shared" => true
      ]
      "Arcanedev\LogViewer\Contracts\Utilities\LogMenu" => array:2 [
        "concrete" => Closure {#91 …6}
        "shared" => true
      ]
      "arcanedev.log-viewer.menu" => array:2 [
        "concrete" => Closure {#92 …6}
        "shared" => true
      ]
      "Arcanedev\LogViewer\Contracts\Utilities\Filesystem" => array:2 [
        "concrete" => Closure {#93 …5}
        "shared" => true
      ]
      "arcanedev.log-viewer.filesystem" => array:2 [
        "concrete" => Closure {#94 …6}
        "shared" => true
      ]
      "Arcanedev\LogViewer\Contracts\Utilities\Factory" => array:2 [
        "concrete" => Closure {#95 …6}
        "shared" => true
      ]
      "arcanedev.log-viewer.factory" => array:2 [
        "concrete" => Closure {#96 …6}
        "shared" => true
      ]
      "Arcanedev\LogViewer\Contracts\Utilities\LogChecker" => array:2 [
        "concrete" => Closure {#97 …6}
        "shared" => true
      ]
      "arcanedev.log-viewer.checker" => array:2 [
        "concrete" => Closure {#98 …6}
        "shared" => true
      ]
      "Arcanedev\LogViewer\Contracts\LogViewer" => array:2 [
        "concrete" => Closure {#99 …6}
        "shared" => true
      ]
      "arcanedev.log-viewer" => array:2 [
        "concrete" => Closure {#100 …6}
        "shared" => true
      ]
      "Arcanedev\NoCaptcha\Contracts\NoCaptcha" => array:2 [
        "concrete" => Closure {#104 …5}
        "shared" => true
      ]
      "arcanedev.no-captcha" => array:2 [
        "concrete" => Closure {#105 …6}
        "shared" => true
      ]
      "gravatar" => array:2 [
        "concrete" => Closure {#107 …4}
        "shared" => true
      ]
      "breadcrumbs" => array:2 [
        "concrete" => Closure {#109 …5}
        "shared" => true
      ]
      "active" => array:2 [
        "concrete" => Closure {#111 …5}
        "shared" => true
      ]
      "datatables.fractal" => array:2 [
        "concrete" => Closure {#113 …4}
        "shared" => true
      ]
      "datatables" => array:2 [
        "concrete" => Closure {#114 …4}
        "shared" => true
      ]
      "access" => array:2 [
        "concrete" => Closure {#116 …5}
        "shared" => false
      ]
      "debugbar" => array:2 [
        "concrete" => Closure {#120 …5}
        "shared" => true
      ]
      "command.debugbar.clear" => array:2 [
        "concrete" => Closure {#121 …5}
        "shared" => true
      ]
      "blade.compiler" => array:2 [
        "concrete" => Closure {#129 …4}
        "shared" => true
      ]
      "App\Repositories\Backend\History\HistoryContract" => array:2 [
        "concrete" => Closure {#139 …6}
        "shared" => false
      ]
      "history" => array:2 [
        "concrete" => Closure {#140 …6}
        "shared" => false
      ]
      "Spatie\MediaLibrary\MediaRepository" => array:2 [
        "concrete" => Closure {#144 …4}
        "shared" => true
      ]
      "command.medialibrary:regenerate" => array:2 [
        "concrete" => Closure {#145 …6}
        "shared" => false
      ]
      "command.medialibrary:clear" => array:2 [
        "concrete" => Closure {#146 …6}
        "shared" => false
      ]
      "command.medialibrary:clean" => array:2 [
        "concrete" => Closure {#147 …6}
        "shared" => false
      ]
      "Spatie\MediaLibrary\Filesystem\Filesystem" => array:2 [
        "concrete" => Closure {#148 …6}
        "shared" => false
      ]
      "Laracasts\Flash\SessionStore" => array:2 [
        "concrete" => Closure {#151 …6}
        "shared" => false
      ]
      "flash" => array:2 [
        "concrete" => Closure {#152 …4}
        "shared" => true
      ]
      "translation.loader" => array:2 [
        "concrete" => Closure {#161 …5}
        "shared" => true
      ]
      "translator" => array:2 [
        "concrete" => Closure {#162 …5}
        "shared" => true
      ]
      "validation.presence" => array:2 [
        "concrete" => Closure {#168 …5}
        "shared" => true
      ]
      "validator" => array:2 [
        "concrete" => Closure {#169 …5}
        "shared" => true
      ]
      "html" => array:2 [
        "concrete" => Closure {#175 …5}
        "shared" => true
      ]
      "form" => array:2 [
        "concrete" => Closure {#177 …5}
        "shared" => true
      ]
      "cache" => array:2 [
        "concrete" => Closure {#328 …5}
        "shared" => true
      ]
      "cache.store" => array:2 [
        "concrete" => Closure {#252 …5}
        "shared" => true
      ]
      "memcached.connector" => array:2 [
        "concrete" => Closure {#330 …4}
        "shared" => true
      ]
      "Illuminate\Broadcasting\BroadcastManager" => array:2 [
        "concrete" => Closure {#341 …5}
        "shared" => true
      ]
      "Illuminate\Contracts\Broadcasting\Broadcaster" => array:2 [
        "concrete" => Closure {#340 …5}
        "shared" => true
      ]
      "Illuminate\Bus\Dispatcher" => array:2 [
        "concrete" => Closure {#343 …5}
        "shared" => true
      ]
      "command.cache.clear" => array:2 [
        "concrete" => Closure {#346 …5}
        "shared" => true
      ]
      "command.cache.forget" => array:2 [
        "concrete" => Closure {#347 …5}
        "shared" => true
      ]
      "command.clear-compiled" => array:2 [
        "concrete" => Closure {#348 …4}
        "shared" => true
      ]
      "command.auth.resets.clear" => array:2 [
        "concrete" => Closure {#349 …4}
        "shared" => true
      ]
      "command.config.cache" => array:2 [
        "concrete" => Closure {#350 …5}
        "shared" => true
      ]
      "command.config.clear" => array:2 [
        "concrete" => Closure {#351 …5}
        "shared" => true
      ]
      "command.down" => array:2 [
        "concrete" => Closure {#352 …4}
        "shared" => true
      ]
      "command.environment" => array:2 [
        "concrete" => Closure {#353 …4}
        "shared" => true
      ]
      "command.key.generate" => array:2 [
        "concrete" => Closure {#354 …4}
        "shared" => true
      ]
      "command.migrate" => array:2 [
        "concrete" => Closure {#355 …5}
        "shared" => true
      ]
      "command.migrate.install" => array:2 [
        "concrete" => Closure {#356 …5}
        "shared" => true
      ]
      "command.migrate.refresh" => array:2 [
        "concrete" => Closure {#357 …4}
        "shared" => true
      ]
      "command.migrate.reset" => array:2 [
        "concrete" => Closure {#358 …5}
        "shared" => true
      ]
      "command.migrate.rollback" => array:2 [
        "concrete" => Closure {#359 …5}
        "shared" => true
      ]
      "command.migrate.status" => array:2 [
        "concrete" => Closure {#360 …5}
        "shared" => true
      ]
      "command.optimize" => array:2 [
        "concrete" => Closure {#361 …5}
        "shared" => true
      ]
      "command.queue.failed" => array:2 [
        "concrete" => Closure {#362 …4}
        "shared" => true
      ]
      "command.queue.flush" => array:2 [
        "concrete" => Closure {#363 …4}
        "shared" => true
      ]
      "command.queue.forget" => array:2 [
        "concrete" => Closure {#364 …4}
        "shared" => true
      ]
      "command.queue.listen" => array:2 [
        "concrete" => Closure {#365 …5}
        "shared" => true
      ]
      "command.queue.restart" => array:2 [
        "concrete" => Closure {#366 …4}
        "shared" => true
      ]
      "command.queue.retry" => array:2 [
        "concrete" => Closure {#367 …4}
        "shared" => true
      ]
      "command.queue.work" => array:2 [
        "concrete" => Closure {#368 …5}
        "shared" => true
      ]
      "command.route.cache" => array:2 [
        "concrete" => Closure {#369 …5}
        "shared" => true
      ]
      "command.route.clear" => array:2 [
        "concrete" => Closure {#370 …5}
        "shared" => true
      ]
      "command.route.list" => array:2 [
        "concrete" => Closure {#371 …5}
        "shared" => true
      ]
      "command.seed" => array:2 [
        "concrete" => Closure {#372 …5}
        "shared" => true
      ]
      "Illuminate\Console\Scheduling\ScheduleFinishCommand" => array:2 [
        "concrete" => Closure {#373 …6}
        "shared" => true
      ]
      "Illuminate\Console\Scheduling\ScheduleRunCommand" => array:2 [
        "concrete" => Closure {#374 …6}
        "shared" => true
      ]
      "command.storage.link" => array:2 [
        "concrete" => Closure {#375 …4}
        "shared" => true
      ]
      "command.up" => array:2 [
        "concrete" => Closure {#376 …4}
        "shared" => true
      ]
      "command.view.clear" => array:2 [
        "concrete" => Closure {#377 …5}
        "shared" => true
      ]
      "command.app.name" => array:2 [
        "concrete" => Closure {#378 …5}
        "shared" => true
      ]
      "command.auth.make" => array:2 [
        "concrete" => Closure {#379 …5}
        "shared" => true
      ]
      "command.cache.table" => array:2 [
        "concrete" => Closure {#380 …5}
        "shared" => true
      ]
      "command.console.make" => array:2 [
        "concrete" => Closure {#381 …5}
        "shared" => true
      ]
      "command.controller.make" => array:2 [
        "concrete" => Closure {#382 …5}
        "shared" => true
      ]
      "command.event.generate" => array:2 [
        "concrete" => Closure {#383 …4}
        "shared" => true
      ]
      "command.event.make" => array:2 [
        "concrete" => Closure {#384 …5}
        "shared" => true
      ]
      "command.job.make" => array:2 [
        "concrete" => Closure {#385 …5}
        "shared" => true
      ]
      "command.listener.make" => array:2 [
        "concrete" => Closure {#386 …5}
        "shared" => true
      ]
      "command.mail.make" => array:2 [
        "concrete" => Closure {#387 …5}
        "shared" => true
      ]
      "command.middleware.make" => array:2 [
        "concrete" => Closure {#388 …5}
        "shared" => true
      ]
      "command.migrate.make" => array:2 [
        "concrete" => Closure {#389 …5}
        "shared" => true
      ]
      "command.model.make" => array:2 [
        "concrete" => Closure {#390 …5}
        "shared" => true
      ]
      "command.notification.make" => array:2 [
        "concrete" => Closure {#391 …5}
        "shared" => true
      ]
      "command.notification.table" => array:2 [
        "concrete" => Closure {#392 …5}
        "shared" => true
      ]
      "command.policy.make" => array:2 [
        "concrete" => Closure {#393 …5}
        "shared" => true
      ]
      "command.provider.make" => array:2 [
        "concrete" => Closure {#394 …5}
        "shared" => true
      ]
      "command.queue.failed-table" => array:2 [
        "concrete" => Closure {#395 …5}
        "shared" => true
      ]
      "command.queue.table" => array:2 [
        "concrete" => Closure {#396 …5}
        "shared" => true
      ]
      "command.request.make" => array:2 [
        "concrete" => Closure {#397 …5}
        "shared" => true
      ]
      "command.seeder.make" => array:2 [
        "concrete" => Closure {#398 …5}
        "shared" => true
      ]
      "command.session.table" => array:2 [
        "concrete" => Closure {#399 …5}
        "shared" => true
      ]
      "command.serve" => array:2 [
        "concrete" => Closure {#400 …4}
        "shared" => true
      ]
      "command.test.make" => array:2 [
        "concrete" => Closure {#401 …5}
        "shared" => true
      ]
      "command.vendor.publish" => array:2 [
        "concrete" => Closure {#402 …5}
        "shared" => true
      ]
      "migration.repository" => array:2 [
        "concrete" => Closure {#405 …5}
        "shared" => true
      ]
      "migrator" => array:2 [
        "concrete" => Closure {#406 …5}
        "shared" => true
      ]
      "migration.creator" => array:2 [
        "concrete" => Closure {#407 …5}
        "shared" => true
      ]
      "composer" => array:2 [
        "concrete" => Closure {#409 …5}
        "shared" => true
      ]
      "hash" => array:2 [
        "concrete" => Closure {#411 …4}
        "shared" => true
      ]
      "swift.transport" => array:2 [
        "concrete" => Closure {#413 …5}
        "shared" => true
      ]
      "swift.mailer" => array:2 [
        "concrete" => Closure {#414 …5}
        "shared" => true
      ]
      "mailer" => array:2 [
        "concrete" => Closure {#415 …5}
        "shared" => true
      ]
      "Illuminate\Mail\Markdown" => array:2 [
        "concrete" => Closure {#416 …5}
        "shared" => true
      ]
      "Illuminate\Contracts\Pipeline\Hub" => array:2 [
        "concrete" => Closure {#418 …6}
        "shared" => true
      ]
      "queue" => array:2 [
        "concrete" => Closure {#420 …5}
        "shared" => true
      ]
      "queue.connection" => array:2 [
        "concrete" => Closure {#421 …5}
        "shared" => true
      ]
      "queue.worker" => array:2 [
        "concrete" => Closure {#422 …4}
        "shared" => true
      ]
      "queue.listener" => array:2 [
        "concrete" => Closure {#423 …4}
        "shared" => true
      ]
      "queue.failer" => array:2 [
        "concrete" => Closure {#424 …4}
        "shared" => true
      ]
      "redis" => array:2 [
        "concrete" => Closure {#426 …5}
        "shared" => true
      ]
      "redis.connection" => array:2 [
        "concrete" => Closure {#427 …5}
        "shared" => false
      ]
      "auth.password" => array:2 [
        "concrete" => Closure {#429 …5}
        "shared" => true
      ]
      "auth.password.broker" => array:2 [
        "concrete" => Closure {#430 …5}
        "shared" => false
      ]
      "Laravel\Socialite\Contracts\Factory" => array:2 [
        "concrete" => Closure {#432 …5}
        "shared" => true
      ]
      "command.tinker" => array:2 [
        "concrete" => Closure {#434 …4}
        "shared" => true
      ]
    ]
    #methodBindings: []
    #instances: array:112 [
      "path" => "/home/vagrant/Code/laviti/site/app"
      "path.base" => "/home/vagrant/Code/laviti/site"
      "path.lang" => "/home/vagrant/Code/laviti/site/resources/lang"
      "path.config" => "/home/vagrant/Code/laviti/site/config"
      "path.public" => "/home/vagrant/Code/laviti/site/public"
      "path.storage" => "/home/vagrant/Code/laviti/site/storage"
      "path.database" => "/home/vagrant/Code/laviti/site/database"
      "path.resources" => "/home/vagrant/Code/laviti/site/resources"
      "path.bootstrap" => "/home/vagrant/Code/laviti/site/bootstrap"
      "app" => Illuminate\Foundation\Application {#3}
      "Illuminate\Container\Container" => Illuminate\Foundation\Application {#3}
      "events" => Illuminate\Events\Dispatcher {#21}
      "Illuminate\Contracts\Console\Kernel" => App\Console\Kernel {#22}
      "config" => Illuminate\Config\Repository {#33
        #items: array:26 [ …26]
      }
      "request" => Illuminate\Http\Request {#41
        #json: null
        #convertedFiles: null
        #userResolver: null
        #routeResolver: null
        +attributes: Symfony\Component\HttpFoundation\ParameterBag {#44 …1}
        +request: Symfony\Component\HttpFoundation\ParameterBag {#36 …1}
        +query: Symfony\Component\HttpFoundation\ParameterBag {#40 …1}
        +server: Symfony\Component\HttpFoundation\ServerBag {#38 …1}
        +files: Symfony\Component\HttpFoundation\FileBag {#42 …1}
        +cookies: Symfony\Component\HttpFoundation\ParameterBag {#46 …1}
        +headers: Symfony\Component\HttpFoundation\HeaderBag {#34 …2}
        #content: null
        #languages: null
        #charsets: null
        #encodings: null
        #acceptableContentTypes: null
        #pathInfo: null
        #requestUri: null
        #baseUrl: null
        #basePath: null
        #method: null
        #format: null
        #session: null
        #locale: null
        #defaultLocale: "en"
        -isForwardedValid: true
      }
      "view.engine.resolver" => Illuminate\View\Engines\EngineResolver {#126
        #resolvers: array:3 [ …3]
        #resolved: array:1 [ …1]
      }
      "files" => Illuminate\Filesystem\Filesystem {#132}
      "view" => Illuminate\View\Factory {#133
        #engines: Illuminate\View\Engines\EngineResolver {#126}
        #finder: Illuminate\View\FileViewFinder {#131 …5}
        #events: Illuminate\Events\Dispatcher {#21}
        #container: Illuminate\Foundation\Application {#3}
        #shared: array:2 [ …2]
        #extensions: array:3 [ …3]
        #composers: []
        #renderCount: 0
        #componentStack: []
        #componentData: []
        #slots: []
        #slotStack: []
        #sections: []
        #sectionStack: []
        #loopsStack: []
        #pushes: []
        #prepends: []
        #pushStack: []
        #translationReplacements: []
      }
      "blade.compiler" => Illuminate\View\Compilers\BladeCompiler {#135
        #extensions: []
        #customDirectives: array:8 [ …8]
        #path: null
        #compilers: array:4 [ …4]
        #rawTags: array:2 [ …2]
        #contentTags: array:2 [ …2]
        #escapedTags: array:2 [ …2]
        #echoFormat: "e(%s)"
        #footer: []
        #verbatimPlaceholder: "@__verbatim__@"
        #verbatimBlocks: []
        #files: Illuminate\Filesystem\Filesystem {#132}
        #cachePath: "/home/vagrant/Code/laviti/site/storage/framework/views"
        #lastSection: null
        #forElseCounter: 0
      }
      "db.factory" => Illuminate\Database\Connectors\ConnectionFactory {#156}
      "db" => Illuminate\Database\DatabaseManager {#155}
      "translation.loader" => Illuminate\Translation\FileLoader {#164
        #files: Illuminate\Filesystem\Filesystem {#132}
        #path: "/home/vagrant/Code/laviti/site/resources/lang"
        #hints: array:1 [ …1]
      }
      "translator" => Illuminate\Translation\Translator {#165
        #loader: Illuminate\Translation\FileLoader {#164}
        #locale: "ru"
        #fallback: "en"
        #loaded: []
        #selector: null
        #parsed: []
      }
      "validation.presence" => Illuminate\Validation\DatabasePresenceVerifier {#172
        #db: Illuminate\Database\DatabaseManager {#155}
        #connection: null
      }
      "validator" => Illuminate\Validation\Factory {#171
        #translator: Illuminate\Translation\Translator {#165}
        #verifier: Illuminate\Validation\DatabasePresenceVerifier {#172}
        #container: Illuminate\Foundation\Application {#3}
        #extensions: array:1 [ …1]
        #implicitExtensions: []
        #dependentExtensions: []
        #replacers: []
        #fallbackMessages: []
        #resolver: null
      }
      "router" => Illuminate\Routing\Router {#180}
      "routes" => Illuminate\Routing\RouteCollection {#181}
      "url" => Illuminate\Routing\UrlGenerator {#182
        #routes: Illuminate\Routing\RouteCollection {#181}
        #request: Illuminate\Http\Request {#41}
        #forcedRoot: null
        #forceScheme: null
        #cachedRoot: null
        #cachedSchema: null
        #rootNamespace: "App\Http\Controllers"
        #sessionResolver: Closure {#184 …4}
        #formatHostUsing: null
        #formatPathUsing: null
        #routeGenerator: null
      }
      "html" => Collective\Html\HtmlBuilder {#179
        #url: Illuminate\Routing\UrlGenerator {#182}
        #view: Illuminate\View\Factory {#133}
      }
      "session" => Illuminate\Session\SessionManager {#186
        #app: Illuminate\Foundation\Application {#3}
        #customCreators: []
        #drivers: array:1 [ …1]
      }
      "encrypter" => Illuminate\Encryption\Encrypter {#194
        #key: b"Ÿ/kš\x0EÅ-\x06øN\x12KnðÃ¦\x08\x08\e%|”÷ûûð­y\x1EÂ“™"
        #cipher: "AES-256-CBC"
      }
      "session.store" => Illuminate\Session\EncryptedStore {#193
        #encrypter: Illuminate\Encryption\Encrypter {#194}
        #id: "L1InnD8IDwYO0tpyGNJj4bxSYBJ8jxy3AdRm51Ym"
        #name: "laravel_session"
        #attributes: []
        #handler: Illuminate\Session\DatabaseSessionHandler {#187 …5}
        #started: false
      }
      "form" => App\Helpers\Macros\Macros {#178
        #html: Collective\Html\HtmlBuilder {#179}
        #url: Illuminate\Routing\UrlGenerator {#182}
        #view: Illuminate\View\Factory {#133}
        #csrfToken: null
        #session: Illuminate\Session\EncryptedStore {#193}
        #model: null
        #labels: []
        #reserved: array:5 [ …5]
        #spoofedMethods: array:3 [ …3]
        #skipValueTypes: array:4 [ …4]
      }
      "breadcrumbs" => DaveJamesMiller\Breadcrumbs\Manager {#202
        #currentRoute: DaveJamesMiller\Breadcrumbs\CurrentRoute {#206 …2}
        #generator: DaveJamesMiller\Breadcrumbs\Generator {#204 …2}
        #view: DaveJamesMiller\Breadcrumbs\View {#208 …1}
        #callbacks: array:16 [ …16]
        #viewName: "backend.includes.partials.breadcrumbs"
        #currentRouteManual: null
      }
      "active" => HieuLe\Active\Active {#216
        #request: null
        #route: null
        #action: null
        #controller: null
        #method: null
        #uri: null
      }
      "cache" => Illuminate\Cache\CacheManager {#333}
      "cache.store" => Illuminate\Cache\Repository {#338
        #store: Illuminate\Cache\FileStore {#337 …2}
        #events: Illuminate\Events\Dispatcher {#21}
        #default: 60
      }
      "Illuminate\Console\Scheduling\Schedule" => Illuminate\Console\Scheduling\Schedule {#39}
      "debugbar" => Barryvdh\Debugbar\LaravelDebugbar {#468}
      "command.debugbar.clear" => Barryvdh\Debugbar\Console\ClearCommand {#463}
      "Spatie\MediaLibrary\MediaRepository" => Spatie\MediaLibrary\MediaRepository {#476
        #model: Spatie\MediaLibrary\Media {#477 …24}
      }
      "filesystem" => Illuminate\Filesystem\FilesystemManager {#491
        #app: Illuminate\Foundation\Application {#3}
        #disks: []
        #customCreators: []
      }
      "Arcanedev\LogViewer\Contracts\Utilities\Filesystem" => Arcanedev\LogViewer\Utilities\Filesystem {#545
        #filesystem: Illuminate\Filesystem\Filesystem {#132}
        #storagePath: "/home/vagrant/Code/laviti/site/storage/logs"
        #prefixPattern: "laravel-"
        #datePattern: "[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]"
        #extension: ".log"
      }
      "Arcanedev\LogViewer\Contracts\Utilities\LogLevels" => Arcanedev\LogViewer\Utilities\LogLevels {#544
        -translator: Illuminate\Translation\Translator {#165}
        -locale: "auto"
      }
      "Arcanedev\LogViewer\Contracts\Utilities\Factory" => Arcanedev\LogViewer\Utilities\Factory {#546
        #filesystem: Arcanedev\LogViewer\Utilities\Filesystem {#545}
        -levels: Arcanedev\LogViewer\Utilities\LogLevels {#544}
      }
      "Arcanedev\LogViewer\Contracts\LogViewer" => Arcanedev\LogViewer\LogViewer {#539
        #factory: Arcanedev\LogViewer\Utilities\Factory {#546}
        #filesystem: Arcanedev\LogViewer\Utilities\Filesystem {#545}
        #levels: Arcanedev\LogViewer\Utilities\LogLevels {#544}
      }
      "command.cache.clear" => Illuminate\Cache\Console\ClearCommand {#532}
      "command.cache.forget" => Illuminate\Cache\Console\ForgetCommand {#540}
      "command.clear-compiled" => Illuminate\Foundation\Console\ClearCompiledCommand {#550}
      "command.auth.resets.clear" => Illuminate\Auth\Console\ClearResetsCommand {#552}
      "command.config.cache" => Illuminate\Foundation\Console\ConfigCacheCommand {#555}
      "command.config.clear" => Illuminate\Foundation\Console\ConfigClearCommand {#557}
      "command.down" => Illuminate\Foundation\Console\DownCommand {#559}
      "command.environment" => Illuminate\Foundation\Console\EnvironmentCommand {#563}
      "command.key.generate" => Illuminate\Foundation\Console\KeyGenerateCommand {#565}
      "migration.repository" => Illuminate\Database\Migrations\DatabaseMigrationRepository {#570}
      "migrator" => Illuminate\Database\Migrations\Migrator {#571}
      "command.migrate" => Illuminate\Database\Console\Migrations\MigrateCommand {#569}
      "command.migrate.install" => Illuminate\Database\Console\Migrations\InstallCommand {#579}
      "command.migrate.refresh" => Illuminate\Database\Console\Migrations\RefreshCommand {#582}
      "command.migrate.reset" => Illuminate\Database\Console\Migrations\ResetCommand {#590}
      "command.migrate.rollback" => Illuminate\Database\Console\Migrations\RollbackCommand {#596}
      "command.migrate.status" => Illuminate\Database\Console\Migrations\StatusCommand {#603}
      "composer" => Illuminate\Support\Composer {#608}
      "command.optimize" => Illuminate\Foundation\Console\OptimizeCommand {#607}
      "command.queue.failed" => Illuminate\Queue\Console\ListFailedCommand {#612}
      "command.queue.flush" => Illuminate\Queue\Console\FlushFailedCommand {#614}
      "command.queue.forget" => Illuminate\Queue\Console\ForgetFailedCommand {#616}
      "queue.listener" => Illuminate\Queue\Listener {#620}
      "command.queue.listen" => Illuminate\Queue\Console\ListenCommand {#619}
      "command.queue.restart" => Illuminate\Queue\Console\RestartCommand {#631}
      "command.queue.retry" => Illuminate\Queue\Console\RetryCommand {#633}
      "queue" => Illuminate\Queue\QueueManager {#638}
      "Illuminate\Contracts\Debug\ExceptionHandler" => App\Exceptions\Handler {#648}
      "queue.worker" => Illuminate\Queue\Worker {#637}
      "command.queue.work" => Illuminate\Queue\Console\WorkCommand {#636}
      "command.route.cache" => Illuminate\Foundation\Console\RouteCacheCommand {#657}
      "command.route.clear" => Illuminate\Foundation\Console\RouteClearCommand {#659}
      "command.route.list" => Illuminate\Foundation\Console\RouteListCommand {#661}
      "command.seed" => Illuminate\Database\Console\Seeds\SeedCommand {#668}
      "Illuminate\Console\Scheduling\ScheduleFinishCommand" => Illuminate\Console\Scheduling\ScheduleFinishCommand {#676}
      "Illuminate\Console\Scheduling\ScheduleRunCommand" => Illuminate\Console\Scheduling\ScheduleRunCommand {#679}
      "command.storage.link" => Illuminate\Foundation\Console\StorageLinkCommand {#673}
      "command.up" => Illuminate\Foundation\Console\UpCommand {#675}
      "command.view.clear" => Illuminate\Foundation\Console\ViewClearCommand {#682}
      "command.app.name" => Illuminate\Foundation\Console\AppNameCommand {#684}
      "command.auth.make" => Illuminate\Auth\Console\MakeAuthCommand {#687}
      "command.cache.table" => Illuminate\Cache\Console\CacheTableCommand {#691}
      "command.console.make" => Illuminate\Foundation\Console\ConsoleMakeCommand {#693}
      "command.controller.make" => Illuminate\Routing\Console\ControllerMakeCommand {#697}
      "command.event.generate" => Illuminate\Foundation\Console\EventGenerateCommand {#703 …20}
      "command.event.make" => Illuminate\Foundation\Console\EventMakeCommand {#705 …26}
      "command.job.make" => Illuminate\Foundation\Console\JobMakeCommand {#708 …26}
      "command.listener.make" => Illuminate\Foundation\Console\ListenerMakeCommand {#712 …26}
      "command.mail.make" => Illuminate\Foundation\Console\MailMakeCommand {#717 …26}
      "command.middleware.make" => Illuminate\Routing\Console\MiddlewareMakeCommand {#721 …26}
      "migration.creator" => Illuminate\Database\Migrations\MigrationCreator {#724 …2}
      "command.migrate.make" => Illuminate\Database\Console\Migrations\MigrateMakeCommand {#725 …26}
      "command.model.make" => Illuminate\Foundation\Console\ModelMakeCommand {#731 …26}
      "command.notification.make" => Illuminate\Foundation\Console\NotificationMakeCommand {#737 …26}
      "command.notification.table" => Illuminate\Notifications\Console\NotificationTableCommand {#741 …26}
      "command.policy.make" => Illuminate\Foundation\Console\PolicyMakeCommand {#743 …26}
      "command.provider.make" => Illuminate\Foundation\Console\ProviderMakeCommand {#747 …26}
      "command.queue.failed-table" => Illuminate\Queue\Console\FailedTableCommand {#750 …26}
      "command.queue.table" => Illuminate\Queue\Console\TableCommand {#752 …26}
      "command.request.make" => Illuminate\Foundation\Console\RequestMakeCommand {#754 …26}
      "command.seeder.make" => Illuminate\Database\Console\Seeds\SeederMakeCommand {#757 …27}
      "command.session.table" => Illuminate\Session\Console\SessionTableCommand {#760 …26}
      "command.serve" => Illuminate\Foundation\Console\ServeCommand {#762 …24}
      "command.test.make" => Illuminate\Foundation\Console\TestMakeCommand {#766 …26}
      "command.vendor.publish" => Illuminate\Foundation\Console\VendorPublishCommand {#770 …25}
      "command.tinker" => Laravel\Tinker\Console\TinkerCommand {#775 …25}
    ]
    #aliases: array:73 [
      "Illuminate\Foundation\Application" => "app"
      "Illuminate\Contracts\Container\Container" => "app"
      "Illuminate\Contracts\Foundation\Application" => "app"
      "Illuminate\Auth\AuthManager" => "auth"
      "Illuminate\Contracts\Auth\Factory" => "auth"
      "Illuminate\Contracts\Auth\Guard" => "auth.driver"
      "Illuminate\View\Compilers\BladeCompiler" => "blade.compiler"
      "Illuminate\Cache\CacheManager" => "cache"
      "Illuminate\Contracts\Cache\Factory" => "cache"
      "Illuminate\Cache\Repository" => "cache.store"
      "Illuminate\Contracts\Cache\Repository" => "cache.store"
      "Illuminate\Config\Repository" => "config"
      "Illuminate\Contracts\Config\Repository" => "config"
      "Illuminate\Cookie\CookieJar" => "cookie"
      "Illuminate\Contracts\Cookie\Factory" => "cookie"
      "Illuminate\Contracts\Cookie\QueueingFactory" => "cookie"
      "Illuminate\Encryption\Encrypter" => "encrypter"
      "Illuminate\Contracts\Encryption\Encrypter" => "encrypter"
      "Illuminate\Database\DatabaseManager" => "db"
      "Illuminate\Database\Connection" => "db.connection"
      "Illuminate\Database\ConnectionInterface" => "db.connection"
      "Illuminate\Events\Dispatcher" => "events"
      "Illuminate\Contracts\Events\Dispatcher" => "events"
      "Illuminate\Filesystem\Filesystem" => "files"
      "Illuminate\Filesystem\FilesystemManager" => "filesystem"
      "Illuminate\Contracts\Filesystem\Factory" => "filesystem"
      "Illuminate\Contracts\Filesystem\Filesystem" => "filesystem.disk"
      "Illuminate\Contracts\Filesystem\Cloud" => "filesystem.cloud"
      "Illuminate\Contracts\Hashing\Hasher" => "hash"
      "Illuminate\Translation\Translator" => "translator"
      "Illuminate\Contracts\Translation\Translator" => "translator"
      "Illuminate\Log\Writer" => "log"
      "Illuminate\Contracts\Logging\Log" => "log"
      "Psr\Log\LoggerInterface" => "log"
      "Illuminate\Mail\Mailer" => "mailer"
      "Illuminate\Contracts\Mail\Mailer" => "mailer"
      "Illuminate\Contracts\Mail\MailQueue" => "mailer"
      "Illuminate\Auth\Passwords\PasswordBrokerManager" => "auth.password"
      "Illuminate\Contracts\Auth\PasswordBrokerFactory" => "auth.password"
      "Illuminate\Auth\Passwords\PasswordBroker" => "auth.password.broker"
      "Illuminate\Contracts\Auth\PasswordBroker" => "auth.password.broker"
      "Illuminate\Queue\QueueManager" => "queue"
      "Illuminate\Contracts\Queue\Factory" => "queue"
      "Illuminate\Contracts\Queue\Monitor" => "queue"
      "Illuminate\Contracts\Queue\Queue" => "queue.connection"
      "Illuminate\Queue\Failed\FailedJobProviderInterface" => "queue.failer"
      "Illuminate\Routing\Redirector" => "redirect"
      "Illuminate\Redis\RedisManager" => "redis"
      "Illuminate\Contracts\Redis\Factory" => "redis"
      "Illuminate\Http\Request" => "request"
      "Symfony\Component\HttpFoundation\Request" => "request"
      "Illuminate\Routing\Router" => "router"
      "Illuminate\Contracts\Routing\Registrar" => "router"
      "Illuminate\Contracts\Routing\BindingRegistrar" => "router"
      "Illuminate\Session\SessionManager" => "session"
      "Illuminate\Session\Store" => "session.store"
      "Illuminate\Contracts\Session\Session" => "session.store"
      "Illuminate\Routing\UrlGenerator" => "url"
      "Illuminate\Contracts\Routing\UrlGenerator" => "url"
      "Illuminate\Validation\Factory" => "validator"
      "Illuminate\Contracts\Validation\Factory" => "validator"
      "Illuminate\View\Factory" => "view"
      "Illuminate\Contracts\View\Factory" => "view"
      "Illuminate\Contracts\Notifications\Dispatcher" => "Illuminate\Notifications\ChannelManager"
      "Illuminate\Contracts\Notifications\Factory" => "Illuminate\Notifications\ChannelManager"
      "Yajra\Datatables\Datatables" => "datatables"
      "DebugBar\DataFormatter\DataFormatterInterface" => "DebugBar\DataFormatter\DataFormatter"
      "Barryvdh\Debugbar\LaravelDebugbar" => "debugbar"
      "Collective\Html\HtmlBuilder" => "html"
      "Collective\Html\FormBuilder" => "form"
      "Illuminate\Contracts\Broadcasting\Factory" => "Illuminate\Broadcasting\BroadcastManager"
      "Illuminate\Contracts\Bus\Dispatcher" => "Illuminate\Bus\Dispatcher"
      "Illuminate\Contracts\Bus\QueueingDispatcher" => "Illuminate\Bus\Dispatcher"
    ]
    #abstractAliases: array:42 [
      "app" => array:3 [ …3]
      "auth" => array:2 [ …2]
      "auth.driver" => array:1 [ …1]
      "blade.compiler" => array:1 [ …1]
      "cache" => array:2 [ …2]
      "cache.store" => array:2 [ …2]
      "config" => array:2 [ …2]
      "cookie" => array:3 [ …3]
      "encrypter" => array:2 [ …2]
      "db" => array:1 [ …1]
      "db.connection" => array:2 [ …2]
      "events" => array:2 [ …2]
      "files" => array:1 [ …1]
      "filesystem" => array:2 [ …2]
      "filesystem.disk" => array:1 [ …1]
      "filesystem.cloud" => array:1 [ …1]
      "hash" => array:1 [ …1]
      "translator" => array:2 [ …2]
      "log" => array:3 [ …3]
      "mailer" => array:3 [ …3]
      "auth.password" => array:2 [ …2]
      "auth.password.broker" => array:2 [ …2]
      "queue" => array:3 [ …3]
      "queue.connection" => array:1 [ …1]
      "queue.failer" => array:1 [ …1]
      "redirect" => array:1 [ …1]
      "redis" => array:2 [ …2]
      "request" => array:2 [ …2]
      "router" => array:3 [ …3]
      "session" => array:1 [ …1]
      "session.store" => array:2 [ …2]
      "url" => array:2 [ …2]
      "validator" => array:2 [ …2]
      "view" => array:2 [ …2]
      "Illuminate\Notifications\ChannelManager" => array:2 [ …2]
      "datatables" => array:1 [ …1]
      "DebugBar\DataFormatter\DataFormatter" => array:1 [ …1]
      "debugbar" => array:1 [ …1]
      "html" => array:1 [ …1]
      "form" => array:1 [ …1]
      "Illuminate\Broadcasting\BroadcastManager" => array:1 [ …1]
      "Illuminate\Bus\Dispatcher" => array:2 [ …2]
    ]
    #extenders: []
    #tags: []
    #buildStack: []
    #with: []
    +contextual: []
    #reboundCallbacks: array:2 [
      "request" => array:2 [ …2]
      "routes" => array:1 [ …1]
    ]
    #globalResolvingCallbacks: []
    #globalAfterResolvingCallbacks: []
    #resolvingCallbacks: array:1 [
      "Illuminate\Foundation\Http\FormRequest" => array:1 [ …1]
    ]
    #afterResolvingCallbacks: array:1 [
      "Illuminate\Contracts\Validation\ValidatesWhenResolved" => array:1 [ …1]
    ]
  }
  #input: Symfony\Component\Console\Input\ArgvInput {#20
    -tokens: array:2 [
      0 => "generator:make:scaffold"
      1 => "brands"
    ]
    -parsed: []
    #definition: Symfony\Component\Console\Input\InputDefinition {#519
      -arguments: array:2 [
        "command" => Symfony\Component\Console\Input\InputArgument {#448 …4}
        "tables" => Symfony\Component\Console\Input\InputArgument {#514 …4}
      ]
      -requiredCount: 1
      -hasAnArrayArgument: false
      -hasOptional: true
      -options: array:12 [
        "tables" => Symfony\Component\Console\Input\InputOption {#515 …5}
        "ignore" => Symfony\Component\Console\Input\InputOption {#516 …5}
        "models" => Symfony\Component\Console\Input\InputOption {#517 …5}
        "paginate" => Symfony\Component\Console\Input\InputOption {#518 …5}
        "help" => Symfony\Component\Console\Input\InputOption {#449 …5}
        "quiet" => Symfony\Component\Console\Input\InputOption {#450 …5}
        "verbose" => Symfony\Component\Console\Input\InputOption {#451 …5}
        "version" => Symfony\Component\Console\Input\InputOption {#452 …5}
        "ansi" => Symfony\Component\Console\Input\InputOption {#453 …5}
        "no-ansi" => Symfony\Component\Console\Input\InputOption {#454 …5}
        "no-interaction" => Symfony\Component\Console\Input\InputOption {#455 …5}
        "env" => Symfony\Component\Console\Input\InputOption {#457 …5}
      ]
      -shortcuts: array:7 [
        "h" => "help"
        "q" => "quiet"
        "v" => "verbose"
        "vv" => "verbose"
        "vvv" => "verbose"
        "V" => "version"
        "n" => "no-interaction"
      ]
    }
    #stream: null
    #options: []
    #arguments: array:2 [
      "command" => "generator:make:scaffold"
      "tables" => "brands"
    ]
    #interactive: true
  }
  #output: Illuminate\Console\OutputStyle {#779
    -output: Symfony\Component\Console\Output\ConsoleOutput {#18
      -stderr: Symfony\Component\Console\Output\StreamOutput {#31 …3}
      -stream: stream resource @61 …10
      -verbosity: 32
      -formatter: Symfony\Component\Console\Formatter\OutputFormatter {#17 …3}
    }
    -input: Symfony\Component\Console\Input\ArgvInput {#20}
    -questionHelper: null
    -progressBar: null
    -lineLength: 120
    -bufferedOutput: Symfony\Component\Console\Output\BufferedOutput {#778
      -buffer: ""
      -verbosity: 32
      -formatter: Symfony\Component\Console\Formatter\OutputFormatter {#780 …3}
    }
    -output: Symfony\Component\Console\Output\ConsoleOutput {#18}
  }
  #name: "generator:make:scaffold"
  #hidden: false
  #verbosity: 32
  #verbosityMap: array:5 [
    "v" => 64
    "vv" => 128
    "vvv" => 256
    "quiet" => 16
    "normal" => 32
  ]
  -application: Illuminate\Console\Application {#440}
  -processTitle: null
  -aliases: []
  -definition: Symfony\Component\Console\Input\InputDefinition {#519}
  -help: null
  -ignoreValidationErrors: false
  -applicationDefinitionMerged: true
  -applicationDefinitionMergedWithArgs: true
  -code: null
  -synopsis: array:2 [
    "short" => "generator:make:scaffold [options] [--] [<tables>]"
    "long" => "generator:make:scaffold [--tables [TABLES]] [--ignore [IGNORE]] [--models [MODELS]] [--paginate [PAGINATE]] [--] [<tables>]"
  ]
  -usages: []
  -helperSet: Symfony\Component\Console\Helper\HelperSet {#442}
  -name: "generator:make:scaffold"
  -hidden: false
  -description: "Create a full CRUD for given table with initial views."
}
