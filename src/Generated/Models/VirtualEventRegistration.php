<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VirtualEventRegistration extends Entity implements Parsable 
{
    /**
     * Instantiates a new virtualEventRegistration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEventRegistration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEventRegistration {
        return new VirtualEventRegistration();
    }

    /**
     * Gets the capacity property value. Total capacity of the virtual event.
     * @return int|null
    */
    public function getCapacity(): ?int {
        $val = $this->getBackingStore()->get('capacity');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'capacity'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'capacity' => fn(ParseNode $n) => $o->setCapacity($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'questions' => fn(ParseNode $n) => $o->setQuestions($n->getCollectionOfObjectValues([VirtualEventRegistrationQuestion::class, 'createFromDiscriminatorValue'])),
            'registrants' => fn(ParseNode $n) => $o->setRegistrants($n->getCollectionOfObjectValues([VirtualEventRegistrant::class, 'createFromDiscriminatorValue'])),
            'registrationWebUrl' => fn(ParseNode $n) => $o->setRegistrationWebUrl($n->getStringValue()),
        ]);
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
     * Gets the questions property value. Registration questions.
     * @return array<VirtualEventRegistrationQuestion>|null
    */
    public function getQuestions(): ?array {
        $val = $this->getBackingStore()->get('questions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VirtualEventRegistrationQuestion::class);
            /** @var array<VirtualEventRegistrationQuestion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'questions'");
    }

    /**
     * Gets the registrants property value. Information of attendees who have registered for the virtual event.
     * @return array<VirtualEventRegistrant>|null
    */
    public function getRegistrants(): ?array {
        $val = $this->getBackingStore()->get('registrants');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VirtualEventRegistrant::class);
            /** @var array<VirtualEventRegistrant>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrants'");
    }

    /**
     * Gets the registrationWebUrl property value. Registration URL of the virtual event.
     * @return string|null
    */
    public function getRegistrationWebUrl(): ?string {
        $val = $this->getBackingStore()->get('registrationWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrationWebUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('capacity', $this->getCapacity());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('questions', $this->getQuestions());
        $writer->writeCollectionOfObjectValues('registrants', $this->getRegistrants());
        $writer->writeStringValue('registrationWebUrl', $this->getRegistrationWebUrl());
    }

    /**
     * Sets the capacity property value. Total capacity of the virtual event.
     * @param int|null $value Value to set for the capacity property.
    */
    public function setCapacity(?int $value): void {
        $this->getBackingStore()->set('capacity', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the questions property value. Registration questions.
     * @param array<VirtualEventRegistrationQuestion>|null $value Value to set for the questions property.
    */
    public function setQuestions(?array $value): void {
        $this->getBackingStore()->set('questions', $value);
    }

    /**
     * Sets the registrants property value. Information of attendees who have registered for the virtual event.
     * @param array<VirtualEventRegistrant>|null $value Value to set for the registrants property.
    */
    public function setRegistrants(?array $value): void {
        $this->getBackingStore()->set('registrants', $value);
    }

    /**
     * Sets the registrationWebUrl property value. Registration URL of the virtual event.
     * @param string|null $value Value to set for the registrationWebUrl property.
    */
    public function setRegistrationWebUrl(?string $value): void {
        $this->getBackingStore()->set('registrationWebUrl', $value);
    }

}
