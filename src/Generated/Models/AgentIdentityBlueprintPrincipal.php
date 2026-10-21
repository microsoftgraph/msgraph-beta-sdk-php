<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AgentIdentityBlueprintPrincipal extends ServicePrincipal implements Parsable 
{
    /**
     * Instantiates a new AgentIdentityBlueprintPrincipal and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.agentIdentityBlueprintPrincipal');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentIdentityBlueprintPrincipal
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentIdentityBlueprintPrincipal {
        return new AgentIdentityBlueprintPrincipal();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
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
     * Gets the managerApplications property value. The collection of application IDs designated as managers of this agent identity blueprint principal's backing agentIdentityBlueprint. Read-only; the value is server-managed and reflects the managerApplications of the backing agentIdentityBlueprint. To change the managers, an owner or administrator must update the managerApplications property on the backing agentIdentityBlueprint in the tenant where it's registered. For multitenant agent identity blueprints, admins in a tenant where the blueprint is only consumed can't make this change — they must ask an owner or administrator in the blueprint's home tenant. Not nullable. Returned only on $select.
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
     * Gets the sponsors property value. The sponsors for this agent identity blueprint principal. Sponsors are users or service principals who can authorize and manage the lifecycle of agent identity instances.
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
        $writer->writeEnumValue('lifecyclePolicyComplianceState', $this->getLifecyclePolicyComplianceState());
        $writer->writeDateTimeValue('lifecyclePolicyComplianceStateLastModifiedDateTime', $this->getLifecyclePolicyComplianceStateLastModifiedDateTime());
        $writer->writeStringValue('lifecyclePolicyComplianceStateReason', $this->getLifecyclePolicyComplianceStateReason());
        $writer->writeDateTimeValue('lifecyclePolicyNonComplianceDisablementDateTime', $this->getLifecyclePolicyNonComplianceDisablementDateTime());
        $writer->writeCollectionOfObjectValues('sponsors', $this->getSponsors());
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
     * Sets the managerApplications property value. The collection of application IDs designated as managers of this agent identity blueprint principal's backing agentIdentityBlueprint. Read-only; the value is server-managed and reflects the managerApplications of the backing agentIdentityBlueprint. To change the managers, an owner or administrator must update the managerApplications property on the backing agentIdentityBlueprint in the tenant where it's registered. For multitenant agent identity blueprints, admins in a tenant where the blueprint is only consumed can't make this change — they must ask an owner or administrator in the blueprint's home tenant. Not nullable. Returned only on $select.
     * @param array<string>|null $value Value to set for the managerApplications property.
    */
    public function setManagerApplications(?array $value): void {
        $this->getBackingStore()->set('managerApplications', $value);
    }

    /**
     * Sets the sponsors property value. The sponsors for this agent identity blueprint principal. Sponsors are users or service principals who can authorize and manage the lifecycle of agent identity instances.
     * @param array<DirectoryObject>|null $value Value to set for the sponsors property.
    */
    public function setSponsors(?array $value): void {
        $this->getBackingStore()->set('sponsors', $value);
    }

}
