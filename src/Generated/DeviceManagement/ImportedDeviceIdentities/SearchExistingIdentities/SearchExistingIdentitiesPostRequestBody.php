<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ImportedDeviceIdentities\SearchExistingIdentities;

use Microsoft\Graph\Beta\Generated\Models\ImportedDeviceIdentity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SearchExistingIdentitiesPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<ImportedDeviceIdentity>|null $importedDeviceIdentities The importedDeviceIdentities property
    */
    private ?array $importedDeviceIdentities = null;
    
    /**
     * Instantiates a new searchExistingIdentitiesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchExistingIdentitiesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SearchExistingIdentitiesPostRequestBody {
        return new SearchExistingIdentitiesPostRequestBody();
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
        $o = $this;
        return  [
            'importedDeviceIdentities' => function (ParseNode $n) use ($o) { $o->setImportedDeviceIdentities($n->getCollectionOfObjectValues(array(ImportedDeviceIdentity::class, 'createFromDiscriminatorValue'))); },
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('importedDeviceIdentities', $this->importedDeviceIdentities);
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

}
