<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsCloudManagementDevicesSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $coManagedDeviceCount Total number of  co-managed devices.
    */
    private ?int $coManagedDeviceCount = null;
    
    /**
     * @var int|null $intuneDeviceCount The count of intune devices that are not autopilot registerd.
    */
    private ?int $intuneDeviceCount = null;
    
    /**
     * @var int|null $tenantAttachDeviceCount Total count of tenant attach devices.
    */
    private ?int $tenantAttachDeviceCount = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsCloudManagementDevicesSummary and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsCloudManagementDevicesSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsCloudManagementDevicesSummary {
        return new UserExperienceAnalyticsCloudManagementDevicesSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the coManagedDeviceCount property value. Total number of  co-managed devices.
     * @return int|null
    */
    public function getCoManagedDeviceCount(): ?int {
        return $this->coManagedDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'coManagedDeviceCount' => function (ParseNode $n) use ($o) { $o->setCoManagedDeviceCount($n->getIntegerValue()); },
            'intuneDeviceCount' => function (ParseNode $n) use ($o) { $o->setIntuneDeviceCount($n->getIntegerValue()); },
            'tenantAttachDeviceCount' => function (ParseNode $n) use ($o) { $o->setTenantAttachDeviceCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the intuneDeviceCount property value. The count of intune devices that are not autopilot registerd.
     * @return int|null
    */
    public function getIntuneDeviceCount(): ?int {
        return $this->intuneDeviceCount;
    }

    /**
     * Gets the tenantAttachDeviceCount property value. Total count of tenant attach devices.
     * @return int|null
    */
    public function getTenantAttachDeviceCount(): ?int {
        return $this->tenantAttachDeviceCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('coManagedDeviceCount', $this->coManagedDeviceCount);
        $writer->writeIntegerValue('intuneDeviceCount', $this->intuneDeviceCount);
        $writer->writeIntegerValue('tenantAttachDeviceCount', $this->tenantAttachDeviceCount);
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
     * Sets the coManagedDeviceCount property value. Total number of  co-managed devices.
     *  @param int|null $value Value to set for the coManagedDeviceCount property.
    */
    public function setCoManagedDeviceCount(?int $value ): void {
        $this->coManagedDeviceCount = $value;
    }

    /**
     * Sets the intuneDeviceCount property value. The count of intune devices that are not autopilot registerd.
     *  @param int|null $value Value to set for the intuneDeviceCount property.
    */
    public function setIntuneDeviceCount(?int $value ): void {
        $this->intuneDeviceCount = $value;
    }

    /**
     * Sets the tenantAttachDeviceCount property value. Total count of tenant attach devices.
     *  @param int|null $value Value to set for the tenantAttachDeviceCount property.
    */
    public function setTenantAttachDeviceCount(?int $value ): void {
        $this->tenantAttachDeviceCount = $value;
    }

}
