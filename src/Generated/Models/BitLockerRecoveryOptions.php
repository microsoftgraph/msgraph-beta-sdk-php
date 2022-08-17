<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BitLockerRecoveryOptions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $blockDataRecoveryAgent Indicates whether to block certificate-based data recovery agent.
    */
    private ?bool $blockDataRecoveryAgent = null;
    
    /**
     * @var bool|null $enableBitLockerAfterRecoveryInformationToStore Indicates whether or not to enable BitLocker until recovery information is stored in AD DS.
    */
    private ?bool $enableBitLockerAfterRecoveryInformationToStore = null;
    
    /**
     * @var bool|null $enableRecoveryInformationSaveToStore Indicates whether or not to allow BitLocker recovery information to store in AD DS.
    */
    private ?bool $enableRecoveryInformationSaveToStore = null;
    
    /**
     * @var bool|null $hideRecoveryOptions Indicates whether or not to allow showing recovery options in BitLocker Setup Wizard for fixed or system disk.
    */
    private ?bool $hideRecoveryOptions = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var BitLockerRecoveryInformationType|null $recoveryInformationToStore BitLockerRecoveryInformationType types
    */
    private ?BitLockerRecoveryInformationType $recoveryInformationToStore = null;
    
    /**
     * @var ConfigurationUsage|null $recoveryKeyUsage Possible values of the ConfigurationUsage list.
    */
    private ?ConfigurationUsage $recoveryKeyUsage = null;
    
    /**
     * @var ConfigurationUsage|null $recoveryPasswordUsage Possible values of the ConfigurationUsage list.
    */
    private ?ConfigurationUsage $recoveryPasswordUsage = null;
    
    /**
     * Instantiates a new bitLockerRecoveryOptions and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.bitLockerRecoveryOptions');
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the blockDataRecoveryAgent property value. Indicates whether to block certificate-based data recovery agent.
     * @return bool|null
    */
    public function getBlockDataRecoveryAgent(): ?bool {
        return $this->blockDataRecoveryAgent;
    }

    /**
     * Gets the enableBitLockerAfterRecoveryInformationToStore property value. Indicates whether or not to enable BitLocker until recovery information is stored in AD DS.
     * @return bool|null
    */
    public function getEnableBitLockerAfterRecoveryInformationToStore(): ?bool {
        return $this->enableBitLockerAfterRecoveryInformationToStore;
    }

    /**
     * Gets the enableRecoveryInformationSaveToStore property value. Indicates whether or not to allow BitLocker recovery information to store in AD DS.
     * @return bool|null
    */
    public function getEnableRecoveryInformationSaveToStore(): ?bool {
        return $this->enableRecoveryInformationSaveToStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'blockDataRecoveryAgent' => function (ParseNode $n) use ($o) { $o->setBlockDataRecoveryAgent($n->getBooleanValue()); },
            'enableBitLockerAfterRecoveryInformationToStore' => function (ParseNode $n) use ($o) { $o->setEnableBitLockerAfterRecoveryInformationToStore($n->getBooleanValue()); },
            'enableRecoveryInformationSaveToStore' => function (ParseNode $n) use ($o) { $o->setEnableRecoveryInformationSaveToStore($n->getBooleanValue()); },
            'hideRecoveryOptions' => function (ParseNode $n) use ($o) { $o->setHideRecoveryOptions($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'recoveryInformationToStore' => function (ParseNode $n) use ($o) { $o->setRecoveryInformationToStore($n->getEnumValue(BitLockerRecoveryInformationType::class)); },
            'recoveryKeyUsage' => function (ParseNode $n) use ($o) { $o->setRecoveryKeyUsage($n->getEnumValue(ConfigurationUsage::class)); },
            'recoveryPasswordUsage' => function (ParseNode $n) use ($o) { $o->setRecoveryPasswordUsage($n->getEnumValue(ConfigurationUsage::class)); },
        ];
    }

    /**
     * Gets the hideRecoveryOptions property value. Indicates whether or not to allow showing recovery options in BitLocker Setup Wizard for fixed or system disk.
     * @return bool|null
    */
    public function getHideRecoveryOptions(): ?bool {
        return $this->hideRecoveryOptions;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the recoveryInformationToStore property value. BitLockerRecoveryInformationType types
     * @return BitLockerRecoveryInformationType|null
    */
    public function getRecoveryInformationToStore(): ?BitLockerRecoveryInformationType {
        return $this->recoveryInformationToStore;
    }

    /**
     * Gets the recoveryKeyUsage property value. Possible values of the ConfigurationUsage list.
     * @return ConfigurationUsage|null
    */
    public function getRecoveryKeyUsage(): ?ConfigurationUsage {
        return $this->recoveryKeyUsage;
    }

    /**
     * Gets the recoveryPasswordUsage property value. Possible values of the ConfigurationUsage list.
     * @return ConfigurationUsage|null
    */
    public function getRecoveryPasswordUsage(): ?ConfigurationUsage {
        return $this->recoveryPasswordUsage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('blockDataRecoveryAgent', $this->blockDataRecoveryAgent);
        $writer->writeBooleanValue('enableBitLockerAfterRecoveryInformationToStore', $this->enableBitLockerAfterRecoveryInformationToStore);
        $writer->writeBooleanValue('enableRecoveryInformationSaveToStore', $this->enableRecoveryInformationSaveToStore);
        $writer->writeBooleanValue('hideRecoveryOptions', $this->hideRecoveryOptions);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('recoveryInformationToStore', $this->recoveryInformationToStore);
        $writer->writeEnumValue('recoveryKeyUsage', $this->recoveryKeyUsage);
        $writer->writeEnumValue('recoveryPasswordUsage', $this->recoveryPasswordUsage);
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
     * Sets the blockDataRecoveryAgent property value. Indicates whether to block certificate-based data recovery agent.
     *  @param bool|null $value Value to set for the blockDataRecoveryAgent property.
    */
    public function setBlockDataRecoveryAgent(?bool $value ): void {
        $this->blockDataRecoveryAgent = $value;
    }

    /**
     * Sets the enableBitLockerAfterRecoveryInformationToStore property value. Indicates whether or not to enable BitLocker until recovery information is stored in AD DS.
     *  @param bool|null $value Value to set for the enableBitLockerAfterRecoveryInformationToStore property.
    */
    public function setEnableBitLockerAfterRecoveryInformationToStore(?bool $value ): void {
        $this->enableBitLockerAfterRecoveryInformationToStore = $value;
    }

    /**
     * Sets the enableRecoveryInformationSaveToStore property value. Indicates whether or not to allow BitLocker recovery information to store in AD DS.
     *  @param bool|null $value Value to set for the enableRecoveryInformationSaveToStore property.
    */
    public function setEnableRecoveryInformationSaveToStore(?bool $value ): void {
        $this->enableRecoveryInformationSaveToStore = $value;
    }

    /**
     * Sets the hideRecoveryOptions property value. Indicates whether or not to allow showing recovery options in BitLocker Setup Wizard for fixed or system disk.
     *  @param bool|null $value Value to set for the hideRecoveryOptions property.
    */
    public function setHideRecoveryOptions(?bool $value ): void {
        $this->hideRecoveryOptions = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the recoveryInformationToStore property value. BitLockerRecoveryInformationType types
     *  @param BitLockerRecoveryInformationType|null $value Value to set for the recoveryInformationToStore property.
    */
    public function setRecoveryInformationToStore(?BitLockerRecoveryInformationType $value ): void {
        $this->recoveryInformationToStore = $value;
    }

    /**
     * Sets the recoveryKeyUsage property value. Possible values of the ConfigurationUsage list.
     *  @param ConfigurationUsage|null $value Value to set for the recoveryKeyUsage property.
    */
    public function setRecoveryKeyUsage(?ConfigurationUsage $value ): void {
        $this->recoveryKeyUsage = $value;
    }

    /**
     * Sets the recoveryPasswordUsage property value. Possible values of the ConfigurationUsage list.
     *  @param ConfigurationUsage|null $value Value to set for the recoveryPasswordUsage property.
    */
    public function setRecoveryPasswordUsage(?ConfigurationUsage $value ): void {
        $this->recoveryPasswordUsage = $value;
    }

}
