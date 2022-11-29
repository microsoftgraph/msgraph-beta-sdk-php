<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class JobResponseBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new JobResponseBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return JobResponseBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): JobResponseBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.classificationJobResponse': return new ClassificationJobResponse();
                case '#microsoft.graph.dlpEvaluatePoliciesJobResponse': return new DlpEvaluatePoliciesJobResponse();
                case '#microsoft.graph.evaluateLabelJobResponse': return new EvaluateLabelJobResponse();
            }
        }
        return new JobResponseBase();
    }

    /**
     * Gets the creationDateTime property value. The creationDateTime property
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('creationDateTime');
    }

    /**
     * Gets the endDateTime property value. The endDateTime property
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * Gets the error property value. The error property
     * @return ClassificationError|null
    */
    public function getError(): ?ClassificationError {
        return $this->getBackingStore()->get('error');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'creationDateTime' => fn(ParseNode $n) => $o->setCreationDateTime($n->getDateTimeValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([ClassificationError::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
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
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('creationDateTime', $this->getCreationDateTime());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the creationDateTime property value. The creationDateTime property
     *  @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('creationDateTime', $value);
    }

    /**
     * Sets the endDateTime property value. The endDateTime property
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the error property value. The error property
     *  @param ClassificationError|null $value Value to set for the error property.
    */
    public function setError(?ClassificationError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
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
     * Sets the type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
