<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosWebContentFilterSpecificWebsitesAccess extends IosWebContentFilterBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
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
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'specificWebsitesOnly' => function (ParseNode $n) use ($o) { $o->setSpecificWebsitesOnly($n->getCollectionOfObjectValues(array(IosBookmark::class, 'createFromDiscriminatorValue'))); },
            'websiteList' => function (ParseNode $n) use ($o) { $o->setWebsiteList($n->getCollectionOfObjectValues(array(IosBookmark::class, 'createFromDiscriminatorValue'))); },
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
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
