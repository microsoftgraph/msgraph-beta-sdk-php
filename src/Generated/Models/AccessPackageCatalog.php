<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageCatalog extends Entity implements Parsable 
{
    /**
     * Instantiates a new accessPackageCatalog and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageCatalog');
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
     * Gets the accessPackageResourceRoles property value. The roles in each resource in a catalog. Read-only.
     * @return array<AccessPackageResourceRole>|null
    */
    public function getAccessPackageResourceRoles(): ?array {
        return $this->getBackingStore()->get('accessPackageResourceRoles');
    }

    /**
     * Gets the accessPackageResources property value. The accessPackageResources property
     * @return array<AccessPackageResource>|null
    */
    public function getAccessPackageResources(): ?array {
        return $this->getBackingStore()->get('accessPackageResources');
    }

    /**
     * Gets the accessPackageResourceScopes property value. The accessPackageResourceScopes property
     * @return array<AccessPackageResourceScope>|null
    */
    public function getAccessPackageResourceScopes(): ?array {
        return $this->getBackingStore()->get('accessPackageResourceScopes');
    }

    /**
     * Gets the accessPackages property value. The access packages in this catalog. Read-only. Nullable. Supports $expand.
     * @return array<AccessPackage>|null
    */
    public function getAccessPackages(): ?array {
        return $this->getBackingStore()->get('accessPackages');
    }

    /**
     * Gets the catalogStatus property value. Has the value Published if the access packages are available for management.
     * @return string|null
    */
    public function getCatalogStatus(): ?string {
        return $this->getBackingStore()->get('catalogStatus');
    }

    /**
     * Gets the catalogType property value. One of UserManaged or ServiceDefault.
     * @return string|null
    */
    public function getCatalogType(): ?string {
        return $this->getBackingStore()->get('catalogType');
    }

    /**
     * Gets the createdBy property value. UPN of the user who created this resource. Read-only.
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the customAccessPackageWorkflowExtensions property value. The customAccessPackageWorkflowExtensions property
     * @return array<CustomAccessPackageWorkflowExtension>|null
    */
    public function getCustomAccessPackageWorkflowExtensions(): ?array {
        return $this->getBackingStore()->get('customAccessPackageWorkflowExtensions');
    }

    /**
     * Gets the description property value. The description of the access package catalog.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The display name of the access package catalog. Supports $filter (eq, contains).
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
        return $this->getBackingStore()->get('isExternallyVisible');
    }

    /**
     * Gets the modifiedBy property value. The UPN of the user who last modified this resource. Read-only.
     * @return string|null
    */
    public function getModifiedBy(): ?string {
        return $this->getBackingStore()->get('modifiedBy');
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('modifiedDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
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
     * Sets the accessPackageResourceRoles property value. The roles in each resource in a catalog. Read-only.
     *  @param array<AccessPackageResourceRole>|null $value Value to set for the accessPackageResourceRoles property.
    */
    public function setAccessPackageResourceRoles(?array $value): void {
        $this->getBackingStore()->set('accessPackageResourceRoles', $value);
    }

    /**
     * Sets the accessPackageResources property value. The accessPackageResources property
     *  @param array<AccessPackageResource>|null $value Value to set for the accessPackageResources property.
    */
    public function setAccessPackageResources(?array $value): void {
        $this->getBackingStore()->set('accessPackageResources', $value);
    }

    /**
     * Sets the accessPackageResourceScopes property value. The accessPackageResourceScopes property
     *  @param array<AccessPackageResourceScope>|null $value Value to set for the accessPackageResourceScopes property.
    */
    public function setAccessPackageResourceScopes(?array $value): void {
        $this->getBackingStore()->set('accessPackageResourceScopes', $value);
    }

    /**
     * Sets the accessPackages property value. The access packages in this catalog. Read-only. Nullable. Supports $expand.
     *  @param array<AccessPackage>|null $value Value to set for the accessPackages property.
    */
    public function setAccessPackages(?array $value): void {
        $this->getBackingStore()->set('accessPackages', $value);
    }

    /**
     * Sets the catalogStatus property value. Has the value Published if the access packages are available for management.
     *  @param string|null $value Value to set for the catalogStatus property.
    */
    public function setCatalogStatus(?string $value): void {
        $this->getBackingStore()->set('catalogStatus', $value);
    }

    /**
     * Sets the catalogType property value. One of UserManaged or ServiceDefault.
     *  @param string|null $value Value to set for the catalogType property.
    */
    public function setCatalogType(?string $value): void {
        $this->getBackingStore()->set('catalogType', $value);
    }

    /**
     * Sets the createdBy property value. UPN of the user who created this resource. Read-only.
     *  @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the customAccessPackageWorkflowExtensions property value. The customAccessPackageWorkflowExtensions property
     *  @param array<CustomAccessPackageWorkflowExtension>|null $value Value to set for the customAccessPackageWorkflowExtensions property.
    */
    public function setCustomAccessPackageWorkflowExtensions(?array $value): void {
        $this->getBackingStore()->set('customAccessPackageWorkflowExtensions', $value);
    }

    /**
     * Sets the description property value. The description of the access package catalog.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the access package catalog. Supports $filter (eq, contains).
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isExternallyVisible property value. Whether the access packages in this catalog can be requested by users outside of the tenant.
     *  @param bool|null $value Value to set for the isExternallyVisible property.
    */
    public function setIsExternallyVisible(?bool $value): void {
        $this->getBackingStore()->set('isExternallyVisible', $value);
    }

    /**
     * Sets the modifiedBy property value. The UPN of the user who last modified this resource. Read-only.
     *  @param string|null $value Value to set for the modifiedBy property.
    */
    public function setModifiedBy(?string $value): void {
        $this->getBackingStore()->set('modifiedBy', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

}
