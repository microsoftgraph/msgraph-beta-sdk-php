<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcServicePlan extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcServicePlan and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the displayName property value. The name for the service plan. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'ramInGB' => fn(ParseNode $n) => $o->setRamInGB($n->getIntegerValue()),
            'storageInGB' => fn(ParseNode $n) => $o->setStorageInGB($n->getIntegerValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(CloudPcServicePlanType::class)),
            'userProfileInGB' => fn(ParseNode $n) => $o->setUserProfileInGB($n->getIntegerValue()),
            'vCpuCount' => fn(ParseNode $n) => $o->setVCpuCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the ramInGB property value. The size of the RAM in GB. Read-only.
     * @return int|null
    */
    public function getRamInGB(): ?int {
        return $this->getBackingStore()->get('ramInGB');
    }

    /**
     * Gets the storageInGB property value. The size of the OS Disk in GB. Read-only.
     * @return int|null
    */
    public function getStorageInGB(): ?int {
        return $this->getBackingStore()->get('storageInGB');
    }

    /**
     * Gets the type property value. The type of the service plan. Possible values are: enterprise, business, unknownFutureValue. Read-only.
     * @return CloudPcServicePlanType|null
    */
    public function getType(): ?CloudPcServicePlanType {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Gets the userProfileInGB property value. The size of the user profile disk in GB. Read-only.
     * @return int|null
    */
    public function getUserProfileInGB(): ?int {
        return $this->getBackingStore()->get('userProfileInGB');
    }

    /**
     * Gets the vCpuCount property value. The number of vCPUs. Read-only.
     * @return int|null
    */
    public function getVCpuCount(): ?int {
        return $this->getBackingStore()->get('vCpuCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('ramInGB', $this->getRamInGB());
        $writer->writeIntegerValue('storageInGB', $this->getStorageInGB());
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeIntegerValue('userProfileInGB', $this->getUserProfileInGB());
        $writer->writeIntegerValue('vCpuCount', $this->getVCpuCount());
    }

    /**
     * Sets the displayName property value. The name for the service plan. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the ramInGB property value. The size of the RAM in GB. Read-only.
     *  @param int|null $value Value to set for the ramInGB property.
    */
    public function setRamInGB(?int $value): void {
        $this->getBackingStore()->set('ramInGB', $value);
    }

    /**
     * Sets the storageInGB property value. The size of the OS Disk in GB. Read-only.
     *  @param int|null $value Value to set for the storageInGB property.
    */
    public function setStorageInGB(?int $value): void {
        $this->getBackingStore()->set('storageInGB', $value);
    }

    /**
     * Sets the type property value. The type of the service plan. Possible values are: enterprise, business, unknownFutureValue. Read-only.
     *  @param CloudPcServicePlanType|null $value Value to set for the type property.
    */
    public function setType(?CloudPcServicePlanType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the userProfileInGB property value. The size of the user profile disk in GB. Read-only.
     *  @param int|null $value Value to set for the userProfileInGB property.
    */
    public function setUserProfileInGB(?int $value): void {
        $this->getBackingStore()->set('userProfileInGB', $value);
    }

    /**
     * Sets the vCpuCount property value. The number of vCPUs. Read-only.
     *  @param int|null $value Value to set for the vCpuCount property.
    */
    public function setVCpuCount(?int $value): void {
        $this->getBackingStore()->set('vCpuCount', $value);
    }

}
