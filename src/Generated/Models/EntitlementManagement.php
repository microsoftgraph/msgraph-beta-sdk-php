<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EntitlementManagement extends Entity implements Parsable 
{
    /**
     * @var array<Approval>|null $accessPackageAssignmentApprovals Approval stages for decisions associated with access package assignment requests.
    */
    private ?array $accessPackageAssignmentApprovals = null;
    
    /**
     * @var array<AccessPackageAssignmentPolicy>|null $accessPackageAssignmentPolicies Represents the policy that governs which subjects can request or be assigned an access package via an access package assignment.
    */
    private ?array $accessPackageAssignmentPolicies = null;
    
    /**
     * @var array<AccessPackageAssignmentRequest>|null $accessPackageAssignmentRequests Represents access package assignment requests created by or on behalf of a user.
    */
    private ?array $accessPackageAssignmentRequests = null;
    
    /**
     * @var array<AccessPackageAssignmentResourceRole>|null $accessPackageAssignmentResourceRoles Represents the resource-specific role which a subject has been assigned through an access package assignment.
    */
    private ?array $accessPackageAssignmentResourceRoles = null;
    
    /**
     * @var array<AccessPackageAssignment>|null $accessPackageAssignments The assignment of an access package to a subject for a period of time.
    */
    private ?array $accessPackageAssignments = null;
    
    /**
     * @var array<AccessPackageCatalog>|null $accessPackageCatalogs A container of access packages.
    */
    private ?array $accessPackageCatalogs = null;
    
    /**
     * @var array<AccessPackageResourceEnvironment>|null $accessPackageResourceEnvironments A reference to the geolocation environment in which a resource is located.
    */
    private ?array $accessPackageResourceEnvironments = null;
    
    /**
     * @var array<AccessPackageResourceRequest>|null $accessPackageResourceRequests Represents a request to add or remove a resource to or from a catalog respectively.
    */
    private ?array $accessPackageResourceRequests = null;
    
    /**
     * @var array<AccessPackageResourceRoleScope>|null $accessPackageResourceRoleScopes A reference to both a scope within a resource, and a role in that resource for that scope.
    */
    private ?array $accessPackageResourceRoleScopes = null;
    
    /**
     * @var array<AccessPackageResource>|null $accessPackageResources A reference to a resource associated with an access package catalog.
    */
    private ?array $accessPackageResources = null;
    
    /**
     * @var array<AccessPackage>|null $accessPackages Represents access package objects.
    */
    private ?array $accessPackages = null;
    
    /**
     * @var array<ConnectedOrganization>|null $connectedOrganizations Represents references to a directory or domain of another organization whose users can request access.
    */
    private ?array $connectedOrganizations = null;
    
    /**
     * @var EntitlementManagementSettings|null $settings Represents the settings that control the behavior of Azure AD entitlement management.
    */
    private ?EntitlementManagementSettings $settings = null;
    
    /**
     * @var array<AccessPackageSubject>|null $subjects The subjects property
    */
    private ?array $subjects = null;
    
    /**
     * Instantiates a new EntitlementManagement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.entitlementManagement');
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
     * Gets the accessPackageAssignmentApprovals property value. Approval stages for decisions associated with access package assignment requests.
     * @return array<Approval>|null
    */
    public function getAccessPackageAssignmentApprovals(): ?array {
        return $this->accessPackageAssignmentApprovals;
    }

    /**
     * Gets the accessPackageAssignmentPolicies property value. Represents the policy that governs which subjects can request or be assigned an access package via an access package assignment.
     * @return array<AccessPackageAssignmentPolicy>|null
    */
    public function getAccessPackageAssignmentPolicies(): ?array {
        return $this->accessPackageAssignmentPolicies;
    }

    /**
     * Gets the accessPackageAssignmentRequests property value. Represents access package assignment requests created by or on behalf of a user.
     * @return array<AccessPackageAssignmentRequest>|null
    */
    public function getAccessPackageAssignmentRequests(): ?array {
        return $this->accessPackageAssignmentRequests;
    }

    /**
     * Gets the accessPackageAssignmentResourceRoles property value. Represents the resource-specific role which a subject has been assigned through an access package assignment.
     * @return array<AccessPackageAssignmentResourceRole>|null
    */
    public function getAccessPackageAssignmentResourceRoles(): ?array {
        return $this->accessPackageAssignmentResourceRoles;
    }

    /**
     * Gets the accessPackageAssignments property value. The assignment of an access package to a subject for a period of time.
     * @return array<AccessPackageAssignment>|null
    */
    public function getAccessPackageAssignments(): ?array {
        return $this->accessPackageAssignments;
    }

    /**
     * Gets the accessPackageCatalogs property value. A container of access packages.
     * @return array<AccessPackageCatalog>|null
    */
    public function getAccessPackageCatalogs(): ?array {
        return $this->accessPackageCatalogs;
    }

    /**
     * Gets the accessPackageResourceEnvironments property value. A reference to the geolocation environment in which a resource is located.
     * @return array<AccessPackageResourceEnvironment>|null
    */
    public function getAccessPackageResourceEnvironments(): ?array {
        return $this->accessPackageResourceEnvironments;
    }

    /**
     * Gets the accessPackageResourceRequests property value. Represents a request to add or remove a resource to or from a catalog respectively.
     * @return array<AccessPackageResourceRequest>|null
    */
    public function getAccessPackageResourceRequests(): ?array {
        return $this->accessPackageResourceRequests;
    }

    /**
     * Gets the accessPackageResourceRoleScopes property value. A reference to both a scope within a resource, and a role in that resource for that scope.
     * @return array<AccessPackageResourceRoleScope>|null
    */
    public function getAccessPackageResourceRoleScopes(): ?array {
        return $this->accessPackageResourceRoleScopes;
    }

    /**
     * Gets the accessPackageResources property value. A reference to a resource associated with an access package catalog.
     * @return array<AccessPackageResource>|null
    */
    public function getAccessPackageResources(): ?array {
        return $this->accessPackageResources;
    }

    /**
     * Gets the accessPackages property value. Represents access package objects.
     * @return array<AccessPackage>|null
    */
    public function getAccessPackages(): ?array {
        return $this->accessPackages;
    }

    /**
     * Gets the connectedOrganizations property value. Represents references to a directory or domain of another organization whose users can request access.
     * @return array<ConnectedOrganization>|null
    */
    public function getConnectedOrganizations(): ?array {
        return $this->connectedOrganizations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageAssignmentApprovals' => function (ParseNode $n) use ($o) { $o->setAccessPackageAssignmentApprovals($n->getCollectionOfObjectValues(array(Approval::class, 'createFromDiscriminatorValue'))); },
            'accessPackageAssignmentPolicies' => function (ParseNode $n) use ($o) { $o->setAccessPackageAssignmentPolicies($n->getCollectionOfObjectValues(array(AccessPackageAssignmentPolicy::class, 'createFromDiscriminatorValue'))); },
            'accessPackageAssignmentRequests' => function (ParseNode $n) use ($o) { $o->setAccessPackageAssignmentRequests($n->getCollectionOfObjectValues(array(AccessPackageAssignmentRequest::class, 'createFromDiscriminatorValue'))); },
            'accessPackageAssignmentResourceRoles' => function (ParseNode $n) use ($o) { $o->setAccessPackageAssignmentResourceRoles($n->getCollectionOfObjectValues(array(AccessPackageAssignmentResourceRole::class, 'createFromDiscriminatorValue'))); },
            'accessPackageAssignments' => function (ParseNode $n) use ($o) { $o->setAccessPackageAssignments($n->getCollectionOfObjectValues(array(AccessPackageAssignment::class, 'createFromDiscriminatorValue'))); },
            'accessPackageCatalogs' => function (ParseNode $n) use ($o) { $o->setAccessPackageCatalogs($n->getCollectionOfObjectValues(array(AccessPackageCatalog::class, 'createFromDiscriminatorValue'))); },
            'accessPackageResourceEnvironments' => function (ParseNode $n) use ($o) { $o->setAccessPackageResourceEnvironments($n->getCollectionOfObjectValues(array(AccessPackageResourceEnvironment::class, 'createFromDiscriminatorValue'))); },
            'accessPackageResourceRequests' => function (ParseNode $n) use ($o) { $o->setAccessPackageResourceRequests($n->getCollectionOfObjectValues(array(AccessPackageResourceRequest::class, 'createFromDiscriminatorValue'))); },
            'accessPackageResourceRoleScopes' => function (ParseNode $n) use ($o) { $o->setAccessPackageResourceRoleScopes($n->getCollectionOfObjectValues(array(AccessPackageResourceRoleScope::class, 'createFromDiscriminatorValue'))); },
            'accessPackageResources' => function (ParseNode $n) use ($o) { $o->setAccessPackageResources($n->getCollectionOfObjectValues(array(AccessPackageResource::class, 'createFromDiscriminatorValue'))); },
            'accessPackages' => function (ParseNode $n) use ($o) { $o->setAccessPackages($n->getCollectionOfObjectValues(array(AccessPackage::class, 'createFromDiscriminatorValue'))); },
            'connectedOrganizations' => function (ParseNode $n) use ($o) { $o->setConnectedOrganizations($n->getCollectionOfObjectValues(array(ConnectedOrganization::class, 'createFromDiscriminatorValue'))); },
            'settings' => function (ParseNode $n) use ($o) { $o->setSettings($n->getObjectValue(array(EntitlementManagementSettings::class, 'createFromDiscriminatorValue'))); },
            'subjects' => function (ParseNode $n) use ($o) { $o->setSubjects($n->getCollectionOfObjectValues(array(AccessPackageSubject::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the settings property value. Represents the settings that control the behavior of Azure AD entitlement management.
     * @return EntitlementManagementSettings|null
    */
    public function getSettings(): ?EntitlementManagementSettings {
        return $this->settings;
    }

    /**
     * Gets the subjects property value. The subjects property
     * @return array<AccessPackageSubject>|null
    */
    public function getSubjects(): ?array {
        return $this->subjects;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessPackageAssignmentApprovals', $this->accessPackageAssignmentApprovals);
        $writer->writeCollectionOfObjectValues('accessPackageAssignmentPolicies', $this->accessPackageAssignmentPolicies);
        $writer->writeCollectionOfObjectValues('accessPackageAssignmentRequests', $this->accessPackageAssignmentRequests);
        $writer->writeCollectionOfObjectValues('accessPackageAssignmentResourceRoles', $this->accessPackageAssignmentResourceRoles);
        $writer->writeCollectionOfObjectValues('accessPackageAssignments', $this->accessPackageAssignments);
        $writer->writeCollectionOfObjectValues('accessPackageCatalogs', $this->accessPackageCatalogs);
        $writer->writeCollectionOfObjectValues('accessPackageResourceEnvironments', $this->accessPackageResourceEnvironments);
        $writer->writeCollectionOfObjectValues('accessPackageResourceRequests', $this->accessPackageResourceRequests);
        $writer->writeCollectionOfObjectValues('accessPackageResourceRoleScopes', $this->accessPackageResourceRoleScopes);
        $writer->writeCollectionOfObjectValues('accessPackageResources', $this->accessPackageResources);
        $writer->writeCollectionOfObjectValues('accessPackages', $this->accessPackages);
        $writer->writeCollectionOfObjectValues('connectedOrganizations', $this->connectedOrganizations);
        $writer->writeObjectValue('settings', $this->settings);
        $writer->writeCollectionOfObjectValues('subjects', $this->subjects);
    }

    /**
     * Sets the accessPackageAssignmentApprovals property value. Approval stages for decisions associated with access package assignment requests.
     *  @param array<Approval>|null $value Value to set for the accessPackageAssignmentApprovals property.
    */
    public function setAccessPackageAssignmentApprovals(?array $value ): void {
        $this->accessPackageAssignmentApprovals = $value;
    }

    /**
     * Sets the accessPackageAssignmentPolicies property value. Represents the policy that governs which subjects can request or be assigned an access package via an access package assignment.
     *  @param array<AccessPackageAssignmentPolicy>|null $value Value to set for the accessPackageAssignmentPolicies property.
    */
    public function setAccessPackageAssignmentPolicies(?array $value ): void {
        $this->accessPackageAssignmentPolicies = $value;
    }

    /**
     * Sets the accessPackageAssignmentRequests property value. Represents access package assignment requests created by or on behalf of a user.
     *  @param array<AccessPackageAssignmentRequest>|null $value Value to set for the accessPackageAssignmentRequests property.
    */
    public function setAccessPackageAssignmentRequests(?array $value ): void {
        $this->accessPackageAssignmentRequests = $value;
    }

    /**
     * Sets the accessPackageAssignmentResourceRoles property value. Represents the resource-specific role which a subject has been assigned through an access package assignment.
     *  @param array<AccessPackageAssignmentResourceRole>|null $value Value to set for the accessPackageAssignmentResourceRoles property.
    */
    public function setAccessPackageAssignmentResourceRoles(?array $value ): void {
        $this->accessPackageAssignmentResourceRoles = $value;
    }

    /**
     * Sets the accessPackageAssignments property value. The assignment of an access package to a subject for a period of time.
     *  @param array<AccessPackageAssignment>|null $value Value to set for the accessPackageAssignments property.
    */
    public function setAccessPackageAssignments(?array $value ): void {
        $this->accessPackageAssignments = $value;
    }

    /**
     * Sets the accessPackageCatalogs property value. A container of access packages.
     *  @param array<AccessPackageCatalog>|null $value Value to set for the accessPackageCatalogs property.
    */
    public function setAccessPackageCatalogs(?array $value ): void {
        $this->accessPackageCatalogs = $value;
    }

    /**
     * Sets the accessPackageResourceEnvironments property value. A reference to the geolocation environment in which a resource is located.
     *  @param array<AccessPackageResourceEnvironment>|null $value Value to set for the accessPackageResourceEnvironments property.
    */
    public function setAccessPackageResourceEnvironments(?array $value ): void {
        $this->accessPackageResourceEnvironments = $value;
    }

    /**
     * Sets the accessPackageResourceRequests property value. Represents a request to add or remove a resource to or from a catalog respectively.
     *  @param array<AccessPackageResourceRequest>|null $value Value to set for the accessPackageResourceRequests property.
    */
    public function setAccessPackageResourceRequests(?array $value ): void {
        $this->accessPackageResourceRequests = $value;
    }

    /**
     * Sets the accessPackageResourceRoleScopes property value. A reference to both a scope within a resource, and a role in that resource for that scope.
     *  @param array<AccessPackageResourceRoleScope>|null $value Value to set for the accessPackageResourceRoleScopes property.
    */
    public function setAccessPackageResourceRoleScopes(?array $value ): void {
        $this->accessPackageResourceRoleScopes = $value;
    }

    /**
     * Sets the accessPackageResources property value. A reference to a resource associated with an access package catalog.
     *  @param array<AccessPackageResource>|null $value Value to set for the accessPackageResources property.
    */
    public function setAccessPackageResources(?array $value ): void {
        $this->accessPackageResources = $value;
    }

    /**
     * Sets the accessPackages property value. Represents access package objects.
     *  @param array<AccessPackage>|null $value Value to set for the accessPackages property.
    */
    public function setAccessPackages(?array $value ): void {
        $this->accessPackages = $value;
    }

    /**
     * Sets the connectedOrganizations property value. Represents references to a directory or domain of another organization whose users can request access.
     *  @param array<ConnectedOrganization>|null $value Value to set for the connectedOrganizations property.
    */
    public function setConnectedOrganizations(?array $value ): void {
        $this->connectedOrganizations = $value;
    }

    /**
     * Sets the settings property value. Represents the settings that control the behavior of Azure AD entitlement management.
     *  @param EntitlementManagementSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?EntitlementManagementSettings $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the subjects property value. The subjects property
     *  @param array<AccessPackageSubject>|null $value Value to set for the subjects property.
    */
    public function setSubjects(?array $value ): void {
        $this->subjects = $value;
    }

}
