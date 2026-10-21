<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A policy that governs Copilot Credits consumption for an audience. Every policy is one ofits derived types, identified by @odata.type on create.
*/
class SpendingPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new SpendingPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SpendingPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SpendingPolicy {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.allUsersSpendingPolicy': return new AllUsersSpendingPolicy();
                case '#microsoft.graph.selectedGroupsSpendingPolicy': return new SelectedGroupsSpendingPolicy();
            }
        }
        return new SpendingPolicy();
    }

    /**
     * Gets the billingMethods property value. How Copilot consumption is billed when more than one method may apply. This is a flags enum,so combined values such as prepaidCredits,payAsYouGo are valid.
     * @return CostManagementBillingMethods|null
    */
    public function getBillingMethods(): ?CostManagementBillingMethods {
        $val = $this->getBackingStore()->get('billingMethods');
        if (is_null($val) || $val instanceof CostManagementBillingMethods) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'billingMethods'");
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. When the policy was created. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the displayName property value. The policy display name. Must be 10-64 characters, letters, digits, and spaces only.
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
     * Gets the emailThresholdSettings property value. Notify-only email threshold configuration for the policy. Alerts are delivered by emailonly. Addressed beneath the policy rather than returned inline in the policy response.
     * @return CostManagementAlertSetting|null
    */
    public function getEmailThresholdSettings(): ?CostManagementAlertSetting {
        $val = $this->getBackingStore()->get('emailThresholdSettings');
        if (is_null($val) || $val instanceof CostManagementAlertSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailThresholdSettings'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'billingMethods' => fn(ParseNode $n) => $o->setBillingMethods($n->getEnumValue(CostManagementBillingMethods::class)),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'emailThresholdSettings' => fn(ParseNode $n) => $o->setEmailThresholdSettings($n->getObjectValue([CostManagementAlertSetting::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'periodLimit' => fn(ParseNode $n) => $o->setPeriodLimit($n->getObjectValue([CostManagementQuantity::class, 'createFromDiscriminatorValue'])),
            'perUserLimit' => fn(ParseNode $n) => $o->setPerUserLimit($n->getObjectValue([CostManagementQuantity::class, 'createFromDiscriminatorValue'])),
            'serviceSettings' => fn(ParseNode $n) => $o->setServiceSettings($n->getCollectionOfObjectValues([SpendingPolicyServiceSetting::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SpendingPolicyStatus::class)),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. When the policy was last modified. Read-only.
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
     * Gets the periodLimit property value. A unit-bearing quantity that is either limited to a value or unlimited. Every quantity isone of its derived types, identified by @odata.type on create.
     * @return CostManagementQuantity|null
    */
    public function getPeriodLimit(): ?CostManagementQuantity {
        $val = $this->getBackingStore()->get('periodLimit');
        if (is_null($val) || $val instanceof CostManagementQuantity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'periodLimit'");
    }

    /**
     * Gets the perUserLimit property value. A unit-bearing quantity that is either limited to a value or unlimited. Every quantity isone of its derived types, identified by @odata.type on create.
     * @return CostManagementQuantity|null
    */
    public function getPerUserLimit(): ?CostManagementQuantity {
        $val = $this->getBackingStore()->get('perUserLimit');
        if (is_null($val) || $val instanceof CostManagementQuantity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'perUserLimit'");
    }

    /**
     * Gets the serviceSettings property value. Per-service settings contained by the policy. Add a service with POST; remove one bysetting its state to disabled, which retains the entry in that state.
     * @return array<SpendingPolicyServiceSetting>|null
    */
    public function getServiceSettings(): ?array {
        $val = $this->getBackingStore()->get('serviceSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SpendingPolicyServiceSetting::class);
            /** @var array<SpendingPolicyServiceSetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceSettings'");
    }

    /**
     * Gets the status property value. Lifecycle status of a spending policy.
     * @return SpendingPolicyStatus|null
    */
    public function getStatus(): ?SpendingPolicyStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof SpendingPolicyStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('billingMethods', $this->getBillingMethods());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('emailThresholdSettings', $this->getEmailThresholdSettings());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeObjectValue('periodLimit', $this->getPeriodLimit());
        $writer->writeObjectValue('perUserLimit', $this->getPerUserLimit());
        $writer->writeCollectionOfObjectValues('serviceSettings', $this->getServiceSettings());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the billingMethods property value. How Copilot consumption is billed when more than one method may apply. This is a flags enum,so combined values such as prepaidCredits,payAsYouGo are valid.
     * @param CostManagementBillingMethods|null $value Value to set for the billingMethods property.
    */
    public function setBillingMethods(?CostManagementBillingMethods $value): void {
        $this->getBackingStore()->set('billingMethods', $value);
    }

    /**
     * Sets the createdBy property value. The createdBy property
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. When the policy was created. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The policy display name. Must be 10-64 characters, letters, digits, and spaces only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the emailThresholdSettings property value. Notify-only email threshold configuration for the policy. Alerts are delivered by emailonly. Addressed beneath the policy rather than returned inline in the policy response.
     * @param CostManagementAlertSetting|null $value Value to set for the emailThresholdSettings property.
    */
    public function setEmailThresholdSettings(?CostManagementAlertSetting $value): void {
        $this->getBackingStore()->set('emailThresholdSettings', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. When the policy was last modified. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the periodLimit property value. A unit-bearing quantity that is either limited to a value or unlimited. Every quantity isone of its derived types, identified by @odata.type on create.
     * @param CostManagementQuantity|null $value Value to set for the periodLimit property.
    */
    public function setPeriodLimit(?CostManagementQuantity $value): void {
        $this->getBackingStore()->set('periodLimit', $value);
    }

    /**
     * Sets the perUserLimit property value. A unit-bearing quantity that is either limited to a value or unlimited. Every quantity isone of its derived types, identified by @odata.type on create.
     * @param CostManagementQuantity|null $value Value to set for the perUserLimit property.
    */
    public function setPerUserLimit(?CostManagementQuantity $value): void {
        $this->getBackingStore()->set('perUserLimit', $value);
    }

    /**
     * Sets the serviceSettings property value. Per-service settings contained by the policy. Add a service with POST; remove one bysetting its state to disabled, which retains the entry in that state.
     * @param array<SpendingPolicyServiceSetting>|null $value Value to set for the serviceSettings property.
    */
    public function setServiceSettings(?array $value): void {
        $this->getBackingStore()->set('serviceSettings', $value);
    }

    /**
     * Sets the status property value. Lifecycle status of a spending policy.
     * @param SpendingPolicyStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SpendingPolicyStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
