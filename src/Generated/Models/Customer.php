<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Customer extends Entity implements Parsable 
{
    /**
     * @var PostalAddressType|null $address The address property
    */
    private ?PostalAddressType $address = null;
    
    /**
     * @var string|null $blocked The blocked property
    */
    private ?string $blocked = null;
    
    /**
     * @var Currency|null $currency The currency property
    */
    private ?Currency $currency = null;
    
    /**
     * @var string|null $currencyCode The currencyCode property
    */
    private ?string $currencyCode = null;
    
    /**
     * @var string|null $currencyId The currencyId property
    */
    private ?string $currencyId = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $number The number property
    */
    private ?string $number = null;
    
    /**
     * @var PaymentMethod|null $paymentMethod The paymentMethod property
    */
    private ?PaymentMethod $paymentMethod = null;
    
    /**
     * @var string|null $paymentMethodId The paymentMethodId property
    */
    private ?string $paymentMethodId = null;
    
    /**
     * @var PaymentTerm|null $paymentTerm The paymentTerm property
    */
    private ?PaymentTerm $paymentTerm = null;
    
    /**
     * @var string|null $paymentTermsId The paymentTermsId property
    */
    private ?string $paymentTermsId = null;
    
    /**
     * @var string|null $phoneNumber The phoneNumber property
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var array<Picture>|null $picture The picture property
    */
    private ?array $picture = null;
    
    /**
     * @var ShipmentMethod|null $shipmentMethod The shipmentMethod property
    */
    private ?ShipmentMethod $shipmentMethod = null;
    
    /**
     * @var string|null $shipmentMethodId The shipmentMethodId property
    */
    private ?string $shipmentMethodId = null;
    
    /**
     * @var string|null $taxAreaDisplayName The taxAreaDisplayName property
    */
    private ?string $taxAreaDisplayName = null;
    
    /**
     * @var string|null $taxAreaId The taxAreaId property
    */
    private ?string $taxAreaId = null;
    
    /**
     * @var bool|null $taxLiable The taxLiable property
    */
    private ?bool $taxLiable = null;
    
    /**
     * @var string|null $taxRegistrationNumber The taxRegistrationNumber property
    */
    private ?string $taxRegistrationNumber = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * @var string|null $website The website property
    */
    private ?string $website = null;
    
    /**
     * Instantiates a new customer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.customer');
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
        return $this->address;
    }

    /**
     * Gets the blocked property value. The blocked property
     * @return string|null
    */
    public function getBlocked(): ?string {
        return $this->blocked;
    }

    /**
     * Gets the currency property value. The currency property
     * @return Currency|null
    */
    public function getCurrency(): ?Currency {
        return $this->currency;
    }

    /**
     * Gets the currencyCode property value. The currencyCode property
     * @return string|null
    */
    public function getCurrencyCode(): ?string {
        return $this->currencyCode;
    }

    /**
     * Gets the currencyId property value. The currencyId property
     * @return string|null
    */
    public function getCurrencyId(): ?string {
        return $this->currencyId;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the email property value. The email property
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
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the number property value. The number property
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the paymentMethod property value. The paymentMethod property
     * @return PaymentMethod|null
    */
    public function getPaymentMethod(): ?PaymentMethod {
        return $this->paymentMethod;
    }

    /**
     * Gets the paymentMethodId property value. The paymentMethodId property
     * @return string|null
    */
    public function getPaymentMethodId(): ?string {
        return $this->paymentMethodId;
    }

    /**
     * Gets the paymentTerm property value. The paymentTerm property
     * @return PaymentTerm|null
    */
    public function getPaymentTerm(): ?PaymentTerm {
        return $this->paymentTerm;
    }

    /**
     * Gets the paymentTermsId property value. The paymentTermsId property
     * @return string|null
    */
    public function getPaymentTermsId(): ?string {
        return $this->paymentTermsId;
    }

    /**
     * Gets the phoneNumber property value. The phoneNumber property
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the picture property value. The picture property
     * @return array<Picture>|null
    */
    public function getPicture(): ?array {
        return $this->picture;
    }

    /**
     * Gets the shipmentMethod property value. The shipmentMethod property
     * @return ShipmentMethod|null
    */
    public function getShipmentMethod(): ?ShipmentMethod {
        return $this->shipmentMethod;
    }

    /**
     * Gets the shipmentMethodId property value. The shipmentMethodId property
     * @return string|null
    */
    public function getShipmentMethodId(): ?string {
        return $this->shipmentMethodId;
    }

    /**
     * Gets the taxAreaDisplayName property value. The taxAreaDisplayName property
     * @return string|null
    */
    public function getTaxAreaDisplayName(): ?string {
        return $this->taxAreaDisplayName;
    }

    /**
     * Gets the taxAreaId property value. The taxAreaId property
     * @return string|null
    */
    public function getTaxAreaId(): ?string {
        return $this->taxAreaId;
    }

    /**
     * Gets the taxLiable property value. The taxLiable property
     * @return bool|null
    */
    public function getTaxLiable(): ?bool {
        return $this->taxLiable;
    }

    /**
     * Gets the taxRegistrationNumber property value. The taxRegistrationNumber property
     * @return string|null
    */
    public function getTaxRegistrationNumber(): ?string {
        return $this->taxRegistrationNumber;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the website property value. The website property
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
     * Sets the address property value. The address property
     *  @param PostalAddressType|null $value Value to set for the address property.
    */
    public function setAddress(?PostalAddressType $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the blocked property value. The blocked property
     *  @param string|null $value Value to set for the blocked property.
    */
    public function setBlocked(?string $value ): void {
        $this->blocked = $value;
    }

    /**
     * Sets the currency property value. The currency property
     *  @param Currency|null $value Value to set for the currency property.
    */
    public function setCurrency(?Currency $value ): void {
        $this->currency = $value;
    }

    /**
     * Sets the currencyCode property value. The currencyCode property
     *  @param string|null $value Value to set for the currencyCode property.
    */
    public function setCurrencyCode(?string $value ): void {
        $this->currencyCode = $value;
    }

    /**
     * Sets the currencyId property value. The currencyId property
     *  @param string|null $value Value to set for the currencyId property.
    */
    public function setCurrencyId(?string $value ): void {
        $this->currencyId = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the email property value. The email property
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the number property value. The number property
     *  @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value ): void {
        $this->number = $value;
    }

    /**
     * Sets the paymentMethod property value. The paymentMethod property
     *  @param PaymentMethod|null $value Value to set for the paymentMethod property.
    */
    public function setPaymentMethod(?PaymentMethod $value ): void {
        $this->paymentMethod = $value;
    }

    /**
     * Sets the paymentMethodId property value. The paymentMethodId property
     *  @param string|null $value Value to set for the paymentMethodId property.
    */
    public function setPaymentMethodId(?string $value ): void {
        $this->paymentMethodId = $value;
    }

    /**
     * Sets the paymentTerm property value. The paymentTerm property
     *  @param PaymentTerm|null $value Value to set for the paymentTerm property.
    */
    public function setPaymentTerm(?PaymentTerm $value ): void {
        $this->paymentTerm = $value;
    }

    /**
     * Sets the paymentTermsId property value. The paymentTermsId property
     *  @param string|null $value Value to set for the paymentTermsId property.
    */
    public function setPaymentTermsId(?string $value ): void {
        $this->paymentTermsId = $value;
    }

    /**
     * Sets the phoneNumber property value. The phoneNumber property
     *  @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value ): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the picture property value. The picture property
     *  @param array<Picture>|null $value Value to set for the picture property.
    */
    public function setPicture(?array $value ): void {
        $this->picture = $value;
    }

    /**
     * Sets the shipmentMethod property value. The shipmentMethod property
     *  @param ShipmentMethod|null $value Value to set for the shipmentMethod property.
    */
    public function setShipmentMethod(?ShipmentMethod $value ): void {
        $this->shipmentMethod = $value;
    }

    /**
     * Sets the shipmentMethodId property value. The shipmentMethodId property
     *  @param string|null $value Value to set for the shipmentMethodId property.
    */
    public function setShipmentMethodId(?string $value ): void {
        $this->shipmentMethodId = $value;
    }

    /**
     * Sets the taxAreaDisplayName property value. The taxAreaDisplayName property
     *  @param string|null $value Value to set for the taxAreaDisplayName property.
    */
    public function setTaxAreaDisplayName(?string $value ): void {
        $this->taxAreaDisplayName = $value;
    }

    /**
     * Sets the taxAreaId property value. The taxAreaId property
     *  @param string|null $value Value to set for the taxAreaId property.
    */
    public function setTaxAreaId(?string $value ): void {
        $this->taxAreaId = $value;
    }

    /**
     * Sets the taxLiable property value. The taxLiable property
     *  @param bool|null $value Value to set for the taxLiable property.
    */
    public function setTaxLiable(?bool $value ): void {
        $this->taxLiable = $value;
    }

    /**
     * Sets the taxRegistrationNumber property value. The taxRegistrationNumber property
     *  @param string|null $value Value to set for the taxRegistrationNumber property.
    */
    public function setTaxRegistrationNumber(?string $value ): void {
        $this->taxRegistrationNumber = $value;
    }

    /**
     * Sets the type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the website property value. The website property
     *  @param string|null $value Value to set for the website property.
    */
    public function setWebsite(?string $value ): void {
        $this->website = $value;
    }

}
