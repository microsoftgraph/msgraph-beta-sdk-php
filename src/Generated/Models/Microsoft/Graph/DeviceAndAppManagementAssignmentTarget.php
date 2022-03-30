<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceAndAppManagementAssignmentTarget implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $deviceAndAppManagementAssignmentFilterId The Id of the filter for the target assignment. */
    private ?string $deviceAndAppManagementAssignmentFilterId = null;
    
    /** @var DeviceAndAppManagementAssignmentFilterType|null $deviceAndAppManagementAssignmentFilterType The type of filter of the target assignment i.e. Exclude or Include. Possible values are: none, include, exclude. */
    private ?DeviceAndAppManagementAssignmentFilterType $deviceAndAppManagementAssignmentFilterType = null;
    
    /**
     * Instantiates a new deviceAndAppManagementAssignmentTarget and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceAndAppManagementAssignmentTarget
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceAndAppManagementAssignmentTarget {
        return new DeviceAndAppManagementAssignmentTarget();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceAndAppManagementAssignmentFilterId property value. The Id of the filter for the target assignment.
     * @return string|null
    */
    public function getDeviceAndAppManagementAssignmentFilterId(): ?string {
        return $this->deviceAndAppManagementAssignmentFilterId;
    }

    /**
     * Gets the deviceAndAppManagementAssignmentFilterType property value. The type of filter of the target assignment i.e. Exclude or Include. Possible values are: none, include, exclude.
     * @return DeviceAndAppManagementAssignmentFilterType|null
    */
    public function getDeviceAndAppManagementAssignmentFilterType(): ?DeviceAndAppManagementAssignmentFilterType {
        return $this->deviceAndAppManagementAssignmentFilterType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'deviceAndAppManagementAssignmentFilterId' => function (self $o, ParseNode $n) { $o->setDeviceAndAppManagementAssignmentFilterId($n->getStringValue()); },
            'deviceAndAppManagementAssignmentFilterType' => function (self $o, ParseNode $n) { $o->setDeviceAndAppManagementAssignmentFilterType($n->getEnumValue(DeviceAndAppManagementAssignmentFilterType::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deviceAndAppManagementAssignmentFilterId', $this->deviceAndAppManagementAssignmentFilterId);
        $writer->writeEnumValue('deviceAndAppManagementAssignmentFilterType', $this->deviceAndAppManagementAssignmentFilterType);
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
     * Sets the deviceAndAppManagementAssignmentFilterId property value. The Id of the filter for the target assignment.
     *  @param string|null $value Value to set for the deviceAndAppManagementAssignmentFilterId property.
    */
    public function setDeviceAndAppManagementAssignmentFilterId(?string $value ): void {
        $this->deviceAndAppManagementAssignmentFilterId = $value;
    }

    /**
     * Sets the deviceAndAppManagementAssignmentFilterType property value. The type of filter of the target assignment i.e. Exclude or Include. Possible values are: none, include, exclude.
     *  @param DeviceAndAppManagementAssignmentFilterType|null $value Value to set for the deviceAndAppManagementAssignmentFilterType property.
    */
    public function setDeviceAndAppManagementAssignmentFilterType(?DeviceAndAppManagementAssignmentFilterType $value ): void {
        $this->deviceAndAppManagementAssignmentFilterType = $value;
    }

}
