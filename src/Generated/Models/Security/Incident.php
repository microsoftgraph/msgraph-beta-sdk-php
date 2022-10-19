<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Incident extends Entity implements Parsable 
{
    /**
     * @var array<Alert>|null $alerts The list of related alerts. Supports $expand.
    */
    private ?array $alerts = null;
    
    /**
     * @var string|null $assignedTo Owner of the incident, or null if no owner is assigned. Free editable text.
    */
    private ?string $assignedTo = null;
    
    /**
     * @var AlertClassification|null $classification The specification for the incident. Possible values are: unknown, falsePositive, truePositive, informationalExpectedActivity, unknownFutureValue.
    */
    private ?AlertClassification $classification = null;
    
    /**
     * @var array<AlertComment>|null $comments Array of comments created by the Security Operations (SecOps) team when the incident is managed.
    */
    private ?array $comments = null;
    
    /**
     * @var DateTime|null $createdDateTime Time when the incident was first created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var AlertDetermination|null $determination Specifies the determination of the incident. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedUser, phishing, maliciousUserActivity, clean, insufficientData, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue.
    */
    private ?AlertDetermination $determination = null;
    
    /**
     * @var string|null $displayName The incident name.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $incidentWebUrl The URL for the incident page in the Microsoft 365 Defender portal.
    */
    private ?string $incidentWebUrl = null;
    
    /**
     * @var DateTime|null $lastUpdateDateTime Time when the incident was last updated.
    */
    private ?DateTime $lastUpdateDateTime = null;
    
    /**
     * @var string|null $redirectIncidentId Only populated in case an incident is grouped together with another incident, as part of the logic that processes incidents. In such a case, the status property is redirected.
    */
    private ?string $redirectIncidentId = null;
    
    /**
     * @var AlertSeverity|null $severity The severity property
    */
    private ?AlertSeverity $severity = null;
    
    /**
     * @var IncidentStatus|null $status The status property
    */
    private ?IncidentStatus $status = null;
    
    /**
     * @var array<string>|null $tags Array of custom tags associated with an incident.
    */
    private ?array $tags = null;
    
    /**
     * @var string|null $tenantId The Azure Active Directory tenant in which the alert was created.
    */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new incident and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.incident');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Incident
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Incident {
        return new Incident();
    }

    /**
     * Gets the alerts property value. The list of related alerts. Supports $expand.
     * @return array<Alert>|null
    */
    public function getAlerts(): ?array {
        return $this->alerts;
    }

    /**
     * Gets the assignedTo property value. Owner of the incident, or null if no owner is assigned. Free editable text.
     * @return string|null
    */
    public function getAssignedTo(): ?string {
        return $this->assignedTo;
    }

    /**
     * Gets the classification property value. The specification for the incident. Possible values are: unknown, falsePositive, truePositive, informationalExpectedActivity, unknownFutureValue.
     * @return AlertClassification|null
    */
    public function getClassification(): ?AlertClassification {
        return $this->classification;
    }

    /**
     * Gets the comments property value. Array of comments created by the Security Operations (SecOps) team when the incident is managed.
     * @return array<AlertComment>|null
    */
    public function getComments(): ?array {
        return $this->comments;
    }

    /**
     * Gets the createdDateTime property value. Time when the incident was first created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the determination property value. Specifies the determination of the incident. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedUser, phishing, maliciousUserActivity, clean, insufficientData, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue.
     * @return AlertDetermination|null
    */
    public function getDetermination(): ?AlertDetermination {
        return $this->determination;
    }

    /**
     * Gets the displayName property value. The incident name.
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
            'alerts' => fn(ParseNode $n) => $o->setAlerts($n->getCollectionOfObjectValues([Alert::class, 'createFromDiscriminatorValue'])),
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getStringValue()),
            'classification' => fn(ParseNode $n) => $o->setClassification($n->getEnumValue(AlertClassification::class)),
            'comments' => fn(ParseNode $n) => $o->setComments($n->getCollectionOfObjectValues([AlertComment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'determination' => fn(ParseNode $n) => $o->setDetermination($n->getEnumValue(AlertDetermination::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'incidentWebUrl' => fn(ParseNode $n) => $o->setIncidentWebUrl($n->getStringValue()),
            'lastUpdateDateTime' => fn(ParseNode $n) => $o->setLastUpdateDateTime($n->getDateTimeValue()),
            'redirectIncidentId' => fn(ParseNode $n) => $o->setRedirectIncidentId($n->getStringValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(AlertSeverity::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(IncidentStatus::class)),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfPrimitiveValues()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the incidentWebUrl property value. The URL for the incident page in the Microsoft 365 Defender portal.
     * @return string|null
    */
    public function getIncidentWebUrl(): ?string {
        return $this->incidentWebUrl;
    }

    /**
     * Gets the lastUpdateDateTime property value. Time when the incident was last updated.
     * @return DateTime|null
    */
    public function getLastUpdateDateTime(): ?DateTime {
        return $this->lastUpdateDateTime;
    }

    /**
     * Gets the redirectIncidentId property value. Only populated in case an incident is grouped together with another incident, as part of the logic that processes incidents. In such a case, the status property is redirected.
     * @return string|null
    */
    public function getRedirectIncidentId(): ?string {
        return $this->redirectIncidentId;
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
     * @return IncidentStatus|null
    */
    public function getStatus(): ?IncidentStatus {
        return $this->status;
    }

    /**
     * Gets the tags property value. Array of custom tags associated with an incident.
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant in which the alert was created.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('alerts', $this->alerts);
        $writer->writeStringValue('assignedTo', $this->assignedTo);
        $writer->writeEnumValue('classification', $this->classification);
        $writer->writeCollectionOfObjectValues('comments', $this->comments);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeEnumValue('determination', $this->determination);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('incidentWebUrl', $this->incidentWebUrl);
        $writer->writeDateTimeValue('lastUpdateDateTime', $this->lastUpdateDateTime);
        $writer->writeStringValue('redirectIncidentId', $this->redirectIncidentId);
        $writer->writeEnumValue('severity', $this->severity);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeCollectionOfPrimitiveValues('tags', $this->tags);
        $writer->writeStringValue('tenantId', $this->tenantId);
    }

    /**
     * Sets the alerts property value. The list of related alerts. Supports $expand.
     *  @param array<Alert>|null $value Value to set for the alerts property.
    */
    public function setAlerts(?array $value ): void {
        $this->alerts = $value;
    }

    /**
     * Sets the assignedTo property value. Owner of the incident, or null if no owner is assigned. Free editable text.
     *  @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value ): void {
        $this->assignedTo = $value;
    }

    /**
     * Sets the classification property value. The specification for the incident. Possible values are: unknown, falsePositive, truePositive, informationalExpectedActivity, unknownFutureValue.
     *  @param AlertClassification|null $value Value to set for the classification property.
    */
    public function setClassification(?AlertClassification $value ): void {
        $this->classification = $value;
    }

    /**
     * Sets the comments property value. Array of comments created by the Security Operations (SecOps) team when the incident is managed.
     *  @param array<AlertComment>|null $value Value to set for the comments property.
    */
    public function setComments(?array $value ): void {
        $this->comments = $value;
    }

    /**
     * Sets the createdDateTime property value. Time when the incident was first created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the determination property value. Specifies the determination of the incident. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedUser, phishing, maliciousUserActivity, clean, insufficientData, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue.
     *  @param AlertDetermination|null $value Value to set for the determination property.
    */
    public function setDetermination(?AlertDetermination $value ): void {
        $this->determination = $value;
    }

    /**
     * Sets the displayName property value. The incident name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the incidentWebUrl property value. The URL for the incident page in the Microsoft 365 Defender portal.
     *  @param string|null $value Value to set for the incidentWebUrl property.
    */
    public function setIncidentWebUrl(?string $value ): void {
        $this->incidentWebUrl = $value;
    }

    /**
     * Sets the lastUpdateDateTime property value. Time when the incident was last updated.
     *  @param DateTime|null $value Value to set for the lastUpdateDateTime property.
    */
    public function setLastUpdateDateTime(?DateTime $value ): void {
        $this->lastUpdateDateTime = $value;
    }

    /**
     * Sets the redirectIncidentId property value. Only populated in case an incident is grouped together with another incident, as part of the logic that processes incidents. In such a case, the status property is redirected.
     *  @param string|null $value Value to set for the redirectIncidentId property.
    */
    public function setRedirectIncidentId(?string $value ): void {
        $this->redirectIncidentId = $value;
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
     *  @param IncidentStatus|null $value Value to set for the status property.
    */
    public function setStatus(?IncidentStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the tags property value. Array of custom tags associated with an incident.
     *  @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value ): void {
        $this->tags = $value;
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant in which the alert was created.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
