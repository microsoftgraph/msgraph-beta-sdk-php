<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Recommendation extends Entity 
{
    /** @var array<ActionStep>|null $actionSteps  */
    private ?array $actionSteps = null;
    
    /** @var string|null $benefits  */
    private ?string $benefits = null;
    
    /** @var RecommendationCategory|null $category  */
    private ?RecommendationCategory $category = null;
    
    /** @var DateTime|null $createdDateTime  */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var array<RecommendationResource>|null $impactedResources  */
    private ?array $impactedResources = null;
    
    /** @var DateTime|null $impactStartDateTime  */
    private ?DateTime $impactStartDateTime = null;
    
    /** @var string|null $impactType  */
    private ?string $impactType = null;
    
    /** @var string|null $insights  */
    private ?string $insights = null;
    
    /** @var DateTime|null $lastCheckedDateTime  */
    private ?DateTime $lastCheckedDateTime = null;
    
    /** @var string|null $lastModifiedBy  */
    private ?string $lastModifiedBy = null;
    
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var DateTime|null $postponeUntilDateTime  */
    private ?DateTime $postponeUntilDateTime = null;
    
    /** @var RecommendationPriority|null $priority  */
    private ?RecommendationPriority $priority = null;
    
    /** @var RecommendationStatus|null $status  */
    private ?RecommendationStatus $status = null;
    
    /**
     * Instantiates a new recommendation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Recommendation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Recommendation {
        return new Recommendation();
    }

    /**
     * Gets the actionSteps property value. 
     * @return array<ActionStep>|null
    */
    public function getActionSteps(): ?array {
        return $this->actionSteps;
    }

    /**
     * Gets the benefits property value. 
     * @return string|null
    */
    public function getBenefits(): ?string {
        return $this->benefits;
    }

    /**
     * Gets the category property value. 
     * @return RecommendationCategory|null
    */
    public function getCategory(): ?RecommendationCategory {
        return $this->category;
    }

    /**
     * Gets the createdDateTime property value. 
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the displayName property value. 
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
        return array_merge(parent::getFieldDeserializers(), [
            'actionSteps' => function (self $o, ParseNode $n) { $o->setActionSteps($n->getCollectionOfObjectValues(ActionStep::class)); },
            'benefits' => function (self $o, ParseNode $n) { $o->setBenefits($n->getStringValue()); },
            'category' => function (self $o, ParseNode $n) { $o->setCategory($n->getEnumValue(RecommendationCategory::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'impactedResources' => function (self $o, ParseNode $n) { $o->setImpactedResources($n->getCollectionOfObjectValues(RecommendationResource::class)); },
            'impactStartDateTime' => function (self $o, ParseNode $n) { $o->setImpactStartDateTime($n->getDateTimeValue()); },
            'impactType' => function (self $o, ParseNode $n) { $o->setImpactType($n->getStringValue()); },
            'insights' => function (self $o, ParseNode $n) { $o->setInsights($n->getStringValue()); },
            'lastCheckedDateTime' => function (self $o, ParseNode $n) { $o->setLastCheckedDateTime($n->getDateTimeValue()); },
            'lastModifiedBy' => function (self $o, ParseNode $n) { $o->setLastModifiedBy($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'postponeUntilDateTime' => function (self $o, ParseNode $n) { $o->setPostponeUntilDateTime($n->getDateTimeValue()); },
            'priority' => function (self $o, ParseNode $n) { $o->setPriority($n->getEnumValue(RecommendationPriority::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(RecommendationStatus::class)); },
        ]);
    }

    /**
     * Gets the impactedResources property value. 
     * @return array<RecommendationResource>|null
    */
    public function getImpactedResources(): ?array {
        return $this->impactedResources;
    }

    /**
     * Gets the impactStartDateTime property value. 
     * @return DateTime|null
    */
    public function getImpactStartDateTime(): ?DateTime {
        return $this->impactStartDateTime;
    }

    /**
     * Gets the impactType property value. 
     * @return string|null
    */
    public function getImpactType(): ?string {
        return $this->impactType;
    }

    /**
     * Gets the insights property value. 
     * @return string|null
    */
    public function getInsights(): ?string {
        return $this->insights;
    }

    /**
     * Gets the lastCheckedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastCheckedDateTime(): ?DateTime {
        return $this->lastCheckedDateTime;
    }

    /**
     * Gets the lastModifiedBy property value. 
     * @return string|null
    */
    public function getLastModifiedBy(): ?string {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the postponeUntilDateTime property value. 
     * @return DateTime|null
    */
    public function getPostponeUntilDateTime(): ?DateTime {
        return $this->postponeUntilDateTime;
    }

    /**
     * Gets the priority property value. 
     * @return RecommendationPriority|null
    */
    public function getPriority(): ?RecommendationPriority {
        return $this->priority;
    }

    /**
     * Gets the status property value. 
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
     * Sets the actionSteps property value. 
     *  @param array<ActionStep>|null $value Value to set for the actionSteps property.
    */
    public function setActionSteps(?array $value ): void {
        $this->actionSteps = $value;
    }

    /**
     * Sets the benefits property value. 
     *  @param string|null $value Value to set for the benefits property.
    */
    public function setBenefits(?string $value ): void {
        $this->benefits = $value;
    }

    /**
     * Sets the category property value. 
     *  @param RecommendationCategory|null $value Value to set for the category property.
    */
    public function setCategory(?RecommendationCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the createdDateTime property value. 
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the impactedResources property value. 
     *  @param array<RecommendationResource>|null $value Value to set for the impactedResources property.
    */
    public function setImpactedResources(?array $value ): void {
        $this->impactedResources = $value;
    }

    /**
     * Sets the impactStartDateTime property value. 
     *  @param DateTime|null $value Value to set for the impactStartDateTime property.
    */
    public function setImpactStartDateTime(?DateTime $value ): void {
        $this->impactStartDateTime = $value;
    }

    /**
     * Sets the impactType property value. 
     *  @param string|null $value Value to set for the impactType property.
    */
    public function setImpactType(?string $value ): void {
        $this->impactType = $value;
    }

    /**
     * Sets the insights property value. 
     *  @param string|null $value Value to set for the insights property.
    */
    public function setInsights(?string $value ): void {
        $this->insights = $value;
    }

    /**
     * Sets the lastCheckedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastCheckedDateTime property.
    */
    public function setLastCheckedDateTime(?DateTime $value ): void {
        $this->lastCheckedDateTime = $value;
    }

    /**
     * Sets the lastModifiedBy property value. 
     *  @param string|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?string $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the postponeUntilDateTime property value. 
     *  @param DateTime|null $value Value to set for the postponeUntilDateTime property.
    */
    public function setPostponeUntilDateTime(?DateTime $value ): void {
        $this->postponeUntilDateTime = $value;
    }

    /**
     * Sets the priority property value. 
     *  @param RecommendationPriority|null $value Value to set for the priority property.
    */
    public function setPriority(?RecommendationPriority $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the status property value. 
     *  @param RecommendationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?RecommendationStatus $value ): void {
        $this->status = $value;
    }

}
