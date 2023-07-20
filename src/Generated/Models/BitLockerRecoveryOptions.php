<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * BitLocker Recovery Options.
*/
class BitLockerRecoveryOptions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new bitLockerRecoveryOptions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BitLockerRecoveryOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BitLockerRecoveryOptions {
        return new BitLockerRecoveryOptions();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the blockDataRecoveryAgent property value. Indicates whether to block certificate-based data recovery agent.
     * @return bool|null
    */
    public function getBlockDataRecoveryAgent(): ?bool {
        $val = $this->getBackingStore()->get('blockDataRecoveryAgent');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockDataRecoveryAgent'");
    }

    /**
     * Gets the enableBitLockerAfterRecoveryInformationToStore property value. Indicates whether or not to enable BitLocker until recovery information is stored in AD DS.
     * @return bool|null
    */
    public function getEnableBitLockerAfterRecoveryInformationToStore(): ?bool {
        $val = $this->getBackingStore()->get('enableBitLockerAfterRecoveryInformationToStore');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableBitLockerAfterRecoveryInformationToStore'");
    }

    /**
     * Gets the enableRecoveryInformationSaveToStore property value. Indicates whether or not to allow BitLocker recovery information to store in AD DS.
     * @return bool|null
    */
    public function getEnableRecoveryInformationSaveToStore(): ?bool {
        $val = $this->getBackingStore()->get('enableRecoveryInformationSaveToStore');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableRecoveryInformationSaveToStore'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'blockDataRecoveryAgent' => fn(ParseNode $n) => $o->setBlockDataRecoveryAgent($n->getBooleanValue()),
            'enableBitLockerAfterRecoveryInformationToStore' => fn(ParseNode $n) => $o->setEnableBitLockerAfterRecoveryInformationToStore($n->getBooleanValue()),
            'enableRecoveryInformationSaveToStore' => fn(ParseNode $n) => $o->setEnableRecoveryInformationSaveToStore($n->getBooleanValue()),
            'hideRecoveryOptions' => fn(ParseNode $n) => $o->setHideRecoveryOptions($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recoveryInformationToStore' => fn(ParseNode $n) => $o->setRecoveryInformationToStore($n->getEnumValue(BitLockerRecoveryInformationType::class)),
            'recoveryKeyUsage' => fn(ParseNode $n) => $o->setRecoveryKeyUsage($n->getEnumValue(ConfigurationUsage::class)),
            'recoveryPasswordUsage' => fn(ParseNode $n) => $o->setRecoveryPasswordUsage($n->getEnumValue(ConfigurationUsage::class)),
        ];
    }

    /**
     * Gets the hideRecoveryOptions property value. Indicates whether or not to allow showing recovery options in BitLocker Setup Wizard for fixed or system disk.
     * @return bool|null
    */
    public function getHideRecoveryOptions(): ?bool {
        $val = $this->getBackingStore()->get('hideRecoveryOptions');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hideRecoveryOptions'");
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
     * Gets the recoveryInformationToStore property value. BitLockerRecoveryInformationType types
     * @return BitLockerRecoveryInformationType|null
    */
    public function getRecoveryInformationToStore(): ?BitLockerRecoveryInformationType {
        $val = $this->getBackingStore()->get('recoveryInformationToStore');
        if (is_null($val) || $val instanceof BitLockerRecoveryInformationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recoveryInformationToStore'");
    }

    /**
     * Gets the recoveryKeyUsage property value. Possible values of the ConfigurationUsage list.
     * @return ConfigurationUsage|null
    */
    public function getRecoveryKeyUsage(): ?ConfigurationUsage {
        $val = $this->getBackingStore()->get('recoveryKeyUsage');
        if (is_null($val) || $val instanceof ConfigurationUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recoveryKeyUsage'");
    }

    /**
     * Gets the recoveryPasswordUsage property value. Possible values of the ConfigurationUsage list.
     * @return ConfigurationUsage|null
    */
    public function getRecoveryPasswordUsage(): ?ConfigurationUsage {
        $val = $this->getBackingStore()->get('recoveryPasswordUsage');
        if (is_null($val) || $val instanceof ConfigurationUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recoveryPasswordUsage'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('blockDataRecoveryAgent', $this->getBlockDataRecoveryAgent());
        $writer->writeBooleanValue('enableBitLockerAfterRecoveryInformationToStore', $this->getEnableBitLockerAfterRecoveryInformationToStore());
        $writer->writeBooleanValue('enableRecoveryInformationSaveToStore', $this->getEnableRecoveryInformationSaveToStore());
        $writer->writeBooleanValue('hideRecoveryOptions', $this->getHideRecoveryOptions());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('recoveryInformationToStore', $this->getRecoveryInformationToStore());
        $writer->writeEnumValue('recoveryKeyUsage', $this->getRecoveryKeyUsage());
        $writer->writeEnumValue('recoveryPasswordUsage', $this->getRecoveryPasswordUsage());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the blockDataRecoveryAgent property value. Indicates whether to block certificate-based data recovery agent.
     * @param bool|null $value Value to set for the blockDataRecoveryAgent property.
    */
    public function setBlockDataRecoveryAgent(?bool $value): void {
        $this->getBackingStore()->set('blockDataRecoveryAgent', $value);
    }

    /**
     * Sets the enableBitLockerAfterRecoveryInformationToStore property value. Indicates whether or not to enable BitLocker until recovery information is stored in AD DS.
     * @param bool|null $value Value to set for the enableBitLockerAfterRecoveryInformationToStore property.
    */
    public function setEnableBitLockerAfterRecoveryInformationToStore(?bool $value): void {
        $this->getBackingStore()->set('enableBitLockerAfterRecoveryInformationToStore', $value);
    }

    /**
     * Sets the enableRecoveryInformationSaveToStore property value. Indicates whether or not to allow BitLocker recovery information to store in AD DS.
     * @param bool|null $value Value to set for the enableRecoveryInformationSaveToStore property.
    */
    public function setEnableRecoveryInformationSaveToStore(?bool $value): void {
        $this->getBackingStore()->set('enableRecoveryInformationSaveToStore', $value);
    }

    /**
     * Sets the hideRecoveryOptions property value. Indicates whether or not to allow showing recovery options in BitLocker Setup Wizard for fixed or system disk.
     * @param bool|null $value Value to set for the hideRecoveryOptions property.
    */
    public function setHideRecoveryOptions(?bool $value): void {
        $this->getBackingStore()->set('hideRecoveryOptions', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recoveryInformationToStore property value. BitLockerRecoveryInformationType types
     * @param BitLockerRecoveryInformationType|null $value Value to set for the recoveryInformationToStore property.
    */
    public function setRecoveryInformationToStore(?BitLockerRecoveryInformationType $value): void {
        $this->getBackingStore()->set('recoveryInformationToStore', $value);
    }

    /**
     * Sets the recoveryKeyUsage property value. Possible values of the ConfigurationUsage list.
     * @param ConfigurationUsage|null $value Value to set for the recoveryKeyUsage property.
    */
    public function setRecoveryKeyUsage(?ConfigurationUsage $value): void {
        $this->getBackingStore()->set('recoveryKeyUsage', $value);
    }

    /**
     * Sets the recoveryPasswordUsage property value. Possible values of the ConfigurationUsage list.
     * @param ConfigurationUsage|null $value Value to set for the recoveryPasswordUsage property.
    */
    public function setRecoveryPasswordUsage(?ConfigurationUsage $value): void {
        $this->getBackingStore()->set('recoveryPasswordUsage', $value);
    }

}
