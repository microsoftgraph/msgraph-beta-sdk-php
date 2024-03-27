<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The OperationApprovalPolicy entity allows an administrator to configure which operations require admin approval and the set of admins who can perform that approval. Creating a policy enables the multiple admin approval service to catch requests which are targeted by the specific policy type defined.
*/
class OperationApprovalPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new OperationApprovalPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OperationApprovalPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OperationApprovalPolicy {
        return new OperationApprovalPolicy();
    }

    /**
     * Gets the approverGroupIds property value. The Microsoft Entra ID (Azure AD) security group IDs for the approvers for the policy. This property is required when the policy is created, and is defined by the user to define the possible approvers for the policy.
     * @return array<string>|null
    */
    public function getApproverGroupIds(): ?array {
        $val = $this->getBackingStore()->get('approverGroupIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approverGroupIds'");
    }

    /**
     * Gets the description property value. Indicates the description of the policy. Maximum length of the description is 1024 characters. This property is not required, but can be used by the user to describe the policy.
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
     * Gets the displayName property value. Indicates the display name of the policy. Maximum length of the display name is 128 characters. This property is required when the policy is created, and is defined by the user to identify the policy.
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
            'approverGroupIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setApproverGroupIds($val);
            },
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'policyPlatform' => fn(ParseNode $n) => $o->setPolicyPlatform($n->getEnumValue(OperationApprovalPolicyPlatform::class)),
            'policySet' => fn(ParseNode $n) => $o->setPolicySet($n->getObjectValue([OperationApprovalPolicySet::class, 'createFromDiscriminatorValue'])),
            'policyType' => fn(ParseNode $n) => $o->setPolicyType($n->getEnumValue(OperationApprovalPolicyType::class)),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Indicates the last DateTime that the policy was modified. The value cannot be modified and is automatically populated whenever values in the request are updated. For example, when the 'policyType' property changes from apps to scripts. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only. This property is read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the policyPlatform property value. The set of available platforms for the OperationApprovalPolicy. Allows configuration of a policy to specific platform(s) for approval. If no specific platform is required or applicable, the platform is `notApplicable`.
     * @return OperationApprovalPolicyPlatform|null
    */
    public function getPolicyPlatform(): ?OperationApprovalPolicyPlatform {
        $val = $this->getBackingStore()->get('policyPlatform');
        if (is_null($val) || $val instanceof OperationApprovalPolicyPlatform) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyPlatform'");
    }

    /**
     * Gets the policySet property value. Indicates areas of the Intune UX that could support MAA UX for the current logged in user. This property is required, and is defined by the user in order to correctly show the expected experience.
     * @return OperationApprovalPolicySet|null
    */
    public function getPolicySet(): ?OperationApprovalPolicySet {
        $val = $this->getBackingStore()->get('policySet');
        if (is_null($val) || $val instanceof OperationApprovalPolicySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policySet'");
    }

    /**
     * Gets the policyType property value. The set of available policy types that can be configured for approval. There is no default value for this enum, indicating that the policy type must always be chosen.
     * @return OperationApprovalPolicyType|null
    */
    public function getPolicyType(): ?OperationApprovalPolicyType {
        $val = $this->getBackingStore()->get('policyType');
        if (is_null($val) || $val instanceof OperationApprovalPolicyType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('approverGroupIds', $this->getApproverGroupIds());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('policyPlatform', $this->getPolicyPlatform());
        $writer->writeObjectValue('policySet', $this->getPolicySet());
        $writer->writeEnumValue('policyType', $this->getPolicyType());
    }

    /**
     * Sets the approverGroupIds property value. The Microsoft Entra ID (Azure AD) security group IDs for the approvers for the policy. This property is required when the policy is created, and is defined by the user to define the possible approvers for the policy.
     * @param array<string>|null $value Value to set for the approverGroupIds property.
    */
    public function setApproverGroupIds(?array $value): void {
        $this->getBackingStore()->set('approverGroupIds', $value);
    }

    /**
     * Sets the description property value. Indicates the description of the policy. Maximum length of the description is 1024 characters. This property is not required, but can be used by the user to describe the policy.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Indicates the display name of the policy. Maximum length of the display name is 128 characters. This property is required when the policy is created, and is defined by the user to identify the policy.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Indicates the last DateTime that the policy was modified. The value cannot be modified and is automatically populated whenever values in the request are updated. For example, when the 'policyType' property changes from apps to scripts. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. Read-only. This property is read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the policyPlatform property value. The set of available platforms for the OperationApprovalPolicy. Allows configuration of a policy to specific platform(s) for approval. If no specific platform is required or applicable, the platform is `notApplicable`.
     * @param OperationApprovalPolicyPlatform|null $value Value to set for the policyPlatform property.
    */
    public function setPolicyPlatform(?OperationApprovalPolicyPlatform $value): void {
        $this->getBackingStore()->set('policyPlatform', $value);
    }

    /**
     * Sets the policySet property value. Indicates areas of the Intune UX that could support MAA UX for the current logged in user. This property is required, and is defined by the user in order to correctly show the expected experience.
     * @param OperationApprovalPolicySet|null $value Value to set for the policySet property.
    */
    public function setPolicySet(?OperationApprovalPolicySet $value): void {
        $this->getBackingStore()->set('policySet', $value);
    }

    /**
     * Sets the policyType property value. The set of available policy types that can be configured for approval. There is no default value for this enum, indicating that the policy type must always be chosen.
     * @param OperationApprovalPolicyType|null $value Value to set for the policyType property.
    */
    public function setPolicyType(?OperationApprovalPolicyType $value): void {
        $this->getBackingStore()->set('policyType', $value);
    }

}
