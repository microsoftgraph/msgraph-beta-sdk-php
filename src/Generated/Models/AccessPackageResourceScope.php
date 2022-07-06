<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageResourceScope extends Entity implements Parsable 
{
    /**
     * @var AccessPackageResource|null $accessPackageResource The accessPackageResource property
    */
    private ?AccessPackageResource $accessPackageResource = null;
    
    /**
     * @var string|null $description The description of the scope.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name of the scope.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isRootScope True if the scopes are arranged in a hierarchy and this is the top or root scope of the resource.
    */
    private ?bool $isRootScope = null;
    
    /**
     * @var string|null $originId The unique identifier for the scope in the resource as defined in the origin system.
    */
    private ?string $originId = null;
    
    /**
     * @var string|null $originSystem The origin system for the scope.
    */
    private ?string $originSystem = null;
    
    /**
     * @var string|null $roleOriginId The origin system for the role, if different.
    */
    private ?string $roleOriginId = null;
    
    /**
     * @var string|null $url A resource locator for the scope.
    */
    private ?string $url = null;
    
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
        return $this->accessPackageResource;
    }

    /**
     * Gets the description property value. The description of the scope.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the scope.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageResource' => function (ParseNode $n) use ($o) { $o->setAccessPackageResource($n->getObjectValue(array(AccessPackageResource::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'isRootScope' => function (ParseNode $n) use ($o) { $o->setIsRootScope($n->getBooleanValue()); },
            'originId' => function (ParseNode $n) use ($o) { $o->setOriginId($n->getStringValue()); },
            'originSystem' => function (ParseNode $n) use ($o) { $o->setOriginSystem($n->getStringValue()); },
            'roleOriginId' => function (ParseNode $n) use ($o) { $o->setRoleOriginId($n->getStringValue()); },
            'url' => function (ParseNode $n) use ($o) { $o->setUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isRootScope property value. True if the scopes are arranged in a hierarchy and this is the top or root scope of the resource.
     * @return bool|null
    */
    public function getIsRootScope(): ?bool {
        return $this->isRootScope;
    }

    /**
     * Gets the originId property value. The unique identifier for the scope in the resource as defined in the origin system.
     * @return string|null
    */
    public function getOriginId(): ?string {
        return $this->originId;
    }

    /**
     * Gets the originSystem property value. The origin system for the scope.
     * @return string|null
    */
    public function getOriginSystem(): ?string {
        return $this->originSystem;
    }

    /**
     * Gets the roleOriginId property value. The origin system for the role, if different.
     * @return string|null
    */
    public function getRoleOriginId(): ?string {
        return $this->roleOriginId;
    }

    /**
     * Gets the url property value. A resource locator for the scope.
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackageResource', $this->accessPackageResource);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isRootScope', $this->isRootScope);
        $writer->writeStringValue('originId', $this->originId);
        $writer->writeStringValue('originSystem', $this->originSystem);
        $writer->writeStringValue('roleOriginId', $this->roleOriginId);
        $writer->writeStringValue('url', $this->url);
    }

    /**
     * Sets the accessPackageResource property value. The accessPackageResource property
     *  @param AccessPackageResource|null $value Value to set for the accessPackageResource property.
    */
    public function setAccessPackageResource(?AccessPackageResource $value ): void {
        $this->accessPackageResource = $value;
    }

    /**
     * Sets the description property value. The description of the scope.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the scope.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isRootScope property value. True if the scopes are arranged in a hierarchy and this is the top or root scope of the resource.
     *  @param bool|null $value Value to set for the isRootScope property.
    */
    public function setIsRootScope(?bool $value ): void {
        $this->isRootScope = $value;
    }

    /**
     * Sets the originId property value. The unique identifier for the scope in the resource as defined in the origin system.
     *  @param string|null $value Value to set for the originId property.
    */
    public function setOriginId(?string $value ): void {
        $this->originId = $value;
    }

    /**
     * Sets the originSystem property value. The origin system for the scope.
     *  @param string|null $value Value to set for the originSystem property.
    */
    public function setOriginSystem(?string $value ): void {
        $this->originSystem = $value;
    }

    /**
     * Sets the roleOriginId property value. The origin system for the role, if different.
     *  @param string|null $value Value to set for the roleOriginId property.
    */
    public function setRoleOriginId(?string $value ): void {
        $this->roleOriginId = $value;
    }

    /**
     * Sets the url property value. A resource locator for the scope.
     *  @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value ): void {
        $this->url = $value;
    }

}
