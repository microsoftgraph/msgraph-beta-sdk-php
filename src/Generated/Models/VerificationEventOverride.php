<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Details of an administrative or programmatic override applied to a verification event.
*/
class VerificationEventOverride implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new VerificationEventOverride and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerificationEventOverride
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VerificationEventOverride {
        return new VerificationEventOverride();
    }

    /**
     * Gets the actorId property value. The object ID of the actor who applied the override. Set by the service from the caller's identity. Read-only.
     * @return string|null
    */
    public function getActorId(): ?string {
        $val = $this->getBackingStore()->get('actorId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actorId'");
    }

    /**
     * Gets the actorType property value. The actorType property
     * @return VerificationActorType|null
    */
    public function getActorType(): ?VerificationActorType {
        $val = $this->getBackingStore()->get('actorType');
        if (is_null($val) || $val instanceof VerificationActorType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actorType'");
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actorId' => fn(ParseNode $n) => $o->setActorId($n->getStringValue()),
            'actorType' => fn(ParseNode $n) => $o->setActorType($n->getEnumValue(VerificationActorType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'overriddenDateTime' => fn(ParseNode $n) => $o->setOverriddenDateTime($n->getDateTimeValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
        ];
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
     * Gets the overriddenDateTime property value. The date and time when the override was applied. Set by the service. Read-only.
     * @return DateTime|null
    */
    public function getOverriddenDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('overriddenDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'overriddenDateTime'");
    }

    /**
     * Gets the reason property value. The explanation for the override, such as In-person identity proofing confirmed by help desk. Maximum 500 characters.
     * @return string|null
    */
    public function getReason(): ?string {
        $val = $this->getBackingStore()->get('reason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reason'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('actorType', $this->getActorType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actorId property value. The object ID of the actor who applied the override. Set by the service from the caller's identity. Read-only.
     * @param string|null $value Value to set for the actorId property.
    */
    public function setActorId(?string $value): void {
        $this->getBackingStore()->set('actorId', $value);
    }

    /**
     * Sets the actorType property value. The actorType property
     * @param VerificationActorType|null $value Value to set for the actorType property.
    */
    public function setActorType(?VerificationActorType $value): void {
        $this->getBackingStore()->set('actorType', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the overriddenDateTime property value. The date and time when the override was applied. Set by the service. Read-only.
     * @param DateTime|null $value Value to set for the overriddenDateTime property.
    */
    public function setOverriddenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('overriddenDateTime', $value);
    }

    /**
     * Sets the reason property value. The explanation for the override, such as In-person identity proofing confirmed by help desk. Maximum 500 characters.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->getBackingStore()->set('reason', $value);
    }

}
