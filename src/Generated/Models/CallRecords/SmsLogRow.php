<?php

namespace Microsoft\Graph\Beta\Generated\Models\CallRecords;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SmsLogRow implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new smsLogRow and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SmsLogRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SmsLogRow {
        return new SmsLogRow();
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
     * Gets the callCharge property value. The callCharge property
     * @return string|null
    */
    public function getCallCharge(): ?string {
        return $this->getBackingStore()->get('callCharge');
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
     * Gets the destinationName property value. The destinationName property
     * @return string|null
    */
    public function getDestinationName(): ?string {
        return $this->getBackingStore()->get('destinationName');
    }

    /**
     * Gets the destinationNumber property value. The destinationNumber property
     * @return string|null
    */
    public function getDestinationNumber(): ?string {
        return $this->getBackingStore()->get('destinationNumber');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'callCharge' => fn(ParseNode $n) => $o->setCallCharge($n->getStringValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'destinationContext' => fn(ParseNode $n) => $o->setDestinationContext($n->getStringValue()),
            'destinationName' => fn(ParseNode $n) => $o->setDestinationName($n->getStringValue()),
            'destinationNumber' => fn(ParseNode $n) => $o->setDestinationNumber($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'licenseCapability' => fn(ParseNode $n) => $o->setLicenseCapability($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'otherPartyCountryCode' => fn(ParseNode $n) => $o->setOtherPartyCountryCode($n->getStringValue()),
            'sentDateTime' => fn(ParseNode $n) => $o->setSentDateTime($n->getDateTimeValue()),
            'smsId' => fn(ParseNode $n) => $o->setSmsId($n->getStringValue()),
            'smsType' => fn(ParseNode $n) => $o->setSmsType($n->getStringValue()),
            'smsUnits' => fn(ParseNode $n) => $o->setSmsUnits($n->getIntegerValue()),
            'sourceNumber' => fn(ParseNode $n) => $o->setSourceNumber($n->getStringValue()),
            'tenantCountryCode' => fn(ParseNode $n) => $o->setTenantCountryCode($n->getStringValue()),
            'userCountryCode' => fn(ParseNode $n) => $o->setUserCountryCode($n->getStringValue()),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
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
     * Gets the licenseCapability property value. The licenseCapability property
     * @return string|null
    */
    public function getLicenseCapability(): ?string {
        return $this->getBackingStore()->get('licenseCapability');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the otherPartyCountryCode property value. The otherPartyCountryCode property
     * @return string|null
    */
    public function getOtherPartyCountryCode(): ?string {
        return $this->getBackingStore()->get('otherPartyCountryCode');
    }

    /**
     * Gets the sentDateTime property value. The sentDateTime property
     * @return DateTime|null
    */
    public function getSentDateTime(): ?DateTime {
        return $this->getBackingStore()->get('sentDateTime');
    }

    /**
     * Gets the smsId property value. The smsId property
     * @return string|null
    */
    public function getSmsId(): ?string {
        return $this->getBackingStore()->get('smsId');
    }

    /**
     * Gets the smsType property value. The smsType property
     * @return string|null
    */
    public function getSmsType(): ?string {
        return $this->getBackingStore()->get('smsType');
    }

    /**
     * Gets the smsUnits property value. The smsUnits property
     * @return int|null
    */
    public function getSmsUnits(): ?int {
        return $this->getBackingStore()->get('smsUnits');
    }

    /**
     * Gets the sourceNumber property value. The sourceNumber property
     * @return string|null
    */
    public function getSourceNumber(): ?string {
        return $this->getBackingStore()->get('sourceNumber');
    }

    /**
     * Gets the tenantCountryCode property value. The tenantCountryCode property
     * @return string|null
    */
    public function getTenantCountryCode(): ?string {
        return $this->getBackingStore()->get('tenantCountryCode');
    }

    /**
     * Gets the userCountryCode property value. The userCountryCode property
     * @return string|null
    */
    public function getUserCountryCode(): ?string {
        return $this->getBackingStore()->get('userCountryCode');
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
        $writer->writeStringValue('callCharge', $this->getCallCharge());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('destinationContext', $this->getDestinationContext());
        $writer->writeStringValue('destinationName', $this->getDestinationName());
        $writer->writeStringValue('destinationNumber', $this->getDestinationNumber());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('licenseCapability', $this->getLicenseCapability());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('otherPartyCountryCode', $this->getOtherPartyCountryCode());
        $writer->writeDateTimeValue('sentDateTime', $this->getSentDateTime());
        $writer->writeStringValue('smsId', $this->getSmsId());
        $writer->writeStringValue('smsType', $this->getSmsType());
        $writer->writeIntegerValue('smsUnits', $this->getSmsUnits());
        $writer->writeStringValue('sourceNumber', $this->getSourceNumber());
        $writer->writeStringValue('tenantCountryCode', $this->getTenantCountryCode());
        $writer->writeStringValue('userCountryCode', $this->getUserCountryCode());
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
     * Sets the callCharge property value. The callCharge property
     * @param string|null $value Value to set for the callCharge property.
    */
    public function setCallCharge(?string $value): void {
        $this->getBackingStore()->set('callCharge', $value);
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
     * Sets the destinationName property value. The destinationName property
     * @param string|null $value Value to set for the destinationName property.
    */
    public function setDestinationName(?string $value): void {
        $this->getBackingStore()->set('destinationName', $value);
    }

    /**
     * Sets the destinationNumber property value. The destinationNumber property
     * @param string|null $value Value to set for the destinationNumber property.
    */
    public function setDestinationNumber(?string $value): void {
        $this->getBackingStore()->set('destinationNumber', $value);
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the licenseCapability property value. The licenseCapability property
     * @param string|null $value Value to set for the licenseCapability property.
    */
    public function setLicenseCapability(?string $value): void {
        $this->getBackingStore()->set('licenseCapability', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the otherPartyCountryCode property value. The otherPartyCountryCode property
     * @param string|null $value Value to set for the otherPartyCountryCode property.
    */
    public function setOtherPartyCountryCode(?string $value): void {
        $this->getBackingStore()->set('otherPartyCountryCode', $value);
    }

    /**
     * Sets the sentDateTime property value. The sentDateTime property
     * @param DateTime|null $value Value to set for the sentDateTime property.
    */
    public function setSentDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('sentDateTime', $value);
    }

    /**
     * Sets the smsId property value. The smsId property
     * @param string|null $value Value to set for the smsId property.
    */
    public function setSmsId(?string $value): void {
        $this->getBackingStore()->set('smsId', $value);
    }

    /**
     * Sets the smsType property value. The smsType property
     * @param string|null $value Value to set for the smsType property.
    */
    public function setSmsType(?string $value): void {
        $this->getBackingStore()->set('smsType', $value);
    }

    /**
     * Sets the smsUnits property value. The smsUnits property
     * @param int|null $value Value to set for the smsUnits property.
    */
    public function setSmsUnits(?int $value): void {
        $this->getBackingStore()->set('smsUnits', $value);
    }

    /**
     * Sets the sourceNumber property value. The sourceNumber property
     * @param string|null $value Value to set for the sourceNumber property.
    */
    public function setSourceNumber(?string $value): void {
        $this->getBackingStore()->set('sourceNumber', $value);
    }

    /**
     * Sets the tenantCountryCode property value. The tenantCountryCode property
     * @param string|null $value Value to set for the tenantCountryCode property.
    */
    public function setTenantCountryCode(?string $value): void {
        $this->getBackingStore()->set('tenantCountryCode', $value);
    }

    /**
     * Sets the userCountryCode property value. The userCountryCode property
     * @param string|null $value Value to set for the userCountryCode property.
    */
    public function setUserCountryCode(?string $value): void {
        $this->getBackingStore()->set('userCountryCode', $value);
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
