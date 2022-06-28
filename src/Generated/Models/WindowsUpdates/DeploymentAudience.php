<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeploymentAudience extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<UpdatableAsset>|null $exclusions Specifies the assets to exclude from the audience.
    */
    private ?array $exclusions = null;
    
    /**
     * @var array<UpdatableAsset>|null $members Specifies the assets to include in the audience.
    */
    private ?array $members = null;
    
    /**
     * Instantiates a new deploymentAudience and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeploymentAudience
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeploymentAudience {
        return new DeploymentAudience();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'exclusions' => function (ParseNode $n) use ($o) { $o->setExclusions($n->getCollectionOfObjectValues(array(UpdatableAsset::class, 'createFromDiscriminatorValue'))); },
            'members' => function (ParseNode $n) use ($o) { $o->setMembers($n->getCollectionOfObjectValues(array(UpdatableAsset::class, 'createFromDiscriminatorValue'))); },
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
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
