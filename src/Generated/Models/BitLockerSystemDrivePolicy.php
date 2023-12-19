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
 * BitLocker Encryption Base Policies.
*/
class BitLockerSystemDrivePolicy implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new bitLockerSystemDrivePolicy and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BitLockerSystemDrivePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BitLockerSystemDrivePolicy {
        return new BitLockerSystemDrivePolicy();
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
     * Gets the encryptionMethod property value. Select the encryption method for operating system drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
     * @return BitLockerSystemDrivePolicy_encryptionMethod|null
    */
    public function getEncryptionMethod(): ?BitLockerSystemDrivePolicy_encryptionMethod {
        $val = $this->getBackingStore()->get('encryptionMethod');
        if (is_null($val) || $val instanceof BitLockerSystemDrivePolicy_encryptionMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'encryptionMethod'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'encryptionMethod' => fn(ParseNode $n) => $o->setEncryptionMethod($n->getEnumValue(BitLockerSystemDrivePolicy_encryptionMethod::class)),
            'minimumPinLength' => fn(ParseNode $n) => $o->setMinimumPinLength($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'prebootRecoveryEnableMessageAndUrl' => fn(ParseNode $n) => $o->setPrebootRecoveryEnableMessageAndUrl($n->getBooleanValue()),
            'prebootRecoveryMessage' => fn(ParseNode $n) => $o->setPrebootRecoveryMessage($n->getStringValue()),
            'prebootRecoveryUrl' => fn(ParseNode $n) => $o->setPrebootRecoveryUrl($n->getStringValue()),
            'recoveryOptions' => fn(ParseNode $n) => $o->setRecoveryOptions($n->getObjectValue([BitLockerRecoveryOptions::class, 'createFromDiscriminatorValue'])),
            'startupAuthenticationBlockWithoutTpmChip' => fn(ParseNode $n) => $o->setStartupAuthenticationBlockWithoutTpmChip($n->getBooleanValue()),
            'startupAuthenticationRequired' => fn(ParseNode $n) => $o->setStartupAuthenticationRequired($n->getBooleanValue()),
            'startupAuthenticationTpmKeyUsage' => fn(ParseNode $n) => $o->setStartupAuthenticationTpmKeyUsage($n->getEnumValue(ConfigurationUsage::class)),
            'startupAuthenticationTpmPinAndKeyUsage' => fn(ParseNode $n) => $o->setStartupAuthenticationTpmPinAndKeyUsage($n->getEnumValue(ConfigurationUsage::class)),
            'startupAuthenticationTpmPinUsage' => fn(ParseNode $n) => $o->setStartupAuthenticationTpmPinUsage($n->getEnumValue(ConfigurationUsage::class)),
            'startupAuthenticationTpmUsage' => fn(ParseNode $n) => $o->setStartupAuthenticationTpmUsage($n->getEnumValue(ConfigurationUsage::class)),
        ];
    }

    /**
     * Gets the minimumPinLength property value. Indicates the minimum length of startup pin. Valid values 4 to 20
     * @return int|null
    */
    public function getMinimumPinLength(): ?int {
        $val = $this->getBackingStore()->get('minimumPinLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumPinLength'");
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
     * Gets the prebootRecoveryEnableMessageAndUrl property value. Enable pre-boot recovery message and Url. If requireStartupAuthentication is false, this value does not affect.
     * @return bool|null
    */
    public function getPrebootRecoveryEnableMessageAndUrl(): ?bool {
        $val = $this->getBackingStore()->get('prebootRecoveryEnableMessageAndUrl');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'prebootRecoveryEnableMessageAndUrl'");
    }

    /**
     * Gets the prebootRecoveryMessage property value. Defines a custom recovery message.
     * @return string|null
    */
    public function getPrebootRecoveryMessage(): ?string {
        $val = $this->getBackingStore()->get('prebootRecoveryMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'prebootRecoveryMessage'");
    }

    /**
     * Gets the prebootRecoveryUrl property value. Defines a custom recovery URL.
     * @return string|null
    */
    public function getPrebootRecoveryUrl(): ?string {
        $val = $this->getBackingStore()->get('prebootRecoveryUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'prebootRecoveryUrl'");
    }

    /**
     * Gets the recoveryOptions property value. Allows to recover BitLocker encrypted operating system drives in the absence of the required startup key information. This policy setting is applied when you turn on BitLocker.
     * @return BitLockerRecoveryOptions|null
    */
    public function getRecoveryOptions(): ?BitLockerRecoveryOptions {
        $val = $this->getBackingStore()->get('recoveryOptions');
        if (is_null($val) || $val instanceof BitLockerRecoveryOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recoveryOptions'");
    }

    /**
     * Gets the startupAuthenticationBlockWithoutTpmChip property value. Indicates whether to allow BitLocker without a compatible TPM (requires a password or a startup key on a USB flash drive).
     * @return bool|null
    */
    public function getStartupAuthenticationBlockWithoutTpmChip(): ?bool {
        $val = $this->getBackingStore()->get('startupAuthenticationBlockWithoutTpmChip');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startupAuthenticationBlockWithoutTpmChip'");
    }

    /**
     * Gets the startupAuthenticationRequired property value. Require additional authentication at startup.
     * @return bool|null
    */
    public function getStartupAuthenticationRequired(): ?bool {
        $val = $this->getBackingStore()->get('startupAuthenticationRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startupAuthenticationRequired'");
    }

    /**
     * Gets the startupAuthenticationTpmKeyUsage property value. Possible values of the ConfigurationUsage list.
     * @return ConfigurationUsage|null
    */
    public function getStartupAuthenticationTpmKeyUsage(): ?ConfigurationUsage {
        $val = $this->getBackingStore()->get('startupAuthenticationTpmKeyUsage');
        if (is_null($val) || $val instanceof ConfigurationUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startupAuthenticationTpmKeyUsage'");
    }

    /**
     * Gets the startupAuthenticationTpmPinAndKeyUsage property value. Possible values of the ConfigurationUsage list.
     * @return ConfigurationUsage|null
    */
    public function getStartupAuthenticationTpmPinAndKeyUsage(): ?ConfigurationUsage {
        $val = $this->getBackingStore()->get('startupAuthenticationTpmPinAndKeyUsage');
        if (is_null($val) || $val instanceof ConfigurationUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startupAuthenticationTpmPinAndKeyUsage'");
    }

    /**
     * Gets the startupAuthenticationTpmPinUsage property value. Possible values of the ConfigurationUsage list.
     * @return ConfigurationUsage|null
    */
    public function getStartupAuthenticationTpmPinUsage(): ?ConfigurationUsage {
        $val = $this->getBackingStore()->get('startupAuthenticationTpmPinUsage');
        if (is_null($val) || $val instanceof ConfigurationUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startupAuthenticationTpmPinUsage'");
    }

    /**
     * Gets the startupAuthenticationTpmUsage property value. Possible values of the ConfigurationUsage list.
     * @return ConfigurationUsage|null
    */
    public function getStartupAuthenticationTpmUsage(): ?ConfigurationUsage {
        $val = $this->getBackingStore()->get('startupAuthenticationTpmUsage');
        if (is_null($val) || $val instanceof ConfigurationUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startupAuthenticationTpmUsage'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('encryptionMethod', $this->getEncryptionMethod());
        $writer->writeIntegerValue('minimumPinLength', $this->getMinimumPinLength());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('prebootRecoveryEnableMessageAndUrl', $this->getPrebootRecoveryEnableMessageAndUrl());
        $writer->writeStringValue('prebootRecoveryMessage', $this->getPrebootRecoveryMessage());
        $writer->writeStringValue('prebootRecoveryUrl', $this->getPrebootRecoveryUrl());
        $writer->writeObjectValue('recoveryOptions', $this->getRecoveryOptions());
        $writer->writeBooleanValue('startupAuthenticationBlockWithoutTpmChip', $this->getStartupAuthenticationBlockWithoutTpmChip());
        $writer->writeBooleanValue('startupAuthenticationRequired', $this->getStartupAuthenticationRequired());
        $writer->writeEnumValue('startupAuthenticationTpmKeyUsage', $this->getStartupAuthenticationTpmKeyUsage());
        $writer->writeEnumValue('startupAuthenticationTpmPinAndKeyUsage', $this->getStartupAuthenticationTpmPinAndKeyUsage());
        $writer->writeEnumValue('startupAuthenticationTpmPinUsage', $this->getStartupAuthenticationTpmPinUsage());
        $writer->writeEnumValue('startupAuthenticationTpmUsage', $this->getStartupAuthenticationTpmUsage());
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
     * Sets the encryptionMethod property value. Select the encryption method for operating system drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
     * @param BitLockerSystemDrivePolicy_encryptionMethod|null $value Value to set for the encryptionMethod property.
    */
    public function setEncryptionMethod(?BitLockerSystemDrivePolicy_encryptionMethod $value): void {
        $this->getBackingStore()->set('encryptionMethod', $value);
    }

    /**
     * Sets the minimumPinLength property value. Indicates the minimum length of startup pin. Valid values 4 to 20
     * @param int|null $value Value to set for the minimumPinLength property.
    */
    public function setMinimumPinLength(?int $value): void {
        $this->getBackingStore()->set('minimumPinLength', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the prebootRecoveryEnableMessageAndUrl property value. Enable pre-boot recovery message and Url. If requireStartupAuthentication is false, this value does not affect.
     * @param bool|null $value Value to set for the prebootRecoveryEnableMessageAndUrl property.
    */
    public function setPrebootRecoveryEnableMessageAndUrl(?bool $value): void {
        $this->getBackingStore()->set('prebootRecoveryEnableMessageAndUrl', $value);
    }

    /**
     * Sets the prebootRecoveryMessage property value. Defines a custom recovery message.
     * @param string|null $value Value to set for the prebootRecoveryMessage property.
    */
    public function setPrebootRecoveryMessage(?string $value): void {
        $this->getBackingStore()->set('prebootRecoveryMessage', $value);
    }

    /**
     * Sets the prebootRecoveryUrl property value. Defines a custom recovery URL.
     * @param string|null $value Value to set for the prebootRecoveryUrl property.
    */
    public function setPrebootRecoveryUrl(?string $value): void {
        $this->getBackingStore()->set('prebootRecoveryUrl', $value);
    }

    /**
     * Sets the recoveryOptions property value. Allows to recover BitLocker encrypted operating system drives in the absence of the required startup key information. This policy setting is applied when you turn on BitLocker.
     * @param BitLockerRecoveryOptions|null $value Value to set for the recoveryOptions property.
    */
    public function setRecoveryOptions(?BitLockerRecoveryOptions $value): void {
        $this->getBackingStore()->set('recoveryOptions', $value);
    }

    /**
     * Sets the startupAuthenticationBlockWithoutTpmChip property value. Indicates whether to allow BitLocker without a compatible TPM (requires a password or a startup key on a USB flash drive).
     * @param bool|null $value Value to set for the startupAuthenticationBlockWithoutTpmChip property.
    */
    public function setStartupAuthenticationBlockWithoutTpmChip(?bool $value): void {
        $this->getBackingStore()->set('startupAuthenticationBlockWithoutTpmChip', $value);
    }

    /**
     * Sets the startupAuthenticationRequired property value. Require additional authentication at startup.
     * @param bool|null $value Value to set for the startupAuthenticationRequired property.
    */
    public function setStartupAuthenticationRequired(?bool $value): void {
        $this->getBackingStore()->set('startupAuthenticationRequired', $value);
    }

    /**
     * Sets the startupAuthenticationTpmKeyUsage property value. Possible values of the ConfigurationUsage list.
     * @param ConfigurationUsage|null $value Value to set for the startupAuthenticationTpmKeyUsage property.
    */
    public function setStartupAuthenticationTpmKeyUsage(?ConfigurationUsage $value): void {
        $this->getBackingStore()->set('startupAuthenticationTpmKeyUsage', $value);
    }

    /**
     * Sets the startupAuthenticationTpmPinAndKeyUsage property value. Possible values of the ConfigurationUsage list.
     * @param ConfigurationUsage|null $value Value to set for the startupAuthenticationTpmPinAndKeyUsage property.
    */
    public function setStartupAuthenticationTpmPinAndKeyUsage(?ConfigurationUsage $value): void {
        $this->getBackingStore()->set('startupAuthenticationTpmPinAndKeyUsage', $value);
    }

    /**
     * Sets the startupAuthenticationTpmPinUsage property value. Possible values of the ConfigurationUsage list.
     * @param ConfigurationUsage|null $value Value to set for the startupAuthenticationTpmPinUsage property.
    */
    public function setStartupAuthenticationTpmPinUsage(?ConfigurationUsage $value): void {
        $this->getBackingStore()->set('startupAuthenticationTpmPinUsage', $value);
    }

    /**
     * Sets the startupAuthenticationTpmUsage property value. Possible values of the ConfigurationUsage list.
     * @param ConfigurationUsage|null $value Value to set for the startupAuthenticationTpmUsage property.
    */
    public function setStartupAuthenticationTpmUsage(?ConfigurationUsage $value): void {
        $this->getBackingStore()->set('startupAuthenticationTpmUsage', $value);
    }

}
