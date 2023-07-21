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
     * Gets the callCharge property value. Amount of money or cost of the SMS that is charged.
     * @return string|null
    */
    public function getCallCharge(): ?string {
        $val = $this->getBackingStore()->get('callCharge');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callCharge'");
    }

    /**
     * Gets the currency property value. Currency used to calculate the cost of the call. For details, see ISO 4217.
     * @return string|null
    */
    public function getCurrency(): ?string {
        $val = $this->getBackingStore()->get('currency');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currency'");
    }

    /**
     * Gets the destinationContext property value. Indicates whether the SMS was Domestic (within a country or region) or International (outside a country or region) based on the user's location.
     * @return string|null
    */
    public function getDestinationContext(): ?string {
        $val = $this->getBackingStore()->get('destinationContext');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationContext'");
    }

    /**
     * Gets the destinationName property value. Country or region of a phone number that received the SMS.
     * @return string|null
    */
    public function getDestinationName(): ?string {
        $val = $this->getBackingStore()->get('destinationName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationName'");
    }

    /**
     * Gets the destinationNumber property value. Partially obfuscated phone number that received the SMS. For details, see E.164.
     * @return string|null
    */
    public function getDestinationNumber(): ?string {
        $val = $this->getBackingStore()->get('destinationNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationNumber'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
     * Gets the id property value. Unique identifier (GUID) for the SMS.
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
     * Gets the licenseCapability property value. The license used for the SMS.
     * @return string|null
    */
    public function getLicenseCapability(): ?string {
        $val = $this->getBackingStore()->get('licenseCapability');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'licenseCapability'");
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
     * Gets the otherPartyCountryCode property value. For an outbound SMS, the country code of the receiver; otherwise (inbound SMS) the country code of the sender. For details, see ISO 3166-1 alpha-2.
     * @return string|null
    */
    public function getOtherPartyCountryCode(): ?string {
        $val = $this->getBackingStore()->get('otherPartyCountryCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'otherPartyCountryCode'");
    }

    /**
     * Gets the sentDateTime property value. The date and time when the SMS was sent.
     * @return DateTime|null
    */
    public function getSentDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('sentDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sentDateTime'");
    }

    /**
     * Gets the smsId property value. SMS identifier. Not guaranteed to be unique.
     * @return string|null
    */
    public function getSmsId(): ?string {
        $val = $this->getBackingStore()->get('smsId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smsId'");
    }

    /**
     * Gets the smsType property value. Type of SMS such as outbound or inbound.
     * @return string|null
    */
    public function getSmsType(): ?string {
        $val = $this->getBackingStore()->get('smsType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smsType'");
    }

    /**
     * Gets the smsUnits property value. Number of SMS units sent/received.
     * @return int|null
    */
    public function getSmsUnits(): ?int {
        $val = $this->getBackingStore()->get('smsUnits');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smsUnits'");
    }

    /**
     * Gets the sourceNumber property value. Partially obfuscated phone number that sent the SMS. For details, see E.164.
     * @return string|null
    */
    public function getSourceNumber(): ?string {
        $val = $this->getBackingStore()->get('sourceNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceNumber'");
    }

    /**
     * Gets the tenantCountryCode property value. Country code of the tenant. For details, see ISO 3166-1 alpha-2.
     * @return string|null
    */
    public function getTenantCountryCode(): ?string {
        $val = $this->getBackingStore()->get('tenantCountryCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantCountryCode'");
    }

    /**
     * Gets the userCountryCode property value. Country code of the user. For details, see ISO 3166-1 alpha-2.
     * @return string|null
    */
    public function getUserCountryCode(): ?string {
        $val = $this->getBackingStore()->get('userCountryCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userCountryCode'");
    }

    /**
     * Gets the userDisplayName property value. Display name of the user.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        $val = $this->getBackingStore()->get('userDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userDisplayName'");
    }

    /**
     * Gets the userId property value. The unique identifier (GUID) of the user in Azure Active Directory.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Gets the userPrincipalName property value. The user principal name (sign-in name) in Azure Active Directory. This is usually the same as the user's SIP address, and can be same as the user's e-mail address.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
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
     * Sets the callCharge property value. Amount of money or cost of the SMS that is charged.
     * @param string|null $value Value to set for the callCharge property.
    */
    public function setCallCharge(?string $value): void {
        $this->getBackingStore()->set('callCharge', $value);
    }

    /**
     * Sets the currency property value. Currency used to calculate the cost of the call. For details, see ISO 4217.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->getBackingStore()->set('currency', $value);
    }

    /**
     * Sets the destinationContext property value. Indicates whether the SMS was Domestic (within a country or region) or International (outside a country or region) based on the user's location.
     * @param string|null $value Value to set for the destinationContext property.
    */
    public function setDestinationContext(?string $value): void {
        $this->getBackingStore()->set('destinationContext', $value);
    }

    /**
     * Sets the destinationName property value. Country or region of a phone number that received the SMS.
     * @param string|null $value Value to set for the destinationName property.
    */
    public function setDestinationName(?string $value): void {
        $this->getBackingStore()->set('destinationName', $value);
    }

    /**
     * Sets the destinationNumber property value. Partially obfuscated phone number that received the SMS. For details, see E.164.
     * @param string|null $value Value to set for the destinationNumber property.
    */
    public function setDestinationNumber(?string $value): void {
        $this->getBackingStore()->set('destinationNumber', $value);
    }

    /**
     * Sets the id property value. Unique identifier (GUID) for the SMS.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the licenseCapability property value. The license used for the SMS.
     * @param string|null $value Value to set for the licenseCapability property.
    */
    public function setLicenseCapability(?string $value): void {
        $this->getBackingStore()->set('licenseCapability', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the otherPartyCountryCode property value. For an outbound SMS, the country code of the receiver; otherwise (inbound SMS) the country code of the sender. For details, see ISO 3166-1 alpha-2.
     * @param string|null $value Value to set for the otherPartyCountryCode property.
    */
    public function setOtherPartyCountryCode(?string $value): void {
        $this->getBackingStore()->set('otherPartyCountryCode', $value);
    }

    /**
     * Sets the sentDateTime property value. The date and time when the SMS was sent.
     * @param DateTime|null $value Value to set for the sentDateTime property.
    */
    public function setSentDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('sentDateTime', $value);
    }

    /**
     * Sets the smsId property value. SMS identifier. Not guaranteed to be unique.
     * @param string|null $value Value to set for the smsId property.
    */
    public function setSmsId(?string $value): void {
        $this->getBackingStore()->set('smsId', $value);
    }

    /**
     * Sets the smsType property value. Type of SMS such as outbound or inbound.
     * @param string|null $value Value to set for the smsType property.
    */
    public function setSmsType(?string $value): void {
        $this->getBackingStore()->set('smsType', $value);
    }

    /**
     * Sets the smsUnits property value. Number of SMS units sent/received.
     * @param int|null $value Value to set for the smsUnits property.
    */
    public function setSmsUnits(?int $value): void {
        $this->getBackingStore()->set('smsUnits', $value);
    }

    /**
     * Sets the sourceNumber property value. Partially obfuscated phone number that sent the SMS. For details, see E.164.
     * @param string|null $value Value to set for the sourceNumber property.
    */
    public function setSourceNumber(?string $value): void {
        $this->getBackingStore()->set('sourceNumber', $value);
    }

    /**
     * Sets the tenantCountryCode property value. Country code of the tenant. For details, see ISO 3166-1 alpha-2.
     * @param string|null $value Value to set for the tenantCountryCode property.
    */
    public function setTenantCountryCode(?string $value): void {
        $this->getBackingStore()->set('tenantCountryCode', $value);
    }

    /**
     * Sets the userCountryCode property value. Country code of the user. For details, see ISO 3166-1 alpha-2.
     * @param string|null $value Value to set for the userCountryCode property.
    */
    public function setUserCountryCode(?string $value): void {
        $this->getBackingStore()->set('userCountryCode', $value);
    }

    /**
     * Sets the userDisplayName property value. Display name of the user.
     * @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userId property value. The unique identifier (GUID) of the user in Azure Active Directory.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. The user principal name (sign-in name) in Azure Active Directory. This is usually the same as the user's SIP address, and can be same as the user's e-mail address.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
