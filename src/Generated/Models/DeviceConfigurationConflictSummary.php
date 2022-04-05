<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceConfigurationConflictSummary extends Entity 
{
    /** @var array<SettingSource>|null $conflictingDeviceConfigurations The set of policies in conflict with the given setting */
    private ?array $conflictingDeviceConfigurations = null;
    
    /** @var array<string>|null $contributingSettings The set of settings in conflict with the given policies */
    private ?array $contributingSettings = null;
    
    /** @var int|null $deviceCheckinsImpacted The count of checkins impacted by the conflicting policies and settings */
    private ?int $deviceCheckinsImpacted = null;
    
    /**
     * Instantiates a new deviceConfigurationConflictSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceConfigurationConflictSummary
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceConfigurationConflictSummary {
        return new DeviceConfigurationConflictSummary();
    }

    /**
     * Gets the conflictingDeviceConfigurations property value. The set of policies in conflict with the given setting
     * @return array<SettingSource>|null
    */
    public function getConflictingDeviceConfigurations(): ?array {
        return $this->conflictingDeviceConfigurations;
    }

    /**
     * Gets the contributingSettings property value. The set of settings in conflict with the given policies
     * @return array<string>|null
    */
    public function getContributingSettings(): ?array {
        return $this->contributingSettings;
    }

    /**
     * Gets the deviceCheckinsImpacted property value. The count of checkins impacted by the conflicting policies and settings
     * @return int|null
    */
    public function getDeviceCheckinsImpacted(): ?int {
        return $this->deviceCheckinsImpacted;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'conflictingDeviceConfigurations' => function (self $o, ParseNode $n) { $o->setConflictingDeviceConfigurations($n->getCollectionOfObjectValues(SettingSource::class)); },
            'contributingSettings' => function (self $o, ParseNode $n) { $o->setContributingSettings($n->getCollectionOfPrimitiveValues()); },
            'deviceCheckinsImpacted' => function (self $o, ParseNode $n) { $o->setDeviceCheckinsImpacted($n->getIntegerValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('conflictingDeviceConfigurations', $this->conflictingDeviceConfigurations);
        $writer->writeCollectionOfPrimitiveValues('contributingSettings', $this->contributingSettings);
        $writer->writeIntegerValue('deviceCheckinsImpacted', $this->deviceCheckinsImpacted);
    }

    /**
     * Sets the conflictingDeviceConfigurations property value. The set of policies in conflict with the given setting
     *  @param array<SettingSource>|null $value Value to set for the conflictingDeviceConfigurations property.
    */
    public function setConflictingDeviceConfigurations(?array $value ): void {
        $this->conflictingDeviceConfigurations = $value;
    }

    /**
     * Sets the contributingSettings property value. The set of settings in conflict with the given policies
     *  @param array<string>|null $value Value to set for the contributingSettings property.
    */
    public function setContributingSettings(?array $value ): void {
        $this->contributingSettings = $value;
    }

    /**
     * Sets the deviceCheckinsImpacted property value. The count of checkins impacted by the conflicting policies and settings
     *  @param int|null $value Value to set for the deviceCheckinsImpacted property.
    */
    public function setDeviceCheckinsImpacted(?int $value ): void {
        $this->deviceCheckinsImpacted = $value;
    }

}
