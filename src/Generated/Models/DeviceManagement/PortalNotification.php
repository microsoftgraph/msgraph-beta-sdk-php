<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PortalNotification implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PortalNotification and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the alertImpact property value. The associated alert impact.
     * @return AlertImpact|null
    */
    public function getAlertImpact(): ?AlertImpact {
        $val = $this->getBackingStore()->get('alertImpact');
        if (is_null($val) || $val instanceof AlertImpact) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertImpact'");
    }

    /**
     * Gets the alertRecordId property value. The associated alert record ID.
     * @return string|null
    */
    public function getAlertRecordId(): ?string {
        $val = $this->getBackingStore()->get('alertRecordId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertRecordId'");
    }

    /**
     * Gets the alertRuleId property value. The associated alert rule ID.
     * @return string|null
    */
    public function getAlertRuleId(): ?string {
        $val = $this->getBackingStore()->get('alertRuleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertRuleId'");
    }

    /**
     * Gets the alertRuleName property value. The associated alert rule name.
     * @return string|null
    */
    public function getAlertRuleName(): ?string {
        $val = $this->getBackingStore()->get('alertRuleName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertRuleName'");
    }

    /**
     * Gets the alertRuleTemplate property value. The associated alert rule template. The possible values are: cloudPcProvisionScenario, cloudPcImageUploadScenario, cloudPcOnPremiseNetworkConnectionCheckScenario, unknownFutureValue, cloudPcInGracePeriodScenario. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: cloudPcInGracePeriodScenario.
     * @return AlertRuleTemplate|null
    */
    public function getAlertRuleTemplate(): ?AlertRuleTemplate {
        $val = $this->getBackingStore()->get('alertRuleTemplate');
        if (is_null($val) || $val instanceof AlertRuleTemplate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertRuleTemplate'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the isPortalNotificationSent property value. true if the portal notification has already been sent to the user; false otherwise.
     * @return bool|null
    */
    public function getIsPortalNotificationSent(): ?bool {
        $val = $this->getBackingStore()->get('isPortalNotificationSent');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPortalNotificationSent'");
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
     * Gets the severity property value. The associated alert rule severity. The possible values are: unknown, informational, warning, critical, unknownFutureValue.
     * @return RuleSeverityType|null
    */
    public function getSeverity(): ?RuleSeverityType {
        $val = $this->getBackingStore()->get('severity');
        if (is_null($val) || $val instanceof RuleSeverityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severity'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('alertImpact', $this->getAlertImpact());
        $writer->writeStringValue('alertRecordId', $this->getAlertRecordId());
        $writer->writeStringValue('alertRuleId', $this->getAlertRuleId());
        $writer->writeStringValue('alertRuleName', $this->getAlertRuleName());
        $writer->writeEnumValue('alertRuleTemplate', $this->getAlertRuleTemplate());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isPortalNotificationSent', $this->getIsPortalNotificationSent());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the alertImpact property value. The associated alert impact.
     * @param AlertImpact|null $value Value to set for the alertImpact property.
    */
    public function setAlertImpact(?AlertImpact $value): void {
        $this->getBackingStore()->set('alertImpact', $value);
    }

    /**
     * Sets the alertRecordId property value. The associated alert record ID.
     * @param string|null $value Value to set for the alertRecordId property.
    */
    public function setAlertRecordId(?string $value): void {
        $this->getBackingStore()->set('alertRecordId', $value);
    }

    /**
     * Sets the alertRuleId property value. The associated alert rule ID.
     * @param string|null $value Value to set for the alertRuleId property.
    */
    public function setAlertRuleId(?string $value): void {
        $this->getBackingStore()->set('alertRuleId', $value);
    }

    /**
     * Sets the alertRuleName property value. The associated alert rule name.
     * @param string|null $value Value to set for the alertRuleName property.
    */
    public function setAlertRuleName(?string $value): void {
        $this->getBackingStore()->set('alertRuleName', $value);
    }

    /**
     * Sets the alertRuleTemplate property value. The associated alert rule template. The possible values are: cloudPcProvisionScenario, cloudPcImageUploadScenario, cloudPcOnPremiseNetworkConnectionCheckScenario, unknownFutureValue, cloudPcInGracePeriodScenario. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: cloudPcInGracePeriodScenario.
     * @param AlertRuleTemplate|null $value Value to set for the alertRuleTemplate property.
    */
    public function setAlertRuleTemplate(?AlertRuleTemplate $value): void {
        $this->getBackingStore()->set('alertRuleTemplate', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the portal notification.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the isPortalNotificationSent property value. true if the portal notification has already been sent to the user; false otherwise.
     * @param bool|null $value Value to set for the isPortalNotificationSent property.
    */
    public function setIsPortalNotificationSent(?bool $value): void {
        $this->getBackingStore()->set('isPortalNotificationSent', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the severity property value. The associated alert rule severity. The possible values are: unknown, informational, warning, critical, unknownFutureValue.
     * @param RuleSeverityType|null $value Value to set for the severity property.
    */
    public function setSeverity(?RuleSeverityType $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

}
