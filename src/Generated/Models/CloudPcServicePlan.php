<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcServicePlan extends Entity 
{
    /** @var string|null $displayName The name for the service plan. Read-only. */
    private ?string $displayName = null;
    
    /** @var int|null $ramInGB The size of the RAM in GB. Read-only. */
    private ?int $ramInGB = null;
    
    /** @var int|null $storageInGB The size of the OS Disk in GB. Read-only. */
    private ?int $storageInGB = null;
    
    /** @var CloudPcServicePlanType|null $type The type of the service plan. Possible values are: enterprise, business, unknownFutureValue. Read-only. */
    private ?CloudPcServicePlanType $type = null;
    
    /** @var int|null $userProfileInGB The size of the user profile disk in GB. Read-only. */
    private ?int $userProfileInGB = null;
    
    /** @var int|null $vCpuCount The number of vCPUs. Read-only. */
    private ?int $vCpuCount = null;
    
    /**
     * Instantiates a new cloudPcServicePlan and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcServicePlan
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcServicePlan {
        return new CloudPcServicePlan();
    }

    /**
     * Gets the displayName property value. The name for the service plan. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'ramInGB' => function (self $o, ParseNode $n) { $o->setRamInGB($n->getIntegerValue()); },
            'storageInGB' => function (self $o, ParseNode $n) { $o->setStorageInGB($n->getIntegerValue()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getEnumValue(CloudPcServicePlanType::class)); },
            'userProfileInGB' => function (self $o, ParseNode $n) { $o->setUserProfileInGB($n->getIntegerValue()); },
            'vCpuCount' => function (self $o, ParseNode $n) { $o->setVCpuCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the ramInGB property value. The size of the RAM in GB. Read-only.
     * @return int|null
    */
    public function getRamInGB(): ?int {
        return $this->ramInGB;
    }

    /**
     * Gets the storageInGB property value. The size of the OS Disk in GB. Read-only.
     * @return int|null
    */
    public function getStorageInGB(): ?int {
        return $this->storageInGB;
    }

    /**
     * Gets the type property value. The type of the service plan. Possible values are: enterprise, business, unknownFutureValue. Read-only.
     * @return CloudPcServicePlanType|null
    */
    public function getType(): ?CloudPcServicePlanType {
        return $this->type;
    }

    /**
     * Gets the userProfileInGB property value. The size of the user profile disk in GB. Read-only.
     * @return int|null
    */
    public function getUserProfileInGB(): ?int {
        return $this->userProfileInGB;
    }

    /**
     * Gets the vCpuCount property value. The number of vCPUs. Read-only.
     * @return int|null
    */
    public function getVCpuCount(): ?int {
        return $this->vCpuCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeIntegerValue('ramInGB', $this->ramInGB);
        $writer->writeIntegerValue('storageInGB', $this->storageInGB);
        $writer->writeEnumValue('type', $this->type);
        $writer->writeIntegerValue('userProfileInGB', $this->userProfileInGB);
        $writer->writeIntegerValue('vCpuCount', $this->vCpuCount);
    }

    /**
     * Sets the displayName property value. The name for the service plan. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the ramInGB property value. The size of the RAM in GB. Read-only.
     *  @param int|null $value Value to set for the ramInGB property.
    */
    public function setRamInGB(?int $value ): void {
        $this->ramInGB = $value;
    }

    /**
     * Sets the storageInGB property value. The size of the OS Disk in GB. Read-only.
     *  @param int|null $value Value to set for the storageInGB property.
    */
    public function setStorageInGB(?int $value ): void {
        $this->storageInGB = $value;
    }

    /**
     * Sets the type property value. The type of the service plan. Possible values are: enterprise, business, unknownFutureValue. Read-only.
     *  @param CloudPcServicePlanType|null $value Value to set for the type property.
    */
    public function setType(?CloudPcServicePlanType $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the userProfileInGB property value. The size of the user profile disk in GB. Read-only.
     *  @param int|null $value Value to set for the userProfileInGB property.
    */
    public function setUserProfileInGB(?int $value ): void {
        $this->userProfileInGB = $value;
    }

    /**
     * Sets the vCpuCount property value. The number of vCPUs. Read-only.
     *  @param int|null $value Value to set for the vCpuCount property.
    */
    public function setVCpuCount(?int $value ): void {
        $this->vCpuCount = $value;
    }

}
