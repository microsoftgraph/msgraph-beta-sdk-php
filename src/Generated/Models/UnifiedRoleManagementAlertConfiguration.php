<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementAlertConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new UnifiedRoleManagementAlertConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementAlertConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementAlertConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.invalidLicenseAlertConfiguration': return new InvalidLicenseAlertConfiguration();
                case '#microsoft.graph.noMfaOnRoleActivationAlertConfiguration': return new NoMfaOnRoleActivationAlertConfiguration();
                case '#microsoft.graph.redundantAssignmentAlertConfiguration': return new RedundantAssignmentAlertConfiguration();
                case '#microsoft.graph.rolesAssignedOutsidePrivilegedIdentityManagementAlertConfiguration': return new RolesAssignedOutsidePrivilegedIdentityManagementAlertConfiguration();
                case '#microsoft.graph.sequentialActivationRenewalsAlertConfiguration': return new SequentialActivationRenewalsAlertConfiguration();
                case '#microsoft.graph.staleSignInAlertConfiguration': return new StaleSignInAlertConfiguration();
                case '#microsoft.graph.tooManyGlobalAdminsAssignedToTenantAlertConfiguration': return new TooManyGlobalAdminsAssignedToTenantAlertConfiguration();
            }
        }
        return new UnifiedRoleManagementAlertConfiguration();
    }

    /**
     * Gets the alertDefinition property value. The definition of the alert that contains its description, impact, and measures to mitigate or prevent it. Supports $expand.
     * @return UnifiedRoleManagementAlertDefinition|null
    */
    public function getAlertDefinition(): ?UnifiedRoleManagementAlertDefinition {
        $val = $this->getBackingStore()->get('alertDefinition');
        if (is_null($val) || $val instanceof UnifiedRoleManagementAlertDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertDefinition'");
    }

    /**
     * Gets the alertDefinitionId property value. The identifier of an alert definition. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getAlertDefinitionId(): ?string {
        $val = $this->getBackingStore()->get('alertDefinitionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertDefinitionId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alertDefinition' => fn(ParseNode $n) => $o->setAlertDefinition($n->getObjectValue([UnifiedRoleManagementAlertDefinition::class, 'createFromDiscriminatorValue'])),
            'alertDefinitionId' => fn(ParseNode $n) => $o->setAlertDefinitionId($n->getStringValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'scopeId' => fn(ParseNode $n) => $o->setScopeId($n->getStringValue()),
            'scopeType' => fn(ParseNode $n) => $o->setScopeType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isEnabled property value. true if the alert is enabled. Setting it to false disables PIM scanning the tenant to identify instances that trigger the alert.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the scopeId property value. The identifier of the scope to which the alert is related. Only / is supported to represent the tenant scope. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getScopeId(): ?string {
        $val = $this->getBackingStore()->get('scopeId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeId'");
    }

    /**
     * Gets the scopeType property value. The type of scope where the alert is created. DirectoryRole is the only currently supported scope type for Microsoft Entra roles.
     * @return string|null
    */
    public function getScopeType(): ?string {
        $val = $this->getBackingStore()->get('scopeType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('alertDefinition', $this->getAlertDefinition());
        $writer->writeStringValue('alertDefinitionId', $this->getAlertDefinitionId());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeStringValue('scopeId', $this->getScopeId());
        $writer->writeStringValue('scopeType', $this->getScopeType());
    }

    /**
     * Sets the alertDefinition property value. The definition of the alert that contains its description, impact, and measures to mitigate or prevent it. Supports $expand.
     * @param UnifiedRoleManagementAlertDefinition|null $value Value to set for the alertDefinition property.
    */
    public function setAlertDefinition(?UnifiedRoleManagementAlertDefinition $value): void {
        $this->getBackingStore()->set('alertDefinition', $value);
    }

    /**
     * Sets the alertDefinitionId property value. The identifier of an alert definition. Supports $filter (eq, ne).
     * @param string|null $value Value to set for the alertDefinitionId property.
    */
    public function setAlertDefinitionId(?string $value): void {
        $this->getBackingStore()->set('alertDefinitionId', $value);
    }

    /**
     * Sets the isEnabled property value. true if the alert is enabled. Setting it to false disables PIM scanning the tenant to identify instances that trigger the alert.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the scopeId property value. The identifier of the scope to which the alert is related. Only / is supported to represent the tenant scope. Supports $filter (eq, ne).
     * @param string|null $value Value to set for the scopeId property.
    */
    public function setScopeId(?string $value): void {
        $this->getBackingStore()->set('scopeId', $value);
    }

    /**
     * Sets the scopeType property value. The type of scope where the alert is created. DirectoryRole is the only currently supported scope type for Microsoft Entra roles.
     * @param string|null $value Value to set for the scopeType property.
    */
    public function setScopeType(?string $value): void {
        $this->getBackingStore()->set('scopeType', $value);
    }

}
