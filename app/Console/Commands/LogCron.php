<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\News;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Exceptions\Handler;

class LogCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
    public function handle()
    {
        Log::info("Check table for news");

                $json = file_get_contents('https://www.krabugrupp.ee/ru/system-trlansation-news-feed/');
                    $objs = json_decode($json,true);
                    foreach ($objs as $obj) {
                        //$concatString = $obj['title'] . $obj['image'] . $obj['content'] . $obj['date'] . $obj['excerpt'];

                        //$newHash = Hash::make($concatString);
                        
                        $oldHash = ($obj['id']);
                            
                        if (!$oldHash) {
                                $news = new News();
                                $news->id = $obj['id'];
                                $news->title = $obj['title'];
                                $news->picture = $obj['image'];
                                $news->body = $obj['content'];
                                $news->date= $obj['date'];
                                $news->excerpt = $obj['excerpt'];
                                $concatString =  $obj['title'] . $obj['image'] . $obj['content'] . $obj['date'] . $obj['excerpt'];
                                $news->hash = Hash::make($concatString);

                                $news->save(); 
                        }
                        
                        
                    };
        
    }
}
