<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRbacResourceAction extends Entity implements Parsable 
{
    /**
     * Instantiates a new unifiedRbacResourceAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRbacResourceAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRbacResourceAction {
        return new UnifiedRbacResourceAction();
    }

    /**
     * Gets the actionVerb property value. HTTP method for the action, such as DELETE, GET, PATCH, POST, PUT, or null. Supports $filter (eq) but not for null values.
     * @return string|null
    */
    public function getActionVerb(): ?string {
        return $this->getBackingStore()->get('actionVerb');
    }

    /**
     * Gets the authenticationContext property value. The authenticationContext property
     * @return AuthenticationContextClassReference|null
    */
    public function getAuthenticationContext(): ?AuthenticationContextClassReference {
        return $this->getBackingStore()->get('authenticationContext');
    }

    /**
     * Gets the authenticationContextId property value. The authenticationContextId property
     * @return string|null
    */
    public function getAuthenticationContextId(): ?string {
        return $this->getBackingStore()->get('authenticationContextId');
    }

    /**
     * Gets the description property value. Description for the action. Supports $filter (eq).
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionVerb' => fn(ParseNode $n) => $o->setActionVerb($n->getStringValue()),
            'authenticationContext' => fn(ParseNode $n) => $o->setAuthenticationContext($n->getObjectValue([AuthenticationContextClassReference::class, 'createFromDiscriminatorValue'])),
            'authenticationContextId' => fn(ParseNode $n) => $o->setAuthenticationContextId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'isAuthenticationContextSettable' => fn(ParseNode $n) => $o->setIsAuthenticationContextSettable($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'resourceScope' => fn(ParseNode $n) => $o->setResourceScope($n->getObjectValue([UnifiedRbacResourceScope::class, 'createFromDiscriminatorValue'])),
            'resourceScopeId' => fn(ParseNode $n) => $o->setResourceScopeId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isAuthenticationContextSettable property value. The isAuthenticationContextSettable property
     * @return bool|null
    */
    public function getIsAuthenticationContextSettable(): ?bool {
        return $this->getBackingStore()->get('isAuthenticationContextSettable');
    }

    /**
     * Gets the name property value. Name for the action within the resource namespace, such as microsoft.insights/programs/update. Can include slash character (/). Case insensitive. Required. Supports $filter (eq).
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the resourceScope property value. The resourceScope property
     * @return UnifiedRbacResourceScope|null
    */
    public function getResourceScope(): ?UnifiedRbacResourceScope {
        return $this->getBackingStore()->get('resourceScope');
    }

    /**
     * Gets the resourceScopeId property value. Not implemented.
     * @return string|null
    */
    public function getResourceScopeId(): ?string {
        return $this->getBackingStore()->get('resourceScopeId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('actionVerb', $this->getActionVerb());
        $writer->writeObjectValue('authenticationContext', $this->getAuthenticationContext());
        $writer->writeStringValue('authenticationContextId', $this->getAuthenticationContextId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('isAuthenticationContextSettable', $this->getIsAuthenticationContextSettable());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('resourceScope', $this->getResourceScope());
        $writer->writeStringValue('resourceScopeId', $this->getResourceScopeId());
    }

    /**
     * Sets the actionVerb property value. HTTP method for the action, such as DELETE, GET, PATCH, POST, PUT, or null. Supports $filter (eq) but not for null values.
     * @param string|null $value Value to set for the actionVerb property.
    */
    public function setActionVerb(?string $value): void {
        $this->getBackingStore()->set('actionVerb', $value);
    }

    /**
     * Sets the authenticationContext property value. The authenticationContext property
     * @param AuthenticationContextClassReference|null $value Value to set for the authenticationContext property.
    */
    public function setAuthenticationContext(?AuthenticationContextClassReference $value): void {
        $this->getBackingStore()->set('authenticationContext', $value);
    }

    /**
     * Sets the authenticationContextId property value. The authenticationContextId property
     * @param string|null $value Value to set for the authenticationContextId property.
    */
    public function setAuthenticationContextId(?string $value): void {
        $this->getBackingStore()->set('authenticationContextId', $value);
    }

    /**
     * Sets the description property value. Description for the action. Supports $filter (eq).
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the isAuthenticationContextSettable property value. The isAuthenticationContextSettable property
     * @param bool|null $value Value to set for the isAuthenticationContextSettable property.
    */
    public function setIsAuthenticationContextSettable(?bool $value): void {
        $this->getBackingStore()->set('isAuthenticationContextSettable', $value);
    }

    /**
     * Sets the name property value. Name for the action within the resource namespace, such as microsoft.insights/programs/update. Can include slash character (/). Case insensitive. Required. Supports $filter (eq).
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the resourceScope property value. The resourceScope property
     * @param UnifiedRbacResourceScope|null $value Value to set for the resourceScope property.
    */
    public function setResourceScope(?UnifiedRbacResourceScope $value): void {
        $this->getBackingStore()->set('resourceScope', $value);
    }

    /**
     * Sets the resourceScopeId property value. Not implemented.
     * @param string|null $value Value to set for the resourceScopeId property.
    */
    public function setResourceScopeId(?string $value): void {
        $this->getBackingStore()->set('resourceScopeId', $value);
    }

}
