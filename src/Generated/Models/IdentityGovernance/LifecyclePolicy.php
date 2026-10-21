<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\DirectoryObject;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\SubjectSet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class LifecyclePolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new LifecyclePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LifecyclePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LifecyclePolicy {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.identityGovernance.agentIdentityLifecyclePolicy': return new AgentIdentityLifecyclePolicy();
                case '#microsoft.graph.identityGovernance.guestLifecyclePolicy': return new GuestLifecyclePolicy();
            }
        }
        return new LifecyclePolicy();
    }

    /**
     * Gets the createdBy property value. The user or service principal that created the policy.
     * @return DirectoryObject|null
    */
    public function getCreatedBy(): ?DirectoryObject {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof DirectoryObject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the policy was created.
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
     * Gets the description property value. The description of the policy.
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
     * Gets the displayName property value. The display name of the policy.
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
     * Gets the enforcementAction property value. The enforcementAction property
     * @return LifecyclePolicyEnforcementAction|null
    */
    public function getEnforcementAction(): ?LifecyclePolicyEnforcementAction {
        $val = $this->getBackingStore()->get('enforcementAction');
        if (is_null($val) || $val instanceof LifecyclePolicyEnforcementAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enforcementAction'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enforcementAction' => fn(ParseNode $n) => $o->setEnforcementAction($n->getObjectValue([LifecyclePolicyEnforcementAction::class, 'createFromDiscriminatorValue'])),
            'gracePeriodInDays' => fn(ParseNode $n) => $o->setGracePeriodInDays($n->getIntegerValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'notificationSchedule' => fn(ParseNode $n) => $o->setNotificationSchedule($n->getObjectValue([LifecyclePolicyNotificationSettings::class, 'createFromDiscriminatorValue'])),
            'policySource' => fn(ParseNode $n) => $o->setPolicySource($n->getEnumValue(LifecyclePolicySource::class)),
            'report' => fn(ParseNode $n) => $o->setReport($n->getObjectValue([LifecyclePolicyReport::class, 'createFromDiscriminatorValue'])),
            'rules' => fn(ParseNode $n) => $o->setRules($n->getCollectionOfObjectValues([LifecyclePolicyRule::class, 'createFromDiscriminatorValue'])),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getObjectValue([SubjectSet::class, 'createFromDiscriminatorValue'])),
            'versionNumber' => fn(ParseNode $n) => $o->setVersionNumber($n->getIntegerValue()),
            'versions' => fn(ParseNode $n) => $o->setVersions($n->getCollectionOfObjectValues([LifecyclePolicy::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the gracePeriodInDays property value. The number of days after an identity becomes non-compliant before the enforcement action is applied.
     * @return int|null
    */
    public function getGracePeriodInDays(): ?int {
        $val = $this->getBackingStore()->get('gracePeriodInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gracePeriodInDays'");
    }

    /**
     * Gets the isEnabled property value. Indicates whether the policy is enabled and actively evaluated.
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
     * Gets the lastModifiedBy property value. The user or service principal that last modified the policy.
     * @return DirectoryObject|null
    */
    public function getLastModifiedBy(): ?DirectoryObject {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof DirectoryObject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the policy was last modified.
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
     * Gets the notificationSchedule property value. The notification settings for the policy, including the offsets, in days after non-compliance, at which notifications are sent.
     * @return LifecyclePolicyNotificationSettings|null
    */
    public function getNotificationSchedule(): ?LifecyclePolicyNotificationSettings {
        $val = $this->getBackingStore()->get('notificationSchedule');
        if (is_null($val) || $val instanceof LifecyclePolicyNotificationSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationSchedule'");
    }

    /**
     * Gets the policySource property value. The policySource property
     * @return LifecyclePolicySource|null
    */
    public function getPolicySource(): ?LifecyclePolicySource {
        $val = $this->getBackingStore()->get('policySource');
        if (is_null($val) || $val instanceof LifecyclePolicySource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policySource'");
    }

    /**
     * Gets the report property value. The latest processing report for the policy.
     * @return LifecyclePolicyReport|null
    */
    public function getReport(): ?LifecyclePolicyReport {
        $val = $this->getBackingStore()->get('report');
        if (is_null($val) || $val instanceof LifecyclePolicyReport) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'report'");
    }

    /**
     * Gets the rules property value. The collection of inline compliance rules evaluated for the policy. Rules are combined with AND logic. A maximum of 10 rules are allowed per policy.
     * @return array<LifecyclePolicyRule>|null
    */
    public function getRules(): ?array {
        $val = $this->getBackingStore()->get('rules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LifecyclePolicyRule::class);
            /** @var array<LifecyclePolicyRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rules'");
    }

    /**
     * Gets the scope property value. The set of subjects that the policy applies to. For example, use an allExcludingGroupsSubjectSet to exclude specific groups from evaluation.
     * @return SubjectSet|null
    */
    public function getScope(): ?SubjectSet {
        $val = $this->getBackingStore()->get('scope');
        if (is_null($val) || $val instanceof SubjectSet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scope'");
    }

    /**
     * Gets the versionNumber property value. The version number of the policy, which increments each time the policy is updated.
     * @return int|null
    */
    public function getVersionNumber(): ?int {
        $val = $this->getBackingStore()->get('versionNumber');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versionNumber'");
    }

    /**
     * Gets the versions property value. The collection of previous versions of the policy.
     * @return array<LifecyclePolicy>|null
    */
    public function getVersions(): ?array {
        $val = $this->getBackingStore()->get('versions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LifecyclePolicy::class);
            /** @var array<LifecyclePolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('enforcementAction', $this->getEnforcementAction());
        $writer->writeIntegerValue('gracePeriodInDays', $this->getGracePeriodInDays());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('notificationSchedule', $this->getNotificationSchedule());
        $writer->writeEnumValue('policySource', $this->getPolicySource());
        $writer->writeObjectValue('report', $this->getReport());
        $writer->writeCollectionOfObjectValues('rules', $this->getRules());
        $writer->writeObjectValue('scope', $this->getScope());
        $writer->writeIntegerValue('versionNumber', $this->getVersionNumber());
        $writer->writeCollectionOfObjectValues('versions', $this->getVersions());
    }

    /**
     * Sets the createdBy property value. The user or service principal that created the policy.
     * @param DirectoryObject|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?DirectoryObject $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the policy was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description of the policy.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the policy.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enforcementAction property value. The enforcementAction property
     * @param LifecyclePolicyEnforcementAction|null $value Value to set for the enforcementAction property.
    */
    public function setEnforcementAction(?LifecyclePolicyEnforcementAction $value): void {
        $this->getBackingStore()->set('enforcementAction', $value);
    }

    /**
     * Sets the gracePeriodInDays property value. The number of days after an identity becomes non-compliant before the enforcement action is applied.
     * @param int|null $value Value to set for the gracePeriodInDays property.
    */
    public function setGracePeriodInDays(?int $value): void {
        $this->getBackingStore()->set('gracePeriodInDays', $value);
    }

    /**
     * Sets the isEnabled property value. Indicates whether the policy is enabled and actively evaluated.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The user or service principal that last modified the policy.
     * @param DirectoryObject|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?DirectoryObject $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the policy was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the notificationSchedule property value. The notification settings for the policy, including the offsets, in days after non-compliance, at which notifications are sent.
     * @param LifecyclePolicyNotificationSettings|null $value Value to set for the notificationSchedule property.
    */
    public function setNotificationSchedule(?LifecyclePolicyNotificationSettings $value): void {
        $this->getBackingStore()->set('notificationSchedule', $value);
    }

    /**
     * Sets the policySource property value. The policySource property
     * @param LifecyclePolicySource|null $value Value to set for the policySource property.
    */
    public function setPolicySource(?LifecyclePolicySource $value): void {
        $this->getBackingStore()->set('policySource', $value);
    }

    /**
     * Sets the report property value. The latest processing report for the policy.
     * @param LifecyclePolicyReport|null $value Value to set for the report property.
    */
    public function setReport(?LifecyclePolicyReport $value): void {
        $this->getBackingStore()->set('report', $value);
    }

    /**
     * Sets the rules property value. The collection of inline compliance rules evaluated for the policy. Rules are combined with AND logic. A maximum of 10 rules are allowed per policy.
     * @param array<LifecyclePolicyRule>|null $value Value to set for the rules property.
    */
    public function setRules(?array $value): void {
        $this->getBackingStore()->set('rules', $value);
    }

    /**
     * Sets the scope property value. The set of subjects that the policy applies to. For example, use an allExcludingGroupsSubjectSet to exclude specific groups from evaluation.
     * @param SubjectSet|null $value Value to set for the scope property.
    */
    public function setScope(?SubjectSet $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

    /**
     * Sets the versionNumber property value. The version number of the policy, which increments each time the policy is updated.
     * @param int|null $value Value to set for the versionNumber property.
    */
    public function setVersionNumber(?int $value): void {
        $this->getBackingStore()->set('versionNumber', $value);
    }

    /**
     * Sets the versions property value. The collection of previous versions of the policy.
     * @param array<LifecyclePolicy>|null $value Value to set for the versions property.
    */
    public function setVersions(?array $value): void {
        $this->getBackingStore()->set('versions', $value);
    }

}
