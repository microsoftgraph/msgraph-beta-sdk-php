<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PowerliftDownloadRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $files The list of files to download
    */
    private ?array $files = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $powerliftId The unique id for the request
    */
    private ?string $powerliftId = null;
    
    /**
     * Instantiates a new powerliftDownloadRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.powerliftDownloadRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PowerliftDownloadRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PowerliftDownloadRequest {
        return new PowerliftDownloadRequest();
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
            'files' => fn(ParseNode $n) => $o->setFiles($n->getCollectionOfPrimitiveValues()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'powerliftId' => fn(ParseNode $n) => $o->setPowerliftId($n->getStringValue()),
        ];
    }

    /**
     * Gets the files property value. The list of files to download
     * @return array<string>|null
    */
    public function getFiles(): ?array {
        return $this->files;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the powerliftId property value. The unique id for the request
     * @return string|null
    */
    public function getPowerliftId(): ?string {
        return $this->powerliftId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('files', $this->files);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('powerliftId', $this->powerliftId);
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
     * Sets the files property value. The list of files to download
     *  @param array<string>|null $value Value to set for the files property.
    */
    public function setFiles(?array $value ): void {
        $this->files = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the powerliftId property value. The unique id for the request
     *  @param string|null $value Value to set for the powerliftId property.
    */
    public function setPowerliftId(?string $value ): void {
        $this->powerliftId = $value;
    }

}
