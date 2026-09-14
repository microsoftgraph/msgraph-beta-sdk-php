<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IdentityInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IdentityInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityInfo {
        return new IdentityInfo();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the anchor property value. The anchor property that uniquely identifies the identity in its directory.
     * @return AttributeInfo|null
    */
    public function getAnchor(): ?AttributeInfo {
        $val = $this->getBackingStore()->get('anchor');
        if (is_null($val) || $val instanceof AttributeInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'anchor'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the details property value. Additional details about the identity.
     * @return DetailsInfo|null
    */
    public function getDetails(): ?DetailsInfo {
        $val = $this->getBackingStore()->get('details');
        if (is_null($val) || $val instanceof DetailsInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'details'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'anchor' => fn(ParseNode $n) => $o->setAnchor($n->getObjectValue([AttributeInfo::class, 'createFromDiscriminatorValue'])),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getObjectValue([DetailsInfo::class, 'createFromDiscriminatorValue'])),
            'identityType' => fn(ParseNode $n) => $o->setIdentityType($n->getStringValue()),
            'matchingProperty' => fn(ParseNode $n) => $o->setMatchingProperty($n->getObjectValue([AttributeInfo::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the identityType property value. The type of identity, such as user.
     * @return string|null
    */
    public function getIdentityType(): ?string {
        $val = $this->getBackingStore()->get('identityType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityType'");
    }

    /**
     * Gets the matchingProperty property value. The property used to match identities across directories.
     * @return AttributeInfo|null
    */
    public function getMatchingProperty(): ?AttributeInfo {
        $val = $this->getBackingStore()->get('matchingProperty');
        if (is_null($val) || $val instanceof AttributeInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchingProperty'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('anchor', $this->getAnchor());
        $writer->writeObjectValue('details', $this->getDetails());
        $writer->writeStringValue('identityType', $this->getIdentityType());
        $writer->writeObjectValue('matchingProperty', $this->getMatchingProperty());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the anchor property value. The anchor property that uniquely identifies the identity in its directory.
     * @param AttributeInfo|null $value Value to set for the anchor property.
    */
    public function setAnchor(?AttributeInfo $value): void {
        $this->getBackingStore()->set('anchor', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the details property value. Additional details about the identity.
     * @param DetailsInfo|null $value Value to set for the details property.
    */
    public function setDetails(?DetailsInfo $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the identityType property value. The type of identity, such as user.
     * @param string|null $value Value to set for the identityType property.
    */
    public function setIdentityType(?string $value): void {
        $this->getBackingStore()->set('identityType', $value);
    }

    /**
     * Sets the matchingProperty property value. The property used to match identities across directories.
     * @param AttributeInfo|null $value Value to set for the matchingProperty property.
    */
    public function setMatchingProperty(?AttributeInfo $value): void {
        $this->getBackingStore()->set('matchingProperty', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
