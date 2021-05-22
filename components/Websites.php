<?php namespace EliseOntwerpt\WebsiteCollection\Components;

use Db;
use Lang;
use Redirect;
use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use October\Rain\Database\Model;
use October\Rain\Database\Collection;
use EliseOntwerpt\WebsiteCollection\Models\Websites as Sites;

class Websites extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'List of Websites',
            'description' => 'List of Websites managed bij WebsiteCollection plugin.'
        ];
    }

    public function defineProperties()
    {
        return [
            'sorting' => [
                'title' => 'Sort on',
                'type' => 'dropdown',
                'default' => 'id',
                
            ],
            'direction' => [
                'title' => 'Direction',
                'type'  => 'dropdown',
                'default' => 'asc'
            ],
            'numberofitems' => [
                'title' => 'Number of items',
                'description' => 'The most amount of todo items allowed [ 0 = all items ]',
                'type' => 'string',
                'default' => 50,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Number of items property can contain only numeric symbols'
            ]
        ];
    }

    public function getSortingOptions()
    {
        return [    'id'=> 'ID',
                    'title'=>'Title'
                ];
    }

    public function getDirectionOptions()
    {
        return [    'asc'=> 'Ascending',
                    'desc'=>'Descending'
                ];
    }

    public function getWebsiteOptions()    
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    // This array becomes available on the page as {{ component.recipes }}
    public function List()
    {
        $noi = $this->property('numberofitems');
        return Sites::get();        
    }
}