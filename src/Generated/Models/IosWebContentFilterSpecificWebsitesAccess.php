<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosWebContentFilterSpecificWebsitesAccess extends IosWebContentFilterBase implements Parsable 
{
    /**
     * @var array<IosBookmark>|null $specificWebsitesOnly URL bookmarks which will be installed into built-in browser and user is only allowed to access websites through bookmarks. This collection can contain a maximum of 500 elements.
    */
    private ?array $specificWebsitesOnly = null;
    
    /**
     * @var array<IosBookmark>|null $websiteList URL bookmarks which will be installed into built-in browser and user is only allowed to access websites through bookmarks. This collection can contain a maximum of 500 elements.
    */
    private ?array $websiteList = null;
    
    /**
     * Instantiates a new IosWebContentFilterSpecificWebsitesAccess and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosWebContentFilterSpecificWebsitesAccess');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosWebContentFilterSpecificWebsitesAccess
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosWebContentFilterSpecificWebsitesAccess {
        return new IosWebContentFilterSpecificWebsitesAccess();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'specificWebsitesOnly' => fn(ParseNode $n) => $o->setSpecificWebsitesOnly($n->getCollectionOfObjectValues([IosBookmark::class, 'createFromDiscriminatorValue'])),
            'websiteList' => fn(ParseNode $n) => $o->setWebsiteList($n->getCollectionOfObjectValues([IosBookmark::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the specificWebsitesOnly property value. URL bookmarks which will be installed into built-in browser and user is only allowed to access websites through bookmarks. This collection can contain a maximum of 500 elements.
     * @return array<IosBookmark>|null
    */
    public function getSpecificWebsitesOnly(): ?array {
        return $this->specificWebsitesOnly;
    }

    /**
     * Gets the websiteList property value. URL bookmarks which will be installed into built-in browser and user is only allowed to access websites through bookmarks. This collection can contain a maximum of 500 elements.
     * @return array<IosBookmark>|null
    */
    public function getWebsiteList(): ?array {
        return $this->websiteList;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('specificWebsitesOnly', $this->specificWebsitesOnly);
        $writer->writeCollectionOfObjectValues('websiteList', $this->websiteList);
    }

    /**
     * Sets the specificWebsitesOnly property value. URL bookmarks which will be installed into built-in browser and user is only allowed to access websites through bookmarks. This collection can contain a maximum of 500 elements.
     *  @param array<IosBookmark>|null $value Value to set for the specificWebsitesOnly property.
    */
    public function setSpecificWebsitesOnly(?array $value ): void {
        $this->specificWebsitesOnly = $value;
    }

    /**
     * Sets the websiteList property value. URL bookmarks which will be installed into built-in browser and user is only allowed to access websites through bookmarks. This collection can contain a maximum of 500 elements.
     *  @param array<IosBookmark>|null $value Value to set for the websiteList property.
    */
    public function setWebsiteList(?array $value ): void {
        $this->websiteList = $value;
    }

}
