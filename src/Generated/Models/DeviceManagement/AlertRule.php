<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AlertRule extends Entity implements Parsable 
{
    /**
     * @var AlertRuleTemplate|null $alertRuleTemplate The alertRuleTemplate property
    */
    private ?AlertRuleTemplate $alertRuleTemplate = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $enabled The enabled property
    */
    private ?bool $enabled = null;
    
    /**
     * @var bool|null $isSystemRule The isSystemRule property
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
     * Gets the alertRuleTemplate property value. The alertRuleTemplate property
     * @return AlertRuleTemplate|null
    */
    public function getAlertRuleTemplate(): ?AlertRuleTemplate {
        return $this->alertRuleTemplate;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the enabled property value. The enabled property
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
            'alertRuleTemplate' => function (ParseNode $n) use ($o) { $o->setAlertRuleTemplate($n->getEnumValue(AlertRuleTemplate::class)); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'enabled' => function (ParseNode $n) use ($o) { $o->setEnabled($n->getBooleanValue()); },
            'isSystemRule' => function (ParseNode $n) use ($o) { $o->setIsSystemRule($n->getBooleanValue()); },
            'notificationChannels' => function (ParseNode $n) use ($o) { $o->setNotificationChannels($n->getCollectionOfObjectValues(array(NotificationChannel::class, 'createFromDiscriminatorValue'))); },
            'severity' => function (ParseNode $n) use ($o) { $o->setSeverity($n->getEnumValue(RuleSeverityType::class)); },
            'threshold' => function (ParseNode $n) use ($o) { $o->setThreshold($n->getObjectValue(array(RuleThreshold::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the isSystemRule property value. The isSystemRule property
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
     * Sets the alertRuleTemplate property value. The alertRuleTemplate property
     *  @param AlertRuleTemplate|null $value Value to set for the alertRuleTemplate property.
    */
    public function setAlertRuleTemplate(?AlertRuleTemplate $value ): void {
        $this->alertRuleTemplate = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the enabled property value. The enabled property
     *  @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value ): void {
        $this->enabled = $value;
    }

    /**
     * Sets the isSystemRule property value. The isSystemRule property
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
