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
     * @var AlertData|null $alertData The alertData property
    */
    private ?AlertData $alertData = null;
    
    /**
     * @var array<AlertDataReferenceString>|null $alertDataReferenceStrings The alertDataReferenceStrings property
    */
    private ?array $alertDataReferenceStrings = null;
    
    /**
     * @var array<ManagedTenantAlertLog>|null $alertLogs The alertLogs property
    */
    private ?array $alertLogs = null;
    
    /**
     * @var ManagedTenantAlertRule|null $alertRule The alertRule property
    */
    private ?ManagedTenantAlertRule $alertRule = null;
    
    /**
     * @var string|null $alertRuleDisplayName The alertRuleDisplayName property
    */
    private ?string $alertRuleDisplayName = null;
    
    /**
     * @var array<ManagedTenantApiNotification>|null $apiNotifications The apiNotifications property
    */
    private ?array $apiNotifications = null;
    
    /**
     * @var string|null $assignedToUserId The assignedToUserId property
    */
    private ?string $assignedToUserId = null;
    
    /**
     * @var int|null $correlationCount The correlationCount property
    */
    private ?int $correlationCount = null;
    
    /**
     * @var string|null $correlationId The correlationId property
    */
    private ?string $correlationId = null;
    
    /**
     * @var string|null $createdByUserId The createdByUserId property
    */
    private ?string $createdByUserId = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var array<ManagedTenantEmailNotification>|null $emailNotifications The emailNotifications property
    */
    private ?array $emailNotifications = null;
    
    /**
     * @var string|null $lastActionByUserId The lastActionByUserId property
    */
    private ?string $lastActionByUserId = null;
    
    /**
     * @var DateTime|null $lastActionDateTime The lastActionDateTime property
    */
    private ?DateTime $lastActionDateTime = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var AlertSeverity|null $severity The severity property
    */
    private ?AlertSeverity $severity = null;
    
    /**
     * @var AlertStatus|null $status The status property
    */
    private ?AlertStatus $status = null;
    
    /**
     * @var string|null $tenantId The tenantId property
    */
    private ?string $tenantId = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new managedTenantAlert and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedTenants.managedTenantAlert');
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
        return $this->alertData;
    }

    /**
     * Gets the alertDataReferenceStrings property value. The alertDataReferenceStrings property
     * @return array<AlertDataReferenceString>|null
    */
    public function getAlertDataReferenceStrings(): ?array {
        return $this->alertDataReferenceStrings;
    }

    /**
     * Gets the alertLogs property value. The alertLogs property
     * @return array<ManagedTenantAlertLog>|null
    */
    public function getAlertLogs(): ?array {
        return $this->alertLogs;
    }

    /**
     * Gets the alertRule property value. The alertRule property
     * @return ManagedTenantAlertRule|null
    */
    public function getAlertRule(): ?ManagedTenantAlertRule {
        return $this->alertRule;
    }

    /**
     * Gets the alertRuleDisplayName property value. The alertRuleDisplayName property
     * @return string|null
    */
    public function getAlertRuleDisplayName(): ?string {
        return $this->alertRuleDisplayName;
    }

    /**
     * Gets the apiNotifications property value. The apiNotifications property
     * @return array<ManagedTenantApiNotification>|null
    */
    public function getApiNotifications(): ?array {
        return $this->apiNotifications;
    }

    /**
     * Gets the assignedToUserId property value. The assignedToUserId property
     * @return string|null
    */
    public function getAssignedToUserId(): ?string {
        return $this->assignedToUserId;
    }

    /**
     * Gets the correlationCount property value. The correlationCount property
     * @return int|null
    */
    public function getCorrelationCount(): ?int {
        return $this->correlationCount;
    }

    /**
     * Gets the correlationId property value. The correlationId property
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
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
     * Gets the emailNotifications property value. The emailNotifications property
     * @return array<ManagedTenantEmailNotification>|null
    */
    public function getEmailNotifications(): ?array {
        return $this->emailNotifications;
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
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the severity property value. The severity property
     * @return AlertSeverity|null
    */
    public function getSeverity(): ?AlertSeverity {
        return $this->severity;
    }

    /**
     * Gets the status property value. The status property
     * @return AlertStatus|null
    */
    public function getStatus(): ?AlertStatus {
        return $this->status;
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('alertData', $this->alertData);
        $writer->writeCollectionOfObjectValues('alertDataReferenceStrings', $this->alertDataReferenceStrings);
        $writer->writeCollectionOfObjectValues('alertLogs', $this->alertLogs);
        $writer->writeObjectValue('alertRule', $this->alertRule);
        $writer->writeStringValue('alertRuleDisplayName', $this->alertRuleDisplayName);
        $writer->writeCollectionOfObjectValues('apiNotifications', $this->apiNotifications);
        $writer->writeStringValue('assignedToUserId', $this->assignedToUserId);
        $writer->writeIntegerValue('correlationCount', $this->correlationCount);
        $writer->writeStringValue('correlationId', $this->correlationId);
        $writer->writeStringValue('createdByUserId', $this->createdByUserId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeCollectionOfObjectValues('emailNotifications', $this->emailNotifications);
        $writer->writeStringValue('lastActionByUserId', $this->lastActionByUserId);
        $writer->writeDateTimeValue('lastActionDateTime', $this->lastActionDateTime);
        $writer->writeStringValue('message', $this->message);
        $writer->writeEnumValue('severity', $this->severity);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeStringValue('title', $this->title);
    }

    /**
     * Sets the alertData property value. The alertData property
     *  @param AlertData|null $value Value to set for the alertData property.
    */
    public function setAlertData(?AlertData $value ): void {
        $this->alertData = $value;
    }

    /**
     * Sets the alertDataReferenceStrings property value. The alertDataReferenceStrings property
     *  @param array<AlertDataReferenceString>|null $value Value to set for the alertDataReferenceStrings property.
    */
    public function setAlertDataReferenceStrings(?array $value ): void {
        $this->alertDataReferenceStrings = $value;
    }

    /**
     * Sets the alertLogs property value. The alertLogs property
     *  @param array<ManagedTenantAlertLog>|null $value Value to set for the alertLogs property.
    */
    public function setAlertLogs(?array $value ): void {
        $this->alertLogs = $value;
    }

    /**
     * Sets the alertRule property value. The alertRule property
     *  @param ManagedTenantAlertRule|null $value Value to set for the alertRule property.
    */
    public function setAlertRule(?ManagedTenantAlertRule $value ): void {
        $this->alertRule = $value;
    }

    /**
     * Sets the alertRuleDisplayName property value. The alertRuleDisplayName property
     *  @param string|null $value Value to set for the alertRuleDisplayName property.
    */
    public function setAlertRuleDisplayName(?string $value ): void {
        $this->alertRuleDisplayName = $value;
    }

    /**
     * Sets the apiNotifications property value. The apiNotifications property
     *  @param array<ManagedTenantApiNotification>|null $value Value to set for the apiNotifications property.
    */
    public function setApiNotifications(?array $value ): void {
        $this->apiNotifications = $value;
    }

    /**
     * Sets the assignedToUserId property value. The assignedToUserId property
     *  @param string|null $value Value to set for the assignedToUserId property.
    */
    public function setAssignedToUserId(?string $value ): void {
        $this->assignedToUserId = $value;
    }

    /**
     * Sets the correlationCount property value. The correlationCount property
     *  @param int|null $value Value to set for the correlationCount property.
    */
    public function setCorrelationCount(?int $value ): void {
        $this->correlationCount = $value;
    }

    /**
     * Sets the correlationId property value. The correlationId property
     *  @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value ): void {
        $this->correlationId = $value;
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
     * Sets the emailNotifications property value. The emailNotifications property
     *  @param array<ManagedTenantEmailNotification>|null $value Value to set for the emailNotifications property.
    */
    public function setEmailNotifications(?array $value ): void {
        $this->emailNotifications = $value;
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
     * Sets the message property value. The message property
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the severity property value. The severity property
     *  @param AlertSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?AlertSeverity $value ): void {
        $this->severity = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param AlertStatus|null $value Value to set for the status property.
    */
    public function setStatus(?AlertStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the tenantId property value. The tenantId property
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the title property value. The title property
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

}
