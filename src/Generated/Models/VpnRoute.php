<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VpnRoute implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $destinationPrefix Destination prefix (IPv4/v6 address).
    */
    private ?string $destinationPrefix = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $prefixSize Prefix size. (1-32). Valid values 1 to 32
    */
    private ?int $prefixSize = null;
    
    /**
     * Instantiates a new vpnRoute and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.vpnRoute');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VpnRoute
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VpnRoute {
        return new VpnRoute();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the destinationPrefix property value. Destination prefix (IPv4/v6 address).
     * @return string|null
    */
    public function getDestinationPrefix(): ?string {
        return $this->destinationPrefix;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'destinationPrefix' => function (ParseNode $n) use ($o) { $o->setDestinationPrefix($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'prefixSize' => function (ParseNode $n) use ($o) { $o->setPrefixSize($n->getIntegerValue()); },
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
     * Gets the prefixSize property value. Prefix size. (1-32). Valid values 1 to 32
     * @return int|null
    */
    public function getPrefixSize(): ?int {
        return $this->prefixSize;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('destinationPrefix', $this->destinationPrefix);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('prefixSize', $this->prefixSize);
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
     * Sets the destinationPrefix property value. Destination prefix (IPv4/v6 address).
     *  @param string|null $value Value to set for the destinationPrefix property.
    */
    public function setDestinationPrefix(?string $value ): void {
        $this->destinationPrefix = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the prefixSize property value. Prefix size. (1-32). Valid values 1 to 32
     *  @param int|null $value Value to set for the prefixSize property.
    */
    public function setPrefixSize(?int $value ): void {
        $this->prefixSize = $value;
    }

}
