<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceResource extends Entity implements Parsable 
{
    /**
     * Instantiates a new governanceResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.governanceResource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceResource {
        return new GovernanceResource();
    }

    /**
     * Gets the displayName property value. The display name of the resource.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the externalId property value. The external id of the resource, representing its original id in the external system. For example, a subscription resource's external id can be '/subscriptions/c14ae696-5e0c-4e5d-88cc-bef6637737ac'.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->getBackingStore()->get('externalId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'parent' => fn(ParseNode $n) => $o->setParent($n->getObjectValue([GovernanceResource::class, 'createFromDiscriminatorValue'])),
            'registeredDateTime' => fn(ParseNode $n) => $o->setRegisteredDateTime($n->getDateTimeValue()),
            'registeredRoot' => fn(ParseNode $n) => $o->setRegisteredRoot($n->getStringValue()),
            'roleAssignmentRequests' => fn(ParseNode $n) => $o->setRoleAssignmentRequests($n->getCollectionOfObjectValues([GovernanceRoleAssignmentRequest::class, 'createFromDiscriminatorValue'])),
            'roleAssignments' => fn(ParseNode $n) => $o->setRoleAssignments($n->getCollectionOfObjectValues([GovernanceRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'roleDefinitions' => fn(ParseNode $n) => $o->setRoleDefinitions($n->getCollectionOfObjectValues([GovernanceRoleDefinition::class, 'createFromDiscriminatorValue'])),
            'roleSettings' => fn(ParseNode $n) => $o->setRoleSettings($n->getCollectionOfObjectValues([GovernanceRoleSetting::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the parent property value. Read-only. The parent resource. for pimforazurerbac scenario, it can represent the subscription the resource belongs to.
     * @return GovernanceResource|null
    */
    public function getParent(): ?GovernanceResource {
        return $this->getBackingStore()->get('parent');
    }

    /**
     * Gets the registeredDateTime property value. Represents the date time when the resource is registered in PIM.
     * @return DateTime|null
    */
    public function getRegisteredDateTime(): ?DateTime {
        return $this->getBackingStore()->get('registeredDateTime');
    }

    /**
     * Gets the registeredRoot property value. The externalId of the resource's root scope that is registered in PIM. The root scope can be the parent, grandparent, or higher ancestor resources.
     * @return string|null
    */
    public function getRegisteredRoot(): ?string {
        return $this->getBackingStore()->get('registeredRoot');
    }

    /**
     * Gets the roleAssignmentRequests property value. The collection of role assignment requests for the resource.
     * @return array<GovernanceRoleAssignmentRequest>|null
    */
    public function getRoleAssignmentRequests(): ?array {
        return $this->getBackingStore()->get('roleAssignmentRequests');
    }

    /**
     * Gets the roleAssignments property value. The collection of role assignments for the resource.
     * @return array<GovernanceRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        return $this->getBackingStore()->get('roleAssignments');
    }

    /**
     * Gets the roleDefinitions property value. The collection of role defintions for the resource.
     * @return array<GovernanceRoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        return $this->getBackingStore()->get('roleDefinitions');
    }

    /**
     * Gets the roleSettings property value. The collection of role settings for the resource.
     * @return array<GovernanceRoleSetting>|null
    */
    public function getRoleSettings(): ?array {
        return $this->getBackingStore()->get('roleSettings');
    }

    /**
     * Gets the status property value. The status of a given resource. For example, it could represent whether the resource is locked or not (values: Active/Locked). Note: This property may be extended in the future to support more scenarios.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the type property value. Required. Resource type. For example, for Azure resources, the type could be 'Subscription', 'ResourceGroup', 'Microsoft.Sql/server', etc.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeObjectValue('parent', $this->getParent());
        $writer->writeDateTimeValue('registeredDateTime', $this->getRegisteredDateTime());
        $writer->writeStringValue('registeredRoot', $this->getRegisteredRoot());
        $writer->writeCollectionOfObjectValues('roleAssignmentRequests', $this->getRoleAssignmentRequests());
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->getRoleAssignments());
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->getRoleDefinitions());
        $writer->writeCollectionOfObjectValues('roleSettings', $this->getRoleSettings());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the displayName property value. The display name of the resource.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalId property value. The external id of the resource, representing its original id in the external system. For example, a subscription resource's external id can be '/subscriptions/c14ae696-5e0c-4e5d-88cc-bef6637737ac'.
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the parent property value. Read-only. The parent resource. for pimforazurerbac scenario, it can represent the subscription the resource belongs to.
     *  @param GovernanceResource|null $value Value to set for the parent property.
    */
    public function setParent(?GovernanceResource $value): void {
        $this->getBackingStore()->set('parent', $value);
    }

    /**
     * Sets the registeredDateTime property value. Represents the date time when the resource is registered in PIM.
     *  @param DateTime|null $value Value to set for the registeredDateTime property.
    */
    public function setRegisteredDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('registeredDateTime', $value);
    }

    /**
     * Sets the registeredRoot property value. The externalId of the resource's root scope that is registered in PIM. The root scope can be the parent, grandparent, or higher ancestor resources.
     *  @param string|null $value Value to set for the registeredRoot property.
    */
    public function setRegisteredRoot(?string $value): void {
        $this->getBackingStore()->set('registeredRoot', $value);
    }

    /**
     * Sets the roleAssignmentRequests property value. The collection of role assignment requests for the resource.
     *  @param array<GovernanceRoleAssignmentRequest>|null $value Value to set for the roleAssignmentRequests property.
    */
    public function setRoleAssignmentRequests(?array $value): void {
        $this->getBackingStore()->set('roleAssignmentRequests', $value);
    }

    /**
     * Sets the roleAssignments property value. The collection of role assignments for the resource.
     *  @param array<GovernanceRoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value): void {
        $this->getBackingStore()->set('roleAssignments', $value);
    }

    /**
     * Sets the roleDefinitions property value. The collection of role defintions for the resource.
     *  @param array<GovernanceRoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value): void {
        $this->getBackingStore()->set('roleDefinitions', $value);
    }

    /**
     * Sets the roleSettings property value. The collection of role settings for the resource.
     *  @param array<GovernanceRoleSetting>|null $value Value to set for the roleSettings property.
    */
    public function setRoleSettings(?array $value): void {
        $this->getBackingStore()->set('roleSettings', $value);
    }

    /**
     * Sets the status property value. The status of a given resource. For example, it could represent whether the resource is locked or not (values: Active/Locked). Note: This property may be extended in the future to support more scenarios.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the type property value. Required. Resource type. For example, for Azure resources, the type could be 'Subscription', 'ResourceGroup', 'Microsoft.Sql/server', etc.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
