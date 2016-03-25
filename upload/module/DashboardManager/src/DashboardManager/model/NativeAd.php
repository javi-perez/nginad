<?php
/**
 * NGINAD Project
 *
 * @link http://www.nginad.com
 * @copyright Copyright (c) 2013-2016 NginAd Foundation. All Rights Reserved
 * @license GPLv3
 */

namespace model;

use \model\interfaces\MediaLibraryItem;

class NativeAd implements MediaLibraryItem
{
    public $NativeAdID;
    public $UserID;
    public $AdName;
    public $Description;
    public $MediaType;
    public $BidUnit;
    public $LinkUrl;
    public $LinkClickTrackerUrlsCommaSeparated;
    public $LinkFallback;
    public $TrackerUrlsCommaSeparated;
    public $JsLinkTracker;
    public $AllowedLayoutsCommaSeparated;
    public $AllowedAdUnitsCommaSeparated;
    public $MaxPlacements;
    public $MaxSequence;
    public $DateCreated;
    public $DateUpdated;
    
    
    /**
     * Retrieve UserID
     *
     * @return UserID
     */
    public function getUserID() {
    	return $this->UserID;
    }
    
    /**
     * Retrieve AdName
     *
     * @return AdName
     */
    public function getAdName() {
    	return $this->AdName;
    }
    
    /**
     * Retrieve Description
     *
     * @return Description
    */
    public function getDescription() {
    	return $this->Description;
    }
    
    /**
     * Retrieve MediaType
     *
     * @return MediaType
    */
    public function getMediaType() {
    	return $this->MediaType;
    }
    
    /**
     * Retrieve DateCreated
     *
     * @return DateCreated
     */
    public function getDateCreated() {
    	$time = strtotime($this->DateCreated);
    	return date("m/d/y g:i A", $time);
    }
    
    /**
     * Retrieve DateUpdated
     *
     * @return DateUpdated
     */
    public function getDateUpdated() {
    	$time = strtotime($this->DateUpdated);
    	return date("m/d/y g:i A", $time);
    }
}
