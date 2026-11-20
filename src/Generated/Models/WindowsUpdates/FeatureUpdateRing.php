<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FeatureUpdateRing extends Ring implements Parsable 
{
    /**
     * Instantiates a new FeatureUpdateRing and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.featureUpdateRing');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeatureUpdateRing
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeatureUpdateRing {
        return new FeatureUpdateRing();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isOfferOptional' => fn(ParseNode $n) => $o->setIsOfferOptional($n->getBooleanValue()),
            'offerDurationInDays' => fn(ParseNode $n) => $o->setOfferDurationInDays($n->getIntegerValue()),
            'offerIntervalInDays' => fn(ParseNode $n) => $o->setOfferIntervalInDays($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the isOfferOptional property value. Indicates whether the feature update is offered to end users as optional rather than required. Default is false.
     * @return bool|null
    */
    public function getIsOfferOptional(): ?bool {
        $val = $this->getBackingStore()->get('isOfferOptional');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOfferOptional'");
    }

    /**
     * Gets the offerDurationInDays property value. The total length of the gradual-rollout window, in days, from when the update is first offered to when the rollout completes. The minimum is 1. Only used when offerIntervalInDays is 1 or greater; ignored when offerIntervalInDays is 0. Default is 1.
     * @return int|null
    */
    public function getOfferDurationInDays(): ?int {
        $val = $this->getBackingStore()->get('offerDurationInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offerDurationInDays'");
    }

    /**
     * Gets the offerIntervalInDays property value. How often, in days, a new subset of devices is offered the update. Accepted range is 0 to 30. Set to 0 to offer the update to all devices at once. When the value is 1 or greater, the rollout advances one subset at each interval until every device has been offered the update. Must be less than or equal to offerDurationInDays. Default is 0.
     * @return int|null
    */
    public function getOfferIntervalInDays(): ?int {
        $val = $this->getBackingStore()->get('offerIntervalInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offerIntervalInDays'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isOfferOptional', $this->getIsOfferOptional());
        $writer->writeIntegerValue('offerDurationInDays', $this->getOfferDurationInDays());
        $writer->writeIntegerValue('offerIntervalInDays', $this->getOfferIntervalInDays());
    }

    /**
     * Sets the isOfferOptional property value. Indicates whether the feature update is offered to end users as optional rather than required. Default is false.
     * @param bool|null $value Value to set for the isOfferOptional property.
    */
    public function setIsOfferOptional(?bool $value): void {
        $this->getBackingStore()->set('isOfferOptional', $value);
    }

    /**
     * Sets the offerDurationInDays property value. The total length of the gradual-rollout window, in days, from when the update is first offered to when the rollout completes. The minimum is 1. Only used when offerIntervalInDays is 1 or greater; ignored when offerIntervalInDays is 0. Default is 1.
     * @param int|null $value Value to set for the offerDurationInDays property.
    */
    public function setOfferDurationInDays(?int $value): void {
        $this->getBackingStore()->set('offerDurationInDays', $value);
    }

    /**
     * Sets the offerIntervalInDays property value. How often, in days, a new subset of devices is offered the update. Accepted range is 0 to 30. Set to 0 to offer the update to all devices at once. When the value is 1 or greater, the rollout advances one subset at each interval until every device has been offered the update. Must be less than or equal to offerDurationInDays. Default is 0.
     * @param int|null $value Value to set for the offerIntervalInDays property.
    */
    public function setOfferIntervalInDays(?int $value): void {
        $this->getBackingStore()->set('offerIntervalInDays', $value);
    }

}
