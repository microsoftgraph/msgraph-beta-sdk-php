<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\WindowsUpdates;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeploymentAudience extends Entity 
{
    /** @var array<UpdatableAsset>|null $exclusions Specifies the assets to exclude from the audience. */
    private ?array $exclusions = null;
    
    /** @var array<UpdatableAsset>|null $members Specifies the assets to include in the audience. */
    private ?array $members = null;
    
    /**
     * Instantiates a new deploymentAudience and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeploymentAudience
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeploymentAudience {
        return new DeploymentAudience();
    }

    /**
     * Gets the exclusions property value. Specifies the assets to exclude from the audience.
     * @return array<UpdatableAsset>|null
    */
    public function getExclusions(): ?array {
        return $this->exclusions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'exclusions' => function (self $o, ParseNode $n) { $o->setExclusions($n->getCollectionOfObjectValues(UpdatableAsset::class)); },
            'members' => function (self $o, ParseNode $n) { $o->setMembers($n->getCollectionOfObjectValues(UpdatableAsset::class)); },
        ]);
    }

    /**
     * Gets the members property value. Specifies the assets to include in the audience.
     * @return array<UpdatableAsset>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('exclusions', $this->exclusions);
        $writer->writeCollectionOfObjectValues('members', $this->members);
    }

    /**
     * Sets the exclusions property value. Specifies the assets to exclude from the audience.
     *  @param array<UpdatableAsset>|null $value Value to set for the exclusions property.
    */
    public function setExclusions(?array $value ): void {
        $this->exclusions = $value;
    }

    /**
     * Sets the members property value. Specifies the assets to include in the audience.
     *  @param array<UpdatableAsset>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

}
