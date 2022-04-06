<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsUpdateCatalogItem extends Entity 
{
    /** @var string|null $displayName The display name for the catalog item. */
    private ?string $displayName = null;
    
    /** @var DateTime|null $endOfSupportDate The last supported date for a catalog item */
    private ?DateTime $endOfSupportDate = null;
    
    /** @var DateTime|null $releaseDateTime The date the catalog item was released */
    private ?DateTime $releaseDateTime = null;
    
    /**
     * Instantiates a new windowsUpdateCatalogItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsUpdateCatalogItem
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WindowsUpdateCatalogItem {
        return new WindowsUpdateCatalogItem();
    }

    /**
     * Gets the displayName property value. The display name for the catalog item.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the endOfSupportDate property value. The last supported date for a catalog item
     * @return DateTime|null
    */
    public function getEndOfSupportDate(): ?DateTime {
        return $this->endOfSupportDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'endOfSupportDate' => function (self $o, ParseNode $n) { $o->setEndOfSupportDate($n->getDateTimeValue()); },
            'releaseDateTime' => function (self $o, ParseNode $n) { $o->setReleaseDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the releaseDateTime property value. The date the catalog item was released
     * @return DateTime|null
    */
    public function getReleaseDateTime(): ?DateTime {
        return $this->releaseDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('endOfSupportDate', $this->endOfSupportDate);
        $writer->writeDateTimeValue('releaseDateTime', $this->releaseDateTime);
    }

    /**
     * Sets the displayName property value. The display name for the catalog item.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the endOfSupportDate property value. The last supported date for a catalog item
     *  @param DateTime|null $value Value to set for the endOfSupportDate property.
    */
    public function setEndOfSupportDate(?DateTime $value ): void {
        $this->endOfSupportDate = $value;
    }

    /**
     * Sets the releaseDateTime property value. The date the catalog item was released
     *  @param DateTime|null $value Value to set for the releaseDateTime property.
    */
    public function setReleaseDateTime(?DateTime $value ): void {
        $this->releaseDateTime = $value;
    }

}
