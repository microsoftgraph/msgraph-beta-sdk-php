<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Certificate connector settings.
*/
class CertificateConnectorSetting implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CertificateConnectorSetting and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the certExpiryTime property value. Certificate expire time
     * @return DateTime|null
    */
    public function getCertExpiryTime(): ?DateTime {
        $val = $this->getBackingStore()->get('certExpiryTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certExpiryTime'");
    }

    /**
     * Gets the connectorVersion property value. Version of certificate connector
     * @return string|null
    */
    public function getConnectorVersion(): ?string {
        $val = $this->getBackingStore()->get('connectorVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectorVersion'");
    }

    /**
     * Gets the enrollmentError property value. Certificate connector enrollment error
     * @return string|null
    */
    public function getEnrollmentError(): ?string {
        $val = $this->getBackingStore()->get('enrollmentError');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentError'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('lastConnectorConnectionTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastConnectorConnectionTime'");
    }

    /**
     * Gets the lastUploadVersion property value. Version of last uploaded certificate connector
     * @return int|null
    */
    public function getLastUploadVersion(): ?int {
        $val = $this->getBackingStore()->get('lastUploadVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUploadVersion'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the status property value. Certificate connector status
     * @return int|null
    */
    public function getStatus(): ?int {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('certExpiryTime', $this->getCertExpiryTime());
        $writer->writeStringValue('connectorVersion', $this->getConnectorVersion());
        $writer->writeStringValue('enrollmentError', $this->getEnrollmentError());
        $writer->writeDateTimeValue('lastConnectorConnectionTime', $this->getLastConnectorConnectionTime());
        $writer->writeIntegerValue('lastUploadVersion', $this->getLastUploadVersion());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('status', $this->getStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the certExpiryTime property value. Certificate expire time
     * @param DateTime|null $value Value to set for the certExpiryTime property.
    */
    public function setCertExpiryTime(?DateTime $value): void {
        $this->getBackingStore()->set('certExpiryTime', $value);
    }

    /**
     * Sets the connectorVersion property value. Version of certificate connector
     * @param string|null $value Value to set for the connectorVersion property.
    */
    public function setConnectorVersion(?string $value): void {
        $this->getBackingStore()->set('connectorVersion', $value);
    }

    /**
     * Sets the enrollmentError property value. Certificate connector enrollment error
     * @param string|null $value Value to set for the enrollmentError property.
    */
    public function setEnrollmentError(?string $value): void {
        $this->getBackingStore()->set('enrollmentError', $value);
    }

    /**
     * Sets the lastConnectorConnectionTime property value. Last time certificate connector connected
     * @param DateTime|null $value Value to set for the lastConnectorConnectionTime property.
    */
    public function setLastConnectorConnectionTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastConnectorConnectionTime', $value);
    }

    /**
     * Sets the lastUploadVersion property value. Version of last uploaded certificate connector
     * @param int|null $value Value to set for the lastUploadVersion property.
    */
    public function setLastUploadVersion(?int $value): void {
        $this->getBackingStore()->set('lastUploadVersion', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the status property value. Certificate connector status
     * @param int|null $value Value to set for the status property.
    */
    public function setStatus(?int $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
