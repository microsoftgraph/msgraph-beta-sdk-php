<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The value of the microsoft.agent.allowedagenttypes policy setting.
*/
class CopilotPolicySettingAllowedAgentTypesValueObject extends CopilotPolicySettingValueObject implements Parsable 
{
    /**
     * Instantiates a new CopilotPolicySettingAllowedAgentTypesValueObject and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.copilotPolicySettingAllowedAgentTypesValueObject');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotPolicySettingAllowedAgentTypesValueObject
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotPolicySettingAllowedAgentTypesValueObject {
        return new CopilotPolicySettingAllowedAgentTypesValueObject();
    }

    /**
     * Gets the areISVAppsAllowed property value. Indicates whether independent software vendor (ISV) apps are allowed.
     * @return bool|null
    */
    public function getAreISVAppsAllowed(): ?bool {
        $val = $this->getBackingStore()->get('areISVAppsAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'areISVAppsAllowed'");
    }

    /**
     * Gets the areMicrosoftAppsAllowed property value. Indicates whether Microsoft apps are allowed.
     * @return bool|null
    */
    public function getAreMicrosoftAppsAllowed(): ?bool {
        $val = $this->getBackingStore()->get('areMicrosoftAppsAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'areMicrosoftAppsAllowed'");
    }

    /**
     * Gets the areMicrosoftCertifiedThirdPartyAppsAllowed property value. Indicates whether Microsoft-certified third-party apps are allowed.
     * @return bool|null
    */
    public function getAreMicrosoftCertifiedThirdPartyAppsAllowed(): ?bool {
        $val = $this->getBackingStore()->get('areMicrosoftCertifiedThirdPartyAppsAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'areMicrosoftCertifiedThirdPartyAppsAllowed'");
    }

    /**
     * Gets the areTenantScopedAppsAllowed property value. Indicates whether tenant-scoped apps are allowed.
     * @return bool|null
    */
    public function getAreTenantScopedAppsAllowed(): ?bool {
        $val = $this->getBackingStore()->get('areTenantScopedAppsAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'areTenantScopedAppsAllowed'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'areISVAppsAllowed' => fn(ParseNode $n) => $o->setAreISVAppsAllowed($n->getBooleanValue()),
            'areMicrosoftAppsAllowed' => fn(ParseNode $n) => $o->setAreMicrosoftAppsAllowed($n->getBooleanValue()),
            'areMicrosoftCertifiedThirdPartyAppsAllowed' => fn(ParseNode $n) => $o->setAreMicrosoftCertifiedThirdPartyAppsAllowed($n->getBooleanValue()),
            'areTenantScopedAppsAllowed' => fn(ParseNode $n) => $o->setAreTenantScopedAppsAllowed($n->getBooleanValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('areISVAppsAllowed', $this->getAreISVAppsAllowed());
        $writer->writeBooleanValue('areMicrosoftAppsAllowed', $this->getAreMicrosoftAppsAllowed());
        $writer->writeBooleanValue('areMicrosoftCertifiedThirdPartyAppsAllowed', $this->getAreMicrosoftCertifiedThirdPartyAppsAllowed());
        $writer->writeBooleanValue('areTenantScopedAppsAllowed', $this->getAreTenantScopedAppsAllowed());
    }

    /**
     * Sets the areISVAppsAllowed property value. Indicates whether independent software vendor (ISV) apps are allowed.
     * @param bool|null $value Value to set for the areISVAppsAllowed property.
    */
    public function setAreISVAppsAllowed(?bool $value): void {
        $this->getBackingStore()->set('areISVAppsAllowed', $value);
    }

    /**
     * Sets the areMicrosoftAppsAllowed property value. Indicates whether Microsoft apps are allowed.
     * @param bool|null $value Value to set for the areMicrosoftAppsAllowed property.
    */
    public function setAreMicrosoftAppsAllowed(?bool $value): void {
        $this->getBackingStore()->set('areMicrosoftAppsAllowed', $value);
    }

    /**
     * Sets the areMicrosoftCertifiedThirdPartyAppsAllowed property value. Indicates whether Microsoft-certified third-party apps are allowed.
     * @param bool|null $value Value to set for the areMicrosoftCertifiedThirdPartyAppsAllowed property.
    */
    public function setAreMicrosoftCertifiedThirdPartyAppsAllowed(?bool $value): void {
        $this->getBackingStore()->set('areMicrosoftCertifiedThirdPartyAppsAllowed', $value);
    }

    /**
     * Sets the areTenantScopedAppsAllowed property value. Indicates whether tenant-scoped apps are allowed.
     * @param bool|null $value Value to set for the areTenantScopedAppsAllowed property.
    */
    public function setAreTenantScopedAppsAllowed(?bool $value): void {
        $this->getBackingStore()->set('areTenantScopedAppsAllowed', $value);
    }

}
