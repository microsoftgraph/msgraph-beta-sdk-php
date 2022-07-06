<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttributeMapping implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $defaultValue Default value to be used in case the source property was evaluated to null. Optional.
    */
    private ?string $defaultValue = null;
    
    /**
     * @var bool|null $exportMissingReferences For internal use only.
    */
    private ?bool $exportMissingReferences = null;
    
    /**
     * @var AttributeFlowBehavior|null $flowBehavior Defines when this attribute should be exported to the target directory. Possible values are: FlowWhenChanged and FlowAlways. Default is FlowWhenChanged.
    */
    private ?AttributeFlowBehavior $flowBehavior = null;
    
    /**
     * @var AttributeFlowType|null $flowType Defines when this attribute should be updated in the target directory. Possible values are: Always (default), ObjectAddOnly (only when new object is created), MultiValueAddOnly (only when the change is adding new values to a multi-valued attribute).
    */
    private ?AttributeFlowType $flowType = null;
    
    /**
     * @var int|null $matchingPriority If higher than 0, this attribute will be used to perform an initial match of the objects between source and target directories. The synchronization engine will try to find the matching object using attribute with lowest value of matching priority first. If not found, the attribute with the next matching priority will be used, and so on a until match is found or no more matching attributes are left. Only attributes that are expected to have unique values, such as email, should be used as matching attributes.
    */
    private ?int $matchingPriority = null;
    
    /**
     * @var AttributeMappingSource|null $source Defines how a value should be extracted (or transformed) from the source object.
    */
    private ?AttributeMappingSource $source = null;
    
    /**
     * @var string|null $targetAttributeName Name of the attribute on the target object.
    */
    private ?string $targetAttributeName = null;
    
    /**
     * Instantiates a new attributeMapping and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttributeMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttributeMapping {
        return new AttributeMapping();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the defaultValue property value. Default value to be used in case the source property was evaluated to null. Optional.
     * @return string|null
    */
    public function getDefaultValue(): ?string {
        return $this->defaultValue;
    }

    /**
     * Gets the exportMissingReferences property value. For internal use only.
     * @return bool|null
    */
    public function getExportMissingReferences(): ?bool {
        return $this->exportMissingReferences;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultValue' => function (ParseNode $n) use ($o) { $o->setDefaultValue($n->getStringValue()); },
            'exportMissingReferences' => function (ParseNode $n) use ($o) { $o->setExportMissingReferences($n->getBooleanValue()); },
            'flowBehavior' => function (ParseNode $n) use ($o) { $o->setFlowBehavior($n->getEnumValue(AttributeFlowBehavior::class)); },
            'flowType' => function (ParseNode $n) use ($o) { $o->setFlowType($n->getEnumValue(AttributeFlowType::class)); },
            'matchingPriority' => function (ParseNode $n) use ($o) { $o->setMatchingPriority($n->getIntegerValue()); },
            'source' => function (ParseNode $n) use ($o) { $o->setSource($n->getObjectValue(array(AttributeMappingSource::class, 'createFromDiscriminatorValue'))); },
            'targetAttributeName' => function (ParseNode $n) use ($o) { $o->setTargetAttributeName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the flowBehavior property value. Defines when this attribute should be exported to the target directory. Possible values are: FlowWhenChanged and FlowAlways. Default is FlowWhenChanged.
     * @return AttributeFlowBehavior|null
    */
    public function getFlowBehavior(): ?AttributeFlowBehavior {
        return $this->flowBehavior;
    }

    /**
     * Gets the flowType property value. Defines when this attribute should be updated in the target directory. Possible values are: Always (default), ObjectAddOnly (only when new object is created), MultiValueAddOnly (only when the change is adding new values to a multi-valued attribute).
     * @return AttributeFlowType|null
    */
    public function getFlowType(): ?AttributeFlowType {
        return $this->flowType;
    }

    /**
     * Gets the matchingPriority property value. If higher than 0, this attribute will be used to perform an initial match of the objects between source and target directories. The synchronization engine will try to find the matching object using attribute with lowest value of matching priority first. If not found, the attribute with the next matching priority will be used, and so on a until match is found or no more matching attributes are left. Only attributes that are expected to have unique values, such as email, should be used as matching attributes.
     * @return int|null
    */
    public function getMatchingPriority(): ?int {
        return $this->matchingPriority;
    }

    /**
     * Gets the source property value. Defines how a value should be extracted (or transformed) from the source object.
     * @return AttributeMappingSource|null
    */
    public function getSource(): ?AttributeMappingSource {
        return $this->source;
    }

    /**
     * Gets the targetAttributeName property value. Name of the attribute on the target object.
     * @return string|null
    */
    public function getTargetAttributeName(): ?string {
        return $this->targetAttributeName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('defaultValue', $this->defaultValue);
        $writer->writeBooleanValue('exportMissingReferences', $this->exportMissingReferences);
        $writer->writeEnumValue('flowBehavior', $this->flowBehavior);
        $writer->writeEnumValue('flowType', $this->flowType);
        $writer->writeIntegerValue('matchingPriority', $this->matchingPriority);
        $writer->writeObjectValue('source', $this->source);
        $writer->writeStringValue('targetAttributeName', $this->targetAttributeName);
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
     * Sets the defaultValue property value. Default value to be used in case the source property was evaluated to null. Optional.
     *  @param string|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?string $value ): void {
        $this->defaultValue = $value;
    }

    /**
     * Sets the exportMissingReferences property value. For internal use only.
     *  @param bool|null $value Value to set for the exportMissingReferences property.
    */
    public function setExportMissingReferences(?bool $value ): void {
        $this->exportMissingReferences = $value;
    }

    /**
     * Sets the flowBehavior property value. Defines when this attribute should be exported to the target directory. Possible values are: FlowWhenChanged and FlowAlways. Default is FlowWhenChanged.
     *  @param AttributeFlowBehavior|null $value Value to set for the flowBehavior property.
    */
    public function setFlowBehavior(?AttributeFlowBehavior $value ): void {
        $this->flowBehavior = $value;
    }

    /**
     * Sets the flowType property value. Defines when this attribute should be updated in the target directory. Possible values are: Always (default), ObjectAddOnly (only when new object is created), MultiValueAddOnly (only when the change is adding new values to a multi-valued attribute).
     *  @param AttributeFlowType|null $value Value to set for the flowType property.
    */
    public function setFlowType(?AttributeFlowType $value ): void {
        $this->flowType = $value;
    }

    /**
     * Sets the matchingPriority property value. If higher than 0, this attribute will be used to perform an initial match of the objects between source and target directories. The synchronization engine will try to find the matching object using attribute with lowest value of matching priority first. If not found, the attribute with the next matching priority will be used, and so on a until match is found or no more matching attributes are left. Only attributes that are expected to have unique values, such as email, should be used as matching attributes.
     *  @param int|null $value Value to set for the matchingPriority property.
    */
    public function setMatchingPriority(?int $value ): void {
        $this->matchingPriority = $value;
    }

    /**
     * Sets the source property value. Defines how a value should be extracted (or transformed) from the source object.
     *  @param AttributeMappingSource|null $value Value to set for the source property.
    */
    public function setSource(?AttributeMappingSource $value ): void {
        $this->source = $value;
    }

    /**
     * Sets the targetAttributeName property value. Name of the attribute on the target object.
     *  @param string|null $value Value to set for the targetAttributeName property.
    */
    public function setTargetAttributeName(?string $value ): void {
        $this->targetAttributeName = $value;
    }

}
