<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NoMfaOnRoleActivationAlertIncident extends UnifiedRoleManagementAlertIncident implements Parsable 
{
    /**
     * Instantiates a new NoMfaOnRoleActivationAlertIncident and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.noMfaOnRoleActivationAlertIncident');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NoMfaOnRoleActivationAlertIncident
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NoMfaOnRoleActivationAlertIncident {
        return new NoMfaOnRoleActivationAlertIncident();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'roleDisplayName' => fn(ParseNode $n) => $o->setRoleDisplayName($n->getStringValue()),
            'roleTemplateId' => fn(ParseNode $n) => $o->setRoleTemplateId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the roleDisplayName property value. The roleDisplayName property
     * @return string|null
    */
    public function getRoleDisplayName(): ?string {
        return $this->getBackingStore()->get('roleDisplayName');
    }

    /**
     * Gets the roleTemplateId property value. The roleTemplateId property
     * @return string|null
    */
    public function getRoleTemplateId(): ?string {
        return $this->getBackingStore()->get('roleTemplateId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('roleDisplayName', $this->getRoleDisplayName());
        $writer->writeStringValue('roleTemplateId', $this->getRoleTemplateId());
    }

    /**
     * Sets the roleDisplayName property value. The roleDisplayName property
     * @param string|null $value Value to set for the roleDisplayName property.
    */
    public function setRoleDisplayName(?string $value): void {
        $this->getBackingStore()->set('roleDisplayName', $value);
    }

    /**
     * Sets the roleTemplateId property value. The roleTemplateId property
     * @param string|null $value Value to set for the roleTemplateId property.
    */
    public function setRoleTemplateId(?string $value): void {
        $this->getBackingStore()->set('roleTemplateId', $value);
    }

}
