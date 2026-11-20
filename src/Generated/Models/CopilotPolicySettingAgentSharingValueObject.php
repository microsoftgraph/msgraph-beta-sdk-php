<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The value of an agent sharing policy setting.
*/
class CopilotPolicySettingAgentSharingValueObject extends CopilotPolicySettingValueObject implements Parsable 
{
    /**
     * Instantiates a new CopilotPolicySettingAgentSharingValueObject and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.copilotPolicySettingAgentSharingValueObject');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotPolicySettingAgentSharingValueObject
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotPolicySettingAgentSharingValueObject {
        return new CopilotPolicySettingAgentSharingValueObject();
    }

    /**
     * Gets the agentSharingLimit property value. The supported range and default value for an agent sharing limit.
     * @return CopilotPolicySettingAgentSharingLimit|null
    */
    public function getAgentSharingLimit(): ?CopilotPolicySettingAgentSharingLimit {
        $val = $this->getBackingStore()->get('agentSharingLimit');
        if (is_null($val) || $val instanceof CopilotPolicySettingAgentSharingLimit) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentSharingLimit'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentSharingLimit' => fn(ParseNode $n) => $o->setAgentSharingLimit($n->getObjectValue([CopilotPolicySettingAgentSharingLimit::class, 'createFromDiscriminatorValue'])),
            'isSharingWithGroupsEnabled' => fn(ParseNode $n) => $o->setIsSharingWithGroupsEnabled($n->getBooleanValue()),
            'isUserSharingLimitEnabled' => fn(ParseNode $n) => $o->setIsUserSharingLimitEnabled($n->getBooleanValue()),
            'organizationWideSharingAssignment' => fn(ParseNode $n) => $o->setOrganizationWideSharingAssignment($n->getObjectValue([CopilotPolicySettingUserAssignment::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isSharingWithGroupsEnabled property value. Indicates whether sharing agents with groups is enabled.
     * @return bool|null
    */
    public function getIsSharingWithGroupsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isSharingWithGroupsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSharingWithGroupsEnabled'");
    }

    /**
     * Gets the isUserSharingLimitEnabled property value. Indicates whether the per-user agent sharing limit is enabled.
     * @return bool|null
    */
    public function getIsUserSharingLimitEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isUserSharingLimitEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isUserSharingLimitEnabled'");
    }

    /**
     * Gets the organizationWideSharingAssignment property value. The users and groups selected by a Copilot policy setting.
     * @return CopilotPolicySettingUserAssignment|null
    */
    public function getOrganizationWideSharingAssignment(): ?CopilotPolicySettingUserAssignment {
        $val = $this->getBackingStore()->get('organizationWideSharingAssignment');
        if (is_null($val) || $val instanceof CopilotPolicySettingUserAssignment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationWideSharingAssignment'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('agentSharingLimit', $this->getAgentSharingLimit());
        $writer->writeBooleanValue('isSharingWithGroupsEnabled', $this->getIsSharingWithGroupsEnabled());
        $writer->writeBooleanValue('isUserSharingLimitEnabled', $this->getIsUserSharingLimitEnabled());
        $writer->writeObjectValue('organizationWideSharingAssignment', $this->getOrganizationWideSharingAssignment());
    }

    /**
     * Sets the agentSharingLimit property value. The supported range and default value for an agent sharing limit.
     * @param CopilotPolicySettingAgentSharingLimit|null $value Value to set for the agentSharingLimit property.
    */
    public function setAgentSharingLimit(?CopilotPolicySettingAgentSharingLimit $value): void {
        $this->getBackingStore()->set('agentSharingLimit', $value);
    }

    /**
     * Sets the isSharingWithGroupsEnabled property value. Indicates whether sharing agents with groups is enabled.
     * @param bool|null $value Value to set for the isSharingWithGroupsEnabled property.
    */
    public function setIsSharingWithGroupsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSharingWithGroupsEnabled', $value);
    }

    /**
     * Sets the isUserSharingLimitEnabled property value. Indicates whether the per-user agent sharing limit is enabled.
     * @param bool|null $value Value to set for the isUserSharingLimitEnabled property.
    */
    public function setIsUserSharingLimitEnabled(?bool $value): void {
        $this->getBackingStore()->set('isUserSharingLimitEnabled', $value);
    }

    /**
     * Sets the organizationWideSharingAssignment property value. The users and groups selected by a Copilot policy setting.
     * @param CopilotPolicySettingUserAssignment|null $value Value to set for the organizationWideSharingAssignment property.
    */
    public function setOrganizationWideSharingAssignment(?CopilotPolicySettingUserAssignment $value): void {
        $this->getBackingStore()->set('organizationWideSharingAssignment', $value);
    }

}
