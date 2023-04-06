<?php

namespace Microsoft\Graph\Beta\Generated\Models\CallRecords;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PstnOnlineMeetingDialoutReport implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new pstnOnlineMeetingDialoutReport and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PstnOnlineMeetingDialoutReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PstnOnlineMeetingDialoutReport {
        return new PstnOnlineMeetingDialoutReport();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the currency property value. The currency property
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->getBackingStore()->get('currency');
    }

    /**
     * Gets the destinationContext property value. The destinationContext property
     * @return string|null
    */
    public function getDestinationContext(): ?string {
        return $this->getBackingStore()->get('destinationContext');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'destinationContext' => fn(ParseNode $n) => $o->setDestinationContext($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'totalCallCharge' => fn(ParseNode $n) => $o->setTotalCallCharge($n->getStringValue()),
            'totalCalls' => fn(ParseNode $n) => $o->setTotalCalls($n->getIntegerValue()),
            'totalCallSeconds' => fn(ParseNode $n) => $o->setTotalCallSeconds($n->getIntegerValue()),
            'usageLocation' => fn(ParseNode $n) => $o->setUsageLocation($n->getStringValue()),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the totalCallCharge property value. The totalCallCharge property
     * @return string|null
    */
    public function getTotalCallCharge(): ?string {
        return $this->getBackingStore()->get('totalCallCharge');
    }

    /**
     * Gets the totalCalls property value. The totalCalls property
     * @return int|null
    */
    public function getTotalCalls(): ?int {
        return $this->getBackingStore()->get('totalCalls');
    }

    /**
     * Gets the totalCallSeconds property value. The totalCallSeconds property
     * @return int|null
    */
    public function getTotalCallSeconds(): ?int {
        return $this->getBackingStore()->get('totalCallSeconds');
    }

    /**
     * Gets the usageLocation property value. The usageLocation property
     * @return string|null
    */
    public function getUsageLocation(): ?string {
        return $this->getBackingStore()->get('usageLocation');
    }

    /**
     * Gets the userDisplayName property value. The userDisplayName property
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->getBackingStore()->get('userDisplayName');
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Gets the userPrincipalName property value. The userPrincipalName property
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('destinationContext', $this->getDestinationContext());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('totalCallCharge', $this->getTotalCallCharge());
        $writer->writeIntegerValue('totalCalls', $this->getTotalCalls());
        $writer->writeIntegerValue('totalCallSeconds', $this->getTotalCallSeconds());
        $writer->writeStringValue('usageLocation', $this->getUsageLocation());
        $writer->writeStringValue('userDisplayName', $this->getUserDisplayName());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
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
     * Sets the currency property value. The currency property
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->getBackingStore()->set('currency', $value);
    }

    /**
     * Sets the destinationContext property value. The destinationContext property
     * @param string|null $value Value to set for the destinationContext property.
    */
    public function setDestinationContext(?string $value): void {
        $this->getBackingStore()->set('destinationContext', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the totalCallCharge property value. The totalCallCharge property
     * @param string|null $value Value to set for the totalCallCharge property.
    */
    public function setTotalCallCharge(?string $value): void {
        $this->getBackingStore()->set('totalCallCharge', $value);
    }

    /**
     * Sets the totalCalls property value. The totalCalls property
     * @param int|null $value Value to set for the totalCalls property.
    */
    public function setTotalCalls(?int $value): void {
        $this->getBackingStore()->set('totalCalls', $value);
    }

    /**
     * Sets the totalCallSeconds property value. The totalCallSeconds property
     * @param int|null $value Value to set for the totalCallSeconds property.
    */
    public function setTotalCallSeconds(?int $value): void {
        $this->getBackingStore()->set('totalCallSeconds', $value);
    }

    /**
     * Sets the usageLocation property value. The usageLocation property
     * @param string|null $value Value to set for the usageLocation property.
    */
    public function setUsageLocation(?string $value): void {
        $this->getBackingStore()->set('usageLocation', $value);
    }

    /**
     * Sets the userDisplayName property value. The userDisplayName property
     * @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. The userPrincipalName property
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
