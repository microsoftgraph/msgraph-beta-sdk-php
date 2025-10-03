<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProtectByTemplateAction extends InformationProtectionAction implements Parsable 
{
    /**
     * Instantiates a new ProtectByTemplateAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.protectByTemplateAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProtectByTemplateAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProtectByTemplateAction {
        return new ProtectByTemplateAction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'templateId' => fn(ParseNode $n) => $o->setTemplateId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the templateId property value. The unique identifier for a protection template in Microsoft Purview Information Protection to apply to the content.
     * @return string|null
    */
    public function getTemplateId(): ?string {
        $val = $this->getBackingStore()->get('templateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templateId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('templateId', $this->getTemplateId());
    }

    /**
     * Sets the templateId property value. The unique identifier for a protection template in Microsoft Purview Information Protection to apply to the content.
     * @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value): void {
        $this->getBackingStore()->set('templateId', $value);
    }

}
