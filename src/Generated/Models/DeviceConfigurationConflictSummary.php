<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Conflict summary for a set of device configuration policies.
*/
class DeviceConfigurationConflictSummary extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceConfigurationConflictSummary {
        return new DeviceConfigurationConflictSummary();
    }

    /**
     * Gets the conflictingDeviceConfigurations property value. The set of policies in conflict with the given setting
     * @return array<SettingSource>|null
    */
    public function getConflictingDeviceConfigurations(): ?array {
        $val = $this->getBackingStore()->get('conflictingDeviceConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SettingSource::class);
            /** @var array<SettingSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conflictingDeviceConfigurations'");
    }

    /**
     * Gets the contributingSettings property value. The set of settings in conflict with the given policies
     * @return array<string>|null
    */
    public function getContributingSettings(): ?array {
        $val = $this->getBackingStore()->get('contributingSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contributingSettings'");
    }

    /**
     * Gets the deviceCheckinsImpacted property value. The count of checkins impacted by the conflicting policies and settings
     * @return int|null
    */
    public function getDeviceCheckinsImpacted(): ?int {
        $val = $this->getBackingStore()->get('deviceCheckinsImpacted');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCheckinsImpacted'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conflictingDeviceConfigurations' => fn(ParseNode $n) => $o->setConflictingDeviceConfigurations($n->getCollectionOfObjectValues([SettingSource::class, 'createFromDiscriminatorValue'])),
            'contributingSettings' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setContributingSettings($val);
            },
            'deviceCheckinsImpacted' => fn(ParseNode $n) => $o->setDeviceCheckinsImpacted($n->getIntegerValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('conflictingDeviceConfigurations', $this->getConflictingDeviceConfigurations());
        $writer->writeCollectionOfPrimitiveValues('contributingSettings', $this->getContributingSettings());
        $writer->writeIntegerValue('deviceCheckinsImpacted', $this->getDeviceCheckinsImpacted());
    }

    /**
     * Sets the conflictingDeviceConfigurations property value. The set of policies in conflict with the given setting
     * @param array<SettingSource>|null $value Value to set for the conflictingDeviceConfigurations property.
    */
    public function setConflictingDeviceConfigurations(?array $value): void {
        $this->getBackingStore()->set('conflictingDeviceConfigurations', $value);
    }

    /**
     * Sets the contributingSettings property value. The set of settings in conflict with the given policies
     * @param array<string>|null $value Value to set for the contributingSettings property.
    */
    public function setContributingSettings(?array $value): void {
        $this->getBackingStore()->set('contributingSettings', $value);
    }

    /**
     * Sets the deviceCheckinsImpacted property value. The count of checkins impacted by the conflicting policies and settings
     * @param int|null $value Value to set for the deviceCheckinsImpacted property.
    */
    public function setDeviceCheckinsImpacted(?int $value): void {
        $this->getBackingStore()->set('deviceCheckinsImpacted', $value);
    }

}
