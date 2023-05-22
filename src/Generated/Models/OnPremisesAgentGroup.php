<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPremisesAgentGroup extends Entity implements Parsable 
{
    /**
     * Instantiates a new onPremisesAgentGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesAgentGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesAgentGroup {
        return new OnPremisesAgentGroup();
    }

    /**
     * Gets the agents property value. List of onPremisesAgent that are assigned to an onPremisesAgentGroup. Read-only. Nullable.
     * @return array<OnPremisesAgent>|null
    */
    public function getAgents(): ?array {
        return $this->getBackingStore()->get('agents');
    }

    /**
     * Gets the displayName property value. Display name of the onPremisesAgentGroup.
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
            'agents' => fn(ParseNode $n) => $o->setAgents($n->getCollectionOfObjectValues([OnPremisesAgent::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'publishedResources' => fn(ParseNode $n) => $o->setPublishedResources($n->getCollectionOfObjectValues([PublishedResource::class, 'createFromDiscriminatorValue'])),
            'publishingType' => fn(ParseNode $n) => $o->setPublishingType($n->getEnumValue(OnPremisesPublishingType::class)),
        ]);
    }

    /**
     * Gets the isDefault property value. Indicates if the onPremisesAgentGroup is the default agent group. Only a single agent group can be the default onPremisesAgentGroup and is set by the system.
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->getBackingStore()->get('isDefault');
    }

    /**
     * Gets the publishedResources property value. List of publishedResource that are assigned to an onPremisesAgentGroup. Read-only. Nullable.
     * @return array<PublishedResource>|null
    */
    public function getPublishedResources(): ?array {
        return $this->getBackingStore()->get('publishedResources');
    }

    /**
     * Gets the publishingType property value. The publishingType property
     * @return OnPremisesPublishingType|null
    */
    public function getPublishingType(): ?OnPremisesPublishingType {
        return $this->getBackingStore()->get('publishingType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('agents', $this->getAgents());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeCollectionOfObjectValues('publishedResources', $this->getPublishedResources());
        $writer->writeEnumValue('publishingType', $this->getPublishingType());
    }

    /**
     * Sets the agents property value. List of onPremisesAgent that are assigned to an onPremisesAgentGroup. Read-only. Nullable.
     * @param array<OnPremisesAgent>|null $value Value to set for the agents property.
    */
    public function setAgents(?array $value): void {
        $this->getBackingStore()->set('agents', $value);
    }

    /**
     * Sets the displayName property value. Display name of the onPremisesAgentGroup.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isDefault property value. Indicates if the onPremisesAgentGroup is the default agent group. Only a single agent group can be the default onPremisesAgentGroup and is set by the system.
     * @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->getBackingStore()->set('isDefault', $value);
    }

    /**
     * Sets the publishedResources property value. List of publishedResource that are assigned to an onPremisesAgentGroup. Read-only. Nullable.
     * @param array<PublishedResource>|null $value Value to set for the publishedResources property.
    */
    public function setPublishedResources(?array $value): void {
        $this->getBackingStore()->set('publishedResources', $value);
    }

    /**
     * Sets the publishingType property value. The publishingType property
     * @param OnPremisesPublishingType|null $value Value to set for the publishingType property.
    */
    public function setPublishingType(?OnPremisesPublishingType $value): void {
        $this->getBackingStore()->set('publishingType', $value);
    }

}
