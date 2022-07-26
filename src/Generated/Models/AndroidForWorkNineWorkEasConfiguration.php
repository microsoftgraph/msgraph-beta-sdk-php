<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidForWorkNineWorkEasConfiguration extends AndroidForWorkEasEmailProfileBase implements Parsable 
{
    /**
     * @var bool|null $syncCalendar Toggles syncing the calendar. If set to false the calendar is turned off on the device.
    */
    private ?bool $syncCalendar = null;
    
    /**
     * @var bool|null $syncContacts Toggles syncing contacts. If set to false contacts are turned off on the device.
    */
    private ?bool $syncContacts = null;
    
    /**
     * @var bool|null $syncTasks Toggles syncing tasks. If set to false tasks are turned off on the device.
    */
    private ?bool $syncTasks = null;
    
    /**
     * Instantiates a new AndroidForWorkNineWorkEasConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidForWorkNineWorkEasConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidForWorkNineWorkEasConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidForWorkNineWorkEasConfiguration {
        return new AndroidForWorkNineWorkEasConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'syncCalendar' => function (ParseNode $n) use ($o) { $o->setSyncCalendar($n->getBooleanValue()); },
            'syncContacts' => function (ParseNode $n) use ($o) { $o->setSyncContacts($n->getBooleanValue()); },
            'syncTasks' => function (ParseNode $n) use ($o) { $o->setSyncTasks($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the syncCalendar property value. Toggles syncing the calendar. If set to false the calendar is turned off on the device.
     * @return bool|null
    */
    public function getSyncCalendar(): ?bool {
        return $this->syncCalendar;
    }

    /**
     * Gets the syncContacts property value. Toggles syncing contacts. If set to false contacts are turned off on the device.
     * @return bool|null
    */
    public function getSyncContacts(): ?bool {
        return $this->syncContacts;
    }

    /**
     * Gets the syncTasks property value. Toggles syncing tasks. If set to false tasks are turned off on the device.
     * @return bool|null
    */
    public function getSyncTasks(): ?bool {
        return $this->syncTasks;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('syncCalendar', $this->syncCalendar);
        $writer->writeBooleanValue('syncContacts', $this->syncContacts);
        $writer->writeBooleanValue('syncTasks', $this->syncTasks);
    }

    /**
     * Sets the syncCalendar property value. Toggles syncing the calendar. If set to false the calendar is turned off on the device.
     *  @param bool|null $value Value to set for the syncCalendar property.
    */
    public function setSyncCalendar(?bool $value ): void {
        $this->syncCalendar = $value;
    }

    /**
     * Sets the syncContacts property value. Toggles syncing contacts. If set to false contacts are turned off on the device.
     *  @param bool|null $value Value to set for the syncContacts property.
    */
    public function setSyncContacts(?bool $value ): void {
        $this->syncContacts = $value;
    }

    /**
     * Sets the syncTasks property value. Toggles syncing tasks. If set to false tasks are turned off on the device.
     *  @param bool|null $value Value to set for the syncTasks property.
    */
    public function setSyncTasks(?bool $value ): void {
        $this->syncTasks = $value;
    }

}
