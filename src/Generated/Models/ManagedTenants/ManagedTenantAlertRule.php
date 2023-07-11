<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ManagedTenantAlertRule extends Entity implements Parsable 
{
    /**
     * Instantiates a new managedTenantAlertRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('alertDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertDisplayName'");
    }

    /**
     * Gets the alerts property value. The alerts property
     * @return array<ManagedTenantAlert>|null
    */
    public function getAlerts(): ?array {
        $val = $this->getBackingStore()->get('alerts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedTenantAlert::class);
            /** @var array<ManagedTenantAlert>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alerts'");
    }

    /**
     * Gets the alertTTL property value. The alertTTL property
     * @return int|null
    */
    public function getAlertTTL(): ?int {
        $val = $this->getBackingStore()->get('alertTTL');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertTTL'");
    }

    /**
     * Gets the createdByUserId property value. The createdByUserId property
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        $val = $this->getBackingStore()->get('createdByUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdByUserId'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
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
     * Gets the description property value. The description property
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
     * Gets the displayName property value. The displayName property
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
            'alertDisplayName' => fn(ParseNode $n) => $o->setAlertDisplayName($n->getStringValue()),
            'alerts' => fn(ParseNode $n) => $o->setAlerts($n->getCollectionOfObjectValues([ManagedTenantAlert::class, 'createFromDiscriminatorValue'])),
            'alertTTL' => fn(ParseNode $n) => $o->setAlertTTL($n->getIntegerValue()),
            'createdByUserId' => fn(ParseNode $n) => $o->setCreatedByUserId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastActionByUserId' => fn(ParseNode $n) => $o->setLastActionByUserId($n->getStringValue()),
            'lastActionDateTime' => fn(ParseNode $n) => $o->setLastActionDateTime($n->getDateTimeValue()),
            'lastRunDateTime' => fn(ParseNode $n) => $o->setLastRunDateTime($n->getDateTimeValue()),
            'notificationFinalDestinations' => fn(ParseNode $n) => $o->setNotificationFinalDestinations($n->getEnumValue(NotificationDestination::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'ruleDefinition' => fn(ParseNode $n) => $o->setRuleDefinition($n->getObjectValue([ManagedTenantAlertRuleDefinition::class, 'createFromDiscriminatorValue'])),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(AlertSeverity::class)),
            'targets' => fn(ParseNode $n) => $o->setTargets($n->getCollectionOfObjectValues([NotificationTarget::class, 'createFromDiscriminatorValue'])),
            'tenantIds' => fn(ParseNode $n) => $o->setTenantIds($n->getCollectionOfObjectValues([TenantInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastActionByUserId property value. The lastActionByUserId property
     * @return string|null
    */
    public function getLastActionByUserId(): ?string {
        $val = $this->getBackingStore()->get('lastActionByUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActionByUserId'");
    }

    /**
     * Gets the lastActionDateTime property value. The lastActionDateTime property
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastActionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActionDateTime'");
    }

    /**
     * Gets the lastRunDateTime property value. The lastRunDateTime property
     * @return DateTime|null
    */
    public function getLastRunDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastRunDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastRunDateTime'");
    }

    /**
     * Gets the notificationFinalDestinations property value. The notificationFinalDestinations property
     * @return NotificationDestination|null
    */
    public function getNotificationFinalDestinations(): ?NotificationDestination {
        $val = $this->getBackingStore()->get('notificationFinalDestinations');
        if (is_null($val) || $val instanceof NotificationDestination) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationFinalDestinations'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the ruleDefinition property value. The ruleDefinition property
     * @return ManagedTenantAlertRuleDefinition|null
    */
    public function getRuleDefinition(): ?ManagedTenantAlertRuleDefinition {
        $val = $this->getBackingStore()->get('ruleDefinition');
        if (is_null($val) || $val instanceof ManagedTenantAlertRuleDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ruleDefinition'");
    }

    /**
     * Gets the severity property value. The severity property
     * @return AlertSeverity|null
    */
    public function getSeverity(): ?AlertSeverity {
        $val = $this->getBackingStore()->get('severity');
        if (is_null($val) || $val instanceof AlertSeverity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severity'");
    }

    /**
     * Gets the targets property value. The targets property
     * @return array<NotificationTarget>|null
    */
    public function getTargets(): ?array {
        $val = $this->getBackingStore()->get('targets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, NotificationTarget::class);
            /** @var array<NotificationTarget>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targets'");
    }

    /**
     * Gets the tenantIds property value. The tenantIds property
     * @return array<TenantInfo>|null
    */
    public function getTenantIds(): ?array {
        $val = $this->getBackingStore()->get('tenantIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TenantInfo::class);
            /** @var array<TenantInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantIds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('alertDisplayName', $this->getAlertDisplayName());
        $writer->writeCollectionOfObjectValues('alerts', $this->getAlerts());
        $writer->writeIntegerValue('alertTTL', $this->getAlertTTL());
        $writer->writeStringValue('createdByUserId', $this->getCreatedByUserId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('lastActionByUserId', $this->getLastActionByUserId());
        $writer->writeDateTimeValue('lastActionDateTime', $this->getLastActionDateTime());
        $writer->writeDateTimeValue('lastRunDateTime', $this->getLastRunDateTime());
        $writer->writeEnumValue('notificationFinalDestinations', $this->getNotificationFinalDestinations());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('ruleDefinition', $this->getRuleDefinition());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeCollectionOfObjectValues('targets', $this->getTargets());
        $writer->writeCollectionOfObjectValues('tenantIds', $this->getTenantIds());
    }

    /**
     * Sets the alertDisplayName property value. The alertDisplayName property
     * @param string|null $value Value to set for the alertDisplayName property.
    */
    public function setAlertDisplayName(?string $value): void {
        $this->getBackingStore()->set('alertDisplayName', $value);
    }

    /**
     * Sets the alerts property value. The alerts property
     * @param array<ManagedTenantAlert>|null $value Value to set for the alerts property.
    */
    public function setAlerts(?array $value): void {
        $this->getBackingStore()->set('alerts', $value);
    }

    /**
     * Sets the alertTTL property value. The alertTTL property
     * @param int|null $value Value to set for the alertTTL property.
    */
    public function setAlertTTL(?int $value): void {
        $this->getBackingStore()->set('alertTTL', $value);
    }

    /**
     * Sets the createdByUserId property value. The createdByUserId property
     * @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value): void {
        $this->getBackingStore()->set('createdByUserId', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastActionByUserId property value. The lastActionByUserId property
     * @param string|null $value Value to set for the lastActionByUserId property.
    */
    public function setLastActionByUserId(?string $value): void {
        $this->getBackingStore()->set('lastActionByUserId', $value);
    }

    /**
     * Sets the lastActionDateTime property value. The lastActionDateTime property
     * @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActionDateTime', $value);
    }

    /**
     * Sets the lastRunDateTime property value. The lastRunDateTime property
     * @param DateTime|null $value Value to set for the lastRunDateTime property.
    */
    public function setLastRunDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRunDateTime', $value);
    }

    /**
     * Sets the notificationFinalDestinations property value. The notificationFinalDestinations property
     * @param NotificationDestination|null $value Value to set for the notificationFinalDestinations property.
    */
    public function setNotificationFinalDestinations(?NotificationDestination $value): void {
        $this->getBackingStore()->set('notificationFinalDestinations', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the ruleDefinition property value. The ruleDefinition property
     * @param ManagedTenantAlertRuleDefinition|null $value Value to set for the ruleDefinition property.
    */
    public function setRuleDefinition(?ManagedTenantAlertRuleDefinition $value): void {
        $this->getBackingStore()->set('ruleDefinition', $value);
    }

    /**
     * Sets the severity property value. The severity property
     * @param AlertSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?AlertSeverity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

    /**
     * Sets the targets property value. The targets property
     * @param array<NotificationTarget>|null $value Value to set for the targets property.
    */
    public function setTargets(?array $value): void {
        $this->getBackingStore()->set('targets', $value);
    }

    /**
     * Sets the tenantIds property value. The tenantIds property
     * @param array<TenantInfo>|null $value Value to set for the tenantIds property.
    */
    public function setTenantIds(?array $value): void {
        $this->getBackingStore()->set('tenantIds', $value);
    }

}
