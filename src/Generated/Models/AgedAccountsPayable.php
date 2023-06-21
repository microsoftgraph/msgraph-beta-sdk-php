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

class AgedAccountsPayable implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AgedAccountsPayable and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgedAccountsPayable
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgedAccountsPayable {
        return new AgedAccountsPayable();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the agedAsOfDate property value. The agedAsOfDate property
     * @return Date|null
    */
    public function getAgedAsOfDate(): ?Date {
        return $this->getBackingStore()->get('agedAsOfDate');
    }

    /**
     * Gets the backingStore property value. Stores model information.
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
        return $this->getBackingStore()->get('balanceDue');
    }

    /**
     * Gets the currencyCode property value. The currencyCode property
     * @return string|null
    */
    public function getCurrencyCode(): ?string {
        return $this->getBackingStore()->get('currencyCode');
    }

    /**
     * Gets the currentAmount property value. The currentAmount property
     * @return string|null
    */
    public function getCurrentAmount(): ?string {
        return $this->getBackingStore()->get('currentAmount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'agedAsOfDate' => fn(ParseNode $n) => $o->setAgedAsOfDate($n->getDateValue()),
            'balanceDue' => fn(ParseNode $n) => $o->setBalanceDue($n->getStringValue()),
            'currencyCode' => fn(ParseNode $n) => $o->setCurrencyCode($n->getStringValue()),
            'currentAmount' => fn(ParseNode $n) => $o->setCurrentAmount($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'period1Amount' => fn(ParseNode $n) => $o->setPeriod1Amount($n->getStringValue()),
            'period2Amount' => fn(ParseNode $n) => $o->setPeriod2Amount($n->getStringValue()),
            'period3Amount' => fn(ParseNode $n) => $o->setPeriod3Amount($n->getStringValue()),
            'periodLengthFilter' => fn(ParseNode $n) => $o->setPeriodLengthFilter($n->getStringValue()),
            'vendorId' => fn(ParseNode $n) => $o->setVendorId($n->getStringValue()),
            'vendorNumber' => fn(ParseNode $n) => $o->setVendorNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->getBackingStore()->get('id');
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the period1Amount property value. The period1Amount property
     * @return string|null
    */
    public function getPeriod1Amount(): ?string {
        return $this->getBackingStore()->get('period1Amount');
    }

    /**
     * Gets the period2Amount property value. The period2Amount property
     * @return string|null
    */
    public function getPeriod2Amount(): ?string {
        return $this->getBackingStore()->get('period2Amount');
    }

    /**
     * Gets the period3Amount property value. The period3Amount property
     * @return string|null
    */
    public function getPeriod3Amount(): ?string {
        return $this->getBackingStore()->get('period3Amount');
    }

    /**
     * Gets the periodLengthFilter property value. The periodLengthFilter property
     * @return string|null
    */
    public function getPeriodLengthFilter(): ?string {
        return $this->getBackingStore()->get('periodLengthFilter');
    }

    /**
     * Gets the vendorId property value. The vendorId property
     * @return string|null
    */
    public function getVendorId(): ?string {
        return $this->getBackingStore()->get('vendorId');
    }

    /**
     * Gets the vendorNumber property value. The vendorNumber property
     * @return string|null
    */
    public function getVendorNumber(): ?string {
        return $this->getBackingStore()->get('vendorNumber');
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
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('period1Amount', $this->getPeriod1Amount());
        $writer->writeStringValue('period2Amount', $this->getPeriod2Amount());
        $writer->writeStringValue('period3Amount', $this->getPeriod3Amount());
        $writer->writeStringValue('periodLengthFilter', $this->getPeriodLengthFilter());
        $writer->writeStringValue('vendorId', $this->getVendorId());
        $writer->writeStringValue('vendorNumber', $this->getVendorNumber());
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
     * Sets the agedAsOfDate property value. The agedAsOfDate property
     * @param Date|null $value Value to set for the agedAsOfDate property.
    */
    public function setAgedAsOfDate(?Date $value): void {
        $this->getBackingStore()->set('agedAsOfDate', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
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
     * @param string|null $value Value to set for the OdataType property.
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

    /**
     * Sets the vendorId property value. The vendorId property
     * @param string|null $value Value to set for the vendorId property.
    */
    public function setVendorId(?string $value): void {
        $this->getBackingStore()->set('vendorId', $value);
    }

    /**
     * Sets the vendorNumber property value. The vendorNumber property
     * @param string|null $value Value to set for the vendorNumber property.
    */
    public function setVendorNumber(?string $value): void {
        $this->getBackingStore()->set('vendorNumber', $value);
    }

}
