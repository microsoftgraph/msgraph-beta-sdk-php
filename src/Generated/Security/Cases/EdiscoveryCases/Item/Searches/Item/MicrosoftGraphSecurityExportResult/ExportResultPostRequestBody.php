<?php

namespace Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\MicrosoftGraphSecurityExportResult;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ExportResultPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new exportResultPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExportResultPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExportResultPostRequestBody {
        return new ExportResultPostRequestBody();
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
     * Gets the additionalOptions property value. The additionalOptions property
     * @return ExportResultPostRequestBody_additionalOptions|null
    */
    public function getAdditionalOptions(): ?ExportResultPostRequestBody_additionalOptions {
        $val = $this->getBackingStore()->get('additionalOptions');
        if (is_null($val) || $val instanceof ExportResultPostRequestBody_additionalOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalOptions'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
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
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the exportCriteria property value. The exportCriteria property
     * @return ExportResultPostRequestBody_exportCriteria|null
    */
    public function getExportCriteria(): ?ExportResultPostRequestBody_exportCriteria {
        $val = $this->getBackingStore()->get('exportCriteria');
        if (is_null($val) || $val instanceof ExportResultPostRequestBody_exportCriteria) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportCriteria'");
    }

    /**
     * Gets the exportFormat property value. The exportFormat property
     * @return ExportResultPostRequestBody_exportFormat|null
    */
    public function getExportFormat(): ?ExportResultPostRequestBody_exportFormat {
        $val = $this->getBackingStore()->get('exportFormat');
        if (is_null($val) || $val instanceof ExportResultPostRequestBody_exportFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportFormat'");
    }

    /**
     * Gets the exportLocation property value. The exportLocation property
     * @return ExportResultPostRequestBody_exportLocation|null
    */
    public function getExportLocation(): ?ExportResultPostRequestBody_exportLocation {
        $val = $this->getBackingStore()->get('exportLocation');
        if (is_null($val) || $val instanceof ExportResultPostRequestBody_exportLocation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportLocation'");
    }

    /**
     * Gets the exportSingleItems property value. The exportSingleItems property
     * @return bool|null
    */
    public function getExportSingleItems(): ?bool {
        $val = $this->getBackingStore()->get('exportSingleItems');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportSingleItems'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalOptions' => fn(ParseNode $n) => $o->setAdditionalOptions($n->getEnumValue(ExportResultPostRequestBody_additionalOptions::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'exportCriteria' => fn(ParseNode $n) => $o->setExportCriteria($n->getEnumValue(ExportResultPostRequestBody_exportCriteria::class)),
            'exportFormat' => fn(ParseNode $n) => $o->setExportFormat($n->getEnumValue(ExportResultPostRequestBody_exportFormat::class)),
            'exportLocation' => fn(ParseNode $n) => $o->setExportLocation($n->getEnumValue(ExportResultPostRequestBody_exportLocation::class)),
            'exportSingleItems' => fn(ParseNode $n) => $o->setExportSingleItems($n->getBooleanValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('additionalOptions', $this->getAdditionalOptions());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('exportCriteria', $this->getExportCriteria());
        $writer->writeEnumValue('exportFormat', $this->getExportFormat());
        $writer->writeEnumValue('exportLocation', $this->getExportLocation());
        $writer->writeBooleanValue('exportSingleItems', $this->getExportSingleItems());
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
     * Sets the additionalOptions property value. The additionalOptions property
     * @param ExportResultPostRequestBody_additionalOptions|null $value Value to set for the additionalOptions property.
    */
    public function setAdditionalOptions(?ExportResultPostRequestBody_additionalOptions $value): void {
        $this->getBackingStore()->set('additionalOptions', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the exportCriteria property value. The exportCriteria property
     * @param ExportResultPostRequestBody_exportCriteria|null $value Value to set for the exportCriteria property.
    */
    public function setExportCriteria(?ExportResultPostRequestBody_exportCriteria $value): void {
        $this->getBackingStore()->set('exportCriteria', $value);
    }

    /**
     * Sets the exportFormat property value. The exportFormat property
     * @param ExportResultPostRequestBody_exportFormat|null $value Value to set for the exportFormat property.
    */
    public function setExportFormat(?ExportResultPostRequestBody_exportFormat $value): void {
        $this->getBackingStore()->set('exportFormat', $value);
    }

    /**
     * Sets the exportLocation property value. The exportLocation property
     * @param ExportResultPostRequestBody_exportLocation|null $value Value to set for the exportLocation property.
    */
    public function setExportLocation(?ExportResultPostRequestBody_exportLocation $value): void {
        $this->getBackingStore()->set('exportLocation', $value);
    }

    /**
     * Sets the exportSingleItems property value. The exportSingleItems property
     * @param bool|null $value Value to set for the exportSingleItems property.
    */
    public function setExportSingleItems(?bool $value): void {
        $this->getBackingStore()->set('exportSingleItems', $value);
    }

}
