<?php

namespace Hestec\AffiliateOffers;

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\LiteralField;
use SilverStripe\Control\Director;
use SilverStripe\ORM\FieldType\DBField;
use Hestec\LinkManager\Link;
use SilverStripe\Assets\Image;

class Offer extends DataObject {

    private static $singular_name = 'Offer';
    private static $plural_name = 'Offers';

    private static $table_name = 'HestecAffiliateOffersOffer';

    private static $db = array(
        'Title' => 'Varchar(255)',
        'DescriptionShort' => 'HTMLText',
        'DescriptionLong' => 'HTMLText',
        'Duration' => 'Varchar(20)',
        'Discount' => 'Currency',
        'Cashback' => 'Currency',
        'StartDate' => 'Date',
        'EndDate' => 'Date',
        'Enabled' => 'Boolean'
    );

    private static $has_one = array(
        'Link' => Link::class,
        'Banner' => Image::class,
        'Supplier' => Supplier::class
    );

    private static $many_many = array(
        'Categories' => Category::class
    );

    private static $summary_fields = array(
        'Title'
    );

}