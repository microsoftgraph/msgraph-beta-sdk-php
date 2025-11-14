<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcUserSettingsPersistenceConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcUserSettingsPersistenceConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcUserSettingsPersistenceConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcUserSettingsPersistenceConfiguration {
        return new CloudPcUserSettingsPersistenceConfiguration();
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
            'userSettingsPersistenceEnabled' => fn(ParseNode $n) => $o->setUserSettingsPersistenceEnabled($n->getBooleanValue()),
            'userSettingsPersistenceStorageSizeCategory' => fn(ParseNode $n) => $o->setUserSettingsPersistenceStorageSizeCategory($n->getEnumValue(CloudPcUserSettingsPersistenceStorageSizeCategory::class)),
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
     * Gets the userSettingsPersistenceEnabled property value. Indicates whether user application settings are persisted between Cloud PC sessions. The default value is false. When true, user settings persistence is enabled, and Windows 365 automatically saves any user-specific application data in a central cloud storage location. Anytime the user connects to a Cloud PC within this provisioning policy, Windows 365 reconnects the user to that persisted storage. When false, this feature isn't used. The persistent storage can only be accessed by Cloud PC; IT admins can't access it.
     * @return bool|null
    */
    public function getUserSettingsPersistenceEnabled(): ?bool {
        $val = $this->getBackingStore()->get('userSettingsPersistenceEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userSettingsPersistenceEnabled'");
    }

    /**
     * Gets the userSettingsPersistenceStorageSizeCategory property value. Indicates the storage size for persisting user application settings. Possible values are: fourGB, eightGB, sixteenGB, thirtyTwoGB, sixtyFourGB, unknownFutureValue. The default value is fourGB.
     * @return CloudPcUserSettingsPersistenceStorageSizeCategory|null
    */
    public function getUserSettingsPersistenceStorageSizeCategory(): ?CloudPcUserSettingsPersistenceStorageSizeCategory {
        $val = $this->getBackingStore()->get('userSettingsPersistenceStorageSizeCategory');
        if (is_null($val) || $val instanceof CloudPcUserSettingsPersistenceStorageSizeCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userSettingsPersistenceStorageSizeCategory'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('userSettingsPersistenceEnabled', $this->getUserSettingsPersistenceEnabled());
        $writer->writeEnumValue('userSettingsPersistenceStorageSizeCategory', $this->getUserSettingsPersistenceStorageSizeCategory());
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
     * Sets the userSettingsPersistenceEnabled property value. Indicates whether user application settings are persisted between Cloud PC sessions. The default value is false. When true, user settings persistence is enabled, and Windows 365 automatically saves any user-specific application data in a central cloud storage location. Anytime the user connects to a Cloud PC within this provisioning policy, Windows 365 reconnects the user to that persisted storage. When false, this feature isn't used. The persistent storage can only be accessed by Cloud PC; IT admins can't access it.
     * @param bool|null $value Value to set for the userSettingsPersistenceEnabled property.
    */
    public function setUserSettingsPersistenceEnabled(?bool $value): void {
        $this->getBackingStore()->set('userSettingsPersistenceEnabled', $value);
    }

    /**
     * Sets the userSettingsPersistenceStorageSizeCategory property value. Indicates the storage size for persisting user application settings. Possible values are: fourGB, eightGB, sixteenGB, thirtyTwoGB, sixtyFourGB, unknownFutureValue. The default value is fourGB.
     * @param CloudPcUserSettingsPersistenceStorageSizeCategory|null $value Value to set for the userSettingsPersistenceStorageSizeCategory property.
    */
    public function setUserSettingsPersistenceStorageSizeCategory(?CloudPcUserSettingsPersistenceStorageSizeCategory $value): void {
        $this->getBackingStore()->set('userSettingsPersistenceStorageSizeCategory', $value);
    }

}
