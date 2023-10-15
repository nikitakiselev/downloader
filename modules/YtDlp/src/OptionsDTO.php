<?php

namespace NikitaKiselev\YtDlp;

class OptionsDTO implements OptionsDTOContract
{
    public bool $extractAudio = false;
    public ?string $audioFormat = null;
    public ?string $output = null;
    public bool $splitChapters = false;
}
