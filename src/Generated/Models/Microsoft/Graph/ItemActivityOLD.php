<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemActivityOLD extends Entity 
{
    /** @var ItemActionSet|null $action  */
    private ?ItemActionSet $action = null;
    
    /** @var IdentitySet|null $actor  */
    private ?IdentitySet $actor = null;
    
    /** @var DriveItem|null $driveItem  */
    private ?DriveItem $driveItem = null;
    
    /** @var ListItem|null $listItem  */
    private ?ListItem $listItem = null;
    
    /** @var ItemActivityTimeSet|null $times  */
    private ?ItemActivityTimeSet $times = null;
    
    /**
     * Instantiates a new itemActivityOLD and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemActivityOLD
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ItemActivityOLD {
        return new ItemActivityOLD();
    }

    /**
     * Gets the action property value. 
     * @return ItemActionSet|null
    */
    public function getAction(): ?ItemActionSet {
        return $this->action;
    }

    /**
     * Gets the actor property value. 
     * @return IdentitySet|null
    */
    public function getActor(): ?IdentitySet {
        return $this->actor;
    }

    /**
     * Gets the driveItem property value. 
     * @return DriveItem|null
    */
    public function getDriveItem(): ?DriveItem {
        return $this->driveItem;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'action' => function (self $o, ParseNode $n) { $o->setAction($n->getObjectValue(ItemActionSet::class)); },
            'actor' => function (self $o, ParseNode $n) { $o->setActor($n->getObjectValue(IdentitySet::class)); },
            'driveItem' => function (self $o, ParseNode $n) { $o->setDriveItem($n->getObjectValue(DriveItem::class)); },
            'listItem' => function (self $o, ParseNode $n) { $o->setListItem($n->getObjectValue(ListItem::class)); },
            'times' => function (self $o, ParseNode $n) { $o->setTimes($n->getObjectValue(ItemActivityTimeSet::class)); },
        ]);
    }

    /**
     * Gets the listItem property value. 
     * @return ListItem|null
    */
    public function getListItem(): ?ListItem {
        return $this->listItem;
    }

    /**
     * Gets the times property value. 
     * @return ItemActivityTimeSet|null
    */
    public function getTimes(): ?ItemActivityTimeSet {
        return $this->times;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('action', $this->action);
        $writer->writeObjectValue('actor', $this->actor);
        $writer->writeObjectValue('driveItem', $this->driveItem);
        $writer->writeObjectValue('listItem', $this->listItem);
        $writer->writeObjectValue('times', $this->times);
    }

    /**
     * Sets the action property value. 
     *  @param ItemActionSet|null $value Value to set for the action property.
    */
    public function setAction(?ItemActionSet $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the actor property value. 
     *  @param IdentitySet|null $value Value to set for the actor property.
    */
    public function setActor(?IdentitySet $value ): void {
        $this->actor = $value;
    }

    /**
     * Sets the driveItem property value. 
     *  @param DriveItem|null $value Value to set for the driveItem property.
    */
    public function setDriveItem(?DriveItem $value ): void {
        $this->driveItem = $value;
    }

    /**
     * Sets the listItem property value. 
     *  @param ListItem|null $value Value to set for the listItem property.
    */
    public function setListItem(?ListItem $value ): void {
        $this->listItem = $value;
    }

    /**
     * Sets the times property value. 
     *  @param ItemActivityTimeSet|null $value Value to set for the times property.
    */
    public function setTimes(?ItemActivityTimeSet $value ): void {
        $this->times = $value;
    }

}
