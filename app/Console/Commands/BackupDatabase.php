<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class BackupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'BackupDatabase';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    const LIMIT = 10;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public static function handle()
    {
        if (count(glob(storage_path() . "/backups/*.sql")) >= self::LIMIT) {
            echo json_encode(['error' => 1, 'msg' => trans('backup.limit_backup')]);
            exit;
        }
        $fileBackup = storage_path('backups/backup-' . date('Y-m-d-H-i-s') . '.sql');
        try {

            $string = sprintf(
                'mysqldump --user="%s"  --password=%s %s > %s',
                config('database.connections.'.SC_CONNECTION.'.username'),
                config('database.connections.'.SC_CONNECTION.'.password'),
                config('database.connections.'.SC_CONNECTION.'.database'),
                $fileBackup
            );
            Process::fromShellCommandline($string)->mustRun();
            echo json_encode(['error' => 0, 'msg' => 'Backup success!']);
        } catch (Throwable $exception) {
            if (file_exists($fileBackup)) {
                unlink($fileBackup);
            }
            echo json_encode(['error' => 1, 'msg' => $exception->getMessage()]);
        }
    }
}
