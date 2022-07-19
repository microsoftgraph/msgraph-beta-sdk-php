<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationReferenceSettingValue extends DeviceManagementConfigurationStringSettingValue implements Parsable 
{
    /**
     * @var string|null $note A note that admin can use to put some contextual information
    */
    private ?string $note = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationReferenceSettingValue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationReferenceSettingValue');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationReferenceSettingValue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationReferenceSettingValue {
        return new DeviceManagementConfigurationReferenceSettingValue();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'note' => function (ParseNode $n) use ($o) { $o->setNote($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the note property value. A note that admin can use to put some contextual information
     * @return string|null
    */
    public function getNote(): ?string {
        return $this->note;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('note', $this->note);
    }

    /**
     * Sets the note property value. A note that admin can use to put some contextual information
     *  @param string|null $value Value to set for the note property.
    */
    public function setNote(?string $value ): void {
        $this->note = $value;
    }

}
