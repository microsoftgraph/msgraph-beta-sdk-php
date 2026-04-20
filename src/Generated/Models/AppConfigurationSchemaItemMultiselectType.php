<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Multiselect configuration item inside an Android application's custom configuration schema.
*/
class AppConfigurationSchemaItemMultiselectType extends AppConfigurationSchemaItemType implements Parsable 
{
    /**
     * Instantiates a new AppConfigurationSchemaItemMultiselectType and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.appConfigurationSchemaItemMultiselectType');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppConfigurationSchemaItemMultiselectType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppConfigurationSchemaItemMultiselectType {
        return new AppConfigurationSchemaItemMultiselectType();
    }

    /**
     * Gets the defaultValue property value. Default value, if specified by the app developer
     * @return array<string>|null
    */
    public function getDefaultValue(): ?array {
        $val = $this->getBackingStore()->get('defaultValue');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultValue'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultValue' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefaultValue($val);
            },
            'selections' => fn(ParseNode $n) => $o->setSelections($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the selections property value. List of human readable name/value pairs for the valid values that can be set for this item
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
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('defaultValue', $this->getDefaultValue());
        $writer->writeCollectionOfObjectValues('selections', $this->getSelections());
    }

    /**
     * Sets the defaultValue property value. Default value, if specified by the app developer
     * @param array<string>|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?array $value): void {
        $this->getBackingStore()->set('defaultValue', $value);
    }

    /**
     * Sets the selections property value. List of human readable name/value pairs for the valid values that can be set for this item
     * @param array<KeyValuePair>|null $value Value to set for the selections property.
    */
    public function setSelections(?array $value): void {
        $this->getBackingStore()->set('selections', $value);
    }

}
