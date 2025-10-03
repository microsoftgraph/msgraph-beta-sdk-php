<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Define the rule when the admin wants the devices to be cleaned up.
*/
class ManagedDeviceCleanupRule extends Entity implements Parsable 
{
    /**
     * Instantiates a new ManagedDeviceCleanupRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceCleanupRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceCleanupRule {
        return new ManagedDeviceCleanupRule();
    }

    /**
     * Gets the description property value. Indicates the description for the device clean up rule.
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
     * Gets the deviceCleanupRulePlatformType property value. Define the platform type for which the admin wants to create the device clean up rule
     * @return DeviceCleanupRulePlatformType|null
    */
    public function getDeviceCleanupRulePlatformType(): ?DeviceCleanupRulePlatformType {
        $val = $this->getBackingStore()->get('deviceCleanupRulePlatformType');
        if (is_null($val) || $val instanceof DeviceCleanupRulePlatformType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCleanupRulePlatformType'");
    }

    /**
     * Gets the deviceInactivityBeforeRetirementInDays property value. Indicates the number of days when the device has not contacted Intune. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getDeviceInactivityBeforeRetirementInDays(): ?int {
        $val = $this->getBackingStore()->get('deviceInactivityBeforeRetirementInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceInactivityBeforeRetirementInDays'");
    }

    /**
     * Gets the displayName property value. Indicates the display name of the device cleanup rule.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceCleanupRulePlatformType' => fn(ParseNode $n) => $o->setDeviceCleanupRulePlatformType($n->getEnumValue(DeviceCleanupRulePlatformType::class)),
            'deviceInactivityBeforeRetirementInDays' => fn(ParseNode $n) => $o->setDeviceInactivityBeforeRetirementInDays($n->getIntegerValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Indicates the date and time when the device cleanup rule was last modified. This property is read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeEnumValue('deviceCleanupRulePlatformType', $this->getDeviceCleanupRulePlatformType());
        $writer->writeIntegerValue('deviceInactivityBeforeRetirementInDays', $this->getDeviceInactivityBeforeRetirementInDays());
        $writer->writeStringValue('displayName', $this->getDisplayName());
    }

    /**
     * Sets the description property value. Indicates the description for the device clean up rule.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceCleanupRulePlatformType property value. Define the platform type for which the admin wants to create the device clean up rule
     * @param DeviceCleanupRulePlatformType|null $value Value to set for the deviceCleanupRulePlatformType property.
    */
    public function setDeviceCleanupRulePlatformType(?DeviceCleanupRulePlatformType $value): void {
        $this->getBackingStore()->set('deviceCleanupRulePlatformType', $value);
    }

    /**
     * Sets the deviceInactivityBeforeRetirementInDays property value. Indicates the number of days when the device has not contacted Intune. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the deviceInactivityBeforeRetirementInDays property.
    */
    public function setDeviceInactivityBeforeRetirementInDays(?int $value): void {
        $this->getBackingStore()->set('deviceInactivityBeforeRetirementInDays', $value);
    }

    /**
     * Sets the displayName property value. Indicates the display name of the device cleanup rule.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Indicates the date and time when the device cleanup rule was last modified. This property is read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

}
