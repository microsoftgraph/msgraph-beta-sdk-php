<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
        $val = $this->getBackingStore()->get('agents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnPremisesAgent::class);
            /** @var array<OnPremisesAgent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agents'");
    }

    /**
     * Gets the displayName property value. Display name of the onPremisesAgentGroup.
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
            'agents' => fn(ParseNode $n) => $o->setAgents($n->getCollectionOfObjectValues([OnPremisesAgent::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'publishedResources' => fn(ParseNode $n) => $o->setPublishedResources($n->getCollectionOfObjectValues([PublishedResource::class, 'createFromDiscriminatorValue'])),
            'publishingType' => fn(ParseNode $n) => $o->setPublishingType($n->getEnumValue(OnPremisesPublishingType::class)),
        ]);
    }

    /**
     * Gets the isDefault property value. Indicates if the onPremisesAgentGroup is the default agent group. Only a single agent group can be the default onPremisesAgentGroup and is set by the system.
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        $val = $this->getBackingStore()->get('isDefault');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDefault'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the publishedResources property value. List of publishedResource that are assigned to an onPremisesAgentGroup. Read-only. Nullable.
     * @return array<PublishedResource>|null
    */
    public function getPublishedResources(): ?array {
        $val = $this->getBackingStore()->get('publishedResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PublishedResource::class);
            /** @var array<PublishedResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishedResources'");
    }

    /**
     * Gets the publishingType property value. The publishingType property
     * @return OnPremisesPublishingType|null
    */
    public function getPublishingType(): ?OnPremisesPublishingType {
        $val = $this->getBackingStore()->get('publishingType');
        if (is_null($val) || $val instanceof OnPremisesPublishingType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishingType'");
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
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
