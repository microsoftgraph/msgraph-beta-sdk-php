<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Recommendation extends Entity implements Parsable 
{
    /**
     * @var array<ActionStep>|null $actionSteps The actionSteps property
    */
    private ?array $actionSteps = null;
    
    /**
     * @var string|null $benefits The benefits property
    */
    private ?string $benefits = null;
    
    /**
     * @var RecommendationCategory|null $category The category property
    */
    private ?RecommendationCategory $category = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var array<RecommendationResource>|null $impactedResources The impactedResources property
    */
    private ?array $impactedResources = null;
    
    /**
     * @var DateTime|null $impactStartDateTime The impactStartDateTime property
    */
    private ?DateTime $impactStartDateTime = null;
    
    /**
     * @var string|null $impactType The impactType property
    */
    private ?string $impactType = null;
    
    /**
     * @var string|null $insights The insights property
    */
    private ?string $insights = null;
    
    /**
     * @var DateTime|null $lastCheckedDateTime The lastCheckedDateTime property
    */
    private ?DateTime $lastCheckedDateTime = null;
    
    /**
     * @var string|null $lastModifiedBy The lastModifiedBy property
    */
    private ?string $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DateTime|null $postponeUntilDateTime The postponeUntilDateTime property
    */
    private ?DateTime $postponeUntilDateTime = null;
    
    /**
     * @var RecommendationPriority|null $priority The priority property
    */
    private ?RecommendationPriority $priority = null;
    
    /**
     * @var RecommendationStatus|null $status The status property
    */
    private ?RecommendationStatus $status = null;
    
    /**
     * Instantiates a new Recommendation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.recommendation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Recommendation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Recommendation {
        return new Recommendation();
    }

    /**
     * Gets the actionSteps property value. The actionSteps property
     * @return array<ActionStep>|null
    */
    public function getActionSteps(): ?array {
        return $this->actionSteps;
    }

    /**
     * Gets the benefits property value. The benefits property
     * @return string|null
    */
    public function getBenefits(): ?string {
        return $this->benefits;
    }

    /**
     * Gets the category property value. The category property
     * @return RecommendationCategory|null
    */
    public function getCategory(): ?RecommendationCategory {
        return $this->category;
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
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
            'actionSteps' => function (ParseNode $n) use ($o) { $o->setActionSteps($n->getCollectionOfObjectValues(array(ActionStep::class, 'createFromDiscriminatorValue'))); },
            'benefits' => function (ParseNode $n) use ($o) { $o->setBenefits($n->getStringValue()); },
            'category' => function (ParseNode $n) use ($o) { $o->setCategory($n->getEnumValue(RecommendationCategory::class)); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'impactedResources' => function (ParseNode $n) use ($o) { $o->setImpactedResources($n->getCollectionOfObjectValues(array(RecommendationResource::class, 'createFromDiscriminatorValue'))); },
            'impactStartDateTime' => function (ParseNode $n) use ($o) { $o->setImpactStartDateTime($n->getDateTimeValue()); },
            'impactType' => function (ParseNode $n) use ($o) { $o->setImpactType($n->getStringValue()); },
            'insights' => function (ParseNode $n) use ($o) { $o->setInsights($n->getStringValue()); },
            'lastCheckedDateTime' => function (ParseNode $n) use ($o) { $o->setLastCheckedDateTime($n->getDateTimeValue()); },
            'lastModifiedBy' => function (ParseNode $n) use ($o) { $o->setLastModifiedBy($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'postponeUntilDateTime' => function (ParseNode $n) use ($o) { $o->setPostponeUntilDateTime($n->getDateTimeValue()); },
            'priority' => function (ParseNode $n) use ($o) { $o->setPriority($n->getEnumValue(RecommendationPriority::class)); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(RecommendationStatus::class)); },
        ]);
    }

    /**
     * Gets the impactedResources property value. The impactedResources property
     * @return array<RecommendationResource>|null
    */
    public function getImpactedResources(): ?array {
        return $this->impactedResources;
    }

    /**
     * Gets the impactStartDateTime property value. The impactStartDateTime property
     * @return DateTime|null
    */
    public function getImpactStartDateTime(): ?DateTime {
        return $this->impactStartDateTime;
    }

    /**
     * Gets the impactType property value. The impactType property
     * @return string|null
    */
    public function getImpactType(): ?string {
        return $this->impactType;
    }

    /**
     * Gets the insights property value. The insights property
     * @return string|null
    */
    public function getInsights(): ?string {
        return $this->insights;
    }

    /**
     * Gets the lastCheckedDateTime property value. The lastCheckedDateTime property
     * @return DateTime|null
    */
    public function getLastCheckedDateTime(): ?DateTime {
        return $this->lastCheckedDateTime;
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return string|null
    */
    public function getLastModifiedBy(): ?string {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the postponeUntilDateTime property value. The postponeUntilDateTime property
     * @return DateTime|null
    */
    public function getPostponeUntilDateTime(): ?DateTime {
        return $this->postponeUntilDateTime;
    }

    /**
     * Gets the priority property value. The priority property
     * @return RecommendationPriority|null
    */
    public function getPriority(): ?RecommendationPriority {
        return $this->priority;
    }

    /**
     * Gets the status property value. The status property
     * @return RecommendationStatus|null
    */
    public function getStatus(): ?RecommendationStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('actionSteps', $this->actionSteps);
        $writer->writeStringValue('benefits', $this->benefits);
        $writer->writeEnumValue('category', $this->category);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('impactedResources', $this->impactedResources);
        $writer->writeDateTimeValue('impactStartDateTime', $this->impactStartDateTime);
        $writer->writeStringValue('impactType', $this->impactType);
        $writer->writeStringValue('insights', $this->insights);
        $writer->writeDateTimeValue('lastCheckedDateTime', $this->lastCheckedDateTime);
        $writer->writeStringValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeDateTimeValue('postponeUntilDateTime', $this->postponeUntilDateTime);
        $writer->writeEnumValue('priority', $this->priority);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the actionSteps property value. The actionSteps property
     *  @param array<ActionStep>|null $value Value to set for the actionSteps property.
    */
    public function setActionSteps(?array $value ): void {
        $this->actionSteps = $value;
    }

    /**
     * Sets the benefits property value. The benefits property
     *  @param string|null $value Value to set for the benefits property.
    */
    public function setBenefits(?string $value ): void {
        $this->benefits = $value;
    }

    /**
     * Sets the category property value. The category property
     *  @param RecommendationCategory|null $value Value to set for the category property.
    */
    public function setCategory(?RecommendationCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the impactedResources property value. The impactedResources property
     *  @param array<RecommendationResource>|null $value Value to set for the impactedResources property.
    */
    public function setImpactedResources(?array $value ): void {
        $this->impactedResources = $value;
    }

    /**
     * Sets the impactStartDateTime property value. The impactStartDateTime property
     *  @param DateTime|null $value Value to set for the impactStartDateTime property.
    */
    public function setImpactStartDateTime(?DateTime $value ): void {
        $this->impactStartDateTime = $value;
    }

    /**
     * Sets the impactType property value. The impactType property
     *  @param string|null $value Value to set for the impactType property.
    */
    public function setImpactType(?string $value ): void {
        $this->impactType = $value;
    }

    /**
     * Sets the insights property value. The insights property
     *  @param string|null $value Value to set for the insights property.
    */
    public function setInsights(?string $value ): void {
        $this->insights = $value;
    }

    /**
     * Sets the lastCheckedDateTime property value. The lastCheckedDateTime property
     *  @param DateTime|null $value Value to set for the lastCheckedDateTime property.
    */
    public function setLastCheckedDateTime(?DateTime $value ): void {
        $this->lastCheckedDateTime = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     *  @param string|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?string $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the postponeUntilDateTime property value. The postponeUntilDateTime property
     *  @param DateTime|null $value Value to set for the postponeUntilDateTime property.
    */
    public function setPostponeUntilDateTime(?DateTime $value ): void {
        $this->postponeUntilDateTime = $value;
    }

    /**
     * Sets the priority property value. The priority property
     *  @param RecommendationPriority|null $value Value to set for the priority property.
    */
    public function setPriority(?RecommendationPriority $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param RecommendationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?RecommendationStatus $value ): void {
        $this->status = $value;
    }

}
