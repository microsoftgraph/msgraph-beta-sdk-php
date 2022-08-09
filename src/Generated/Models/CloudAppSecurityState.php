<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudAppSecurityState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $destinationServiceIp Destination IP Address of the connection to the cloud application/service.
    */
    private ?string $destinationServiceIp = null;
    
    /**
     * @var string|null $destinationServiceName Cloud application/service name (for example 'Salesforce', 'DropBox', etc.).
    */
    private ?string $destinationServiceName = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $riskScore Provider-generated/calculated risk score of the Cloud Application/Service. Recommended value range of 0-1, which equates to a percentage.
    */
    private ?string $riskScore = null;
    
    /**
     * Instantiates a new cloudAppSecurityState and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.cloudAppSecurityState');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudAppSecurityState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudAppSecurityState {
        return new CloudAppSecurityState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the destinationServiceIp property value. Destination IP Address of the connection to the cloud application/service.
     * @return string|null
    */
    public function getDestinationServiceIp(): ?string {
        return $this->destinationServiceIp;
    }

    /**
     * Gets the destinationServiceName property value. Cloud application/service name (for example 'Salesforce', 'DropBox', etc.).
     * @return string|null
    */
    public function getDestinationServiceName(): ?string {
        return $this->destinationServiceName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'destinationServiceIp' => function (ParseNode $n) use ($o) { $o->setDestinationServiceIp($n->getStringValue()); },
            'destinationServiceName' => function (ParseNode $n) use ($o) { $o->setDestinationServiceName($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'riskScore' => function (ParseNode $n) use ($o) { $o->setRiskScore($n->getStringValue()); },
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
     * Gets the riskScore property value. Provider-generated/calculated risk score of the Cloud Application/Service. Recommended value range of 0-1, which equates to a percentage.
     * @return string|null
    */
    public function getRiskScore(): ?string {
        return $this->riskScore;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('destinationServiceIp', $this->destinationServiceIp);
        $writer->writeStringValue('destinationServiceName', $this->destinationServiceName);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('riskScore', $this->riskScore);
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
     * Sets the destinationServiceIp property value. Destination IP Address of the connection to the cloud application/service.
     *  @param string|null $value Value to set for the destinationServiceIp property.
    */
    public function setDestinationServiceIp(?string $value ): void {
        $this->destinationServiceIp = $value;
    }

    /**
     * Sets the destinationServiceName property value. Cloud application/service name (for example 'Salesforce', 'DropBox', etc.).
     *  @param string|null $value Value to set for the destinationServiceName property.
    */
    public function setDestinationServiceName(?string $value ): void {
        $this->destinationServiceName = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the riskScore property value. Provider-generated/calculated risk score of the Cloud Application/Service. Recommended value range of 0-1, which equates to a percentage.
     *  @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value ): void {
        $this->riskScore = $value;
    }

}
