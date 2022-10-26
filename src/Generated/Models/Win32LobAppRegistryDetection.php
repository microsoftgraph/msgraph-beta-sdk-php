<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppRegistryDetection extends Win32LobAppDetection implements Parsable 
{
    /**
     * @var bool|null $check32BitOn64System A value indicating whether this registry path is for checking 32-bit app on 64-bit system
    */
    private ?bool $check32BitOn64System = null;
    
    /**
     * @var Win32LobAppRegistryDetectionType|null $detectionType Contains all supported registry data detection type.
    */
    private ?Win32LobAppRegistryDetectionType $detectionType = null;
    
    /**
     * @var string|null $detectionValue The registry detection value
    */
    private ?string $detectionValue = null;
    
    /**
     * @var string|null $keyPath The registry key path to detect Win32 Line of Business (LoB) app
    */
    private ?string $keyPath = null;
    
    /**
     * @var Win32LobAppDetectionOperator|null $operator Contains properties for detection operator.
    */
    private ?Win32LobAppDetectionOperator $operator = null;
    
    /**
     * @var string|null $valueName The registry value name
    */
    private ?string $valueName = null;
    
    /**
     * Instantiates a new Win32LobAppRegistryDetection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32LobAppRegistryDetection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppRegistryDetection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppRegistryDetection {
        return new Win32LobAppRegistryDetection();
    }

    /**
     * Gets the check32BitOn64System property value. A value indicating whether this registry path is for checking 32-bit app on 64-bit system
     * @return bool|null
    */
    public function getCheck32BitOn64System(): ?bool {
        return $this->check32BitOn64System;
    }

    /**
     * Gets the detectionType property value. Contains all supported registry data detection type.
     * @return Win32LobAppRegistryDetectionType|null
    */
    public function getDetectionType(): ?Win32LobAppRegistryDetectionType {
        return $this->detectionType;
    }

    /**
     * Gets the detectionValue property value. The registry detection value
     * @return string|null
    */
    public function getDetectionValue(): ?string {
        return $this->detectionValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'check32BitOn64System' => fn(ParseNode $n) => $o->setCheck32BitOn64System($n->getBooleanValue()),
            'detectionType' => fn(ParseNode $n) => $o->setDetectionType($n->getEnumValue(Win32LobAppRegistryDetectionType::class)),
            'detectionValue' => fn(ParseNode $n) => $o->setDetectionValue($n->getStringValue()),
            'keyPath' => fn(ParseNode $n) => $o->setKeyPath($n->getStringValue()),
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getEnumValue(Win32LobAppDetectionOperator::class)),
            'valueName' => fn(ParseNode $n) => $o->setValueName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the keyPath property value. The registry key path to detect Win32 Line of Business (LoB) app
     * @return string|null
    */
    public function getKeyPath(): ?string {
        return $this->keyPath;
    }

    /**
     * Gets the operator property value. Contains properties for detection operator.
     * @return Win32LobAppDetectionOperator|null
    */
    public function getOperator(): ?Win32LobAppDetectionOperator {
        return $this->operator;
    }

    /**
     * Gets the valueName property value. The registry value name
     * @return string|null
    */
    public function getValueName(): ?string {
        return $this->valueName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('check32BitOn64System', $this->check32BitOn64System);
        $writer->writeEnumValue('detectionType', $this->detectionType);
        $writer->writeStringValue('detectionValue', $this->detectionValue);
        $writer->writeStringValue('keyPath', $this->keyPath);
        $writer->writeEnumValue('operator', $this->operator);
        $writer->writeStringValue('valueName', $this->valueName);
    }

    /**
     * Sets the check32BitOn64System property value. A value indicating whether this registry path is for checking 32-bit app on 64-bit system
     *  @param bool|null $value Value to set for the check32BitOn64System property.
    */
    public function setCheck32BitOn64System(?bool $value ): void {
        $this->check32BitOn64System = $value;
    }

    /**
     * Sets the detectionType property value. Contains all supported registry data detection type.
     *  @param Win32LobAppRegistryDetectionType|null $value Value to set for the detectionType property.
    */
    public function setDetectionType(?Win32LobAppRegistryDetectionType $value ): void {
        $this->detectionType = $value;
    }

    /**
     * Sets the detectionValue property value. The registry detection value
     *  @param string|null $value Value to set for the detectionValue property.
    */
    public function setDetectionValue(?string $value ): void {
        $this->detectionValue = $value;
    }

    /**
     * Sets the keyPath property value. The registry key path to detect Win32 Line of Business (LoB) app
     *  @param string|null $value Value to set for the keyPath property.
    */
    public function setKeyPath(?string $value ): void {
        $this->keyPath = $value;
    }

    /**
     * Sets the operator property value. Contains properties for detection operator.
     *  @param Win32LobAppDetectionOperator|null $value Value to set for the operator property.
    */
    public function setOperator(?Win32LobAppDetectionOperator $value ): void {
        $this->operator = $value;
    }

    /**
     * Sets the valueName property value. The registry value name
     *  @param string|null $value Value to set for the valueName property.
    */
    public function setValueName(?string $value ): void {
        $this->valueName = $value;
    }

}
