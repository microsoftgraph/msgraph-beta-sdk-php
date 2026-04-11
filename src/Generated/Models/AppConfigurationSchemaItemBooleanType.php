<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Boolean configuration item inside an Android application's custom configuration schema.
*/
class AppConfigurationSchemaItemBooleanType extends AppConfigurationSchemaItemType implements Parsable 
{
    /**
     * Instantiates a new AppConfigurationSchemaItemBooleanType and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.appConfigurationSchemaItemBooleanType');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppConfigurationSchemaItemBooleanType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppConfigurationSchemaItemBooleanType {
        return new AppConfigurationSchemaItemBooleanType();
    }

    /**
     * Gets the defaultValue property value. Default value, if specified by the app developer
     * @return bool|null
    */
    public function getDefaultValue(): ?bool {
        $val = $this->getBackingStore()->get('defaultValue');
        if (is_null($val) || is_bool($val)) {
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
            'defaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getBooleanValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('defaultValue', $this->getDefaultValue());
    }

    /**
     * Sets the defaultValue property value. Default value, if specified by the app developer
     * @param bool|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?bool $value): void {
        $this->getBackingStore()->set('defaultValue', $value);
    }

}
