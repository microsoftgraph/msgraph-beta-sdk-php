<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RunDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new runDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RunDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RunDetails {
        return new RunDetails();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the errorCode property value. The errorCode property
     * @return HuntingRuleErrorCode|null
    */
    public function getErrorCode(): ?HuntingRuleErrorCode {
        $val = $this->getBackingStore()->get('errorCode');
        if (is_null($val) || $val instanceof HuntingRuleErrorCode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCode'");
    }

    /**
     * Gets the failureReason property value. The failureReason property
     * @return string|null
    */
    public function getFailureReason(): ?string {
        $val = $this->getBackingStore()->get('failureReason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failureReason'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getEnumValue(HuntingRuleErrorCode::class)),
            'failureReason' => fn(ParseNode $n) => $o->setFailureReason($n->getStringValue()),
            'lastRunDateTime' => fn(ParseNode $n) => $o->setLastRunDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(HuntingRuleRunStatus::class)),
        ];
    }

    /**
     * Gets the lastRunDateTime property value. The lastRunDateTime property
     * @return DateTime|null
    */
    public function getLastRunDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastRunDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastRunDateTime'");
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
     * Gets the status property value. The status property
     * @return HuntingRuleRunStatus|null
    */
    public function getStatus(): ?HuntingRuleRunStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof HuntingRuleRunStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('errorCode', $this->getErrorCode());
        $writer->writeStringValue('failureReason', $this->getFailureReason());
        $writer->writeDateTimeValue('lastRunDateTime', $this->getLastRunDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the errorCode property value. The errorCode property
     * @param HuntingRuleErrorCode|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?HuntingRuleErrorCode $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the failureReason property value. The failureReason property
     * @param string|null $value Value to set for the failureReason property.
    */
    public function setFailureReason(?string $value): void {
        $this->getBackingStore()->set('failureReason', $value);
    }

    /**
     * Sets the lastRunDateTime property value. The lastRunDateTime property
     * @param DateTime|null $value Value to set for the lastRunDateTime property.
    */
    public function setLastRunDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRunDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param HuntingRuleRunStatus|null $value Value to set for the status property.
    */
    public function setStatus(?HuntingRuleRunStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
