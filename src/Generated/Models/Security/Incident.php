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
     * @var array<Alert>|null $alerts The alerts property
    */
    private ?array $alerts = null;
    
    /**
     * @var string|null $assignedTo The assignedTo property
    */
    private ?string $assignedTo = null;
    
    /**
     * @var AlertClassification|null $classification The classification property
    */
    private ?AlertClassification $classification = null;
    
    /**
     * @var array<AlertComment>|null $comments The comments property
    */
    private ?array $comments = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var AlertDetermination|null $determination The determination property
    */
    private ?AlertDetermination $determination = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $incidentWebUrl The incidentWebUrl property
    */
    private ?string $incidentWebUrl = null;
    
    /**
     * @var DateTime|null $lastUpdateDateTime The lastUpdateDateTime property
    */
    private ?DateTime $lastUpdateDateTime = null;
    
    /**
     * @var string|null $redirectIncidentId The redirectIncidentId property
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
     * @var array<string>|null $tags The tags property
    */
    private ?array $tags = null;
    
    /**
     * @var string|null $tenantId The tenantId property
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
     * Gets the alerts property value. The alerts property
     * @return array<Alert>|null
    */
    public function getAlerts(): ?array {
        return $this->alerts;
    }

    /**
     * Gets the assignedTo property value. The assignedTo property
     * @return string|null
    */
    public function getAssignedTo(): ?string {
        return $this->assignedTo;
    }

    /**
     * Gets the classification property value. The classification property
     * @return AlertClassification|null
    */
    public function getClassification(): ?AlertClassification {
        return $this->classification;
    }

    /**
     * Gets the comments property value. The comments property
     * @return array<AlertComment>|null
    */
    public function getComments(): ?array {
        return $this->comments;
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the determination property value. The determination property
     * @return AlertDetermination|null
    */
    public function getDetermination(): ?AlertDetermination {
        return $this->determination;
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
            'alerts' => function (ParseNode $n) use ($o) { $o->setAlerts($n->getCollectionOfObjectValues(array(Alert::class, 'createFromDiscriminatorValue'))); },
            'assignedTo' => function (ParseNode $n) use ($o) { $o->setAssignedTo($n->getStringValue()); },
            'classification' => function (ParseNode $n) use ($o) { $o->setClassification($n->getEnumValue(AlertClassification::class)); },
            'comments' => function (ParseNode $n) use ($o) { $o->setComments($n->getCollectionOfObjectValues(array(AlertComment::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'determination' => function (ParseNode $n) use ($o) { $o->setDetermination($n->getEnumValue(AlertDetermination::class)); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'incidentWebUrl' => function (ParseNode $n) use ($o) { $o->setIncidentWebUrl($n->getStringValue()); },
            'lastUpdateDateTime' => function (ParseNode $n) use ($o) { $o->setLastUpdateDateTime($n->getDateTimeValue()); },
            'redirectIncidentId' => function (ParseNode $n) use ($o) { $o->setRedirectIncidentId($n->getStringValue()); },
            'severity' => function (ParseNode $n) use ($o) { $o->setSeverity($n->getEnumValue(AlertSeverity::class)); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(IncidentStatus::class)); },
            'tags' => function (ParseNode $n) use ($o) { $o->setTags($n->getCollectionOfPrimitiveValues()); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the incidentWebUrl property value. The incidentWebUrl property
     * @return string|null
    */
    public function getIncidentWebUrl(): ?string {
        return $this->incidentWebUrl;
    }

    /**
     * Gets the lastUpdateDateTime property value. The lastUpdateDateTime property
     * @return DateTime|null
    */
    public function getLastUpdateDateTime(): ?DateTime {
        return $this->lastUpdateDateTime;
    }

    /**
     * Gets the redirectIncidentId property value. The redirectIncidentId property
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
     * Gets the tags property value. The tags property
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Gets the tenantId property value. The tenantId property
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
     * Sets the alerts property value. The alerts property
     *  @param array<Alert>|null $value Value to set for the alerts property.
    */
    public function setAlerts(?array $value ): void {
        $this->alerts = $value;
    }

    /**
     * Sets the assignedTo property value. The assignedTo property
     *  @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value ): void {
        $this->assignedTo = $value;
    }

    /**
     * Sets the classification property value. The classification property
     *  @param AlertClassification|null $value Value to set for the classification property.
    */
    public function setClassification(?AlertClassification $value ): void {
        $this->classification = $value;
    }

    /**
     * Sets the comments property value. The comments property
     *  @param array<AlertComment>|null $value Value to set for the comments property.
    */
    public function setComments(?array $value ): void {
        $this->comments = $value;
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the determination property value. The determination property
     *  @param AlertDetermination|null $value Value to set for the determination property.
    */
    public function setDetermination(?AlertDetermination $value ): void {
        $this->determination = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the incidentWebUrl property value. The incidentWebUrl property
     *  @param string|null $value Value to set for the incidentWebUrl property.
    */
    public function setIncidentWebUrl(?string $value ): void {
        $this->incidentWebUrl = $value;
    }

    /**
     * Sets the lastUpdateDateTime property value. The lastUpdateDateTime property
     *  @param DateTime|null $value Value to set for the lastUpdateDateTime property.
    */
    public function setLastUpdateDateTime(?DateTime $value ): void {
        $this->lastUpdateDateTime = $value;
    }

    /**
     * Sets the redirectIncidentId property value. The redirectIncidentId property
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
     * Sets the tags property value. The tags property
     *  @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value ): void {
        $this->tags = $value;
    }

    /**
     * Sets the tenantId property value. The tenantId property
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
