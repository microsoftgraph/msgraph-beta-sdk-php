<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Customer extends Entity 
{
    /** @var PostalAddressType|null $address  */
    private ?PostalAddressType $address = null;
    
    /** @var string|null $blocked  */
    private ?string $blocked = null;
    
    /** @var Currency|null $currency  */
    private ?Currency $currency = null;
    
    /** @var string|null $currencyCode  */
    private ?string $currencyCode = null;
    
    /** @var string|null $currencyId  */
    private ?string $currencyId = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var string|null $email  */
    private ?string $email = null;
    
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var string|null $number  */
    private ?string $number = null;
    
    /** @var PaymentMethod|null $paymentMethod  */
    private ?PaymentMethod $paymentMethod = null;
    
    /** @var string|null $paymentMethodId  */
    private ?string $paymentMethodId = null;
    
    /** @var PaymentTerm|null $paymentTerm  */
    private ?PaymentTerm $paymentTerm = null;
    
    /** @var string|null $paymentTermsId  */
    private ?string $paymentTermsId = null;
    
    /** @var string|null $phoneNumber  */
    private ?string $phoneNumber = null;
    
    /** @var array<Picture>|null $picture  */
    private ?array $picture = null;
    
    /** @var ShipmentMethod|null $shipmentMethod  */
    private ?ShipmentMethod $shipmentMethod = null;
    
    /** @var string|null $shipmentMethodId  */
    private ?string $shipmentMethodId = null;
    
    /** @var string|null $taxAreaDisplayName  */
    private ?string $taxAreaDisplayName = null;
    
    /** @var string|null $taxAreaId  */
    private ?string $taxAreaId = null;
    
    /** @var bool|null $taxLiable  */
    private ?bool $taxLiable = null;
    
    /** @var string|null $taxRegistrationNumber  */
    private ?string $taxRegistrationNumber = null;
    
    /** @var string|null $type  */
    private ?string $type = null;
    
    /** @var string|null $website  */
    private ?string $website = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): Customer {
        return new Customer();
    }

    /**
     * Gets the address property value. 
     * @return PostalAddressType|null
    */
    public function getAddress(): ?PostalAddressType {
        return $this->address;
    }

    /**
     * Gets the blocked property value. 
     * @return string|null
    */
    public function getBlocked(): ?string {
        return $this->blocked;
    }

    /**
     * Gets the currency property value. 
     * @return Currency|null
    */
    public function getCurrency(): ?Currency {
        return $this->currency;
    }

    /**
     * Gets the currencyCode property value. 
     * @return string|null
    */
    public function getCurrencyCode(): ?string {
        return $this->currencyCode;
    }

    /**
     * Gets the currencyId property value. 
     * @return string|null
    */
    public function getCurrencyId(): ?string {
        return $this->currencyId;
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the email property value. 
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'address' => function (self $o, ParseNode $n) { $o->setAddress($n->getObjectValue(PostalAddressType::class)); },
            'blocked' => function (self $o, ParseNode $n) { $o->setBlocked($n->getStringValue()); },
            'currency' => function (self $o, ParseNode $n) { $o->setCurrency($n->getObjectValue(Currency::class)); },
            'currencyCode' => function (self $o, ParseNode $n) { $o->setCurrencyCode($n->getStringValue()); },
            'currencyId' => function (self $o, ParseNode $n) { $o->setCurrencyId($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'email' => function (self $o, ParseNode $n) { $o->setEmail($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'number' => function (self $o, ParseNode $n) { $o->setNumber($n->getStringValue()); },
            'paymentMethod' => function (self $o, ParseNode $n) { $o->setPaymentMethod($n->getObjectValue(PaymentMethod::class)); },
            'paymentMethodId' => function (self $o, ParseNode $n) { $o->setPaymentMethodId($n->getStringValue()); },
            'paymentTerm' => function (self $o, ParseNode $n) { $o->setPaymentTerm($n->getObjectValue(PaymentTerm::class)); },
            'paymentTermsId' => function (self $o, ParseNode $n) { $o->setPaymentTermsId($n->getStringValue()); },
            'phoneNumber' => function (self $o, ParseNode $n) { $o->setPhoneNumber($n->getStringValue()); },
            'picture' => function (self $o, ParseNode $n) { $o->setPicture($n->getCollectionOfObjectValues(Picture::class)); },
            'shipmentMethod' => function (self $o, ParseNode $n) { $o->setShipmentMethod($n->getObjectValue(ShipmentMethod::class)); },
            'shipmentMethodId' => function (self $o, ParseNode $n) { $o->setShipmentMethodId($n->getStringValue()); },
            'taxAreaDisplayName' => function (self $o, ParseNode $n) { $o->setTaxAreaDisplayName($n->getStringValue()); },
            'taxAreaId' => function (self $o, ParseNode $n) { $o->setTaxAreaId($n->getStringValue()); },
            'taxLiable' => function (self $o, ParseNode $n) { $o->setTaxLiable($n->getBooleanValue()); },
            'taxRegistrationNumber' => function (self $o, ParseNode $n) { $o->setTaxRegistrationNumber($n->getStringValue()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getStringValue()); },
            'website' => function (self $o, ParseNode $n) { $o->setWebsite($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the number property value. 
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the paymentMethod property value. 
     * @return PaymentMethod|null
    */
    public function getPaymentMethod(): ?PaymentMethod {
        return $this->paymentMethod;
    }

    /**
     * Gets the paymentMethodId property value. 
     * @return string|null
    */
    public function getPaymentMethodId(): ?string {
        return $this->paymentMethodId;
    }

    /**
     * Gets the paymentTerm property value. 
     * @return PaymentTerm|null
    */
    public function getPaymentTerm(): ?PaymentTerm {
        return $this->paymentTerm;
    }

    /**
     * Gets the paymentTermsId property value. 
     * @return string|null
    */
    public function getPaymentTermsId(): ?string {
        return $this->paymentTermsId;
    }

    /**
     * Gets the phoneNumber property value. 
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the picture property value. 
     * @return array<Picture>|null
    */
    public function getPicture(): ?array {
        return $this->picture;
    }

    /**
     * Gets the shipmentMethod property value. 
     * @return ShipmentMethod|null
    */
    public function getShipmentMethod(): ?ShipmentMethod {
        return $this->shipmentMethod;
    }

    /**
     * Gets the shipmentMethodId property value. 
     * @return string|null
    */
    public function getShipmentMethodId(): ?string {
        return $this->shipmentMethodId;
    }

    /**
     * Gets the taxAreaDisplayName property value. 
     * @return string|null
    */
    public function getTaxAreaDisplayName(): ?string {
        return $this->taxAreaDisplayName;
    }

    /**
     * Gets the taxAreaId property value. 
     * @return string|null
    */
    public function getTaxAreaId(): ?string {
        return $this->taxAreaId;
    }

    /**
     * Gets the taxLiable property value. 
     * @return bool|null
    */
    public function getTaxLiable(): ?bool {
        return $this->taxLiable;
    }

    /**
     * Gets the taxRegistrationNumber property value. 
     * @return string|null
    */
    public function getTaxRegistrationNumber(): ?string {
        return $this->taxRegistrationNumber;
    }

    /**
     * Gets the type property value. 
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the website property value. 
     * @return string|null
    */
    public function getWebsite(): ?string {
        return $this->website;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('address', $this->address);
        $writer->writeStringValue('blocked', $this->blocked);
        $writer->writeObjectValue('currency', $this->currency);
        $writer->writeStringValue('currencyCode', $this->currencyCode);
        $writer->writeStringValue('currencyId', $this->currencyId);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('email', $this->email);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('number', $this->number);
        $writer->writeObjectValue('paymentMethod', $this->paymentMethod);
        $writer->writeStringValue('paymentMethodId', $this->paymentMethodId);
        $writer->writeObjectValue('paymentTerm', $this->paymentTerm);
        $writer->writeStringValue('paymentTermsId', $this->paymentTermsId);
        $writer->writeStringValue('phoneNumber', $this->phoneNumber);
        $writer->writeCollectionOfObjectValues('picture', $this->picture);
        $writer->writeObjectValue('shipmentMethod', $this->shipmentMethod);
        $writer->writeStringValue('shipmentMethodId', $this->shipmentMethodId);
        $writer->writeStringValue('taxAreaDisplayName', $this->taxAreaDisplayName);
        $writer->writeStringValue('taxAreaId', $this->taxAreaId);
        $writer->writeBooleanValue('taxLiable', $this->taxLiable);
        $writer->writeStringValue('taxRegistrationNumber', $this->taxRegistrationNumber);
        $writer->writeStringValue('type', $this->type);
        $writer->writeStringValue('website', $this->website);
    }

    /**
     * Sets the address property value. 
     *  @param PostalAddressType|null $value Value to set for the address property.
    */
    public function setAddress(?PostalAddressType $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the blocked property value. 
     *  @param string|null $value Value to set for the blocked property.
    */
    public function setBlocked(?string $value ): void {
        $this->blocked = $value;
    }

    /**
     * Sets the currency property value. 
     *  @param Currency|null $value Value to set for the currency property.
    */
    public function setCurrency(?Currency $value ): void {
        $this->currency = $value;
    }

    /**
     * Sets the currencyCode property value. 
     *  @param string|null $value Value to set for the currencyCode property.
    */
    public function setCurrencyCode(?string $value ): void {
        $this->currencyCode = $value;
    }

    /**
     * Sets the currencyId property value. 
     *  @param string|null $value Value to set for the currencyId property.
    */
    public function setCurrencyId(?string $value ): void {
        $this->currencyId = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the email property value. 
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the number property value. 
     *  @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value ): void {
        $this->number = $value;
    }

    /**
     * Sets the paymentMethod property value. 
     *  @param PaymentMethod|null $value Value to set for the paymentMethod property.
    */
    public function setPaymentMethod(?PaymentMethod $value ): void {
        $this->paymentMethod = $value;
    }

    /**
     * Sets the paymentMethodId property value. 
     *  @param string|null $value Value to set for the paymentMethodId property.
    */
    public function setPaymentMethodId(?string $value ): void {
        $this->paymentMethodId = $value;
    }

    /**
     * Sets the paymentTerm property value. 
     *  @param PaymentTerm|null $value Value to set for the paymentTerm property.
    */
    public function setPaymentTerm(?PaymentTerm $value ): void {
        $this->paymentTerm = $value;
    }

    /**
     * Sets the paymentTermsId property value. 
     *  @param string|null $value Value to set for the paymentTermsId property.
    */
    public function setPaymentTermsId(?string $value ): void {
        $this->paymentTermsId = $value;
    }

    /**
     * Sets the phoneNumber property value. 
     *  @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value ): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the picture property value. 
     *  @param array<Picture>|null $value Value to set for the picture property.
    */
    public function setPicture(?array $value ): void {
        $this->picture = $value;
    }

    /**
     * Sets the shipmentMethod property value. 
     *  @param ShipmentMethod|null $value Value to set for the shipmentMethod property.
    */
    public function setShipmentMethod(?ShipmentMethod $value ): void {
        $this->shipmentMethod = $value;
    }

    /**
     * Sets the shipmentMethodId property value. 
     *  @param string|null $value Value to set for the shipmentMethodId property.
    */
    public function setShipmentMethodId(?string $value ): void {
        $this->shipmentMethodId = $value;
    }

    /**
     * Sets the taxAreaDisplayName property value. 
     *  @param string|null $value Value to set for the taxAreaDisplayName property.
    */
    public function setTaxAreaDisplayName(?string $value ): void {
        $this->taxAreaDisplayName = $value;
    }

    /**
     * Sets the taxAreaId property value. 
     *  @param string|null $value Value to set for the taxAreaId property.
    */
    public function setTaxAreaId(?string $value ): void {
        $this->taxAreaId = $value;
    }

    /**
     * Sets the taxLiable property value. 
     *  @param bool|null $value Value to set for the taxLiable property.
    */
    public function setTaxLiable(?bool $value ): void {
        $this->taxLiable = $value;
    }

    /**
     * Sets the taxRegistrationNumber property value. 
     *  @param string|null $value Value to set for the taxRegistrationNumber property.
    */
    public function setTaxRegistrationNumber(?string $value ): void {
        $this->taxRegistrationNumber = $value;
    }

    /**
     * Sets the type property value. 
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the website property value. 
     *  @param string|null $value Value to set for the website property.
    */
    public function setWebsite(?string $value ): void {
        $this->website = $value;
    }

}
