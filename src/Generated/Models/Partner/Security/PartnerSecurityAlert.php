<?php

namespace Microsoft\Graph\Beta\Generated\Models\Partner\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PartnerSecurityAlert extends Entity implements Parsable 
{
    /**
     * Instantiates a new PartnerSecurityAlert and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerSecurityAlert
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerSecurityAlert {
        return new PartnerSecurityAlert();
    }

    /**
     * Gets the activityLogs property value. Represents the activity by a partner and includes details of state transitions, who performed them, and when they occurred.
     * @return array<ActivityLog>|null
    */
    public function getActivityLogs(): ?array {
        $val = $this->getBackingStore()->get('activityLogs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ActivityLog::class);
            /** @var array<ActivityLog>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityLogs'");
    }

    /**
     * Gets the additionalDetails property value. A bag of name-value pairs that contain additional details about an alert.
     * @return AdditionalDataDictionary|null
    */
    public function getAdditionalDetails(): ?AdditionalDataDictionary {
        $val = $this->getBackingStore()->get('additionalDetails');
        if (is_null($val) || $val instanceof AdditionalDataDictionary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalDetails'");
    }

    /**
     * Gets the affectedResources property value. Contains details of the resources affected by the security alert.
     * @return array<AffectedResource>|null
    */
    public function getAffectedResources(): ?array {
        $val = $this->getBackingStore()->get('affectedResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AffectedResource::class);
            /** @var array<AffectedResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'affectedResources'");
    }

    /**
     * Gets the alertType property value. The type of vulnerability that impacts the customer due to this alert.
     * @return string|null
    */
    public function getAlertType(): ?string {
        $val = $this->getBackingStore()->get('alertType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertType'");
    }

    /**
     * Gets the catalogOfferId property value. The modern offer category ID of the subscription.
     * @return string|null
    */
    public function getCatalogOfferId(): ?string {
        $val = $this->getBackingStore()->get('catalogOfferId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogOfferId'");
    }

    /**
     * Gets the confidenceLevel property value. The confidenceLevel property
     * @return SecurityAlertConfidence|null
    */
    public function getConfidenceLevel(): ?SecurityAlertConfidence {
        $val = $this->getBackingStore()->get('confidenceLevel');
        if (is_null($val) || $val instanceof SecurityAlertConfidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'confidenceLevel'");
    }

    /**
     * Gets the customerTenantId property value. The impacted customer tenant associated with the alert.
     * @return string|null
    */
    public function getCustomerTenantId(): ?string {
        $val = $this->getBackingStore()->get('customerTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerTenantId'");
    }

    /**
     * Gets the description property value. The description for each alert.
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
     * Gets the detectedDateTime property value. Time when the alert was detected or created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getDetectedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('detectedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectedDateTime'");
    }

    /**
     * Gets the displayName property value. The display name of the alert.
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
            'activityLogs' => fn(ParseNode $n) => $o->setActivityLogs($n->getCollectionOfObjectValues([ActivityLog::class, 'createFromDiscriminatorValue'])),
            'additionalDetails' => fn(ParseNode $n) => $o->setAdditionalDetails($n->getObjectValue([AdditionalDataDictionary::class, 'createFromDiscriminatorValue'])),
            'affectedResources' => fn(ParseNode $n) => $o->setAffectedResources($n->getCollectionOfObjectValues([AffectedResource::class, 'createFromDiscriminatorValue'])),
            'alertType' => fn(ParseNode $n) => $o->setAlertType($n->getStringValue()),
            'catalogOfferId' => fn(ParseNode $n) => $o->setCatalogOfferId($n->getStringValue()),
            'confidenceLevel' => fn(ParseNode $n) => $o->setConfidenceLevel($n->getEnumValue(SecurityAlertConfidence::class)),
            'customerTenantId' => fn(ParseNode $n) => $o->setCustomerTenantId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'detectedDateTime' => fn(ParseNode $n) => $o->setDetectedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'firstObservedDateTime' => fn(ParseNode $n) => $o->setFirstObservedDateTime($n->getDateTimeValue()),
            'isTest' => fn(ParseNode $n) => $o->setIsTest($n->getBooleanValue()),
            'lastObservedDateTime' => fn(ParseNode $n) => $o->setLastObservedDateTime($n->getDateTimeValue()),
            'resolvedBy' => fn(ParseNode $n) => $o->setResolvedBy($n->getStringValue()),
            'resolvedOnDateTime' => fn(ParseNode $n) => $o->setResolvedOnDateTime($n->getDateTimeValue()),
            'resolvedReason' => fn(ParseNode $n) => $o->setResolvedReason($n->getEnumValue(SecurityAlertResolvedReason::class)),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(SecurityAlertSeverity::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SecurityAlertStatus::class)),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'valueAddedResellerTenantId' => fn(ParseNode $n) => $o->setValueAddedResellerTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the firstObservedDateTime property value. Time of the first activity associated with the alert. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  subscription.
     * @return DateTime|null
    */
    public function getFirstObservedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('firstObservedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstObservedDateTime'");
    }

    /**
     * Gets the isTest property value. Indicates whehter an alert is a test alert.
     * @return bool|null
    */
    public function getIsTest(): ?bool {
        $val = $this->getBackingStore()->get('isTest');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isTest'");
    }

    /**
     * Gets the lastObservedDateTime property value. Time of the latest activity associated with the alert. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastObservedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastObservedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastObservedDateTime'");
    }

    /**
     * Gets the resolvedBy property value. The UPN of the partner user who resolved the alert.
     * @return string|null
    */
    public function getResolvedBy(): ?string {
        $val = $this->getBackingStore()->get('resolvedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resolvedBy'");
    }

    /**
     * Gets the resolvedOnDateTime property value. Time when the alert was resolved. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getResolvedOnDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('resolvedOnDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resolvedOnDateTime'");
    }

    /**
     * Gets the resolvedReason property value. The reason provided by the partner for addressing the alert. The possible values are: legitimate, ignore, fraud, unknownFutureValue.
     * @return SecurityAlertResolvedReason|null
    */
    public function getResolvedReason(): ?SecurityAlertResolvedReason {
        $val = $this->getBackingStore()->get('resolvedReason');
        if (is_null($val) || $val instanceof SecurityAlertResolvedReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resolvedReason'");
    }

    /**
     * Gets the severity property value. The severity property
     * @return SecurityAlertSeverity|null
    */
    public function getSeverity(): ?SecurityAlertSeverity {
        $val = $this->getBackingStore()->get('severity');
        if (is_null($val) || $val instanceof SecurityAlertSeverity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'severity'");
    }

    /**
     * Gets the status property value. The status property
     * @return SecurityAlertStatus|null
    */
    public function getStatus(): ?SecurityAlertStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof SecurityAlertStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the subscriptionId property value. The subscription associated with the alert for the customer.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        $val = $this->getBackingStore()->get('subscriptionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptionId'");
    }

    /**
     * Gets the valueAddedResellerTenantId property value. The value-added reseller tenant associated with the partner tenant and customer tenant.
     * @return string|null
    */
    public function getValueAddedResellerTenantId(): ?string {
        $val = $this->getBackingStore()->get('valueAddedResellerTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'valueAddedResellerTenantId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('activityLogs', $this->getActivityLogs());
        $writer->writeObjectValue('additionalDetails', $this->getAdditionalDetails());
        $writer->writeCollectionOfObjectValues('affectedResources', $this->getAffectedResources());
        $writer->writeStringValue('alertType', $this->getAlertType());
        $writer->writeStringValue('catalogOfferId', $this->getCatalogOfferId());
        $writer->writeEnumValue('confidenceLevel', $this->getConfidenceLevel());
        $writer->writeStringValue('customerTenantId', $this->getCustomerTenantId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeDateTimeValue('detectedDateTime', $this->getDetectedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('firstObservedDateTime', $this->getFirstObservedDateTime());
        $writer->writeBooleanValue('isTest', $this->getIsTest());
        $writer->writeDateTimeValue('lastObservedDateTime', $this->getLastObservedDateTime());
        $writer->writeStringValue('resolvedBy', $this->getResolvedBy());
        $writer->writeDateTimeValue('resolvedOnDateTime', $this->getResolvedOnDateTime());
        $writer->writeEnumValue('resolvedReason', $this->getResolvedReason());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeStringValue('valueAddedResellerTenantId', $this->getValueAddedResellerTenantId());
    }

    /**
     * Sets the activityLogs property value. Represents the activity by a partner and includes details of state transitions, who performed them, and when they occurred.
     * @param array<ActivityLog>|null $value Value to set for the activityLogs property.
    */
    public function setActivityLogs(?array $value): void {
        $this->getBackingStore()->set('activityLogs', $value);
    }

    /**
     * Sets the additionalDetails property value. A bag of name-value pairs that contain additional details about an alert.
     * @param AdditionalDataDictionary|null $value Value to set for the additionalDetails property.
    */
    public function setAdditionalDetails(?AdditionalDataDictionary $value): void {
        $this->getBackingStore()->set('additionalDetails', $value);
    }

    /**
     * Sets the affectedResources property value. Contains details of the resources affected by the security alert.
     * @param array<AffectedResource>|null $value Value to set for the affectedResources property.
    */
    public function setAffectedResources(?array $value): void {
        $this->getBackingStore()->set('affectedResources', $value);
    }

    /**
     * Sets the alertType property value. The type of vulnerability that impacts the customer due to this alert.
     * @param string|null $value Value to set for the alertType property.
    */
    public function setAlertType(?string $value): void {
        $this->getBackingStore()->set('alertType', $value);
    }

    /**
     * Sets the catalogOfferId property value. The modern offer category ID of the subscription.
     * @param string|null $value Value to set for the catalogOfferId property.
    */
    public function setCatalogOfferId(?string $value): void {
        $this->getBackingStore()->set('catalogOfferId', $value);
    }

    /**
     * Sets the confidenceLevel property value. The confidenceLevel property
     * @param SecurityAlertConfidence|null $value Value to set for the confidenceLevel property.
    */
    public function setConfidenceLevel(?SecurityAlertConfidence $value): void {
        $this->getBackingStore()->set('confidenceLevel', $value);
    }

    /**
     * Sets the customerTenantId property value. The impacted customer tenant associated with the alert.
     * @param string|null $value Value to set for the customerTenantId property.
    */
    public function setCustomerTenantId(?string $value): void {
        $this->getBackingStore()->set('customerTenantId', $value);
    }

    /**
     * Sets the description property value. The description for each alert.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the detectedDateTime property value. Time when the alert was detected or created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the detectedDateTime property.
    */
    public function setDetectedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('detectedDateTime', $value);
    }

    /**
     * Sets the displayName property value. The display name of the alert.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the firstObservedDateTime property value. Time of the first activity associated with the alert. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  subscription.
     * @param DateTime|null $value Value to set for the firstObservedDateTime property.
    */
    public function setFirstObservedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstObservedDateTime', $value);
    }

    /**
     * Sets the isTest property value. Indicates whehter an alert is a test alert.
     * @param bool|null $value Value to set for the isTest property.
    */
    public function setIsTest(?bool $value): void {
        $this->getBackingStore()->set('isTest', $value);
    }

    /**
     * Sets the lastObservedDateTime property value. Time of the latest activity associated with the alert. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastObservedDateTime property.
    */
    public function setLastObservedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastObservedDateTime', $value);
    }

    /**
     * Sets the resolvedBy property value. The UPN of the partner user who resolved the alert.
     * @param string|null $value Value to set for the resolvedBy property.
    */
    public function setResolvedBy(?string $value): void {
        $this->getBackingStore()->set('resolvedBy', $value);
    }

    /**
     * Sets the resolvedOnDateTime property value. Time when the alert was resolved. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the resolvedOnDateTime property.
    */
    public function setResolvedOnDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('resolvedOnDateTime', $value);
    }

    /**
     * Sets the resolvedReason property value. The reason provided by the partner for addressing the alert. The possible values are: legitimate, ignore, fraud, unknownFutureValue.
     * @param SecurityAlertResolvedReason|null $value Value to set for the resolvedReason property.
    */
    public function setResolvedReason(?SecurityAlertResolvedReason $value): void {
        $this->getBackingStore()->set('resolvedReason', $value);
    }

    /**
     * Sets the severity property value. The severity property
     * @param SecurityAlertSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?SecurityAlertSeverity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param SecurityAlertStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SecurityAlertStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the subscriptionId property value. The subscription associated with the alert for the customer.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('subscriptionId', $value);
    }

    /**
     * Sets the valueAddedResellerTenantId property value. The value-added reseller tenant associated with the partner tenant and customer tenant.
     * @param string|null $value Value to set for the valueAddedResellerTenantId property.
    */
    public function setValueAddedResellerTenantId(?string $value): void {
        $this->getBackingStore()->set('valueAddedResellerTenantId', $value);
    }

}
