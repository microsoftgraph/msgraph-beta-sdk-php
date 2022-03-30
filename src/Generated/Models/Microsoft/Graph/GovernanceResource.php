<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceResource extends Entity 
{
    /** @var string|null $displayName The display name of the resource. */
    private ?string $displayName = null;
    
    /** @var string|null $externalId The external id of the resource, representing its original id in the external system. For example, a subscription resource's external id can be '/subscriptions/c14ae696-5e0c-4e5d-88cc-bef6637737ac'. */
    private ?string $externalId = null;
    
    /** @var GovernanceResource|null $parent Read-only. The parent resource. for pimforazurerbac scenario, it can represent the subscription the resource belongs to. */
    private ?GovernanceResource $parent = null;
    
    /** @var DateTime|null $registeredDateTime Represents the date time when the resource is registered in PIM. */
    private ?DateTime $registeredDateTime = null;
    
    /** @var string|null $registeredRoot The externalId of the resource's root scope that is registered in PIM. The root scope can be the parent, grandparent, or higher ancestor resources. */
    private ?string $registeredRoot = null;
    
    /** @var array<GovernanceRoleAssignmentRequest>|null $roleAssignmentRequests The collection of role assignment requests for the resource. */
    private ?array $roleAssignmentRequests = null;
    
    /** @var array<GovernanceRoleAssignment>|null $roleAssignments The collection of role assignments for the resource. */
    private ?array $roleAssignments = null;
    
    /** @var array<GovernanceRoleDefinition>|null $roleDefinitions The collection of role defintions for the resource. */
    private ?array $roleDefinitions = null;
    
    /** @var array<GovernanceRoleSetting>|null $roleSettings The collection of role settings for the resource. */
    private ?array $roleSettings = null;
    
    /** @var string|null $status The status of a given resource. For example, it could represent whether the resource is locked or not (values: Active/Locked). Note: This property may be extended in the future to support more scenarios. */
    private ?string $status = null;
    
    /** @var string|null $type Required. Resource type. For example, for Azure resources, the type could be 'Subscription', 'ResourceGroup', 'Microsoft.Sql/server', etc. */
    private ?string $type = null;
    
    /**
     * Instantiates a new governanceResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceResource
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceResource {
        return new GovernanceResource();
    }

    /**
     * Gets the displayName property value. The display name of the resource.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the externalId property value. The external id of the resource, representing its original id in the external system. For example, a subscription resource's external id can be '/subscriptions/c14ae696-5e0c-4e5d-88cc-bef6637737ac'.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'externalId' => function (self $o, ParseNode $n) { $o->setExternalId($n->getStringValue()); },
            'parent' => function (self $o, ParseNode $n) { $o->setParent($n->getObjectValue(GovernanceResource::class)); },
            'registeredDateTime' => function (self $o, ParseNode $n) { $o->setRegisteredDateTime($n->getDateTimeValue()); },
            'registeredRoot' => function (self $o, ParseNode $n) { $o->setRegisteredRoot($n->getStringValue()); },
            'roleAssignmentRequests' => function (self $o, ParseNode $n) { $o->setRoleAssignmentRequests($n->getCollectionOfObjectValues(GovernanceRoleAssignmentRequest::class)); },
            'roleAssignments' => function (self $o, ParseNode $n) { $o->setRoleAssignments($n->getCollectionOfObjectValues(GovernanceRoleAssignment::class)); },
            'roleDefinitions' => function (self $o, ParseNode $n) { $o->setRoleDefinitions($n->getCollectionOfObjectValues(GovernanceRoleDefinition::class)); },
            'roleSettings' => function (self $o, ParseNode $n) { $o->setRoleSettings($n->getCollectionOfObjectValues(GovernanceRoleSetting::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getStringValue()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the parent property value. Read-only. The parent resource. for pimforazurerbac scenario, it can represent the subscription the resource belongs to.
     * @return GovernanceResource|null
    */
    public function getParent(): ?GovernanceResource {
        return $this->parent;
    }

    /**
     * Gets the registeredDateTime property value. Represents the date time when the resource is registered in PIM.
     * @return DateTime|null
    */
    public function getRegisteredDateTime(): ?DateTime {
        return $this->registeredDateTime;
    }

    /**
     * Gets the registeredRoot property value. The externalId of the resource's root scope that is registered in PIM. The root scope can be the parent, grandparent, or higher ancestor resources.
     * @return string|null
    */
    public function getRegisteredRoot(): ?string {
        return $this->registeredRoot;
    }

    /**
     * Gets the roleAssignmentRequests property value. The collection of role assignment requests for the resource.
     * @return array<GovernanceRoleAssignmentRequest>|null
    */
    public function getRoleAssignmentRequests(): ?array {
        return $this->roleAssignmentRequests;
    }

    /**
     * Gets the roleAssignments property value. The collection of role assignments for the resource.
     * @return array<GovernanceRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        return $this->roleAssignments;
    }

    /**
     * Gets the roleDefinitions property value. The collection of role defintions for the resource.
     * @return array<GovernanceRoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        return $this->roleDefinitions;
    }

    /**
     * Gets the roleSettings property value. The collection of role settings for the resource.
     * @return array<GovernanceRoleSetting>|null
    */
    public function getRoleSettings(): ?array {
        return $this->roleSettings;
    }

    /**
     * Gets the status property value. The status of a given resource. For example, it could represent whether the resource is locked or not (values: Active/Locked). Note: This property may be extended in the future to support more scenarios.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the type property value. Required. Resource type. For example, for Azure resources, the type could be 'Subscription', 'ResourceGroup', 'Microsoft.Sql/server', etc.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('externalId', $this->externalId);
        $writer->writeObjectValue('parent', $this->parent);
        $writer->writeDateTimeValue('registeredDateTime', $this->registeredDateTime);
        $writer->writeStringValue('registeredRoot', $this->registeredRoot);
        $writer->writeCollectionOfObjectValues('roleAssignmentRequests', $this->roleAssignmentRequests);
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->roleAssignments);
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->roleDefinitions);
        $writer->writeCollectionOfObjectValues('roleSettings', $this->roleSettings);
        $writer->writeStringValue('status', $this->status);
        $writer->writeStringValue('type', $this->type);
    }

    /**
     * Sets the displayName property value. The display name of the resource.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the externalId property value. The external id of the resource, representing its original id in the external system. For example, a subscription resource's external id can be '/subscriptions/c14ae696-5e0c-4e5d-88cc-bef6637737ac'.
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value ): void {
        $this->externalId = $value;
    }

    /**
     * Sets the parent property value. Read-only. The parent resource. for pimforazurerbac scenario, it can represent the subscription the resource belongs to.
     *  @param GovernanceResource|null $value Value to set for the parent property.
    */
    public function setParent(?GovernanceResource $value ): void {
        $this->parent = $value;
    }

    /**
     * Sets the registeredDateTime property value. Represents the date time when the resource is registered in PIM.
     *  @param DateTime|null $value Value to set for the registeredDateTime property.
    */
    public function setRegisteredDateTime(?DateTime $value ): void {
        $this->registeredDateTime = $value;
    }

    /**
     * Sets the registeredRoot property value. The externalId of the resource's root scope that is registered in PIM. The root scope can be the parent, grandparent, or higher ancestor resources.
     *  @param string|null $value Value to set for the registeredRoot property.
    */
    public function setRegisteredRoot(?string $value ): void {
        $this->registeredRoot = $value;
    }

    /**
     * Sets the roleAssignmentRequests property value. The collection of role assignment requests for the resource.
     *  @param array<GovernanceRoleAssignmentRequest>|null $value Value to set for the roleAssignmentRequests property.
    */
    public function setRoleAssignmentRequests(?array $value ): void {
        $this->roleAssignmentRequests = $value;
    }

    /**
     * Sets the roleAssignments property value. The collection of role assignments for the resource.
     *  @param array<GovernanceRoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value ): void {
        $this->roleAssignments = $value;
    }

    /**
     * Sets the roleDefinitions property value. The collection of role defintions for the resource.
     *  @param array<GovernanceRoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value ): void {
        $this->roleDefinitions = $value;
    }

    /**
     * Sets the roleSettings property value. The collection of role settings for the resource.
     *  @param array<GovernanceRoleSetting>|null $value Value to set for the roleSettings property.
    */
    public function setRoleSettings(?array $value ): void {
        $this->roleSettings = $value;
    }

    /**
     * Sets the status property value. The status of a given resource. For example, it could represent whether the resource is locked or not (values: Active/Locked). Note: This property may be extended in the future to support more scenarios.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the type property value. Required. Resource type. For example, for Azure resources, the type could be 'Subscription', 'ResourceGroup', 'Microsoft.Sql/server', etc.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
