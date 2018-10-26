<?php

namespace Hestec\AffiliateOffers;

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\LiteralField;
use SilverStripe\Control\Director;
use SilverStripe\ORM\FieldType\DBField;

class Category extends DataObject {

    private static $singular_name = 'Category';
    private static $plural_name = 'Categories';

    private static $table_name = 'HestecAffiliateOffersCategory';

    private static $db = array(
        'Title' => 'Varchar(255)'
    );

    private static $belongs_many_many = array(
        'Categories' => Category::class
    );

    private static $summary_fields = array(
        'Title'
    );

}