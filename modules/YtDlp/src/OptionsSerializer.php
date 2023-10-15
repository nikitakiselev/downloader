<?php

namespace NikitaKiselev\YtDlp;

class OptionsSerializer
{
    public function toCommandArray(OptionsDTOContract $optionsDTO): array
    {
        $command = [];

        foreach (get_object_vars($optionsDTO) as $key => $value)
        {
            if ($value !== null) {
                $command[] = $key;
                $command[] = $value;
            }
        }

        return $command;
    }
}
