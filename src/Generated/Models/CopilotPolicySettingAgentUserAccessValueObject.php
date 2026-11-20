<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The value of an agent user access policy setting.
*/
class CopilotPolicySettingAgentUserAccessValueObject extends CopilotPolicySettingValueObject implements Parsable 
{
    /**
     * Instantiates a new CopilotPolicySettingAgentUserAccessValueObject and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.copilotPolicySettingAgentUserAccessValueObject');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotPolicySettingAgentUserAccessValueObject
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotPolicySettingAgentUserAccessValueObject {
        return new CopilotPolicySettingAgentUserAccessValueObject();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([CopilotPolicySettingAssignmentMember::class, 'createFromDiscriminatorValue'])),
            'userAssignmentCategory' => fn(ParseNode $n) => $o->setUserAssignmentCategory($n->getEnumValue(CopilotPolicySettingUserAssignmentCategory::class)),
        ]);
    }

    /**
     * Gets the members property value. Users and groups explicitly granted access.
     * @return array<CopilotPolicySettingAssignmentMember>|null
    */
    public function getMembers(): ?array {
        $val = $this->getBackingStore()->get('members');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CopilotPolicySettingAssignmentMember::class);
            /** @var array<CopilotPolicySettingAssignmentMember>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'members'");
    }

    /**
     * Gets the userAssignmentCategory property value. The category that determines which users are assigned by a Copilot policy setting.
     * @return CopilotPolicySettingUserAssignmentCategory|null
    */
    public function getUserAssignmentCategory(): ?CopilotPolicySettingUserAssignmentCategory {
        $val = $this->getBackingStore()->get('userAssignmentCategory');
        if (is_null($val) || $val instanceof CopilotPolicySettingUserAssignmentCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAssignmentCategory'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeEnumValue('userAssignmentCategory', $this->getUserAssignmentCategory());
    }

    /**
     * Sets the members property value. Users and groups explicitly granted access.
     * @param array<CopilotPolicySettingAssignmentMember>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the userAssignmentCategory property value. The category that determines which users are assigned by a Copilot policy setting.
     * @param CopilotPolicySettingUserAssignmentCategory|null $value Value to set for the userAssignmentCategory property.
    */
    public function setUserAssignmentCategory(?CopilotPolicySettingUserAssignmentCategory $value): void {
        $this->getBackingStore()->set('userAssignmentCategory', $value);
    }

}
