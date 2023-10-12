<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Vendor implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new vendor and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Vendor
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Vendor {
        return new Vendor();
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
     * Gets the address property value. The address property
     * @return PostalAddressType|null
    */
    public function getAddress(): ?PostalAddressType {
        $val = $this->getBackingStore()->get('address');
        if (is_null($val) || $val instanceof PostalAddressType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'address'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the balance property value. The balance property
     * @return string|null
    */
    public function getBalance(): ?string {
        $val = $this->getBackingStore()->get('balance');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'balance'");
    }

    /**
     * Gets the blocked property value. The blocked property
     * @return string|null
    */
    public function getBlocked(): ?string {
        $val = $this->getBackingStore()->get('blocked');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blocked'");
    }

    /**
     * Gets the currency property value. The currency property
     * @return Currency|null
    */
    public function getCurrency(): ?Currency {
        $val = $this->getBackingStore()->get('currency');
        if (is_null($val) || $val instanceof Currency) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currency'");
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
     * Gets the currencyId property value. The currencyId property
     * @return string|null
    */
    public function getCurrencyId(): ?string {
        $val = $this->getBackingStore()->get('currencyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currencyId'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the email property value. The email property
     * @return string|null
    */
    public function getEmail(): ?string {
        $val = $this->getBackingStore()->get('email');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'email'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([PostalAddressType::class, 'createFromDiscriminatorValue'])),
            'balance' => fn(ParseNode $n) => $o->setBalance($n->getStringValue()),
            'blocked' => fn(ParseNode $n) => $o->setBlocked($n->getStringValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getObjectValue([Currency::class, 'createFromDiscriminatorValue'])),
            'currencyCode' => fn(ParseNode $n) => $o->setCurrencyCode($n->getStringValue()),
            'currencyId' => fn(ParseNode $n) => $o->setCurrencyId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'paymentMethod' => fn(ParseNode $n) => $o->setPaymentMethod($n->getObjectValue([PaymentMethod::class, 'createFromDiscriminatorValue'])),
            'paymentMethodId' => fn(ParseNode $n) => $o->setPaymentMethodId($n->getStringValue()),
            'paymentTerm' => fn(ParseNode $n) => $o->setPaymentTerm($n->getObjectValue([PaymentTerm::class, 'createFromDiscriminatorValue'])),
            'paymentTermsId' => fn(ParseNode $n) => $o->setPaymentTermsId($n->getStringValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'picture' => fn(ParseNode $n) => $o->setPicture($n->getCollectionOfObjectValues([Picture::class, 'createFromDiscriminatorValue'])),
            'taxLiable' => fn(ParseNode $n) => $o->setTaxLiable($n->getBooleanValue()),
            'taxRegistrationNumber' => fn(ParseNode $n) => $o->setTaxRegistrationNumber($n->getStringValue()),
            'website' => fn(ParseNode $n) => $o->setWebsite($n->getStringValue()),
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
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the number property value. The number property
     * @return string|null
    */
    public function getNumber(): ?string {
        $val = $this->getBackingStore()->get('number');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'number'");
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
     * Gets the paymentMethod property value. The paymentMethod property
     * @return PaymentMethod|null
    */
    public function getPaymentMethod(): ?PaymentMethod {
        $val = $this->getBackingStore()->get('paymentMethod');
        if (is_null($val) || $val instanceof PaymentMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'paymentMethod'");
    }

    /**
     * Gets the paymentMethodId property value. The paymentMethodId property
     * @return string|null
    */
    public function getPaymentMethodId(): ?string {
        $val = $this->getBackingStore()->get('paymentMethodId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'paymentMethodId'");
    }

    /**
     * Gets the paymentTerm property value. The paymentTerm property
     * @return PaymentTerm|null
    */
    public function getPaymentTerm(): ?PaymentTerm {
        $val = $this->getBackingStore()->get('paymentTerm');
        if (is_null($val) || $val instanceof PaymentTerm) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'paymentTerm'");
    }

    /**
     * Gets the paymentTermsId property value. The paymentTermsId property
     * @return string|null
    */
    public function getPaymentTermsId(): ?string {
        $val = $this->getBackingStore()->get('paymentTermsId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'paymentTermsId'");
    }

    /**
     * Gets the phoneNumber property value. The phoneNumber property
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        $val = $this->getBackingStore()->get('phoneNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phoneNumber'");
    }

    /**
     * Gets the picture property value. The picture property
     * @return array<Picture>|null
    */
    public function getPicture(): ?array {
        $val = $this->getBackingStore()->get('picture');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Picture::class);
            /** @var array<Picture>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'picture'");
    }

    /**
     * Gets the taxLiable property value. The taxLiable property
     * @return bool|null
    */
    public function getTaxLiable(): ?bool {
        $val = $this->getBackingStore()->get('taxLiable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taxLiable'");
    }

    /**
     * Gets the taxRegistrationNumber property value. The taxRegistrationNumber property
     * @return string|null
    */
    public function getTaxRegistrationNumber(): ?string {
        $val = $this->getBackingStore()->get('taxRegistrationNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taxRegistrationNumber'");
    }

    /**
     * Gets the website property value. The website property
     * @return string|null
    */
    public function getWebsite(): ?string {
        $val = $this->getBackingStore()->get('website');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'website'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeStringValue('balance', $this->getBalance());
        $writer->writeStringValue('blocked', $this->getBlocked());
        $writer->writeObjectValue('currency', $this->getCurrency());
        $writer->writeStringValue('currencyCode', $this->getCurrencyCode());
        $writer->writeStringValue('currencyId', $this->getCurrencyId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('paymentMethod', $this->getPaymentMethod());
        $writer->writeStringValue('paymentMethodId', $this->getPaymentMethodId());
        $writer->writeObjectValue('paymentTerm', $this->getPaymentTerm());
        $writer->writeStringValue('paymentTermsId', $this->getPaymentTermsId());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeCollectionOfObjectValues('picture', $this->getPicture());
        $writer->writeBooleanValue('taxLiable', $this->getTaxLiable());
        $writer->writeStringValue('taxRegistrationNumber', $this->getTaxRegistrationNumber());
        $writer->writeStringValue('website', $this->getWebsite());
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
     * Sets the address property value. The address property
     * @param PostalAddressType|null $value Value to set for the address property.
    */
    public function setAddress(?PostalAddressType $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the balance property value. The balance property
     * @param string|null $value Value to set for the balance property.
    */
    public function setBalance(?string $value): void {
        $this->getBackingStore()->set('balance', $value);
    }

    /**
     * Sets the blocked property value. The blocked property
     * @param string|null $value Value to set for the blocked property.
    */
    public function setBlocked(?string $value): void {
        $this->getBackingStore()->set('blocked', $value);
    }

    /**
     * Sets the currency property value. The currency property
     * @param Currency|null $value Value to set for the currency property.
    */
    public function setCurrency(?Currency $value): void {
        $this->getBackingStore()->set('currency', $value);
    }

    /**
     * Sets the currencyCode property value. The currencyCode property
     * @param string|null $value Value to set for the currencyCode property.
    */
    public function setCurrencyCode(?string $value): void {
        $this->getBackingStore()->set('currencyCode', $value);
    }

    /**
     * Sets the currencyId property value. The currencyId property
     * @param string|null $value Value to set for the currencyId property.
    */
    public function setCurrencyId(?string $value): void {
        $this->getBackingStore()->set('currencyId', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the email property value. The email property
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the number property value. The number property
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->getBackingStore()->set('number', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the paymentMethod property value. The paymentMethod property
     * @param PaymentMethod|null $value Value to set for the paymentMethod property.
    */
    public function setPaymentMethod(?PaymentMethod $value): void {
        $this->getBackingStore()->set('paymentMethod', $value);
    }

    /**
     * Sets the paymentMethodId property value. The paymentMethodId property
     * @param string|null $value Value to set for the paymentMethodId property.
    */
    public function setPaymentMethodId(?string $value): void {
        $this->getBackingStore()->set('paymentMethodId', $value);
    }

    /**
     * Sets the paymentTerm property value. The paymentTerm property
     * @param PaymentTerm|null $value Value to set for the paymentTerm property.
    */
    public function setPaymentTerm(?PaymentTerm $value): void {
        $this->getBackingStore()->set('paymentTerm', $value);
    }

    /**
     * Sets the paymentTermsId property value. The paymentTermsId property
     * @param string|null $value Value to set for the paymentTermsId property.
    */
    public function setPaymentTermsId(?string $value): void {
        $this->getBackingStore()->set('paymentTermsId', $value);
    }

    /**
     * Sets the phoneNumber property value. The phoneNumber property
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->getBackingStore()->set('phoneNumber', $value);
    }

    /**
     * Sets the picture property value. The picture property
     * @param array<Picture>|null $value Value to set for the picture property.
    */
    public function setPicture(?array $value): void {
        $this->getBackingStore()->set('picture', $value);
    }

    /**
     * Sets the taxLiable property value. The taxLiable property
     * @param bool|null $value Value to set for the taxLiable property.
    */
    public function setTaxLiable(?bool $value): void {
        $this->getBackingStore()->set('taxLiable', $value);
    }

    /**
     * Sets the taxRegistrationNumber property value. The taxRegistrationNumber property
     * @param string|null $value Value to set for the taxRegistrationNumber property.
    */
    public function setTaxRegistrationNumber(?string $value): void {
        $this->getBackingStore()->set('taxRegistrationNumber', $value);
    }

    /**
     * Sets the website property value. The website property
     * @param string|null $value Value to set for the website property.
    */
    public function setWebsite(?string $value): void {
        $this->getBackingStore()->set('website', $value);
    }

}
