<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\MigrateToTemplate;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MigrateToTemplateRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $newTemplateId The newTemplateId property */
    private ?string $newTemplateId = null;
    
    /** @var bool|null $preserveCustomValues The preserveCustomValues property */
    private ?bool $preserveCustomValues = null;
    
    /**
     * Instantiates a new migrateToTemplateRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MigrateToTemplateRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MigrateToTemplateRequestBody {
        return new MigrateToTemplateRequestBody();
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
            'newTemplateId' => function (self $o, ParseNode $n) { $o->setNewTemplateId($n->getStringValue()); },
            'preserveCustomValues' => function (self $o, ParseNode $n) { $o->setPreserveCustomValues($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the newTemplateId property value. The newTemplateId property
     * @return string|null
    */
    public function getNewTemplateId(): ?string {
        return $this->newTemplateId;
    }

    /**
     * Gets the preserveCustomValues property value. The preserveCustomValues property
     * @return bool|null
    */
    public function getPreserveCustomValues(): ?bool {
        return $this->preserveCustomValues;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('newTemplateId', $this->newTemplateId);
        $writer->writeBooleanValue('preserveCustomValues', $this->preserveCustomValues);
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
     * Sets the newTemplateId property value. The newTemplateId property
     *  @param string|null $value Value to set for the newTemplateId property.
    */
    public function setNewTemplateId(?string $value ): void {
        $this->newTemplateId = $value;
    }

    /**
     * Sets the preserveCustomValues property value. The preserveCustomValues property
     *  @param bool|null $value Value to set for the preserveCustomValues property.
    */
    public function setPreserveCustomValues(?bool $value ): void {
        $this->preserveCustomValues = $value;
    }

}
