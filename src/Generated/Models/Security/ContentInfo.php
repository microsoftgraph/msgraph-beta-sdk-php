<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ContentInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $contentFormat The contentFormat property
    */
    private ?string $contentFormat = null;
    
    /**
     * @var string|null $identifier The identifier property
    */
    private ?string $identifier = null;
    
    /**
     * @var array<KeyValuePair>|null $metadata The metadata property
    */
    private ?array $metadata = null;
    
    /**
     * @var ContentState|null $state The state property
    */
    private ?ContentState $state = null;
    
    /**
     * Instantiates a new contentInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContentInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContentInfo {
        return new ContentInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contentFormat property value. The contentFormat property
     * @return string|null
    */
    public function getContentFormat(): ?string {
        return $this->contentFormat;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentFormat' => function (ParseNode $n) use ($o) { $o->setContentFormat($n->getStringValue()); },
            'identifier' => function (ParseNode $n) use ($o) { $o->setIdentifier($n->getStringValue()); },
            'metadata' => function (ParseNode $n) use ($o) { $o->setMetadata($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(ContentState::class)); },
        ];
    }

    /**
     * Gets the identifier property value. The identifier property
     * @return string|null
    */
    public function getIdentifier(): ?string {
        return $this->identifier;
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return array<KeyValuePair>|null
    */
    public function getMetadata(): ?array {
        return $this->metadata;
    }

    /**
     * Gets the state property value. The state property
     * @return ContentState|null
    */
    public function getState(): ?ContentState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contentFormat', $this->contentFormat);
        $writer->writeStringValue('identifier', $this->identifier);
        $writer->writeCollectionOfObjectValues('metadata', $this->metadata);
        $writer->writeEnumValue('state', $this->state);
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
     * Sets the contentFormat property value. The contentFormat property
     *  @param string|null $value Value to set for the contentFormat property.
    */
    public function setContentFormat(?string $value ): void {
        $this->contentFormat = $value;
    }

    /**
     * Sets the identifier property value. The identifier property
     *  @param string|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?string $value ): void {
        $this->identifier = $value;
    }

    /**
     * Sets the metadata property value. The metadata property
     *  @param array<KeyValuePair>|null $value Value to set for the metadata property.
    */
    public function setMetadata(?array $value ): void {
        $this->metadata = $value;
    }

    /**
     * Sets the state property value. The state property
     *  @param ContentState|null $value Value to set for the state property.
    */
    public function setState(?ContentState $value ): void {
        $this->state = $value;
    }

}
