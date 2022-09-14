<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AlertRecord extends Entity implements Parsable 
{
    /**
     * @var AlertImpact|null $alertImpact The alertImpact property
    */
    private ?AlertImpact $alertImpact = null;
    
    /**
     * @var string|null $alertRuleId The alertRuleId property
    */
    private ?string $alertRuleId = null;
    
    /**
     * @var AlertRuleTemplate|null $alertRuleTemplate The alertRuleTemplate property
    */
    private ?AlertRuleTemplate $alertRuleTemplate = null;
    
    /**
     * @var DateTime|null $detectedDateTime The detectedDateTime property
    */
    private ?DateTime $detectedDateTime = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastUpdatedDateTime The lastUpdatedDateTime property
    */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /**
     * @var DateTime|null $resolvedDateTime The resolvedDateTime property
    */
    private ?DateTime $resolvedDateTime = null;
    
    /**
     * @var RuleSeverityType|null $severity The severity property
    */
    private ?RuleSeverityType $severity = null;
    
    /**
     * @var AlertStatusType|null $status The status property
    */
    private ?AlertStatusType $status = null;
    
    /**
     * Instantiates a new alertRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagement.alertRecord');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlertRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlertRecord {
        return new AlertRecord();
    }

    /**
     * Gets the alertImpact property value. The alertImpact property
     * @return AlertImpact|null
    */
    public function getAlertImpact(): ?AlertImpact {
        return $this->alertImpact;
    }

    /**
     * Gets the alertRuleId property value. The alertRuleId property
     * @return string|null
    */
    public function getAlertRuleId(): ?string {
        return $this->alertRuleId;
    }

    /**
     * Gets the alertRuleTemplate property value. The alertRuleTemplate property
     * @return AlertRuleTemplate|null
    */
    public function getAlertRuleTemplate(): ?AlertRuleTemplate {
        return $this->alertRuleTemplate;
    }

    /**
     * Gets the detectedDateTime property value. The detectedDateTime property
     * @return DateTime|null
    */
    public function getDetectedDateTime(): ?DateTime {
        return $this->detectedDateTime;
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
            'alertImpact' => function (ParseNode $n) use ($o) { $o->setAlertImpact($n->getObjectValue(array(AlertImpact::class, 'createFromDiscriminatorValue'))); },
            'alertRuleId' => function (ParseNode $n) use ($o) { $o->setAlertRuleId($n->getStringValue()); },
            'alertRuleTemplate' => function (ParseNode $n) use ($o) { $o->setAlertRuleTemplate($n->getEnumValue(AlertRuleTemplate::class)); },
            'detectedDateTime' => function (ParseNode $n) use ($o) { $o->setDetectedDateTime($n->getDateTimeValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastUpdatedDateTime' => function (ParseNode $n) use ($o) { $o->setLastUpdatedDateTime($n->getDateTimeValue()); },
            'resolvedDateTime' => function (ParseNode $n) use ($o) { $o->setResolvedDateTime($n->getDateTimeValue()); },
            'severity' => function (ParseNode $n) use ($o) { $o->setSeverity($n->getEnumValue(RuleSeverityType::class)); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(AlertStatusType::class)); },
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the resolvedDateTime property value. The resolvedDateTime property
     * @return DateTime|null
    */
    public function getResolvedDateTime(): ?DateTime {
        return $this->resolvedDateTime;
    }

    /**
     * Gets the severity property value. The severity property
     * @return RuleSeverityType|null
    */
    public function getSeverity(): ?RuleSeverityType {
        return $this->severity;
    }

    /**
     * Gets the status property value. The status property
     * @return AlertStatusType|null
    */
    public function getStatus(): ?AlertStatusType {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('alertImpact', $this->alertImpact);
        $writer->writeStringValue('alertRuleId', $this->alertRuleId);
        $writer->writeEnumValue('alertRuleTemplate', $this->alertRuleTemplate);
        $writer->writeDateTimeValue('detectedDateTime', $this->detectedDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeDateTimeValue('resolvedDateTime', $this->resolvedDateTime);
        $writer->writeEnumValue('severity', $this->severity);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the alertImpact property value. The alertImpact property
     *  @param AlertImpact|null $value Value to set for the alertImpact property.
    */
    public function setAlertImpact(?AlertImpact $value ): void {
        $this->alertImpact = $value;
    }

    /**
     * Sets the alertRuleId property value. The alertRuleId property
     *  @param string|null $value Value to set for the alertRuleId property.
    */
    public function setAlertRuleId(?string $value ): void {
        $this->alertRuleId = $value;
    }

    /**
     * Sets the alertRuleTemplate property value. The alertRuleTemplate property
     *  @param AlertRuleTemplate|null $value Value to set for the alertRuleTemplate property.
    */
    public function setAlertRuleTemplate(?AlertRuleTemplate $value ): void {
        $this->alertRuleTemplate = $value;
    }

    /**
     * Sets the detectedDateTime property value. The detectedDateTime property
     *  @param DateTime|null $value Value to set for the detectedDateTime property.
    */
    public function setDetectedDateTime(?DateTime $value ): void {
        $this->detectedDateTime = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the resolvedDateTime property value. The resolvedDateTime property
     *  @param DateTime|null $value Value to set for the resolvedDateTime property.
    */
    public function setResolvedDateTime(?DateTime $value ): void {
        $this->resolvedDateTime = $value;
    }

    /**
     * Sets the severity property value. The severity property
     *  @param RuleSeverityType|null $value Value to set for the severity property.
    */
    public function setSeverity(?RuleSeverityType $value ): void {
        $this->severity = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param AlertStatusType|null $value Value to set for the status property.
    */
    public function setStatus(?AlertStatusType $value ): void {
        $this->status = $value;
    }

}
