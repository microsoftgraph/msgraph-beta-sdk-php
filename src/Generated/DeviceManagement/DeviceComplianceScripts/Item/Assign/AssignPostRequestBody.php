<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceComplianceScripts\Item\Assign;

use Microsoft\Graph\Beta\Generated\Models\DeviceHealthScriptAssignment;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<DeviceHealthScriptAssignment>|null $deviceHealthScriptAssignments The deviceHealthScriptAssignments property
    */
    private ?array $deviceHealthScriptAssignments = null;
    
    /**
     * Instantiates a new assignPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignPostRequestBody {
        return new AssignPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceHealthScriptAssignments property value. The deviceHealthScriptAssignments property
     * @return array<DeviceHealthScriptAssignment>|null
    */
    public function getDeviceHealthScriptAssignments(): ?array {
        return $this->deviceHealthScriptAssignments;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceHealthScriptAssignments' => function (ParseNode $n) use ($o) { $o->setDeviceHealthScriptAssignments($n->getCollectionOfObjectValues(array(DeviceHealthScriptAssignment::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('deviceHealthScriptAssignments', $this->deviceHealthScriptAssignments);
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
     * Sets the deviceHealthScriptAssignments property value. The deviceHealthScriptAssignments property
     *  @param array<DeviceHealthScriptAssignment>|null $value Value to set for the deviceHealthScriptAssignments property.
    */
    public function setDeviceHealthScriptAssignments(?array $value ): void {
        $this->deviceHealthScriptAssignments = $value;
    }

}
