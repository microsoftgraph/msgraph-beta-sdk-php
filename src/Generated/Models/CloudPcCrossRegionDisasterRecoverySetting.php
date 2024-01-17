<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcCrossRegionDisasterRecoverySetting implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new cloudPcCrossRegionDisasterRecoverySetting and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcCrossRegionDisasterRecoverySetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcCrossRegionDisasterRecoverySetting {
        return new CloudPcCrossRegionDisasterRecoverySetting();
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
     * Gets the crossRegionDisasterRecoveryEnabled property value. The crossRegionDisasterRecoveryEnabled property
     * @return bool|null
    */
    public function getCrossRegionDisasterRecoveryEnabled(): ?bool {
        $val = $this->getBackingStore()->get('crossRegionDisasterRecoveryEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'crossRegionDisasterRecoveryEnabled'");
    }

    /**
     * Gets the disasterRecoveryNetworkSetting property value. The disasterRecoveryNetworkSetting property
     * @return CloudPcDisasterRecoveryNetworkSetting|null
    */
    public function getDisasterRecoveryNetworkSetting(): ?CloudPcDisasterRecoveryNetworkSetting {
        $val = $this->getBackingStore()->get('disasterRecoveryNetworkSetting');
        if (is_null($val) || $val instanceof CloudPcDisasterRecoveryNetworkSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disasterRecoveryNetworkSetting'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'crossRegionDisasterRecoveryEnabled' => fn(ParseNode $n) => $o->setCrossRegionDisasterRecoveryEnabled($n->getBooleanValue()),
            'disasterRecoveryNetworkSetting' => fn(ParseNode $n) => $o->setDisasterRecoveryNetworkSetting($n->getObjectValue([CloudPcDisasterRecoveryNetworkSetting::class, 'createFromDiscriminatorValue'])),
            'maintainCrossRegionRestorePointEnabled' => fn(ParseNode $n) => $o->setMaintainCrossRegionRestorePointEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the maintainCrossRegionRestorePointEnabled property value. The maintainCrossRegionRestorePointEnabled property
     * @return bool|null
    */
    public function getMaintainCrossRegionRestorePointEnabled(): ?bool {
        $val = $this->getBackingStore()->get('maintainCrossRegionRestorePointEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maintainCrossRegionRestorePointEnabled'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('crossRegionDisasterRecoveryEnabled', $this->getCrossRegionDisasterRecoveryEnabled());
        $writer->writeObjectValue('disasterRecoveryNetworkSetting', $this->getDisasterRecoveryNetworkSetting());
        $writer->writeBooleanValue('maintainCrossRegionRestorePointEnabled', $this->getMaintainCrossRegionRestorePointEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the crossRegionDisasterRecoveryEnabled property value. The crossRegionDisasterRecoveryEnabled property
     * @param bool|null $value Value to set for the crossRegionDisasterRecoveryEnabled property.
    */
    public function setCrossRegionDisasterRecoveryEnabled(?bool $value): void {
        $this->getBackingStore()->set('crossRegionDisasterRecoveryEnabled', $value);
    }

    /**
     * Sets the disasterRecoveryNetworkSetting property value. The disasterRecoveryNetworkSetting property
     * @param CloudPcDisasterRecoveryNetworkSetting|null $value Value to set for the disasterRecoveryNetworkSetting property.
    */
    public function setDisasterRecoveryNetworkSetting(?CloudPcDisasterRecoveryNetworkSetting $value): void {
        $this->getBackingStore()->set('disasterRecoveryNetworkSetting', $value);
    }

    /**
     * Sets the maintainCrossRegionRestorePointEnabled property value. The maintainCrossRegionRestorePointEnabled property
     * @param bool|null $value Value to set for the maintainCrossRegionRestorePointEnabled property.
    */
    public function setMaintainCrossRegionRestorePointEnabled(?bool $value): void {
        $this->getBackingStore()->set('maintainCrossRegionRestorePointEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
