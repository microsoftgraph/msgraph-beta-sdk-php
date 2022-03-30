<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\ValidateFilter;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\DeviceAndAppManagementAssignmentFilter;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ValidateFilterRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DeviceAndAppManagementAssignmentFilter|null $deviceAndAppManagementAssignmentFilter  */
    private ?DeviceAndAppManagementAssignmentFilter $deviceAndAppManagementAssignmentFilter = null;
    
    /**
     * Instantiates a new validateFilterRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValidateFilterRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ValidateFilterRequestBody {
        return new ValidateFilterRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceAndAppManagementAssignmentFilter property value. 
     * @return DeviceAndAppManagementAssignmentFilter|null
    */
    public function getDeviceAndAppManagementAssignmentFilter(): ?DeviceAndAppManagementAssignmentFilter {
        return $this->deviceAndAppManagementAssignmentFilter;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'deviceAndAppManagementAssignmentFilter' => function (self $o, ParseNode $n) { $o->setDeviceAndAppManagementAssignmentFilter($n->getObjectValue(DeviceAndAppManagementAssignmentFilter::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('deviceAndAppManagementAssignmentFilter', $this->deviceAndAppManagementAssignmentFilter);
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
     * Sets the deviceAndAppManagementAssignmentFilter property value. 
     *  @param DeviceAndAppManagementAssignmentFilter|null $value Value to set for the deviceAndAppManagementAssignmentFilter property.
    */
    public function setDeviceAndAppManagementAssignmentFilter(?DeviceAndAppManagementAssignmentFilter $value ): void {
        $this->deviceAndAppManagementAssignmentFilter = $value;
    }

}
