<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedTenantAlert extends Entity implements Parsable 
{
    /**
     * Instantiates a new managedTenantAlert and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedTenantAlert
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedTenantAlert {
        return new ManagedTenantAlert();
    }

    /**
     * Gets the alertData property value. The alertData property
     * @return AlertData|null
    */
    public function getAlertData(): ?AlertData {
        return $this->getBackingStore()->get('alertData');
    }

    /**
     * Gets the alertDataReferenceStrings property value. The alertDataReferenceStrings property
     * @return array<AlertDataReferenceString>|null
    */
    public function getAlertDataReferenceStrings(): ?array {
        return $this->getBackingStore()->get('alertDataReferenceStrings');
    }

    /**
     * Gets the alertLogs property value. The alertLogs property
     * @return array<ManagedTenantAlertLog>|null
    */
    public function getAlertLogs(): ?array {
        return $this->getBackingStore()->get('alertLogs');
    }

    /**
     * Gets the alertRule property value. The alertRule property
     * @return ManagedTenantAlertRule|null
    */
    public function getAlertRule(): ?ManagedTenantAlertRule {
        return $this->getBackingStore()->get('alertRule');
    }

    /**
     * Gets the alertRuleDisplayName property value. The alertRuleDisplayName property
     * @return string|null
    */
    public function getAlertRuleDisplayName(): ?string {
        return $this->getBackingStore()->get('alertRuleDisplayName');
    }

    /**
     * Gets the apiNotifications property value. The apiNotifications property
     * @return array<ManagedTenantApiNotification>|null
    */
    public function getApiNotifications(): ?array {
        return $this->getBackingStore()->get('apiNotifications');
    }

    /**
     * Gets the assignedToUserId property value. The assignedToUserId property
     * @return string|null
    */
    public function getAssignedToUserId(): ?string {
        return $this->getBackingStore()->get('assignedToUserId');
    }

    /**
     * Gets the correlationCount property value. The correlationCount property
     * @return int|null
    */
    public function getCorrelationCount(): ?int {
        return $this->getBackingStore()->get('correlationCount');
    }

    /**
     * Gets the correlationId property value. The correlationId property
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->getBackingStore()->get('correlationId');
    }

    /**
     * Gets the createdByUserId property value. The createdByUserId property
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        return $this->getBackingStore()->get('createdByUserId');
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the emailNotifications property value. The emailNotifications property
     * @return array<ManagedTenantEmailNotification>|null
    */
    public function getEmailNotifications(): ?array {
        return $this->getBackingStore()->get('emailNotifications');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alertData' => fn(ParseNode $n) => $o->setAlertData($n->getObjectValue([AlertData::class, 'createFromDiscriminatorValue'])),
            'alertDataReferenceStrings' => fn(ParseNode $n) => $o->setAlertDataReferenceStrings($n->getCollectionOfObjectValues([AlertDataReferenceString::class, 'createFromDiscriminatorValue'])),
            'alertLogs' => fn(ParseNode $n) => $o->setAlertLogs($n->getCollectionOfObjectValues([ManagedTenantAlertLog::class, 'createFromDiscriminatorValue'])),
            'alertRule' => fn(ParseNode $n) => $o->setAlertRule($n->getObjectValue([ManagedTenantAlertRule::class, 'createFromDiscriminatorValue'])),
            'alertRuleDisplayName' => fn(ParseNode $n) => $o->setAlertRuleDisplayName($n->getStringValue()),
            'apiNotifications' => fn(ParseNode $n) => $o->setApiNotifications($n->getCollectionOfObjectValues([ManagedTenantApiNotification::class, 'createFromDiscriminatorValue'])),
            'assignedToUserId' => fn(ParseNode $n) => $o->setAssignedToUserId($n->getStringValue()),
            'correlationCount' => fn(ParseNode $n) => $o->setCorrelationCount($n->getIntegerValue()),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'createdByUserId' => fn(ParseNode $n) => $o->setCreatedByUserId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'emailNotifications' => fn(ParseNode $n) => $o->setEmailNotifications($n->getCollectionOfObjectValues([ManagedTenantEmailNotification::class, 'createFromDiscriminatorValue'])),
            'lastActionByUserId' => fn(ParseNode $n) => $o->setLastActionByUserId($n->getStringValue()),
            'lastActionDateTime' => fn(ParseNode $n) => $o->setLastActionDateTime($n->getDateTimeValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(AlertSeverity::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(AlertStatus::class)),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastActionByUserId property value. The lastActionByUserId property
     * @return string|null
    */
    public function getLastActionByUserId(): ?string {
        return $this->getBackingStore()->get('lastActionByUserId');
    }

    /**
     * Gets the lastActionDateTime property value. The lastActionDateTime property
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastActionDateTime');
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->getBackingStore()->get('message');
    }

    /**
     * Gets the severity property value. The severity property
     * @return AlertSeverity|null
    */
    public function getSeverity(): ?AlertSeverity {
        return $this->getBackingStore()->get('severity');
    }

    /**
     * Gets the status property value. The status property
     * @return AlertStatus|null
    */
    public function getStatus(): ?AlertStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->getBackingStore()->get('title');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('alertData', $this->getAlertData());
        $writer->writeCollectionOfObjectValues('alertDataReferenceStrings', $this->getAlertDataReferenceStrings());
        $writer->writeCollectionOfObjectValues('alertLogs', $this->getAlertLogs());
        $writer->writeObjectValue('alertRule', $this->getAlertRule());
        $writer->writeStringValue('alertRuleDisplayName', $this->getAlertRuleDisplayName());
        $writer->writeCollectionOfObjectValues('apiNotifications', $this->getApiNotifications());
        $writer->writeStringValue('assignedToUserId', $this->getAssignedToUserId());
        $writer->writeIntegerValue('correlationCount', $this->getCorrelationCount());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeStringValue('createdByUserId', $this->getCreatedByUserId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('emailNotifications', $this->getEmailNotifications());
        $writer->writeStringValue('lastActionByUserId', $this->getLastActionByUserId());
        $writer->writeDateTimeValue('lastActionDateTime', $this->getLastActionDateTime());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('title', $this->getTitle());
    }

    /**
     * Sets the alertData property value. The alertData property
     *  @param AlertData|null $value Value to set for the alertData property.
    */
    public function setAlertData(?AlertData $value): void {
        $this->getBackingStore()->set('alertData', $value);
    }

    /**
     * Sets the alertDataReferenceStrings property value. The alertDataReferenceStrings property
     *  @param array<AlertDataReferenceString>|null $value Value to set for the alertDataReferenceStrings property.
    */
    public function setAlertDataReferenceStrings(?array $value): void {
        $this->getBackingStore()->set('alertDataReferenceStrings', $value);
    }

    /**
     * Sets the alertLogs property value. The alertLogs property
     *  @param array<ManagedTenantAlertLog>|null $value Value to set for the alertLogs property.
    */
    public function setAlertLogs(?array $value): void {
        $this->getBackingStore()->set('alertLogs', $value);
    }

    /**
     * Sets the alertRule property value. The alertRule property
     *  @param ManagedTenantAlertRule|null $value Value to set for the alertRule property.
    */
    public function setAlertRule(?ManagedTenantAlertRule $value): void {
        $this->getBackingStore()->set('alertRule', $value);
    }

    /**
     * Sets the alertRuleDisplayName property value. The alertRuleDisplayName property
     *  @param string|null $value Value to set for the alertRuleDisplayName property.
    */
    public function setAlertRuleDisplayName(?string $value): void {
        $this->getBackingStore()->set('alertRuleDisplayName', $value);
    }

    /**
     * Sets the apiNotifications property value. The apiNotifications property
     *  @param array<ManagedTenantApiNotification>|null $value Value to set for the apiNotifications property.
    */
    public function setApiNotifications(?array $value): void {
        $this->getBackingStore()->set('apiNotifications', $value);
    }

    /**
     * Sets the assignedToUserId property value. The assignedToUserId property
     *  @param string|null $value Value to set for the assignedToUserId property.
    */
    public function setAssignedToUserId(?string $value): void {
        $this->getBackingStore()->set('assignedToUserId', $value);
    }

    /**
     * Sets the correlationCount property value. The correlationCount property
     *  @param int|null $value Value to set for the correlationCount property.
    */
    public function setCorrelationCount(?int $value): void {
        $this->getBackingStore()->set('correlationCount', $value);
    }

    /**
     * Sets the correlationId property value. The correlationId property
     *  @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->getBackingStore()->set('correlationId', $value);
    }

    /**
     * Sets the createdByUserId property value. The createdByUserId property
     *  @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value): void {
        $this->getBackingStore()->set('createdByUserId', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the emailNotifications property value. The emailNotifications property
     *  @param array<ManagedTenantEmailNotification>|null $value Value to set for the emailNotifications property.
    */
    public function setEmailNotifications(?array $value): void {
        $this->getBackingStore()->set('emailNotifications', $value);
    }

    /**
     * Sets the lastActionByUserId property value. The lastActionByUserId property
     *  @param string|null $value Value to set for the lastActionByUserId property.
    */
    public function setLastActionByUserId(?string $value): void {
        $this->getBackingStore()->set('lastActionByUserId', $value);
    }

    /**
     * Sets the lastActionDateTime property value. The lastActionDateTime property
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActionDateTime', $value);
    }

    /**
     * Sets the message property value. The message property
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the severity property value. The severity property
     *  @param AlertSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?AlertSeverity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param AlertStatus|null $value Value to set for the status property.
    */
    public function setStatus(?AlertStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the tenantId property value. The tenantId property
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the title property value. The title property
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
