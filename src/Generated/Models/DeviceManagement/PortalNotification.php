<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PortalNotification implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AlertImpact|null $alertImpact The alertImpact property
    */
    private ?AlertImpact $alertImpact = null;
    
    /**
     * @var string|null $alertRecordId The alertRecordId property
    */
    private ?string $alertRecordId = null;
    
    /**
     * @var string|null $alertRuleId The alertRuleId property
    */
    private ?string $alertRuleId = null;
    
    /**
     * @var string|null $alertRuleName The alertRuleName property
    */
    private ?string $alertRuleName = null;
    
    /**
     * @var AlertRuleTemplate|null $alertRuleTemplate The alertRuleTemplate property
    */
    private ?AlertRuleTemplate $alertRuleTemplate = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isPortalNotificationSent The isPortalNotificationSent property
    */
    private ?bool $isPortalNotificationSent = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var RuleSeverityType|null $severity The severity property
    */
    private ?RuleSeverityType $severity = null;
    
    /**
     * Instantiates a new portalNotification and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceManagement.portalNotification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PortalNotification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PortalNotification {
        return new PortalNotification();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the alertImpact property value. The alertImpact property
     * @return AlertImpact|null
    */
    public function getAlertImpact(): ?AlertImpact {
        return $this->alertImpact;
    }

    /**
     * Gets the alertRecordId property value. The alertRecordId property
     * @return string|null
    */
    public function getAlertRecordId(): ?string {
        return $this->alertRecordId;
    }

    /**
     * Gets the alertRuleId property value. The alertRuleId property
     * @return string|null
    */
    public function getAlertRuleId(): ?string {
        return $this->alertRuleId;
    }

    /**
     * Gets the alertRuleName property value. The alertRuleName property
     * @return string|null
    */
    public function getAlertRuleName(): ?string {
        return $this->alertRuleName;
    }

    /**
     * Gets the alertRuleTemplate property value. The alertRuleTemplate property
     * @return AlertRuleTemplate|null
    */
    public function getAlertRuleTemplate(): ?AlertRuleTemplate {
        return $this->alertRuleTemplate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alertImpact' => function (ParseNode $n) use ($o) { $o->setAlertImpact($n->getObjectValue(array(AlertImpact::class, 'createFromDiscriminatorValue'))); },
            'alertRecordId' => function (ParseNode $n) use ($o) { $o->setAlertRecordId($n->getStringValue()); },
            'alertRuleId' => function (ParseNode $n) use ($o) { $o->setAlertRuleId($n->getStringValue()); },
            'alertRuleName' => function (ParseNode $n) use ($o) { $o->setAlertRuleName($n->getStringValue()); },
            'alertRuleTemplate' => function (ParseNode $n) use ($o) { $o->setAlertRuleTemplate($n->getEnumValue(AlertRuleTemplate::class)); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'isPortalNotificationSent' => function (ParseNode $n) use ($o) { $o->setIsPortalNotificationSent($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'severity' => function (ParseNode $n) use ($o) { $o->setSeverity($n->getEnumValue(RuleSeverityType::class)); },
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isPortalNotificationSent property value. The isPortalNotificationSent property
     * @return bool|null
    */
    public function getIsPortalNotificationSent(): ?bool {
        return $this->isPortalNotificationSent;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the severity property value. The severity property
     * @return RuleSeverityType|null
    */
    public function getSeverity(): ?RuleSeverityType {
        return $this->severity;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('alertImpact', $this->alertImpact);
        $writer->writeStringValue('alertRecordId', $this->alertRecordId);
        $writer->writeStringValue('alertRuleId', $this->alertRuleId);
        $writer->writeStringValue('alertRuleName', $this->alertRuleName);
        $writer->writeEnumValue('alertRuleTemplate', $this->alertRuleTemplate);
        $writer->writeStringValue('id', $this->id);
        $writer->writeBooleanValue('isPortalNotificationSent', $this->isPortalNotificationSent);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('severity', $this->severity);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the alertImpact property value. The alertImpact property
     *  @param AlertImpact|null $value Value to set for the alertImpact property.
    */
    public function setAlertImpact(?AlertImpact $value ): void {
        $this->alertImpact = $value;
    }

    /**
     * Sets the alertRecordId property value. The alertRecordId property
     *  @param string|null $value Value to set for the alertRecordId property.
    */
    public function setAlertRecordId(?string $value ): void {
        $this->alertRecordId = $value;
    }

    /**
     * Sets the alertRuleId property value. The alertRuleId property
     *  @param string|null $value Value to set for the alertRuleId property.
    */
    public function setAlertRuleId(?string $value ): void {
        $this->alertRuleId = $value;
    }

    /**
     * Sets the alertRuleName property value. The alertRuleName property
     *  @param string|null $value Value to set for the alertRuleName property.
    */
    public function setAlertRuleName(?string $value ): void {
        $this->alertRuleName = $value;
    }

    /**
     * Sets the alertRuleTemplate property value. The alertRuleTemplate property
     *  @param AlertRuleTemplate|null $value Value to set for the alertRuleTemplate property.
    */
    public function setAlertRuleTemplate(?AlertRuleTemplate $value ): void {
        $this->alertRuleTemplate = $value;
    }

    /**
     * Sets the id property value. The id property
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the isPortalNotificationSent property value. The isPortalNotificationSent property
     *  @param bool|null $value Value to set for the isPortalNotificationSent property.
    */
    public function setIsPortalNotificationSent(?bool $value ): void {
        $this->isPortalNotificationSent = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the severity property value. The severity property
     *  @param RuleSeverityType|null $value Value to set for the severity property.
    */
    public function setSeverity(?RuleSeverityType $value ): void {
        $this->severity = $value;
    }

}
