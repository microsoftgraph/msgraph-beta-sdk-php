<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcServicePlan extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName The name for the service plan. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var int|null $ramInGB The size of the RAM in GB. Read-only.
    */
    private ?int $ramInGB = null;
    
    /**
     * @var int|null $storageInGB The size of the OS Disk in GB. Read-only.
    */
    private ?int $storageInGB = null;
    
    /**
     * @var CloudPcServicePlanType|null $type The type of the service plan. Possible values are: enterprise, business, unknownFutureValue. Read-only.
    */
    private ?CloudPcServicePlanType $type = null;
    
    /**
     * @var int|null $userProfileInGB The size of the user profile disk in GB. Read-only.
    */
    private ?int $userProfileInGB = null;
    
    /**
     * @var int|null $vCpuCount The number of vCPUs. Read-only.
    */
    private ?int $vCpuCount = null;
    
    /**
     * Instantiates a new CloudPcServicePlan and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcServicePlan
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcServicePlan {
        return new CloudPcServicePlan();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'ramInGB' => function (ParseNode $n) use ($o) { $o->setRamInGB($n->getIntegerValue()); },
            'storageInGB' => function (ParseNode $n) use ($o) { $o->setStorageInGB($n->getIntegerValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(CloudPcServicePlanType::class)); },
            'userProfileInGB' => function (ParseNode $n) use ($o) { $o->setUserProfileInGB($n->getIntegerValue()); },
            'vCpuCount' => function (ParseNode $n) use ($o) { $o->setVCpuCount($n->getIntegerValue()); },
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
