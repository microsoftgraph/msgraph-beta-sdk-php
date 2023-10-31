<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementAlertDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new unifiedRoleManagementAlertDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementAlertDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementAlertDefinition {
        return new UnifiedRoleManagementAlertDefinition();
    }

    /**
     * Gets the description property value. The description of the alert.
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
     * Gets the displayName property value. The friendly display name that renders in Privileged Identity Management (PIM) alerts in the Microsoft Entra admin center.
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
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'howToPrevent' => fn(ParseNode $n) => $o->setHowToPrevent($n->getStringValue()),
            'isConfigurable' => fn(ParseNode $n) => $o->setIsConfigurable($n->getBooleanValue()),
            'isRemediatable' => fn(ParseNode $n) => $o->setIsRemediatable($n->getBooleanValue()),
            'mitigationSteps' => fn(ParseNode $n) => $o->setMitigationSteps($n->getStringValue()),
            'scopeId' => fn(ParseNode $n) => $o->setScopeId($n->getStringValue()),
            'scopeType' => fn(ParseNode $n) => $o->setScopeType($n->getStringValue()),
            'securityImpact' => fn(ParseNode $n) => $o->setSecurityImpact($n->getStringValue()),
            'severityLevel' => fn(ParseNode $n) => $o->setSeverityLevel($n->getEnumValue(AlertSeverity::class)),
        ]);
    }

    /**
     * Gets the howToPrevent property value. Long-form text that indicates the ways to prevent the alert from being triggered in your tenant.
     * @return string|null
    */
    public function getHowToPrevent(): ?string {
        $val = $this->getBackingStore()->get('howToPrevent');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'howToPrevent'");
    }

    /**
     * Gets the isConfigurable property value. true if the alert configuration can be customized in the tenant, and false otherwise. For example, the number and percentage thresholds of the 'There are too many global administrators' alert can be configured by users, while the 'This organization doesn't have Microsoft Entra ID P2' can't be configured, because the criteria are restricted.
     * @return bool|null
    */
    public function getIsConfigurable(): ?bool {
        $val = $this->getBackingStore()->get('isConfigurable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isConfigurable'");
    }

    /**
     * Gets the isRemediatable property value. true if the alert can be remediated, and false otherwise.
     * @return bool|null
    */
    public function getIsRemediatable(): ?bool {
        $val = $this->getBackingStore()->get('isRemediatable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRemediatable'");
    }

    /**
     * Gets the mitigationSteps property value. The methods to mitigate the alert when it's triggered in the tenant. For example, to mitigate the 'There are too many global administrators', you could remove redundant privileged role assignments.
     * @return string|null
    */
    public function getMitigationSteps(): ?string {
        $val = $this->getBackingStore()->get('mitigationSteps');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mitigationSteps'");
    }

    /**
     * Gets the scopeId property value. The identifier of the scope where the alert is related. / is the only supported one for the tenant. Supports $filter (eq, ne).
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
     * Gets the securityImpact property value. Security impact of the alert. For example, it could be information leaks or unauthorized access.
     * @return string|null
    */
    public function getSecurityImpact(): ?string {
        $val = $this->getBackingStore()->get('securityImpact');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityImpact'");
    }

    /**
     * Gets the severityLevel property value. Severity level of the alert. The possible values are: unknown, informational, low, medium, high, unknownFutureValue.
     * @return AlertSeverity|null
    */
    public function getSeverityLevel(): ?AlertSeverity {
        $val = $this->getBackingStore()->get('severityLevel');
        if (is_null($val) || $val instanceof AlertSeverity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severityLevel'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('howToPrevent', $this->getHowToPrevent());
        $writer->writeBooleanValue('isConfigurable', $this->getIsConfigurable());
        $writer->writeBooleanValue('isRemediatable', $this->getIsRemediatable());
        $writer->writeStringValue('mitigationSteps', $this->getMitigationSteps());
        $writer->writeStringValue('scopeId', $this->getScopeId());
        $writer->writeStringValue('scopeType', $this->getScopeType());
        $writer->writeStringValue('securityImpact', $this->getSecurityImpact());
        $writer->writeEnumValue('severityLevel', $this->getSeverityLevel());
    }

    /**
     * Sets the description property value. The description of the alert.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The friendly display name that renders in Privileged Identity Management (PIM) alerts in the Microsoft Entra admin center.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the howToPrevent property value. Long-form text that indicates the ways to prevent the alert from being triggered in your tenant.
     * @param string|null $value Value to set for the howToPrevent property.
    */
    public function setHowToPrevent(?string $value): void {
        $this->getBackingStore()->set('howToPrevent', $value);
    }

    /**
     * Sets the isConfigurable property value. true if the alert configuration can be customized in the tenant, and false otherwise. For example, the number and percentage thresholds of the 'There are too many global administrators' alert can be configured by users, while the 'This organization doesn't have Microsoft Entra ID P2' can't be configured, because the criteria are restricted.
     * @param bool|null $value Value to set for the isConfigurable property.
    */
    public function setIsConfigurable(?bool $value): void {
        $this->getBackingStore()->set('isConfigurable', $value);
    }

    /**
     * Sets the isRemediatable property value. true if the alert can be remediated, and false otherwise.
     * @param bool|null $value Value to set for the isRemediatable property.
    */
    public function setIsRemediatable(?bool $value): void {
        $this->getBackingStore()->set('isRemediatable', $value);
    }

    /**
     * Sets the mitigationSteps property value. The methods to mitigate the alert when it's triggered in the tenant. For example, to mitigate the 'There are too many global administrators', you could remove redundant privileged role assignments.
     * @param string|null $value Value to set for the mitigationSteps property.
    */
    public function setMitigationSteps(?string $value): void {
        $this->getBackingStore()->set('mitigationSteps', $value);
    }

    /**
     * Sets the scopeId property value. The identifier of the scope where the alert is related. / is the only supported one for the tenant. Supports $filter (eq, ne).
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

    /**
     * Sets the securityImpact property value. Security impact of the alert. For example, it could be information leaks or unauthorized access.
     * @param string|null $value Value to set for the securityImpact property.
    */
    public function setSecurityImpact(?string $value): void {
        $this->getBackingStore()->set('securityImpact', $value);
    }

    /**
     * Sets the severityLevel property value. Severity level of the alert. The possible values are: unknown, informational, low, medium, high, unknownFutureValue.
     * @param AlertSeverity|null $value Value to set for the severityLevel property.
    */
    public function setSeverityLevel(?AlertSeverity $value): void {
        $this->getBackingStore()->set('severityLevel', $value);
    }

}
