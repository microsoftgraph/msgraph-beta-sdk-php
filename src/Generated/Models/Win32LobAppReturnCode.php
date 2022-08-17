<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppReturnCode implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $returnCode Return code.
    */
    private ?int $returnCode = null;
    
    /**
     * @var Win32LobAppReturnCodeType|null $type Indicates the type of return code.
    */
    private ?Win32LobAppReturnCodeType $type = null;
    
    /**
     * Instantiates a new win32LobAppReturnCode and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.win32LobAppReturnCode');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppReturnCode
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppReturnCode {
        return new Win32LobAppReturnCode();
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
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'returnCode' => function (ParseNode $n) use ($o) { $o->setReturnCode($n->getIntegerValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(Win32LobAppReturnCodeType::class)); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the returnCode property value. Return code.
     * @return int|null
    */
    public function getReturnCode(): ?int {
        return $this->returnCode;
    }

    /**
     * Gets the type property value. Indicates the type of return code.
     * @return Win32LobAppReturnCodeType|null
    */
    public function getType(): ?Win32LobAppReturnCodeType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('returnCode', $this->returnCode);
        $writer->writeEnumValue('type', $this->type);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the returnCode property value. Return code.
     *  @param int|null $value Value to set for the returnCode property.
    */
    public function setReturnCode(?int $value ): void {
        $this->returnCode = $value;
    }

    /**
     * Sets the type property value. Indicates the type of return code.
     *  @param Win32LobAppReturnCodeType|null $value Value to set for the type property.
    */
    public function setType(?Win32LobAppReturnCodeType $value ): void {
        $this->type = $value;
    }

}
