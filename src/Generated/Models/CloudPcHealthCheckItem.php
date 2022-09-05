<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcHealthCheckItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $additionalDetails Additional message for this health check.
    */
    private ?string $additionalDetails = null;
    
    /**
     * @var string|null $displayName The connectivity health check item name.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastHealthCheckDateTime Timestamp when the last check occurs. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
    */
    private ?DateTime $lastHealthCheckDateTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var CloudPcConnectivityEventResult|null $result The result property
    */
    private ?CloudPcConnectivityEventResult $result = null;
    
    /**
     * Instantiates a new cloudPcHealthCheckItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.cloudPcHealthCheckItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcHealthCheckItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcHealthCheckItem {
        return new CloudPcHealthCheckItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalDetails property value. Additional message for this health check.
     * @return string|null
    */
    public function getAdditionalDetails(): ?string {
        return $this->additionalDetails;
    }

    /**
     * Gets the displayName property value. The connectivity health check item name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalDetails' => function (ParseNode $n) use ($o) { $o->setAdditionalDetails($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastHealthCheckDateTime' => function (ParseNode $n) use ($o) { $o->setLastHealthCheckDateTime($n->getDateTimeValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'result' => function (ParseNode $n) use ($o) { $o->setResult($n->getEnumValue(CloudPcConnectivityEventResult::class)); },
        ];
    }

    /**
     * Gets the lastHealthCheckDateTime property value. Timestamp when the last check occurs. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastHealthCheckDateTime(): ?DateTime {
        return $this->lastHealthCheckDateTime;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the result property value. The result property
     * @return CloudPcConnectivityEventResult|null
    */
    public function getResult(): ?CloudPcConnectivityEventResult {
        return $this->result;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('additionalDetails', $this->additionalDetails);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastHealthCheckDateTime', $this->lastHealthCheckDateTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('result', $this->result);
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
     * Sets the additionalDetails property value. Additional message for this health check.
     *  @param string|null $value Value to set for the additionalDetails property.
    */
    public function setAdditionalDetails(?string $value ): void {
        $this->additionalDetails = $value;
    }

    /**
     * Sets the displayName property value. The connectivity health check item name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastHealthCheckDateTime property value. Timestamp when the last check occurs. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the lastHealthCheckDateTime property.
    */
    public function setLastHealthCheckDateTime(?DateTime $value ): void {
        $this->lastHealthCheckDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the result property value. The result property
     *  @param CloudPcConnectivityEventResult|null $value Value to set for the result property.
    */
    public function setResult(?CloudPcConnectivityEventResult $value ): void {
        $this->result = $value;
    }

}
