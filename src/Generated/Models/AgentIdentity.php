<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AgentIdentity extends ServicePrincipal implements Parsable 
{
    /**
     * Instantiates a new AgentIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.agentIdentity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentIdentity {
        return new AgentIdentity();
    }

    /**
     * Gets the agentIdentityBlueprintId property value. The appId of the agent identity blueprint that defines the configuration for this agent identity.
     * @return string|null
    */
    public function getAgentIdentityBlueprintId(): ?string {
        $val = $this->getBackingStore()->get('agentIdentityBlueprintId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentIdentityBlueprintId'");
    }

    /**
     * Gets the communicationConfiguration property value. The effective communication configuration for this agent identity. Represents the agent identity-level override that resolves on top of the configuration inherited from the agent identity blueprint.
     * @return AgentCommunicationConfiguration|null
    */
    public function getCommunicationConfiguration(): ?AgentCommunicationConfiguration {
        $val = $this->getBackingStore()->get('communicationConfiguration');
        if (is_null($val) || $val instanceof AgentCommunicationConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'communicationConfiguration'");
    }

    /**
     * Gets the createdDateTime property value. The date and time the agent identity was created. Read-only. Inherited from servicePrincipal.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentIdentityBlueprintId' => fn(ParseNode $n) => $o->setAgentIdentityBlueprintId($n->getStringValue()),
            'communicationConfiguration' => fn(ParseNode $n) => $o->setCommunicationConfiguration($n->getObjectValue([AgentCommunicationConfiguration::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'inheritedAppRoleAssignments' => fn(ParseNode $n) => $o->setInheritedAppRoleAssignments($n->getCollectionOfObjectValues([AppRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'inheritedOauth2PermissionGrants' => fn(ParseNode $n) => $o->setInheritedOauth2PermissionGrants($n->getCollectionOfObjectValues([OAuth2PermissionGrant::class, 'createFromDiscriminatorValue'])),
            'lifecyclePolicyComplianceState' => fn(ParseNode $n) => $o->setLifecyclePolicyComplianceState($n->getEnumValue(LifecyclePolicyComplianceState::class)),
            'lifecyclePolicyComplianceStateLastModifiedDateTime' => fn(ParseNode $n) => $o->setLifecyclePolicyComplianceStateLastModifiedDateTime($n->getDateTimeValue()),
            'lifecyclePolicyComplianceStateReason' => fn(ParseNode $n) => $o->setLifecyclePolicyComplianceStateReason($n->getStringValue()),
            'lifecyclePolicyNonComplianceDisablementDateTime' => fn(ParseNode $n) => $o->setLifecyclePolicyNonComplianceDisablementDateTime($n->getDateTimeValue()),
            'managerApplications' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setManagerApplications($val);
            },
            'sponsors' => fn(ParseNode $n) => $o->setSponsors($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the inheritedAppRoleAssignments property value. Application role assignments that this agent identity inherits from its parent Agent Identity Blueprint service principal. Read-only. Nullable.
     * @return array<AppRoleAssignment>|null
    */
    public function getInheritedAppRoleAssignments(): ?array {
        $val = $this->getBackingStore()->get('inheritedAppRoleAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppRoleAssignment::class);
            /** @var array<AppRoleAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inheritedAppRoleAssignments'");
    }

    /**
     * Gets the inheritedOauth2PermissionGrants property value. Delegated permission grants that this agent identity inherits from its parent Agent Identity Blueprint service principal. Read-only. Nullable.
     * @return array<OAuth2PermissionGrant>|null
    */
    public function getInheritedOauth2PermissionGrants(): ?array {
        $val = $this->getBackingStore()->get('inheritedOauth2PermissionGrants');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OAuth2PermissionGrant::class);
            /** @var array<OAuth2PermissionGrant>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inheritedOauth2PermissionGrants'");
    }

    /**
     * Gets the lifecyclePolicyComplianceState property value. The lifecyclePolicyComplianceState property
     * @return LifecyclePolicyComplianceState|null
    */
    public function getLifecyclePolicyComplianceState(): ?LifecyclePolicyComplianceState {
        $val = $this->getBackingStore()->get('lifecyclePolicyComplianceState');
        if (is_null($val) || $val instanceof LifecyclePolicyComplianceState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lifecyclePolicyComplianceState'");
    }

    /**
     * Gets the lifecyclePolicyComplianceStateLastModifiedDateTime property value. The lifecyclePolicyComplianceStateLastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLifecyclePolicyComplianceStateLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lifecyclePolicyComplianceStateLastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lifecyclePolicyComplianceStateLastModifiedDateTime'");
    }

    /**
     * Gets the lifecyclePolicyComplianceStateReason property value. The lifecyclePolicyComplianceStateReason property
     * @return string|null
    */
    public function getLifecyclePolicyComplianceStateReason(): ?string {
        $val = $this->getBackingStore()->get('lifecyclePolicyComplianceStateReason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lifecyclePolicyComplianceStateReason'");
    }

    /**
     * Gets the lifecyclePolicyNonComplianceDisablementDateTime property value. The lifecyclePolicyNonComplianceDisablementDateTime property
     * @return DateTime|null
    */
    public function getLifecyclePolicyNonComplianceDisablementDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lifecyclePolicyNonComplianceDisablementDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lifecyclePolicyNonComplianceDisablementDateTime'");
    }

    /**
     * Gets the managerApplications property value. The collection of application IDs designated as managers of this agent identity's backing agentIdentityBlueprint. Read-only; the value is server-managed and reflects the managerApplications of the backing agentIdentityBlueprint. To change the managers, an owner or administrator must update the managerApplications property on the backing agentIdentityBlueprint in the tenant where it's registered. For multitenant agent identity blueprints, admins in a tenant where the blueprint is only consumed can't make this change — they must ask an owner or administrator in the blueprint's home tenant. Not nullable. Returned only on $select.
     * @return array<string>|null
    */
    public function getManagerApplications(): ?array {
        $val = $this->getBackingStore()->get('managerApplications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managerApplications'");
    }

    /**
     * Gets the sponsors property value. The sponsors for this agent identity.
     * @return array<DirectoryObject>|null
    */
    public function getSponsors(): ?array {
        $val = $this->getBackingStore()->get('sponsors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sponsors'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('agentIdentityBlueprintId', $this->getAgentIdentityBlueprintId());
        $writer->writeObjectValue('communicationConfiguration', $this->getCommunicationConfiguration());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('inheritedAppRoleAssignments', $this->getInheritedAppRoleAssignments());
        $writer->writeCollectionOfObjectValues('inheritedOauth2PermissionGrants', $this->getInheritedOauth2PermissionGrants());
        $writer->writeEnumValue('lifecyclePolicyComplianceState', $this->getLifecyclePolicyComplianceState());
        $writer->writeDateTimeValue('lifecyclePolicyComplianceStateLastModifiedDateTime', $this->getLifecyclePolicyComplianceStateLastModifiedDateTime());
        $writer->writeStringValue('lifecyclePolicyComplianceStateReason', $this->getLifecyclePolicyComplianceStateReason());
        $writer->writeDateTimeValue('lifecyclePolicyNonComplianceDisablementDateTime', $this->getLifecyclePolicyNonComplianceDisablementDateTime());
        $writer->writeCollectionOfObjectValues('sponsors', $this->getSponsors());
    }

    /**
     * Sets the agentIdentityBlueprintId property value. The appId of the agent identity blueprint that defines the configuration for this agent identity.
     * @param string|null $value Value to set for the agentIdentityBlueprintId property.
    */
    public function setAgentIdentityBlueprintId(?string $value): void {
        $this->getBackingStore()->set('agentIdentityBlueprintId', $value);
    }

    /**
     * Sets the communicationConfiguration property value. The effective communication configuration for this agent identity. Represents the agent identity-level override that resolves on top of the configuration inherited from the agent identity blueprint.
     * @param AgentCommunicationConfiguration|null $value Value to set for the communicationConfiguration property.
    */
    public function setCommunicationConfiguration(?AgentCommunicationConfiguration $value): void {
        $this->getBackingStore()->set('communicationConfiguration', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the agent identity was created. Read-only. Inherited from servicePrincipal.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the inheritedAppRoleAssignments property value. Application role assignments that this agent identity inherits from its parent Agent Identity Blueprint service principal. Read-only. Nullable.
     * @param array<AppRoleAssignment>|null $value Value to set for the inheritedAppRoleAssignments property.
    */
    public function setInheritedAppRoleAssignments(?array $value): void {
        $this->getBackingStore()->set('inheritedAppRoleAssignments', $value);
    }

    /**
     * Sets the inheritedOauth2PermissionGrants property value. Delegated permission grants that this agent identity inherits from its parent Agent Identity Blueprint service principal. Read-only. Nullable.
     * @param array<OAuth2PermissionGrant>|null $value Value to set for the inheritedOauth2PermissionGrants property.
    */
    public function setInheritedOauth2PermissionGrants(?array $value): void {
        $this->getBackingStore()->set('inheritedOauth2PermissionGrants', $value);
    }

    /**
     * Sets the lifecyclePolicyComplianceState property value. The lifecyclePolicyComplianceState property
     * @param LifecyclePolicyComplianceState|null $value Value to set for the lifecyclePolicyComplianceState property.
    */
    public function setLifecyclePolicyComplianceState(?LifecyclePolicyComplianceState $value): void {
        $this->getBackingStore()->set('lifecyclePolicyComplianceState', $value);
    }

    /**
     * Sets the lifecyclePolicyComplianceStateLastModifiedDateTime property value. The lifecyclePolicyComplianceStateLastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lifecyclePolicyComplianceStateLastModifiedDateTime property.
    */
    public function setLifecyclePolicyComplianceStateLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lifecyclePolicyComplianceStateLastModifiedDateTime', $value);
    }

    /**
     * Sets the lifecyclePolicyComplianceStateReason property value. The lifecyclePolicyComplianceStateReason property
     * @param string|null $value Value to set for the lifecyclePolicyComplianceStateReason property.
    */
    public function setLifecyclePolicyComplianceStateReason(?string $value): void {
        $this->getBackingStore()->set('lifecyclePolicyComplianceStateReason', $value);
    }

    /**
     * Sets the lifecyclePolicyNonComplianceDisablementDateTime property value. The lifecyclePolicyNonComplianceDisablementDateTime property
     * @param DateTime|null $value Value to set for the lifecyclePolicyNonComplianceDisablementDateTime property.
    */
    public function setLifecyclePolicyNonComplianceDisablementDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lifecyclePolicyNonComplianceDisablementDateTime', $value);
    }

    /**
     * Sets the managerApplications property value. The collection of application IDs designated as managers of this agent identity's backing agentIdentityBlueprint. Read-only; the value is server-managed and reflects the managerApplications of the backing agentIdentityBlueprint. To change the managers, an owner or administrator must update the managerApplications property on the backing agentIdentityBlueprint in the tenant where it's registered. For multitenant agent identity blueprints, admins in a tenant where the blueprint is only consumed can't make this change — they must ask an owner or administrator in the blueprint's home tenant. Not nullable. Returned only on $select.
     * @param array<string>|null $value Value to set for the managerApplications property.
    */
    public function setManagerApplications(?array $value): void {
        $this->getBackingStore()->set('managerApplications', $value);
    }

    /**
     * Sets the sponsors property value. The sponsors for this agent identity.
     * @param array<DirectoryObject>|null $value Value to set for the sponsors property.
    */
    public function setSponsors(?array $value): void {
        $this->getBackingStore()->set('sponsors', $value);
    }

}
