<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidForWorkAppConfigurationSchemaItem implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var AndroidForWorkAppConfigurationSchemaItemDataType|null $dataType The type of value this item describes. Possible values are: bool, integer, string, choice, multiselect, bundle, bundleArray, hidden. */
    private ?AndroidForWorkAppConfigurationSchemaItemDataType $dataType = null;
    
    /** @var bool|null $defaultBoolValue Default value for boolean type items, if specified by the app developer */
    private ?bool $defaultBoolValue = null;
    
    /** @var int|null $defaultIntValue Default value for integer type items, if specified by the app developer */
    private ?int $defaultIntValue = null;
    
    /** @var array<string>|null $defaultStringArrayValue Default value for string array type items, if specified by the app developer */
    private ?array $defaultStringArrayValue = null;
    
    /** @var string|null $defaultStringValue Default value for string type items, if specified by the app developer */
    private ?string $defaultStringValue = null;
    
    /** @var string|null $description Description of what the item controls within the application */
    private ?string $description = null;
    
    /** @var string|null $displayName Human readable name */
    private ?string $displayName = null;
    
    /** @var string|null $schemaItemKey Unique key the application uses to identify the item */
    private ?string $schemaItemKey = null;
    
    /** @var array<KeyValuePair>|null $selections List of human readable name/value pairs for the valid values that can be set for this item (Choice and Multiselect items only) */
    private ?array $selections = null;
    
    /**
     * Instantiates a new androidForWorkAppConfigurationSchemaItem and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidForWorkAppConfigurationSchemaItem
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AndroidForWorkAppConfigurationSchemaItem {
        return new AndroidForWorkAppConfigurationSchemaItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dataType property value. The type of value this item describes. Possible values are: bool, integer, string, choice, multiselect, bundle, bundleArray, hidden.
     * @return AndroidForWorkAppConfigurationSchemaItemDataType|null
    */
    public function getDataType(): ?AndroidForWorkAppConfigurationSchemaItemDataType {
        return $this->dataType;
    }

    /**
     * Gets the defaultBoolValue property value. Default value for boolean type items, if specified by the app developer
     * @return bool|null
    */
    public function getDefaultBoolValue(): ?bool {
        return $this->defaultBoolValue;
    }

    /**
     * Gets the defaultIntValue property value. Default value for integer type items, if specified by the app developer
     * @return int|null
    */
    public function getDefaultIntValue(): ?int {
        return $this->defaultIntValue;
    }

    /**
     * Gets the defaultStringArrayValue property value. Default value for string array type items, if specified by the app developer
     * @return array<string>|null
    */
    public function getDefaultStringArrayValue(): ?array {
        return $this->defaultStringArrayValue;
    }

    /**
     * Gets the defaultStringValue property value. Default value for string type items, if specified by the app developer
     * @return string|null
    */
    public function getDefaultStringValue(): ?string {
        return $this->defaultStringValue;
    }

    /**
     * Gets the description property value. Description of what the item controls within the application
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Human readable name
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
        return  [
            'dataType' => function (self $o, ParseNode $n) { $o->setDataType($n->getEnumValue(AndroidForWorkAppConfigurationSchemaItemDataType::class)); },
            'defaultBoolValue' => function (self $o, ParseNode $n) { $o->setDefaultBoolValue($n->getBooleanValue()); },
            'defaultIntValue' => function (self $o, ParseNode $n) { $o->setDefaultIntValue($n->getIntegerValue()); },
            'defaultStringArrayValue' => function (self $o, ParseNode $n) { $o->setDefaultStringArrayValue($n->getCollectionOfPrimitiveValues()); },
            'defaultStringValue' => function (self $o, ParseNode $n) { $o->setDefaultStringValue($n->getStringValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'schemaItemKey' => function (self $o, ParseNode $n) { $o->setSchemaItemKey($n->getStringValue()); },
            'selections' => function (self $o, ParseNode $n) { $o->setSelections($n->getCollectionOfObjectValues(KeyValuePair::class)); },
        ];
    }

    /**
     * Gets the schemaItemKey property value. Unique key the application uses to identify the item
     * @return string|null
    */
    public function getSchemaItemKey(): ?string {
        return $this->schemaItemKey;
    }

    /**
     * Gets the selections property value. List of human readable name/value pairs for the valid values that can be set for this item (Choice and Multiselect items only)
     * @return array<KeyValuePair>|null
    */
    public function getSelections(): ?array {
        return $this->selections;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('dataType', $this->dataType);
        $writer->writeBooleanValue('defaultBoolValue', $this->defaultBoolValue);
        $writer->writeIntegerValue('defaultIntValue', $this->defaultIntValue);
        $writer->writeCollectionOfPrimitiveValues('defaultStringArrayValue', $this->defaultStringArrayValue);
        $writer->writeStringValue('defaultStringValue', $this->defaultStringValue);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('schemaItemKey', $this->schemaItemKey);
        $writer->writeCollectionOfObjectValues('selections', $this->selections);
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
     * Sets the dataType property value. The type of value this item describes. Possible values are: bool, integer, string, choice, multiselect, bundle, bundleArray, hidden.
     *  @param AndroidForWorkAppConfigurationSchemaItemDataType|null $value Value to set for the dataType property.
    */
    public function setDataType(?AndroidForWorkAppConfigurationSchemaItemDataType $value ): void {
        $this->dataType = $value;
    }

    /**
     * Sets the defaultBoolValue property value. Default value for boolean type items, if specified by the app developer
     *  @param bool|null $value Value to set for the defaultBoolValue property.
    */
    public function setDefaultBoolValue(?bool $value ): void {
        $this->defaultBoolValue = $value;
    }

    /**
     * Sets the defaultIntValue property value. Default value for integer type items, if specified by the app developer
     *  @param int|null $value Value to set for the defaultIntValue property.
    */
    public function setDefaultIntValue(?int $value ): void {
        $this->defaultIntValue = $value;
    }

    /**
     * Sets the defaultStringArrayValue property value. Default value for string array type items, if specified by the app developer
     *  @param array<string>|null $value Value to set for the defaultStringArrayValue property.
    */
    public function setDefaultStringArrayValue(?array $value ): void {
        $this->defaultStringArrayValue = $value;
    }

    /**
     * Sets the defaultStringValue property value. Default value for string type items, if specified by the app developer
     *  @param string|null $value Value to set for the defaultStringValue property.
    */
    public function setDefaultStringValue(?string $value ): void {
        $this->defaultStringValue = $value;
    }

    /**
     * Sets the description property value. Description of what the item controls within the application
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Human readable name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the schemaItemKey property value. Unique key the application uses to identify the item
     *  @param string|null $value Value to set for the schemaItemKey property.
    */
    public function setSchemaItemKey(?string $value ): void {
        $this->schemaItemKey = $value;
    }

    /**
     * Sets the selections property value. List of human readable name/value pairs for the valid values that can be set for this item (Choice and Multiselect items only)
     *  @param array<KeyValuePair>|null $value Value to set for the selections property.
    */
    public function setSelections(?array $value ): void {
        $this->selections = $value;
    }

}
