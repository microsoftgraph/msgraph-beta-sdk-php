<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageResource extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new accessPackageResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('accessPackageResourceEnvironment');
        if (is_null($val) || $val instanceof AccessPackageResourceEnvironment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageResourceEnvironment'");
    }

    /**
     * Gets the accessPackageResourceRoles property value. Read-only. Nullable. Supports $expand.
     * @return array<AccessPackageResourceRole>|null
    */
    public function getAccessPackageResourceRoles(): ?array {
        $val = $this->getBackingStore()->get('accessPackageResourceRoles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageResourceRole::class);
            /** @var array<AccessPackageResourceRole>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageResourceRoles'");
    }

    /**
     * Gets the accessPackageResourceScopes property value. Read-only. Nullable. Supports $expand.
     * @return array<AccessPackageResourceScope>|null
    */
    public function getAccessPackageResourceScopes(): ?array {
        $val = $this->getBackingStore()->get('accessPackageResourceScopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageResourceScope::class);
            /** @var array<AccessPackageResourceScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageResourceScopes'");
    }

    /**
     * Gets the addedBy property value. The name of the user or application that first added this resource. Read-only.
     * @return string|null
    */
    public function getAddedBy(): ?string {
        $val = $this->getBackingStore()->get('addedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addedBy'");
    }

    /**
     * Gets the addedOn property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getAddedOn(): ?DateTime {
        $val = $this->getBackingStore()->get('addedOn');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addedOn'");
    }

    /**
     * Gets the attributes property value. Contains information about the attributes to be collected from the requestor and sent to the resource application.
     * @return array<AccessPackageResourceAttribute>|null
    */
    public function getAttributes(): ?array {
        $val = $this->getBackingStore()->get('attributes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageResourceAttribute::class);
            /** @var array<AccessPackageResourceAttribute>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attributes'");
    }

    /**
     * Gets the description property value. A description for the resource.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of the resource, such as the application name, group name or site name.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageResourceEnvironment' => fn(ParseNode $n) => $o->setAccessPackageResourceEnvironment($n->getObjectValue([AccessPackageResourceEnvironment::class, 'createFromDiscriminatorValue'])),
            'accessPackageResourceRoles' => fn(ParseNode $n) => $o->setAccessPackageResourceRoles($n->getCollectionOfObjectValues([AccessPackageResourceRole::class, 'createFromDiscriminatorValue'])),
            'accessPackageResourceScopes' => fn(ParseNode $n) => $o->setAccessPackageResourceScopes($n->getCollectionOfObjectValues([AccessPackageResourceScope::class, 'createFromDiscriminatorValue'])),
            'addedBy' => fn(ParseNode $n) => $o->setAddedBy($n->getStringValue()),
            'addedOn' => fn(ParseNode $n) => $o->setAddedOn($n->getDateTimeValue()),
            'attributes' => fn(ParseNode $n) => $o->setAttributes($n->getCollectionOfObjectValues([AccessPackageResourceAttribute::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isPendingOnboarding' => fn(ParseNode $n) => $o->setIsPendingOnboarding($n->getBooleanValue()),
            'originId' => fn(ParseNode $n) => $o->setOriginId($n->getStringValue()),
            'originSystem' => fn(ParseNode $n) => $o->setOriginSystem($n->getStringValue()),
            'resourceType' => fn(ParseNode $n) => $o->setResourceType($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isPendingOnboarding property value. True if the resource is not yet available for assignment. Read-only.
     * @return bool|null
    */
    public function getIsPendingOnboarding(): ?bool {
        $val = $this->getBackingStore()->get('isPendingOnboarding');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPendingOnboarding'");
    }

    /**
     * Gets the originId property value. The unique identifier of the resource in the origin system. In the case of an Azure AD group, this is the identifier of the group.
     * @return string|null
    */
    public function getOriginId(): ?string {
        $val = $this->getBackingStore()->get('originId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originId'");
    }

    /**
     * Gets the originSystem property value. The type of the resource in the origin system, such as SharePointOnline, AadApplication or AadGroup.
     * @return string|null
    */
    public function getOriginSystem(): ?string {
        $val = $this->getBackingStore()->get('originSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originSystem'");
    }

    /**
     * Gets the resourceType property value. The type of the resource, such as Application if it is an Azure AD connected application, or SharePoint Online Site for a SharePoint Online site.
     * @return string|null
    */
    public function getResourceType(): ?string {
        $val = $this->getBackingStore()->get('resourceType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceType'");
    }

    /**
     * Gets the url property value. A unique resource locator for the resource, such as the URL for signing a user into an application.
     * @return string|null
    */
    public function getUrl(): ?string {
        $val = $this->getBackingStore()->get('url');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'url'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackageResourceEnvironment', $this->getAccessPackageResourceEnvironment());
        $writer->writeCollectionOfObjectValues('accessPackageResourceRoles', $this->getAccessPackageResourceRoles());
        $writer->writeCollectionOfObjectValues('accessPackageResourceScopes', $this->getAccessPackageResourceScopes());
        $writer->writeStringValue('addedBy', $this->getAddedBy());
        $writer->writeDateTimeValue('addedOn', $this->getAddedOn());
        $writer->writeCollectionOfObjectValues('attributes', $this->getAttributes());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isPendingOnboarding', $this->getIsPendingOnboarding());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('originId', $this->getOriginId());
        $writer->writeStringValue('originSystem', $this->getOriginSystem());
        $writer->writeStringValue('resourceType', $this->getResourceType());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the accessPackageResourceEnvironment property value. Contains the environment information for the resource. This can be set using either the @odata.bind annotation or the environment's originId.Supports $expand.
     * @param AccessPackageResourceEnvironment|null $value Value to set for the accessPackageResourceEnvironment property.
    */
    public function setAccessPackageResourceEnvironment(?AccessPackageResourceEnvironment $value): void {
        $this->getBackingStore()->set('accessPackageResourceEnvironment', $value);
    }

    /**
     * Sets the accessPackageResourceRoles property value. Read-only. Nullable. Supports $expand.
     * @param array<AccessPackageResourceRole>|null $value Value to set for the accessPackageResourceRoles property.
    */
    public function setAccessPackageResourceRoles(?array $value): void {
        $this->getBackingStore()->set('accessPackageResourceRoles', $value);
    }

    /**
     * Sets the accessPackageResourceScopes property value. Read-only. Nullable. Supports $expand.
     * @param array<AccessPackageResourceScope>|null $value Value to set for the accessPackageResourceScopes property.
    */
    public function setAccessPackageResourceScopes(?array $value): void {
        $this->getBackingStore()->set('accessPackageResourceScopes', $value);
    }

    /**
     * Sets the addedBy property value. The name of the user or application that first added this resource. Read-only.
     * @param string|null $value Value to set for the addedBy property.
    */
    public function setAddedBy(?string $value): void {
        $this->getBackingStore()->set('addedBy', $value);
    }

    /**
     * Sets the addedOn property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the addedOn property.
    */
    public function setAddedOn(?DateTime $value): void {
        $this->getBackingStore()->set('addedOn', $value);
    }

    /**
     * Sets the attributes property value. Contains information about the attributes to be collected from the requestor and sent to the resource application.
     * @param array<AccessPackageResourceAttribute>|null $value Value to set for the attributes property.
    */
    public function setAttributes(?array $value): void {
        $this->getBackingStore()->set('attributes', $value);
    }

    /**
     * Sets the description property value. A description for the resource.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the resource, such as the application name, group name or site name.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isPendingOnboarding property value. True if the resource is not yet available for assignment. Read-only.
     * @param bool|null $value Value to set for the isPendingOnboarding property.
    */
    public function setIsPendingOnboarding(?bool $value): void {
        $this->getBackingStore()->set('isPendingOnboarding', $value);
    }

    /**
     * Sets the originId property value. The unique identifier of the resource in the origin system. In the case of an Azure AD group, this is the identifier of the group.
     * @param string|null $value Value to set for the originId property.
    */
    public function setOriginId(?string $value): void {
        $this->getBackingStore()->set('originId', $value);
    }

    /**
     * Sets the originSystem property value. The type of the resource in the origin system, such as SharePointOnline, AadApplication or AadGroup.
     * @param string|null $value Value to set for the originSystem property.
    */
    public function setOriginSystem(?string $value): void {
        $this->getBackingStore()->set('originSystem', $value);
    }

    /**
     * Sets the resourceType property value. The type of the resource, such as Application if it is an Azure AD connected application, or SharePoint Online Site for a SharePoint Online site.
     * @param string|null $value Value to set for the resourceType property.
    */
    public function setResourceType(?string $value): void {
        $this->getBackingStore()->set('resourceType', $value);
    }

    /**
     * Sets the url property value. A unique resource locator for the resource, such as the URL for signing a user into an application.
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

}
