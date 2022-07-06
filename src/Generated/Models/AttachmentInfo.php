<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttachmentInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AttachmentType|null $attachmentType The type of the attachment. The possible values are: file, item, reference. Required.
    */
    private ?AttachmentType $attachmentType = null;
    
    /**
     * @var string|null $contentType The nature of the data in the attachment. Optional.
    */
    private ?string $contentType = null;
    
    /**
     * @var string|null $name The display name of the attachment. This can be a descriptive string and does not have to be the actual file name. Required.
    */
    private ?string $name = null;
    
    /**
     * @var int|null $size The length of the attachment in bytes. Required.
    */
    private ?int $size = null;
    
    /**
     * Instantiates a new attachmentInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttachmentInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttachmentInfo {
        return new AttachmentInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the attachmentType property value. The type of the attachment. The possible values are: file, item, reference. Required.
     * @return AttachmentType|null
    */
    public function getAttachmentType(): ?AttachmentType {
        return $this->attachmentType;
    }

    /**
     * Gets the contentType property value. The nature of the data in the attachment. Optional.
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
        return  [
            'attachmentType' => function (ParseNode $n) use ($o) { $o->setAttachmentType($n->getEnumValue(AttachmentType::class)); },
            'contentType' => function (ParseNode $n) use ($o) { $o->setContentType($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'size' => function (ParseNode $n) use ($o) { $o->setSize($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the name property value. The display name of the attachment. This can be a descriptive string and does not have to be the actual file name. Required.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the size property value. The length of the attachment in bytes. Required.
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('attachmentType', $this->attachmentType);
        $writer->writeStringValue('contentType', $this->contentType);
        $writer->writeStringValue('name', $this->name);
        $writer->writeIntegerValue('size', $this->size);
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
     * Sets the attachmentType property value. The type of the attachment. The possible values are: file, item, reference. Required.
     *  @param AttachmentType|null $value Value to set for the attachmentType property.
    */
    public function setAttachmentType(?AttachmentType $value ): void {
        $this->attachmentType = $value;
    }

    /**
     * Sets the contentType property value. The nature of the data in the attachment. Optional.
     *  @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value ): void {
        $this->contentType = $value;
    }

    /**
     * Sets the name property value. The display name of the attachment. This can be a descriptive string and does not have to be the actual file name. Required.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the size property value. The length of the attachment in bytes. Required.
     *  @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value ): void {
        $this->size = $value;
    }

}
