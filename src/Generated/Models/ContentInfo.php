<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ContentInfo implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var ContentFormat|null $format Possible values are: default, email. */
    private ?ContentFormat $format = null;
    
    /** @var string|null $identifier Identifier used for Azure Information Protection Analytics. */
    private ?string $identifier = null;
    
    /** @var array<KeyValuePair>|null $metadata Existing Microsoft Information Protection metadata is passed as key/value pairs, where the key is the MSIP_Label_GUID_PropName. */
    private ?array $metadata = null;
    
    /** @var ContentState|null $state Possible values are: rest, motion, use. */
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): ContentInfo {
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'format' => function (self $o, ParseNode $n) { $o->setFormat($n->getEnumValue(ContentFormat::class)); },
            'identifier' => function (self $o, ParseNode $n) { $o->setIdentifier($n->getStringValue()); },
            'metadata' => function (self $o, ParseNode $n) { $o->setMetadata($n->getCollectionOfObjectValues(KeyValuePair::class)); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getEnumValue(ContentState::class)); },
        ];
    }

    /**
     * Gets the format property value. Possible values are: default, email.
     * @return ContentFormat|null
    */
    public function getFormat(): ?ContentFormat {
        return $this->format;
    }

    /**
     * Gets the identifier property value. Identifier used for Azure Information Protection Analytics.
     * @return string|null
    */
    public function getIdentifier(): ?string {
        return $this->identifier;
    }

    /**
     * Gets the metadata property value. Existing Microsoft Information Protection metadata is passed as key/value pairs, where the key is the MSIP_Label_GUID_PropName.
     * @return array<KeyValuePair>|null
    */
    public function getMetadata(): ?array {
        return $this->metadata;
    }

    /**
     * Gets the state property value. Possible values are: rest, motion, use.
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
        $writer->writeEnumValue('format', $this->format);
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
     * Sets the format property value. Possible values are: default, email.
     *  @param ContentFormat|null $value Value to set for the format property.
    */
    public function setFormat(?ContentFormat $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the identifier property value. Identifier used for Azure Information Protection Analytics.
     *  @param string|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?string $value ): void {
        $this->identifier = $value;
    }

    /**
     * Sets the metadata property value. Existing Microsoft Information Protection metadata is passed as key/value pairs, where the key is the MSIP_Label_GUID_PropName.
     *  @param array<KeyValuePair>|null $value Value to set for the metadata property.
    */
    public function setMetadata(?array $value ): void {
        $this->metadata = $value;
    }

    /**
     * Sets the state property value. Possible values are: rest, motion, use.
     *  @param ContentState|null $value Value to set for the state property.
    */
    public function setState(?ContentState $value ): void {
        $this->state = $value;
    }

}
