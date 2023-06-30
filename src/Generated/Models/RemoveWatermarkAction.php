<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RemoveWatermarkAction extends InformationProtectionAction implements Parsable 
{
    /**
     * Instantiates a new RemoveWatermarkAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.removeWatermarkAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoveWatermarkAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoveWatermarkAction {
        return new RemoveWatermarkAction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'uiElementNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setUiElementNames($val);
            },
        ]);
    }

    /**
     * Gets the uiElementNames property value. The name of the UI element of footer to be removed.
     * @return array<string>|null
    */
    public function getUiElementNames(): ?array {
        $val = $this->getBackingStore()->get('uiElementNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uiElementNames'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('uiElementNames', $this->getUiElementNames());
    }

    /**
     * Sets the uiElementNames property value. The name of the UI element of footer to be removed.
     * @param array<string>|null $value Value to set for the uiElementNames property.
    */
    public function setUiElementNames(?array $value): void {
        $this->getBackingStore()->set('uiElementNames', $value);
    }

}
