<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LabelingOptions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AssignmentMethod|null $assignmentMethod The assignmentMethod property
    */
    private ?AssignmentMethod $assignmentMethod = null;
    
    /**
     * @var DowngradeJustification|null $downgradeJustification The downgradeJustification property
    */
    private ?DowngradeJustification $downgradeJustification = null;
    
    /**
     * @var array<KeyValuePair>|null $extendedProperties The extendedProperties property
    */
    private ?array $extendedProperties = null;
    
    /**
     * @var string|null $labelId The labelId property
    */
    private ?string $labelId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new labelingOptions and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.security.labelingOptions');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LabelingOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LabelingOptions {
        return new LabelingOptions();
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
     * @return AssignmentMethod|null
    */
    public function getAssignmentMethod(): ?AssignmentMethod {
        return $this->assignmentMethod;
    }

    /**
     * Gets the downgradeJustification property value. The downgradeJustification property
     * @return DowngradeJustification|null
    */
    public function getDowngradeJustification(): ?DowngradeJustification {
        return $this->downgradeJustification;
    }

    /**
     * Gets the extendedProperties property value. The extendedProperties property
     * @return array<KeyValuePair>|null
    */
    public function getExtendedProperties(): ?array {
        return $this->extendedProperties;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignmentMethod' => function (ParseNode $n) use ($o) { $o->setAssignmentMethod($n->getEnumValue(AssignmentMethod::class)); },
            'downgradeJustification' => function (ParseNode $n) use ($o) { $o->setDowngradeJustification($n->getObjectValue(array(DowngradeJustification::class, 'createFromDiscriminatorValue'))); },
            'extendedProperties' => function (ParseNode $n) use ($o) { $o->setExtendedProperties($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'labelId' => function (ParseNode $n) use ($o) { $o->setLabelId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the labelId property value. The labelId property
     * @return string|null
    */
    public function getLabelId(): ?string {
        return $this->labelId;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('assignmentMethod', $this->assignmentMethod);
        $writer->writeObjectValue('downgradeJustification', $this->downgradeJustification);
        $writer->writeCollectionOfObjectValues('extendedProperties', $this->extendedProperties);
        $writer->writeStringValue('labelId', $this->labelId);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     *  @param AssignmentMethod|null $value Value to set for the assignmentMethod property.
    */
    public function setAssignmentMethod(?AssignmentMethod $value ): void {
        $this->assignmentMethod = $value;
    }

    /**
     * Sets the downgradeJustification property value. The downgradeJustification property
     *  @param DowngradeJustification|null $value Value to set for the downgradeJustification property.
    */
    public function setDowngradeJustification(?DowngradeJustification $value ): void {
        $this->downgradeJustification = $value;
    }

    /**
     * Sets the extendedProperties property value. The extendedProperties property
     *  @param array<KeyValuePair>|null $value Value to set for the extendedProperties property.
    */
    public function setExtendedProperties(?array $value ): void {
        $this->extendedProperties = $value;
    }

    /**
     * Sets the labelId property value. The labelId property
     *  @param string|null $value Value to set for the labelId property.
    */
    public function setLabelId(?string $value ): void {
        $this->labelId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
