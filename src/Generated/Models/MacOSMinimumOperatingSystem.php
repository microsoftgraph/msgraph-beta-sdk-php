<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSMinimumOperatingSystem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $v10_10 Mac OS 10.10 or later.
    */
    private ?bool $v10_10 = null;
    
    /**
     * @var bool|null $v10_11 Mac OS 10.11 or later.
    */
    private ?bool $v10_11 = null;
    
    /**
     * @var bool|null $v10_12 Mac OS 10.12 or later.
    */
    private ?bool $v10_12 = null;
    
    /**
     * @var bool|null $v10_13 Mac OS 10.13 or later.
    */
    private ?bool $v10_13 = null;
    
    /**
     * @var bool|null $v10_14 Mac OS 10.14 or later.
    */
    private ?bool $v10_14 = null;
    
    /**
     * @var bool|null $v10_15 Mac OS 10.15 or later.
    */
    private ?bool $v10_15 = null;
    
    /**
     * @var bool|null $v10_7 Mac OS 10.7 or later.
    */
    private ?bool $v10_7 = null;
    
    /**
     * @var bool|null $v10_8 Mac OS 10.8 or later.
    */
    private ?bool $v10_8 = null;
    
    /**
     * @var bool|null $v10_9 Mac OS 10.9 or later.
    */
    private ?bool $v10_9 = null;
    
    /**
     * @var bool|null $v11_0 Mac OS 11.0 or later.
    */
    private ?bool $v11_0 = null;
    
    /**
     * @var bool|null $v12_0 Mac OS 12.0 or later.
    */
    private ?bool $v12_0 = null;
    
    /**
     * Instantiates a new macOSMinimumOperatingSystem and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSMinimumOperatingSystem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSMinimumOperatingSystem {
        return new MacOSMinimumOperatingSystem();
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
            'v10_10' => function (ParseNode $n) use ($o) { $o->setV10_10($n->getBooleanValue()); },
            'v10_11' => function (ParseNode $n) use ($o) { $o->setV10_11($n->getBooleanValue()); },
            'v10_12' => function (ParseNode $n) use ($o) { $o->setV10_12($n->getBooleanValue()); },
            'v10_13' => function (ParseNode $n) use ($o) { $o->setV10_13($n->getBooleanValue()); },
            'v10_14' => function (ParseNode $n) use ($o) { $o->setV10_14($n->getBooleanValue()); },
            'v10_15' => function (ParseNode $n) use ($o) { $o->setV10_15($n->getBooleanValue()); },
            'v10_7' => function (ParseNode $n) use ($o) { $o->setV10_7($n->getBooleanValue()); },
            'v10_8' => function (ParseNode $n) use ($o) { $o->setV10_8($n->getBooleanValue()); },
            'v10_9' => function (ParseNode $n) use ($o) { $o->setV10_9($n->getBooleanValue()); },
            'v11_0' => function (ParseNode $n) use ($o) { $o->setV11_0($n->getBooleanValue()); },
            'v12_0' => function (ParseNode $n) use ($o) { $o->setV12_0($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the v10_10 property value. Mac OS 10.10 or later.
     * @return bool|null
    */
    public function getV10_10(): ?bool {
        return $this->v10_10;
    }

    /**
     * Gets the v10_11 property value. Mac OS 10.11 or later.
     * @return bool|null
    */
    public function getV10_11(): ?bool {
        return $this->v10_11;
    }

    /**
     * Gets the v10_12 property value. Mac OS 10.12 or later.
     * @return bool|null
    */
    public function getV10_12(): ?bool {
        return $this->v10_12;
    }

    /**
     * Gets the v10_13 property value. Mac OS 10.13 or later.
     * @return bool|null
    */
    public function getV10_13(): ?bool {
        return $this->v10_13;
    }

    /**
     * Gets the v10_14 property value. Mac OS 10.14 or later.
     * @return bool|null
    */
    public function getV10_14(): ?bool {
        return $this->v10_14;
    }

    /**
     * Gets the v10_15 property value. Mac OS 10.15 or later.
     * @return bool|null
    */
    public function getV10_15(): ?bool {
        return $this->v10_15;
    }

    /**
     * Gets the v10_7 property value. Mac OS 10.7 or later.
     * @return bool|null
    */
    public function getV10_7(): ?bool {
        return $this->v10_7;
    }

    /**
     * Gets the v10_8 property value. Mac OS 10.8 or later.
     * @return bool|null
    */
    public function getV10_8(): ?bool {
        return $this->v10_8;
    }

    /**
     * Gets the v10_9 property value. Mac OS 10.9 or later.
     * @return bool|null
    */
    public function getV10_9(): ?bool {
        return $this->v10_9;
    }

    /**
     * Gets the v11_0 property value. Mac OS 11.0 or later.
     * @return bool|null
    */
    public function getV11_0(): ?bool {
        return $this->v11_0;
    }

    /**
     * Gets the v12_0 property value. Mac OS 12.0 or later.
     * @return bool|null
    */
    public function getV12_0(): ?bool {
        return $this->v12_0;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('v10_10', $this->v10_10);
        $writer->writeBooleanValue('v10_11', $this->v10_11);
        $writer->writeBooleanValue('v10_12', $this->v10_12);
        $writer->writeBooleanValue('v10_13', $this->v10_13);
        $writer->writeBooleanValue('v10_14', $this->v10_14);
        $writer->writeBooleanValue('v10_15', $this->v10_15);
        $writer->writeBooleanValue('v10_7', $this->v10_7);
        $writer->writeBooleanValue('v10_8', $this->v10_8);
        $writer->writeBooleanValue('v10_9', $this->v10_9);
        $writer->writeBooleanValue('v11_0', $this->v11_0);
        $writer->writeBooleanValue('v12_0', $this->v12_0);
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
     * Sets the v10_10 property value. Mac OS 10.10 or later.
     *  @param bool|null $value Value to set for the v10_10 property.
    */
    public function setV10_10(?bool $value ): void {
        $this->v10_10 = $value;
    }

    /**
     * Sets the v10_11 property value. Mac OS 10.11 or later.
     *  @param bool|null $value Value to set for the v10_11 property.
    */
    public function setV10_11(?bool $value ): void {
        $this->v10_11 = $value;
    }

    /**
     * Sets the v10_12 property value. Mac OS 10.12 or later.
     *  @param bool|null $value Value to set for the v10_12 property.
    */
    public function setV10_12(?bool $value ): void {
        $this->v10_12 = $value;
    }

    /**
     * Sets the v10_13 property value. Mac OS 10.13 or later.
     *  @param bool|null $value Value to set for the v10_13 property.
    */
    public function setV10_13(?bool $value ): void {
        $this->v10_13 = $value;
    }

    /**
     * Sets the v10_14 property value. Mac OS 10.14 or later.
     *  @param bool|null $value Value to set for the v10_14 property.
    */
    public function setV10_14(?bool $value ): void {
        $this->v10_14 = $value;
    }

    /**
     * Sets the v10_15 property value. Mac OS 10.15 or later.
     *  @param bool|null $value Value to set for the v10_15 property.
    */
    public function setV10_15(?bool $value ): void {
        $this->v10_15 = $value;
    }

    /**
     * Sets the v10_7 property value. Mac OS 10.7 or later.
     *  @param bool|null $value Value to set for the v10_7 property.
    */
    public function setV10_7(?bool $value ): void {
        $this->v10_7 = $value;
    }

    /**
     * Sets the v10_8 property value. Mac OS 10.8 or later.
     *  @param bool|null $value Value to set for the v10_8 property.
    */
    public function setV10_8(?bool $value ): void {
        $this->v10_8 = $value;
    }

    /**
     * Sets the v10_9 property value. Mac OS 10.9 or later.
     *  @param bool|null $value Value to set for the v10_9 property.
    */
    public function setV10_9(?bool $value ): void {
        $this->v10_9 = $value;
    }

    /**
     * Sets the v11_0 property value. Mac OS 11.0 or later.
     *  @param bool|null $value Value to set for the v11_0 property.
    */
    public function setV11_0(?bool $value ): void {
        $this->v11_0 = $value;
    }

    /**
     * Sets the v12_0 property value. Mac OS 12.0 or later.
     *  @param bool|null $value Value to set for the v12_0 property.
    */
    public function setV12_0(?bool $value ): void {
        $this->v12_0 = $value;
    }

}
