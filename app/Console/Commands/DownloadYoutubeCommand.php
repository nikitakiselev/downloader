<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use NikitaKiselev\YtDlp\OptionsDTO;
use NikitaKiselev\YtDlp\OptionsSerializer;
use NikitaKiselev\YtDlp\YtDlp;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class DownloadYoutubeCommand extends Command
{
    protected $signature = 'download:youtube
        { --dump : Dump ytdlp CLI command }
    ';
    protected $description = 'Command description';

    public function __construct(
        protected YtDlp $ytDlp,
    )
    {
        parent::__construct();
    }

    public function handle(): int
    {
        $options = new OptionsDTO();
        // $options->url = 'https://www.youtube.com/watch?v=j17yEgxPwkk';
        $options->extractAudio = true;
        $options->audioFormat = 'mp3';
        $options->splitChapters = true;
        // $options->output = '%(title)s/%(chapter_number)s - %(chapter)s/%(title)s.%(ext)s';
        // $options->output = '%(chapter)s.%(ext)s';

        // $url = 'https://www.youtube.com/watch?v=yfEdhlBuxCU';
        $url = 'https://www.youtube.com/watch?v=j17yEgxPwkk';

        try {
            $this->ytDlp
                ->setOptions($options)
                ->download($url, function ($type, $buffer): void {
                    $this->line(trim($buffer), $type === Process::ERR ? 'error' : null);
                });

            return static::SUCCESS;
        } catch (ProcessFailedException $exception) {
            $this->error($exception->getMessage());
        }


        return static::FAILURE;
    }
}
