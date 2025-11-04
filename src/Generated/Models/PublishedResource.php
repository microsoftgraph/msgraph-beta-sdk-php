<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PublishedResource extends Entity implements Parsable 
{
    /**
     * Instantiates a new PublishedResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PublishedResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PublishedResource {
        return new PublishedResource();
    }

    /**
     * Gets the agentGroups property value. List of onPremisesAgentGroups that a publishedResource is assigned to. Read-only. Nullable.
     * @return array<OnPremisesAgentGroup>|null
    */
    public function getAgentGroups(): ?array {
        $val = $this->getBackingStore()->get('agentGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnPremisesAgentGroup::class);
            /** @var array<OnPremisesAgentGroup>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentGroups'");
    }

    /**
     * Gets the displayName property value. Display Name of the publishedResource.
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
            'agentGroups' => fn(ParseNode $n) => $o->setAgentGroups($n->getCollectionOfObjectValues([OnPremisesAgentGroup::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'publishingType' => fn(ParseNode $n) => $o->setPublishingType($n->getEnumValue(OnPremisesPublishingType::class)),
            'resourceName' => fn(ParseNode $n) => $o->setResourceName($n->getStringValue()),
        ]);
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
     * Gets the resourceName property value. Name of the publishedResource.
     * @return string|null
    */
    public function getResourceName(): ?string {
        $val = $this->getBackingStore()->get('resourceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('agentGroups', $this->getAgentGroups());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('publishingType', $this->getPublishingType());
        $writer->writeStringValue('resourceName', $this->getResourceName());
    }

    /**
     * Sets the agentGroups property value. List of onPremisesAgentGroups that a publishedResource is assigned to. Read-only. Nullable.
     * @param array<OnPremisesAgentGroup>|null $value Value to set for the agentGroups property.
    */
    public function setAgentGroups(?array $value): void {
        $this->getBackingStore()->set('agentGroups', $value);
    }

    /**
     * Sets the displayName property value. Display Name of the publishedResource.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the publishingType property value. The publishingType property
     * @param OnPremisesPublishingType|null $value Value to set for the publishingType property.
    */
    public function setPublishingType(?OnPremisesPublishingType $value): void {
        $this->getBackingStore()->set('publishingType', $value);
    }

    /**
     * Sets the resourceName property value. Name of the publishedResource.
     * @param string|null $value Value to set for the resourceName property.
    */
    public function setResourceName(?string $value): void {
        $this->getBackingStore()->set('resourceName', $value);
    }

}
