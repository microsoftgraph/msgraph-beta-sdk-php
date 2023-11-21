<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VirtualEventSession extends OnlineMeetingBase implements Parsable 
{
    /**
     * Instantiates a new virtualEventSession and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.virtualEventSession');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEventSession
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEventSession {
        return new VirtualEventSession();
    }

    /**
     * Gets the endDateTime property value. The endDateTime property
     * @return DateTimeTimeZone|null
    */
    public function getEndDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'presenters' => fn(ParseNode $n) => $o->setPresenters($n->getCollectionOfObjectValues([VirtualEventPresenter::class, 'createFromDiscriminatorValue'])),
            'registrations' => fn(ParseNode $n) => $o->setRegistrations($n->getCollectionOfObjectValues([VirtualEventRegistration::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the presenters property value. The presenters property
     * @return array<VirtualEventPresenter>|null
    */
    public function getPresenters(): ?array {
        $val = $this->getBackingStore()->get('presenters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VirtualEventPresenter::class);
            /** @var array<VirtualEventPresenter>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'presenters'");
    }

    /**
     * Gets the registrations property value. The registrations property
     * @return array<VirtualEventRegistration>|null
    */
    public function getRegistrations(): ?array {
        $val = $this->getBackingStore()->get('registrations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VirtualEventRegistration::class);
            /** @var array<VirtualEventRegistration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrations'");
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
     * @return DateTimeTimeZone|null
    */
    public function getStartDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('endDateTime', $this->getEndDateTime());
        $writer->writeCollectionOfObjectValues('presenters', $this->getPresenters());
        $writer->writeCollectionOfObjectValues('registrations', $this->getRegistrations());
        $writer->writeObjectValue('startDateTime', $this->getStartDateTime());
    }

    /**
     * Sets the endDateTime property value. The endDateTime property
     * @param DateTimeTimeZone|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the presenters property value. The presenters property
     * @param array<VirtualEventPresenter>|null $value Value to set for the presenters property.
    */
    public function setPresenters(?array $value): void {
        $this->getBackingStore()->set('presenters', $value);
    }

    /**
     * Sets the registrations property value. The registrations property
     * @param array<VirtualEventRegistration>|null $value Value to set for the registrations property.
    */
    public function setRegistrations(?array $value): void {
        $this->getBackingStore()->set('registrations', $value);
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     * @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

}
