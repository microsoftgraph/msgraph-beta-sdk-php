<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceRoleDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new governanceRoleDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceRoleDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceRoleDefinition {
        return new GovernanceRoleDefinition();
    }

    /**
     * Gets the displayName property value. The display name of the role definition.
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
     * Gets the externalId property value. The external id of the role definition.
     * @return string|null
    */
    public function getExternalId(): ?string {
        $val = $this->getBackingStore()->get('externalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([GovernanceResource::class, 'createFromDiscriminatorValue'])),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'roleSetting' => fn(ParseNode $n) => $o->setRoleSetting($n->getObjectValue([GovernanceRoleSetting::class, 'createFromDiscriminatorValue'])),
            'templateId' => fn(ParseNode $n) => $o->setTemplateId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the resource property value. Read-only. The associated resource for the role definition.
     * @return GovernanceResource|null
    */
    public function getResource(): ?GovernanceResource {
        $val = $this->getBackingStore()->get('resource');
        if (is_null($val) || $val instanceof GovernanceResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resource'");
    }

    /**
     * Gets the resourceId property value. Required. The id of the resource associated with the role definition.
     * @return string|null
    */
    public function getResourceId(): ?string {
        $val = $this->getBackingStore()->get('resourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceId'");
    }

    /**
     * Gets the roleSetting property value. The associated role setting for the role definition.
     * @return GovernanceRoleSetting|null
    */
    public function getRoleSetting(): ?GovernanceRoleSetting {
        $val = $this->getBackingStore()->get('roleSetting');
        if (is_null($val) || $val instanceof GovernanceRoleSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleSetting'");
    }

    /**
     * Gets the templateId property value. The templateId property
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
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeObjectValue('resource', $this->getResource());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeObjectValue('roleSetting', $this->getRoleSetting());
        $writer->writeStringValue('templateId', $this->getTemplateId());
    }

    /**
     * Sets the displayName property value. The display name of the role definition.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalId property value. The external id of the role definition.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the resource property value. Read-only. The associated resource for the role definition.
     * @param GovernanceResource|null $value Value to set for the resource property.
    */
    public function setResource(?GovernanceResource $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

    /**
     * Sets the resourceId property value. Required. The id of the resource associated with the role definition.
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

    /**
     * Sets the roleSetting property value. The associated role setting for the role definition.
     * @param GovernanceRoleSetting|null $value Value to set for the roleSetting property.
    */
    public function setRoleSetting(?GovernanceRoleSetting $value): void {
        $this->getBackingStore()->set('roleSetting', $value);
    }

    /**
     * Sets the templateId property value. The templateId property
     * @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value): void {
        $this->getBackingStore()->set('templateId', $value);
    }

}
