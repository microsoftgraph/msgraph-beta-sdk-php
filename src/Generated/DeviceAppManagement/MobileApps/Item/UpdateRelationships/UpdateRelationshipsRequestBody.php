<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\UpdateRelationships;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\MobileAppRelationship;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateRelationshipsRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<MobileAppRelationship>|null $relationships  */
    private ?array $relationships = null;
    
    /**
     * Instantiates a new updateRelationshipsRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateRelationshipsRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UpdateRelationshipsRequestBody {
        return new UpdateRelationshipsRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'relationships' => function (self $o, ParseNode $n) { $o->setRelationships($n->getCollectionOfObjectValues(MobileAppRelationship::class)); },
        ];
    }

    /**
     * Gets the relationships property value. 
     * @return array<MobileAppRelationship>|null
    */
    public function getRelationships(): ?array {
        return $this->relationships;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('relationships', $this->relationships);
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
     * Sets the relationships property value. 
     *  @param array<MobileAppRelationship>|null $value Value to set for the relationships property.
    */
    public function setRelationships(?array $value ): void {
        $this->relationships = $value;
    }

}
