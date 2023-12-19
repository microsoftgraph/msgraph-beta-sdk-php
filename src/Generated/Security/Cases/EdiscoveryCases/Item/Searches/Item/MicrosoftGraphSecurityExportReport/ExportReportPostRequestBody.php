<?php

namespace Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\MicrosoftGraphSecurityExportReport;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ExportReportPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new exportReportPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExportReportPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExportReportPostRequestBody {
        return new ExportReportPostRequestBody();
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
     * @return ExportReportPostRequestBody_additionalOptions|null
    */
    public function getAdditionalOptions(): ?ExportReportPostRequestBody_additionalOptions {
        $val = $this->getBackingStore()->get('additionalOptions');
        if (is_null($val) || $val instanceof ExportReportPostRequestBody_additionalOptions) {
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
     * @return ExportReportPostRequestBody_exportCriteria|null
    */
    public function getExportCriteria(): ?ExportReportPostRequestBody_exportCriteria {
        $val = $this->getBackingStore()->get('exportCriteria');
        if (is_null($val) || $val instanceof ExportReportPostRequestBody_exportCriteria) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportCriteria'");
    }

    /**
     * Gets the exportLocation property value. The exportLocation property
     * @return ExportReportPostRequestBody_exportLocation|null
    */
    public function getExportLocation(): ?ExportReportPostRequestBody_exportLocation {
        $val = $this->getBackingStore()->get('exportLocation');
        if (is_null($val) || $val instanceof ExportReportPostRequestBody_exportLocation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportLocation'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalOptions' => fn(ParseNode $n) => $o->setAdditionalOptions($n->getEnumValue(ExportReportPostRequestBody_additionalOptions::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'exportCriteria' => fn(ParseNode $n) => $o->setExportCriteria($n->getEnumValue(ExportReportPostRequestBody_exportCriteria::class)),
            'exportLocation' => fn(ParseNode $n) => $o->setExportLocation($n->getEnumValue(ExportReportPostRequestBody_exportLocation::class)),
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
        $writer->writeEnumValue('exportLocation', $this->getExportLocation());
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
     * @param ExportReportPostRequestBody_additionalOptions|null $value Value to set for the additionalOptions property.
    */
    public function setAdditionalOptions(?ExportReportPostRequestBody_additionalOptions $value): void {
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
     * @param ExportReportPostRequestBody_exportCriteria|null $value Value to set for the exportCriteria property.
    */
    public function setExportCriteria(?ExportReportPostRequestBody_exportCriteria $value): void {
        $this->getBackingStore()->set('exportCriteria', $value);
    }

    /**
     * Sets the exportLocation property value. The exportLocation property
     * @param ExportReportPostRequestBody_exportLocation|null $value Value to set for the exportLocation property.
    */
    public function setExportLocation(?ExportReportPostRequestBody_exportLocation $value): void {
        $this->getBackingStore()->set('exportLocation', $value);
    }

}
