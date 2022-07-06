<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PublishedResource extends Entity implements Parsable 
{
    /**
     * @var array<OnPremisesAgentGroup>|null $agentGroups List of onPremisesAgentGroups that a publishedResource is assigned to. Read-only. Nullable.
    */
    private ?array $agentGroups = null;
    
    /**
     * @var string|null $displayName Display Name of the publishedResource.
    */
    private ?string $displayName = null;
    
    /**
     * @var OnPremisesPublishingType|null $publishingType Possible values are: applicationProxy, exchangeOnline, authentication, provisioning, adAdministration.
    */
    private ?OnPremisesPublishingType $publishingType = null;
    
    /**
     * @var string|null $resourceName Name of the publishedResource.
    */
    private ?string $resourceName = null;
    
    /**
     * Instantiates a new publishedResource and sets the default values.
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
        return $this->agentGroups;
    }

    /**
     * Gets the displayName property value. Display Name of the publishedResource.
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
            'agentGroups' => function (ParseNode $n) use ($o) { $o->setAgentGroups($n->getCollectionOfObjectValues(array(OnPremisesAgentGroup::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'publishingType' => function (ParseNode $n) use ($o) { $o->setPublishingType($n->getEnumValue(OnPremisesPublishingType::class)); },
            'resourceName' => function (ParseNode $n) use ($o) { $o->setResourceName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the publishingType property value. Possible values are: applicationProxy, exchangeOnline, authentication, provisioning, adAdministration.
     * @return OnPremisesPublishingType|null
    */
    public function getPublishingType(): ?OnPremisesPublishingType {
        return $this->publishingType;
    }

    /**
     * Gets the resourceName property value. Name of the publishedResource.
     * @return string|null
    */
    public function getResourceName(): ?string {
        return $this->resourceName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('agentGroups', $this->agentGroups);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('publishingType', $this->publishingType);
        $writer->writeStringValue('resourceName', $this->resourceName);
    }

    /**
     * Sets the agentGroups property value. List of onPremisesAgentGroups that a publishedResource is assigned to. Read-only. Nullable.
     *  @param array<OnPremisesAgentGroup>|null $value Value to set for the agentGroups property.
    */
    public function setAgentGroups(?array $value ): void {
        $this->agentGroups = $value;
    }

    /**
     * Sets the displayName property value. Display Name of the publishedResource.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the publishingType property value. Possible values are: applicationProxy, exchangeOnline, authentication, provisioning, adAdministration.
     *  @param OnPremisesPublishingType|null $value Value to set for the publishingType property.
    */
    public function setPublishingType(?OnPremisesPublishingType $value ): void {
        $this->publishingType = $value;
    }

    /**
     * Sets the resourceName property value. Name of the publishedResource.
     *  @param string|null $value Value to set for the resourceName property.
    */
    public function setResourceName(?string $value ): void {
        $this->resourceName = $value;
    }

}
