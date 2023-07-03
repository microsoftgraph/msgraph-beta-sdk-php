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

class PositionDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PositionDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PositionDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PositionDetail {
        return new PositionDetail();
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
     * Gets the company property value. Detail about the company or employer.
     * @return CompanyDetail|null
    */
    public function getCompany(): ?CompanyDetail {
        $val = $this->getBackingStore()->get('company');
        if (is_null($val) || $val instanceof CompanyDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'company'");
    }

    /**
     * Gets the description property value. Description of the position in question.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the endMonthYear property value. When the position ended.
     * @return Date|null
    */
    public function getEndMonthYear(): ?Date {
        $val = $this->getBackingStore()->get('endMonthYear');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endMonthYear'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'company' => fn(ParseNode $n) => $o->setCompany($n->getObjectValue([CompanyDetail::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'endMonthYear' => fn(ParseNode $n) => $o->setEndMonthYear($n->getDateValue()),
            'jobTitle' => fn(ParseNode $n) => $o->setJobTitle($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getStringValue()),
            'startMonthYear' => fn(ParseNode $n) => $o->setStartMonthYear($n->getDateValue()),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getStringValue()),
        ];
    }

    /**
     * Gets the jobTitle property value. The title held when in that position.
     * @return string|null
    */
    public function getJobTitle(): ?string {
        $val = $this->getBackingStore()->get('jobTitle');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'jobTitle'");
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
     * Gets the role property value. The role the position entailed.
     * @return string|null
    */
    public function getRole(): ?string {
        $val = $this->getBackingStore()->get('role');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'role'");
    }

    /**
     * Gets the startMonthYear property value. The start month and year of the position.
     * @return Date|null
    */
    public function getStartMonthYear(): ?Date {
        $val = $this->getBackingStore()->get('startMonthYear');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMonthYear'");
    }

    /**
     * Gets the summary property value. Short summary of the position.
     * @return string|null
    */
    public function getSummary(): ?string {
        $val = $this->getBackingStore()->get('summary');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'summary'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('company', $this->getCompany());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeDateValue('endMonthYear', $this->getEndMonthYear());
        $writer->writeStringValue('jobTitle', $this->getJobTitle());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('role', $this->getRole());
        $writer->writeDateValue('startMonthYear', $this->getStartMonthYear());
        $writer->writeStringValue('summary', $this->getSummary());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the company property value. Detail about the company or employer.
     * @param CompanyDetail|null $value Value to set for the company property.
    */
    public function setCompany(?CompanyDetail $value): void {
        $this->getBackingStore()->set('company', $value);
    }

    /**
     * Sets the description property value. Description of the position in question.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the endMonthYear property value. When the position ended.
     * @param Date|null $value Value to set for the endMonthYear property.
    */
    public function setEndMonthYear(?Date $value): void {
        $this->getBackingStore()->set('endMonthYear', $value);
    }

    /**
     * Sets the jobTitle property value. The title held when in that position.
     * @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value): void {
        $this->getBackingStore()->set('jobTitle', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the role property value. The role the position entailed.
     * @param string|null $value Value to set for the role property.
    */
    public function setRole(?string $value): void {
        $this->getBackingStore()->set('role', $value);
    }

    /**
     * Sets the startMonthYear property value. The start month and year of the position.
     * @param Date|null $value Value to set for the startMonthYear property.
    */
    public function setStartMonthYear(?Date $value): void {
        $this->getBackingStore()->set('startMonthYear', $value);
    }

    /**
     * Sets the summary property value. Short summary of the position.
     * @param string|null $value Value to set for the summary property.
    */
    public function setSummary(?string $value): void {
        $this->getBackingStore()->set('summary', $value);
    }

}
