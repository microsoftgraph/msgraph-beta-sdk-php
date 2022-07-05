<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AirPrintDestination implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $forceTls If true AirPrint connections are secured by Transport Layer Security (TLS). Default is false. Available in iOS 11.0 and later.
    */
    private ?bool $forceTls = null;
    
    /**
     * @var string|null $ipAddress The IP Address of the AirPrint destination.
    */
    private ?string $ipAddress = null;
    
    /**
     * @var int|null $port The listening port of the AirPrint destination. If this key is not specified AirPrint will use the default port. Available in iOS 11.0 and later.
    */
    private ?int $port = null;
    
    /**
     * @var string|null $resourcePath The Resource Path associated with the printer. This corresponds to the rp parameter of the ipps.tcp Bonjour record. For example: printers/Canon_MG5300_series, printers/Xerox_Phaser_7600, ipp/print, Epson_IPP_Printer.
    */
    private ?string $resourcePath = null;
    
    /**
     * Instantiates a new airPrintDestination and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AirPrintDestination
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AirPrintDestination {
        return new AirPrintDestination();
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
            'forceTls' => function (ParseNode $n) use ($o) { $o->setForceTls($n->getBooleanValue()); },
            'ipAddress' => function (ParseNode $n) use ($o) { $o->setIpAddress($n->getStringValue()); },
            'port' => function (ParseNode $n) use ($o) { $o->setPort($n->getIntegerValue()); },
            'resourcePath' => function (ParseNode $n) use ($o) { $o->setResourcePath($n->getStringValue()); },
        ];
    }

    /**
     * Gets the forceTls property value. If true AirPrint connections are secured by Transport Layer Security (TLS). Default is false. Available in iOS 11.0 and later.
     * @return bool|null
    */
    public function getForceTls(): ?bool {
        return $this->forceTls;
    }

    /**
     * Gets the ipAddress property value. The IP Address of the AirPrint destination.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->ipAddress;
    }

    /**
     * Gets the port property value. The listening port of the AirPrint destination. If this key is not specified AirPrint will use the default port. Available in iOS 11.0 and later.
     * @return int|null
    */
    public function getPort(): ?int {
        return $this->port;
    }

    /**
     * Gets the resourcePath property value. The Resource Path associated with the printer. This corresponds to the rp parameter of the ipps.tcp Bonjour record. For example: printers/Canon_MG5300_series, printers/Xerox_Phaser_7600, ipp/print, Epson_IPP_Printer.
     * @return string|null
    */
    public function getResourcePath(): ?string {
        return $this->resourcePath;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('forceTls', $this->forceTls);
        $writer->writeStringValue('ipAddress', $this->ipAddress);
        $writer->writeIntegerValue('port', $this->port);
        $writer->writeStringValue('resourcePath', $this->resourcePath);
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
     * Sets the forceTls property value. If true AirPrint connections are secured by Transport Layer Security (TLS). Default is false. Available in iOS 11.0 and later.
     *  @param bool|null $value Value to set for the forceTls property.
    */
    public function setForceTls(?bool $value ): void {
        $this->forceTls = $value;
    }

    /**
     * Sets the ipAddress property value. The IP Address of the AirPrint destination.
     *  @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value ): void {
        $this->ipAddress = $value;
    }

    /**
     * Sets the port property value. The listening port of the AirPrint destination. If this key is not specified AirPrint will use the default port. Available in iOS 11.0 and later.
     *  @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value ): void {
        $this->port = $value;
    }

    /**
     * Sets the resourcePath property value. The Resource Path associated with the printer. This corresponds to the rp parameter of the ipps.tcp Bonjour record. For example: printers/Canon_MG5300_series, printers/Xerox_Phaser_7600, ipp/print, Epson_IPP_Printer.
     *  @param string|null $value Value to set for the resourcePath property.
    */
    public function setResourcePath(?string $value ): void {
        $this->resourcePath = $value;
    }

}
