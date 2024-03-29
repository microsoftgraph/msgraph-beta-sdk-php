<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Single configuration item inside an Android application's custom configuration schema.
*/
class AndroidManagedStoreAppConfigurationSchemaItem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AndroidManagedStoreAppConfigurationSchemaItem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidManagedStoreAppConfigurationSchemaItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidManagedStoreAppConfigurationSchemaItem {
        return new AndroidManagedStoreAppConfigurationSchemaItem();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the dataType property value. Data type for a configuration item inside an Android application's custom configuration schema
     * @return AndroidManagedStoreAppConfigurationSchemaItemDataType|null
    */
    public function getDataType(): ?AndroidManagedStoreAppConfigurationSchemaItemDataType {
        $val = $this->getBackingStore()->get('dataType');
        if (is_null($val) || $val instanceof AndroidManagedStoreAppConfigurationSchemaItemDataType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataType'");
    }

    /**
     * Gets the defaultBoolValue property value. Default value for boolean type items, if specified by the app developer
     * @return bool|null
    */
    public function getDefaultBoolValue(): ?bool {
        $val = $this->getBackingStore()->get('defaultBoolValue');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultBoolValue'");
    }

    /**
     * Gets the defaultIntValue property value. Default value for integer type items, if specified by the app developer
     * @return int|null
    */
    public function getDefaultIntValue(): ?int {
        $val = $this->getBackingStore()->get('defaultIntValue');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultIntValue'");
    }

    /**
     * Gets the defaultStringArrayValue property value. Default value for string array type items, if specified by the app developer
     * @return array<string>|null
    */
    public function getDefaultStringArrayValue(): ?array {
        $val = $this->getBackingStore()->get('defaultStringArrayValue');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultStringArrayValue'");
    }

    /**
     * Gets the defaultStringValue property value. Default value for string type items, if specified by the app developer
     * @return string|null
    */
    public function getDefaultStringValue(): ?string {
        $val = $this->getBackingStore()->get('defaultStringValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultStringValue'");
    }

    /**
     * Gets the description property value. Description of what the item controls within the application
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. Human readable name
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dataType' => fn(ParseNode $n) => $o->setDataType($n->getEnumValue(AndroidManagedStoreAppConfigurationSchemaItemDataType::class)),
            'defaultBoolValue' => fn(ParseNode $n) => $o->setDefaultBoolValue($n->getBooleanValue()),
            'defaultIntValue' => fn(ParseNode $n) => $o->setDefaultIntValue($n->getIntegerValue()),
            'defaultStringArrayValue' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefaultStringArrayValue($val);
            },
            'defaultStringValue' => fn(ParseNode $n) => $o->setDefaultStringValue($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'index' => fn(ParseNode $n) => $o->setIndex($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'parentIndex' => fn(ParseNode $n) => $o->setParentIndex($n->getIntegerValue()),
            'schemaItemKey' => fn(ParseNode $n) => $o->setSchemaItemKey($n->getStringValue()),
            'selections' => fn(ParseNode $n) => $o->setSelections($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the index property value. Unique index the application uses to maintain nested schema items
     * @return int|null
    */
    public function getIndex(): ?int {
        $val = $this->getBackingStore()->get('index');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'index'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the parentIndex property value. Index of parent schema item to track nested schema items
     * @return int|null
    */
    public function getParentIndex(): ?int {
        $val = $this->getBackingStore()->get('parentIndex');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentIndex'");
    }

    /**
     * Gets the schemaItemKey property value. Unique key the application uses to identify the item
     * @return string|null
    */
    public function getSchemaItemKey(): ?string {
        $val = $this->getBackingStore()->get('schemaItemKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schemaItemKey'");
    }

    /**
     * Gets the selections property value. List of human readable name/value pairs for the valid values that can be set for this item (Choice and Multiselect items only)
     * @return array<KeyValuePair>|null
    */
    public function getSelections(): ?array {
        $val = $this->getBackingStore()->get('selections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'selections'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('dataType', $this->getDataType());
        $writer->writeBooleanValue('defaultBoolValue', $this->getDefaultBoolValue());
        $writer->writeIntegerValue('defaultIntValue', $this->getDefaultIntValue());
        $writer->writeCollectionOfPrimitiveValues('defaultStringArrayValue', $this->getDefaultStringArrayValue());
        $writer->writeStringValue('defaultStringValue', $this->getDefaultStringValue());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('index', $this->getIndex());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('parentIndex', $this->getParentIndex());
        $writer->writeStringValue('schemaItemKey', $this->getSchemaItemKey());
        $writer->writeCollectionOfObjectValues('selections', $this->getSelections());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the dataType property value. Data type for a configuration item inside an Android application's custom configuration schema
     * @param AndroidManagedStoreAppConfigurationSchemaItemDataType|null $value Value to set for the dataType property.
    */
    public function setDataType(?AndroidManagedStoreAppConfigurationSchemaItemDataType $value): void {
        $this->getBackingStore()->set('dataType', $value);
    }

    /**
     * Sets the defaultBoolValue property value. Default value for boolean type items, if specified by the app developer
     * @param bool|null $value Value to set for the defaultBoolValue property.
    */
    public function setDefaultBoolValue(?bool $value): void {
        $this->getBackingStore()->set('defaultBoolValue', $value);
    }

    /**
     * Sets the defaultIntValue property value. Default value for integer type items, if specified by the app developer
     * @param int|null $value Value to set for the defaultIntValue property.
    */
    public function setDefaultIntValue(?int $value): void {
        $this->getBackingStore()->set('defaultIntValue', $value);
    }

    /**
     * Sets the defaultStringArrayValue property value. Default value for string array type items, if specified by the app developer
     * @param array<string>|null $value Value to set for the defaultStringArrayValue property.
    */
    public function setDefaultStringArrayValue(?array $value): void {
        $this->getBackingStore()->set('defaultStringArrayValue', $value);
    }

    /**
     * Sets the defaultStringValue property value. Default value for string type items, if specified by the app developer
     * @param string|null $value Value to set for the defaultStringValue property.
    */
    public function setDefaultStringValue(?string $value): void {
        $this->getBackingStore()->set('defaultStringValue', $value);
    }

    /**
     * Sets the description property value. Description of what the item controls within the application
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Human readable name
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the index property value. Unique index the application uses to maintain nested schema items
     * @param int|null $value Value to set for the index property.
    */
    public function setIndex(?int $value): void {
        $this->getBackingStore()->set('index', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the parentIndex property value. Index of parent schema item to track nested schema items
     * @param int|null $value Value to set for the parentIndex property.
    */
    public function setParentIndex(?int $value): void {
        $this->getBackingStore()->set('parentIndex', $value);
    }

    /**
     * Sets the schemaItemKey property value. Unique key the application uses to identify the item
     * @param string|null $value Value to set for the schemaItemKey property.
    */
    public function setSchemaItemKey(?string $value): void {
        $this->getBackingStore()->set('schemaItemKey', $value);
    }

    /**
     * Sets the selections property value. List of human readable name/value pairs for the valid values that can be set for this item (Choice and Multiselect items only)
     * @param array<KeyValuePair>|null $value Value to set for the selections property.
    */
    public function setSelections(?array $value): void {
        $this->getBackingStore()->set('selections', $value);
    }

}
