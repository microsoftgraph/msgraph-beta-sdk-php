<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GenericCase extends EscapedCase implements Parsable 
{
    /**
     * Instantiates a new GenericCase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.caseManagement.genericCase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GenericCase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GenericCase {
        return new GenericCase();
    }

    /**
     * Gets the assignedTo property value. The user assigned to the generic case. Supports $filter and $orderby.
     * @return string|null
    */
    public function getAssignedTo(): ?string {
        $val = $this->getBackingStore()->get('assignedTo');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedTo'");
    }

    /**
     * Gets the closingNotes property value. Notes recorded when the generic case is closed. Supports $filter.
     * @return string|null
    */
    public function getClosingNotes(): ?string {
        $val = $this->getBackingStore()->get('closingNotes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'closingNotes'");
    }

    /**
     * Gets the description property value. The description of the generic case. Supports $filter.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the dueDateTime property value. The target completion date and time for the generic case. Supports $filter.
     * @return DateTime|null
    */
    public function getDueDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('dueDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dueDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getStringValue()),
            'closingNotes' => fn(ParseNode $n) => $o->setClosingNotes($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'dueDateTime' => fn(ParseNode $n) => $o->setDueDateTime($n->getDateTimeValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getStringValue()),
        ]);
    }

    /**
     * Gets the priority property value. The priority assigned to the generic case. Possible values are: veryLow, low, medium, high, and critical. Supports $filter.
     * @return string|null
    */
    public function getPriority(): ?string {
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignedTo', $this->getAssignedTo());
        $writer->writeStringValue('closingNotes', $this->getClosingNotes());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeDateTimeValue('dueDateTime', $this->getDueDateTime());
        $writer->writeStringValue('priority', $this->getPriority());
    }

    /**
     * Sets the assignedTo property value. The user assigned to the generic case. Supports $filter and $orderby.
     * @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the closingNotes property value. Notes recorded when the generic case is closed. Supports $filter.
     * @param string|null $value Value to set for the closingNotes property.
    */
    public function setClosingNotes(?string $value): void {
        $this->getBackingStore()->set('closingNotes', $value);
    }

    /**
     * Sets the description property value. The description of the generic case. Supports $filter.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the dueDateTime property value. The target completion date and time for the generic case. Supports $filter.
     * @param DateTime|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('dueDateTime', $value);
    }

    /**
     * Sets the priority property value. The priority assigned to the generic case. Possible values are: veryLow, low, medium, high, and critical. Supports $filter.
     * @param string|null $value Value to set for the priority property.
    */
    public function setPriority(?string $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

}
