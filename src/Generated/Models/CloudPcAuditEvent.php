<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcAuditEvent extends Entity implements Parsable 
{
    /**
     * @var string|null $activity Friendly name of the activity. Optional.
    */
    private ?string $activity = null;
    
    /**
     * @var DateTime|null $activityDateTime The date time in UTC when the activity was performed. Read-only.
    */
    private ?DateTime $activityDateTime = null;
    
    /**
     * @var CloudPcAuditActivityOperationType|null $activityOperationType The HTTP operation type of the activity. Possible values include create, delete, patch and other. Read-only.
    */
    private ?CloudPcAuditActivityOperationType $activityOperationType = null;
    
    /**
     * @var CloudPcAuditActivityResult|null $activityResult The result of the activity. Read-only.
    */
    private ?CloudPcAuditActivityResult $activityResult = null;
    
    /**
     * @var string|null $activityType The type of activity that was performed. Read-only.
    */
    private ?string $activityType = null;
    
    /**
     * @var CloudPcAuditActor|null $actor The actor property
    */
    private ?CloudPcAuditActor $actor = null;
    
    /**
     * @var CloudPcAuditCategory|null $category Audit category. Read-only.
    */
    private ?CloudPcAuditCategory $category = null;
    
    /**
     * @var string|null $componentName Component name. Read-only.
    */
    private ?string $componentName = null;
    
    /**
     * @var string|null $correlationId The client request identifier, used to correlate activity within the system. Read-only.
    */
    private ?string $correlationId = null;
    
    /**
     * @var string|null $displayName Event display name. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<CloudPcAuditResource>|null $resources List of cloudPcAuditResource objects. Read-only.
    */
    private ?array $resources = null;
    
    /**
     * Instantiates a new cloudPcAuditEvent and sets the default values.
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
        return $this->activity;
    }

    /**
     * Gets the activityDateTime property value. The date time in UTC when the activity was performed. Read-only.
     * @return DateTime|null
    */
    public function getActivityDateTime(): ?DateTime {
        return $this->activityDateTime;
    }

    /**
     * Gets the activityOperationType property value. The HTTP operation type of the activity. Possible values include create, delete, patch and other. Read-only.
     * @return CloudPcAuditActivityOperationType|null
    */
    public function getActivityOperationType(): ?CloudPcAuditActivityOperationType {
        return $this->activityOperationType;
    }

    /**
     * Gets the activityResult property value. The result of the activity. Read-only.
     * @return CloudPcAuditActivityResult|null
    */
    public function getActivityResult(): ?CloudPcAuditActivityResult {
        return $this->activityResult;
    }

    /**
     * Gets the activityType property value. The type of activity that was performed. Read-only.
     * @return string|null
    */
    public function getActivityType(): ?string {
        return $this->activityType;
    }

    /**
     * Gets the actor property value. The actor property
     * @return CloudPcAuditActor|null
    */
    public function getActor(): ?CloudPcAuditActor {
        return $this->actor;
    }

    /**
     * Gets the category property value. Audit category. Read-only.
     * @return CloudPcAuditCategory|null
    */
    public function getCategory(): ?CloudPcAuditCategory {
        return $this->category;
    }

    /**
     * Gets the componentName property value. Component name. Read-only.
     * @return string|null
    */
    public function getComponentName(): ?string {
        return $this->componentName;
    }

    /**
     * Gets the correlationId property value. The client request identifier, used to correlate activity within the system. Read-only.
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
    }

    /**
     * Gets the displayName property value. Event display name. Read-only.
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
            'activity' => function (ParseNode $n) use ($o) { $o->setActivity($n->getStringValue()); },
            'activityDateTime' => function (ParseNode $n) use ($o) { $o->setActivityDateTime($n->getDateTimeValue()); },
            'activityOperationType' => function (ParseNode $n) use ($o) { $o->setActivityOperationType($n->getEnumValue(CloudPcAuditActivityOperationType::class)); },
            'activityResult' => function (ParseNode $n) use ($o) { $o->setActivityResult($n->getEnumValue(CloudPcAuditActivityResult::class)); },
            'activityType' => function (ParseNode $n) use ($o) { $o->setActivityType($n->getStringValue()); },
            'actor' => function (ParseNode $n) use ($o) { $o->setActor($n->getObjectValue(array(CloudPcAuditActor::class, 'createFromDiscriminatorValue'))); },
            'category' => function (ParseNode $n) use ($o) { $o->setCategory($n->getEnumValue(CloudPcAuditCategory::class)); },
            'componentName' => function (ParseNode $n) use ($o) { $o->setComponentName($n->getStringValue()); },
            'correlationId' => function (ParseNode $n) use ($o) { $o->setCorrelationId($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'resources' => function (ParseNode $n) use ($o) { $o->setResources($n->getCollectionOfObjectValues(array(CloudPcAuditResource::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the resources property value. List of cloudPcAuditResource objects. Read-only.
     * @return array<CloudPcAuditResource>|null
    */
    public function getResources(): ?array {
        return $this->resources;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activity', $this->activity);
        $writer->writeDateTimeValue('activityDateTime', $this->activityDateTime);
        $writer->writeEnumValue('activityOperationType', $this->activityOperationType);
        $writer->writeEnumValue('activityResult', $this->activityResult);
        $writer->writeStringValue('activityType', $this->activityType);
        $writer->writeObjectValue('actor', $this->actor);
        $writer->writeEnumValue('category', $this->category);
        $writer->writeStringValue('componentName', $this->componentName);
        $writer->writeStringValue('correlationId', $this->correlationId);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('resources', $this->resources);
    }

    /**
     * Sets the activity property value. Friendly name of the activity. Optional.
     *  @param string|null $value Value to set for the activity property.
    */
    public function setActivity(?string $value ): void {
        $this->activity = $value;
    }

    /**
     * Sets the activityDateTime property value. The date time in UTC when the activity was performed. Read-only.
     *  @param DateTime|null $value Value to set for the activityDateTime property.
    */
    public function setActivityDateTime(?DateTime $value ): void {
        $this->activityDateTime = $value;
    }

    /**
     * Sets the activityOperationType property value. The HTTP operation type of the activity. Possible values include create, delete, patch and other. Read-only.
     *  @param CloudPcAuditActivityOperationType|null $value Value to set for the activityOperationType property.
    */
    public function setActivityOperationType(?CloudPcAuditActivityOperationType $value ): void {
        $this->activityOperationType = $value;
    }

    /**
     * Sets the activityResult property value. The result of the activity. Read-only.
     *  @param CloudPcAuditActivityResult|null $value Value to set for the activityResult property.
    */
    public function setActivityResult(?CloudPcAuditActivityResult $value ): void {
        $this->activityResult = $value;
    }

    /**
     * Sets the activityType property value. The type of activity that was performed. Read-only.
     *  @param string|null $value Value to set for the activityType property.
    */
    public function setActivityType(?string $value ): void {
        $this->activityType = $value;
    }

    /**
     * Sets the actor property value. The actor property
     *  @param CloudPcAuditActor|null $value Value to set for the actor property.
    */
    public function setActor(?CloudPcAuditActor $value ): void {
        $this->actor = $value;
    }

    /**
     * Sets the category property value. Audit category. Read-only.
     *  @param CloudPcAuditCategory|null $value Value to set for the category property.
    */
    public function setCategory(?CloudPcAuditCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the componentName property value. Component name. Read-only.
     *  @param string|null $value Value to set for the componentName property.
    */
    public function setComponentName(?string $value ): void {
        $this->componentName = $value;
    }

    /**
     * Sets the correlationId property value. The client request identifier, used to correlate activity within the system. Read-only.
     *  @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value ): void {
        $this->correlationId = $value;
    }

    /**
     * Sets the displayName property value. Event display name. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the resources property value. List of cloudPcAuditResource objects. Read-only.
     *  @param array<CloudPcAuditResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value ): void {
        $this->resources = $value;
    }

}
