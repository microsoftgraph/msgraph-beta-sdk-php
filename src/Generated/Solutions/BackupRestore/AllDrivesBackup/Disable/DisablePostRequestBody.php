<?php

namespace Microsoft\\Graph\\Beta\\Generated\Solutions\BackupRestore\AllDrivesBackup\Disable;

use Microsoft\\Graph\\Beta\\Generated\Models\FullServiceBackupDisableMode;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DisablePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DisablePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DisablePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DisablePostRequestBody {
        return new DisablePostRequestBody();
    }

    /**
     * Gets the actionOnExistingPolicy property value. The actionOnExistingPolicy property
     * @return FullServiceBackupDisableMode|null
    */
    public function getActionOnExistingPolicy(): ?FullServiceBackupDisableMode {
        $val = $this->getBackingStore()->get('actionOnExistingPolicy');
        if (is_null($val) || $val instanceof FullServiceBackupDisableMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionOnExistingPolicy'");
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
            'actionOnExistingPolicy' => fn(ParseNode $n) => $o->setActionOnExistingPolicy($n->getEnumValue(FullServiceBackupDisableMode::class)),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('actionOnExistingPolicy', $this->getActionOnExistingPolicy());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionOnExistingPolicy property value. The actionOnExistingPolicy property
     * @param FullServiceBackupDisableMode|null $value Value to set for the actionOnExistingPolicy property.
    */
    public function setActionOnExistingPolicy(?FullServiceBackupDisableMode $value): void {
        $this->getBackingStore()->set('actionOnExistingPolicy', $value);
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

}
