<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CertificateConnectorSetting implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $certExpiryTime Certificate expire time
    */
    private ?DateTime $certExpiryTime = null;
    
    /**
     * @var string|null $connectorVersion Version of certificate connector
    */
    private ?string $connectorVersion = null;
    
    /**
     * @var string|null $enrollmentError Certificate connector enrollment error
    */
    private ?string $enrollmentError = null;
    
    /**
     * @var DateTime|null $lastConnectorConnectionTime Last time certificate connector connected
    */
    private ?DateTime $lastConnectorConnectionTime = null;
    
    /**
     * @var int|null $lastUploadVersion Version of last uploaded certificate connector
    */
    private ?int $lastUploadVersion = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $status Certificate connector status
    */
    private ?int $status = null;
    
    /**
     * Instantiates a new certificateConnectorSetting and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.certificateConnectorSetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CertificateConnectorSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CertificateConnectorSetting {
        return new CertificateConnectorSetting();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the certExpiryTime property value. Certificate expire time
     * @return DateTime|null
    */
    public function getCertExpiryTime(): ?DateTime {
        return $this->certExpiryTime;
    }

    /**
     * Gets the connectorVersion property value. Version of certificate connector
     * @return string|null
    */
    public function getConnectorVersion(): ?string {
        return $this->connectorVersion;
    }

    /**
     * Gets the enrollmentError property value. Certificate connector enrollment error
     * @return string|null
    */
    public function getEnrollmentError(): ?string {
        return $this->enrollmentError;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'certExpiryTime' => fn(ParseNode $n) => $o->setCertExpiryTime($n->getDateTimeValue()),
            'connectorVersion' => fn(ParseNode $n) => $o->setConnectorVersion($n->getStringValue()),
            'enrollmentError' => fn(ParseNode $n) => $o->setEnrollmentError($n->getStringValue()),
            'lastConnectorConnectionTime' => fn(ParseNode $n) => $o->setLastConnectorConnectionTime($n->getDateTimeValue()),
            'lastUploadVersion' => fn(ParseNode $n) => $o->setLastUploadVersion($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the lastConnectorConnectionTime property value. Last time certificate connector connected
     * @return DateTime|null
    */
    public function getLastConnectorConnectionTime(): ?DateTime {
        return $this->lastConnectorConnectionTime;
    }

    /**
     * Gets the lastUploadVersion property value. Version of last uploaded certificate connector
     * @return int|null
    */
    public function getLastUploadVersion(): ?int {
        return $this->lastUploadVersion;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the status property value. Certificate connector status
     * @return int|null
    */
    public function getStatus(): ?int {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('certExpiryTime', $this->certExpiryTime);
        $writer->writeStringValue('connectorVersion', $this->connectorVersion);
        $writer->writeStringValue('enrollmentError', $this->enrollmentError);
        $writer->writeDateTimeValue('lastConnectorConnectionTime', $this->lastConnectorConnectionTime);
        $writer->writeIntegerValue('lastUploadVersion', $this->lastUploadVersion);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('status', $this->status);
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
     * Sets the certExpiryTime property value. Certificate expire time
     *  @param DateTime|null $value Value to set for the certExpiryTime property.
    */
    public function setCertExpiryTime(?DateTime $value ): void {
        $this->certExpiryTime = $value;
    }

    /**
     * Sets the connectorVersion property value. Version of certificate connector
     *  @param string|null $value Value to set for the connectorVersion property.
    */
    public function setConnectorVersion(?string $value ): void {
        $this->connectorVersion = $value;
    }

    /**
     * Sets the enrollmentError property value. Certificate connector enrollment error
     *  @param string|null $value Value to set for the enrollmentError property.
    */
    public function setEnrollmentError(?string $value ): void {
        $this->enrollmentError = $value;
    }

    /**
     * Sets the lastConnectorConnectionTime property value. Last time certificate connector connected
     *  @param DateTime|null $value Value to set for the lastConnectorConnectionTime property.
    */
    public function setLastConnectorConnectionTime(?DateTime $value ): void {
        $this->lastConnectorConnectionTime = $value;
    }

    /**
     * Sets the lastUploadVersion property value. Version of last uploaded certificate connector
     *  @param int|null $value Value to set for the lastUploadVersion property.
    */
    public function setLastUploadVersion(?int $value ): void {
        $this->lastUploadVersion = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the status property value. Certificate connector status
     *  @param int|null $value Value to set for the status property.
    */
    public function setStatus(?int $value ): void {
        $this->status = $value;
    }

}
