<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcConnectivityResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new cloudPcConnectivityResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcConnectivityResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcConnectivityResult {
        return new CloudPcConnectivityResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the failedHealthCheckItems property value. A list of failed health check items. If the status property is available, this property will be empty.
     * @return array<CloudPcHealthCheckItem>|null
    */
    public function getFailedHealthCheckItems(): ?array {
        return $this->getBackingStore()->get('failedHealthCheckItems');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failedHealthCheckItems' => fn(ParseNode $n) => $o->setFailedHealthCheckItems($n->getCollectionOfObjectValues([CloudPcHealthCheckItem::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CloudPcConnectivityStatus::class)),
            'updatedDateTime' => fn(ParseNode $n) => $o->setUpdatedDateTime($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the status property value. The status property
     * @return CloudPcConnectivityStatus|null
    */
    public function getStatus(): ?CloudPcConnectivityStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the updatedDateTime property value. Datetime when the status was updated. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getUpdatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('updatedDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('failedHealthCheckItems', $this->getFailedHealthCheckItems());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeDateTimeValue('updatedDateTime', $this->getUpdatedDateTime());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the failedHealthCheckItems property value. A list of failed health check items. If the status property is available, this property will be empty.
     *  @param array<CloudPcHealthCheckItem>|null $value Value to set for the failedHealthCheckItems property.
    */
    public function setFailedHealthCheckItems(?array $value): void {
        $this->getBackingStore()->set('failedHealthCheckItems', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param CloudPcConnectivityStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcConnectivityStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the updatedDateTime property value. Datetime when the status was updated. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the updatedDateTime property.
    */
    public function setUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('updatedDateTime', $value);
    }

}
