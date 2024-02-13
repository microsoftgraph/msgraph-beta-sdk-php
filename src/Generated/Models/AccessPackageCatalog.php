<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageCatalog extends Entity implements Parsable 
{
    /**
     * Instantiates a new AccessPackageCatalog and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageCatalog
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageCatalog {
        return new AccessPackageCatalog();
    }

    /**
     * Gets the accessPackageCustomWorkflowExtensions property value. The attributes of a logic app, which can be called at various stages of an access package request and assignment cycle.
     * @return array<CustomCalloutExtension>|null
    */
    public function getAccessPackageCustomWorkflowExtensions(): ?array {
        $val = $this->getBackingStore()->get('accessPackageCustomWorkflowExtensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomCalloutExtension::class);
            /** @var array<CustomCalloutExtension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageCustomWorkflowExtensions'");
    }

    /**
     * Gets the accessPackageResourceRoles property value. The roles in each resource in a catalog. Read-only.
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
     * Gets the accessPackageResources property value. The accessPackageResources property
     * @return array<AccessPackageResource>|null
    */
    public function getAccessPackageResources(): ?array {
        $val = $this->getBackingStore()->get('accessPackageResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageResource::class);
            /** @var array<AccessPackageResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageResources'");
    }

    /**
     * Gets the accessPackageResourceScopes property value. The accessPackageResourceScopes property
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
     * Gets the accessPackages property value. The access packages in this catalog. Read-only. Nullable. Supports $expand.
     * @return array<AccessPackage>|null
    */
    public function getAccessPackages(): ?array {
        $val = $this->getBackingStore()->get('accessPackages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackage::class);
            /** @var array<AccessPackage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackages'");
    }

    /**
     * Gets the catalogStatus property value. Has the value Published if the access packages are available for management.
     * @return string|null
    */
    public function getCatalogStatus(): ?string {
        $val = $this->getBackingStore()->get('catalogStatus');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogStatus'");
    }

    /**
     * Gets the catalogType property value. One of UserManaged or ServiceDefault.
     * @return string|null
    */
    public function getCatalogType(): ?string {
        $val = $this->getBackingStore()->get('catalogType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogType'");
    }

    /**
     * Gets the createdBy property value. UPN of the user who created this resource. Read-only.
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the customAccessPackageWorkflowExtensions property value. The customAccessPackageWorkflowExtensions property
     * @return array<CustomAccessPackageWorkflowExtension>|null
    */
    public function getCustomAccessPackageWorkflowExtensions(): ?array {
        $val = $this->getBackingStore()->get('customAccessPackageWorkflowExtensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomAccessPackageWorkflowExtension::class);
            /** @var array<CustomAccessPackageWorkflowExtension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customAccessPackageWorkflowExtensions'");
    }

    /**
     * Gets the description property value. The description of the access package catalog.
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
     * Gets the displayName property value. The display name of the access package catalog. Supports $filter (eq, contains).
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
            'accessPackageCustomWorkflowExtensions' => fn(ParseNode $n) => $o->setAccessPackageCustomWorkflowExtensions($n->getCollectionOfObjectValues([CustomCalloutExtension::class, 'createFromDiscriminatorValue'])),
            'accessPackageResourceRoles' => fn(ParseNode $n) => $o->setAccessPackageResourceRoles($n->getCollectionOfObjectValues([AccessPackageResourceRole::class, 'createFromDiscriminatorValue'])),
            'accessPackageResources' => fn(ParseNode $n) => $o->setAccessPackageResources($n->getCollectionOfObjectValues([AccessPackageResource::class, 'createFromDiscriminatorValue'])),
            'accessPackageResourceScopes' => fn(ParseNode $n) => $o->setAccessPackageResourceScopes($n->getCollectionOfObjectValues([AccessPackageResourceScope::class, 'createFromDiscriminatorValue'])),
            'accessPackages' => fn(ParseNode $n) => $o->setAccessPackages($n->getCollectionOfObjectValues([AccessPackage::class, 'createFromDiscriminatorValue'])),
            'catalogStatus' => fn(ParseNode $n) => $o->setCatalogStatus($n->getStringValue()),
            'catalogType' => fn(ParseNode $n) => $o->setCatalogType($n->getStringValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'customAccessPackageWorkflowExtensions' => fn(ParseNode $n) => $o->setCustomAccessPackageWorkflowExtensions($n->getCollectionOfObjectValues([CustomAccessPackageWorkflowExtension::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isExternallyVisible' => fn(ParseNode $n) => $o->setIsExternallyVisible($n->getBooleanValue()),
            'modifiedBy' => fn(ParseNode $n) => $o->setModifiedBy($n->getStringValue()),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the isExternallyVisible property value. Whether the access packages in this catalog can be requested by users outside of the tenant.
     * @return bool|null
    */
    public function getIsExternallyVisible(): ?bool {
        $val = $this->getBackingStore()->get('isExternallyVisible');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isExternallyVisible'");
    }

    /**
     * Gets the modifiedBy property value. The UPN of the user who last modified this resource. Read-only.
     * @return string|null
    */
    public function getModifiedBy(): ?string {
        $val = $this->getBackingStore()->get('modifiedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modifiedBy'");
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('modifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modifiedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessPackageCustomWorkflowExtensions', $this->getAccessPackageCustomWorkflowExtensions());
        $writer->writeCollectionOfObjectValues('accessPackageResourceRoles', $this->getAccessPackageResourceRoles());
        $writer->writeCollectionOfObjectValues('accessPackageResources', $this->getAccessPackageResources());
        $writer->writeCollectionOfObjectValues('accessPackageResourceScopes', $this->getAccessPackageResourceScopes());
        $writer->writeCollectionOfObjectValues('accessPackages', $this->getAccessPackages());
        $writer->writeStringValue('catalogStatus', $this->getCatalogStatus());
        $writer->writeStringValue('catalogType', $this->getCatalogType());
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('customAccessPackageWorkflowExtensions', $this->getCustomAccessPackageWorkflowExtensions());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isExternallyVisible', $this->getIsExternallyVisible());
        $writer->writeStringValue('modifiedBy', $this->getModifiedBy());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
    }

    /**
     * Sets the accessPackageCustomWorkflowExtensions property value. The attributes of a logic app, which can be called at various stages of an access package request and assignment cycle.
     * @param array<CustomCalloutExtension>|null $value Value to set for the accessPackageCustomWorkflowExtensions property.
    */
    public function setAccessPackageCustomWorkflowExtensions(?array $value): void {
        $this->getBackingStore()->set('accessPackageCustomWorkflowExtensions', $value);
    }

    /**
     * Sets the accessPackageResourceRoles property value. The roles in each resource in a catalog. Read-only.
     * @param array<AccessPackageResourceRole>|null $value Value to set for the accessPackageResourceRoles property.
    */
    public function setAccessPackageResourceRoles(?array $value): void {
        $this->getBackingStore()->set('accessPackageResourceRoles', $value);
    }

    /**
     * Sets the accessPackageResources property value. The accessPackageResources property
     * @param array<AccessPackageResource>|null $value Value to set for the accessPackageResources property.
    */
    public function setAccessPackageResources(?array $value): void {
        $this->getBackingStore()->set('accessPackageResources', $value);
    }

    /**
     * Sets the accessPackageResourceScopes property value. The accessPackageResourceScopes property
     * @param array<AccessPackageResourceScope>|null $value Value to set for the accessPackageResourceScopes property.
    */
    public function setAccessPackageResourceScopes(?array $value): void {
        $this->getBackingStore()->set('accessPackageResourceScopes', $value);
    }

    /**
     * Sets the accessPackages property value. The access packages in this catalog. Read-only. Nullable. Supports $expand.
     * @param array<AccessPackage>|null $value Value to set for the accessPackages property.
    */
    public function setAccessPackages(?array $value): void {
        $this->getBackingStore()->set('accessPackages', $value);
    }

    /**
     * Sets the catalogStatus property value. Has the value Published if the access packages are available for management.
     * @param string|null $value Value to set for the catalogStatus property.
    */
    public function setCatalogStatus(?string $value): void {
        $this->getBackingStore()->set('catalogStatus', $value);
    }

    /**
     * Sets the catalogType property value. One of UserManaged or ServiceDefault.
     * @param string|null $value Value to set for the catalogType property.
    */
    public function setCatalogType(?string $value): void {
        $this->getBackingStore()->set('catalogType', $value);
    }

    /**
     * Sets the createdBy property value. UPN of the user who created this resource. Read-only.
     * @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the customAccessPackageWorkflowExtensions property value. The customAccessPackageWorkflowExtensions property
     * @param array<CustomAccessPackageWorkflowExtension>|null $value Value to set for the customAccessPackageWorkflowExtensions property.
    */
    public function setCustomAccessPackageWorkflowExtensions(?array $value): void {
        $this->getBackingStore()->set('customAccessPackageWorkflowExtensions', $value);
    }

    /**
     * Sets the description property value. The description of the access package catalog.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the access package catalog. Supports $filter (eq, contains).
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isExternallyVisible property value. Whether the access packages in this catalog can be requested by users outside of the tenant.
     * @param bool|null $value Value to set for the isExternallyVisible property.
    */
    public function setIsExternallyVisible(?bool $value): void {
        $this->getBackingStore()->set('isExternallyVisible', $value);
    }

    /**
     * Sets the modifiedBy property value. The UPN of the user who last modified this resource. Read-only.
     * @param string|null $value Value to set for the modifiedBy property.
    */
    public function setModifiedBy(?string $value): void {
        $this->getBackingStore()->set('modifiedBy', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

}
