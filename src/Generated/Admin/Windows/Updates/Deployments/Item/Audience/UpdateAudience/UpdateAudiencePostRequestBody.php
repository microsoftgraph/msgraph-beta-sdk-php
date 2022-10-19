<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\UpdateAudience;

use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\UpdatableAsset;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateAudiencePostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<UpdatableAsset>|null $addExclusions The addExclusions property
    */
    private ?array $addExclusions = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<UpdatableAsset>|null $addMembers The addMembers property
    */
    private ?array $addMembers = null;
    
    /**
     * @var array<UpdatableAsset>|null $removeExclusions The removeExclusions property
    */
    private ?array $removeExclusions = null;
    
    /**
     * @var array<UpdatableAsset>|null $removeMembers The removeMembers property
    */
    private ?array $removeMembers = null;
    
    /**
     * Instantiates a new updateAudiencePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateAudiencePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateAudiencePostRequestBody {
        return new UpdateAudiencePostRequestBody();
    }

    /**
     * Gets the addExclusions property value. The addExclusions property
     * @return array<UpdatableAsset>|null
    */
    public function getAddExclusions(): ?array {
        return $this->addExclusions;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the addMembers property value. The addMembers property
     * @return array<UpdatableAsset>|null
    */
    public function getAddMembers(): ?array {
        return $this->addMembers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'addExclusions' => fn(ParseNode $n) => $o->setAddExclusions($n->getCollectionOfObjectValues([UpdatableAsset::class, 'createFromDiscriminatorValue'])),
            'addMembers' => fn(ParseNode $n) => $o->setAddMembers($n->getCollectionOfObjectValues([UpdatableAsset::class, 'createFromDiscriminatorValue'])),
            'removeExclusions' => fn(ParseNode $n) => $o->setRemoveExclusions($n->getCollectionOfObjectValues([UpdatableAsset::class, 'createFromDiscriminatorValue'])),
            'removeMembers' => fn(ParseNode $n) => $o->setRemoveMembers($n->getCollectionOfObjectValues([UpdatableAsset::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the removeExclusions property value. The removeExclusions property
     * @return array<UpdatableAsset>|null
    */
    public function getRemoveExclusions(): ?array {
        return $this->removeExclusions;
    }

    /**
     * Gets the removeMembers property value. The removeMembers property
     * @return array<UpdatableAsset>|null
    */
    public function getRemoveMembers(): ?array {
        return $this->removeMembers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('addExclusions', $this->addExclusions);
        $writer->writeCollectionOfObjectValues('addMembers', $this->addMembers);
        $writer->writeCollectionOfObjectValues('removeExclusions', $this->removeExclusions);
        $writer->writeCollectionOfObjectValues('removeMembers', $this->removeMembers);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the addExclusions property value. The addExclusions property
     *  @param array<UpdatableAsset>|null $value Value to set for the addExclusions property.
    */
    public function setAddExclusions(?array $value ): void {
        $this->addExclusions = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the addMembers property value. The addMembers property
     *  @param array<UpdatableAsset>|null $value Value to set for the addMembers property.
    */
    public function setAddMembers(?array $value ): void {
        $this->addMembers = $value;
    }

    /**
     * Sets the removeExclusions property value. The removeExclusions property
     *  @param array<UpdatableAsset>|null $value Value to set for the removeExclusions property.
    */
    public function setRemoveExclusions(?array $value ): void {
        $this->removeExclusions = $value;
    }

    /**
     * Sets the removeMembers property value. The removeMembers property
     *  @param array<UpdatableAsset>|null $value Value to set for the removeMembers property.
    */
    public function setRemoveMembers(?array $value ): void {
        $this->removeMembers = $value;
    }

}
