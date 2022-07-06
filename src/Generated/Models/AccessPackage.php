<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackage extends Entity implements Parsable 
{
    /**
     * @var array<AccessPackageAssignmentPolicy>|null $accessPackageAssignmentPolicies Read-only. Nullable. Supports $expand.
    */
    private ?array $accessPackageAssignmentPolicies = null;
    
    /**
     * @var AccessPackageCatalog|null $accessPackageCatalog The accessPackageCatalog property
    */
    private ?AccessPackageCatalog $accessPackageCatalog = null;
    
    /**
     * @var array<AccessPackageResourceRoleScope>|null $accessPackageResourceRoleScopes The accessPackageResourceRoleScopes property
    */
    private ?array $accessPackageResourceRoleScopes = null;
    
    /**
     * @var array<AccessPackage>|null $accessPackagesIncompatibleWith The access packages that are incompatible with this package. Read-only.
    */
    private ?array $accessPackagesIncompatibleWith = null;
    
    /**
     * @var string|null $catalogId Identifier of the access package catalog referencing this access package. Read-only.
    */
    private ?string $catalogId = null;
    
    /**
     * @var string|null $createdBy The userPrincipalName of the user or identity of the subject who created this resource. Read-only.
    */
    private ?string $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description The description of the access package.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name of the access package. Supports $filter (eq, contains).
    */
    private ?string $displayName = null;
    
    /**
     * @var array<AccessPackage>|null $incompatibleAccessPackages The  access packages whose assigned users are ineligible to be assigned this access package.
    */
    private ?array $incompatibleAccessPackages = null;
    
    /**
     * @var array<Group>|null $incompatibleGroups The groups whose members are ineligible to be assigned this access package.
    */
    private ?array $incompatibleGroups = null;
    
    /**
     * @var bool|null $isHidden Whether the access package is hidden from the requestor.
    */
    private ?bool $isHidden = null;
    
    /**
     * @var bool|null $isRoleScopesVisible Indicates whether role scopes are visible.
    */
    private ?bool $isRoleScopesVisible = null;
    
    /**
     * @var string|null $modifiedBy The userPrincipalName of the user who last modified this resource. Read-only.
    */
    private ?string $modifiedBy = null;
    
    /**
     * @var DateTime|null $modifiedDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    */
    private ?DateTime $modifiedDateTime = null;
    
    /**
     * Instantiates a new accessPackage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackage {
        return new AccessPackage();
    }

    /**
     * Gets the accessPackageAssignmentPolicies property value. Read-only. Nullable. Supports $expand.
     * @return array<AccessPackageAssignmentPolicy>|null
    */
    public function getAccessPackageAssignmentPolicies(): ?array {
        return $this->accessPackageAssignmentPolicies;
    }

    /**
     * Gets the accessPackageCatalog property value. The accessPackageCatalog property
     * @return AccessPackageCatalog|null
    */
    public function getAccessPackageCatalog(): ?AccessPackageCatalog {
        return $this->accessPackageCatalog;
    }

    /**
     * Gets the accessPackageResourceRoleScopes property value. The accessPackageResourceRoleScopes property
     * @return array<AccessPackageResourceRoleScope>|null
    */
    public function getAccessPackageResourceRoleScopes(): ?array {
        return $this->accessPackageResourceRoleScopes;
    }

    /**
     * Gets the accessPackagesIncompatibleWith property value. The access packages that are incompatible with this package. Read-only.
     * @return array<AccessPackage>|null
    */
    public function getAccessPackagesIncompatibleWith(): ?array {
        return $this->accessPackagesIncompatibleWith;
    }

    /**
     * Gets the catalogId property value. Identifier of the access package catalog referencing this access package. Read-only.
     * @return string|null
    */
    public function getCatalogId(): ?string {
        return $this->catalogId;
    }

    /**
     * Gets the createdBy property value. The userPrincipalName of the user or identity of the subject who created this resource. Read-only.
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
     * Gets the description property value. The description of the access package.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the access package. Supports $filter (eq, contains).
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
            'accessPackageAssignmentPolicies' => function (ParseNode $n) use ($o) { $o->setAccessPackageAssignmentPolicies($n->getCollectionOfObjectValues(array(AccessPackageAssignmentPolicy::class, 'createFromDiscriminatorValue'))); },
            'accessPackageCatalog' => function (ParseNode $n) use ($o) { $o->setAccessPackageCatalog($n->getObjectValue(array(AccessPackageCatalog::class, 'createFromDiscriminatorValue'))); },
            'accessPackageResourceRoleScopes' => function (ParseNode $n) use ($o) { $o->setAccessPackageResourceRoleScopes($n->getCollectionOfObjectValues(array(AccessPackageResourceRoleScope::class, 'createFromDiscriminatorValue'))); },
            'accessPackagesIncompatibleWith' => function (ParseNode $n) use ($o) { $o->setAccessPackagesIncompatibleWith($n->getCollectionOfObjectValues(array(AccessPackage::class, 'createFromDiscriminatorValue'))); },
            'catalogId' => function (ParseNode $n) use ($o) { $o->setCatalogId($n->getStringValue()); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'incompatibleAccessPackages' => function (ParseNode $n) use ($o) { $o->setIncompatibleAccessPackages($n->getCollectionOfObjectValues(array(AccessPackage::class, 'createFromDiscriminatorValue'))); },
            'incompatibleGroups' => function (ParseNode $n) use ($o) { $o->setIncompatibleGroups($n->getCollectionOfObjectValues(array(Group::class, 'createFromDiscriminatorValue'))); },
            'isHidden' => function (ParseNode $n) use ($o) { $o->setIsHidden($n->getBooleanValue()); },
            'isRoleScopesVisible' => function (ParseNode $n) use ($o) { $o->setIsRoleScopesVisible($n->getBooleanValue()); },
            'modifiedBy' => function (ParseNode $n) use ($o) { $o->setModifiedBy($n->getStringValue()); },
            'modifiedDateTime' => function (ParseNode $n) use ($o) { $o->setModifiedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the incompatibleAccessPackages property value. The  access packages whose assigned users are ineligible to be assigned this access package.
     * @return array<AccessPackage>|null
    */
    public function getIncompatibleAccessPackages(): ?array {
        return $this->incompatibleAccessPackages;
    }

    /**
     * Gets the incompatibleGroups property value. The groups whose members are ineligible to be assigned this access package.
     * @return array<Group>|null
    */
    public function getIncompatibleGroups(): ?array {
        return $this->incompatibleGroups;
    }

    /**
     * Gets the isHidden property value. Whether the access package is hidden from the requestor.
     * @return bool|null
    */
    public function getIsHidden(): ?bool {
        return $this->isHidden;
    }

    /**
     * Gets the isRoleScopesVisible property value. Indicates whether role scopes are visible.
     * @return bool|null
    */
    public function getIsRoleScopesVisible(): ?bool {
        return $this->isRoleScopesVisible;
    }

    /**
     * Gets the modifiedBy property value. The userPrincipalName of the user who last modified this resource. Read-only.
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
        $writer->writeCollectionOfObjectValues('accessPackageAssignmentPolicies', $this->accessPackageAssignmentPolicies);
        $writer->writeObjectValue('accessPackageCatalog', $this->accessPackageCatalog);
        $writer->writeCollectionOfObjectValues('accessPackageResourceRoleScopes', $this->accessPackageResourceRoleScopes);
        $writer->writeCollectionOfObjectValues('accessPackagesIncompatibleWith', $this->accessPackagesIncompatibleWith);
        $writer->writeStringValue('catalogId', $this->catalogId);
        $writer->writeStringValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('incompatibleAccessPackages', $this->incompatibleAccessPackages);
        $writer->writeCollectionOfObjectValues('incompatibleGroups', $this->incompatibleGroups);
        $writer->writeBooleanValue('isHidden', $this->isHidden);
        $writer->writeBooleanValue('isRoleScopesVisible', $this->isRoleScopesVisible);
        $writer->writeStringValue('modifiedBy', $this->modifiedBy);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
    }

    /**
     * Sets the accessPackageAssignmentPolicies property value. Read-only. Nullable. Supports $expand.
     *  @param array<AccessPackageAssignmentPolicy>|null $value Value to set for the accessPackageAssignmentPolicies property.
    */
    public function setAccessPackageAssignmentPolicies(?array $value ): void {
        $this->accessPackageAssignmentPolicies = $value;
    }

    /**
     * Sets the accessPackageCatalog property value. The accessPackageCatalog property
     *  @param AccessPackageCatalog|null $value Value to set for the accessPackageCatalog property.
    */
    public function setAccessPackageCatalog(?AccessPackageCatalog $value ): void {
        $this->accessPackageCatalog = $value;
    }

    /**
     * Sets the accessPackageResourceRoleScopes property value. The accessPackageResourceRoleScopes property
     *  @param array<AccessPackageResourceRoleScope>|null $value Value to set for the accessPackageResourceRoleScopes property.
    */
    public function setAccessPackageResourceRoleScopes(?array $value ): void {
        $this->accessPackageResourceRoleScopes = $value;
    }

    /**
     * Sets the accessPackagesIncompatibleWith property value. The access packages that are incompatible with this package. Read-only.
     *  @param array<AccessPackage>|null $value Value to set for the accessPackagesIncompatibleWith property.
    */
    public function setAccessPackagesIncompatibleWith(?array $value ): void {
        $this->accessPackagesIncompatibleWith = $value;
    }

    /**
     * Sets the catalogId property value. Identifier of the access package catalog referencing this access package. Read-only.
     *  @param string|null $value Value to set for the catalogId property.
    */
    public function setCatalogId(?string $value ): void {
        $this->catalogId = $value;
    }

    /**
     * Sets the createdBy property value. The userPrincipalName of the user or identity of the subject who created this resource. Read-only.
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
     * Sets the description property value. The description of the access package.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the access package. Supports $filter (eq, contains).
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the incompatibleAccessPackages property value. The  access packages whose assigned users are ineligible to be assigned this access package.
     *  @param array<AccessPackage>|null $value Value to set for the incompatibleAccessPackages property.
    */
    public function setIncompatibleAccessPackages(?array $value ): void {
        $this->incompatibleAccessPackages = $value;
    }

    /**
     * Sets the incompatibleGroups property value. The groups whose members are ineligible to be assigned this access package.
     *  @param array<Group>|null $value Value to set for the incompatibleGroups property.
    */
    public function setIncompatibleGroups(?array $value ): void {
        $this->incompatibleGroups = $value;
    }

    /**
     * Sets the isHidden property value. Whether the access package is hidden from the requestor.
     *  @param bool|null $value Value to set for the isHidden property.
    */
    public function setIsHidden(?bool $value ): void {
        $this->isHidden = $value;
    }

    /**
     * Sets the isRoleScopesVisible property value. Indicates whether role scopes are visible.
     *  @param bool|null $value Value to set for the isRoleScopesVisible property.
    */
    public function setIsRoleScopesVisible(?bool $value ): void {
        $this->isRoleScopesVisible = $value;
    }

    /**
     * Sets the modifiedBy property value. The userPrincipalName of the user who last modified this resource. Read-only.
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
