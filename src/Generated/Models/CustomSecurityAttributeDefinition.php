<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomSecurityAttributeDefinition extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<AllowedValue>|null $allowedValues Values that are predefined for this custom security attribute.This navigation property is not returned by default and must be specified in an $expand query. For example, /directory/customSecurityAttributeDefinitions?$expand=allowedValues.
    */
    private ?array $allowedValues = null;
    
    /**
     * @var string|null $attributeSet Name of the attribute set. Case insensitive.
    */
    private ?string $attributeSet = null;
    
    /**
     * @var string|null $description Description of the custom security attribute. Can be up to 128 characters long and include Unicode characters. Can be changed later.
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $isCollection Indicates whether multiple values can be assigned to the custom security attribute. Cannot be changed later. If type is set to Boolean, isCollection cannot be set to true.
    */
    private ?bool $isCollection = null;
    
    /**
     * @var bool|null $isSearchable Indicates whether custom security attribute values will be indexed for searching on objects that are assigned attribute values. Cannot be changed later.
    */
    private ?bool $isSearchable = null;
    
    /**
     * @var string|null $name Name of the custom security attribute. Must be unique within an attribute set. Can be up to 32 characters long and include Unicode characters. Cannot contain spaces or special characters. Cannot be changed later. Case insensitive.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $status Specifies whether the custom security attribute is active or deactivated. Acceptable values are Available and Deprecated. Can be changed later.
    */
    private ?string $status = null;
    
    /**
     * @var string|null $type Data type for the custom security attribute values. Supported types are Boolean, Integer, and String. Cannot be changed later.
    */
    private ?string $type = null;
    
    /**
     * @var bool|null $usePreDefinedValuesOnly Indicates whether only predefined values can be assigned to the custom security attribute. If set to false, free-form values are allowed. Can later be changed from true to false, but cannot be changed from false to true. If type is set to Boolean, usePreDefinedValuesOnly cannot be set to true.
    */
    private ?bool $usePreDefinedValuesOnly = null;
    
    /**
     * Instantiates a new customSecurityAttributeDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomSecurityAttributeDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomSecurityAttributeDefinition {
        return new CustomSecurityAttributeDefinition();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedValues property value. Values that are predefined for this custom security attribute.This navigation property is not returned by default and must be specified in an $expand query. For example, /directory/customSecurityAttributeDefinitions?$expand=allowedValues.
     * @return array<AllowedValue>|null
    */
    public function getAllowedValues(): ?array {
        return $this->allowedValues;
    }

    /**
     * Gets the attributeSet property value. Name of the attribute set. Case insensitive.
     * @return string|null
    */
    public function getAttributeSet(): ?string {
        return $this->attributeSet;
    }

    /**
     * Gets the description property value. Description of the custom security attribute. Can be up to 128 characters long and include Unicode characters. Can be changed later.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedValues' => function (ParseNode $n) use ($o) { $o->setAllowedValues($n->getCollectionOfObjectValues(array(AllowedValue::class, 'createFromDiscriminatorValue'))); },
            'attributeSet' => function (ParseNode $n) use ($o) { $o->setAttributeSet($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'isCollection' => function (ParseNode $n) use ($o) { $o->setIsCollection($n->getBooleanValue()); },
            'isSearchable' => function (ParseNode $n) use ($o) { $o->setIsSearchable($n->getBooleanValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getStringValue()); },
            'usePreDefinedValuesOnly' => function (ParseNode $n) use ($o) { $o->setUsePreDefinedValuesOnly($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isCollection property value. Indicates whether multiple values can be assigned to the custom security attribute. Cannot be changed later. If type is set to Boolean, isCollection cannot be set to true.
     * @return bool|null
    */
    public function getIsCollection(): ?bool {
        return $this->isCollection;
    }

    /**
     * Gets the isSearchable property value. Indicates whether custom security attribute values will be indexed for searching on objects that are assigned attribute values. Cannot be changed later.
     * @return bool|null
    */
    public function getIsSearchable(): ?bool {
        return $this->isSearchable;
    }

    /**
     * Gets the name property value. Name of the custom security attribute. Must be unique within an attribute set. Can be up to 32 characters long and include Unicode characters. Cannot contain spaces or special characters. Cannot be changed later. Case insensitive.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the status property value. Specifies whether the custom security attribute is active or deactivated. Acceptable values are Available and Deprecated. Can be changed later.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the type property value. Data type for the custom security attribute values. Supported types are Boolean, Integer, and String. Cannot be changed later.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the usePreDefinedValuesOnly property value. Indicates whether only predefined values can be assigned to the custom security attribute. If set to false, free-form values are allowed. Can later be changed from true to false, but cannot be changed from false to true. If type is set to Boolean, usePreDefinedValuesOnly cannot be set to true.
     * @return bool|null
    */
    public function getUsePreDefinedValuesOnly(): ?bool {
        return $this->usePreDefinedValuesOnly;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('allowedValues', $this->allowedValues);
        $writer->writeStringValue('attributeSet', $this->attributeSet);
        $writer->writeStringValue('description', $this->description);
        $writer->writeBooleanValue('isCollection', $this->isCollection);
        $writer->writeBooleanValue('isSearchable', $this->isSearchable);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('status', $this->status);
        $writer->writeStringValue('type', $this->type);
        $writer->writeBooleanValue('usePreDefinedValuesOnly', $this->usePreDefinedValuesOnly);
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
     * Sets the allowedValues property value. Values that are predefined for this custom security attribute.This navigation property is not returned by default and must be specified in an $expand query. For example, /directory/customSecurityAttributeDefinitions?$expand=allowedValues.
     *  @param array<AllowedValue>|null $value Value to set for the allowedValues property.
    */
    public function setAllowedValues(?array $value ): void {
        $this->allowedValues = $value;
    }

    /**
     * Sets the attributeSet property value. Name of the attribute set. Case insensitive.
     *  @param string|null $value Value to set for the attributeSet property.
    */
    public function setAttributeSet(?string $value ): void {
        $this->attributeSet = $value;
    }

    /**
     * Sets the description property value. Description of the custom security attribute. Can be up to 128 characters long and include Unicode characters. Can be changed later.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the isCollection property value. Indicates whether multiple values can be assigned to the custom security attribute. Cannot be changed later. If type is set to Boolean, isCollection cannot be set to true.
     *  @param bool|null $value Value to set for the isCollection property.
    */
    public function setIsCollection(?bool $value ): void {
        $this->isCollection = $value;
    }

    /**
     * Sets the isSearchable property value. Indicates whether custom security attribute values will be indexed for searching on objects that are assigned attribute values. Cannot be changed later.
     *  @param bool|null $value Value to set for the isSearchable property.
    */
    public function setIsSearchable(?bool $value ): void {
        $this->isSearchable = $value;
    }

    /**
     * Sets the name property value. Name of the custom security attribute. Must be unique within an attribute set. Can be up to 32 characters long and include Unicode characters. Cannot contain spaces or special characters. Cannot be changed later. Case insensitive.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the status property value. Specifies whether the custom security attribute is active or deactivated. Acceptable values are Available and Deprecated. Can be changed later.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the type property value. Data type for the custom security attribute values. Supported types are Boolean, Integer, and String. Cannot be changed later.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the usePreDefinedValuesOnly property value. Indicates whether only predefined values can be assigned to the custom security attribute. If set to false, free-form values are allowed. Can later be changed from true to false, but cannot be changed from false to true. If type is set to Boolean, usePreDefinedValuesOnly cannot be set to true.
     *  @param bool|null $value Value to set for the usePreDefinedValuesOnly property.
    */
    public function setUsePreDefinedValuesOnly(?bool $value ): void {
        $this->usePreDefinedValuesOnly = $value;
    }

}
