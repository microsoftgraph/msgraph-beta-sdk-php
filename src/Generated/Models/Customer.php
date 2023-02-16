<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Customer extends Entity implements Parsable 
{
    /**
     * Instantiates a new customer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Customer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Customer {
        return new Customer();
    }

    /**
     * Gets the address property value. The address property
     * @return PostalAddressType|null
    */
    public function getAddress(): ?PostalAddressType {
        return $this->getBackingStore()->get('address');
    }

    /**
     * Gets the blocked property value. The blocked property
     * @return string|null
    */
    public function getBlocked(): ?string {
        return $this->getBackingStore()->get('blocked');
    }

    /**
     * Gets the currency property value. The currency property
     * @return Currency|null
    */
    public function getCurrency(): ?Currency {
        return $this->getBackingStore()->get('currency');
    }

    /**
     * Gets the currencyCode property value. The currencyCode property
     * @return string|null
    */
    public function getCurrencyCode(): ?string {
        return $this->getBackingStore()->get('currencyCode');
    }

    /**
     * Gets the currencyId property value. The currencyId property
     * @return string|null
    */
    public function getCurrencyId(): ?string {
        return $this->getBackingStore()->get('currencyId');
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the email property value. The email property
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->getBackingStore()->get('email');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([PostalAddressType::class, 'createFromDiscriminatorValue'])),
            'blocked' => fn(ParseNode $n) => $o->setBlocked($n->getStringValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getObjectValue([Currency::class, 'createFromDiscriminatorValue'])),
            'currencyCode' => fn(ParseNode $n) => $o->setCurrencyCode($n->getStringValue()),
            'currencyId' => fn(ParseNode $n) => $o->setCurrencyId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'paymentMethod' => fn(ParseNode $n) => $o->setPaymentMethod($n->getObjectValue([PaymentMethod::class, 'createFromDiscriminatorValue'])),
            'paymentMethodId' => fn(ParseNode $n) => $o->setPaymentMethodId($n->getStringValue()),
            'paymentTerm' => fn(ParseNode $n) => $o->setPaymentTerm($n->getObjectValue([PaymentTerm::class, 'createFromDiscriminatorValue'])),
            'paymentTermsId' => fn(ParseNode $n) => $o->setPaymentTermsId($n->getStringValue()),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'picture' => fn(ParseNode $n) => $o->setPicture($n->getCollectionOfObjectValues([Picture::class, 'createFromDiscriminatorValue'])),
            'shipmentMethod' => fn(ParseNode $n) => $o->setShipmentMethod($n->getObjectValue([ShipmentMethod::class, 'createFromDiscriminatorValue'])),
            'shipmentMethodId' => fn(ParseNode $n) => $o->setShipmentMethodId($n->getStringValue()),
            'taxAreaDisplayName' => fn(ParseNode $n) => $o->setTaxAreaDisplayName($n->getStringValue()),
            'taxAreaId' => fn(ParseNode $n) => $o->setTaxAreaId($n->getStringValue()),
            'taxLiable' => fn(ParseNode $n) => $o->setTaxLiable($n->getBooleanValue()),
            'taxRegistrationNumber' => fn(ParseNode $n) => $o->setTaxRegistrationNumber($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'website' => fn(ParseNode $n) => $o->setWebsite($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the number property value. The number property
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->getBackingStore()->get('number');
    }

    /**
     * Gets the paymentMethod property value. The paymentMethod property
     * @return PaymentMethod|null
    */
    public function getPaymentMethod(): ?PaymentMethod {
        return $this->getBackingStore()->get('paymentMethod');
    }

    /**
     * Gets the paymentMethodId property value. The paymentMethodId property
     * @return string|null
    */
    public function getPaymentMethodId(): ?string {
        return $this->getBackingStore()->get('paymentMethodId');
    }

    /**
     * Gets the paymentTerm property value. The paymentTerm property
     * @return PaymentTerm|null
    */
    public function getPaymentTerm(): ?PaymentTerm {
        return $this->getBackingStore()->get('paymentTerm');
    }

    /**
     * Gets the paymentTermsId property value. The paymentTermsId property
     * @return string|null
    */
    public function getPaymentTermsId(): ?string {
        return $this->getBackingStore()->get('paymentTermsId');
    }

    /**
     * Gets the phoneNumber property value. The phoneNumber property
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->getBackingStore()->get('phoneNumber');
    }

    /**
     * Gets the picture property value. The picture property
     * @return array<Picture>|null
    */
    public function getPicture(): ?array {
        return $this->getBackingStore()->get('picture');
    }

    /**
     * Gets the shipmentMethod property value. The shipmentMethod property
     * @return ShipmentMethod|null
    */
    public function getShipmentMethod(): ?ShipmentMethod {
        return $this->getBackingStore()->get('shipmentMethod');
    }

    /**
     * Gets the shipmentMethodId property value. The shipmentMethodId property
     * @return string|null
    */
    public function getShipmentMethodId(): ?string {
        return $this->getBackingStore()->get('shipmentMethodId');
    }

    /**
     * Gets the taxAreaDisplayName property value. The taxAreaDisplayName property
     * @return string|null
    */
    public function getTaxAreaDisplayName(): ?string {
        return $this->getBackingStore()->get('taxAreaDisplayName');
    }

    /**
     * Gets the taxAreaId property value. The taxAreaId property
     * @return string|null
    */
    public function getTaxAreaId(): ?string {
        return $this->getBackingStore()->get('taxAreaId');
    }

    /**
     * Gets the taxLiable property value. The taxLiable property
     * @return bool|null
    */
    public function getTaxLiable(): ?bool {
        return $this->getBackingStore()->get('taxLiable');
    }

    /**
     * Gets the taxRegistrationNumber property value. The taxRegistrationNumber property
     * @return string|null
    */
    public function getTaxRegistrationNumber(): ?string {
        return $this->getBackingStore()->get('taxRegistrationNumber');
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Gets the website property value. The website property
     * @return string|null
    */
    public function getWebsite(): ?string {
        return $this->getBackingStore()->get('website');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeStringValue('blocked', $this->getBlocked());
        $writer->writeObjectValue('currency', $this->getCurrency());
        $writer->writeStringValue('currencyCode', $this->getCurrencyCode());
        $writer->writeStringValue('currencyId', $this->getCurrencyId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeObjectValue('paymentMethod', $this->getPaymentMethod());
        $writer->writeStringValue('paymentMethodId', $this->getPaymentMethodId());
        $writer->writeObjectValue('paymentTerm', $this->getPaymentTerm());
        $writer->writeStringValue('paymentTermsId', $this->getPaymentTermsId());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeCollectionOfObjectValues('picture', $this->getPicture());
        $writer->writeObjectValue('shipmentMethod', $this->getShipmentMethod());
        $writer->writeStringValue('shipmentMethodId', $this->getShipmentMethodId());
        $writer->writeStringValue('taxAreaDisplayName', $this->getTaxAreaDisplayName());
        $writer->writeStringValue('taxAreaId', $this->getTaxAreaId());
        $writer->writeBooleanValue('taxLiable', $this->getTaxLiable());
        $writer->writeStringValue('taxRegistrationNumber', $this->getTaxRegistrationNumber());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeStringValue('website', $this->getWebsite());
    }

    /**
     * Sets the address property value. The address property
     * @param PostalAddressType|null $value Value to set for the address property.
    */
    public function setAddress(?PostalAddressType $value): void {
        $this->getBackingStore()->set('address', $value);
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
     * Sets the shipmentMethod property value. The shipmentMethod property
     * @param ShipmentMethod|null $value Value to set for the shipmentMethod property.
    */
    public function setShipmentMethod(?ShipmentMethod $value): void {
        $this->getBackingStore()->set('shipmentMethod', $value);
    }

    /**
     * Sets the shipmentMethodId property value. The shipmentMethodId property
     * @param string|null $value Value to set for the shipmentMethodId property.
    */
    public function setShipmentMethodId(?string $value): void {
        $this->getBackingStore()->set('shipmentMethodId', $value);
    }

    /**
     * Sets the taxAreaDisplayName property value. The taxAreaDisplayName property
     * @param string|null $value Value to set for the taxAreaDisplayName property.
    */
    public function setTaxAreaDisplayName(?string $value): void {
        $this->getBackingStore()->set('taxAreaDisplayName', $value);
    }

    /**
     * Sets the taxAreaId property value. The taxAreaId property
     * @param string|null $value Value to set for the taxAreaId property.
    */
    public function setTaxAreaId(?string $value): void {
        $this->getBackingStore()->set('taxAreaId', $value);
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
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the website property value. The website property
     * @param string|null $value Value to set for the website property.
    */
    public function setWebsite(?string $value): void {
        $this->getBackingStore()->set('website', $value);
    }

}
