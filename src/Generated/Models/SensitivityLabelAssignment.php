<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitivityLabelAssignment implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var SensitivityLabelAssignmentMethod|null $assignmentMethod The assignmentMethod property
    */
    private ?SensitivityLabelAssignmentMethod $assignmentMethod = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $sensitivityLabelId The unique identifier for the sensitivity label assigned to the file.
    */
    private ?string $sensitivityLabelId = null;
    
    /**
     * @var string|null $tenantId The unique identifier for the tenant that hosts the file when this label is applied.
    */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new sensitivityLabelAssignment and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.sensitivityLabelAssignment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensitivityLabelAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SensitivityLabelAssignment {
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
        $o = $this;
        return  [
            'assignmentMethod' => function (ParseNode $n) use ($o) { $o->setAssignmentMethod($n->getEnumValue(SensitivityLabelAssignmentMethod::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'sensitivityLabelId' => function (ParseNode $n) use ($o) { $o->setSensitivityLabelId($n->getStringValue()); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
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
     * Gets the sensitivityLabelId property value. The unique identifier for the sensitivity label assigned to the file.
     * @return string|null
    */
    public function getSensitivityLabelId(): ?string {
        return $this->sensitivityLabelId;
    }

    /**
     * Gets the tenantId property value. The unique identifier for the tenant that hosts the file when this label is applied.
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
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the sensitivityLabelId property value. The unique identifier for the sensitivity label assigned to the file.
     *  @param string|null $value Value to set for the sensitivityLabelId property.
    */
    public function setSensitivityLabelId(?string $value ): void {
        $this->sensitivityLabelId = $value;
    }

    /**
     * Sets the tenantId property value. The unique identifier for the tenant that hosts the file when this label is applied.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
