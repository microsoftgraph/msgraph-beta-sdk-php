<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TrainingNotificationDelivery implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TrainingNotificationDelivery and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrainingNotificationDelivery
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrainingNotificationDelivery {
        return new TrainingNotificationDelivery();
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
     * Gets the failedMessageDeliveryCount property value. The number of users to whom mails couldn't be delivered.
     * @return int|null
    */
    public function getFailedMessageDeliveryCount(): ?int {
        $val = $this->getBackingStore()->get('failedMessageDeliveryCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedMessageDeliveryCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failedMessageDeliveryCount' => fn(ParseNode $n) => $o->setFailedMessageDeliveryCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resolvedTargetsCount' => fn(ParseNode $n) => $o->setResolvedTargetsCount($n->getIntegerValue()),
            'successfulMessageDeliveryCount' => fn(ParseNode $n) => $o->setSuccessfulMessageDeliveryCount($n->getIntegerValue()),
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
     * Gets the resolvedTargetsCount property value. The number of users whose email address was successfully resolved from target users.
     * @return int|null
    */
    public function getResolvedTargetsCount(): ?int {
        $val = $this->getBackingStore()->get('resolvedTargetsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resolvedTargetsCount'");
    }

    /**
     * Gets the successfulMessageDeliveryCount property value. The number of users who received a mail while the training campaign was in the 'in progress' state.
     * @return int|null
    */
    public function getSuccessfulMessageDeliveryCount(): ?int {
        $val = $this->getBackingStore()->get('successfulMessageDeliveryCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulMessageDeliveryCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('failedMessageDeliveryCount', $this->getFailedMessageDeliveryCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('resolvedTargetsCount', $this->getResolvedTargetsCount());
        $writer->writeIntegerValue('successfulMessageDeliveryCount', $this->getSuccessfulMessageDeliveryCount());
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
     * Sets the failedMessageDeliveryCount property value. The number of users to whom mails couldn't be delivered.
     * @param int|null $value Value to set for the failedMessageDeliveryCount property.
    */
    public function setFailedMessageDeliveryCount(?int $value): void {
        $this->getBackingStore()->set('failedMessageDeliveryCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the resolvedTargetsCount property value. The number of users whose email address was successfully resolved from target users.
     * @param int|null $value Value to set for the resolvedTargetsCount property.
    */
    public function setResolvedTargetsCount(?int $value): void {
        $this->getBackingStore()->set('resolvedTargetsCount', $value);
    }

    /**
     * Sets the successfulMessageDeliveryCount property value. The number of users who received a mail while the training campaign was in the 'in progress' state.
     * @param int|null $value Value to set for the successfulMessageDeliveryCount property.
    */
    public function setSuccessfulMessageDeliveryCount(?int $value): void {
        $this->getBackingStore()->set('successfulMessageDeliveryCount', $value);
    }

}
