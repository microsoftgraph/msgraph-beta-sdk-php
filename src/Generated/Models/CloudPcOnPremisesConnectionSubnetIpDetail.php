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

class CloudPcOnPremisesConnectionSubnetIpDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcOnPremisesConnectionSubnetIpDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcOnPremisesConnectionSubnetIpDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcOnPremisesConnectionSubnetIpDetail {
        return new CloudPcOnPremisesConnectionSubnetIpDetail();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'subnetAvailableIpCount' => fn(ParseNode $n) => $o->setSubnetAvailableIpCount($n->getIntegerValue()),
            'subnetAvailableIpCountLastSyncDateTime' => fn(ParseNode $n) => $o->setSubnetAvailableIpCountLastSyncDateTime($n->getDateTimeValue()),
        ];
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
     * Gets the subnetAvailableIpCount property value. The subnetAvailableIpCount property
     * @return int|null
    */
    public function getSubnetAvailableIpCount(): ?int {
        $val = $this->getBackingStore()->get('subnetAvailableIpCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subnetAvailableIpCount'");
    }

    /**
     * Gets the subnetAvailableIpCountLastSyncDateTime property value. The subnetAvailableIpCountLastSyncDateTime property
     * @return DateTime|null
    */
    public function getSubnetAvailableIpCountLastSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('subnetAvailableIpCountLastSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subnetAvailableIpCountLastSyncDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('subnetAvailableIpCount', $this->getSubnetAvailableIpCount());
        $writer->writeDateTimeValue('subnetAvailableIpCountLastSyncDateTime', $this->getSubnetAvailableIpCountLastSyncDateTime());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the subnetAvailableIpCount property value. The subnetAvailableIpCount property
     * @param int|null $value Value to set for the subnetAvailableIpCount property.
    */
    public function setSubnetAvailableIpCount(?int $value): void {
        $this->getBackingStore()->set('subnetAvailableIpCount', $value);
    }

    /**
     * Sets the subnetAvailableIpCountLastSyncDateTime property value. The subnetAvailableIpCountLastSyncDateTime property
     * @param DateTime|null $value Value to set for the subnetAvailableIpCountLastSyncDateTime property.
    */
    public function setSubnetAvailableIpCountLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('subnetAvailableIpCountLastSyncDateTime', $value);
    }

}
