<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\Item\ImportedAppleDeviceIdentities\ImportAppleDeviceIdentityList;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ImportedAppleDeviceIdentity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ImportAppleDeviceIdentityListRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<ImportedAppleDeviceIdentity>|null $importedAppleDeviceIdentities  */
    private ?array $importedAppleDeviceIdentities = null;
    
    /** @var bool|null $overwriteImportedDeviceIdentities  */
    private ?bool $overwriteImportedDeviceIdentities = null;
    
    /**
     * Instantiates a new importAppleDeviceIdentityListRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportAppleDeviceIdentityListRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ImportAppleDeviceIdentityListRequestBody {
        return new ImportAppleDeviceIdentityListRequestBody();
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
            'importedAppleDeviceIdentities' => function (self $o, ParseNode $n) { $o->setImportedAppleDeviceIdentities($n->getCollectionOfObjectValues(ImportedAppleDeviceIdentity::class)); },
            'overwriteImportedDeviceIdentities' => function (self $o, ParseNode $n) { $o->setOverwriteImportedDeviceIdentities($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the importedAppleDeviceIdentities property value. 
     * @return array<ImportedAppleDeviceIdentity>|null
    */
    public function getImportedAppleDeviceIdentities(): ?array {
        return $this->importedAppleDeviceIdentities;
    }

    /**
     * Gets the overwriteImportedDeviceIdentities property value. 
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
        $writer->writeCollectionOfObjectValues('importedAppleDeviceIdentities', $this->importedAppleDeviceIdentities);
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
     * Sets the importedAppleDeviceIdentities property value. 
     *  @param array<ImportedAppleDeviceIdentity>|null $value Value to set for the importedAppleDeviceIdentities property.
    */
    public function setImportedAppleDeviceIdentities(?array $value ): void {
        $this->importedAppleDeviceIdentities = $value;
    }

    /**
     * Sets the overwriteImportedDeviceIdentities property value. 
     *  @param bool|null $value Value to set for the overwriteImportedDeviceIdentities property.
    */
    public function setOverwriteImportedDeviceIdentities(?bool $value ): void {
        $this->overwriteImportedDeviceIdentities = $value;
    }

}
