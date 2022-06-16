<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ImportedDeviceIdentities\ImportDeviceIdentityList;

use Microsoft\Graph\Beta\Generated\Models\ImportedDeviceIdentity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ImportDeviceIdentityListRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<ImportedDeviceIdentity>|null $importedDeviceIdentities The importedDeviceIdentities property */
    private ?array $importedDeviceIdentities = null;
    
    /** @var bool|null $overwriteImportedDeviceIdentities The overwriteImportedDeviceIdentities property */
    private ?bool $overwriteImportedDeviceIdentities = null;
    
    /**
     * Instantiates a new importDeviceIdentityListRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportDeviceIdentityListRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ImportDeviceIdentityListRequestBody {
        return new ImportDeviceIdentityListRequestBody();
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
        return  [
            'importedDeviceIdentities' => function (self $o, ParseNode $n) { $o->setImportedDeviceIdentities($n->getCollectionOfObjectValues(ImportedDeviceIdentity::class)); },
            'overwriteImportedDeviceIdentities' => function (self $o, ParseNode $n) { $o->setOverwriteImportedDeviceIdentities($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the importedDeviceIdentities property value. The importedDeviceIdentities property
     * @return array<ImportedDeviceIdentity>|null
    */
    public function getImportedDeviceIdentities(): ?array {
        return $this->importedDeviceIdentities;
    }

    /**
     * Gets the overwriteImportedDeviceIdentities property value. The overwriteImportedDeviceIdentities property
     * @return bool|null
    */
    public function getOverwriteImportedDeviceIdentities(): ?bool {
        return $this->overwriteImportedDeviceIdentities;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('importedDeviceIdentities', $this->importedDeviceIdentities);
        $writer->writeBooleanValue('overwriteImportedDeviceIdentities', $this->overwriteImportedDeviceIdentities);
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
     * Sets the importedDeviceIdentities property value. The importedDeviceIdentities property
     *  @param array<ImportedDeviceIdentity>|null $value Value to set for the importedDeviceIdentities property.
    */
    public function setImportedDeviceIdentities(?array $value ): void {
        $this->importedDeviceIdentities = $value;
    }

    /**
     * Sets the overwriteImportedDeviceIdentities property value. The overwriteImportedDeviceIdentities property
     *  @param bool|null $value Value to set for the overwriteImportedDeviceIdentities property.
    */
    public function setOverwriteImportedDeviceIdentities(?bool $value ): void {
        $this->overwriteImportedDeviceIdentities = $value;
    }

}
