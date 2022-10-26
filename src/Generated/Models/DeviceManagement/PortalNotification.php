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
     * @var AlertImpact|null $alertImpact The associated alert impact.
    */
    private ?AlertImpact $alertImpact = null;
    
    /**
     * @var string|null $alertRecordId The associated alert record ID.
    */
    private ?string $alertRecordId = null;
    
    /**
     * @var string|null $alertRuleId The associated alert rule ID.
    */
    private ?string $alertRuleId = null;
    
    /**
     * @var string|null $alertRuleName The associated alert rule name.
    */
    private ?string $alertRuleName = null;
    
    /**
     * @var AlertRuleTemplate|null $alertRuleTemplate The associated alert rule template. The possible values are: cloudPcProvisionScenario, cloudPcImageUploadScenario, cloudPcOnPremiseNetworkConnectionCheckScenario, unknownFutureValue.
    */
    private ?AlertRuleTemplate $alertRuleTemplate = null;
    
    /**
     * @var string|null $id The unique identifier for the portal notification.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isPortalNotificationSent If true, the portal notification has already been sent for the user; otherwise, the portal notification hasn't been sent yet.
    */
    private ?bool $isPortalNotificationSent = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var RuleSeverityType|null $severity The associated alert rule severity. The possible values are: unknown, informational, warning, critical, unknownFutureValue.
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
     * Gets the alertImpact property value. The associated alert impact.
     * @return AlertImpact|null
    */
    public function getAlertImpact(): ?AlertImpact {
        return $this->alertImpact;
    }

    /**
     * Gets the alertRecordId property value. The associated alert record ID.
     * @return string|null
    */
    public function getAlertRecordId(): ?string {
        return $this->alertRecordId;
    }

    /**
     * Gets the alertRuleId property value. The associated alert rule ID.
     * @return string|null
    */
    public function getAlertRuleId(): ?string {
        return $this->alertRuleId;
    }

    /**
     * Gets the alertRuleName property value. The associated alert rule name.
     * @return string|null
    */
    public function getAlertRuleName(): ?string {
        return $this->alertRuleName;
    }

    /**
     * Gets the alertRuleTemplate property value. The associated alert rule template. The possible values are: cloudPcProvisionScenario, cloudPcImageUploadScenario, cloudPcOnPremiseNetworkConnectionCheckScenario, unknownFutureValue.
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
            'alertImpact' => fn(ParseNode $n) => $o->setAlertImpact($n->getObjectValue([AlertImpact::class, 'createFromDiscriminatorValue'])),
            'alertRecordId' => fn(ParseNode $n) => $o->setAlertRecordId($n->getStringValue()),
            'alertRuleId' => fn(ParseNode $n) => $o->setAlertRuleId($n->getStringValue()),
            'alertRuleName' => fn(ParseNode $n) => $o->setAlertRuleName($n->getStringValue()),
            'alertRuleTemplate' => fn(ParseNode $n) => $o->setAlertRuleTemplate($n->getEnumValue(AlertRuleTemplate::class)),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isPortalNotificationSent' => fn(ParseNode $n) => $o->setIsPortalNotificationSent($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(RuleSeverityType::class)),
        ];
    }

    /**
     * Gets the id property value. The unique identifier for the portal notification.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isPortalNotificationSent property value. If true, the portal notification has already been sent for the user; otherwise, the portal notification hasn't been sent yet.
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
     * Gets the severity property value. The associated alert rule severity. The possible values are: unknown, informational, warning, critical, unknownFutureValue.
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
     * Sets the alertImpact property value. The associated alert impact.
     *  @param AlertImpact|null $value Value to set for the alertImpact property.
    */
    public function setAlertImpact(?AlertImpact $value ): void {
        $this->alertImpact = $value;
    }

    /**
     * Sets the alertRecordId property value. The associated alert record ID.
     *  @param string|null $value Value to set for the alertRecordId property.
    */
    public function setAlertRecordId(?string $value ): void {
        $this->alertRecordId = $value;
    }

    /**
     * Sets the alertRuleId property value. The associated alert rule ID.
     *  @param string|null $value Value to set for the alertRuleId property.
    */
    public function setAlertRuleId(?string $value ): void {
        $this->alertRuleId = $value;
    }

    /**
     * Sets the alertRuleName property value. The associated alert rule name.
     *  @param string|null $value Value to set for the alertRuleName property.
    */
    public function setAlertRuleName(?string $value ): void {
        $this->alertRuleName = $value;
    }

    /**
     * Sets the alertRuleTemplate property value. The associated alert rule template. The possible values are: cloudPcProvisionScenario, cloudPcImageUploadScenario, cloudPcOnPremiseNetworkConnectionCheckScenario, unknownFutureValue.
     *  @param AlertRuleTemplate|null $value Value to set for the alertRuleTemplate property.
    */
    public function setAlertRuleTemplate(?AlertRuleTemplate $value ): void {
        $this->alertRuleTemplate = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the portal notification.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the isPortalNotificationSent property value. If true, the portal notification has already been sent for the user; otherwise, the portal notification hasn't been sent yet.
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
     * Sets the severity property value. The associated alert rule severity. The possible values are: unknown, informational, warning, critical, unknownFutureValue.
     *  @param RuleSeverityType|null $value Value to set for the severity property.
    */
    public function setSeverity(?RuleSeverityType $value ): void {
        $this->severity = $value;
    }

}
