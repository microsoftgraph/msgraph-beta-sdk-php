<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary extends Entity implements Parsable 
{
    /**
     * @var int|null $deployedDeviceCount Number of Devices that have successfully deployed this WindowsDefenderApplicationControl supplemental policy.
    */
    private ?int $deployedDeviceCount = null;
    
    /**
     * @var int|null $failedDeviceCount Number of Devices that have failed to deploy this WindowsDefenderApplicationControl supplemental policy.
    */
    private ?int $failedDeviceCount = null;
    
    /**
     * Instantiates a new windowsDefenderApplicationControlSupplementalPolicyDeploymentSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary {
        return new WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary();
    }

    /**
     * Gets the deployedDeviceCount property value. Number of Devices that have successfully deployed this WindowsDefenderApplicationControl supplemental policy.
     * @return int|null
    */
    public function getDeployedDeviceCount(): ?int {
        return $this->deployedDeviceCount;
    }

    /**
     * Gets the failedDeviceCount property value. Number of Devices that have failed to deploy this WindowsDefenderApplicationControl supplemental policy.
     * @return int|null
    */
    public function getFailedDeviceCount(): ?int {
        return $this->failedDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deployedDeviceCount' => function (ParseNode $n) use ($o) { $o->setDeployedDeviceCount($n->getIntegerValue()); },
            'failedDeviceCount' => function (ParseNode $n) use ($o) { $o->setFailedDeviceCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('deployedDeviceCount', $this->deployedDeviceCount);
        $writer->writeIntegerValue('failedDeviceCount', $this->failedDeviceCount);
    }

    /**
     * Sets the deployedDeviceCount property value. Number of Devices that have successfully deployed this WindowsDefenderApplicationControl supplemental policy.
     *  @param int|null $value Value to set for the deployedDeviceCount property.
    */
    public function setDeployedDeviceCount(?int $value ): void {
        $this->deployedDeviceCount = $value;
    }

    /**
     * Sets the failedDeviceCount property value. Number of Devices that have failed to deploy this WindowsDefenderApplicationControl supplemental policy.
     *  @param int|null $value Value to set for the failedDeviceCount property.
    */
    public function setFailedDeviceCount(?int $value ): void {
        $this->failedDeviceCount = $value;
    }

}
