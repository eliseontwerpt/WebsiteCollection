<?php namespace EliseOntwerpt\WebsiteCollection;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    return [
            'EliseOntwerpt\WebsiteCollection\Components\Websites' => 'SiteList'
        ];
    
    }

    public function registerSettings()
    {
    }
}
