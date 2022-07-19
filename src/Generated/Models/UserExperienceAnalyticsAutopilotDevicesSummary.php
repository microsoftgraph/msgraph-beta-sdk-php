<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsAutopilotDevicesSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $devicesNotAutopilotRegistered The count of intune devices that are not autopilot registerd.
    */
    private ?int $devicesNotAutopilotRegistered = null;
    
    /**
     * @var int|null $devicesWithoutAutopilotProfileAssigned The count of intune devices not autopilot profile assigned.
    */
    private ?int $devicesWithoutAutopilotProfileAssigned = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $totalWindows10DevicesWithoutTenantAttached The count of windows 10 devices that are Intune and Comanaged.
    */
    private ?int $totalWindows10DevicesWithoutTenantAttached = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsAutopilotDevicesSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsAutopilotDevicesSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsAutopilotDevicesSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsAutopilotDevicesSummary {
        return new UserExperienceAnalyticsAutopilotDevicesSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the devicesNotAutopilotRegistered property value. The count of intune devices that are not autopilot registerd.
     * @return int|null
    */
    public function getDevicesNotAutopilotRegistered(): ?int {
        return $this->devicesNotAutopilotRegistered;
    }

    /**
     * Gets the devicesWithoutAutopilotProfileAssigned property value. The count of intune devices not autopilot profile assigned.
     * @return int|null
    */
    public function getDevicesWithoutAutopilotProfileAssigned(): ?int {
        return $this->devicesWithoutAutopilotProfileAssigned;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'devicesNotAutopilotRegistered' => function (ParseNode $n) use ($o) { $o->setDevicesNotAutopilotRegistered($n->getIntegerValue()); },
            'devicesWithoutAutopilotProfileAssigned' => function (ParseNode $n) use ($o) { $o->setDevicesWithoutAutopilotProfileAssigned($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'totalWindows10DevicesWithoutTenantAttached' => function (ParseNode $n) use ($o) { $o->setTotalWindows10DevicesWithoutTenantAttached($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the totalWindows10DevicesWithoutTenantAttached property value. The count of windows 10 devices that are Intune and Comanaged.
     * @return int|null
    */
    public function getTotalWindows10DevicesWithoutTenantAttached(): ?int {
        return $this->totalWindows10DevicesWithoutTenantAttached;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('devicesNotAutopilotRegistered', $this->devicesNotAutopilotRegistered);
        $writer->writeIntegerValue('devicesWithoutAutopilotProfileAssigned', $this->devicesWithoutAutopilotProfileAssigned);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('totalWindows10DevicesWithoutTenantAttached', $this->totalWindows10DevicesWithoutTenantAttached);
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
     * Sets the devicesNotAutopilotRegistered property value. The count of intune devices that are not autopilot registerd.
     *  @param int|null $value Value to set for the devicesNotAutopilotRegistered property.
    */
    public function setDevicesNotAutopilotRegistered(?int $value ): void {
        $this->devicesNotAutopilotRegistered = $value;
    }

    /**
     * Sets the devicesWithoutAutopilotProfileAssigned property value. The count of intune devices not autopilot profile assigned.
     *  @param int|null $value Value to set for the devicesWithoutAutopilotProfileAssigned property.
    */
    public function setDevicesWithoutAutopilotProfileAssigned(?int $value ): void {
        $this->devicesWithoutAutopilotProfileAssigned = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the totalWindows10DevicesWithoutTenantAttached property value. The count of windows 10 devices that are Intune and Comanaged.
     *  @param int|null $value Value to set for the totalWindows10DevicesWithoutTenantAttached property.
    */
    public function setTotalWindows10DevicesWithoutTenantAttached(?int $value ): void {
        $this->totalWindows10DevicesWithoutTenantAttached = $value;
    }

}
