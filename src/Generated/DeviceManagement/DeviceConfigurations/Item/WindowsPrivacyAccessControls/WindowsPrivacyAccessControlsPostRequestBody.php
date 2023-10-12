<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurations\Item\WindowsPrivacyAccessControls;

use Microsoft\Graph\Beta\Generated\Models\WindowsPrivacyDataAccessControlItem;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WindowsPrivacyAccessControlsPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new windowsPrivacyAccessControlsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsPrivacyAccessControlsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsPrivacyAccessControlsPostRequestBody {
        return new WindowsPrivacyAccessControlsPostRequestBody();
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
            'windowsPrivacyAccessControls' => fn(ParseNode $n) => $o->setWindowsPrivacyAccessControls($n->getCollectionOfObjectValues([WindowsPrivacyDataAccessControlItem::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the windowsPrivacyAccessControls property value. The windowsPrivacyAccessControls property
     * @return array<WindowsPrivacyDataAccessControlItem>|null
    */
    public function getWindowsPrivacyAccessControls(): ?array {
        $val = $this->getBackingStore()->get('windowsPrivacyAccessControls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsPrivacyDataAccessControlItem::class);
            /** @var array<WindowsPrivacyDataAccessControlItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsPrivacyAccessControls'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('windowsPrivacyAccessControls', $this->getWindowsPrivacyAccessControls());
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
     * Sets the windowsPrivacyAccessControls property value. The windowsPrivacyAccessControls property
     * @param array<WindowsPrivacyDataAccessControlItem>|null $value Value to set for the windowsPrivacyAccessControls property.
    */
    public function setWindowsPrivacyAccessControls(?array $value): void {
        $this->getBackingStore()->set('windowsPrivacyAccessControls', $value);
    }

}
