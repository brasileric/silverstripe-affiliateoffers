<?php

namespace Hestec\AffiliateOffers;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\LiteralField;
use SilverStripe\Control\Director;
use SilverStripe\ORM\FieldType\DBField;
use Hestec\LinkManager\Link;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TabSet;

class Supplier extends DataObject {

    private static $singular_name = 'Supplier';
    private static $plural_name = 'Suppliers';

    private static $table_name = 'HestecAffiliateOffersSupplier';

    private static $db = array(
        'Name' => 'Varchar(255)'
    );

    private static $has_one = array(
        'Link' => Link::class,
        'Logo' => Image::class
    );

    private static $has_many = array(
        'Offers' => Offer::class
    );

    private static $summary_fields = array(
        'Name'
    );

    public function getCMSFields()
    {

        $fields = FieldList::create(TabSet::create('Root'));

        $NameField = TextField::create('Name', "Name");
        $LogoField = UploadField::create('LogoID', "Logo");
        $LinkField = DropdownField::create('LinkID', "Link");

        $fields->addFieldsToTab('Root.Main', array(
            $NameField,
            $LogoField,
            $LinkField
        ));

        return $fields;

    }

}