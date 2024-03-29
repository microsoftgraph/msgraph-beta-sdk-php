<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\ImportedAppleDeviceIdentities\ImportAppleDeviceIdentityList;

use Microsoft\Graph\Beta\Generated\Models\ImportedAppleDeviceIdentity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ImportAppleDeviceIdentityListPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ImportAppleDeviceIdentityListPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportAppleDeviceIdentityListPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImportAppleDeviceIdentityListPostRequestBody {
        return new ImportAppleDeviceIdentityListPostRequestBody();
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
            'importedAppleDeviceIdentities' => fn(ParseNode $n) => $o->setImportedAppleDeviceIdentities($n->getCollectionOfObjectValues([ImportedAppleDeviceIdentity::class, 'createFromDiscriminatorValue'])),
            'overwriteImportedDeviceIdentities' => fn(ParseNode $n) => $o->setOverwriteImportedDeviceIdentities($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the importedAppleDeviceIdentities property value. The importedAppleDeviceIdentities property
     * @return array<ImportedAppleDeviceIdentity>|null
    */
    public function getImportedAppleDeviceIdentities(): ?array {
        $val = $this->getBackingStore()->get('importedAppleDeviceIdentities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ImportedAppleDeviceIdentity::class);
            /** @var array<ImportedAppleDeviceIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'importedAppleDeviceIdentities'");
    }

    /**
     * Gets the overwriteImportedDeviceIdentities property value. The overwriteImportedDeviceIdentities property
     * @return bool|null
    */
    public function getOverwriteImportedDeviceIdentities(): ?bool {
        $val = $this->getBackingStore()->get('overwriteImportedDeviceIdentities');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'overwriteImportedDeviceIdentities'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('importedAppleDeviceIdentities', $this->getImportedAppleDeviceIdentities());
        $writer->writeBooleanValue('overwriteImportedDeviceIdentities', $this->getOverwriteImportedDeviceIdentities());
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
     * Sets the importedAppleDeviceIdentities property value. The importedAppleDeviceIdentities property
     * @param array<ImportedAppleDeviceIdentity>|null $value Value to set for the importedAppleDeviceIdentities property.
    */
    public function setImportedAppleDeviceIdentities(?array $value): void {
        $this->getBackingStore()->set('importedAppleDeviceIdentities', $value);
    }

    /**
     * Sets the overwriteImportedDeviceIdentities property value. The overwriteImportedDeviceIdentities property
     * @param bool|null $value Value to set for the overwriteImportedDeviceIdentities property.
    */
    public function setOverwriteImportedDeviceIdentities(?bool $value): void {
        $this->getBackingStore()->set('overwriteImportedDeviceIdentities', $value);
    }

}
