<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageResourceScope extends Entity implements Parsable 
{
    /**
     * Instantiates a new accessPackageResourceScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageResourceScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResourceScope {
        return new AccessPackageResourceScope();
    }

    /**
     * Gets the accessPackageResource property value. The accessPackageResource property
     * @return AccessPackageResource|null
    */
    public function getAccessPackageResource(): ?AccessPackageResource {
        return $this->getBackingStore()->get('accessPackageResource');
    }

    /**
     * Gets the description property value. The description of the scope.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The display name of the scope.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageResource' => fn(ParseNode $n) => $o->setAccessPackageResource($n->getObjectValue([AccessPackageResource::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isRootScope' => fn(ParseNode $n) => $o->setIsRootScope($n->getBooleanValue()),
            'originId' => fn(ParseNode $n) => $o->setOriginId($n->getStringValue()),
            'originSystem' => fn(ParseNode $n) => $o->setOriginSystem($n->getStringValue()),
            'roleOriginId' => fn(ParseNode $n) => $o->setRoleOriginId($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isRootScope property value. True if the scopes are arranged in a hierarchy and this is the top or root scope of the resource.
     * @return bool|null
    */
    public function getIsRootScope(): ?bool {
        return $this->getBackingStore()->get('isRootScope');
    }

    /**
     * Gets the originId property value. The unique identifier for the scope in the resource as defined in the origin system.
     * @return string|null
    */
    public function getOriginId(): ?string {
        return $this->getBackingStore()->get('originId');
    }

    /**
     * Gets the originSystem property value. The origin system for the scope.
     * @return string|null
    */
    public function getOriginSystem(): ?string {
        return $this->getBackingStore()->get('originSystem');
    }

    /**
     * Gets the roleOriginId property value. The origin system for the role, if different.
     * @return string|null
    */
    public function getRoleOriginId(): ?string {
        return $this->getBackingStore()->get('roleOriginId');
    }

    /**
     * Gets the url property value. A resource locator for the scope.
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->getBackingStore()->get('url');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackageResource', $this->getAccessPackageResource());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isRootScope', $this->getIsRootScope());
        $writer->writeStringValue('originId', $this->getOriginId());
        $writer->writeStringValue('originSystem', $this->getOriginSystem());
        $writer->writeStringValue('roleOriginId', $this->getRoleOriginId());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the accessPackageResource property value. The accessPackageResource property
     *  @param AccessPackageResource|null $value Value to set for the accessPackageResource property.
    */
    public function setAccessPackageResource(?AccessPackageResource $value): void {
        $this->getBackingStore()->set('accessPackageResource', $value);
    }

    /**
     * Sets the description property value. The description of the scope.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the scope.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isRootScope property value. True if the scopes are arranged in a hierarchy and this is the top or root scope of the resource.
     *  @param bool|null $value Value to set for the isRootScope property.
    */
    public function setIsRootScope(?bool $value): void {
        $this->getBackingStore()->set('isRootScope', $value);
    }

    /**
     * Sets the originId property value. The unique identifier for the scope in the resource as defined in the origin system.
     *  @param string|null $value Value to set for the originId property.
    */
    public function setOriginId(?string $value): void {
        $this->getBackingStore()->set('originId', $value);
    }

    /**
     * Sets the originSystem property value. The origin system for the scope.
     *  @param string|null $value Value to set for the originSystem property.
    */
    public function setOriginSystem(?string $value): void {
        $this->getBackingStore()->set('originSystem', $value);
    }

    /**
     * Sets the roleOriginId property value. The origin system for the role, if different.
     *  @param string|null $value Value to set for the roleOriginId property.
    */
    public function setRoleOriginId(?string $value): void {
        $this->getBackingStore()->set('roleOriginId', $value);
    }

    /**
     * Sets the url property value. A resource locator for the scope.
     *  @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

}
