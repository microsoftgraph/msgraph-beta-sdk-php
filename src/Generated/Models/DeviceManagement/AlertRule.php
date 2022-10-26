<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AlertRule extends Entity implements Parsable 
{
    /**
     * @var AlertRuleTemplate|null $alertRuleTemplate The rule template of the alert event. The possible values are: cloudPcProvisionScenario, cloudPcImageUploadScenario, cloudPcOnPremiseNetworkConnectionCheckScenario, unknownFutureValue.
    */
    private ?AlertRuleTemplate $alertRuleTemplate = null;
    
    /**
     * @var string|null $description The rule description.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name of the rule.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $enabled The status of the rule that indicates whether the rule is enabled or disabled. If true, the rule is enabled; otherwise, the rule is disabled.
    */
    private ?bool $enabled = null;
    
    /**
     * @var bool|null $isSystemRule Indicates whether the rule is a system rule. If true, the rule is a system rule; otherwise, the rule is a custom defined rule and can be edited. System rules are built-in and only
    */
    private ?bool $isSystemRule = null;
    
    /**
     * @var array<NotificationChannel>|null $notificationChannels The notificationChannels property
    */
    private ?array $notificationChannels = null;
    
    /**
     * @var RuleSeverityType|null $severity The severity property
    */
    private ?RuleSeverityType $severity = null;
    
    /**
     * @var RuleThreshold|null $threshold The threshold property
    */
    private ?RuleThreshold $threshold = null;
    
    /**
     * Instantiates a new alertRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagement.alertRule');
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
        return $this->alertRuleTemplate;
    }

    /**
     * Gets the description property value. The rule description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the rule.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the enabled property value. The status of the rule that indicates whether the rule is enabled or disabled. If true, the rule is enabled; otherwise, the rule is disabled.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
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
     * Gets the isSystemRule property value. Indicates whether the rule is a system rule. If true, the rule is a system rule; otherwise, the rule is a custom defined rule and can be edited. System rules are built-in and only
     * @return bool|null
    */
    public function getIsSystemRule(): ?bool {
        return $this->isSystemRule;
    }

    /**
     * Gets the notificationChannels property value. The notificationChannels property
     * @return array<NotificationChannel>|null
    */
    public function getNotificationChannels(): ?array {
        return $this->notificationChannels;
    }

    /**
     * Gets the severity property value. The severity property
     * @return RuleSeverityType|null
    */
    public function getSeverity(): ?RuleSeverityType {
        return $this->severity;
    }

    /**
     * Gets the threshold property value. The threshold property
     * @return RuleThreshold|null
    */
    public function getThreshold(): ?RuleThreshold {
        return $this->threshold;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('alertRuleTemplate', $this->alertRuleTemplate);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('enabled', $this->enabled);
        $writer->writeBooleanValue('isSystemRule', $this->isSystemRule);
        $writer->writeCollectionOfObjectValues('notificationChannels', $this->notificationChannels);
        $writer->writeEnumValue('severity', $this->severity);
        $writer->writeObjectValue('threshold', $this->threshold);
    }

    /**
     * Sets the alertRuleTemplate property value. The rule template of the alert event. The possible values are: cloudPcProvisionScenario, cloudPcImageUploadScenario, cloudPcOnPremiseNetworkConnectionCheckScenario, unknownFutureValue.
     *  @param AlertRuleTemplate|null $value Value to set for the alertRuleTemplate property.
    */
    public function setAlertRuleTemplate(?AlertRuleTemplate $value ): void {
        $this->alertRuleTemplate = $value;
    }

    /**
     * Sets the description property value. The rule description.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the rule.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the enabled property value. The status of the rule that indicates whether the rule is enabled or disabled. If true, the rule is enabled; otherwise, the rule is disabled.
     *  @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value ): void {
        $this->enabled = $value;
    }

    /**
     * Sets the isSystemRule property value. Indicates whether the rule is a system rule. If true, the rule is a system rule; otherwise, the rule is a custom defined rule and can be edited. System rules are built-in and only
     *  @param bool|null $value Value to set for the isSystemRule property.
    */
    public function setIsSystemRule(?bool $value ): void {
        $this->isSystemRule = $value;
    }

    /**
     * Sets the notificationChannels property value. The notificationChannels property
     *  @param array<NotificationChannel>|null $value Value to set for the notificationChannels property.
    */
    public function setNotificationChannels(?array $value ): void {
        $this->notificationChannels = $value;
    }

    /**
     * Sets the severity property value. The severity property
     *  @param RuleSeverityType|null $value Value to set for the severity property.
    */
    public function setSeverity(?RuleSeverityType $value ): void {
        $this->severity = $value;
    }

    /**
     * Sets the threshold property value. The threshold property
     *  @param RuleThreshold|null $value Value to set for the threshold property.
    */
    public function setThreshold(?RuleThreshold $value ): void {
        $this->threshold = $value;
    }

}
