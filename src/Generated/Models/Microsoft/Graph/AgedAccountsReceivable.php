<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class AgedAccountsReceivable extends Entity 
{
    /** @var Date|null $agedAsOfDate  */
    private ?Date $agedAsOfDate = null;
    
    /** @var float|null $balanceDue  */
    private ?float $balanceDue = null;
    
    /** @var string|null $currencyCode  */
    private ?string $currencyCode = null;
    
    /** @var float|null $currentAmount  */
    private ?float $currentAmount = null;
    
    /** @var string|null $customerNumber  */
    private ?string $customerNumber = null;
    
    /** @var string|null $name  */
    private ?string $name = null;
    
    /** @var float|null $period1Amount  */
    private ?float $period1Amount = null;
    
    /** @var float|null $period2Amount  */
    private ?float $period2Amount = null;
    
    /** @var float|null $period3Amount  */
    private ?float $period3Amount = null;
    
    /** @var string|null $periodLengthFilter  */
    private ?string $periodLengthFilter = null;
    
    /**
     * Instantiates a new agedAccountsReceivable and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgedAccountsReceivable
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AgedAccountsReceivable {
        return new AgedAccountsReceivable();
    }

    /**
     * Gets the agedAsOfDate property value. 
     * @return Date|null
    */
    public function getAgedAsOfDate(): ?Date {
        return $this->agedAsOfDate;
    }

    /**
     * Gets the balanceDue property value. 
     * @return float|null
    */
    public function getBalanceDue(): ?float {
        return $this->balanceDue;
    }

    /**
     * Gets the currencyCode property value. 
     * @return string|null
    */
    public function getCurrencyCode(): ?string {
        return $this->currencyCode;
    }

    /**
     * Gets the currentAmount property value. 
     * @return float|null
    */
    public function getCurrentAmount(): ?float {
        return $this->currentAmount;
    }

    /**
     * Gets the customerNumber property value. 
     * @return string|null
    */
    public function getCustomerNumber(): ?string {
        return $this->customerNumber;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'agedAsOfDate' => function (self $o, ParseNode $n) { $o->setAgedAsOfDate($n->getDateValue()); },
            'balanceDue' => function (self $o, ParseNode $n) { $o->setBalanceDue($n->getFloatValue()); },
            'currencyCode' => function (self $o, ParseNode $n) { $o->setCurrencyCode($n->getStringValue()); },
            'currentAmount' => function (self $o, ParseNode $n) { $o->setCurrentAmount($n->getFloatValue()); },
            'customerNumber' => function (self $o, ParseNode $n) { $o->setCustomerNumber($n->getStringValue()); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'period1Amount' => function (self $o, ParseNode $n) { $o->setPeriod1Amount($n->getFloatValue()); },
            'period2Amount' => function (self $o, ParseNode $n) { $o->setPeriod2Amount($n->getFloatValue()); },
            'period3Amount' => function (self $o, ParseNode $n) { $o->setPeriod3Amount($n->getFloatValue()); },
            'periodLengthFilter' => function (self $o, ParseNode $n) { $o->setPeriodLengthFilter($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the name property value. 
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the period1Amount property value. 
     * @return float|null
    */
    public function getPeriod1Amount(): ?float {
        return $this->period1Amount;
    }

    /**
     * Gets the period2Amount property value. 
     * @return float|null
    */
    public function getPeriod2Amount(): ?float {
        return $this->period2Amount;
    }

    /**
     * Gets the period3Amount property value. 
     * @return float|null
    */
    public function getPeriod3Amount(): ?float {
        return $this->period3Amount;
    }

    /**
     * Gets the periodLengthFilter property value. 
     * @return string|null
    */
    public function getPeriodLengthFilter(): ?string {
        return $this->periodLengthFilter;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateValue('agedAsOfDate', $this->agedAsOfDate);
        $writer->writeFloatValue('balanceDue', $this->balanceDue);
        $writer->writeStringValue('currencyCode', $this->currencyCode);
        $writer->writeFloatValue('currentAmount', $this->currentAmount);
        $writer->writeStringValue('customerNumber', $this->customerNumber);
        $writer->writeStringValue('name', $this->name);
        $writer->writeFloatValue('period1Amount', $this->period1Amount);
        $writer->writeFloatValue('period2Amount', $this->period2Amount);
        $writer->writeFloatValue('period3Amount', $this->period3Amount);
        $writer->writeStringValue('periodLengthFilter', $this->periodLengthFilter);
    }

    /**
     * Sets the agedAsOfDate property value. 
     *  @param Date|null $value Value to set for the agedAsOfDate property.
    */
    public function setAgedAsOfDate(?Date $value ): void {
        $this->agedAsOfDate = $value;
    }

    /**
     * Sets the balanceDue property value. 
     *  @param float|null $value Value to set for the balanceDue property.
    */
    public function setBalanceDue(?float $value ): void {
        $this->balanceDue = $value;
    }

    /**
     * Sets the currencyCode property value. 
     *  @param string|null $value Value to set for the currencyCode property.
    */
    public function setCurrencyCode(?string $value ): void {
        $this->currencyCode = $value;
    }

    /**
     * Sets the currentAmount property value. 
     *  @param float|null $value Value to set for the currentAmount property.
    */
    public function setCurrentAmount(?float $value ): void {
        $this->currentAmount = $value;
    }

    /**
     * Sets the customerNumber property value. 
     *  @param string|null $value Value to set for the customerNumber property.
    */
    public function setCustomerNumber(?string $value ): void {
        $this->customerNumber = $value;
    }

    /**
     * Sets the name property value. 
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the period1Amount property value. 
     *  @param float|null $value Value to set for the period1Amount property.
    */
    public function setPeriod1Amount(?float $value ): void {
        $this->period1Amount = $value;
    }

    /**
     * Sets the period2Amount property value. 
     *  @param float|null $value Value to set for the period2Amount property.
    */
    public function setPeriod2Amount(?float $value ): void {
        $this->period2Amount = $value;
    }

    /**
     * Sets the period3Amount property value. 
     *  @param float|null $value Value to set for the period3Amount property.
    */
    public function setPeriod3Amount(?float $value ): void {
        $this->period3Amount = $value;
    }

    /**
     * Sets the periodLengthFilter property value. 
     *  @param string|null $value Value to set for the periodLengthFilter property.
    */
    public function setPeriodLengthFilter(?string $value ): void {
        $this->periodLengthFilter = $value;
    }

}
