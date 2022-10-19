<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TemplateParameter implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $description The description for the template parameter. Optional. Read-only.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name for the template parameter. Required. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $jsonAllowedValues The allowed values for the template parameter represented by a serialized string of JSON. Optional. Read-only.
    */
    private ?string $jsonAllowedValues = null;
    
    /**
     * @var string|null $jsonDefaultValue The default value for the template parameter represented by a serialized string of JSON. Required. Read-only.
    */
    private ?string $jsonDefaultValue = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var ManagementParameterValueType|null $valueType The valueType property
    */
    private ?ManagementParameterValueType $valueType = null;
    
    /**
     * Instantiates a new templateParameter and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.managedTenants.templateParameter');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TemplateParameter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TemplateParameter {
        return new TemplateParameter();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. The description for the template parameter. Optional. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name for the template parameter. Required. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'jsonAllowedValues' => fn(ParseNode $n) => $o->setJsonAllowedValues($n->getStringValue()),
            'jsonDefaultValue' => fn(ParseNode $n) => $o->setJsonDefaultValue($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'valueType' => fn(ParseNode $n) => $o->setValueType($n->getEnumValue(ManagementParameterValueType::class)),
        ];
    }

    /**
     * Gets the jsonAllowedValues property value. The allowed values for the template parameter represented by a serialized string of JSON. Optional. Read-only.
     * @return string|null
    */
    public function getJsonAllowedValues(): ?string {
        return $this->jsonAllowedValues;
    }

    /**
     * Gets the jsonDefaultValue property value. The default value for the template parameter represented by a serialized string of JSON. Required. Read-only.
     * @return string|null
    */
    public function getJsonDefaultValue(): ?string {
        return $this->jsonDefaultValue;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the valueType property value. The valueType property
     * @return ManagementParameterValueType|null
    */
    public function getValueType(): ?ManagementParameterValueType {
        return $this->valueType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('jsonAllowedValues', $this->jsonAllowedValues);
        $writer->writeStringValue('jsonDefaultValue', $this->jsonDefaultValue);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('valueType', $this->valueType);
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
     * Sets the description property value. The description for the template parameter. Optional. Read-only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name for the template parameter. Required. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the jsonAllowedValues property value. The allowed values for the template parameter represented by a serialized string of JSON. Optional. Read-only.
     *  @param string|null $value Value to set for the jsonAllowedValues property.
    */
    public function setJsonAllowedValues(?string $value ): void {
        $this->jsonAllowedValues = $value;
    }

    /**
     * Sets the jsonDefaultValue property value. The default value for the template parameter represented by a serialized string of JSON. Required. Read-only.
     *  @param string|null $value Value to set for the jsonDefaultValue property.
    */
    public function setJsonDefaultValue(?string $value ): void {
        $this->jsonDefaultValue = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the valueType property value. The valueType property
     *  @param ManagementParameterValueType|null $value Value to set for the valueType property.
    */
    public function setValueType(?ManagementParameterValueType $value ): void {
        $this->valueType = $value;
    }

}
