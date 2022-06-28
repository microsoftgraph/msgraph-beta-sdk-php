<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class TeamworkHostedContent extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var StreamInterface|null $contentBytes Write only. Bytes for the hosted content (such as images).
    */
    private ?StreamInterface $contentBytes = null;
    
    /**
     * @var string|null $contentType Write only. Content type, such as image/png, image/jpg.
    */
    private ?string $contentType = null;
    
    /**
     * Instantiates a new teamworkHostedContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkHostedContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkHostedContent {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.chatMessageHostedContent': return new ChatMessageHostedContent();
            }
        }
        return new TeamworkHostedContent();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contentBytes property value. Write only. Bytes for the hosted content (such as images).
     * @return StreamInterface|null
    */
    public function getContentBytes(): ?StreamInterface {
        return $this->contentBytes;
    }

    /**
     * Gets the contentType property value. Write only. Content type, such as image/png, image/jpg.
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
            'contentBytes' => function (ParseNode $n) use ($o) { $o->setContentBytes($n->getBinaryContent()); },
            'contentType' => function (ParseNode $n) use ($o) { $o->setContentType($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('contentBytes', $this->contentBytes);
        $writer->writeStringValue('contentType', $this->contentType);
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
     * Sets the contentBytes property value. Write only. Bytes for the hosted content (such as images).
     *  @param StreamInterface|null $value Value to set for the contentBytes property.
    */
    public function setContentBytes(?StreamInterface $value ): void {
        $this->contentBytes = $value;
    }

    /**
     * Sets the contentType property value. Write only. Content type, such as image/png, image/jpg.
     *  @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value ): void {
        $this->contentType = $value;
    }

}
