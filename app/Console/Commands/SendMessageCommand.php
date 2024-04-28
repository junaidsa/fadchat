<?php

namespace App\Console\Commands;

use App\Events\MessageSend;
use Illuminate\Console\Command;

use function Laravel\Prompts\text;

class SendMessageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Write a message to the console';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = text(
            label: "What is your name?",
            required : true
        );
        $text = text(
            label: "Write Your Message?",
            required : true
        );
     MessageSend::dispatch($name, $text);
    }
}
