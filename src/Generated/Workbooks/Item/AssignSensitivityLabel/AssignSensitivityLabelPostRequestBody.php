<?php

namespace Microsoft\Graph\Beta\Generated\Workbooks\Item\AssignSensitivityLabel;

use Microsoft\Graph\Beta\Generated\Models\SensitivityLabelAssignmentMethod;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignSensitivityLabelPostRequestBody implements AdditionalDataHolder, Parsable 
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
     * @var string|null $justificationText The justificationText property
    */
    private ?string $justificationText = null;
    
    /**
     * @var string|null $sensitivityLabelId The sensitivityLabelId property
    */
    private ?string $sensitivityLabelId = null;
    
    /**
     * Instantiates a new assignSensitivityLabelPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignSensitivityLabelPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignSensitivityLabelPostRequestBody {
        return new AssignSensitivityLabelPostRequestBody();
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
            'justificationText' => function (ParseNode $n) use ($o) { $o->setJustificationText($n->getStringValue()); },
            'sensitivityLabelId' => function (ParseNode $n) use ($o) { $o->setSensitivityLabelId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the justificationText property value. The justificationText property
     * @return string|null
    */
    public function getJustificationText(): ?string {
        return $this->justificationText;
    }

    /**
     * Gets the sensitivityLabelId property value. The sensitivityLabelId property
     * @return string|null
    */
    public function getSensitivityLabelId(): ?string {
        return $this->sensitivityLabelId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('assignmentMethod', $this->assignmentMethod);
        $writer->writeStringValue('justificationText', $this->justificationText);
        $writer->writeStringValue('sensitivityLabelId', $this->sensitivityLabelId);
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
     * Sets the justificationText property value. The justificationText property
     *  @param string|null $value Value to set for the justificationText property.
    */
    public function setJustificationText(?string $value ): void {
        $this->justificationText = $value;
    }

    /**
     * Sets the sensitivityLabelId property value. The sensitivityLabelId property
     *  @param string|null $value Value to set for the sensitivityLabelId property.
    */
    public function setSensitivityLabelId(?string $value ): void {
        $this->sensitivityLabelId = $value;
    }

}
