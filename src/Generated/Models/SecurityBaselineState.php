<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityBaselineState extends Entity 
{
    /** @var string|null $displayName The display name of the security baseline */
    private ?string $displayName = null;
    
    /** @var string|null $securityBaselineTemplateId The security baseline template id */
    private ?string $securityBaselineTemplateId = null;
    
    /** @var array<SecurityBaselineSettingState>|null $settingStates The security baseline state for different settings for a device */
    private ?array $settingStates = null;
    
    /** @var SecurityBaselineComplianceState|null $state Security baseline compliance state */
    private ?SecurityBaselineComplianceState $state = null;
    
    /** @var string|null $userPrincipalName User Principal Name */
    private ?string $userPrincipalName = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): SecurityBaselineState {
        return new SecurityBaselineState();
    }

    /**
     * Gets the displayName property value. The display name of the security baseline
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'securityBaselineTemplateId' => function (self $o, ParseNode $n) { $o->setSecurityBaselineTemplateId($n->getStringValue()); },
            'settingStates' => function (self $o, ParseNode $n) { $o->setSettingStates($n->getCollectionOfObjectValues(SecurityBaselineSettingState::class)); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getEnumValue(SecurityBaselineComplianceState::class)); },
            'userPrincipalName' => function (self $o, ParseNode $n) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the securityBaselineTemplateId property value. The security baseline template id
     * @return string|null
    */
    public function getSecurityBaselineTemplateId(): ?string {
        return $this->securityBaselineTemplateId;
    }

    /**
     * Gets the settingStates property value. The security baseline state for different settings for a device
     * @return array<SecurityBaselineSettingState>|null
    */
    public function getSettingStates(): ?array {
        return $this->settingStates;
    }

    /**
     * Gets the state property value. Security baseline compliance state
     * @return SecurityBaselineComplianceState|null
    */
    public function getState(): ?SecurityBaselineComplianceState {
        return $this->state;
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('securityBaselineTemplateId', $this->securityBaselineTemplateId);
        $writer->writeCollectionOfObjectValues('settingStates', $this->settingStates);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the displayName property value. The display name of the security baseline
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the securityBaselineTemplateId property value. The security baseline template id
     *  @param string|null $value Value to set for the securityBaselineTemplateId property.
    */
    public function setSecurityBaselineTemplateId(?string $value ): void {
        $this->securityBaselineTemplateId = $value;
    }

    /**
     * Sets the settingStates property value. The security baseline state for different settings for a device
     *  @param array<SecurityBaselineSettingState>|null $value Value to set for the settingStates property.
    */
    public function setSettingStates(?array $value ): void {
        $this->settingStates = $value;
    }

    /**
     * Sets the state property value. Security baseline compliance state
     *  @param SecurityBaselineComplianceState|null $value Value to set for the state property.
    */
    public function setState(?SecurityBaselineComplianceState $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
