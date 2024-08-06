<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackage extends Entity implements Parsable 
{
    /**
     * Instantiates a new AccessPackage and sets the default values.
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
        $val = $this->getBackingStore()->get('accessPackageAssignmentPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageAssignmentPolicy::class);
            /** @var array<AccessPackageAssignmentPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageAssignmentPolicies'");
    }

    /**
     * Gets the accessPackageCatalog property value. The accessPackageCatalog property
     * @return AccessPackageCatalog|null
    */
    public function getAccessPackageCatalog(): ?AccessPackageCatalog {
        $val = $this->getBackingStore()->get('accessPackageCatalog');
        if (is_null($val) || $val instanceof AccessPackageCatalog) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageCatalog'");
    }

    /**
     * Gets the accessPackageResourceRoleScopes property value. The accessPackageResourceRoleScopes property
     * @return array<AccessPackageResourceRoleScope>|null
    */
    public function getAccessPackageResourceRoleScopes(): ?array {
        $val = $this->getBackingStore()->get('accessPackageResourceRoleScopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageResourceRoleScope::class);
            /** @var array<AccessPackageResourceRoleScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageResourceRoleScopes'");
    }

    /**
     * Gets the accessPackagesIncompatibleWith property value. The access packages that are incompatible with this package. Read-only.
     * @return array<AccessPackage>|null
    */
    public function getAccessPackagesIncompatibleWith(): ?array {
        $val = $this->getBackingStore()->get('accessPackagesIncompatibleWith');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackage::class);
            /** @var array<AccessPackage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackagesIncompatibleWith'");
    }

    /**
     * Gets the catalogId property value. Identifier of the access package catalog referencing this access package. Read-only.
     * @return string|null
    */
    public function getCatalogId(): ?string {
        $val = $this->getBackingStore()->get('catalogId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogId'");
    }

    /**
     * Gets the createdBy property value. The userPrincipalName of the user or identity of the subject who created this resource. Read-only.
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
     * Gets the description property value. The description of the access package.
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
     * Gets the displayName property value. The display name of the access package. Supports $filter (eq, contains).
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
            'accessPackageAssignmentPolicies' => fn(ParseNode $n) => $o->setAccessPackageAssignmentPolicies($n->getCollectionOfObjectValues([AccessPackageAssignmentPolicy::class, 'createFromDiscriminatorValue'])),
            'accessPackageCatalog' => fn(ParseNode $n) => $o->setAccessPackageCatalog($n->getObjectValue([AccessPackageCatalog::class, 'createFromDiscriminatorValue'])),
            'accessPackageResourceRoleScopes' => fn(ParseNode $n) => $o->setAccessPackageResourceRoleScopes($n->getCollectionOfObjectValues([AccessPackageResourceRoleScope::class, 'createFromDiscriminatorValue'])),
            'accessPackagesIncompatibleWith' => fn(ParseNode $n) => $o->setAccessPackagesIncompatibleWith($n->getCollectionOfObjectValues([AccessPackage::class, 'createFromDiscriminatorValue'])),
            'catalogId' => fn(ParseNode $n) => $o->setCatalogId($n->getStringValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'incompatibleAccessPackages' => fn(ParseNode $n) => $o->setIncompatibleAccessPackages($n->getCollectionOfObjectValues([AccessPackage::class, 'createFromDiscriminatorValue'])),
            'incompatibleGroups' => fn(ParseNode $n) => $o->setIncompatibleGroups($n->getCollectionOfObjectValues([Group::class, 'createFromDiscriminatorValue'])),
            'isHidden' => fn(ParseNode $n) => $o->setIsHidden($n->getBooleanValue()),
            'isRoleScopesVisible' => fn(ParseNode $n) => $o->setIsRoleScopesVisible($n->getBooleanValue()),
            'modifiedBy' => fn(ParseNode $n) => $o->setModifiedBy($n->getStringValue()),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the incompatibleAccessPackages property value. The  access packages whose assigned users are ineligible to be assigned this access package.
     * @return array<AccessPackage>|null
    */
    public function getIncompatibleAccessPackages(): ?array {
        $val = $this->getBackingStore()->get('incompatibleAccessPackages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackage::class);
            /** @var array<AccessPackage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incompatibleAccessPackages'");
    }

    /**
     * Gets the incompatibleGroups property value. The groups whose members are ineligible to be assigned this access package.
     * @return array<Group>|null
    */
    public function getIncompatibleGroups(): ?array {
        $val = $this->getBackingStore()->get('incompatibleGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Group::class);
            /** @var array<Group>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incompatibleGroups'");
    }

    /**
     * Gets the isHidden property value. Indicates whether the access package is hidden from the requestor.
     * @return bool|null
    */
    public function getIsHidden(): ?bool {
        $val = $this->getBackingStore()->get('isHidden');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHidden'");
    }

    /**
     * Gets the isRoleScopesVisible property value. Indicates whether role scopes are visible.
     * @return bool|null
    */
    public function getIsRoleScopesVisible(): ?bool {
        $val = $this->getBackingStore()->get('isRoleScopesVisible');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRoleScopesVisible'");
    }

    /**
     * Gets the modifiedBy property value. The userPrincipalName of the user who last modified this resource. Read-only.
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
        $writer->writeCollectionOfObjectValues('accessPackageAssignmentPolicies', $this->getAccessPackageAssignmentPolicies());
        $writer->writeObjectValue('accessPackageCatalog', $this->getAccessPackageCatalog());
        $writer->writeCollectionOfObjectValues('accessPackageResourceRoleScopes', $this->getAccessPackageResourceRoleScopes());
        $writer->writeCollectionOfObjectValues('accessPackagesIncompatibleWith', $this->getAccessPackagesIncompatibleWith());
        $writer->writeStringValue('catalogId', $this->getCatalogId());
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('incompatibleAccessPackages', $this->getIncompatibleAccessPackages());
        $writer->writeCollectionOfObjectValues('incompatibleGroups', $this->getIncompatibleGroups());
        $writer->writeBooleanValue('isHidden', $this->getIsHidden());
        $writer->writeBooleanValue('isRoleScopesVisible', $this->getIsRoleScopesVisible());
        $writer->writeStringValue('modifiedBy', $this->getModifiedBy());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
    }

    /**
     * Sets the accessPackageAssignmentPolicies property value. Read-only. Nullable. Supports $expand.
     * @param array<AccessPackageAssignmentPolicy>|null $value Value to set for the accessPackageAssignmentPolicies property.
    */
    public function setAccessPackageAssignmentPolicies(?array $value): void {
        $this->getBackingStore()->set('accessPackageAssignmentPolicies', $value);
    }

    /**
     * Sets the accessPackageCatalog property value. The accessPackageCatalog property
     * @param AccessPackageCatalog|null $value Value to set for the accessPackageCatalog property.
    */
    public function setAccessPackageCatalog(?AccessPackageCatalog $value): void {
        $this->getBackingStore()->set('accessPackageCatalog', $value);
    }

    /**
     * Sets the accessPackageResourceRoleScopes property value. The accessPackageResourceRoleScopes property
     * @param array<AccessPackageResourceRoleScope>|null $value Value to set for the accessPackageResourceRoleScopes property.
    */
    public function setAccessPackageResourceRoleScopes(?array $value): void {
        $this->getBackingStore()->set('accessPackageResourceRoleScopes', $value);
    }

    /**
     * Sets the accessPackagesIncompatibleWith property value. The access packages that are incompatible with this package. Read-only.
     * @param array<AccessPackage>|null $value Value to set for the accessPackagesIncompatibleWith property.
    */
    public function setAccessPackagesIncompatibleWith(?array $value): void {
        $this->getBackingStore()->set('accessPackagesIncompatibleWith', $value);
    }

    /**
     * Sets the catalogId property value. Identifier of the access package catalog referencing this access package. Read-only.
     * @param string|null $value Value to set for the catalogId property.
    */
    public function setCatalogId(?string $value): void {
        $this->getBackingStore()->set('catalogId', $value);
    }

    /**
     * Sets the createdBy property value. The userPrincipalName of the user or identity of the subject who created this resource. Read-only.
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
     * Sets the description property value. The description of the access package.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the access package. Supports $filter (eq, contains).
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the incompatibleAccessPackages property value. The  access packages whose assigned users are ineligible to be assigned this access package.
     * @param array<AccessPackage>|null $value Value to set for the incompatibleAccessPackages property.
    */
    public function setIncompatibleAccessPackages(?array $value): void {
        $this->getBackingStore()->set('incompatibleAccessPackages', $value);
    }

    /**
     * Sets the incompatibleGroups property value. The groups whose members are ineligible to be assigned this access package.
     * @param array<Group>|null $value Value to set for the incompatibleGroups property.
    */
    public function setIncompatibleGroups(?array $value): void {
        $this->getBackingStore()->set('incompatibleGroups', $value);
    }

    /**
     * Sets the isHidden property value. Indicates whether the access package is hidden from the requestor.
     * @param bool|null $value Value to set for the isHidden property.
    */
    public function setIsHidden(?bool $value): void {
        $this->getBackingStore()->set('isHidden', $value);
    }

    /**
     * Sets the isRoleScopesVisible property value. Indicates whether role scopes are visible.
     * @param bool|null $value Value to set for the isRoleScopesVisible property.
    */
    public function setIsRoleScopesVisible(?bool $value): void {
        $this->getBackingStore()->set('isRoleScopesVisible', $value);
    }

    /**
     * Sets the modifiedBy property value. The userPrincipalName of the user who last modified this resource. Read-only.
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
