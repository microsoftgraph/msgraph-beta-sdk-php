<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcAuditEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcAuditEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcAuditEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcAuditEvent {
        return new CloudPcAuditEvent();
    }

    /**
     * Gets the activity property value. Friendly name of the activity. Optional.
     * @return string|null
    */
    public function getActivity(): ?string {
        return $this->getBackingStore()->get('activity');
    }

    /**
     * Gets the activityDateTime property value. The date time in UTC when the activity was performed. Read-only.
     * @return DateTime|null
    */
    public function getActivityDateTime(): ?DateTime {
        return $this->getBackingStore()->get('activityDateTime');
    }

    /**
     * Gets the activityOperationType property value. The activityOperationType property
     * @return CloudPcAuditActivityOperationType|null
    */
    public function getActivityOperationType(): ?CloudPcAuditActivityOperationType {
        return $this->getBackingStore()->get('activityOperationType');
    }

    /**
     * Gets the activityResult property value. The activityResult property
     * @return CloudPcAuditActivityResult|null
    */
    public function getActivityResult(): ?CloudPcAuditActivityResult {
        return $this->getBackingStore()->get('activityResult');
    }

    /**
     * Gets the activityType property value. The type of activity that was performed. Read-only.
     * @return string|null
    */
    public function getActivityType(): ?string {
        return $this->getBackingStore()->get('activityType');
    }

    /**
     * Gets the actor property value. The actor property
     * @return CloudPcAuditActor|null
    */
    public function getActor(): ?CloudPcAuditActor {
        return $this->getBackingStore()->get('actor');
    }

    /**
     * Gets the category property value. The category property
     * @return CloudPcAuditCategory|null
    */
    public function getCategory(): ?CloudPcAuditCategory {
        return $this->getBackingStore()->get('category');
    }

    /**
     * Gets the componentName property value. Component name. Read-only.
     * @return string|null
    */
    public function getComponentName(): ?string {
        return $this->getBackingStore()->get('componentName');
    }

    /**
     * Gets the correlationId property value. The client request identifier, used to correlate activity within the system. Read-only.
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->getBackingStore()->get('correlationId');
    }

    /**
     * Gets the displayName property value. Event display name. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activity' => fn(ParseNode $n) => $o->setActivity($n->getStringValue()),
            'activityDateTime' => fn(ParseNode $n) => $o->setActivityDateTime($n->getDateTimeValue()),
            'activityOperationType' => fn(ParseNode $n) => $o->setActivityOperationType($n->getEnumValue(CloudPcAuditActivityOperationType::class)),
            'activityResult' => fn(ParseNode $n) => $o->setActivityResult($n->getEnumValue(CloudPcAuditActivityResult::class)),
            'activityType' => fn(ParseNode $n) => $o->setActivityType($n->getStringValue()),
            'actor' => fn(ParseNode $n) => $o->setActor($n->getObjectValue([CloudPcAuditActor::class, 'createFromDiscriminatorValue'])),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(CloudPcAuditCategory::class)),
            'componentName' => fn(ParseNode $n) => $o->setComponentName($n->getStringValue()),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'resources' => fn(ParseNode $n) => $o->setResources($n->getCollectionOfObjectValues([CloudPcAuditResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resources property value. List of cloudPcAuditResource objects. Read-only.
     * @return array<CloudPcAuditResource>|null
    */
    public function getResources(): ?array {
        return $this->getBackingStore()->get('resources');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activity', $this->getActivity());
        $writer->writeDateTimeValue('activityDateTime', $this->getActivityDateTime());
        $writer->writeEnumValue('activityOperationType', $this->getActivityOperationType());
        $writer->writeEnumValue('activityResult', $this->getActivityResult());
        $writer->writeStringValue('activityType', $this->getActivityType());
        $writer->writeObjectValue('actor', $this->getActor());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeStringValue('componentName', $this->getComponentName());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('resources', $this->getResources());
    }

    /**
     * Sets the activity property value. Friendly name of the activity. Optional.
     *  @param string|null $value Value to set for the activity property.
    */
    public function setActivity(?string $value): void {
        $this->getBackingStore()->set('activity', $value);
    }

    /**
     * Sets the activityDateTime property value. The date time in UTC when the activity was performed. Read-only.
     *  @param DateTime|null $value Value to set for the activityDateTime property.
    */
    public function setActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('activityDateTime', $value);
    }

    /**
     * Sets the activityOperationType property value. The activityOperationType property
     *  @param CloudPcAuditActivityOperationType|null $value Value to set for the activityOperationType property.
    */
    public function setActivityOperationType(?CloudPcAuditActivityOperationType $value): void {
        $this->getBackingStore()->set('activityOperationType', $value);
    }

    /**
     * Sets the activityResult property value. The activityResult property
     *  @param CloudPcAuditActivityResult|null $value Value to set for the activityResult property.
    */
    public function setActivityResult(?CloudPcAuditActivityResult $value): void {
        $this->getBackingStore()->set('activityResult', $value);
    }

    /**
     * Sets the activityType property value. The type of activity that was performed. Read-only.
     *  @param string|null $value Value to set for the activityType property.
    */
    public function setActivityType(?string $value): void {
        $this->getBackingStore()->set('activityType', $value);
    }

    /**
     * Sets the actor property value. The actor property
     *  @param CloudPcAuditActor|null $value Value to set for the actor property.
    */
    public function setActor(?CloudPcAuditActor $value): void {
        $this->getBackingStore()->set('actor', $value);
    }

    /**
     * Sets the category property value. The category property
     *  @param CloudPcAuditCategory|null $value Value to set for the category property.
    */
    public function setCategory(?CloudPcAuditCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the componentName property value. Component name. Read-only.
     *  @param string|null $value Value to set for the componentName property.
    */
    public function setComponentName(?string $value): void {
        $this->getBackingStore()->set('componentName', $value);
    }

    /**
     * Sets the correlationId property value. The client request identifier, used to correlate activity within the system. Read-only.
     *  @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->getBackingStore()->set('correlationId', $value);
    }

    /**
     * Sets the displayName property value. Event display name. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the resources property value. List of cloudPcAuditResource objects. Read-only.
     *  @param array<CloudPcAuditResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value): void {
        $this->getBackingStore()->set('resources', $value);
    }

}
