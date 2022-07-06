<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConfigManagerPolicySummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $compliantDeviceCount The number of devices evaluated to be compliant by the policy.
    */
    private ?int $compliantDeviceCount = null;
    
    /**
     * @var int|null $enforcedDeviceCount The number of devices that have have been remediated by the policy.
    */
    private ?int $enforcedDeviceCount = null;
    
    /**
     * @var int|null $failedDeviceCount The number of devices that failed to be evaluated by the policy.
    */
    private ?int $failedDeviceCount = null;
    
    /**
     * @var int|null $nonCompliantDeviceCount The number of devices evaluated to be noncompliant by the policy.
    */
    private ?int $nonCompliantDeviceCount = null;
    
    /**
     * @var int|null $pendingDeviceCount The number of devices that have acknowledged the policy but are pending evaluation.
    */
    private ?int $pendingDeviceCount = null;
    
    /**
     * @var int|null $targetedDeviceCount The number of devices targeted by the policy.
    */
    private ?int $targetedDeviceCount = null;
    
    /**
     * Instantiates a new ConfigManagerPolicySummary and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigManagerPolicySummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfigManagerPolicySummary {
        return new ConfigManagerPolicySummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the compliantDeviceCount property value. The number of devices evaluated to be compliant by the policy.
     * @return int|null
    */
    public function getCompliantDeviceCount(): ?int {
        return $this->compliantDeviceCount;
    }

    /**
     * Gets the enforcedDeviceCount property value. The number of devices that have have been remediated by the policy.
     * @return int|null
    */
    public function getEnforcedDeviceCount(): ?int {
        return $this->enforcedDeviceCount;
    }

    /**
     * Gets the failedDeviceCount property value. The number of devices that failed to be evaluated by the policy.
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
        return  [
            'compliantDeviceCount' => function (ParseNode $n) use ($o) { $o->setCompliantDeviceCount($n->getIntegerValue()); },
            'enforcedDeviceCount' => function (ParseNode $n) use ($o) { $o->setEnforcedDeviceCount($n->getIntegerValue()); },
            'failedDeviceCount' => function (ParseNode $n) use ($o) { $o->setFailedDeviceCount($n->getIntegerValue()); },
            'nonCompliantDeviceCount' => function (ParseNode $n) use ($o) { $o->setNonCompliantDeviceCount($n->getIntegerValue()); },
            'pendingDeviceCount' => function (ParseNode $n) use ($o) { $o->setPendingDeviceCount($n->getIntegerValue()); },
            'targetedDeviceCount' => function (ParseNode $n) use ($o) { $o->setTargetedDeviceCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the nonCompliantDeviceCount property value. The number of devices evaluated to be noncompliant by the policy.
     * @return int|null
    */
    public function getNonCompliantDeviceCount(): ?int {
        return $this->nonCompliantDeviceCount;
    }

    /**
     * Gets the pendingDeviceCount property value. The number of devices that have acknowledged the policy but are pending evaluation.
     * @return int|null
    */
    public function getPendingDeviceCount(): ?int {
        return $this->pendingDeviceCount;
    }

    /**
     * Gets the targetedDeviceCount property value. The number of devices targeted by the policy.
     * @return int|null
    */
    public function getTargetedDeviceCount(): ?int {
        return $this->targetedDeviceCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('compliantDeviceCount', $this->compliantDeviceCount);
        $writer->writeIntegerValue('enforcedDeviceCount', $this->enforcedDeviceCount);
        $writer->writeIntegerValue('failedDeviceCount', $this->failedDeviceCount);
        $writer->writeIntegerValue('nonCompliantDeviceCount', $this->nonCompliantDeviceCount);
        $writer->writeIntegerValue('pendingDeviceCount', $this->pendingDeviceCount);
        $writer->writeIntegerValue('targetedDeviceCount', $this->targetedDeviceCount);
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
     * Sets the compliantDeviceCount property value. The number of devices evaluated to be compliant by the policy.
     *  @param int|null $value Value to set for the compliantDeviceCount property.
    */
    public function setCompliantDeviceCount(?int $value ): void {
        $this->compliantDeviceCount = $value;
    }

    /**
     * Sets the enforcedDeviceCount property value. The number of devices that have have been remediated by the policy.
     *  @param int|null $value Value to set for the enforcedDeviceCount property.
    */
    public function setEnforcedDeviceCount(?int $value ): void {
        $this->enforcedDeviceCount = $value;
    }

    /**
     * Sets the failedDeviceCount property value. The number of devices that failed to be evaluated by the policy.
     *  @param int|null $value Value to set for the failedDeviceCount property.
    */
    public function setFailedDeviceCount(?int $value ): void {
        $this->failedDeviceCount = $value;
    }

    /**
     * Sets the nonCompliantDeviceCount property value. The number of devices evaluated to be noncompliant by the policy.
     *  @param int|null $value Value to set for the nonCompliantDeviceCount property.
    */
    public function setNonCompliantDeviceCount(?int $value ): void {
        $this->nonCompliantDeviceCount = $value;
    }

    /**
     * Sets the pendingDeviceCount property value. The number of devices that have acknowledged the policy but are pending evaluation.
     *  @param int|null $value Value to set for the pendingDeviceCount property.
    */
    public function setPendingDeviceCount(?int $value ): void {
        $this->pendingDeviceCount = $value;
    }

    /**
     * Sets the targetedDeviceCount property value. The number of devices targeted by the policy.
     *  @param int|null $value Value to set for the targetedDeviceCount property.
    */
    public function setTargetedDeviceCount(?int $value ): void {
        $this->targetedDeviceCount = $value;
    }

}
