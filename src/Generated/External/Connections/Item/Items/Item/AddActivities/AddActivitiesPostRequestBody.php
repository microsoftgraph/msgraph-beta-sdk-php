<?php

namespace Microsoft\Graph\Beta\Generated\External\Connections\Item\Items\Item\AddActivities;

use Microsoft\Graph\Beta\Generated\Models\ExternalConnectors\ExternalActivity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddActivitiesPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<ExternalActivity>|null $activities The activities property
    */
    private ?array $activities = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * Instantiates a new addActivitiesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddActivitiesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddActivitiesPostRequestBody {
        return new AddActivitiesPostRequestBody();
    }

    /**
     * Gets the activities property value. The activities property
     * @return array<ExternalActivity>|null
    */
    public function getActivities(): ?array {
        return $this->activities;
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
        $o = $this;
        return  [
            'activities' => fn(ParseNode $n) => $o->setActivities($n->getCollectionOfObjectValues([ExternalActivity::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('activities', $this->activities);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the activities property value. The activities property
     *  @param array<ExternalActivity>|null $value Value to set for the activities property.
    */
    public function setActivities(?array $value ): void {
        $this->activities = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

}
