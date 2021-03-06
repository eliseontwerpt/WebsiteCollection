<?php namespace EliseOntwerpt\WebsiteCollection\Models;

use Model;

/**
 * Model
 */
class Websites extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'eliseontwerpt_websitecollection_pages';

    public $attachMany = [
        'screenshots' => 'System\Models\File'
    ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
