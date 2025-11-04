<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EntitlementManagement extends Entity implements Parsable 
{
    /**
     * Instantiates a new EntitlementManagement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EntitlementManagement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EntitlementManagement {
        return new EntitlementManagement();
    }

    /**
     * Gets the accessPackageAssignmentApprovals property value. The accessPackageAssignmentApprovals property
     * @return array<Approval>|null
    */
    public function getAccessPackageAssignmentApprovals(): ?array {
        $val = $this->getBackingStore()->get('accessPackageAssignmentApprovals');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Approval::class);
            /** @var array<Approval>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageAssignmentApprovals'");
    }

    /**
     * Gets the accessPackageAssignmentPolicies property value. Represents the policy that governs which subjects can request or be assigned an access package via an access package assignment.
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
     * Gets the accessPackageAssignmentRequests property value. Represents access package assignment requests created by or on behalf of a user. DO NOT USE. TO BE RETIRED SOON. Use the assignmentRequests relationship instead.
     * @return array<AccessPackageAssignmentRequest>|null
    */
    public function getAccessPackageAssignmentRequests(): ?array {
        $val = $this->getBackingStore()->get('accessPackageAssignmentRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageAssignmentRequest::class);
            /** @var array<AccessPackageAssignmentRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageAssignmentRequests'");
    }

    /**
     * Gets the accessPackageAssignmentResourceRoles property value. Represents the resource-specific role which a subject has been assigned through an access package assignment.
     * @return array<AccessPackageAssignmentResourceRole>|null
    */
    public function getAccessPackageAssignmentResourceRoles(): ?array {
        $val = $this->getBackingStore()->get('accessPackageAssignmentResourceRoles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageAssignmentResourceRole::class);
            /** @var array<AccessPackageAssignmentResourceRole>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageAssignmentResourceRoles'");
    }

    /**
     * Gets the accessPackageAssignments property value. The assignment of an access package to a subject for a period of time.
     * @return array<AccessPackageAssignment>|null
    */
    public function getAccessPackageAssignments(): ?array {
        $val = $this->getBackingStore()->get('accessPackageAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageAssignment::class);
            /** @var array<AccessPackageAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageAssignments'");
    }

    /**
     * Gets the accessPackageCatalogs property value. A container of access packages.
     * @return array<AccessPackageCatalog>|null
    */
    public function getAccessPackageCatalogs(): ?array {
        $val = $this->getBackingStore()->get('accessPackageCatalogs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageCatalog::class);
            /** @var array<AccessPackageCatalog>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageCatalogs'");
    }

    /**
     * Gets the accessPackageResourceEnvironments property value. A reference to the geolocation environment in which a resource is located.
     * @return array<AccessPackageResourceEnvironment>|null
    */
    public function getAccessPackageResourceEnvironments(): ?array {
        $val = $this->getBackingStore()->get('accessPackageResourceEnvironments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageResourceEnvironment::class);
            /** @var array<AccessPackageResourceEnvironment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageResourceEnvironments'");
    }

    /**
     * Gets the accessPackageResourceRequests property value. Represents a request to add or remove a resource to or from a catalog respectively.
     * @return array<AccessPackageResourceRequest>|null
    */
    public function getAccessPackageResourceRequests(): ?array {
        $val = $this->getBackingStore()->get('accessPackageResourceRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageResourceRequest::class);
            /** @var array<AccessPackageResourceRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageResourceRequests'");
    }

    /**
     * Gets the accessPackageResourceRoleScopes property value. A reference to both a scope within a resource, and a role in that resource for that scope.
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
     * Gets the accessPackageResources property value. A reference to a resource associated with an access package catalog.
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
     * Gets the accessPackages property value. Represents access package objects.
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
     * Gets the assignmentRequests property value. Represents access package assignment requests created by or on behalf of a user.
     * @return array<AccessPackageAssignmentRequest>|null
    */
    public function getAssignmentRequests(): ?array {
        $val = $this->getBackingStore()->get('assignmentRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageAssignmentRequest::class);
            /** @var array<AccessPackageAssignmentRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentRequests'");
    }

    /**
     * Gets the connectedOrganizations property value. Represents references to a directory or domain of another organization whose users can request access.
     * @return array<ConnectedOrganization>|null
    */
    public function getConnectedOrganizations(): ?array {
        $val = $this->getBackingStore()->get('connectedOrganizations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConnectedOrganization::class);
            /** @var array<ConnectedOrganization>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectedOrganizations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageAssignmentApprovals' => fn(ParseNode $n) => $o->setAccessPackageAssignmentApprovals($n->getCollectionOfObjectValues([Approval::class, 'createFromDiscriminatorValue'])),
            'accessPackageAssignmentPolicies' => fn(ParseNode $n) => $o->setAccessPackageAssignmentPolicies($n->getCollectionOfObjectValues([AccessPackageAssignmentPolicy::class, 'createFromDiscriminatorValue'])),
            'accessPackageAssignmentRequests' => fn(ParseNode $n) => $o->setAccessPackageAssignmentRequests($n->getCollectionOfObjectValues([AccessPackageAssignmentRequest::class, 'createFromDiscriminatorValue'])),
            'accessPackageAssignmentResourceRoles' => fn(ParseNode $n) => $o->setAccessPackageAssignmentResourceRoles($n->getCollectionOfObjectValues([AccessPackageAssignmentResourceRole::class, 'createFromDiscriminatorValue'])),
            'accessPackageAssignments' => fn(ParseNode $n) => $o->setAccessPackageAssignments($n->getCollectionOfObjectValues([AccessPackageAssignment::class, 'createFromDiscriminatorValue'])),
            'accessPackageCatalogs' => fn(ParseNode $n) => $o->setAccessPackageCatalogs($n->getCollectionOfObjectValues([AccessPackageCatalog::class, 'createFromDiscriminatorValue'])),
            'accessPackageResourceEnvironments' => fn(ParseNode $n) => $o->setAccessPackageResourceEnvironments($n->getCollectionOfObjectValues([AccessPackageResourceEnvironment::class, 'createFromDiscriminatorValue'])),
            'accessPackageResourceRequests' => fn(ParseNode $n) => $o->setAccessPackageResourceRequests($n->getCollectionOfObjectValues([AccessPackageResourceRequest::class, 'createFromDiscriminatorValue'])),
            'accessPackageResourceRoleScopes' => fn(ParseNode $n) => $o->setAccessPackageResourceRoleScopes($n->getCollectionOfObjectValues([AccessPackageResourceRoleScope::class, 'createFromDiscriminatorValue'])),
            'accessPackageResources' => fn(ParseNode $n) => $o->setAccessPackageResources($n->getCollectionOfObjectValues([AccessPackageResource::class, 'createFromDiscriminatorValue'])),
            'accessPackages' => fn(ParseNode $n) => $o->setAccessPackages($n->getCollectionOfObjectValues([AccessPackage::class, 'createFromDiscriminatorValue'])),
            'assignmentRequests' => fn(ParseNode $n) => $o->setAssignmentRequests($n->getCollectionOfObjectValues([AccessPackageAssignmentRequest::class, 'createFromDiscriminatorValue'])),
            'connectedOrganizations' => fn(ParseNode $n) => $o->setConnectedOrganizations($n->getCollectionOfObjectValues([ConnectedOrganization::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([EntitlementManagementSettings::class, 'createFromDiscriminatorValue'])),
            'subjects' => fn(ParseNode $n) => $o->setSubjects($n->getCollectionOfObjectValues([AccessPackageSubject::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the settings property value. Represents the settings that control the behavior of Microsoft Entra entitlement management.
     * @return EntitlementManagementSettings|null
    */
    public function getSettings(): ?EntitlementManagementSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof EntitlementManagementSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the subjects property value. Represents the subjects within entitlement management.
     * @return array<AccessPackageSubject>|null
    */
    public function getSubjects(): ?array {
        $val = $this->getBackingStore()->get('subjects');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageSubject::class);
            /** @var array<AccessPackageSubject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjects'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessPackageAssignmentApprovals', $this->getAccessPackageAssignmentApprovals());
        $writer->writeCollectionOfObjectValues('accessPackageAssignmentPolicies', $this->getAccessPackageAssignmentPolicies());
        $writer->writeCollectionOfObjectValues('accessPackageAssignmentRequests', $this->getAccessPackageAssignmentRequests());
        $writer->writeCollectionOfObjectValues('accessPackageAssignmentResourceRoles', $this->getAccessPackageAssignmentResourceRoles());
        $writer->writeCollectionOfObjectValues('accessPackageAssignments', $this->getAccessPackageAssignments());
        $writer->writeCollectionOfObjectValues('accessPackageCatalogs', $this->getAccessPackageCatalogs());
        $writer->writeCollectionOfObjectValues('accessPackageResourceEnvironments', $this->getAccessPackageResourceEnvironments());
        $writer->writeCollectionOfObjectValues('accessPackageResourceRequests', $this->getAccessPackageResourceRequests());
        $writer->writeCollectionOfObjectValues('accessPackageResourceRoleScopes', $this->getAccessPackageResourceRoleScopes());
        $writer->writeCollectionOfObjectValues('accessPackageResources', $this->getAccessPackageResources());
        $writer->writeCollectionOfObjectValues('accessPackages', $this->getAccessPackages());
        $writer->writeCollectionOfObjectValues('assignmentRequests', $this->getAssignmentRequests());
        $writer->writeCollectionOfObjectValues('connectedOrganizations', $this->getConnectedOrganizations());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeCollectionOfObjectValues('subjects', $this->getSubjects());
    }

    /**
     * Sets the accessPackageAssignmentApprovals property value. The accessPackageAssignmentApprovals property
     * @param array<Approval>|null $value Value to set for the accessPackageAssignmentApprovals property.
    */
    public function setAccessPackageAssignmentApprovals(?array $value): void {
        $this->getBackingStore()->set('accessPackageAssignmentApprovals', $value);
    }

    /**
     * Sets the accessPackageAssignmentPolicies property value. Represents the policy that governs which subjects can request or be assigned an access package via an access package assignment.
     * @param array<AccessPackageAssignmentPolicy>|null $value Value to set for the accessPackageAssignmentPolicies property.
    */
    public function setAccessPackageAssignmentPolicies(?array $value): void {
        $this->getBackingStore()->set('accessPackageAssignmentPolicies', $value);
    }

    /**
     * Sets the accessPackageAssignmentRequests property value. Represents access package assignment requests created by or on behalf of a user. DO NOT USE. TO BE RETIRED SOON. Use the assignmentRequests relationship instead.
     * @param array<AccessPackageAssignmentRequest>|null $value Value to set for the accessPackageAssignmentRequests property.
    */
    public function setAccessPackageAssignmentRequests(?array $value): void {
        $this->getBackingStore()->set('accessPackageAssignmentRequests', $value);
    }

    /**
     * Sets the accessPackageAssignmentResourceRoles property value. Represents the resource-specific role which a subject has been assigned through an access package assignment.
     * @param array<AccessPackageAssignmentResourceRole>|null $value Value to set for the accessPackageAssignmentResourceRoles property.
    */
    public function setAccessPackageAssignmentResourceRoles(?array $value): void {
        $this->getBackingStore()->set('accessPackageAssignmentResourceRoles', $value);
    }

    /**
     * Sets the accessPackageAssignments property value. The assignment of an access package to a subject for a period of time.
     * @param array<AccessPackageAssignment>|null $value Value to set for the accessPackageAssignments property.
    */
    public function setAccessPackageAssignments(?array $value): void {
        $this->getBackingStore()->set('accessPackageAssignments', $value);
    }

    /**
     * Sets the accessPackageCatalogs property value. A container of access packages.
     * @param array<AccessPackageCatalog>|null $value Value to set for the accessPackageCatalogs property.
    */
    public function setAccessPackageCatalogs(?array $value): void {
        $this->getBackingStore()->set('accessPackageCatalogs', $value);
    }

    /**
     * Sets the accessPackageResourceEnvironments property value. A reference to the geolocation environment in which a resource is located.
     * @param array<AccessPackageResourceEnvironment>|null $value Value to set for the accessPackageResourceEnvironments property.
    */
    public function setAccessPackageResourceEnvironments(?array $value): void {
        $this->getBackingStore()->set('accessPackageResourceEnvironments', $value);
    }

    /**
     * Sets the accessPackageResourceRequests property value. Represents a request to add or remove a resource to or from a catalog respectively.
     * @param array<AccessPackageResourceRequest>|null $value Value to set for the accessPackageResourceRequests property.
    */
    public function setAccessPackageResourceRequests(?array $value): void {
        $this->getBackingStore()->set('accessPackageResourceRequests', $value);
    }

    /**
     * Sets the accessPackageResourceRoleScopes property value. A reference to both a scope within a resource, and a role in that resource for that scope.
     * @param array<AccessPackageResourceRoleScope>|null $value Value to set for the accessPackageResourceRoleScopes property.
    */
    public function setAccessPackageResourceRoleScopes(?array $value): void {
        $this->getBackingStore()->set('accessPackageResourceRoleScopes', $value);
    }

    /**
     * Sets the accessPackageResources property value. A reference to a resource associated with an access package catalog.
     * @param array<AccessPackageResource>|null $value Value to set for the accessPackageResources property.
    */
    public function setAccessPackageResources(?array $value): void {
        $this->getBackingStore()->set('accessPackageResources', $value);
    }

    /**
     * Sets the accessPackages property value. Represents access package objects.
     * @param array<AccessPackage>|null $value Value to set for the accessPackages property.
    */
    public function setAccessPackages(?array $value): void {
        $this->getBackingStore()->set('accessPackages', $value);
    }

    /**
     * Sets the assignmentRequests property value. Represents access package assignment requests created by or on behalf of a user.
     * @param array<AccessPackageAssignmentRequest>|null $value Value to set for the assignmentRequests property.
    */
    public function setAssignmentRequests(?array $value): void {
        $this->getBackingStore()->set('assignmentRequests', $value);
    }

    /**
     * Sets the connectedOrganizations property value. Represents references to a directory or domain of another organization whose users can request access.
     * @param array<ConnectedOrganization>|null $value Value to set for the connectedOrganizations property.
    */
    public function setConnectedOrganizations(?array $value): void {
        $this->getBackingStore()->set('connectedOrganizations', $value);
    }

    /**
     * Sets the settings property value. Represents the settings that control the behavior of Microsoft Entra entitlement management.
     * @param EntitlementManagementSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?EntitlementManagementSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the subjects property value. Represents the subjects within entitlement management.
     * @param array<AccessPackageSubject>|null $value Value to set for the subjects property.
    */
    public function setSubjects(?array $value): void {
        $this->getBackingStore()->set('subjects', $value);
    }

}
