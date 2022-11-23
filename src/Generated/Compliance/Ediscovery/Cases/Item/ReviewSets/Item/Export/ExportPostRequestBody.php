<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\ReviewSets\Item\Export;

use Microsoft\Graph\Beta\Generated\Models\Ediscovery\ExportFileStructure;
use Microsoft\Graph\Beta\Generated\Models\Ediscovery\ExportOptions;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ExportPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new exportPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExportPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExportPostRequestBody {
        return new ExportPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the azureBlobContainer property value. The azureBlobContainer property
     * @return string|null
    */
    public function getAzureBlobContainer(): ?string {
        return $this->getBackingStore()->get('azureBlobContainer');
    }

    /**
     * Gets the azureBlobToken property value. The azureBlobToken property
     * @return string|null
    */
    public function getAzureBlobToken(): ?string {
        return $this->getBackingStore()->get('azureBlobToken');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the exportOptions property value. The exportOptions property
     * @return ExportOptions|null
    */
    public function getExportOptions(): ?ExportOptions {
        return $this->getBackingStore()->get('exportOptions');
    }

    /**
     * Gets the exportStructure property value. The exportStructure property
     * @return ExportFileStructure|null
    */
    public function getExportStructure(): ?ExportFileStructure {
        return $this->getBackingStore()->get('exportStructure');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'azureBlobContainer' => fn(ParseNode $n) => $o->setAzureBlobContainer($n->getStringValue()),
            'azureBlobToken' => fn(ParseNode $n) => $o->setAzureBlobToken($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'exportOptions' => fn(ParseNode $n) => $o->setExportOptions($n->getEnumValue(ExportOptions::class)),
            'exportStructure' => fn(ParseNode $n) => $o->setExportStructure($n->getEnumValue(ExportFileStructure::class)),
            'outputName' => fn(ParseNode $n) => $o->setOutputName($n->getStringValue()),
        ];
    }

    /**
     * Gets the outputName property value. The outputName property
     * @return string|null
    */
    public function getOutputName(): ?string {
        return $this->getBackingStore()->get('outputName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('azureBlobContainer', $this->getAzureBlobContainer());
        $writer->writeStringValue('azureBlobToken', $this->getAzureBlobToken());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeEnumValue('exportOptions', $this->getExportOptions());
        $writer->writeEnumValue('exportStructure', $this->getExportStructure());
        $writer->writeStringValue('outputName', $this->getOutputName());
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
     * Sets the azureBlobContainer property value. The azureBlobContainer property
     *  @param string|null $value Value to set for the azureBlobContainer property.
    */
    public function setAzureBlobContainer(?string $value): void {
        $this->getBackingStore()->set('azureBlobContainer', $value);
    }

    /**
     * Sets the azureBlobToken property value. The azureBlobToken property
     *  @param string|null $value Value to set for the azureBlobToken property.
    */
    public function setAzureBlobToken(?string $value): void {
        $this->getBackingStore()->set('azureBlobToken', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the exportOptions property value. The exportOptions property
     *  @param ExportOptions|null $value Value to set for the exportOptions property.
    */
    public function setExportOptions(?ExportOptions $value): void {
        $this->getBackingStore()->set('exportOptions', $value);
    }

    /**
     * Sets the exportStructure property value. The exportStructure property
     *  @param ExportFileStructure|null $value Value to set for the exportStructure property.
    */
    public function setExportStructure(?ExportFileStructure $value): void {
        $this->getBackingStore()->set('exportStructure', $value);
    }

    /**
     * Sets the outputName property value. The outputName property
     *  @param string|null $value Value to set for the outputName property.
    */
    public function setOutputName(?string $value): void {
        $this->getBackingStore()->set('outputName', $value);
    }

}
