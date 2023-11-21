<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EntitlementsDataCollection extends EntitlementsDataCollectionInfo implements Parsable 
{
    /**
     * Instantiates a new entitlementsDataCollection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.entitlementsDataCollection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EntitlementsDataCollection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EntitlementsDataCollection {
        return new EntitlementsDataCollection();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastCollectionDateTime' => fn(ParseNode $n) => $o->setLastCollectionDateTime($n->getDateTimeValue()),
            'permissionsModificationCapability' => fn(ParseNode $n) => $o->setPermissionsModificationCapability($n->getEnumValue(PermissionsModificationCapability::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DataCollectionStatus::class)),
        ]);
    }

    /**
     * Gets the lastCollectionDateTime property value. Last transformation time of entitlements.
     * @return DateTime|null
    */
    public function getLastCollectionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastCollectionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastCollectionDateTime'");
    }

    /**
     * Gets the permissionsModificationCapability property value. The permissionsModificationCapability property
     * @return PermissionsModificationCapability|null
    */
    public function getPermissionsModificationCapability(): ?PermissionsModificationCapability {
        $val = $this->getBackingStore()->get('permissionsModificationCapability');
        if (is_null($val) || $val instanceof PermissionsModificationCapability) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionsModificationCapability'");
    }

    /**
     * Gets the status property value. The status property
     * @return DataCollectionStatus|null
    */
    public function getStatus(): ?DataCollectionStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof DataCollectionStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastCollectionDateTime', $this->getLastCollectionDateTime());
        $writer->writeEnumValue('permissionsModificationCapability', $this->getPermissionsModificationCapability());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the lastCollectionDateTime property value. Last transformation time of entitlements.
     * @param DateTime|null $value Value to set for the lastCollectionDateTime property.
    */
    public function setLastCollectionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastCollectionDateTime', $value);
    }

    /**
     * Sets the permissionsModificationCapability property value. The permissionsModificationCapability property
     * @param PermissionsModificationCapability|null $value Value to set for the permissionsModificationCapability property.
    */
    public function setPermissionsModificationCapability(?PermissionsModificationCapability $value): void {
        $this->getBackingStore()->set('permissionsModificationCapability', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param DataCollectionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DataCollectionStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
