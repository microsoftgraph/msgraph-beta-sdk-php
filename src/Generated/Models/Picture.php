<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class Picture extends Entity implements Parsable 
{
    /**
     * @var StreamInterface|null $content The content property
    */
    private ?StreamInterface $content = null;
    
    /**
     * @var string|null $contentType The contentType property
    */
    private ?string $contentType = null;
    
    /**
     * @var int|null $height The height property
    */
    private ?int $height = null;
    
    /**
     * @var int|null $width The width property
    */
    private ?int $width = null;
    
    /**
     * Instantiates a new picture and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.picture');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Picture
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Picture {
        return new Picture();
    }

    /**
     * Gets the content property value. The content property
     * @return StreamInterface
    */
    public function getContent(): StreamInterface {
        return $this->content;
    }

    /**
     * Gets the contentType property value. The contentType property
     * @return string|null
    */
    public function getContentType(): ?string {
        return $this->contentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
            'height' => fn(ParseNode $n) => $o->setHeight($n->getIntegerValue()),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the height property value. The height property
     * @return int|null
    */
    public function getHeight(): ?int {
        return $this->height;
    }

    /**
     * Gets the width property value. The width property
     * @return int|null
    */
    public function getWidth(): ?int {
        return $this->width;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->content);
        $writer->writeStringValue('contentType', $this->contentType);
        $writer->writeIntegerValue('height', $this->height);
        $writer->writeIntegerValue('width', $this->width);
    }

    /**
     * Sets the content property value. The content property
     *  @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the contentType property value. The contentType property
     *  @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value ): void {
        $this->contentType = $value;
    }

    /**
     * Sets the height property value. The height property
     *  @param int|null $value Value to set for the height property.
    */
    public function setHeight(?int $value ): void {
        $this->height = $value;
    }

    /**
     * Sets the width property value. The width property
     *  @param int|null $value Value to set for the width property.
    */
    public function setWidth(?int $value ): void {
        $this->width = $value;
    }

}
