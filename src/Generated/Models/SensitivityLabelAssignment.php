<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitivityLabelAssignment implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var SensitivityLabelAssignmentMethod|null $assignmentMethod The assignmentMethod property */
    private ?SensitivityLabelAssignmentMethod $assignmentMethod = null;
    
    /** @var string|null $sensitivityLabelId The sensitivityLabelId property */
    private ?string $sensitivityLabelId = null;
    
    /** @var string|null $tenantId The tenantId property */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new sensitivityLabelAssignment and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensitivityLabelAssignment
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SensitivityLabelAssignment {
        return new SensitivityLabelAssignment();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignmentMethod property value. The assignmentMethod property
     * @return SensitivityLabelAssignmentMethod|null
    */
    public function getAssignmentMethod(): ?SensitivityLabelAssignmentMethod {
        return $this->assignmentMethod;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'assignmentMethod' => function (self $o, ParseNode $n) { $o->setAssignmentMethod($n->getEnumValue(SensitivityLabelAssignmentMethod::class)); },
            'sensitivityLabelId' => function (self $o, ParseNode $n) { $o->setSensitivityLabelId($n->getStringValue()); },
            'tenantId' => function (self $o, ParseNode $n) { $o->setTenantId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the sensitivityLabelId property value. The sensitivityLabelId property
     * @return string|null
    */
    public function getSensitivityLabelId(): ?string {
        return $this->sensitivityLabelId;
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('assignmentMethod', $this->assignmentMethod);
        $writer->writeStringValue('sensitivityLabelId', $this->sensitivityLabelId);
        $writer->writeStringValue('tenantId', $this->tenantId);
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
     * Sets the assignmentMethod property value. The assignmentMethod property
     *  @param SensitivityLabelAssignmentMethod|null $value Value to set for the assignmentMethod property.
    */
    public function setAssignmentMethod(?SensitivityLabelAssignmentMethod $value ): void {
        $this->assignmentMethod = $value;
    }

    /**
     * Sets the sensitivityLabelId property value. The sensitivityLabelId property
     *  @param string|null $value Value to set for the sensitivityLabelId property.
    */
    public function setSensitivityLabelId(?string $value ): void {
        $this->sensitivityLabelId = $value;
    }

    /**
     * Sets the tenantId property value. The tenantId property
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
