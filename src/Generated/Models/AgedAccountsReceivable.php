<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class AgedAccountsReceivable extends Entity implements Parsable 
{
    /**
     * @var Date|null $agedAsOfDate The agedAsOfDate property
    */
    private ?Date $agedAsOfDate = null;
    
    /**
     * @var string|null $balanceDue The balanceDue property
    */
    private ?string $balanceDue = null;
    
    /**
     * @var string|null $currencyCode The currencyCode property
    */
    private ?string $currencyCode = null;
    
    /**
     * @var string|null $currentAmount The currentAmount property
    */
    private ?string $currentAmount = null;
    
    /**
     * @var string|null $customerNumber The customerNumber property
    */
    private ?string $customerNumber = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $period1Amount The period1Amount property
    */
    private ?string $period1Amount = null;
    
    /**
     * @var string|null $period2Amount The period2Amount property
    */
    private ?string $period2Amount = null;
    
    /**
     * @var string|null $period3Amount The period3Amount property
    */
    private ?string $period3Amount = null;
    
    /**
     * @var string|null $periodLengthFilter The periodLengthFilter property
    */
    private ?string $periodLengthFilter = null;
    
    /**
     * Instantiates a new AgedAccountsReceivable and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.agedAccountsReceivable');
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
     * Gets the agedAsOfDate property value. The agedAsOfDate property
     * @return Date|null
    */
    public function getAgedAsOfDate(): ?Date {
        return $this->agedAsOfDate;
    }

    /**
     * Gets the balanceDue property value. The balanceDue property
     * @return string|null
    */
    public function getBalanceDue(): ?string {
        return $this->balanceDue;
    }

    /**
     * Gets the currencyCode property value. The currencyCode property
     * @return string|null
    */
    public function getCurrencyCode(): ?string {
        return $this->currencyCode;
    }

    /**
     * Gets the currentAmount property value. The currentAmount property
     * @return string|null
    */
    public function getCurrentAmount(): ?string {
        return $this->currentAmount;
    }

    /**
     * Gets the customerNumber property value. The customerNumber property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agedAsOfDate' => function (ParseNode $n) use ($o) { $o->setAgedAsOfDate($n->getDateValue()); },
            'balanceDue' => function (ParseNode $n) use ($o) { $o->setBalanceDue($n->getStringValue()); },
            'currencyCode' => function (ParseNode $n) use ($o) { $o->setCurrencyCode($n->getStringValue()); },
            'currentAmount' => function (ParseNode $n) use ($o) { $o->setCurrentAmount($n->getStringValue()); },
            'customerNumber' => function (ParseNode $n) use ($o) { $o->setCustomerNumber($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'period1Amount' => function (ParseNode $n) use ($o) { $o->setPeriod1Amount($n->getStringValue()); },
            'period2Amount' => function (ParseNode $n) use ($o) { $o->setPeriod2Amount($n->getStringValue()); },
            'period3Amount' => function (ParseNode $n) use ($o) { $o->setPeriod3Amount($n->getStringValue()); },
            'periodLengthFilter' => function (ParseNode $n) use ($o) { $o->setPeriodLengthFilter($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the period1Amount property value. The period1Amount property
     * @return string|null
    */
    public function getPeriod1Amount(): ?string {
        return $this->period1Amount;
    }

    /**
     * Gets the period2Amount property value. The period2Amount property
     * @return string|null
    */
    public function getPeriod2Amount(): ?string {
        return $this->period2Amount;
    }

    /**
     * Gets the period3Amount property value. The period3Amount property
     * @return string|null
    */
    public function getPeriod3Amount(): ?string {
        return $this->period3Amount;
    }

    /**
     * Gets the periodLengthFilter property value. The periodLengthFilter property
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
        $writer->writeStringValue('balanceDue', $this->balanceDue);
        $writer->writeStringValue('currencyCode', $this->currencyCode);
        $writer->writeStringValue('currentAmount', $this->currentAmount);
        $writer->writeStringValue('customerNumber', $this->customerNumber);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('period1Amount', $this->period1Amount);
        $writer->writeStringValue('period2Amount', $this->period2Amount);
        $writer->writeStringValue('period3Amount', $this->period3Amount);
        $writer->writeStringValue('periodLengthFilter', $this->periodLengthFilter);
    }

    /**
     * Sets the agedAsOfDate property value. The agedAsOfDate property
     *  @param Date|null $value Value to set for the agedAsOfDate property.
    */
    public function setAgedAsOfDate(?Date $value ): void {
        $this->agedAsOfDate = $value;
    }

    /**
     * Sets the balanceDue property value. The balanceDue property
     *  @param string|null $value Value to set for the balanceDue property.
    */
    public function setBalanceDue(?string $value ): void {
        $this->balanceDue = $value;
    }

    /**
     * Sets the currencyCode property value. The currencyCode property
     *  @param string|null $value Value to set for the currencyCode property.
    */
    public function setCurrencyCode(?string $value ): void {
        $this->currencyCode = $value;
    }

    /**
     * Sets the currentAmount property value. The currentAmount property
     *  @param string|null $value Value to set for the currentAmount property.
    */
    public function setCurrentAmount(?string $value ): void {
        $this->currentAmount = $value;
    }

    /**
     * Sets the customerNumber property value. The customerNumber property
     *  @param string|null $value Value to set for the customerNumber property.
    */
    public function setCustomerNumber(?string $value ): void {
        $this->customerNumber = $value;
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the period1Amount property value. The period1Amount property
     *  @param string|null $value Value to set for the period1Amount property.
    */
    public function setPeriod1Amount(?string $value ): void {
        $this->period1Amount = $value;
    }

    /**
     * Sets the period2Amount property value. The period2Amount property
     *  @param string|null $value Value to set for the period2Amount property.
    */
    public function setPeriod2Amount(?string $value ): void {
        $this->period2Amount = $value;
    }

    /**
     * Sets the period3Amount property value. The period3Amount property
     *  @param string|null $value Value to set for the period3Amount property.
    */
    public function setPeriod3Amount(?string $value ): void {
        $this->period3Amount = $value;
    }

    /**
     * Sets the periodLengthFilter property value. The periodLengthFilter property
     *  @param string|null $value Value to set for the periodLengthFilter property.
    */
    public function setPeriodLengthFilter(?string $value ): void {
        $this->periodLengthFilter = $value;
    }

}
