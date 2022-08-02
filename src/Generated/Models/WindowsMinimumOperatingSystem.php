<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsMinimumOperatingSystem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var bool|null $v10_0 Windows version 10.0 or later.
    */
    private ?bool $v10_0 = null;
    
    /**
     * @var bool|null $v10_1607 Windows 10 1607 or later.
    */
    private ?bool $v10_1607 = null;
    
    /**
     * @var bool|null $v10_1703 Windows 10 1703 or later.
    */
    private ?bool $v10_1703 = null;
    
    /**
     * @var bool|null $v10_1709 Windows 10 1709 or later.
    */
    private ?bool $v10_1709 = null;
    
    /**
     * @var bool|null $v10_1803 Windows 10 1803 or later.
    */
    private ?bool $v10_1803 = null;
    
    /**
     * @var bool|null $v10_1809 Windows 10 1809 or later.
    */
    private ?bool $v10_1809 = null;
    
    /**
     * @var bool|null $v10_1903 Windows 10 1903 or later.
    */
    private ?bool $v10_1903 = null;
    
    /**
     * @var bool|null $v10_1909 Windows 10 1909 or later.
    */
    private ?bool $v10_1909 = null;
    
    /**
     * @var bool|null $v10_2004 Windows 10 2004 or later.
    */
    private ?bool $v10_2004 = null;
    
    /**
     * @var bool|null $v10_21H1 Windows 10 21H1 or later.
    */
    private ?bool $v10_21H1 = null;
    
    /**
     * @var bool|null $v10_2H20 Windows 10 2H20 or later.
    */
    private ?bool $v10_2H20 = null;
    
    /**
     * @var bool|null $v8_0 Windows version 8.0 or later.
    */
    private ?bool $v8_0 = null;
    
    /**
     * @var bool|null $v8_1 Windows version 8.1 or later.
    */
    private ?bool $v8_1 = null;
    
    /**
     * Instantiates a new windowsMinimumOperatingSystem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.windowsMinimumOperatingSystem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsMinimumOperatingSystem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsMinimumOperatingSystem {
        return new WindowsMinimumOperatingSystem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'v10_0' => function (ParseNode $n) use ($o) { $o->setV10_0($n->getBooleanValue()); },
            'v10_1607' => function (ParseNode $n) use ($o) { $o->setV10_1607($n->getBooleanValue()); },
            'v10_1703' => function (ParseNode $n) use ($o) { $o->setV10_1703($n->getBooleanValue()); },
            'v10_1709' => function (ParseNode $n) use ($o) { $o->setV10_1709($n->getBooleanValue()); },
            'v10_1803' => function (ParseNode $n) use ($o) { $o->setV10_1803($n->getBooleanValue()); },
            'v10_1809' => function (ParseNode $n) use ($o) { $o->setV10_1809($n->getBooleanValue()); },
            'v10_1903' => function (ParseNode $n) use ($o) { $o->setV10_1903($n->getBooleanValue()); },
            'v10_1909' => function (ParseNode $n) use ($o) { $o->setV10_1909($n->getBooleanValue()); },
            'v10_2004' => function (ParseNode $n) use ($o) { $o->setV10_2004($n->getBooleanValue()); },
            'v10_21H1' => function (ParseNode $n) use ($o) { $o->setV10_21H1($n->getBooleanValue()); },
            'v10_2H20' => function (ParseNode $n) use ($o) { $o->setV10_2H20($n->getBooleanValue()); },
            'v8_0' => function (ParseNode $n) use ($o) { $o->setV8_0($n->getBooleanValue()); },
            'v8_1' => function (ParseNode $n) use ($o) { $o->setV8_1($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the v10_0 property value. Windows version 10.0 or later.
     * @return bool|null
    */
    public function getV10_0(): ?bool {
        return $this->v10_0;
    }

    /**
     * Gets the v10_1607 property value. Windows 10 1607 or later.
     * @return bool|null
    */
    public function getV10_1607(): ?bool {
        return $this->v10_1607;
    }

    /**
     * Gets the v10_1703 property value. Windows 10 1703 or later.
     * @return bool|null
    */
    public function getV10_1703(): ?bool {
        return $this->v10_1703;
    }

    /**
     * Gets the v10_1709 property value. Windows 10 1709 or later.
     * @return bool|null
    */
    public function getV10_1709(): ?bool {
        return $this->v10_1709;
    }

    /**
     * Gets the v10_1803 property value. Windows 10 1803 or later.
     * @return bool|null
    */
    public function getV10_1803(): ?bool {
        return $this->v10_1803;
    }

    /**
     * Gets the v10_1809 property value. Windows 10 1809 or later.
     * @return bool|null
    */
    public function getV10_1809(): ?bool {
        return $this->v10_1809;
    }

    /**
     * Gets the v10_1903 property value. Windows 10 1903 or later.
     * @return bool|null
    */
    public function getV10_1903(): ?bool {
        return $this->v10_1903;
    }

    /**
     * Gets the v10_1909 property value. Windows 10 1909 or later.
     * @return bool|null
    */
    public function getV10_1909(): ?bool {
        return $this->v10_1909;
    }

    /**
     * Gets the v10_2004 property value. Windows 10 2004 or later.
     * @return bool|null
    */
    public function getV10_2004(): ?bool {
        return $this->v10_2004;
    }

    /**
     * Gets the v10_21H1 property value. Windows 10 21H1 or later.
     * @return bool|null
    */
    public function getV10_21H1(): ?bool {
        return $this->v10_21H1;
    }

    /**
     * Gets the v10_2H20 property value. Windows 10 2H20 or later.
     * @return bool|null
    */
    public function getV10_2H20(): ?bool {
        return $this->v10_2H20;
    }

    /**
     * Gets the v8_0 property value. Windows version 8.0 or later.
     * @return bool|null
    */
    public function getV8_0(): ?bool {
        return $this->v8_0;
    }

    /**
     * Gets the v8_1 property value. Windows version 8.1 or later.
     * @return bool|null
    */
    public function getV8_1(): ?bool {
        return $this->v8_1;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('v10_0', $this->v10_0);
        $writer->writeBooleanValue('v10_1607', $this->v10_1607);
        $writer->writeBooleanValue('v10_1703', $this->v10_1703);
        $writer->writeBooleanValue('v10_1709', $this->v10_1709);
        $writer->writeBooleanValue('v10_1803', $this->v10_1803);
        $writer->writeBooleanValue('v10_1809', $this->v10_1809);
        $writer->writeBooleanValue('v10_1903', $this->v10_1903);
        $writer->writeBooleanValue('v10_1909', $this->v10_1909);
        $writer->writeBooleanValue('v10_2004', $this->v10_2004);
        $writer->writeBooleanValue('v10_21H1', $this->v10_21H1);
        $writer->writeBooleanValue('v10_2H20', $this->v10_2H20);
        $writer->writeBooleanValue('v8_0', $this->v8_0);
        $writer->writeBooleanValue('v8_1', $this->v8_1);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the v10_0 property value. Windows version 10.0 or later.
     *  @param bool|null $value Value to set for the v10_0 property.
    */
    public function setV10_0(?bool $value ): void {
        $this->v10_0 = $value;
    }

    /**
     * Sets the v10_1607 property value. Windows 10 1607 or later.
     *  @param bool|null $value Value to set for the v10_1607 property.
    */
    public function setV10_1607(?bool $value ): void {
        $this->v10_1607 = $value;
    }

    /**
     * Sets the v10_1703 property value. Windows 10 1703 or later.
     *  @param bool|null $value Value to set for the v10_1703 property.
    */
    public function setV10_1703(?bool $value ): void {
        $this->v10_1703 = $value;
    }

    /**
     * Sets the v10_1709 property value. Windows 10 1709 or later.
     *  @param bool|null $value Value to set for the v10_1709 property.
    */
    public function setV10_1709(?bool $value ): void {
        $this->v10_1709 = $value;
    }

    /**
     * Sets the v10_1803 property value. Windows 10 1803 or later.
     *  @param bool|null $value Value to set for the v10_1803 property.
    */
    public function setV10_1803(?bool $value ): void {
        $this->v10_1803 = $value;
    }

    /**
     * Sets the v10_1809 property value. Windows 10 1809 or later.
     *  @param bool|null $value Value to set for the v10_1809 property.
    */
    public function setV10_1809(?bool $value ): void {
        $this->v10_1809 = $value;
    }

    /**
     * Sets the v10_1903 property value. Windows 10 1903 or later.
     *  @param bool|null $value Value to set for the v10_1903 property.
    */
    public function setV10_1903(?bool $value ): void {
        $this->v10_1903 = $value;
    }

    /**
     * Sets the v10_1909 property value. Windows 10 1909 or later.
     *  @param bool|null $value Value to set for the v10_1909 property.
    */
    public function setV10_1909(?bool $value ): void {
        $this->v10_1909 = $value;
    }

    /**
     * Sets the v10_2004 property value. Windows 10 2004 or later.
     *  @param bool|null $value Value to set for the v10_2004 property.
    */
    public function setV10_2004(?bool $value ): void {
        $this->v10_2004 = $value;
    }

    /**
     * Sets the v10_21H1 property value. Windows 10 21H1 or later.
     *  @param bool|null $value Value to set for the v10_21H1 property.
    */
    public function setV10_21H1(?bool $value ): void {
        $this->v10_21H1 = $value;
    }

    /**
     * Sets the v10_2H20 property value. Windows 10 2H20 or later.
     *  @param bool|null $value Value to set for the v10_2H20 property.
    */
    public function setV10_2H20(?bool $value ): void {
        $this->v10_2H20 = $value;
    }

    /**
     * Sets the v8_0 property value. Windows version 8.0 or later.
     *  @param bool|null $value Value to set for the v8_0 property.
    */
    public function setV8_0(?bool $value ): void {
        $this->v8_0 = $value;
    }

    /**
     * Sets the v8_1 property value. Windows version 8.1 or later.
     *  @param bool|null $value Value to set for the v8_1 property.
    */
    public function setV8_1(?bool $value ): void {
        $this->v8_1 = $value;
    }

}
