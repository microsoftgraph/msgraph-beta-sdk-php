<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecommendationResource extends Entity 
{
    /** @var DateTime|null $addedDateTime  */
    private ?DateTime $addedDateTime = null;
    
    /** @var array<KeyValue>|null $additionalDetails  */
    private ?array $additionalDetails = null;
    
    /** @var string|null $apiUrl  */
    private ?string $apiUrl = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var string|null $owner  */
    private ?string $owner = null;
    
    /** @var string|null $portalUrl  */
    private ?string $portalUrl = null;
    
    /** @var int|null $rank  */
    private ?int $rank = null;
    
    /** @var string|null $recommendationId  */
    private ?string $recommendationId = null;
    
    /** @var string|null $resourceType  */
    private ?string $resourceType = null;
    
    /** @var RecommendationStatus|null $status  */
    private ?RecommendationStatus $status = null;
    
    /**
     * Instantiates a new recommendationResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecommendationResource
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RecommendationResource {
        return new RecommendationResource();
    }

    /**
     * Gets the addedDateTime property value. 
     * @return DateTime|null
    */
    public function getAddedDateTime(): ?DateTime {
        return $this->addedDateTime;
    }

    /**
     * Gets the additionalDetails property value. 
     * @return array<KeyValue>|null
    */
    public function getAdditionalDetails(): ?array {
        return $this->additionalDetails;
    }

    /**
     * Gets the apiUrl property value. 
     * @return string|null
    */
    public function getApiUrl(): ?string {
        return $this->apiUrl;
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
            'addedDateTime' => function (self $o, ParseNode $n) { $o->setAddedDateTime($n->getDateTimeValue()); },
            'additionalDetails' => function (self $o, ParseNode $n) { $o->setAdditionalDetails($n->getCollectionOfObjectValues(KeyValue::class)); },
            'apiUrl' => function (self $o, ParseNode $n) { $o->setApiUrl($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'owner' => function (self $o, ParseNode $n) { $o->setOwner($n->getStringValue()); },
            'portalUrl' => function (self $o, ParseNode $n) { $o->setPortalUrl($n->getStringValue()); },
            'rank' => function (self $o, ParseNode $n) { $o->setRank($n->getIntegerValue()); },
            'recommendationId' => function (self $o, ParseNode $n) { $o->setRecommendationId($n->getStringValue()); },
            'resourceType' => function (self $o, ParseNode $n) { $o->setResourceType($n->getStringValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(RecommendationStatus::class)); },
        ]);
    }

    /**
     * Gets the owner property value. 
     * @return string|null
    */
    public function getOwner(): ?string {
        return $this->owner;
    }

    /**
     * Gets the portalUrl property value. 
     * @return string|null
    */
    public function getPortalUrl(): ?string {
        return $this->portalUrl;
    }

    /**
     * Gets the rank property value. 
     * @return int|null
    */
    public function getRank(): ?int {
        return $this->rank;
    }

    /**
     * Gets the recommendationId property value. 
     * @return string|null
    */
    public function getRecommendationId(): ?string {
        return $this->recommendationId;
    }

    /**
     * Gets the resourceType property value. 
     * @return string|null
    */
    public function getResourceType(): ?string {
        return $this->resourceType;
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
        $writer->writeDateTimeValue('addedDateTime', $this->addedDateTime);
        $writer->writeCollectionOfObjectValues('additionalDetails', $this->additionalDetails);
        $writer->writeStringValue('apiUrl', $this->apiUrl);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('owner', $this->owner);
        $writer->writeStringValue('portalUrl', $this->portalUrl);
        $writer->writeIntegerValue('rank', $this->rank);
        $writer->writeStringValue('recommendationId', $this->recommendationId);
        $writer->writeStringValue('resourceType', $this->resourceType);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the addedDateTime property value. 
     *  @param DateTime|null $value Value to set for the addedDateTime property.
    */
    public function setAddedDateTime(?DateTime $value ): void {
        $this->addedDateTime = $value;
    }

    /**
     * Sets the additionalDetails property value. 
     *  @param array<KeyValue>|null $value Value to set for the additionalDetails property.
    */
    public function setAdditionalDetails(?array $value ): void {
        $this->additionalDetails = $value;
    }

    /**
     * Sets the apiUrl property value. 
     *  @param string|null $value Value to set for the apiUrl property.
    */
    public function setApiUrl(?string $value ): void {
        $this->apiUrl = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the owner property value. 
     *  @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value ): void {
        $this->owner = $value;
    }

    /**
     * Sets the portalUrl property value. 
     *  @param string|null $value Value to set for the portalUrl property.
    */
    public function setPortalUrl(?string $value ): void {
        $this->portalUrl = $value;
    }

    /**
     * Sets the rank property value. 
     *  @param int|null $value Value to set for the rank property.
    */
    public function setRank(?int $value ): void {
        $this->rank = $value;
    }

    /**
     * Sets the recommendationId property value. 
     *  @param string|null $value Value to set for the recommendationId property.
    */
    public function setRecommendationId(?string $value ): void {
        $this->recommendationId = $value;
    }

    /**
     * Sets the resourceType property value. 
     *  @param string|null $value Value to set for the resourceType property.
    */
    public function setResourceType(?string $value ): void {
        $this->resourceType = $value;
    }

    /**
     * Sets the status property value. 
     *  @param RecommendationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?RecommendationStatus $value ): void {
        $this->status = $value;
    }

}
