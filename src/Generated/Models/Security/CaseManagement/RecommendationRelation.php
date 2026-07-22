<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecommendationRelation extends Relation implements Parsable 
{
    /**
     * Instantiates a new RecommendationRelation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.caseManagement.recommendationRelation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecommendationRelation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecommendationRelation {
        return new RecommendationRelation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'recommendationType' => fn(ParseNode $n) => $o->setRecommendationType($n->getStringValue()),
            'resourceGroupName' => fn(ParseNode $n) => $o->setResourceGroupName($n->getStringValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the recommendationType property value. The recommendation type associated with the linked recommendation.
     * @return string|null
    */
    public function getRecommendationType(): ?string {
        $val = $this->getBackingStore()->get('recommendationType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recommendationType'");
    }

    /**
     * Gets the resourceGroupName property value. The Azure resource group name for the related recommendation.
     * @return string|null
    */
    public function getResourceGroupName(): ?string {
        $val = $this->getBackingStore()->get('resourceGroupName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceGroupName'");
    }

    /**
     * Gets the subscriptionId property value. The Azure subscription identifier for the related recommendation.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('recommendationType', $this->getRecommendationType());
        $writer->writeStringValue('resourceGroupName', $this->getResourceGroupName());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
    }

    /**
     * Sets the recommendationType property value. The recommendation type associated with the linked recommendation.
     * @param string|null $value Value to set for the recommendationType property.
    */
    public function setRecommendationType(?string $value): void {
        $this->getBackingStore()->set('recommendationType', $value);
    }

    /**
     * Sets the resourceGroupName property value. The Azure resource group name for the related recommendation.
     * @param string|null $value Value to set for the resourceGroupName property.
    */
    public function setResourceGroupName(?string $value): void {
        $this->getBackingStore()->set('resourceGroupName', $value);
    }

    /**
     * Sets the subscriptionId property value. The Azure subscription identifier for the related recommendation.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('subscriptionId', $value);
    }

}
