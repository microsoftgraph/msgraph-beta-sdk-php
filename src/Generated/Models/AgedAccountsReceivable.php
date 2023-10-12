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

class AgedAccountsReceivable implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new agedAccountsReceivable and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgedAccountsReceivable
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgedAccountsReceivable {
        return new AgedAccountsReceivable();
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
     * Gets the agedAsOfDate property value. The agedAsOfDate property
     * @return Date|null
    */
    public function getAgedAsOfDate(): ?Date {
        $val = $this->getBackingStore()->get('agedAsOfDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agedAsOfDate'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the balanceDue property value. The balanceDue property
     * @return string|null
    */
    public function getBalanceDue(): ?string {
        $val = $this->getBackingStore()->get('balanceDue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'balanceDue'");
    }

    /**
     * Gets the currencyCode property value. The currencyCode property
     * @return string|null
    */
    public function getCurrencyCode(): ?string {
        $val = $this->getBackingStore()->get('currencyCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currencyCode'");
    }

    /**
     * Gets the currentAmount property value. The currentAmount property
     * @return string|null
    */
    public function getCurrentAmount(): ?string {
        $val = $this->getBackingStore()->get('currentAmount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currentAmount'");
    }

    /**
     * Gets the customerId property value. The customerId property
     * @return string|null
    */
    public function getCustomerId(): ?string {
        $val = $this->getBackingStore()->get('customerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerId'");
    }

    /**
     * Gets the customerNumber property value. The customerNumber property
     * @return string|null
    */
    public function getCustomerNumber(): ?string {
        $val = $this->getBackingStore()->get('customerNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerNumber'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'agedAsOfDate' => fn(ParseNode $n) => $o->setAgedAsOfDate($n->getDateValue()),
            'balanceDue' => fn(ParseNode $n) => $o->setBalanceDue($n->getStringValue()),
            'currencyCode' => fn(ParseNode $n) => $o->setCurrencyCode($n->getStringValue()),
            'currentAmount' => fn(ParseNode $n) => $o->setCurrentAmount($n->getStringValue()),
            'customerId' => fn(ParseNode $n) => $o->setCustomerId($n->getStringValue()),
            'customerNumber' => fn(ParseNode $n) => $o->setCustomerNumber($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'period1Amount' => fn(ParseNode $n) => $o->setPeriod1Amount($n->getStringValue()),
            'period2Amount' => fn(ParseNode $n) => $o->setPeriod2Amount($n->getStringValue()),
            'period3Amount' => fn(ParseNode $n) => $o->setPeriod3Amount($n->getStringValue()),
            'periodLengthFilter' => fn(ParseNode $n) => $o->setPeriodLengthFilter($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
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
     * Gets the period1Amount property value. The period1Amount property
     * @return string|null
    */
    public function getPeriod1Amount(): ?string {
        $val = $this->getBackingStore()->get('period1Amount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'period1Amount'");
    }

    /**
     * Gets the period2Amount property value. The period2Amount property
     * @return string|null
    */
    public function getPeriod2Amount(): ?string {
        $val = $this->getBackingStore()->get('period2Amount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'period2Amount'");
    }

    /**
     * Gets the period3Amount property value. The period3Amount property
     * @return string|null
    */
    public function getPeriod3Amount(): ?string {
        $val = $this->getBackingStore()->get('period3Amount');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'period3Amount'");
    }

    /**
     * Gets the periodLengthFilter property value. The periodLengthFilter property
     * @return string|null
    */
    public function getPeriodLengthFilter(): ?string {
        $val = $this->getBackingStore()->get('periodLengthFilter');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'periodLengthFilter'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateValue('agedAsOfDate', $this->getAgedAsOfDate());
        $writer->writeStringValue('balanceDue', $this->getBalanceDue());
        $writer->writeStringValue('currencyCode', $this->getCurrencyCode());
        $writer->writeStringValue('currentAmount', $this->getCurrentAmount());
        $writer->writeStringValue('customerId', $this->getCustomerId());
        $writer->writeStringValue('customerNumber', $this->getCustomerNumber());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('period1Amount', $this->getPeriod1Amount());
        $writer->writeStringValue('period2Amount', $this->getPeriod2Amount());
        $writer->writeStringValue('period3Amount', $this->getPeriod3Amount());
        $writer->writeStringValue('periodLengthFilter', $this->getPeriodLengthFilter());
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
     * Sets the agedAsOfDate property value. The agedAsOfDate property
     * @param Date|null $value Value to set for the agedAsOfDate property.
    */
    public function setAgedAsOfDate(?Date $value): void {
        $this->getBackingStore()->set('agedAsOfDate', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the balanceDue property value. The balanceDue property
     * @param string|null $value Value to set for the balanceDue property.
    */
    public function setBalanceDue(?string $value): void {
        $this->getBackingStore()->set('balanceDue', $value);
    }

    /**
     * Sets the currencyCode property value. The currencyCode property
     * @param string|null $value Value to set for the currencyCode property.
    */
    public function setCurrencyCode(?string $value): void {
        $this->getBackingStore()->set('currencyCode', $value);
    }

    /**
     * Sets the currentAmount property value. The currentAmount property
     * @param string|null $value Value to set for the currentAmount property.
    */
    public function setCurrentAmount(?string $value): void {
        $this->getBackingStore()->set('currentAmount', $value);
    }

    /**
     * Sets the customerId property value. The customerId property
     * @param string|null $value Value to set for the customerId property.
    */
    public function setCustomerId(?string $value): void {
        $this->getBackingStore()->set('customerId', $value);
    }

    /**
     * Sets the customerNumber property value. The customerNumber property
     * @param string|null $value Value to set for the customerNumber property.
    */
    public function setCustomerNumber(?string $value): void {
        $this->getBackingStore()->set('customerNumber', $value);
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the period1Amount property value. The period1Amount property
     * @param string|null $value Value to set for the period1Amount property.
    */
    public function setPeriod1Amount(?string $value): void {
        $this->getBackingStore()->set('period1Amount', $value);
    }

    /**
     * Sets the period2Amount property value. The period2Amount property
     * @param string|null $value Value to set for the period2Amount property.
    */
    public function setPeriod2Amount(?string $value): void {
        $this->getBackingStore()->set('period2Amount', $value);
    }

    /**
     * Sets the period3Amount property value. The period3Amount property
     * @param string|null $value Value to set for the period3Amount property.
    */
    public function setPeriod3Amount(?string $value): void {
        $this->getBackingStore()->set('period3Amount', $value);
    }

    /**
     * Sets the periodLengthFilter property value. The periodLengthFilter property
     * @param string|null $value Value to set for the periodLengthFilter property.
    */
    public function setPeriodLengthFilter(?string $value): void {
        $this->getBackingStore()->set('periodLengthFilter', $value);
    }

}
