<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemActivityOLD extends Entity implements Parsable 
{
    /**
     * Instantiates a new ItemActivityOLD and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemActivityOLD
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemActivityOLD {
        return new ItemActivityOLD();
    }

    /**
     * Gets the action property value. The action property
     * @return ItemActionSet|null
    */
    public function getAction(): ?ItemActionSet {
        $val = $this->getBackingStore()->get('action');
        if (is_null($val) || $val instanceof ItemActionSet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'action'");
    }

    /**
     * Gets the actor property value. The actor property
     * @return IdentitySet|null
    */
    public function getActor(): ?IdentitySet {
        $val = $this->getBackingStore()->get('actor');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actor'");
    }

    /**
     * Gets the driveItem property value. The driveItem property
     * @return DriveItem|null
    */
    public function getDriveItem(): ?DriveItem {
        $val = $this->getBackingStore()->get('driveItem');
        if (is_null($val) || $val instanceof DriveItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driveItem'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'action' => fn(ParseNode $n) => $o->setAction($n->getObjectValue([ItemActionSet::class, 'createFromDiscriminatorValue'])),
            'actor' => fn(ParseNode $n) => $o->setActor($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'driveItem' => fn(ParseNode $n) => $o->setDriveItem($n->getObjectValue([DriveItem::class, 'createFromDiscriminatorValue'])),
            'listItem' => fn(ParseNode $n) => $o->setListItem($n->getObjectValue([ListItem::class, 'createFromDiscriminatorValue'])),
            'times' => fn(ParseNode $n) => $o->setTimes($n->getObjectValue([ItemActivityTimeSet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the listItem property value. The listItem property
     * @return ListItem|null
    */
    public function getListItem(): ?ListItem {
        $val = $this->getBackingStore()->get('listItem');
        if (is_null($val) || $val instanceof ListItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'listItem'");
    }

    /**
     * Gets the times property value. The times property
     * @return ItemActivityTimeSet|null
    */
    public function getTimes(): ?ItemActivityTimeSet {
        $val = $this->getBackingStore()->get('times');
        if (is_null($val) || $val instanceof ItemActivityTimeSet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'times'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('action', $this->getAction());
        $writer->writeObjectValue('actor', $this->getActor());
        $writer->writeObjectValue('driveItem', $this->getDriveItem());
        $writer->writeObjectValue('listItem', $this->getListItem());
        $writer->writeObjectValue('times', $this->getTimes());
    }

    /**
     * Sets the action property value. The action property
     * @param ItemActionSet|null $value Value to set for the action property.
    */
    public function setAction(?ItemActionSet $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the actor property value. The actor property
     * @param IdentitySet|null $value Value to set for the actor property.
    */
    public function setActor(?IdentitySet $value): void {
        $this->getBackingStore()->set('actor', $value);
    }

    /**
     * Sets the driveItem property value. The driveItem property
     * @param DriveItem|null $value Value to set for the driveItem property.
    */
    public function setDriveItem(?DriveItem $value): void {
        $this->getBackingStore()->set('driveItem', $value);
    }

    /**
     * Sets the listItem property value. The listItem property
     * @param ListItem|null $value Value to set for the listItem property.
    */
    public function setListItem(?ListItem $value): void {
        $this->getBackingStore()->set('listItem', $value);
    }

    /**
     * Sets the times property value. The times property
     * @param ItemActivityTimeSet|null $value Value to set for the times property.
    */
    public function setTimes(?ItemActivityTimeSet $value): void {
        $this->getBackingStore()->set('times', $value);
    }

}
