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
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
     * Gets the howToPrevent property value. The howToPrevent property
     * @return string|null
    */
    public function getHowToPrevent(): ?string {
        return $this->getBackingStore()->get('howToPrevent');
    }

    /**
     * Gets the isConfigurable property value. The isConfigurable property
     * @return bool|null
    */
    public function getIsConfigurable(): ?bool {
        return $this->getBackingStore()->get('isConfigurable');
    }

    /**
     * Gets the isRemediatable property value. The isRemediatable property
     * @return bool|null
    */
    public function getIsRemediatable(): ?bool {
        return $this->getBackingStore()->get('isRemediatable');
    }

    /**
     * Gets the mitigationSteps property value. The mitigationSteps property
     * @return string|null
    */
    public function getMitigationSteps(): ?string {
        return $this->getBackingStore()->get('mitigationSteps');
    }

    /**
     * Gets the scopeId property value. The scopeId property
     * @return string|null
    */
    public function getScopeId(): ?string {
        return $this->getBackingStore()->get('scopeId');
    }

    /**
     * Gets the scopeType property value. The scopeType property
     * @return string|null
    */
    public function getScopeType(): ?string {
        return $this->getBackingStore()->get('scopeType');
    }

    /**
     * Gets the securityImpact property value. The securityImpact property
     * @return string|null
    */
    public function getSecurityImpact(): ?string {
        return $this->getBackingStore()->get('securityImpact');
    }

    /**
     * Gets the severityLevel property value. The severityLevel property
     * @return AlertSeverity|null
    */
    public function getSeverityLevel(): ?AlertSeverity {
        return $this->getBackingStore()->get('severityLevel');
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
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the howToPrevent property value. The howToPrevent property
     * @param string|null $value Value to set for the howToPrevent property.
    */
    public function setHowToPrevent(?string $value): void {
        $this->getBackingStore()->set('howToPrevent', $value);
    }

    /**
     * Sets the isConfigurable property value. The isConfigurable property
     * @param bool|null $value Value to set for the isConfigurable property.
    */
    public function setIsConfigurable(?bool $value): void {
        $this->getBackingStore()->set('isConfigurable', $value);
    }

    /**
     * Sets the isRemediatable property value. The isRemediatable property
     * @param bool|null $value Value to set for the isRemediatable property.
    */
    public function setIsRemediatable(?bool $value): void {
        $this->getBackingStore()->set('isRemediatable', $value);
    }

    /**
     * Sets the mitigationSteps property value. The mitigationSteps property
     * @param string|null $value Value to set for the mitigationSteps property.
    */
    public function setMitigationSteps(?string $value): void {
        $this->getBackingStore()->set('mitigationSteps', $value);
    }

    /**
     * Sets the scopeId property value. The scopeId property
     * @param string|null $value Value to set for the scopeId property.
    */
    public function setScopeId(?string $value): void {
        $this->getBackingStore()->set('scopeId', $value);
    }

    /**
     * Sets the scopeType property value. The scopeType property
     * @param string|null $value Value to set for the scopeType property.
    */
    public function setScopeType(?string $value): void {
        $this->getBackingStore()->set('scopeType', $value);
    }

    /**
     * Sets the securityImpact property value. The securityImpact property
     * @param string|null $value Value to set for the securityImpact property.
    */
    public function setSecurityImpact(?string $value): void {
        $this->getBackingStore()->set('securityImpact', $value);
    }

    /**
     * Sets the severityLevel property value. The severityLevel property
     * @param AlertSeverity|null $value Value to set for the severityLevel property.
    */
    public function setSeverityLevel(?AlertSeverity $value): void {
        $this->getBackingStore()->set('severityLevel', $value);
    }

}
