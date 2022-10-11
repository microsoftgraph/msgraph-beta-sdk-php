<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageResource extends Entity implements Parsable 
{
    /**
     * @var AccessPackageResourceEnvironment|null $accessPackageResourceEnvironment Contains the environment information for the resource. This can be set using either the @odata.bind annotation or the environment's originId.Supports $expand.
    */
    private ?AccessPackageResourceEnvironment $accessPackageResourceEnvironment = null;
    
    /**
     * @var array<AccessPackageResourceRole>|null $accessPackageResourceRoles Read-only. Nullable. Supports $expand.
    */
    private ?array $accessPackageResourceRoles = null;
    
    /**
     * @var array<AccessPackageResourceScope>|null $accessPackageResourceScopes Read-only. Nullable. Supports $expand.
    */
    private ?array $accessPackageResourceScopes = null;
    
    /**
     * @var string|null $addedBy The name of the user or application that first added this resource. Read-only.
    */
    private ?string $addedBy = null;
    
    /**
     * @var DateTime|null $addedOn The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    */
    private ?DateTime $addedOn = null;
    
    /**
     * @var array<AccessPackageResourceAttribute>|null $attributes Contains information about the attributes to be collected from the requestor and sent to the resource application.
    */
    private ?array $attributes = null;
    
    /**
     * @var string|null $description A description for the resource.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name of the resource, such as the application name, group name or site name.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isPendingOnboarding True if the resource is not yet available for assignment. Read-only.
    */
    private ?bool $isPendingOnboarding = null;
    
    /**
     * @var string|null $originId The unique identifier of the resource in the origin system. In the case of an Azure AD group, this is the identifier of the group.
    */
    private ?string $originId = null;
    
    /**
     * @var string|null $originSystem The type of the resource in the origin system, such as SharePointOnline, AadApplication or AadGroup.
    */
    private ?string $originSystem = null;
    
    /**
     * @var string|null $resourceType The type of the resource, such as Application if it is an Azure AD connected application, or SharePoint Online Site for a SharePoint Online site.
    */
    private ?string $resourceType = null;
    
    /**
     * @var string|null $url A unique resource locator for the resource, such as the URL for signing a user into an application.
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new accessPackageResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageResource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResource {
        return new AccessPackageResource();
    }

    /**
     * Gets the accessPackageResourceEnvironment property value. Contains the environment information for the resource. This can be set using either the @odata.bind annotation or the environment's originId.Supports $expand.
     * @return AccessPackageResourceEnvironment|null
    */
    public function getAccessPackageResourceEnvironment(): ?AccessPackageResourceEnvironment {
        return $this->accessPackageResourceEnvironment;
    }

    /**
     * Gets the accessPackageResourceRoles property value. Read-only. Nullable. Supports $expand.
     * @return array<AccessPackageResourceRole>|null
    */
    public function getAccessPackageResourceRoles(): ?array {
        return $this->accessPackageResourceRoles;
    }

    /**
     * Gets the accessPackageResourceScopes property value. Read-only. Nullable. Supports $expand.
     * @return array<AccessPackageResourceScope>|null
    */
    public function getAccessPackageResourceScopes(): ?array {
        return $this->accessPackageResourceScopes;
    }

    /**
     * Gets the addedBy property value. The name of the user or application that first added this resource. Read-only.
     * @return string|null
    */
    public function getAddedBy(): ?string {
        return $this->addedBy;
    }

    /**
     * Gets the addedOn property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getAddedOn(): ?DateTime {
        return $this->addedOn;
    }

    /**
     * Gets the attributes property value. Contains information about the attributes to be collected from the requestor and sent to the resource application.
     * @return array<AccessPackageResourceAttribute>|null
    */
    public function getAttributes(): ?array {
        return $this->attributes;
    }

    /**
     * Gets the description property value. A description for the resource.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the resource, such as the application name, group name or site name.
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
            'accessPackageResourceEnvironment' => function (ParseNode $n) use ($o) { $o->setAccessPackageResourceEnvironment($n->getObjectValue(array(AccessPackageResourceEnvironment::class, 'createFromDiscriminatorValue'))); },
            'accessPackageResourceRoles' => function (ParseNode $n) use ($o) { $o->setAccessPackageResourceRoles($n->getCollectionOfObjectValues(array(AccessPackageResourceRole::class, 'createFromDiscriminatorValue'))); },
            'accessPackageResourceScopes' => function (ParseNode $n) use ($o) { $o->setAccessPackageResourceScopes($n->getCollectionOfObjectValues(array(AccessPackageResourceScope::class, 'createFromDiscriminatorValue'))); },
            'addedBy' => function (ParseNode $n) use ($o) { $o->setAddedBy($n->getStringValue()); },
            'addedOn' => function (ParseNode $n) use ($o) { $o->setAddedOn($n->getDateTimeValue()); },
            'attributes' => function (ParseNode $n) use ($o) { $o->setAttributes($n->getCollectionOfObjectValues(array(AccessPackageResourceAttribute::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'isPendingOnboarding' => function (ParseNode $n) use ($o) { $o->setIsPendingOnboarding($n->getBooleanValue()); },
            'originId' => function (ParseNode $n) use ($o) { $o->setOriginId($n->getStringValue()); },
            'originSystem' => function (ParseNode $n) use ($o) { $o->setOriginSystem($n->getStringValue()); },
            'resourceType' => function (ParseNode $n) use ($o) { $o->setResourceType($n->getStringValue()); },
            'url' => function (ParseNode $n) use ($o) { $o->setUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isPendingOnboarding property value. True if the resource is not yet available for assignment. Read-only.
     * @return bool|null
    */
    public function getIsPendingOnboarding(): ?bool {
        return $this->isPendingOnboarding;
    }

    /**
     * Gets the originId property value. The unique identifier of the resource in the origin system. In the case of an Azure AD group, this is the identifier of the group.
     * @return string|null
    */
    public function getOriginId(): ?string {
        return $this->originId;
    }

    /**
     * Gets the originSystem property value. The type of the resource in the origin system, such as SharePointOnline, AadApplication or AadGroup.
     * @return string|null
    */
    public function getOriginSystem(): ?string {
        return $this->originSystem;
    }

    /**
     * Gets the resourceType property value. The type of the resource, such as Application if it is an Azure AD connected application, or SharePoint Online Site for a SharePoint Online site.
     * @return string|null
    */
    public function getResourceType(): ?string {
        return $this->resourceType;
    }

    /**
     * Gets the url property value. A unique resource locator for the resource, such as the URL for signing a user into an application.
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
        $writer->writeObjectValue('accessPackageResourceEnvironment', $this->accessPackageResourceEnvironment);
        $writer->writeCollectionOfObjectValues('accessPackageResourceRoles', $this->accessPackageResourceRoles);
        $writer->writeCollectionOfObjectValues('accessPackageResourceScopes', $this->accessPackageResourceScopes);
        $writer->writeStringValue('addedBy', $this->addedBy);
        $writer->writeDateTimeValue('addedOn', $this->addedOn);
        $writer->writeCollectionOfObjectValues('attributes', $this->attributes);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isPendingOnboarding', $this->isPendingOnboarding);
        $writer->writeStringValue('originId', $this->originId);
        $writer->writeStringValue('originSystem', $this->originSystem);
        $writer->writeStringValue('resourceType', $this->resourceType);
        $writer->writeStringValue('url', $this->url);
    }

    /**
     * Sets the accessPackageResourceEnvironment property value. Contains the environment information for the resource. This can be set using either the @odata.bind annotation or the environment's originId.Supports $expand.
     *  @param AccessPackageResourceEnvironment|null $value Value to set for the accessPackageResourceEnvironment property.
    */
    public function setAccessPackageResourceEnvironment(?AccessPackageResourceEnvironment $value ): void {
        $this->accessPackageResourceEnvironment = $value;
    }

    /**
     * Sets the accessPackageResourceRoles property value. Read-only. Nullable. Supports $expand.
     *  @param array<AccessPackageResourceRole>|null $value Value to set for the accessPackageResourceRoles property.
    */
    public function setAccessPackageResourceRoles(?array $value ): void {
        $this->accessPackageResourceRoles = $value;
    }

    /**
     * Sets the accessPackageResourceScopes property value. Read-only. Nullable. Supports $expand.
     *  @param array<AccessPackageResourceScope>|null $value Value to set for the accessPackageResourceScopes property.
    */
    public function setAccessPackageResourceScopes(?array $value ): void {
        $this->accessPackageResourceScopes = $value;
    }

    /**
     * Sets the addedBy property value. The name of the user or application that first added this resource. Read-only.
     *  @param string|null $value Value to set for the addedBy property.
    */
    public function setAddedBy(?string $value ): void {
        $this->addedBy = $value;
    }

    /**
     * Sets the addedOn property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the addedOn property.
    */
    public function setAddedOn(?DateTime $value ): void {
        $this->addedOn = $value;
    }

    /**
     * Sets the attributes property value. Contains information about the attributes to be collected from the requestor and sent to the resource application.
     *  @param array<AccessPackageResourceAttribute>|null $value Value to set for the attributes property.
    */
    public function setAttributes(?array $value ): void {
        $this->attributes = $value;
    }

    /**
     * Sets the description property value. A description for the resource.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the resource, such as the application name, group name or site name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isPendingOnboarding property value. True if the resource is not yet available for assignment. Read-only.
     *  @param bool|null $value Value to set for the isPendingOnboarding property.
    */
    public function setIsPendingOnboarding(?bool $value ): void {
        $this->isPendingOnboarding = $value;
    }

    /**
     * Sets the originId property value. The unique identifier of the resource in the origin system. In the case of an Azure AD group, this is the identifier of the group.
     *  @param string|null $value Value to set for the originId property.
    */
    public function setOriginId(?string $value ): void {
        $this->originId = $value;
    }

    /**
     * Sets the originSystem property value. The type of the resource in the origin system, such as SharePointOnline, AadApplication or AadGroup.
     *  @param string|null $value Value to set for the originSystem property.
    */
    public function setOriginSystem(?string $value ): void {
        $this->originSystem = $value;
    }

    /**
     * Sets the resourceType property value. The type of the resource, such as Application if it is an Azure AD connected application, or SharePoint Online Site for a SharePoint Online site.
     *  @param string|null $value Value to set for the resourceType property.
    */
    public function setResourceType(?string $value ): void {
        $this->resourceType = $value;
    }

    /**
     * Sets the url property value. A unique resource locator for the resource, such as the URL for signing a user into an application.
     *  @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value ): void {
        $this->url = $value;
    }

}
