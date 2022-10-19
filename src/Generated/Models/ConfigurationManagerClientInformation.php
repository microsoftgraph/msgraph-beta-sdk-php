<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConfigurationManagerClientInformation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $clientIdentifier Configuration Manager Client Id from SCCM
    */
    private ?string $clientIdentifier = null;
    
    /**
     * @var string|null $clientVersion Configuration Manager Client version from SCCM
    */
    private ?string $clientVersion = null;
    
    /**
     * @var bool|null $isBlocked Configuration Manager Client blocked status from SCCM
    */
    private ?bool $isBlocked = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new configurationManagerClientInformation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.configurationManagerClientInformation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigurationManagerClientInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfigurationManagerClientInformation {
        return new ConfigurationManagerClientInformation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the clientIdentifier property value. Configuration Manager Client Id from SCCM
     * @return string|null
    */
    public function getClientIdentifier(): ?string {
        return $this->clientIdentifier;
    }

    /**
     * Gets the clientVersion property value. Configuration Manager Client version from SCCM
     * @return string|null
    */
    public function getClientVersion(): ?string {
        return $this->clientVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clientIdentifier' => fn(ParseNode $n) => $o->setClientIdentifier($n->getStringValue()),
            'clientVersion' => fn(ParseNode $n) => $o->setClientVersion($n->getStringValue()),
            'isBlocked' => fn(ParseNode $n) => $o->setIsBlocked($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isBlocked property value. Configuration Manager Client blocked status from SCCM
     * @return bool|null
    */
    public function getIsBlocked(): ?bool {
        return $this->isBlocked;
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
        $writer->writeStringValue('clientIdentifier', $this->clientIdentifier);
        $writer->writeStringValue('clientVersion', $this->clientVersion);
        $writer->writeBooleanValue('isBlocked', $this->isBlocked);
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
     * Sets the clientIdentifier property value. Configuration Manager Client Id from SCCM
     *  @param string|null $value Value to set for the clientIdentifier property.
    */
    public function setClientIdentifier(?string $value ): void {
        $this->clientIdentifier = $value;
    }

    /**
     * Sets the clientVersion property value. Configuration Manager Client version from SCCM
     *  @param string|null $value Value to set for the clientVersion property.
    */
    public function setClientVersion(?string $value ): void {
        $this->clientVersion = $value;
    }

    /**
     * Sets the isBlocked property value. Configuration Manager Client blocked status from SCCM
     *  @param bool|null $value Value to set for the isBlocked property.
    */
    public function setIsBlocked(?bool $value ): void {
        $this->isBlocked = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
