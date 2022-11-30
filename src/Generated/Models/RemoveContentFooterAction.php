<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemoveContentFooterAction extends InformationProtectionAction implements Parsable 
{
    /**
     * Instantiates a new RemoveContentFooterAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.removeContentFooterAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoveContentFooterAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoveContentFooterAction {
        return new RemoveContentFooterAction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'uiElementNames' => fn(ParseNode $n) => $o->setUiElementNames($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the uiElementNames property value. The name of the UI element of the footer to be removed.
     * @return array<string>|null
    */
    public function getUiElementNames(): ?array {
        return $this->getBackingStore()->get('uiElementNames');
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
     * Sets the uiElementNames property value. The name of the UI element of the footer to be removed.
     *  @param array<string>|null $value Value to set for the uiElementNames property.
    */
    public function setUiElementNames(?array $value): void {
        $this->getBackingStore()->set('uiElementNames', $value);
    }

}
