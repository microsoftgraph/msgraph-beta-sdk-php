<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityBaselineState extends Entity implements Parsable 
{
    /**
     * Instantiates a new securityBaselineState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityBaselineState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityBaselineState {
        return new SecurityBaselineState();
    }

    /**
     * Gets the displayName property value. The display name of the security baseline
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
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'securityBaselineTemplateId' => fn(ParseNode $n) => $o->setSecurityBaselineTemplateId($n->getStringValue()),
            'settingStates' => fn(ParseNode $n) => $o->setSettingStates($n->getCollectionOfObjectValues([SecurityBaselineSettingState::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(SecurityBaselineComplianceState::class)),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the securityBaselineTemplateId property value. The security baseline template id
     * @return string|null
    */
    public function getSecurityBaselineTemplateId(): ?string {
        return $this->getBackingStore()->get('securityBaselineTemplateId');
    }

    /**
     * Gets the settingStates property value. The security baseline state for different settings for a device
     * @return array<SecurityBaselineSettingState>|null
    */
    public function getSettingStates(): ?array {
        return $this->getBackingStore()->get('settingStates');
    }

    /**
     * Gets the state property value. Security Baseline Compliance State
     * @return SecurityBaselineComplianceState|null
    */
    public function getState(): ?SecurityBaselineComplianceState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('securityBaselineTemplateId', $this->getSecurityBaselineTemplateId());
        $writer->writeCollectionOfObjectValues('settingStates', $this->getSettingStates());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the displayName property value. The display name of the security baseline
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the securityBaselineTemplateId property value. The security baseline template id
     *  @param string|null $value Value to set for the securityBaselineTemplateId property.
    */
    public function setSecurityBaselineTemplateId(?string $value): void {
        $this->getBackingStore()->set('securityBaselineTemplateId', $value);
    }

    /**
     * Sets the settingStates property value. The security baseline state for different settings for a device
     *  @param array<SecurityBaselineSettingState>|null $value Value to set for the settingStates property.
    */
    public function setSettingStates(?array $value): void {
        $this->getBackingStore()->set('settingStates', $value);
    }

    /**
     * Sets the state property value. Security Baseline Compliance State
     *  @param SecurityBaselineComplianceState|null $value Value to set for the state property.
    */
    public function setState(?SecurityBaselineComplianceState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
