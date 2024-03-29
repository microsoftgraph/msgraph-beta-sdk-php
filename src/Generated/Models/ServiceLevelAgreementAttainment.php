<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Date;

class ServiceLevelAgreementAttainment implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ServiceLevelAgreementAttainment and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceLevelAgreementAttainment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceLevelAgreementAttainment {
        return new ServiceLevelAgreementAttainment();
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
     * Gets the endDate property value. The end date for the calendar month for which SLA attainment is measured.
     * @return Date|null
    */
    public function getEndDate(): ?Date {
        $val = $this->getBackingStore()->get('endDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endDate' => fn(ParseNode $n) => $o->setEndDate($n->getDateValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'score' => fn(ParseNode $n) => $o->setScore($n->getFloatValue()),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getDateValue()),
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
     * Gets the score property value. The level of SLA attainment achieved by the tenant for the calendar month identified, as described in Microsoft Entra SLA performance. Values are truncated, not rounded, so the actual value is always equal to or higher than the displayed value. Values are expressed as a percentage of availability for the tenant.
     * @return float|null
    */
    public function getScore(): ?float {
        $val = $this->getBackingStore()->get('score');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'score'");
    }

    /**
     * Gets the startDate property value. The start date for the calendar month for which SLA attainment is measured.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateValue('endDate', $this->getEndDate());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeFloatValue('score', $this->getScore());
        $writer->writeDateValue('startDate', $this->getStartDate());
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
     * Sets the endDate property value. The end date for the calendar month for which SLA attainment is measured.
     * @param Date|null $value Value to set for the endDate property.
    */
    public function setEndDate(?Date $value): void {
        $this->getBackingStore()->set('endDate', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the score property value. The level of SLA attainment achieved by the tenant for the calendar month identified, as described in Microsoft Entra SLA performance. Values are truncated, not rounded, so the actual value is always equal to or higher than the displayed value. Values are expressed as a percentage of availability for the tenant.
     * @param float|null $value Value to set for the score property.
    */
    public function setScore(?float $value): void {
        $this->getBackingStore()->set('score', $value);
    }

    /**
     * Sets the startDate property value. The start date for the calendar month for which SLA attainment is measured.
     * @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value): void {
        $this->getBackingStore()->set('startDate', $value);
    }

}
