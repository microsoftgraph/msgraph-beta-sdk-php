<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemActivityOLD extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var ItemActionSet|null $action The action property
    */
    private ?ItemActionSet $action = null;
    
    /**
     * @var IdentitySet|null $actor The actor property
    */
    private ?IdentitySet $actor = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DriveItem|null $driveItem The driveItem property
    */
    private ?DriveItem $driveItem = null;
    
    /**
     * @var ListItem|null $listItem The listItem property
    */
    private ?ListItem $listItem = null;
    
    /**
     * @var ItemActivityTimeSet|null $times The times property
    */
    private ?ItemActivityTimeSet $times = null;
    
    /**
     * Instantiates a new itemActivityOLD and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
        return $this->action;
    }

    /**
     * Gets the actor property value. The actor property
     * @return IdentitySet|null
    */
    public function getActor(): ?IdentitySet {
        return $this->actor;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the driveItem property value. The driveItem property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'action' => function (ParseNode $n) use ($o) { $o->setAction($n->getObjectValue(array(ItemActionSet::class, 'createFromDiscriminatorValue'))); },
            'actor' => function (ParseNode $n) use ($o) { $o->setActor($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'driveItem' => function (ParseNode $n) use ($o) { $o->setDriveItem($n->getObjectValue(array(DriveItem::class, 'createFromDiscriminatorValue'))); },
            'listItem' => function (ParseNode $n) use ($o) { $o->setListItem($n->getObjectValue(array(ListItem::class, 'createFromDiscriminatorValue'))); },
            'times' => function (ParseNode $n) use ($o) { $o->setTimes($n->getObjectValue(array(ItemActivityTimeSet::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the listItem property value. The listItem property
     * @return ListItem|null
    */
    public function getListItem(): ?ListItem {
        return $this->listItem;
    }

    /**
     * Gets the times property value. The times property
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the action property value. The action property
     *  @param ItemActionSet|null $value Value to set for the action property.
    */
    public function setAction(?ItemActionSet $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the actor property value. The actor property
     *  @param IdentitySet|null $value Value to set for the actor property.
    */
    public function setActor(?IdentitySet $value ): void {
        $this->actor = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the driveItem property value. The driveItem property
     *  @param DriveItem|null $value Value to set for the driveItem property.
    */
    public function setDriveItem(?DriveItem $value ): void {
        $this->driveItem = $value;
    }

    /**
     * Sets the listItem property value. The listItem property
     *  @param ListItem|null $value Value to set for the listItem property.
    */
    public function setListItem(?ListItem $value ): void {
        $this->listItem = $value;
    }

    /**
     * Sets the times property value. The times property
     *  @param ItemActivityTimeSet|null $value Value to set for the times property.
    */
    public function setTimes(?ItemActivityTimeSet $value ): void {
        $this->times = $value;
    }

}
