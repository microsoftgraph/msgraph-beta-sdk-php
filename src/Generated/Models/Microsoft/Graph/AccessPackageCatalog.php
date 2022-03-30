<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageCatalog extends Entity 
{
    /** @var array<AccessPackageResourceRole>|null $accessPackageResourceRoles The roles in each resource in a catalog. Read-only. */
    private ?array $accessPackageResourceRoles = null;
    
    /** @var array<AccessPackageResource>|null $accessPackageResources Read-only. Nullable. */
    private ?array $accessPackageResources = null;
    
    /** @var array<AccessPackageResourceScope>|null $accessPackageResourceScopes Read-only. */
    private ?array $accessPackageResourceScopes = null;
    
    /** @var array<AccessPackage>|null $accessPackages The access packages in this catalog. Read-only. Nullable. */
    private ?array $accessPackages = null;
    
    /** @var string|null $catalogStatus Has the value Published if the access packages are available for management. */
    private ?string $catalogStatus = null;
    
    /** @var string|null $catalogType Whether the catalog is created by a user or entitlement management. The possible values are: userManaged, serviceDefault, serviceManaged, unknownFutureValue. */
    private ?string $catalogType = null;
    
    /** @var string|null $createdBy UPN of the user who created this resource. Read-only. */
    private ?string $createdBy = null;
    
    /** @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    private ?DateTime $createdDateTime = null;
    
    /** @var array<CustomAccessPackageWorkflowExtension>|null $customAccessPackageWorkflowExtensions  */
    private ?array $customAccessPackageWorkflowExtensions = null;
    
    /** @var string|null $description The description of the access package catalog. */
    private ?string $description = null;
    
    /** @var string|null $displayName The display name of the access package catalog. */
    private ?string $displayName = null;
    
    /** @var bool|null $isExternallyVisible Whether the access packages in this catalog can be requested by users outside of the tenant. */
    private ?bool $isExternallyVisible = null;
    
    /** @var string|null $modifiedBy The UPN of the user who last modified this resource. Read-only. */
    private ?string $modifiedBy = null;
    
    /** @var DateTime|null $modifiedDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    private ?DateTime $modifiedDateTime = null;
    
    /**
     * Instantiates a new accessPackageCatalog and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageCatalog
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageCatalog {
        return new AccessPackageCatalog();
    }

    /**
     * Gets the accessPackageResourceRoles property value. The roles in each resource in a catalog. Read-only.
     * @return array<AccessPackageResourceRole>|null
    */
    public function getAccessPackageResourceRoles(): ?array {
        return $this->accessPackageResourceRoles;
    }

    /**
     * Gets the accessPackageResources property value. Read-only. Nullable.
     * @return array<AccessPackageResource>|null
    */
    public function getAccessPackageResources(): ?array {
        return $this->accessPackageResources;
    }

    /**
     * Gets the accessPackageResourceScopes property value. Read-only.
     * @return array<AccessPackageResourceScope>|null
    */
    public function getAccessPackageResourceScopes(): ?array {
        return $this->accessPackageResourceScopes;
    }

    /**
     * Gets the accessPackages property value. The access packages in this catalog. Read-only. Nullable.
     * @return array<AccessPackage>|null
    */
    public function getAccessPackages(): ?array {
        return $this->accessPackages;
    }

    /**
     * Gets the catalogStatus property value. Has the value Published if the access packages are available for management.
     * @return string|null
    */
    public function getCatalogStatus(): ?string {
        return $this->catalogStatus;
    }

    /**
     * Gets the catalogType property value. Whether the catalog is created by a user or entitlement management. The possible values are: userManaged, serviceDefault, serviceManaged, unknownFutureValue.
     * @return string|null
    */
    public function getCatalogType(): ?string {
        return $this->catalogType;
    }

    /**
     * Gets the createdBy property value. UPN of the user who created this resource. Read-only.
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the customAccessPackageWorkflowExtensions property value. 
     * @return array<CustomAccessPackageWorkflowExtension>|null
    */
    public function getCustomAccessPackageWorkflowExtensions(): ?array {
        return $this->customAccessPackageWorkflowExtensions;
    }

    /**
     * Gets the description property value. The description of the access package catalog.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the access package catalog.
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
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageResourceRoles' => function (self $o, ParseNode $n) { $o->setAccessPackageResourceRoles($n->getCollectionOfObjectValues(AccessPackageResourceRole::class)); },
            'accessPackageResources' => function (self $o, ParseNode $n) { $o->setAccessPackageResources($n->getCollectionOfObjectValues(AccessPackageResource::class)); },
            'accessPackageResourceScopes' => function (self $o, ParseNode $n) { $o->setAccessPackageResourceScopes($n->getCollectionOfObjectValues(AccessPackageResourceScope::class)); },
            'accessPackages' => function (self $o, ParseNode $n) { $o->setAccessPackages($n->getCollectionOfObjectValues(AccessPackage::class)); },
            'catalogStatus' => function (self $o, ParseNode $n) { $o->setCatalogStatus($n->getStringValue()); },
            'catalogType' => function (self $o, ParseNode $n) { $o->setCatalogType($n->getStringValue()); },
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getStringValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'customAccessPackageWorkflowExtensions' => function (self $o, ParseNode $n) { $o->setCustomAccessPackageWorkflowExtensions($n->getCollectionOfObjectValues(CustomAccessPackageWorkflowExtension::class)); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'isExternallyVisible' => function (self $o, ParseNode $n) { $o->setIsExternallyVisible($n->getBooleanValue()); },
            'modifiedBy' => function (self $o, ParseNode $n) { $o->setModifiedBy($n->getStringValue()); },
            'modifiedDateTime' => function (self $o, ParseNode $n) { $o->setModifiedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the isExternallyVisible property value. Whether the access packages in this catalog can be requested by users outside of the tenant.
     * @return bool|null
    */
    public function getIsExternallyVisible(): ?bool {
        return $this->isExternallyVisible;
    }

    /**
     * Gets the modifiedBy property value. The UPN of the user who last modified this resource. Read-only.
     * @return string|null
    */
    public function getModifiedBy(): ?string {
        return $this->modifiedBy;
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessPackageResourceRoles', $this->accessPackageResourceRoles);
        $writer->writeCollectionOfObjectValues('accessPackageResources', $this->accessPackageResources);
        $writer->writeCollectionOfObjectValues('accessPackageResourceScopes', $this->accessPackageResourceScopes);
        $writer->writeCollectionOfObjectValues('accessPackages', $this->accessPackages);
        $writer->writeStringValue('catalogStatus', $this->catalogStatus);
        $writer->writeStringValue('catalogType', $this->catalogType);
        $writer->writeStringValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeCollectionOfObjectValues('customAccessPackageWorkflowExtensions', $this->customAccessPackageWorkflowExtensions);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isExternallyVisible', $this->isExternallyVisible);
        $writer->writeStringValue('modifiedBy', $this->modifiedBy);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
    }

    /**
     * Sets the accessPackageResourceRoles property value. The roles in each resource in a catalog. Read-only.
     *  @param array<AccessPackageResourceRole>|null $value Value to set for the accessPackageResourceRoles property.
    */
    public function setAccessPackageResourceRoles(?array $value ): void {
        $this->accessPackageResourceRoles = $value;
    }

    /**
     * Sets the accessPackageResources property value. Read-only. Nullable.
     *  @param array<AccessPackageResource>|null $value Value to set for the accessPackageResources property.
    */
    public function setAccessPackageResources(?array $value ): void {
        $this->accessPackageResources = $value;
    }

    /**
     * Sets the accessPackageResourceScopes property value. Read-only.
     *  @param array<AccessPackageResourceScope>|null $value Value to set for the accessPackageResourceScopes property.
    */
    public function setAccessPackageResourceScopes(?array $value ): void {
        $this->accessPackageResourceScopes = $value;
    }

    /**
     * Sets the accessPackages property value. The access packages in this catalog. Read-only. Nullable.
     *  @param array<AccessPackage>|null $value Value to set for the accessPackages property.
    */
    public function setAccessPackages(?array $value ): void {
        $this->accessPackages = $value;
    }

    /**
     * Sets the catalogStatus property value. Has the value Published if the access packages are available for management.
     *  @param string|null $value Value to set for the catalogStatus property.
    */
    public function setCatalogStatus(?string $value ): void {
        $this->catalogStatus = $value;
    }

    /**
     * Sets the catalogType property value. Whether the catalog is created by a user or entitlement management. The possible values are: userManaged, serviceDefault, serviceManaged, unknownFutureValue.
     *  @param string|null $value Value to set for the catalogType property.
    */
    public function setCatalogType(?string $value ): void {
        $this->catalogType = $value;
    }

    /**
     * Sets the createdBy property value. UPN of the user who created this resource. Read-only.
     *  @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the customAccessPackageWorkflowExtensions property value. 
     *  @param array<CustomAccessPackageWorkflowExtension>|null $value Value to set for the customAccessPackageWorkflowExtensions property.
    */
    public function setCustomAccessPackageWorkflowExtensions(?array $value ): void {
        $this->customAccessPackageWorkflowExtensions = $value;
    }

    /**
     * Sets the description property value. The description of the access package catalog.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the access package catalog.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isExternallyVisible property value. Whether the access packages in this catalog can be requested by users outside of the tenant.
     *  @param bool|null $value Value to set for the isExternallyVisible property.
    */
    public function setIsExternallyVisible(?bool $value ): void {
        $this->isExternallyVisible = $value;
    }

    /**
     * Sets the modifiedBy property value. The UPN of the user who last modified this resource. Read-only.
     *  @param string|null $value Value to set for the modifiedBy property.
    */
    public function setModifiedBy(?string $value ): void {
        $this->modifiedBy = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

}
