<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BitLockerSystemDrivePolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var BitLockerEncryptionMethod|null $encryptionMethod Select the encryption method for operating system drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
    */
    private ?BitLockerEncryptionMethod $encryptionMethod = null;
    
    /**
     * @var int|null $minimumPinLength Indicates the minimum length of startup pin. Valid values 4 to 20
    */
    private ?int $minimumPinLength = null;
    
    /**
     * @var bool|null $prebootRecoveryEnableMessageAndUrl Enable pre-boot recovery message and Url. If requireStartupAuthentication is false, this value does not affect.
    */
    private ?bool $prebootRecoveryEnableMessageAndUrl = null;
    
    /**
     * @var string|null $prebootRecoveryMessage Defines a custom recovery message.
    */
    private ?string $prebootRecoveryMessage = null;
    
    /**
     * @var string|null $prebootRecoveryUrl Defines a custom recovery URL.
    */
    private ?string $prebootRecoveryUrl = null;
    
    /**
     * @var BitLockerRecoveryOptions|null $recoveryOptions Allows to recover BitLocker encrypted operating system drives in the absence of the required startup key information. This policy setting is applied when you turn on BitLocker.
    */
    private ?BitLockerRecoveryOptions $recoveryOptions = null;
    
    /**
     * @var bool|null $startupAuthenticationBlockWithoutTpmChip Indicates whether to allow BitLocker without a compatible TPM (requires a password or a startup key on a USB flash drive).
    */
    private ?bool $startupAuthenticationBlockWithoutTpmChip = null;
    
    /**
     * @var bool|null $startupAuthenticationRequired Require additional authentication at startup.
    */
    private ?bool $startupAuthenticationRequired = null;
    
    /**
     * @var ConfigurationUsage|null $startupAuthenticationTpmKeyUsage Indicates if TPM startup key is allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
    */
    private ?ConfigurationUsage $startupAuthenticationTpmKeyUsage = null;
    
    /**
     * @var ConfigurationUsage|null $startupAuthenticationTpmPinAndKeyUsage Indicates if TPM startup pin key and key are allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
    */
    private ?ConfigurationUsage $startupAuthenticationTpmPinAndKeyUsage = null;
    
    /**
     * @var ConfigurationUsage|null $startupAuthenticationTpmPinUsage Indicates if TPM startup pin is allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
    */
    private ?ConfigurationUsage $startupAuthenticationTpmPinUsage = null;
    
    /**
     * @var ConfigurationUsage|null $startupAuthenticationTpmUsage Indicates if TPM startup is allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
    */
    private ?ConfigurationUsage $startupAuthenticationTpmUsage = null;
    
    /**
     * Instantiates a new bitLockerSystemDrivePolicy and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the encryptionMethod property value. Select the encryption method for operating system drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
     * @return BitLockerEncryptionMethod|null
    */
    public function getEncryptionMethod(): ?BitLockerEncryptionMethod {
        return $this->encryptionMethod;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'encryptionMethod' => function (ParseNode $n) use ($o) { $o->setEncryptionMethod($n->getEnumValue(BitLockerEncryptionMethod::class)); },
            'minimumPinLength' => function (ParseNode $n) use ($o) { $o->setMinimumPinLength($n->getIntegerValue()); },
            'prebootRecoveryEnableMessageAndUrl' => function (ParseNode $n) use ($o) { $o->setPrebootRecoveryEnableMessageAndUrl($n->getBooleanValue()); },
            'prebootRecoveryMessage' => function (ParseNode $n) use ($o) { $o->setPrebootRecoveryMessage($n->getStringValue()); },
            'prebootRecoveryUrl' => function (ParseNode $n) use ($o) { $o->setPrebootRecoveryUrl($n->getStringValue()); },
            'recoveryOptions' => function (ParseNode $n) use ($o) { $o->setRecoveryOptions($n->getObjectValue(array(BitLockerRecoveryOptions::class, 'createFromDiscriminatorValue'))); },
            'startupAuthenticationBlockWithoutTpmChip' => function (ParseNode $n) use ($o) { $o->setStartupAuthenticationBlockWithoutTpmChip($n->getBooleanValue()); },
            'startupAuthenticationRequired' => function (ParseNode $n) use ($o) { $o->setStartupAuthenticationRequired($n->getBooleanValue()); },
            'startupAuthenticationTpmKeyUsage' => function (ParseNode $n) use ($o) { $o->setStartupAuthenticationTpmKeyUsage($n->getEnumValue(ConfigurationUsage::class)); },
            'startupAuthenticationTpmPinAndKeyUsage' => function (ParseNode $n) use ($o) { $o->setStartupAuthenticationTpmPinAndKeyUsage($n->getEnumValue(ConfigurationUsage::class)); },
            'startupAuthenticationTpmPinUsage' => function (ParseNode $n) use ($o) { $o->setStartupAuthenticationTpmPinUsage($n->getEnumValue(ConfigurationUsage::class)); },
            'startupAuthenticationTpmUsage' => function (ParseNode $n) use ($o) { $o->setStartupAuthenticationTpmUsage($n->getEnumValue(ConfigurationUsage::class)); },
        ];
    }

    /**
     * Gets the minimumPinLength property value. Indicates the minimum length of startup pin. Valid values 4 to 20
     * @return int|null
    */
    public function getMinimumPinLength(): ?int {
        return $this->minimumPinLength;
    }

    /**
     * Gets the prebootRecoveryEnableMessageAndUrl property value. Enable pre-boot recovery message and Url. If requireStartupAuthentication is false, this value does not affect.
     * @return bool|null
    */
    public function getPrebootRecoveryEnableMessageAndUrl(): ?bool {
        return $this->prebootRecoveryEnableMessageAndUrl;
    }

    /**
     * Gets the prebootRecoveryMessage property value. Defines a custom recovery message.
     * @return string|null
    */
    public function getPrebootRecoveryMessage(): ?string {
        return $this->prebootRecoveryMessage;
    }

    /**
     * Gets the prebootRecoveryUrl property value. Defines a custom recovery URL.
     * @return string|null
    */
    public function getPrebootRecoveryUrl(): ?string {
        return $this->prebootRecoveryUrl;
    }

    /**
     * Gets the recoveryOptions property value. Allows to recover BitLocker encrypted operating system drives in the absence of the required startup key information. This policy setting is applied when you turn on BitLocker.
     * @return BitLockerRecoveryOptions|null
    */
    public function getRecoveryOptions(): ?BitLockerRecoveryOptions {
        return $this->recoveryOptions;
    }

    /**
     * Gets the startupAuthenticationBlockWithoutTpmChip property value. Indicates whether to allow BitLocker without a compatible TPM (requires a password or a startup key on a USB flash drive).
     * @return bool|null
    */
    public function getStartupAuthenticationBlockWithoutTpmChip(): ?bool {
        return $this->startupAuthenticationBlockWithoutTpmChip;
    }

    /**
     * Gets the startupAuthenticationRequired property value. Require additional authentication at startup.
     * @return bool|null
    */
    public function getStartupAuthenticationRequired(): ?bool {
        return $this->startupAuthenticationRequired;
    }

    /**
     * Gets the startupAuthenticationTpmKeyUsage property value. Indicates if TPM startup key is allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
     * @return ConfigurationUsage|null
    */
    public function getStartupAuthenticationTpmKeyUsage(): ?ConfigurationUsage {
        return $this->startupAuthenticationTpmKeyUsage;
    }

    /**
     * Gets the startupAuthenticationTpmPinAndKeyUsage property value. Indicates if TPM startup pin key and key are allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
     * @return ConfigurationUsage|null
    */
    public function getStartupAuthenticationTpmPinAndKeyUsage(): ?ConfigurationUsage {
        return $this->startupAuthenticationTpmPinAndKeyUsage;
    }

    /**
     * Gets the startupAuthenticationTpmPinUsage property value. Indicates if TPM startup pin is allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
     * @return ConfigurationUsage|null
    */
    public function getStartupAuthenticationTpmPinUsage(): ?ConfigurationUsage {
        return $this->startupAuthenticationTpmPinUsage;
    }

    /**
     * Gets the startupAuthenticationTpmUsage property value. Indicates if TPM startup is allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
     * @return ConfigurationUsage|null
    */
    public function getStartupAuthenticationTpmUsage(): ?ConfigurationUsage {
        return $this->startupAuthenticationTpmUsage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('encryptionMethod', $this->encryptionMethod);
        $writer->writeIntegerValue('minimumPinLength', $this->minimumPinLength);
        $writer->writeBooleanValue('prebootRecoveryEnableMessageAndUrl', $this->prebootRecoveryEnableMessageAndUrl);
        $writer->writeStringValue('prebootRecoveryMessage', $this->prebootRecoveryMessage);
        $writer->writeStringValue('prebootRecoveryUrl', $this->prebootRecoveryUrl);
        $writer->writeObjectValue('recoveryOptions', $this->recoveryOptions);
        $writer->writeBooleanValue('startupAuthenticationBlockWithoutTpmChip', $this->startupAuthenticationBlockWithoutTpmChip);
        $writer->writeBooleanValue('startupAuthenticationRequired', $this->startupAuthenticationRequired);
        $writer->writeEnumValue('startupAuthenticationTpmKeyUsage', $this->startupAuthenticationTpmKeyUsage);
        $writer->writeEnumValue('startupAuthenticationTpmPinAndKeyUsage', $this->startupAuthenticationTpmPinAndKeyUsage);
        $writer->writeEnumValue('startupAuthenticationTpmPinUsage', $this->startupAuthenticationTpmPinUsage);
        $writer->writeEnumValue('startupAuthenticationTpmUsage', $this->startupAuthenticationTpmUsage);
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
     * Sets the encryptionMethod property value. Select the encryption method for operating system drives. Possible values are: aesCbc128, aesCbc256, xtsAes128, xtsAes256.
     *  @param BitLockerEncryptionMethod|null $value Value to set for the encryptionMethod property.
    */
    public function setEncryptionMethod(?BitLockerEncryptionMethod $value ): void {
        $this->encryptionMethod = $value;
    }

    /**
     * Sets the minimumPinLength property value. Indicates the minimum length of startup pin. Valid values 4 to 20
     *  @param int|null $value Value to set for the minimumPinLength property.
    */
    public function setMinimumPinLength(?int $value ): void {
        $this->minimumPinLength = $value;
    }

    /**
     * Sets the prebootRecoveryEnableMessageAndUrl property value. Enable pre-boot recovery message and Url. If requireStartupAuthentication is false, this value does not affect.
     *  @param bool|null $value Value to set for the prebootRecoveryEnableMessageAndUrl property.
    */
    public function setPrebootRecoveryEnableMessageAndUrl(?bool $value ): void {
        $this->prebootRecoveryEnableMessageAndUrl = $value;
    }

    /**
     * Sets the prebootRecoveryMessage property value. Defines a custom recovery message.
     *  @param string|null $value Value to set for the prebootRecoveryMessage property.
    */
    public function setPrebootRecoveryMessage(?string $value ): void {
        $this->prebootRecoveryMessage = $value;
    }

    /**
     * Sets the prebootRecoveryUrl property value. Defines a custom recovery URL.
     *  @param string|null $value Value to set for the prebootRecoveryUrl property.
    */
    public function setPrebootRecoveryUrl(?string $value ): void {
        $this->prebootRecoveryUrl = $value;
    }

    /**
     * Sets the recoveryOptions property value. Allows to recover BitLocker encrypted operating system drives in the absence of the required startup key information. This policy setting is applied when you turn on BitLocker.
     *  @param BitLockerRecoveryOptions|null $value Value to set for the recoveryOptions property.
    */
    public function setRecoveryOptions(?BitLockerRecoveryOptions $value ): void {
        $this->recoveryOptions = $value;
    }

    /**
     * Sets the startupAuthenticationBlockWithoutTpmChip property value. Indicates whether to allow BitLocker without a compatible TPM (requires a password or a startup key on a USB flash drive).
     *  @param bool|null $value Value to set for the startupAuthenticationBlockWithoutTpmChip property.
    */
    public function setStartupAuthenticationBlockWithoutTpmChip(?bool $value ): void {
        $this->startupAuthenticationBlockWithoutTpmChip = $value;
    }

    /**
     * Sets the startupAuthenticationRequired property value. Require additional authentication at startup.
     *  @param bool|null $value Value to set for the startupAuthenticationRequired property.
    */
    public function setStartupAuthenticationRequired(?bool $value ): void {
        $this->startupAuthenticationRequired = $value;
    }

    /**
     * Sets the startupAuthenticationTpmKeyUsage property value. Indicates if TPM startup key is allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
     *  @param ConfigurationUsage|null $value Value to set for the startupAuthenticationTpmKeyUsage property.
    */
    public function setStartupAuthenticationTpmKeyUsage(?ConfigurationUsage $value ): void {
        $this->startupAuthenticationTpmKeyUsage = $value;
    }

    /**
     * Sets the startupAuthenticationTpmPinAndKeyUsage property value. Indicates if TPM startup pin key and key are allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
     *  @param ConfigurationUsage|null $value Value to set for the startupAuthenticationTpmPinAndKeyUsage property.
    */
    public function setStartupAuthenticationTpmPinAndKeyUsage(?ConfigurationUsage $value ): void {
        $this->startupAuthenticationTpmPinAndKeyUsage = $value;
    }

    /**
     * Sets the startupAuthenticationTpmPinUsage property value. Indicates if TPM startup pin is allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
     *  @param ConfigurationUsage|null $value Value to set for the startupAuthenticationTpmPinUsage property.
    */
    public function setStartupAuthenticationTpmPinUsage(?ConfigurationUsage $value ): void {
        $this->startupAuthenticationTpmPinUsage = $value;
    }

    /**
     * Sets the startupAuthenticationTpmUsage property value. Indicates if TPM startup is allowed/required/disallowed. Possible values are: blocked, required, allowed, notConfigured.
     *  @param ConfigurationUsage|null $value Value to set for the startupAuthenticationTpmUsage property.
    */
    public function setStartupAuthenticationTpmUsage(?ConfigurationUsage $value ): void {
        $this->startupAuthenticationTpmUsage = $value;
    }

}
