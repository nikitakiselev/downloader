<?php

declare(strict_types=1);

namespace NikitaKiselev\YtDlp;

use Symfony\Component\Process\Process;

class YtDlp
{
    private string $ytDlpPath;
    private string $ffmpegPath;

    private OptionsDTOContract $options;

    public function __construct(
        protected OptionsSerializer $optionsSerializer,
    ) {
        $this->ytDlpPath = config('yt-dlp.bin_path');
        $this->ffmpegPath = config('yt-dlp.ffmpeg_path');
    }

    public function download(string $url, callable $callback = null): string
    {
        $command = [
            $this->ytDlpPath,
            '--ffmpeg-location',
            $this->ffmpegPath,
        ];

        $options = $this->optionsSerializer->toCommandArray($this->options);

        $command = array_merge($command, $options, [$url]);

        $process = new Process(
            command: $command,
            timeout: 300,
        );

        $process->mustRun($callback);

        return $process->getOutput();
    }

    public function setOptions(OptionsDTOContract $options): static
    {
        $this->options = $options;

        return $this;
    }
}
