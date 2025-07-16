<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DataCollectionInfo extends Entity implements Parsable 
{
    /**
     * Instantiates a new DataCollectionInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataCollectionInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataCollectionInfo {
        return new DataCollectionInfo();
    }

    /**
     * Gets the entitlements property value. The entitlements property
     * @return EntitlementsDataCollectionInfo|null
    */
    public function getEntitlements(): ?EntitlementsDataCollectionInfo {
        $val = $this->getBackingStore()->get('entitlements');
        if (is_null($val) || $val instanceof EntitlementsDataCollectionInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entitlements'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'entitlements' => fn(ParseNode $n) => $o->setEntitlements($n->getObjectValue([EntitlementsDataCollectionInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('entitlements', $this->getEntitlements());
    }

    /**
     * Sets the entitlements property value. The entitlements property
     * @param EntitlementsDataCollectionInfo|null $value Value to set for the entitlements property.
    */
    public function setEntitlements(?EntitlementsDataCollectionInfo $value): void {
        $this->getBackingStore()->set('entitlements', $value);
    }

}
