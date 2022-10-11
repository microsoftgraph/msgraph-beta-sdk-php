<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedTenantAlertRule extends Entity implements Parsable 
{
    /**
     * @var string|null $alertDisplayName The alertDisplayName property
    */
    private ?string $alertDisplayName = null;
    
    /**
     * @var array<ManagedTenantAlert>|null $alerts The alerts property
    */
    private ?array $alerts = null;
    
    /**
     * @var int|null $alertTTL The alertTTL property
    */
    private ?int $alertTTL = null;
    
    /**
     * @var string|null $createdByUserId The createdByUserId property
    */
    private ?string $createdByUserId = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $lastActionByUserId The lastActionByUserId property
    */
    private ?string $lastActionByUserId = null;
    
    /**
     * @var DateTime|null $lastActionDateTime The lastActionDateTime property
    */
    private ?DateTime $lastActionDateTime = null;
    
    /**
     * @var DateTime|null $lastRunDateTime The lastRunDateTime property
    */
    private ?DateTime $lastRunDateTime = null;
    
    /**
     * @var NotificationDestination|null $notificationFinalDestinations The notificationFinalDestinations property
    */
    private ?NotificationDestination $notificationFinalDestinations = null;
    
    /**
     * @var ManagedTenantAlertRuleDefinition|null $ruleDefinition The ruleDefinition property
    */
    private ?ManagedTenantAlertRuleDefinition $ruleDefinition = null;
    
    /**
     * @var AlertSeverity|null $severity The severity property
    */
    private ?AlertSeverity $severity = null;
    
    /**
     * @var array<NotificationTarget>|null $targets The targets property
    */
    private ?array $targets = null;
    
    /**
     * @var array<TenantInfo>|null $tenantIds The tenantIds property
    */
    private ?array $tenantIds = null;
    
    /**
     * Instantiates a new managedTenantAlertRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedTenants.managedTenantAlertRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedTenantAlertRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedTenantAlertRule {
        return new ManagedTenantAlertRule();
    }

    /**
     * Gets the alertDisplayName property value. The alertDisplayName property
     * @return string|null
    */
    public function getAlertDisplayName(): ?string {
        return $this->alertDisplayName;
    }

    /**
     * Gets the alerts property value. The alerts property
     * @return array<ManagedTenantAlert>|null
    */
    public function getAlerts(): ?array {
        return $this->alerts;
    }

    /**
     * Gets the alertTTL property value. The alertTTL property
     * @return int|null
    */
    public function getAlertTTL(): ?int {
        return $this->alertTTL;
    }

    /**
     * Gets the createdByUserId property value. The createdByUserId property
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        return $this->createdByUserId;
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alertDisplayName' => function (ParseNode $n) use ($o) { $o->setAlertDisplayName($n->getStringValue()); },
            'alerts' => function (ParseNode $n) use ($o) { $o->setAlerts($n->getCollectionOfObjectValues(array(ManagedTenantAlert::class, 'createFromDiscriminatorValue'))); },
            'alertTTL' => function (ParseNode $n) use ($o) { $o->setAlertTTL($n->getIntegerValue()); },
            'createdByUserId' => function (ParseNode $n) use ($o) { $o->setCreatedByUserId($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastActionByUserId' => function (ParseNode $n) use ($o) { $o->setLastActionByUserId($n->getStringValue()); },
            'lastActionDateTime' => function (ParseNode $n) use ($o) { $o->setLastActionDateTime($n->getDateTimeValue()); },
            'lastRunDateTime' => function (ParseNode $n) use ($o) { $o->setLastRunDateTime($n->getDateTimeValue()); },
            'notificationFinalDestinations' => function (ParseNode $n) use ($o) { $o->setNotificationFinalDestinations($n->getEnumValue(NotificationDestination::class)); },
            'ruleDefinition' => function (ParseNode $n) use ($o) { $o->setRuleDefinition($n->getObjectValue(array(ManagedTenantAlertRuleDefinition::class, 'createFromDiscriminatorValue'))); },
            'severity' => function (ParseNode $n) use ($o) { $o->setSeverity($n->getEnumValue(AlertSeverity::class)); },
            'targets' => function (ParseNode $n) use ($o) { $o->setTargets($n->getCollectionOfObjectValues(array(NotificationTarget::class, 'createFromDiscriminatorValue'))); },
            'tenantIds' => function (ParseNode $n) use ($o) { $o->setTenantIds($n->getCollectionOfObjectValues(array(TenantInfo::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the lastActionByUserId property value. The lastActionByUserId property
     * @return string|null
    */
    public function getLastActionByUserId(): ?string {
        return $this->lastActionByUserId;
    }

    /**
     * Gets the lastActionDateTime property value. The lastActionDateTime property
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->lastActionDateTime;
    }

    /**
     * Gets the lastRunDateTime property value. The lastRunDateTime property
     * @return DateTime|null
    */
    public function getLastRunDateTime(): ?DateTime {
        return $this->lastRunDateTime;
    }

    /**
     * Gets the notificationFinalDestinations property value. The notificationFinalDestinations property
     * @return NotificationDestination|null
    */
    public function getNotificationFinalDestinations(): ?NotificationDestination {
        return $this->notificationFinalDestinations;
    }

    /**
     * Gets the ruleDefinition property value. The ruleDefinition property
     * @return ManagedTenantAlertRuleDefinition|null
    */
    public function getRuleDefinition(): ?ManagedTenantAlertRuleDefinition {
        return $this->ruleDefinition;
    }

    /**
     * Gets the severity property value. The severity property
     * @return AlertSeverity|null
    */
    public function getSeverity(): ?AlertSeverity {
        return $this->severity;
    }

    /**
     * Gets the targets property value. The targets property
     * @return array<NotificationTarget>|null
    */
    public function getTargets(): ?array {
        return $this->targets;
    }

    /**
     * Gets the tenantIds property value. The tenantIds property
     * @return array<TenantInfo>|null
    */
    public function getTenantIds(): ?array {
        return $this->tenantIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('alertDisplayName', $this->alertDisplayName);
        $writer->writeCollectionOfObjectValues('alerts', $this->alerts);
        $writer->writeIntegerValue('alertTTL', $this->alertTTL);
        $writer->writeStringValue('createdByUserId', $this->createdByUserId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('lastActionByUserId', $this->lastActionByUserId);
        $writer->writeDateTimeValue('lastActionDateTime', $this->lastActionDateTime);
        $writer->writeDateTimeValue('lastRunDateTime', $this->lastRunDateTime);
        $writer->writeEnumValue('notificationFinalDestinations', $this->notificationFinalDestinations);
        $writer->writeObjectValue('ruleDefinition', $this->ruleDefinition);
        $writer->writeEnumValue('severity', $this->severity);
        $writer->writeCollectionOfObjectValues('targets', $this->targets);
        $writer->writeCollectionOfObjectValues('tenantIds', $this->tenantIds);
    }

    /**
     * Sets the alertDisplayName property value. The alertDisplayName property
     *  @param string|null $value Value to set for the alertDisplayName property.
    */
    public function setAlertDisplayName(?string $value ): void {
        $this->alertDisplayName = $value;
    }

    /**
     * Sets the alerts property value. The alerts property
     *  @param array<ManagedTenantAlert>|null $value Value to set for the alerts property.
    */
    public function setAlerts(?array $value ): void {
        $this->alerts = $value;
    }

    /**
     * Sets the alertTTL property value. The alertTTL property
     *  @param int|null $value Value to set for the alertTTL property.
    */
    public function setAlertTTL(?int $value ): void {
        $this->alertTTL = $value;
    }

    /**
     * Sets the createdByUserId property value. The createdByUserId property
     *  @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value ): void {
        $this->createdByUserId = $value;
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
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
     * Sets the lastActionByUserId property value. The lastActionByUserId property
     *  @param string|null $value Value to set for the lastActionByUserId property.
    */
    public function setLastActionByUserId(?string $value ): void {
        $this->lastActionByUserId = $value;
    }

    /**
     * Sets the lastActionDateTime property value. The lastActionDateTime property
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value ): void {
        $this->lastActionDateTime = $value;
    }

    /**
     * Sets the lastRunDateTime property value. The lastRunDateTime property
     *  @param DateTime|null $value Value to set for the lastRunDateTime property.
    */
    public function setLastRunDateTime(?DateTime $value ): void {
        $this->lastRunDateTime = $value;
    }

    /**
     * Sets the notificationFinalDestinations property value. The notificationFinalDestinations property
     *  @param NotificationDestination|null $value Value to set for the notificationFinalDestinations property.
    */
    public function setNotificationFinalDestinations(?NotificationDestination $value ): void {
        $this->notificationFinalDestinations = $value;
    }

    /**
     * Sets the ruleDefinition property value. The ruleDefinition property
     *  @param ManagedTenantAlertRuleDefinition|null $value Value to set for the ruleDefinition property.
    */
    public function setRuleDefinition(?ManagedTenantAlertRuleDefinition $value ): void {
        $this->ruleDefinition = $value;
    }

    /**
     * Sets the severity property value. The severity property
     *  @param AlertSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?AlertSeverity $value ): void {
        $this->severity = $value;
    }

    /**
     * Sets the targets property value. The targets property
     *  @param array<NotificationTarget>|null $value Value to set for the targets property.
    */
    public function setTargets(?array $value ): void {
        $this->targets = $value;
    }

    /**
     * Sets the tenantIds property value. The tenantIds property
     *  @param array<TenantInfo>|null $value Value to set for the tenantIds property.
    */
    public function setTenantIds(?array $value ): void {
        $this->tenantIds = $value;
    }

}
