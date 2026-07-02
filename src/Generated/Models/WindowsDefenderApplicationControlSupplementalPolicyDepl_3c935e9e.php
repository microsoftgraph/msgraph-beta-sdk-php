<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties for the deployment summary of a WindowsDefenderApplicationControl supplemental policy. Original name: windowsDefenderApplicationControlSupplementalPolicyDeploymentSummary
*/
class WindowsDefenderApplicationControlSupplementalPolicyDepl_3c935e9e extends Entity implements Parsable 
{
    /**
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicyDepl_3c935e9e and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDefenderApplicationControlSupplementalPolicyDepl_3c935e9e
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDefenderApplicationControlSupplementalPolicyDepl_3c935e9e {
        return new WindowsDefenderApplicationControlSupplementalPolicyDepl_3c935e9e();
    }

    /**
     * Gets the deployedDeviceCount property value. Number of Devices that have successfully deployed this WindowsDefenderApplicationControl supplemental policy.
     * @return int|null
    */
    public function getDeployedDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('deployedDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deployedDeviceCount'");
    }

    /**
     * Gets the failedDeviceCount property value. Number of Devices that have failed to deploy this WindowsDefenderApplicationControl supplemental policy.
     * @return int|null
    */
    public function getFailedDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('failedDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedDeviceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deployedDeviceCount' => fn(ParseNode $n) => $o->setDeployedDeviceCount($n->getIntegerValue()),
            'failedDeviceCount' => fn(ParseNode $n) => $o->setFailedDeviceCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('deployedDeviceCount', $this->getDeployedDeviceCount());
        $writer->writeIntegerValue('failedDeviceCount', $this->getFailedDeviceCount());
    }

    /**
     * Sets the deployedDeviceCount property value. Number of Devices that have successfully deployed this WindowsDefenderApplicationControl supplemental policy.
     * @param int|null $value Value to set for the deployedDeviceCount property.
    */
    public function setDeployedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('deployedDeviceCount', $value);
    }

    /**
     * Sets the failedDeviceCount property value. Number of Devices that have failed to deploy this WindowsDefenderApplicationControl supplemental policy.
     * @param int|null $value Value to set for the failedDeviceCount property.
    */
    public function setFailedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('failedDeviceCount', $value);
    }

}
