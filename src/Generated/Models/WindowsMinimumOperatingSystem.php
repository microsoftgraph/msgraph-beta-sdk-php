<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WindowsMinimumOperatingSystem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new windowsMinimumOperatingSystem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'v10_0' => fn(ParseNode $n) => $o->setV10_0($n->getBooleanValue()),
            'v10_1607' => fn(ParseNode $n) => $o->setV10_1607($n->getBooleanValue()),
            'v10_1703' => fn(ParseNode $n) => $o->setV10_1703($n->getBooleanValue()),
            'v10_1709' => fn(ParseNode $n) => $o->setV10_1709($n->getBooleanValue()),
            'v10_1803' => fn(ParseNode $n) => $o->setV10_1803($n->getBooleanValue()),
            'v10_1809' => fn(ParseNode $n) => $o->setV10_1809($n->getBooleanValue()),
            'v10_1903' => fn(ParseNode $n) => $o->setV10_1903($n->getBooleanValue()),
            'v10_1909' => fn(ParseNode $n) => $o->setV10_1909($n->getBooleanValue()),
            'v10_2004' => fn(ParseNode $n) => $o->setV10_2004($n->getBooleanValue()),
            'v10_21H1' => fn(ParseNode $n) => $o->setV10_21H1($n->getBooleanValue()),
            'v10_2H20' => fn(ParseNode $n) => $o->setV10_2H20($n->getBooleanValue()),
            'v8_0' => fn(ParseNode $n) => $o->setV8_0($n->getBooleanValue()),
            'v8_1' => fn(ParseNode $n) => $o->setV8_1($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the v10_0 property value. Windows version 10.0 or later.
     * @return bool|null
    */
    public function getV10_0(): ?bool {
        return $this->getBackingStore()->get('v10_0');
    }

    /**
     * Gets the v10_1607 property value. Windows 10 1607 or later.
     * @return bool|null
    */
    public function getV10_1607(): ?bool {
        return $this->getBackingStore()->get('v10_1607');
    }

    /**
     * Gets the v10_1703 property value. Windows 10 1703 or later.
     * @return bool|null
    */
    public function getV10_1703(): ?bool {
        return $this->getBackingStore()->get('v10_1703');
    }

    /**
     * Gets the v10_1709 property value. Windows 10 1709 or later.
     * @return bool|null
    */
    public function getV10_1709(): ?bool {
        return $this->getBackingStore()->get('v10_1709');
    }

    /**
     * Gets the v10_1803 property value. Windows 10 1803 or later.
     * @return bool|null
    */
    public function getV10_1803(): ?bool {
        return $this->getBackingStore()->get('v10_1803');
    }

    /**
     * Gets the v10_1809 property value. Windows 10 1809 or later.
     * @return bool|null
    */
    public function getV10_1809(): ?bool {
        return $this->getBackingStore()->get('v10_1809');
    }

    /**
     * Gets the v10_1903 property value. Windows 10 1903 or later.
     * @return bool|null
    */
    public function getV10_1903(): ?bool {
        return $this->getBackingStore()->get('v10_1903');
    }

    /**
     * Gets the v10_1909 property value. Windows 10 1909 or later.
     * @return bool|null
    */
    public function getV10_1909(): ?bool {
        return $this->getBackingStore()->get('v10_1909');
    }

    /**
     * Gets the v10_2004 property value. Windows 10 2004 or later.
     * @return bool|null
    */
    public function getV10_2004(): ?bool {
        return $this->getBackingStore()->get('v10_2004');
    }

    /**
     * Gets the v10_21H1 property value. Windows 10 21H1 or later.
     * @return bool|null
    */
    public function getV10_21H1(): ?bool {
        return $this->getBackingStore()->get('v10_21H1');
    }

    /**
     * Gets the v10_2H20 property value. Windows 10 2H20 or later.
     * @return bool|null
    */
    public function getV10_2H20(): ?bool {
        return $this->getBackingStore()->get('v10_2H20');
    }

    /**
     * Gets the v8_0 property value. Windows version 8.0 or later.
     * @return bool|null
    */
    public function getV8_0(): ?bool {
        return $this->getBackingStore()->get('v8_0');
    }

    /**
     * Gets the v8_1 property value. Windows version 8.1 or later.
     * @return bool|null
    */
    public function getV8_1(): ?bool {
        return $this->getBackingStore()->get('v8_1');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('v10_0', $this->getV10_0());
        $writer->writeBooleanValue('v10_1607', $this->getV10_1607());
        $writer->writeBooleanValue('v10_1703', $this->getV10_1703());
        $writer->writeBooleanValue('v10_1709', $this->getV10_1709());
        $writer->writeBooleanValue('v10_1803', $this->getV10_1803());
        $writer->writeBooleanValue('v10_1809', $this->getV10_1809());
        $writer->writeBooleanValue('v10_1903', $this->getV10_1903());
        $writer->writeBooleanValue('v10_1909', $this->getV10_1909());
        $writer->writeBooleanValue('v10_2004', $this->getV10_2004());
        $writer->writeBooleanValue('v10_21H1', $this->getV10_21H1());
        $writer->writeBooleanValue('v10_2H20', $this->getV10_2H20());
        $writer->writeBooleanValue('v8_0', $this->getV8_0());
        $writer->writeBooleanValue('v8_1', $this->getV8_1());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the v10_0 property value. Windows version 10.0 or later.
     *  @param bool|null $value Value to set for the v10_0 property.
    */
    public function setV10_0(?bool $value): void {
        $this->getBackingStore()->set('v10_0', $value);
    }

    /**
     * Sets the v10_1607 property value. Windows 10 1607 or later.
     *  @param bool|null $value Value to set for the v10_1607 property.
    */
    public function setV10_1607(?bool $value): void {
        $this->getBackingStore()->set('v10_1607', $value);
    }

    /**
     * Sets the v10_1703 property value. Windows 10 1703 or later.
     *  @param bool|null $value Value to set for the v10_1703 property.
    */
    public function setV10_1703(?bool $value): void {
        $this->getBackingStore()->set('v10_1703', $value);
    }

    /**
     * Sets the v10_1709 property value. Windows 10 1709 or later.
     *  @param bool|null $value Value to set for the v10_1709 property.
    */
    public function setV10_1709(?bool $value): void {
        $this->getBackingStore()->set('v10_1709', $value);
    }

    /**
     * Sets the v10_1803 property value. Windows 10 1803 or later.
     *  @param bool|null $value Value to set for the v10_1803 property.
    */
    public function setV10_1803(?bool $value): void {
        $this->getBackingStore()->set('v10_1803', $value);
    }

    /**
     * Sets the v10_1809 property value. Windows 10 1809 or later.
     *  @param bool|null $value Value to set for the v10_1809 property.
    */
    public function setV10_1809(?bool $value): void {
        $this->getBackingStore()->set('v10_1809', $value);
    }

    /**
     * Sets the v10_1903 property value. Windows 10 1903 or later.
     *  @param bool|null $value Value to set for the v10_1903 property.
    */
    public function setV10_1903(?bool $value): void {
        $this->getBackingStore()->set('v10_1903', $value);
    }

    /**
     * Sets the v10_1909 property value. Windows 10 1909 or later.
     *  @param bool|null $value Value to set for the v10_1909 property.
    */
    public function setV10_1909(?bool $value): void {
        $this->getBackingStore()->set('v10_1909', $value);
    }

    /**
     * Sets the v10_2004 property value. Windows 10 2004 or later.
     *  @param bool|null $value Value to set for the v10_2004 property.
    */
    public function setV10_2004(?bool $value): void {
        $this->getBackingStore()->set('v10_2004', $value);
    }

    /**
     * Sets the v10_21H1 property value. Windows 10 21H1 or later.
     *  @param bool|null $value Value to set for the v10_21H1 property.
    */
    public function setV10_21H1(?bool $value): void {
        $this->getBackingStore()->set('v10_21H1', $value);
    }

    /**
     * Sets the v10_2H20 property value. Windows 10 2H20 or later.
     *  @param bool|null $value Value to set for the v10_2H20 property.
    */
    public function setV10_2H20(?bool $value): void {
        $this->getBackingStore()->set('v10_2H20', $value);
    }

    /**
     * Sets the v8_0 property value. Windows version 8.0 or later.
     *  @param bool|null $value Value to set for the v8_0 property.
    */
    public function setV8_0(?bool $value): void {
        $this->getBackingStore()->set('v8_0', $value);
    }

    /**
     * Sets the v8_1 property value. Windows version 8.1 or later.
     *  @param bool|null $value Value to set for the v8_1 property.
    */
    public function setV8_1(?bool $value): void {
        $this->getBackingStore()->set('v8_1', $value);
    }

}
