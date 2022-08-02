<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemoveWatermarkAction extends InformationProtectionAction implements Parsable 
{
    /**
     * @var array<string>|null $uiElementNames The name of the UI element of footer to be removed.
    */
    private ?array $uiElementNames = null;
    
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'uiElementNames' => function (ParseNode $n) use ($o) { $o->setUiElementNames($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the uiElementNames property value. The name of the UI element of footer to be removed.
     * @return array<string>|null
    */
    public function getUiElementNames(): ?array {
        return $this->uiElementNames;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('uiElementNames', $this->uiElementNames);
    }

    /**
     * Sets the uiElementNames property value. The name of the UI element of footer to be removed.
     *  @param array<string>|null $value Value to set for the uiElementNames property.
    */
    public function setUiElementNames(?array $value ): void {
        $this->uiElementNames = $value;
    }

}
