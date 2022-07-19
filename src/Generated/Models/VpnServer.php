<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VpnServer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $address Address (IP address, FQDN or URL)
    */
    private ?string $address = null;
    
    /**
     * @var string|null $description Description.
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $isDefaultServer Default server.
    */
    private ?bool $isDefaultServer = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new vpnServer and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.vpnServer');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VpnServer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VpnServer {
        return new VpnServer();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the address property value. Address (IP address, FQDN or URL)
     * @return string|null
    */
    public function getAddress(): ?string {
        return $this->address;
    }

    /**
     * Gets the description property value. Description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'address' => function (ParseNode $n) use ($o) { $o->setAddress($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'isDefaultServer' => function (ParseNode $n) use ($o) { $o->setIsDefaultServer($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isDefaultServer property value. Default server.
     * @return bool|null
    */
    public function getIsDefaultServer(): ?bool {
        return $this->isDefaultServer;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('address', $this->address);
        $writer->writeStringValue('description', $this->description);
        $writer->writeBooleanValue('isDefaultServer', $this->isDefaultServer);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the address property value. Address (IP address, FQDN or URL)
     *  @param string|null $value Value to set for the address property.
    */
    public function setAddress(?string $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the description property value. Description.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the isDefaultServer property value. Default server.
     *  @param bool|null $value Value to set for the isDefaultServer property.
    */
    public function setIsDefaultServer(?bool $value ): void {
        $this->isDefaultServer = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
