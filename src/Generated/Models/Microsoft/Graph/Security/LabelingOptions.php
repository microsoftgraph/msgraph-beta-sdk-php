<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LabelingOptions implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var AssignmentMethod|null $assignmentMethod  */
    private ?AssignmentMethod $assignmentMethod = null;
    
    /** @var DowngradeJustification|null $downgradeJustification  */
    private ?DowngradeJustification $downgradeJustification = null;
    
    /** @var array<KeyValuePair>|null $extendedProperties  */
    private ?array $extendedProperties = null;
    
    /** @var string|null $labelId  */
    private ?string $labelId = null;
    
    /**
     * Instantiates a new labelingOptions and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LabelingOptions
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): LabelingOptions {
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
     * Gets the assignmentMethod property value. 
     * @return AssignmentMethod|null
    */
    public function getAssignmentMethod(): ?AssignmentMethod {
        return $this->assignmentMethod;
    }

    /**
     * Gets the downgradeJustification property value. 
     * @return DowngradeJustification|null
    */
    public function getDowngradeJustification(): ?DowngradeJustification {
        return $this->downgradeJustification;
    }

    /**
     * Gets the extendedProperties property value. 
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
        return  [
            'assignmentMethod' => function (self $o, ParseNode $n) { $o->setAssignmentMethod($n->getEnumValue(AssignmentMethod::class)); },
            'downgradeJustification' => function (self $o, ParseNode $n) { $o->setDowngradeJustification($n->getObjectValue(DowngradeJustification::class)); },
            'extendedProperties' => function (self $o, ParseNode $n) { $o->setExtendedProperties($n->getCollectionOfObjectValues(KeyValuePair::class)); },
            'labelId' => function (self $o, ParseNode $n) { $o->setLabelId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the labelId property value. 
     * @return string|null
    */
    public function getLabelId(): ?string {
        return $this->labelId;
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
     * Sets the assignmentMethod property value. 
     *  @param AssignmentMethod|null $value Value to set for the assignmentMethod property.
    */
    public function setAssignmentMethod(?AssignmentMethod $value ): void {
        $this->assignmentMethod = $value;
    }

    /**
     * Sets the downgradeJustification property value. 
     *  @param DowngradeJustification|null $value Value to set for the downgradeJustification property.
    */
    public function setDowngradeJustification(?DowngradeJustification $value ): void {
        $this->downgradeJustification = $value;
    }

    /**
     * Sets the extendedProperties property value. 
     *  @param array<KeyValuePair>|null $value Value to set for the extendedProperties property.
    */
    public function setExtendedProperties(?array $value ): void {
        $this->extendedProperties = $value;
    }

    /**
     * Sets the labelId property value. 
     *  @param string|null $value Value to set for the labelId property.
    */
    public function setLabelId(?string $value ): void {
        $this->labelId = $value;
    }

}
