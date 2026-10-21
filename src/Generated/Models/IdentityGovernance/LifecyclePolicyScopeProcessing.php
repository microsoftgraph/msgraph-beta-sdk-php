<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class LifecyclePolicyScopeProcessing implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new LifecyclePolicyScopeProcessing and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LifecyclePolicyScopeProcessing
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LifecyclePolicyScopeProcessing {
        return new LifecyclePolicyScopeProcessing();
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
     * Gets the currentStartedDateTime property value. The date and time when the current scope-processing operation started.
     * @return DateTime|null
    */
    public function getCurrentStartedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('currentStartedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currentStartedDateTime'");
    }

    /**
     * Gets the currentStatus property value. The currentStatus property
     * @return LifecyclePolicyScopeProcessingStatus|null
    */
    public function getCurrentStatus(): ?LifecyclePolicyScopeProcessingStatus {
        $val = $this->getBackingStore()->get('currentStatus');
        if (is_null($val) || $val instanceof LifecyclePolicyScopeProcessingStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currentStatus'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currentStartedDateTime' => fn(ParseNode $n) => $o->setCurrentStartedDateTime($n->getDateTimeValue()),
            'currentStatus' => fn(ParseNode $n) => $o->setCurrentStatus($n->getEnumValue(LifecyclePolicyScopeProcessingStatus::class)),
            'lastSuccessfulProcessingDateTime' => fn(ParseNode $n) => $o->setLastSuccessfulProcessingDateTime($n->getDateTimeValue()),
            'latestAttempt' => fn(ParseNode $n) => $o->setLatestAttempt($n->getObjectValue([LifecyclePolicyScopeProcessingAttempt::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the lastSuccessfulProcessingDateTime property value. The date and time when scope processing last completed successfully.
     * @return DateTime|null
    */
    public function getLastSuccessfulProcessingDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSuccessfulProcessingDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSuccessfulProcessingDateTime'");
    }

    /**
     * Gets the latestAttempt property value. The latest retained scope-processing attempt.
     * @return LifecyclePolicyScopeProcessingAttempt|null
    */
    public function getLatestAttempt(): ?LifecyclePolicyScopeProcessingAttempt {
        $val = $this->getBackingStore()->get('latestAttempt');
        if (is_null($val) || $val instanceof LifecyclePolicyScopeProcessingAttempt) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'latestAttempt'");
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
        $writer->writeDateTimeValue('currentStartedDateTime', $this->getCurrentStartedDateTime());
        $writer->writeEnumValue('currentStatus', $this->getCurrentStatus());
        $writer->writeDateTimeValue('lastSuccessfulProcessingDateTime', $this->getLastSuccessfulProcessingDateTime());
        $writer->writeObjectValue('latestAttempt', $this->getLatestAttempt());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the currentStartedDateTime property value. The date and time when the current scope-processing operation started.
     * @param DateTime|null $value Value to set for the currentStartedDateTime property.
    */
    public function setCurrentStartedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('currentStartedDateTime', $value);
    }

    /**
     * Sets the currentStatus property value. The currentStatus property
     * @param LifecyclePolicyScopeProcessingStatus|null $value Value to set for the currentStatus property.
    */
    public function setCurrentStatus(?LifecyclePolicyScopeProcessingStatus $value): void {
        $this->getBackingStore()->set('currentStatus', $value);
    }

    /**
     * Sets the lastSuccessfulProcessingDateTime property value. The date and time when scope processing last completed successfully.
     * @param DateTime|null $value Value to set for the lastSuccessfulProcessingDateTime property.
    */
    public function setLastSuccessfulProcessingDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSuccessfulProcessingDateTime', $value);
    }

    /**
     * Sets the latestAttempt property value. The latest retained scope-processing attempt.
     * @param LifecyclePolicyScopeProcessingAttempt|null $value Value to set for the latestAttempt property.
    */
    public function setLatestAttempt(?LifecyclePolicyScopeProcessingAttempt $value): void {
        $this->getBackingStore()->set('latestAttempt', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
