<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ImportedDeviceIdentities\ImportDeviceIdentityList;

use Microsoft\Graph\Beta\Generated\Models\ImportedDeviceIdentity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ImportDeviceIdentityListPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new importDeviceIdentityListPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportDeviceIdentityListPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImportDeviceIdentityListPostRequestBody {
        return new ImportDeviceIdentityListPostRequestBody();
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
            'importedDeviceIdentities' => fn(ParseNode $n) => $o->setImportedDeviceIdentities($n->getCollectionOfObjectValues([ImportedDeviceIdentity::class, 'createFromDiscriminatorValue'])),
            'overwriteImportedDeviceIdentities' => fn(ParseNode $n) => $o->setOverwriteImportedDeviceIdentities($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the importedDeviceIdentities property value. The importedDeviceIdentities property
     * @return array<ImportedDeviceIdentity>|null
    */
    public function getImportedDeviceIdentities(): ?array {
        return $this->getBackingStore()->get('importedDeviceIdentities');
    }

    /**
     * Gets the overwriteImportedDeviceIdentities property value. The overwriteImportedDeviceIdentities property
     * @return bool|null
    */
    public function getOverwriteImportedDeviceIdentities(): ?bool {
        return $this->getBackingStore()->get('overwriteImportedDeviceIdentities');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('importedDeviceIdentities', $this->getImportedDeviceIdentities());
        $writer->writeBooleanValue('overwriteImportedDeviceIdentities', $this->getOverwriteImportedDeviceIdentities());
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
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the importedDeviceIdentities property value. The importedDeviceIdentities property
     *  @param array<ImportedDeviceIdentity>|null $value Value to set for the importedDeviceIdentities property.
    */
    public function setImportedDeviceIdentities(?array $value): void {
        $this->getBackingStore()->set('importedDeviceIdentities', $value);
    }

    /**
     * Sets the overwriteImportedDeviceIdentities property value. The overwriteImportedDeviceIdentities property
     *  @param bool|null $value Value to set for the overwriteImportedDeviceIdentities property.
    */
    public function setOverwriteImportedDeviceIdentities(?bool $value): void {
        $this->getBackingStore()->set('overwriteImportedDeviceIdentities', $value);
    }

}
