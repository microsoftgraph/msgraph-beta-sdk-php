<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class BookingCustomer extends BookingPerson implements Parsable 
{
    /**
     * Instantiates a new BookingCustomer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingCustomer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingCustomer {
        return new BookingCustomer();
    }

    /**
     * Gets the addresses property value. Addresses associated with the customer, including home, business and other addresses.
     * @return array<PhysicalAddress>|null
    */
    public function getAddresses(): ?array {
        $val = $this->getBackingStore()->get('addresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PhysicalAddress::class);
            /** @var array<PhysicalAddress>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addresses'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addresses' => fn(ParseNode $n) => $o->setAddresses($n->getCollectionOfObjectValues([PhysicalAddress::class, 'createFromDiscriminatorValue'])),
            'phones' => fn(ParseNode $n) => $o->setPhones($n->getCollectionOfObjectValues([Phone::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the phones property value. Phone numbers associated with the customer, including home, business and mobile numbers.
     * @return array<Phone>|null
    */
    public function getPhones(): ?array {
        $val = $this->getBackingStore()->get('phones');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Phone::class);
            /** @var array<Phone>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phones'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('addresses', $this->getAddresses());
        $writer->writeCollectionOfObjectValues('phones', $this->getPhones());
    }

    /**
     * Sets the addresses property value. Addresses associated with the customer, including home, business and other addresses.
     * @param array<PhysicalAddress>|null $value Value to set for the addresses property.
    */
    public function setAddresses(?array $value): void {
        $this->getBackingStore()->set('addresses', $value);
    }

    /**
     * Sets the phones property value. Phone numbers associated with the customer, including home, business and mobile numbers.
     * @param array<Phone>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value): void {
        $this->getBackingStore()->set('phones', $value);
    }

}
