<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomSecurityAttributeAudit extends Entity implements Parsable 
{
    /**
     * Instantiates a new customSecurityAttributeAudit and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomSecurityAttributeAudit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomSecurityAttributeAudit {
        return new CustomSecurityAttributeAudit();
    }

    /**
     * Gets the activityDateTime property value. The activityDateTime property
     * @return DateTime|null
    */
    public function getActivityDateTime(): ?DateTime {
        return $this->getBackingStore()->get('activityDateTime');
    }

    /**
     * Gets the activityDisplayName property value. The activityDisplayName property
     * @return string|null
    */
    public function getActivityDisplayName(): ?string {
        return $this->getBackingStore()->get('activityDisplayName');
    }

    /**
     * Gets the additionalDetails property value. The additionalDetails property
     * @return array<KeyValue>|null
    */
    public function getAdditionalDetails(): ?array {
        return $this->getBackingStore()->get('additionalDetails');
    }

    /**
     * Gets the category property value. The category property
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->getBackingStore()->get('category');
    }

    /**
     * Gets the correlationId property value. The correlationId property
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->getBackingStore()->get('correlationId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activityDateTime' => fn(ParseNode $n) => $o->setActivityDateTime($n->getDateTimeValue()),
            'activityDisplayName' => fn(ParseNode $n) => $o->setActivityDisplayName($n->getStringValue()),
            'additionalDetails' => fn(ParseNode $n) => $o->setAdditionalDetails($n->getCollectionOfObjectValues([KeyValue::class, 'createFromDiscriminatorValue'])),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'initiatedBy' => fn(ParseNode $n) => $o->setInitiatedBy($n->getObjectValue([AuditActivityInitiator::class, 'createFromDiscriminatorValue'])),
            'loggedByService' => fn(ParseNode $n) => $o->setLoggedByService($n->getStringValue()),
            'operationType' => fn(ParseNode $n) => $o->setOperationType($n->getStringValue()),
            'result' => fn(ParseNode $n) => $o->setResult($n->getEnumValue(OperationResult::class)),
            'resultReason' => fn(ParseNode $n) => $o->setResultReason($n->getStringValue()),
            'targetResources' => fn(ParseNode $n) => $o->setTargetResources($n->getCollectionOfObjectValues([TargetResource::class, 'createFromDiscriminatorValue'])),
            'userAgent' => fn(ParseNode $n) => $o->setUserAgent($n->getStringValue()),
        ]);
    }

    /**
     * Gets the initiatedBy property value. The initiatedBy property
     * @return AuditActivityInitiator|null
    */
    public function getInitiatedBy(): ?AuditActivityInitiator {
        return $this->getBackingStore()->get('initiatedBy');
    }

    /**
     * Gets the loggedByService property value. The loggedByService property
     * @return string|null
    */
    public function getLoggedByService(): ?string {
        return $this->getBackingStore()->get('loggedByService');
    }

    /**
     * Gets the operationType property value. The operationType property
     * @return string|null
    */
    public function getOperationType(): ?string {
        return $this->getBackingStore()->get('operationType');
    }

    /**
     * Gets the result property value. The result property
     * @return OperationResult|null
    */
    public function getResult(): ?OperationResult {
        return $this->getBackingStore()->get('result');
    }

    /**
     * Gets the resultReason property value. The resultReason property
     * @return string|null
    */
    public function getResultReason(): ?string {
        return $this->getBackingStore()->get('resultReason');
    }

    /**
     * Gets the targetResources property value. The targetResources property
     * @return array<TargetResource>|null
    */
    public function getTargetResources(): ?array {
        return $this->getBackingStore()->get('targetResources');
    }

    /**
     * Gets the userAgent property value. The userAgent property
     * @return string|null
    */
    public function getUserAgent(): ?string {
        return $this->getBackingStore()->get('userAgent');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('activityDateTime', $this->getActivityDateTime());
        $writer->writeStringValue('activityDisplayName', $this->getActivityDisplayName());
        $writer->writeCollectionOfObjectValues('additionalDetails', $this->getAdditionalDetails());
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeObjectValue('initiatedBy', $this->getInitiatedBy());
        $writer->writeStringValue('loggedByService', $this->getLoggedByService());
        $writer->writeStringValue('operationType', $this->getOperationType());
        $writer->writeEnumValue('result', $this->getResult());
        $writer->writeStringValue('resultReason', $this->getResultReason());
        $writer->writeCollectionOfObjectValues('targetResources', $this->getTargetResources());
        $writer->writeStringValue('userAgent', $this->getUserAgent());
    }

    /**
     * Sets the activityDateTime property value. The activityDateTime property
     * @param DateTime|null $value Value to set for the activityDateTime property.
    */
    public function setActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('activityDateTime', $value);
    }

    /**
     * Sets the activityDisplayName property value. The activityDisplayName property
     * @param string|null $value Value to set for the activityDisplayName property.
    */
    public function setActivityDisplayName(?string $value): void {
        $this->getBackingStore()->set('activityDisplayName', $value);
    }

    /**
     * Sets the additionalDetails property value. The additionalDetails property
     * @param array<KeyValue>|null $value Value to set for the additionalDetails property.
    */
    public function setAdditionalDetails(?array $value): void {
        $this->getBackingStore()->set('additionalDetails', $value);
    }

    /**
     * Sets the category property value. The category property
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the correlationId property value. The correlationId property
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->getBackingStore()->set('correlationId', $value);
    }

    /**
     * Sets the initiatedBy property value. The initiatedBy property
     * @param AuditActivityInitiator|null $value Value to set for the initiatedBy property.
    */
    public function setInitiatedBy(?AuditActivityInitiator $value): void {
        $this->getBackingStore()->set('initiatedBy', $value);
    }

    /**
     * Sets the loggedByService property value. The loggedByService property
     * @param string|null $value Value to set for the loggedByService property.
    */
    public function setLoggedByService(?string $value): void {
        $this->getBackingStore()->set('loggedByService', $value);
    }

    /**
     * Sets the operationType property value. The operationType property
     * @param string|null $value Value to set for the operationType property.
    */
    public function setOperationType(?string $value): void {
        $this->getBackingStore()->set('operationType', $value);
    }

    /**
     * Sets the result property value. The result property
     * @param OperationResult|null $value Value to set for the result property.
    */
    public function setResult(?OperationResult $value): void {
        $this->getBackingStore()->set('result', $value);
    }

    /**
     * Sets the resultReason property value. The resultReason property
     * @param string|null $value Value to set for the resultReason property.
    */
    public function setResultReason(?string $value): void {
        $this->getBackingStore()->set('resultReason', $value);
    }

    /**
     * Sets the targetResources property value. The targetResources property
     * @param array<TargetResource>|null $value Value to set for the targetResources property.
    */
    public function setTargetResources(?array $value): void {
        $this->getBackingStore()->set('targetResources', $value);
    }

    /**
     * Sets the userAgent property value. The userAgent property
     * @param string|null $value Value to set for the userAgent property.
    */
    public function setUserAgent(?string $value): void {
        $this->getBackingStore()->set('userAgent', $value);
    }

}
