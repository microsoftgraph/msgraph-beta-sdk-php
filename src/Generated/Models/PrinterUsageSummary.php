<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PrinterUsageSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new printerUsageSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrinterUsageSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrinterUsageSummary {
        return new PrinterUsageSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * Gets the completedJobCount property value. The completedJobCount property
     * @return int|null
    */
    public function getCompletedJobCount(): ?int {
        return $this->getBackingStore()->get('completedJobCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'completedJobCount' => fn(ParseNode $n) => $o->setCompletedJobCount($n->getIntegerValue()),
            'incompleteJobCount' => fn(ParseNode $n) => $o->setIncompleteJobCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'printer' => fn(ParseNode $n) => $o->setPrinter($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'printerDisplayName' => fn(ParseNode $n) => $o->setPrinterDisplayName($n->getStringValue()),
            'printerId' => fn(ParseNode $n) => $o->setPrinterId($n->getStringValue()),
            'printerManufacturer' => fn(ParseNode $n) => $o->setPrinterManufacturer($n->getStringValue()),
            'printerModel' => fn(ParseNode $n) => $o->setPrinterModel($n->getStringValue()),
        ];
    }

    /**
     * Gets the incompleteJobCount property value. The incompleteJobCount property
     * @return int|null
    */
    public function getIncompleteJobCount(): ?int {
        return $this->getBackingStore()->get('incompleteJobCount');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the printer property value. The printer property
     * @return DirectoryObject|null
    */
    public function getPrinter(): ?DirectoryObject {
        return $this->getBackingStore()->get('printer');
    }

    /**
     * Gets the printerDisplayName property value. The printerDisplayName property
     * @return string|null
    */
    public function getPrinterDisplayName(): ?string {
        return $this->getBackingStore()->get('printerDisplayName');
    }

    /**
     * Gets the printerId property value. The printerId property
     * @return string|null
    */
    public function getPrinterId(): ?string {
        return $this->getBackingStore()->get('printerId');
    }

    /**
     * Gets the printerManufacturer property value. The printerManufacturer property
     * @return string|null
    */
    public function getPrinterManufacturer(): ?string {
        return $this->getBackingStore()->get('printerManufacturer');
    }

    /**
     * Gets the printerModel property value. The printerModel property
     * @return string|null
    */
    public function getPrinterModel(): ?string {
        return $this->getBackingStore()->get('printerModel');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('completedJobCount', $this->getCompletedJobCount());
        $writer->writeIntegerValue('incompleteJobCount', $this->getIncompleteJobCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('printer', $this->getPrinter());
        $writer->writeStringValue('printerDisplayName', $this->getPrinterDisplayName());
        $writer->writeStringValue('printerId', $this->getPrinterId());
        $writer->writeStringValue('printerManufacturer', $this->getPrinterManufacturer());
        $writer->writeStringValue('printerModel', $this->getPrinterModel());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the completedJobCount property value. The completedJobCount property
     * @param int|null $value Value to set for the completedJobCount property.
    */
    public function setCompletedJobCount(?int $value): void {
        $this->getBackingStore()->set('completedJobCount', $value);
    }

    /**
     * Sets the incompleteJobCount property value. The incompleteJobCount property
     * @param int|null $value Value to set for the incompleteJobCount property.
    */
    public function setIncompleteJobCount(?int $value): void {
        $this->getBackingStore()->set('incompleteJobCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the printer property value. The printer property
     * @param DirectoryObject|null $value Value to set for the printer property.
    */
    public function setPrinter(?DirectoryObject $value): void {
        $this->getBackingStore()->set('printer', $value);
    }

    /**
     * Sets the printerDisplayName property value. The printerDisplayName property
     * @param string|null $value Value to set for the printerDisplayName property.
    */
    public function setPrinterDisplayName(?string $value): void {
        $this->getBackingStore()->set('printerDisplayName', $value);
    }

    /**
     * Sets the printerId property value. The printerId property
     * @param string|null $value Value to set for the printerId property.
    */
    public function setPrinterId(?string $value): void {
        $this->getBackingStore()->set('printerId', $value);
    }

    /**
     * Sets the printerManufacturer property value. The printerManufacturer property
     * @param string|null $value Value to set for the printerManufacturer property.
    */
    public function setPrinterManufacturer(?string $value): void {
        $this->getBackingStore()->set('printerManufacturer', $value);
    }

    /**
     * Sets the printerModel property value. The printerModel property
     * @param string|null $value Value to set for the printerModel property.
    */
    public function setPrinterModel(?string $value): void {
        $this->getBackingStore()->set('printerModel', $value);
    }

}
