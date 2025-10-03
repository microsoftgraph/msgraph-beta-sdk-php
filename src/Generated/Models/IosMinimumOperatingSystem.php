<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Contains properties of the minimum operating system required for an iOS mobile app.
*/
class IosMinimumOperatingSystem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IosMinimumOperatingSystem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosMinimumOperatingSystem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosMinimumOperatingSystem {
        return new IosMinimumOperatingSystem();
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
            'v11_0' => fn(ParseNode $n) => $o->setV110($n->getBooleanValue()),
            'v12_0' => fn(ParseNode $n) => $o->setV120($n->getBooleanValue()),
            'v13_0' => fn(ParseNode $n) => $o->setV130($n->getBooleanValue()),
            'v14_0' => fn(ParseNode $n) => $o->setV140($n->getBooleanValue()),
            'v15_0' => fn(ParseNode $n) => $o->setV150($n->getBooleanValue()),
            'v16_0' => fn(ParseNode $n) => $o->setV160($n->getBooleanValue()),
            'v17_0' => fn(ParseNode $n) => $o->setV170($n->getBooleanValue()),
            'v18_0' => fn(ParseNode $n) => $o->setV180($n->getBooleanValue()),
            'v8_0' => fn(ParseNode $n) => $o->setV80($n->getBooleanValue()),
            'v9_0' => fn(ParseNode $n) => $o->setV90($n->getBooleanValue()),
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
     * Gets the v10_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 10.0 or later is required to install the app. If 'False', iOS Version 10.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
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
     * Gets the v11_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 11.0 or later is required to install the app. If 'False', iOS Version 11.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV110(): ?bool {
        $val = $this->getBackingStore()->get('v11_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v11_0'");
    }

    /**
     * Gets the v12_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 12.0 or later is required to install the app. If 'False', iOS Version 12.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV120(): ?bool {
        $val = $this->getBackingStore()->get('v12_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v12_0'");
    }

    /**
     * Gets the v13_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 13.0 or later is required to install the app. If 'False', iOS Version 13.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV130(): ?bool {
        $val = $this->getBackingStore()->get('v13_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v13_0'");
    }

    /**
     * Gets the v14_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 14.0 or later is required to install the app. If 'False', iOS Version 14.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV140(): ?bool {
        $val = $this->getBackingStore()->get('v14_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v14_0'");
    }

    /**
     * Gets the v15_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 15.0 or later is required to install the app. If 'False', iOS Version 15.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV150(): ?bool {
        $val = $this->getBackingStore()->get('v15_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v15_0'");
    }

    /**
     * Gets the v16_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 16.0 or later is required to install the app. If 'False', iOS Version 16.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV160(): ?bool {
        $val = $this->getBackingStore()->get('v16_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v16_0'");
    }

    /**
     * Gets the v17_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 17.0 or later is required to install the app. If 'False', iOS Version 17.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV170(): ?bool {
        $val = $this->getBackingStore()->get('v17_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v17_0'");
    }

    /**
     * Gets the v18_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 18.0 or later is required to install the app. If 'False', iOS Version 18.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV180(): ?bool {
        $val = $this->getBackingStore()->get('v18_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v18_0'");
    }

    /**
     * Gets the v8_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 8.0 or later is required to install the app. If 'False', iOS Version 8.0  is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
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
     * Gets the v9_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 9.0 or later is required to install the app. If 'False', iOS Version 9.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @return bool|null
    */
    public function getV90(): ?bool {
        $val = $this->getBackingStore()->get('v9_0');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'v9_0'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('v10_0', $this->getV100());
        $writer->writeBooleanValue('v11_0', $this->getV110());
        $writer->writeBooleanValue('v12_0', $this->getV120());
        $writer->writeBooleanValue('v13_0', $this->getV130());
        $writer->writeBooleanValue('v14_0', $this->getV140());
        $writer->writeBooleanValue('v15_0', $this->getV150());
        $writer->writeBooleanValue('v16_0', $this->getV160());
        $writer->writeBooleanValue('v17_0', $this->getV170());
        $writer->writeBooleanValue('v18_0', $this->getV180());
        $writer->writeBooleanValue('v8_0', $this->getV80());
        $writer->writeBooleanValue('v9_0', $this->getV90());
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
     * Sets the v10_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 10.0 or later is required to install the app. If 'False', iOS Version 10.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v10_0 property.
    */
    public function setV100(?bool $value): void {
        $this->getBackingStore()->set('v10_0', $value);
    }

    /**
     * Sets the v11_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 11.0 or later is required to install the app. If 'False', iOS Version 11.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v11_0 property.
    */
    public function setV110(?bool $value): void {
        $this->getBackingStore()->set('v11_0', $value);
    }

    /**
     * Sets the v12_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 12.0 or later is required to install the app. If 'False', iOS Version 12.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v12_0 property.
    */
    public function setV120(?bool $value): void {
        $this->getBackingStore()->set('v12_0', $value);
    }

    /**
     * Sets the v13_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 13.0 or later is required to install the app. If 'False', iOS Version 13.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v13_0 property.
    */
    public function setV130(?bool $value): void {
        $this->getBackingStore()->set('v13_0', $value);
    }

    /**
     * Sets the v14_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 14.0 or later is required to install the app. If 'False', iOS Version 14.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v14_0 property.
    */
    public function setV140(?bool $value): void {
        $this->getBackingStore()->set('v14_0', $value);
    }

    /**
     * Sets the v15_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 15.0 or later is required to install the app. If 'False', iOS Version 15.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v15_0 property.
    */
    public function setV150(?bool $value): void {
        $this->getBackingStore()->set('v15_0', $value);
    }

    /**
     * Sets the v16_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 16.0 or later is required to install the app. If 'False', iOS Version 16.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v16_0 property.
    */
    public function setV160(?bool $value): void {
        $this->getBackingStore()->set('v16_0', $value);
    }

    /**
     * Sets the v17_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 17.0 or later is required to install the app. If 'False', iOS Version 17.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v17_0 property.
    */
    public function setV170(?bool $value): void {
        $this->getBackingStore()->set('v17_0', $value);
    }

    /**
     * Sets the v18_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 18.0 or later is required to install the app. If 'False', iOS Version 18.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v18_0 property.
    */
    public function setV180(?bool $value): void {
        $this->getBackingStore()->set('v18_0', $value);
    }

    /**
     * Sets the v8_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 8.0 or later is required to install the app. If 'False', iOS Version 8.0  is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v8_0 property.
    */
    public function setV80(?bool $value): void {
        $this->getBackingStore()->set('v8_0', $value);
    }

    /**
     * Sets the v9_0 property value. Indicates the minimum iOS version support required for the managed device. When 'True', iOS with OS Version 9.0 or later is required to install the app. If 'False', iOS Version 9.0 is not the minimum version. Default value is False. Exactly one of the minimum operating system boolean values will be TRUE.
     * @param bool|null $value Value to set for the v9_0 property.
    */
    public function setV90(?bool $value): void {
        $this->getBackingStore()->set('v9_0', $value);
    }

}
