<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification\ClassifyFile;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class ClassifyFilePostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var StreamInterface|null $file The file property
    */
    private ?StreamInterface $file = null;
    
    /**
     * @var array<string>|null $sensitiveTypeIds The sensitiveTypeIds property
    */
    private ?array $sensitiveTypeIds = null;
    
    /**
     * Instantiates a new classifyFilePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClassifyFilePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClassifyFilePostRequestBody {
        return new ClassifyFilePostRequestBody();
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
            'file' => function (ParseNode $n) use ($o) { $o->setFile($n->getBinaryContent()); },
            'sensitiveTypeIds' => function (ParseNode $n) use ($o) { $o->setSensitiveTypeIds($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the file property value. The file property
     * @return StreamInterface|null
    */
    public function getFile(): ?StreamInterface {
        return $this->file;
    }

    /**
     * Gets the sensitiveTypeIds property value. The sensitiveTypeIds property
     * @return array<string>|null
    */
    public function getSensitiveTypeIds(): ?array {
        return $this->sensitiveTypeIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('file', $this->file);
        $writer->writeCollectionOfPrimitiveValues('sensitiveTypeIds', $this->sensitiveTypeIds);
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
     * Sets the file property value. The file property
     *  @param StreamInterface|null $value Value to set for the file property.
    */
    public function setFile(?StreamInterface $value ): void {
        $this->file = $value;
    }

    /**
     * Sets the sensitiveTypeIds property value. The sensitiveTypeIds property
     *  @param array<string>|null $value Value to set for the sensitiveTypeIds property.
    */
    public function setSensitiveTypeIds(?array $value ): void {
        $this->sensitiveTypeIds = $value;
    }

}
