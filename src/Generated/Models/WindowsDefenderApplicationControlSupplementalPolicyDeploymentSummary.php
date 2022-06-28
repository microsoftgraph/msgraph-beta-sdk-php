<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $deployedDeviceCount Number of Devices that have successfully deployed this WindowsDefenderApplicationControl supplemental policy.
    */
    private ?int $deployedDeviceCount = null;
    
    /**
     * @var int|null $failedDeviceCount Number of Devices that have failed to deploy this WindowsDefenderApplicationControl supplemental policy.
    */
    private ?int $failedDeviceCount = null;
    
    /**
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
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
