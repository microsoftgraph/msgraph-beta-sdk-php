<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Single configuration item inside an Android application's configuration schema.
*/
class AppConfigurationSchemaItemType implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AppConfigurationSchemaItemType and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppConfigurationSchemaItemType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppConfigurationSchemaItemType {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.appConfigurationSchemaItemBooleanType': return new AppConfigurationSchemaItemBooleanType();
                case '#microsoft.graph.appConfigurationSchemaItemBundleArray': return new AppConfigurationSchemaItemBundleArray();
                case '#microsoft.graph.appConfigurationSchemaItemBundleType': return new AppConfigurationSchemaItemBundleType();
                case '#microsoft.graph.appConfigurationSchemaItemChoiceType': return new AppConfigurationSchemaItemChoiceType();
                case '#microsoft.graph.appConfigurationSchemaItemHiddenType': return new AppConfigurationSchemaItemHiddenType();
                case '#microsoft.graph.appConfigurationSchemaItemIntegerType': return new AppConfigurationSchemaItemIntegerType();
                case '#microsoft.graph.appConfigurationSchemaItemMultiselectType': return new AppConfigurationSchemaItemMultiselectType();
                case '#microsoft.graph.appConfigurationSchemaItemStringType': return new AppConfigurationSchemaItemStringType();
            }
        }
        return new AppConfigurationSchemaItemType();
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
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'index' => fn(ParseNode $n) => $o->setIndex($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'parentIndex' => fn(ParseNode $n) => $o->setParentIndex($n->getIntegerValue()),
            'schemaItemKey' => fn(ParseNode $n) => $o->setSchemaItemKey($n->getStringValue()),
        ];
    }

    /**
     * Gets the index property value. Unique index the application uses to maintain nested schema items. Valid values 0 to 2147483647
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
     * Gets the parentIndex property value. Index of parent schema item to track nested schema items. Valid values 0 to 2147483647
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('index', $this->getIndex());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('parentIndex', $this->getParentIndex());
        $writer->writeStringValue('schemaItemKey', $this->getSchemaItemKey());
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
     * Sets the index property value. Unique index the application uses to maintain nested schema items. Valid values 0 to 2147483647
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
     * Sets the parentIndex property value. Index of parent schema item to track nested schema items. Valid values 0 to 2147483647
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

}
