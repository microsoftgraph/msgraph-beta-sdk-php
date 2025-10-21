<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceAppManagement\VppTokens\Item\RevokeLicenses;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RevokeLicensesPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RevokeLicensesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RevokeLicensesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RevokeLicensesPostRequestBody {
        return new RevokeLicensesPostRequestBody();
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
            'notifyManagedDevices' => fn(ParseNode $n) => $o->setNotifyManagedDevices($n->getBooleanValue()),
            'revokeUntrackedLicenses' => fn(ParseNode $n) => $o->setRevokeUntrackedLicenses($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the notifyManagedDevices property value. The notifyManagedDevices property
     * @return bool|null
    */
    public function getNotifyManagedDevices(): ?bool {
        $val = $this->getBackingStore()->get('notifyManagedDevices');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notifyManagedDevices'");
    }

    /**
     * Gets the revokeUntrackedLicenses property value. The revokeUntrackedLicenses property
     * @return bool|null
    */
    public function getRevokeUntrackedLicenses(): ?bool {
        $val = $this->getBackingStore()->get('revokeUntrackedLicenses');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'revokeUntrackedLicenses'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('notifyManagedDevices', $this->getNotifyManagedDevices());
        $writer->writeBooleanValue('revokeUntrackedLicenses', $this->getRevokeUntrackedLicenses());
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
     * Sets the notifyManagedDevices property value. The notifyManagedDevices property
     * @param bool|null $value Value to set for the notifyManagedDevices property.
    */
    public function setNotifyManagedDevices(?bool $value): void {
        $this->getBackingStore()->set('notifyManagedDevices', $value);
    }

    /**
     * Sets the revokeUntrackedLicenses property value. The revokeUntrackedLicenses property
     * @param bool|null $value Value to set for the revokeUntrackedLicenses property.
    */
    public function setRevokeUntrackedLicenses(?bool $value): void {
        $this->getBackingStore()->set('revokeUntrackedLicenses', $value);
    }

}
