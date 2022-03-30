<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurations\Item\Assign;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\DeviceConfigurationAssignment;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\DeviceConfigurationGroupAssignment;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<DeviceConfigurationAssignment>|null $assignments  */
    private ?array $assignments = null;
    
    /** @var array<DeviceConfigurationGroupAssignment>|null $deviceConfigurationGroupAssignments  */
    private ?array $deviceConfigurationGroupAssignments = null;
    
    /**
     * Instantiates a new assignRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AssignRequestBody {
        return new AssignRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignments property value. 
     * @return array<DeviceConfigurationAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the deviceConfigurationGroupAssignments property value. 
     * @return array<DeviceConfigurationGroupAssignment>|null
    */
    public function getDeviceConfigurationGroupAssignments(): ?array {
        return $this->deviceConfigurationGroupAssignments;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'assignments' => function (self $o, ParseNode $n) { $o->setAssignments($n->getCollectionOfObjectValues(DeviceConfigurationAssignment::class)); },
            'deviceConfigurationGroupAssignments' => function (self $o, ParseNode $n) { $o->setDeviceConfigurationGroupAssignments($n->getCollectionOfObjectValues(DeviceConfigurationGroupAssignment::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeCollectionOfObjectValues('deviceConfigurationGroupAssignments', $this->deviceConfigurationGroupAssignments);
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
     * Sets the assignments property value. 
     *  @param array<DeviceConfigurationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the deviceConfigurationGroupAssignments property value. 
     *  @param array<DeviceConfigurationGroupAssignment>|null $value Value to set for the deviceConfigurationGroupAssignments property.
    */
    public function setDeviceConfigurationGroupAssignments(?array $value ): void {
        $this->deviceConfigurationGroupAssignments = $value;
    }

}
