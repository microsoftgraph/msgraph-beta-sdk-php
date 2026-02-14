<?php

namespace Microsoft\Graph\Beta\Generated\Models\CloudLicensing;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Date;

class Subscription implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Subscription and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Subscription
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Subscription {
        return new Subscription();
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
            'nextLifecycleDate' => fn(ParseNode $n) => $o->setNextLifecycleDate($n->getDateValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getDateValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(SubscriptionState::class)),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getEnumValue(SubscriptionTags::class)),
        ];
    }

    /**
     * Gets the nextLifecycleDate property value. The date on which the current state transitions to the next state.
     * @return Date|null
    */
    public function getNextLifecycleDate(): ?Date {
        $val = $this->getBackingStore()->get('nextLifecycleDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nextLifecycleDate'");
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
     * Gets the startDate property value. The date when the subscription started.
     * @return Date|null
    */
    public function getStartDate(): ?Date {
        $val = $this->getBackingStore()->get('startDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDate'");
    }

    /**
     * Gets the state property value. The state property
     * @return SubscriptionState|null
    */
    public function getState(): ?SubscriptionState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof SubscriptionState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the subscriptionId property value. Identifier for the subscription object.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        $val = $this->getBackingStore()->get('subscriptionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptionId'");
    }

    /**
     * Gets the tags property value. The tags property
     * @return SubscriptionTags|null
    */
    public function getTags(): ?SubscriptionTags {
        $val = $this->getBackingStore()->get('tags');
        if (is_null($val) || $val instanceof SubscriptionTags) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateValue('nextLifecycleDate', $this->getNextLifecycleDate());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateValue('startDate', $this->getStartDate());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeEnumValue('tags', $this->getTags());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the nextLifecycleDate property value. The date on which the current state transitions to the next state.
     * @param Date|null $value Value to set for the nextLifecycleDate property.
    */
    public function setNextLifecycleDate(?Date $value): void {
        $this->getBackingStore()->set('nextLifecycleDate', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the startDate property value. The date when the subscription started.
     * @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value): void {
        $this->getBackingStore()->set('startDate', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param SubscriptionState|null $value Value to set for the state property.
    */
    public function setState(?SubscriptionState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the subscriptionId property value. Identifier for the subscription object.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('subscriptionId', $value);
    }

    /**
     * Sets the tags property value. The tags property
     * @param SubscriptionTags|null $value Value to set for the tags property.
    */
    public function setTags(?SubscriptionTags $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

}
