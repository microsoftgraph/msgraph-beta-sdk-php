<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties for the health summary of the Windows management app.
*/
class WindowsManagementAppHealthSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new WindowsManagementAppHealthSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsManagementAppHealthSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsManagementAppHealthSummary {
        return new WindowsManagementAppHealthSummary();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'healthyDeviceCount' => fn(ParseNode $n) => $o->setHealthyDeviceCount($n->getIntegerValue()),
            'unhealthyDeviceCount' => fn(ParseNode $n) => $o->setUnhealthyDeviceCount($n->getIntegerValue()),
            'unknownDeviceCount' => fn(ParseNode $n) => $o->setUnknownDeviceCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the healthyDeviceCount property value. Healthy device count.
     * @return int|null
    */
    public function getHealthyDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('healthyDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthyDeviceCount'");
    }

    /**
     * Gets the unhealthyDeviceCount property value. Unhealthy device count.
     * @return int|null
    */
    public function getUnhealthyDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('unhealthyDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unhealthyDeviceCount'");
    }

    /**
     * Gets the unknownDeviceCount property value. Unknown device count.
     * @return int|null
    */
    public function getUnknownDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('unknownDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unknownDeviceCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('healthyDeviceCount', $this->getHealthyDeviceCount());
        $writer->writeIntegerValue('unhealthyDeviceCount', $this->getUnhealthyDeviceCount());
        $writer->writeIntegerValue('unknownDeviceCount', $this->getUnknownDeviceCount());
    }

    /**
     * Sets the healthyDeviceCount property value. Healthy device count.
     * @param int|null $value Value to set for the healthyDeviceCount property.
    */
    public function setHealthyDeviceCount(?int $value): void {
        $this->getBackingStore()->set('healthyDeviceCount', $value);
    }

    /**
     * Sets the unhealthyDeviceCount property value. Unhealthy device count.
     * @param int|null $value Value to set for the unhealthyDeviceCount property.
    */
    public function setUnhealthyDeviceCount(?int $value): void {
        $this->getBackingStore()->set('unhealthyDeviceCount', $value);
    }

    /**
     * Sets the unknownDeviceCount property value. Unknown device count.
     * @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value): void {
        $this->getBackingStore()->set('unknownDeviceCount', $value);
    }

}
