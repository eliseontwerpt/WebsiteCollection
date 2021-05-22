<?php namespace Eliseontwerpt\WebsiteCollection;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    return [
            'Eliseontwerpt\WebsiteCollection\Components\Websites' => 'SiteList'
        ];
    
    }

    public function registerSettings()
    {
    }
}
