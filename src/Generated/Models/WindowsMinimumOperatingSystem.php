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
 * The minimum operating system required for a Windows mobile app.
*/
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
            'v10_0' => fn(ParseNode $n) => $o->setV100($n->getBooleanValue()),
            'v10_1607' => fn(ParseNode $n) => $o->setV101607($n->getBooleanValue()),
            'v10_1703' => fn(ParseNode $n) => $o->setV101703($n->getBooleanValue()),
            'v10_1709' => fn(ParseNode $n) => $o->setV101709($n->getBooleanValue()),
            'v10_1803' => fn(ParseNode $n) => $o->setV101803($n->getBooleanValue()),
            'v10_1809' => fn(ParseNode $n) => $o->setV101809($n->getBooleanValue()),
            'v10_1903' => fn(ParseNode $n) => $o->setV101903($n->getBooleanValue()),
            'v10_1909' => fn(ParseNode $n) => $o->setV101909($n->getBooleanValue()),
            'v10_2004' => fn(ParseNode $n) => $o->setV102004($n->getBooleanValue()),
            'v10_21H1' => fn(ParseNode $n) => $o->setV1021H1($n->getBooleanValue()),
            'v10_2H20' => fn(ParseNode $n) => $o->setV102H20($n->getBooleanValue()),
            'v8_0' => fn(ParseNode $n) => $o->setV80($n->getBooleanValue()),
            'v8_1' => fn(ParseNode $n) => $o->setV81($n->getBooleanValue()),
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
     * Gets the v10_0 property value. Windows version 10.0 or later.
     * @return bool|null
    */
    public function getV100(): ?bool {
        $val = $this->getBackingStore()->get('v10_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_0'");
    }

    /**
     * Gets the v10_1607 property value. Windows 10 1607 or later.
     * @return bool|null
    */
    public function getV101607(): ?bool {
        $val = $this->getBackingStore()->get('v10_1607');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_1607'");
    }

    /**
     * Gets the v10_1703 property value. Windows 10 1703 or later.
     * @return bool|null
    */
    public function getV101703(): ?bool {
        $val = $this->getBackingStore()->get('v10_1703');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_1703'");
    }

    /**
     * Gets the v10_1709 property value. Windows 10 1709 or later.
     * @return bool|null
    */
    public function getV101709(): ?bool {
        $val = $this->getBackingStore()->get('v10_1709');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_1709'");
    }

    /**
     * Gets the v10_1803 property value. Windows 10 1803 or later.
     * @return bool|null
    */
    public function getV101803(): ?bool {
        $val = $this->getBackingStore()->get('v10_1803');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_1803'");
    }

    /**
     * Gets the v10_1809 property value. Windows 10 1809 or later.
     * @return bool|null
    */
    public function getV101809(): ?bool {
        $val = $this->getBackingStore()->get('v10_1809');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_1809'");
    }

    /**
     * Gets the v10_1903 property value. Windows 10 1903 or later.
     * @return bool|null
    */
    public function getV101903(): ?bool {
        $val = $this->getBackingStore()->get('v10_1903');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_1903'");
    }

    /**
     * Gets the v10_1909 property value. Windows 10 1909 or later.
     * @return bool|null
    */
    public function getV101909(): ?bool {
        $val = $this->getBackingStore()->get('v10_1909');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_1909'");
    }

    /**
     * Gets the v10_2004 property value. Windows 10 2004 or later.
     * @return bool|null
    */
    public function getV102004(): ?bool {
        $val = $this->getBackingStore()->get('v10_2004');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_2004'");
    }

    /**
     * Gets the v10_21H1 property value. Windows 10 21H1 or later.
     * @return bool|null
    */
    public function getV1021H1(): ?bool {
        $val = $this->getBackingStore()->get('v10_21H1');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_21H1'");
    }

    /**
     * Gets the v10_2H20 property value. Windows 10 2H20 or later.
     * @return bool|null
    */
    public function getV102H20(): ?bool {
        $val = $this->getBackingStore()->get('v10_2H20');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v10_2H20'");
    }

    /**
     * Gets the v8_0 property value. Windows version 8.0 or later.
     * @return bool|null
    */
    public function getV80(): ?bool {
        $val = $this->getBackingStore()->get('v8_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v8_0'");
    }

    /**
     * Gets the v8_1 property value. Windows version 8.1 or later.
     * @return bool|null
    */
    public function getV81(): ?bool {
        $val = $this->getBackingStore()->get('v8_1');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v8_1'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('v10_0', $this->getV100());
        $writer->writeBooleanValue('v10_1607', $this->getV101607());
        $writer->writeBooleanValue('v10_1703', $this->getV101703());
        $writer->writeBooleanValue('v10_1709', $this->getV101709());
        $writer->writeBooleanValue('v10_1803', $this->getV101803());
        $writer->writeBooleanValue('v10_1809', $this->getV101809());
        $writer->writeBooleanValue('v10_1903', $this->getV101903());
        $writer->writeBooleanValue('v10_1909', $this->getV101909());
        $writer->writeBooleanValue('v10_2004', $this->getV102004());
        $writer->writeBooleanValue('v10_21H1', $this->getV1021H1());
        $writer->writeBooleanValue('v10_2H20', $this->getV102H20());
        $writer->writeBooleanValue('v8_0', $this->getV80());
        $writer->writeBooleanValue('v8_1', $this->getV81());
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
     * Sets the v10_0 property value. Windows version 10.0 or later.
     * @param bool|null $value Value to set for the v10_0 property.
    */
    public function setV100(?bool $value): void {
        $this->getBackingStore()->set('v10_0', $value);
    }

    /**
     * Sets the v10_1607 property value. Windows 10 1607 or later.
     * @param bool|null $value Value to set for the v10_1607 property.
    */
    public function setV101607(?bool $value): void {
        $this->getBackingStore()->set('v10_1607', $value);
    }

    /**
     * Sets the v10_1703 property value. Windows 10 1703 or later.
     * @param bool|null $value Value to set for the v10_1703 property.
    */
    public function setV101703(?bool $value): void {
        $this->getBackingStore()->set('v10_1703', $value);
    }

    /**
     * Sets the v10_1709 property value. Windows 10 1709 or later.
     * @param bool|null $value Value to set for the v10_1709 property.
    */
    public function setV101709(?bool $value): void {
        $this->getBackingStore()->set('v10_1709', $value);
    }

    /**
     * Sets the v10_1803 property value. Windows 10 1803 or later.
     * @param bool|null $value Value to set for the v10_1803 property.
    */
    public function setV101803(?bool $value): void {
        $this->getBackingStore()->set('v10_1803', $value);
    }

    /**
     * Sets the v10_1809 property value. Windows 10 1809 or later.
     * @param bool|null $value Value to set for the v10_1809 property.
    */
    public function setV101809(?bool $value): void {
        $this->getBackingStore()->set('v10_1809', $value);
    }

    /**
     * Sets the v10_1903 property value. Windows 10 1903 or later.
     * @param bool|null $value Value to set for the v10_1903 property.
    */
    public function setV101903(?bool $value): void {
        $this->getBackingStore()->set('v10_1903', $value);
    }

    /**
     * Sets the v10_1909 property value. Windows 10 1909 or later.
     * @param bool|null $value Value to set for the v10_1909 property.
    */
    public function setV101909(?bool $value): void {
        $this->getBackingStore()->set('v10_1909', $value);
    }

    /**
     * Sets the v10_2004 property value. Windows 10 2004 or later.
     * @param bool|null $value Value to set for the v10_2004 property.
    */
    public function setV102004(?bool $value): void {
        $this->getBackingStore()->set('v10_2004', $value);
    }

    /**
     * Sets the v10_21H1 property value. Windows 10 21H1 or later.
     * @param bool|null $value Value to set for the v10_21H1 property.
    */
    public function setV1021H1(?bool $value): void {
        $this->getBackingStore()->set('v10_21H1', $value);
    }

    /**
     * Sets the v10_2H20 property value. Windows 10 2H20 or later.
     * @param bool|null $value Value to set for the v10_2H20 property.
    */
    public function setV102H20(?bool $value): void {
        $this->getBackingStore()->set('v10_2H20', $value);
    }

    /**
     * Sets the v8_0 property value. Windows version 8.0 or later.
     * @param bool|null $value Value to set for the v8_0 property.
    */
    public function setV80(?bool $value): void {
        $this->getBackingStore()->set('v8_0', $value);
    }

    /**
     * Sets the v8_1 property value. Windows version 8.1 or later.
     * @param bool|null $value Value to set for the v8_1 property.
    */
    public function setV81(?bool $value): void {
        $this->getBackingStore()->set('v8_1', $value);
    }

}
