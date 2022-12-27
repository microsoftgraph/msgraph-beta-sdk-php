<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AlertRule extends Entity implements Parsable 
{
    /**
     * Instantiates a new alertRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlertRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlertRule {
        return new AlertRule();
    }

    /**
     * Gets the alertRuleTemplate property value. The rule template of the alert event. The possible values are: cloudPcProvisionScenario, cloudPcImageUploadScenario, cloudPcOnPremiseNetworkConnectionCheckScenario, unknownFutureValue.
     * @return AlertRuleTemplate|null
    */
    public function getAlertRuleTemplate(): ?AlertRuleTemplate {
        return $this->getBackingStore()->get('alertRuleTemplate');
    }

    /**
     * Gets the description property value. The rule description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The display name of the rule.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the enabled property value. The status of the rule that indicates whether the rule is enabled or disabled. If true, the rule is enabled; otherwise, the rule is disabled.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->getBackingStore()->get('enabled');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alertRuleTemplate' => fn(ParseNode $n) => $o->setAlertRuleTemplate($n->getEnumValue(AlertRuleTemplate::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'isSystemRule' => fn(ParseNode $n) => $o->setIsSystemRule($n->getBooleanValue()),
            'notificationChannels' => fn(ParseNode $n) => $o->setNotificationChannels($n->getCollectionOfObjectValues([NotificationChannel::class, 'createFromDiscriminatorValue'])),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(RuleSeverityType::class)),
            'threshold' => fn(ParseNode $n) => $o->setThreshold($n->getObjectValue([RuleThreshold::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isSystemRule property value. Indicates whether the rule is a system rule. If true, the rule is a system rule; otherwise, the rule is a custom defined rule and can be edited. System rules are built-in and only a few properties can be edited.
     * @return bool|null
    */
    public function getIsSystemRule(): ?bool {
        return $this->getBackingStore()->get('isSystemRule');
    }

    /**
     * Gets the notificationChannels property value. The notification channels of the rule selected by the user.
     * @return array<NotificationChannel>|null
    */
    public function getNotificationChannels(): ?array {
        return $this->getBackingStore()->get('notificationChannels');
    }

    /**
     * Gets the severity property value. The severity of the rule. The possible values are: unknown, informational, warning, critical, unknownFutureValue.
     * @return RuleSeverityType|null
    */
    public function getSeverity(): ?RuleSeverityType {
        return $this->getBackingStore()->get('severity');
    }

    /**
     * Gets the threshold property value. The conditions to send alerts. For example, send alert when provisioning has failed for greater than or equal to 6 Cloud PCs.
     * @return RuleThreshold|null
    */
    public function getThreshold(): ?RuleThreshold {
        return $this->getBackingStore()->get('threshold');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('alertRuleTemplate', $this->getAlertRuleTemplate());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeBooleanValue('isSystemRule', $this->getIsSystemRule());
        $writer->writeCollectionOfObjectValues('notificationChannels', $this->getNotificationChannels());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeObjectValue('threshold', $this->getThreshold());
    }

    /**
     * Sets the alertRuleTemplate property value. The rule template of the alert event. The possible values are: cloudPcProvisionScenario, cloudPcImageUploadScenario, cloudPcOnPremiseNetworkConnectionCheckScenario, unknownFutureValue.
     *  @param AlertRuleTemplate|null $value Value to set for the alertRuleTemplate property.
    */
    public function setAlertRuleTemplate(?AlertRuleTemplate $value): void {
        $this->getBackingStore()->set('alertRuleTemplate', $value);
    }

    /**
     * Sets the description property value. The rule description.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the rule.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enabled property value. The status of the rule that indicates whether the rule is enabled or disabled. If true, the rule is enabled; otherwise, the rule is disabled.
     *  @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->getBackingStore()->set('enabled', $value);
    }

    /**
     * Sets the isSystemRule property value. Indicates whether the rule is a system rule. If true, the rule is a system rule; otherwise, the rule is a custom defined rule and can be edited. System rules are built-in and only a few properties can be edited.
     *  @param bool|null $value Value to set for the isSystemRule property.
    */
    public function setIsSystemRule(?bool $value): void {
        $this->getBackingStore()->set('isSystemRule', $value);
    }

    /**
     * Sets the notificationChannels property value. The notification channels of the rule selected by the user.
     *  @param array<NotificationChannel>|null $value Value to set for the notificationChannels property.
    */
    public function setNotificationChannels(?array $value): void {
        $this->getBackingStore()->set('notificationChannels', $value);
    }

    /**
     * Sets the severity property value. The severity of the rule. The possible values are: unknown, informational, warning, critical, unknownFutureValue.
     *  @param RuleSeverityType|null $value Value to set for the severity property.
    */
    public function setSeverity(?RuleSeverityType $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

    /**
     * Sets the threshold property value. The conditions to send alerts. For example, send alert when provisioning has failed for greater than or equal to 6 Cloud PCs.
     *  @param RuleThreshold|null $value Value to set for the threshold property.
    */
    public function setThreshold(?RuleThreshold $value): void {
        $this->getBackingStore()->set('threshold', $value);
    }

}
