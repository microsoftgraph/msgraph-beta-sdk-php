<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrinterUsageSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $completedJobCount The completedJobCount property
    */
    private ?int $completedJobCount = null;
    
    /**
     * @var int|null $incompleteJobCount The incompleteJobCount property
    */
    private ?int $incompleteJobCount = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DirectoryObject|null $printer The printer property
    */
    private ?DirectoryObject $printer = null;
    
    /**
     * @var string|null $printerDisplayName The printerDisplayName property
    */
    private ?string $printerDisplayName = null;
    
    /**
     * @var string|null $printerId The printerId property
    */
    private ?string $printerId = null;
    
    /**
     * @var string|null $printerManufacturer The printerManufacturer property
    */
    private ?string $printerManufacturer = null;
    
    /**
     * @var string|null $printerModel The printerModel property
    */
    private ?string $printerModel = null;
    
    /**
     * Instantiates a new printerUsageSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.printerUsageSummary');
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the completedJobCount property value. The completedJobCount property
     * @return int|null
    */
    public function getCompletedJobCount(): ?int {
        return $this->completedJobCount;
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
        return $this->incompleteJobCount;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the printer property value. The printer property
     * @return DirectoryObject|null
    */
    public function getPrinter(): ?DirectoryObject {
        return $this->printer;
    }

    /**
     * Gets the printerDisplayName property value. The printerDisplayName property
     * @return string|null
    */
    public function getPrinterDisplayName(): ?string {
        return $this->printerDisplayName;
    }

    /**
     * Gets the printerId property value. The printerId property
     * @return string|null
    */
    public function getPrinterId(): ?string {
        return $this->printerId;
    }

    /**
     * Gets the printerManufacturer property value. The printerManufacturer property
     * @return string|null
    */
    public function getPrinterManufacturer(): ?string {
        return $this->printerManufacturer;
    }

    /**
     * Gets the printerModel property value. The printerModel property
     * @return string|null
    */
    public function getPrinterModel(): ?string {
        return $this->printerModel;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('completedJobCount', $this->completedJobCount);
        $writer->writeIntegerValue('incompleteJobCount', $this->incompleteJobCount);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('printer', $this->printer);
        $writer->writeStringValue('printerDisplayName', $this->printerDisplayName);
        $writer->writeStringValue('printerId', $this->printerId);
        $writer->writeStringValue('printerManufacturer', $this->printerManufacturer);
        $writer->writeStringValue('printerModel', $this->printerModel);
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
     * Sets the completedJobCount property value. The completedJobCount property
     *  @param int|null $value Value to set for the completedJobCount property.
    */
    public function setCompletedJobCount(?int $value ): void {
        $this->completedJobCount = $value;
    }

    /**
     * Sets the incompleteJobCount property value. The incompleteJobCount property
     *  @param int|null $value Value to set for the incompleteJobCount property.
    */
    public function setIncompleteJobCount(?int $value ): void {
        $this->incompleteJobCount = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the printer property value. The printer property
     *  @param DirectoryObject|null $value Value to set for the printer property.
    */
    public function setPrinter(?DirectoryObject $value ): void {
        $this->printer = $value;
    }

    /**
     * Sets the printerDisplayName property value. The printerDisplayName property
     *  @param string|null $value Value to set for the printerDisplayName property.
    */
    public function setPrinterDisplayName(?string $value ): void {
        $this->printerDisplayName = $value;
    }

    /**
     * Sets the printerId property value. The printerId property
     *  @param string|null $value Value to set for the printerId property.
    */
    public function setPrinterId(?string $value ): void {
        $this->printerId = $value;
    }

    /**
     * Sets the printerManufacturer property value. The printerManufacturer property
     *  @param string|null $value Value to set for the printerManufacturer property.
    */
    public function setPrinterManufacturer(?string $value ): void {
        $this->printerManufacturer = $value;
    }

    /**
     * Sets the printerModel property value. The printerModel property
     *  @param string|null $value Value to set for the printerModel property.
    */
    public function setPrinterModel(?string $value ): void {
        $this->printerModel = $value;
    }

}
