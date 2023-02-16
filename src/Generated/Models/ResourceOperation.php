<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResourceOperation extends Entity implements Parsable 
{
    /**
     * Instantiates a new ResourceOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResourceOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResourceOperation {
        return new ResourceOperation();
    }

    /**
     * Gets the actionName property value. Type of action this operation is going to perform. The actionName should be concise and limited to as few words as possible.
     * @return string|null
    */
    public function getActionName(): ?string {
        return $this->getBackingStore()->get('actionName');
    }

    /**
     * Gets the description property value. Description of the resource operation. The description is used in mouse-over text for the operation when shown in the Azure Portal.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the enabledForScopeValidation property value. Determines whether the Permission is validated for Scopes defined per Role Assignment. This property is read-only.
     * @return bool|null
    */
    public function getEnabledForScopeValidation(): ?bool {
        return $this->getBackingStore()->get('enabledForScopeValidation');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionName' => fn(ParseNode $n) => $o->setActionName($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'enabledForScopeValidation' => fn(ParseNode $n) => $o->setEnabledForScopeValidation($n->getBooleanValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getStringValue()),
            'resourceName' => fn(ParseNode $n) => $o->setResourceName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the resource property value. Resource category to which this Operation belongs. This property is read-only.
     * @return string|null
    */
    public function getResource(): ?string {
        return $this->getBackingStore()->get('resource');
    }

    /**
     * Gets the resourceName property value. Name of the Resource this operation is performed on.
     * @return string|null
    */
    public function getResourceName(): ?string {
        return $this->getBackingStore()->get('resourceName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('actionName', $this->getActionName());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('resourceName', $this->getResourceName());
    }

    /**
     * Sets the actionName property value. Type of action this operation is going to perform. The actionName should be concise and limited to as few words as possible.
     * @param string|null $value Value to set for the actionName property.
    */
    public function setActionName(?string $value): void {
        $this->getBackingStore()->set('actionName', $value);
    }

    /**
     * Sets the description property value. Description of the resource operation. The description is used in mouse-over text for the operation when shown in the Azure Portal.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the enabledForScopeValidation property value. Determines whether the Permission is validated for Scopes defined per Role Assignment. This property is read-only.
     * @param bool|null $value Value to set for the enabledForScopeValidation property.
    */
    public function setEnabledForScopeValidation(?bool $value): void {
        $this->getBackingStore()->set('enabledForScopeValidation', $value);
    }

    /**
     * Sets the resource property value. Resource category to which this Operation belongs. This property is read-only.
     * @param string|null $value Value to set for the resource property.
    */
    public function setResource(?string $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

    /**
     * Sets the resourceName property value. Name of the Resource this operation is performed on.
     * @param string|null $value Value to set for the resourceName property.
    */
    public function setResourceName(?string $value): void {
        $this->getBackingStore()->set('resourceName', $value);
    }

}
