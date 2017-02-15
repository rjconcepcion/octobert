<?php

namespace Octobert\Calculator;

class Plugin extends \System\Classes\PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Calculator',
            'description' => 'A simple and stupid plugin of calculator',
            'author' => 'Robert John Concepcion',
            'icon' => 'icon-calculator'
        ];
    }

    public function registerComponents()
    {
        return [
            'Octobert\Calculator\Components\Calculator' =>  'calc'
        ];
    }

}