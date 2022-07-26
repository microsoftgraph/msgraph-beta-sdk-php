<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RegistryValueEvidence extends AlertEvidence implements Parsable 
{
    /**
     * @var string|null $registryHive The registryHive property
    */
    private ?string $registryHive = null;
    
    /**
     * @var string|null $registryKey The registryKey property
    */
    private ?string $registryKey = null;
    
    /**
     * @var string|null $registryValue The registryValue property
    */
    private ?string $registryValue = null;
    
    /**
     * @var string|null $registryValueName The registryValueName property
    */
    private ?string $registryValueName = null;
    
    /**
     * @var string|null $registryValueType The registryValueType property
    */
    private ?string $registryValueType = null;
    
    /**
     * Instantiates a new RegistryValueEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.registryValueEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegistryValueEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RegistryValueEvidence {
        return new RegistryValueEvidence();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'registryHive' => function (ParseNode $n) use ($o) { $o->setRegistryHive($n->getStringValue()); },
            'registryKey' => function (ParseNode $n) use ($o) { $o->setRegistryKey($n->getStringValue()); },
            'registryValue' => function (ParseNode $n) use ($o) { $o->setRegistryValue($n->getStringValue()); },
            'registryValueName' => function (ParseNode $n) use ($o) { $o->setRegistryValueName($n->getStringValue()); },
            'registryValueType' => function (ParseNode $n) use ($o) { $o->setRegistryValueType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the registryHive property value. The registryHive property
     * @return string|null
    */
    public function getRegistryHive(): ?string {
        return $this->registryHive;
    }

    /**
     * Gets the registryKey property value. The registryKey property
     * @return string|null
    */
    public function getRegistryKey(): ?string {
        return $this->registryKey;
    }

    /**
     * Gets the registryValue property value. The registryValue property
     * @return string|null
    */
    public function getRegistryValue(): ?string {
        return $this->registryValue;
    }

    /**
     * Gets the registryValueName property value. The registryValueName property
     * @return string|null
    */
    public function getRegistryValueName(): ?string {
        return $this->registryValueName;
    }

    /**
     * Gets the registryValueType property value. The registryValueType property
     * @return string|null
    */
    public function getRegistryValueType(): ?string {
        return $this->registryValueType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('registryHive', $this->registryHive);
        $writer->writeStringValue('registryKey', $this->registryKey);
        $writer->writeStringValue('registryValue', $this->registryValue);
        $writer->writeStringValue('registryValueName', $this->registryValueName);
        $writer->writeStringValue('registryValueType', $this->registryValueType);
    }

    /**
     * Sets the registryHive property value. The registryHive property
     *  @param string|null $value Value to set for the registryHive property.
    */
    public function setRegistryHive(?string $value ): void {
        $this->registryHive = $value;
    }

    /**
     * Sets the registryKey property value. The registryKey property
     *  @param string|null $value Value to set for the registryKey property.
    */
    public function setRegistryKey(?string $value ): void {
        $this->registryKey = $value;
    }

    /**
     * Sets the registryValue property value. The registryValue property
     *  @param string|null $value Value to set for the registryValue property.
    */
    public function setRegistryValue(?string $value ): void {
        $this->registryValue = $value;
    }

    /**
     * Sets the registryValueName property value. The registryValueName property
     *  @param string|null $value Value to set for the registryValueName property.
    */
    public function setRegistryValueName(?string $value ): void {
        $this->registryValueName = $value;
    }

    /**
     * Sets the registryValueType property value. The registryValueType property
     *  @param string|null $value Value to set for the registryValueType property.
    */
    public function setRegistryValueType(?string $value ): void {
        $this->registryValueType = $value;
    }

}
