<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WebPart implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var SitePageData|null $data The required properties for the webPart (varies by webPart) */
    private ?SitePageData $data = null;
    
    /** @var string|null $type A unique identifier specifying the webPart type. Read-only. */
    private ?string $type = null;
    
    /**
     * Instantiates a new webPart and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WebPart
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WebPart {
        return new WebPart();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the data property value. The required properties for the webPart (varies by webPart)
     * @return SitePageData|null
    */
    public function getData(): ?SitePageData {
        return $this->data;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'data' => function (self $o, ParseNode $n) { $o->setData($n->getObjectValue(SitePageData::class)); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the type property value. A unique identifier specifying the webPart type. Read-only.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('data', $this->data);
        $writer->writeStringValue('type', $this->type);
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
     * Sets the data property value. The required properties for the webPart (varies by webPart)
     *  @param SitePageData|null $value Value to set for the data property.
    */
    public function setData(?SitePageData $value ): void {
        $this->data = $value;
    }

    /**
     * Sets the type property value. A unique identifier specifying the webPart type. Read-only.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
